<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FinishTask extends Mailable
{
    use Queueable, SerializesModels;

    protected $task;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($task)
    {
      $this->task = $task;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->markdown('emails.finish',[
        'task' => $this->task
      ]);
    }
}
