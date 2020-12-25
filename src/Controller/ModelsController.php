<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModelsController extends AbstractController
{
    /**
     * @Route("/audi-r8", name="audi_r8")
     */
    public function r8(): Response
    {
        return $this->render('models/audi_r8.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }


      /**
     * @Route("/models", name="models")
     */
    public function rs3(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function db11(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function dbs(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }




      /**
     * @Route("/models", name="models")
     */
    public function bentayga (): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function bentley_gtc(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function bmw_m4(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function bmw_m6(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function bugatti_veyron(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function bugatti_chiron(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }


      /**
     * @Route("/models", name="models")
     */
    public function ferrari_488gtb(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }


      /**
     * @Route("/models", name="models")
     */
    public function ferrari_f50(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function ford_gt40(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }


      /**
     * @Route("/models", name="models")
     */
    public function ford_gt500(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function jaguar_ftype(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }




      /**
     * @Route("/models", name="models")
     */
    public function jaguar_rtype(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function aventador(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }


      /**
     * @Route("/models", name="models")
     */
    public function huracan(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



      /**
     * @Route("/models", name="models")
     */
    public function land_rover_svr(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }


      /**
     * @Route("/models", name="models")
     */
    public function land_rover_velar(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }

     /**
     * @Route("/models", name="models")
     */
    public function maclaren_720s(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }


     /**
     * @Route("/models", name="models")
     */
    public function maclaren_senna(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }


     /**
     * @Route("/models", name="models")
     */ 
    public function mercedes_gt63s(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



     /**
     * @Route("/models", name="models")
     */
    public function mercedes_gtr(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }



     /**
     * @Route("/models", name="models")
     */
    public function porsches_gt3(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }


     /**
     * @Route("/models", name="models")
     */
    public function porsches_turbo(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }

     /**
     * @Route("/models", name="models")
     */
    public function rolls_dawn(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }

     /**
     * @Route("/models", name="models")
     */
    public function rolls_drophead(): Response
    {
        return $this->render('models/index.html.twig', [
            'controller_name' => 'ModelsController',
        ]);
    }

}
