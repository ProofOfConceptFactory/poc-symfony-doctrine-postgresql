<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\DummyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(DummyRepository $dummyRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'dummies' => $dummyRepository->findAll(),
        ]);
    }
}
