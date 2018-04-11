<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Prediction implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;

    private $task;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(\App\Models\Task $task)
    {
        $this->task = $task;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        chdir(storage_path('work'));
        
        foreach ($this->task->details as $task) {
            \File::put('data/data.fasta',$task->name.PHP_EOL.$task->sequence);
            passthru('blastpgp -a 4 -i data/data.fasta -d /home/semmy/blastLinux/blast-2.2.26/db/nr -j 2 -Q data/data.pssm');
            // passthru('psiblast -num_iterations '.env('PSSM_NUM_ITERATIONS',2).' -num_threads '.env('PSSM_NUM_THREAD',4).' -db '.env('PSSM_DB_PATH').' -in_msa data.fasta -out_ascii_pssm data.pssm');
            passthru('python pssm_generated_csv.py data/data.pssm data/data.csv');
            passthru('python deepgtp_load_model.py deepgtp_model.json deepgtp_model.h5 data/data.csv data/data.out');

            $task->result = str_replace(array("\r\n", "\n", "\r"),'',\File::get('data/data.out'));
            $task->status = 'Finished';
            $task->save();

            \File::delete(['data/data.fasta', 'data/data.pssm','data/data.csv','data/data.out']);
        }

        $this->task->status = 'Finished';
        $this->task->save();
        
        \Mail::to($this->task->email)->send(new \App\Mail\TaskFinish($this->task));
    }
}
