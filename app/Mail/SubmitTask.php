<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmitTask extends Mailable
{
    use Queueable, SerializesModels;

    protected $task_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($task_id)
    {
      $this->task_id = $task_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.submit_task',[
          'task_id' => $this->task_id
        ]);
    }
}
