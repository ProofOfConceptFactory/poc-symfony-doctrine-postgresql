<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\DummyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontController extends AbstractController
{
    #[Route('/', name: 'front')]
    public function home(DummyRepository $dummyRepository): Response
    {
        return $this->render('front/index.html.twig', [
            'dummies' => $dummyRepository->findAll(),
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('front/about.html.twig');
    }
}
