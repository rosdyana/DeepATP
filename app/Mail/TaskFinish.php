<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TaskFinish extends Mailable
{
    use Queueable, SerializesModels;

    private $task;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\App\Models\Task $task)
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
        $task = $this->task;
        return $this->markdown('emails.finish',compact('task'));
    }
}
