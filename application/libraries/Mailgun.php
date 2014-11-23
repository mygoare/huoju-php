<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mailgun
{
    public function __construct()
    {
        require FCPATH."/vendor/autoload.php";

        # Instantiate the client.
        $this->mgClient = new Mailgun\Mailgun('key-f0d4020affd59976570e408bd007d970');
        $this->domain = "mail.huoju.co";
    }

    public function welcome($email)
    {
        # Make the call to the client.
        $result = $this->mgClient->sendMessage($this->domain, array(
            'from'    => 'Huoju no-reply <no-reply@mail.huoju.co>',
            'to'      => $email,
            'subject' => '欢迎加入伙聚',
            'text'    => '欢迎！'
        ));

        return $result;
    }
}

?>