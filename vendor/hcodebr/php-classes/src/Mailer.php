<?php

namespace Hcode;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Rain\tpl;

class Mailer
{
    private $mail;

    // const USERNAME = "diego@diego.com";
    public function __construct($toAddress, $toNam, $subject, $tplName, $data = array())
    {
        $config = array(
            "tpl_dir" => $_SERVER["DOCUMENT_ROOT"] . "/views/email/",
            "cache_dir" => $_SERVER["DOCUMENT_ROOT"] . "/views-cache/",
            "debug" => false
        );

        Tpl::configure($config);
        $tpl = new Tpl();

        foreach ($data as $key => $value){
            $tpl->assign($key, $value);
        }
        $html = $tpl->draw($tplName, true);

        $this->mail = new \PHPMailer;
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.mailtrap.io';
        $this->mail->SMTPAuth = true;
        $this->mail->Port = 2525;
        $this->mail->Username = 'ae84c80f834c65';
        $this->mail->Password = '0acad0b9b35452';
        $this->mail->setFrom("ae84c80f834c65", "Diego");
        $this->mail->addAddress("$toAddress", $toNam);
        $this->mail->Subject = $subject;
        $this->mail->msgHTML($html);
    }

    public function send(){
        return $this->mail->send();
    }
}