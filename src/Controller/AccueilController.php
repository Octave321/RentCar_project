<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route; 
use App\Entity\CommentPost;
use Doctrine\ORM\Query;
use Doctrine\ORM\EntityManager;

class AccueilController extends AbstractController 
{

    /**
     * @Route("/", name="accueil")
     */

    public function index(): Response 
    {   
        
        $entityManager = $this->getDoctrine()->getManager();
        $qb = $entityManager->createQueryBuilder();
        $qb->select('u')
           ->from(CommentPost::class, 'u')
           ->orderBy('u.id', 'ASC')
           ->setMaxResults(5);

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'CommentPost' => $qb->getQuery()->getResult(Query::HYDRATE_ARRAY)
        ]);
    }
}
 