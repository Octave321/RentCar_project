<?php

namespace App\Controller;

use App\Service\Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function mail1(Mailer $mailer): Response
    {
        var_dump($mailer->sendMail("oct.b@hotmail.com"));
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    /**
     * @Route("/user/offre", name="offre")
     */
    // public function offre(): Response
    // {
    //     return $this->render('user/offre.html.twig', [
    //         'title' => 'offre',
          
    //     ]);
    // }

    public function mail2(Mailer $mailer): Response
    {
        var_dump($mailer->sendMail("oct.b@hotmail.com"));
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    /**
     * @Route("/formule", name="formule")
     */
    public function formule(): Response
    {
        return $this->render('user/formule.html.twig', [
            'title' => 'formule',
        ]);
    }


    /**
     * @Route("/commentaire", name="commentaire")
     */
    public function commentaire(): Response
    {
        return $this->render('user/commentaire.html.twig', [
            'commentaire' => 'text',
            'author' => 'name',
        ]);
    }
}
