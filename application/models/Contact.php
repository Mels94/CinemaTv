<?php

namespace application\models;

use application\components\Validator;

class Contact
{
    private $name;
    private $email;
    private $subject;
    private $message;

    public function __construct($post)
    {
        if (isset($post['name']) && isset($post['subject']) && isset($post['message'])){
            $this->name = $post['name'];
            $this->subject = $post['subject'];
            $this->message = $post['message'];
        }
        if (isset($post['email'])){
            $this->email = $post['email'];
        }
    }

    protected function rules()
    {
        return [
            'required' => [
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'message' => $this->message
            ],
            'name' => [
                'name' => $this->name,
                'subject' => $this->subject
            ],
            'email' => [
                'email' => $this->email
            ]
        ];
    }

    public function validate(){
        $validator = new Validator($this->rules());
        if (!empty($validator->validate())){
            return $validator->validate();
        }
        return [];
    }


    public function sendEmail(){
        if ($this->validate() == []){
            $to = "cinematv@films-gyumri.tk";
            $subject = "$this->subject";
            $message = "$this->message";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: '."<$this->email>"."\r\n";
            if (mail($to, $subject, $message, $headers)){
                return true;
            }
        }
        return false;
    }

}