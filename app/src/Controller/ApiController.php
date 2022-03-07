<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route(path: '/api/test', name: 'test')]
    public function login(): JsonResponse
    {
        return $this->json(
            ['test' => true],
            200,
            ['testHeader' => 'work'],
            ['ctx' => 'value']
        );
    }
}