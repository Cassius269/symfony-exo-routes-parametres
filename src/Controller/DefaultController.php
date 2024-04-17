<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route(
        path: '/animal/{name}',
        name: 'animaux',
        methods: ["GET"]
    )]
    public function index(string $name = 'all'): Response
    {
        if ($name !== 'all') {
            return new Response('<h1>Animal : ' . $name . '</h1>');
        }

        return new Response('<h1>Tous les animaux</h1>');
    }
}
