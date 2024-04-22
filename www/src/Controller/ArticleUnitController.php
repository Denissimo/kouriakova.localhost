<?php

namespace App\Controller;

use App\Entity\ArticleUnit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ArticleUnitController extends AbstractController
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function showArticleUnit(string $path): Response
    {
        $articles = $this->entityManager->getRepository(ArticleUnit::class)->findAll();
        $article = $this->entityManager->getRepository(ArticleUnit::class)->findByPath($path);
        
        if (!$article instanceof ArticleUnit) {
            throw new BadRequestHttpException('А туда ли ты зашёл, петушок?');
        }

        return $this->render('content/show.html.twig', [
            'article' => $article,
            'articles' => $articles,
            'controller_name' => 'ArticleUnitController',
        ]);
    }
}
