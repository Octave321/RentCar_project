<?php

namespace App\Service;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;


class Mailer{ 

private $mailerInterface;

    public function __construct(MailerInterface $mailerInterface){

        $this->mailerInterface = $mailerInterface;

    }

    public function sendMail($adress){
        $email = new Email();
        $email -> from("contact@prestigecar.fr")
            ->to($adress)
            ->html("<h1>Bonjour</h1><br><p>Vous venez de regarder nos offres, êtes-vous intéressé? Souhaitez-vous plus d'informations?</p>");
        
        $this->mailerInterface->send($email);


        return "mail send";
    }

}

?>

