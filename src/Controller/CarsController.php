<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarsController extends AbstractController
{

      /**
     * @Route("/location-audi", name="audi")
     */ 
    public function audi(): Response
    {
        return $this->render('cars/audi.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-mercedes", name="mercedes")
     */ 
    public function mercedes(): Response
    {
        return $this->render('cars/mercedes.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

       /**
     * @Route("/location-bmw", name="bmw")
     */ 
    public function bmw(): Response
    {
        return $this->render('cars/bmw.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-aston-martin", name="aston")
     */ 
    public function aston(): Response
    {
        return $this->render('cars/aston.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-maserati", name="maserati")
     */ 
    public function maserati(): Response
    {
        return $this->render('cars/maserati.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-porsche", name="porsche")
     */ 
    public function porsche(): Response
    {
        return $this->render('cars/porsche.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-lamborghini", name="lamborghini")
     */ 
    public function lamborghini(): Response
    {
        return $this->render('cars/lamborghini.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-ferrari", name="ferrari")
     */ 
    public function ferrari(): Response
    {
        return $this->render('cars/ferrari.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-bentley", name="bentley")
     */ 
    public function bentley(): Response
    {
        return $this->render('cars/bentley.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-rolls-royce", name="rolls")
     */ 
    public function rolls(): Response
    {
        return $this->render('cars/rolls.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-maclaren", name="maclaren")
     */ 
    public function maclaren(): Response
    {
        return $this->render('cars/maclaren.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-jaguar", name="jaguar")
     */ 
    public function jaguar(): Response
    {
        return $this->render('cars/jaguar.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-land_rover", name="land_rover")
     */ 
    public function land_rover(): Response
    {
        return $this->render('cars/land_rover.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-ford", name="ford")
     */ 
    public function ford(): Response
    {
        return $this->render('cars/ford.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }

     /**
     * @Route("/location-bugatti", name="bugatti")
     */ 
    public function bugatti(): Response
    {
        return $this->render('cars/bugatti.html.twig', [
            'controller_name' => 'CarsController',
        ]);
    }
}
