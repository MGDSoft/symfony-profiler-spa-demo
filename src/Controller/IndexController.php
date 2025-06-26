<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/one')]
    public function one(): JsonResponse
    {
        return new JsonResponse(['message' => 'Hello from one']);
    }

    #[Route('/exception')]
    public function exception(): JsonResponse
    {
        throw new \Exception('An error occurred in two');
    }
}
