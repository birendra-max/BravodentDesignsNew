<?php

namespace App\Libraries;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailServices
{
    protected $mail;
    protected $config;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->config = config('Email');

        //Server Setting
        $this->mail->isSMTP();
        $this->mail->Host       = $this->config->SMTPHost;
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = $this->config->SMTPUser;
        $this->mail->Password   = $this->config->SMTPPass;
        $this->mail->SMTPSecure = $this->config->SMTPCrypto;
        $this->mail->Port       = $this->config->SMTPPort;

        // Sender settings
        $this->mail->setFrom($this->config->fromEmail, $this->config->fromName);
        $this->mail->isHTML(true);
    }

    public function sendEmail($to, $name, $subject, $html, $text = '')
    {
        try {
            // Recipient
            $this->mail->addAddress($to, $name);

            // Content
            $this->mail->Subject = $subject;
            $this->mail->Body    = $html;
            $this->mail->AltBody = $text;

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            log_message('error', 'Mailer Error: ' . $this->mail->ErrorInfo);
            return false;
        }
    }
}
