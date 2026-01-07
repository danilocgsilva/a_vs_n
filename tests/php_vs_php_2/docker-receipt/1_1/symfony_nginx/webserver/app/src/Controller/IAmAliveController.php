<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IAmAliveController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Hello! I am Symfony!');
    }
}