<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmitTask extends Mailable
{
    use Queueable, SerializesModels;

    protected $id;
    protected $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id,$name)
    {
      $this->id = $id;
      $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.submit',[
          'id' => $this->id,
          'name' => $this->name
        ]);
    }
}
