<?php namespace Casadepedra\Services\Mailers;

use Casadepedra\Services\Validators\WebsiteContactFormValidator;
use Config;
use Lang;

class WebsiteContactMailer extends Mailer {

    protected $validator;

    public function __construct(WebsiteContactFormValidator $validator)
    {
        $this->validator = $validator;
    }

    public function send($data)
    {
        if ($this->validator->passes()){
            $subject = Lang::get('messages.contact_form_received');
            $view = 'emails.website.contact';
            $from = Config::get('mail.from');

            return $this->sendTo($from['address'], $subject, $view, $data);
        } else{
            return 'NOK';
        }
        
    }
}