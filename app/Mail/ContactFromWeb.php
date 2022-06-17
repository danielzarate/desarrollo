<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFromWeb extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $message;
    protected $phone;


    public function __construct($name, $email, $message, $phone)
    {
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->message=$message;
    }


    public function build()
    {
        return $this->from($this->email)
                ->subject('Correo de Desarrolloweb.us')
                ->view('emails.contactFromWeb')
                -> with([
                    'username'=>$this->name,
                    'usermessage'=>$this->message,
                    'userphone'=>$this->phone
                ]);
    }
}
