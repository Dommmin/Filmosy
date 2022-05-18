<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\DirectorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DirectorController extends AbstractController
{
    #[Route('/director/{slug}', name: 'director')]
    public function index(DirectorRepository $repository, string $slug): Response
    {
        $directors = $repository->findOneByName($slug);

        return $this->render('director/index.html.twig', [
            'directors' => $directors,
        ]);
    }
}
