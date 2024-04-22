<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ArticleUnitController extends AbstractController
{
    public function showArticleUnit(): Response
    {
//        throw new BadRequestHttpException('А туда ли ты зашёл, петушок?');
        return $this->render('content/show.html.twig', [
            'controller_name' => 'ArticleUnitController',
        ]);
    }
}
