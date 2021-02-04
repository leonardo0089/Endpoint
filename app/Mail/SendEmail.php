<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Mailgun\Mailgun;
use App\User;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $path;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $caminho)
    {
        $this->user = $user;
        $this->path = $caminho;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = User::orderBy('created_at', 'desc')->first();
        $curriculo = \str_replace('/',DIRECTORY_SEPARATOR,$user->curriculo);


        return $this->from('leonardmagnon@gmail.com')
        ->view('email')
        ->attach($curriculo,
        [
            'mime' => "application/pdf",
            'mime' => "text/plain",
            'mime' => "inode/x-empty",
            'mime' => "application/msword",
            'mime' => "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        ])
        ->with(
            [
               'data' =>  $user
            ]);
    }
}
