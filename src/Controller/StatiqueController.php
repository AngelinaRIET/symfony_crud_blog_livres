<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatiqueController extends AbstractController
{
    /**
     * @Route("/statique", name="app_statique")
     */
    public function index(): Response
    {
        return $this->render('statique/index.html.twig', [
            'controller_name' => 'StatiqueController',
        ]);
    }
}
