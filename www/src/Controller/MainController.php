<?php

namespace App\Controller;

use App\Entity\ArticleUnit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

class MainController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function index(): Response
    {
        $articles = $this->entityManager->getRepository(ArticleUnit::class)->findAll();

        return $this->render('main/index.html.twig', [
            'articles' => $articles,
            'controller_name' => 'MainController',
        ]);
    }
}
