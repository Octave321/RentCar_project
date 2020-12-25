<?php

namespace App\Controller;

use App\Service\Mailer;
use App\Entity\User;
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
    public function offre(): Response
    {
        return $this->render('user/offre.html.twig', [
            'title' => 'offre',
          
        ]);
    }

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
     * @Route("/compte", name="compte")
     */

    // public function update(int $id): Response
    // {
    //     $entityManager = $this->getDoctrine()->getManager();
    //     $user = $entityManager->getRepository(User::class)->find($id);

    //     if (!$user) {
    //         throw $this->createNotFoundException(
    //             'No product found for id '.$id
    //         );
    //     }

    //     $user->setName('New Name!');
    //     $entityManager->flush();

    //     $user->setEmail('New Email!');
    //     $entityManager->flush();

    //     $user->setPassword('New Password!');
    //     $entityManager->flush();

    //     return $this->redirectToRoute('user', [
    //         'id' => $user->getId()
    //     ]);
    // }

    public function compte(): Response
    {
        return $this->render('user/compte.html.twig', [
            'title' => 'formule',
        ]);
    }
}
