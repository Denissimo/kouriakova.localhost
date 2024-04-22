<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultExceptionController extends AbstractController
{
    public function showAction(HttpExceptionInterface $exception): Response
    {
        return new Response(
            $this->renderView('exception/error.html.twig', [
                'message' => $exception->getMessage(),
            ]),
            $exception->getStatusCode()

        );
    }
}
