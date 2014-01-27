<?php namespace Casadepedra\Services\Mailers;

use Mail;

abstract class Mailer{

    public function sendTo($email, $replyToEmail, $subject, $view, $data = array())
    {
        Mail::queue($view, $data, function($message) use ($email, $subject, $data, $replyToEmail){
            $message->to($email)
                    ->replyTo($replyToEmail)
                    ->subject($subject);
        });
    }

}