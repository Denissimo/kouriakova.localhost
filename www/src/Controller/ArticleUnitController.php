<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleUnitController extends AbstractController
{
    public function showArticleUnit(): Response
    {
        return $this->render('article_unit/show.html.twig', [
            'controller_name' => 'ArticleUnitController',
        ]);
    }
}
