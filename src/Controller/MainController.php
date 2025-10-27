<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starship = [
            'name' => 'SS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Lux Pickles',
            'status' => 'under construction'
        ];

        $numberOfStarships = 457;
        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $numberOfStarships,
            'starship' => $starship
        ]);
    }
}
