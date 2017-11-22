<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FinishTask extends Mailable
{
    use Queueable, SerializesModels;

    protected $task, $proteins;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($task,$proteins)
    {
      $this->task = $task;
      $this->proteins = $proteins;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('emails.finish_task',[
        'task' => $this->task,
        'proteins' => $this->proteins
      ]);
    }
}
