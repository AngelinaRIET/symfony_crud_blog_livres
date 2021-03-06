<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="app_article")
     */
    public function index(): Response
    {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'formArticle' => $form->createView()
        ]);
    }
}
