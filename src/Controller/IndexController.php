<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ActorRepository;
use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class IndexController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(MovieRepository $movieRepository): Response
    {
        $netflixes = $movieRepository->findNetflixMovies();

        $cinemas = $movieRepository->findCinemaMovies();

        $movies = $movieRepository->findBy(['netflix' => null , 'cinema' => null]);

        return $this->render('index/index.html.twig', [
            'netflixes' => $netflixes,
            'cinemas' => $cinemas,
            'movies' => $movies,
        ]);
    }

    #[Route('/search', name: 'search')]
    public function search(ActorRepository $actorRepository, MovieRepository $movieRepository, Request $request): Response
    {
        $actors = $actorRepository->findActors(
            $request->query->get('q')
        );

        $movies = $movieRepository->findMovies(
            $request->query->get('q')
        );

        if ($request->query->get('preview')) {
            return $this->render('search/_searchPreview.html.twig', [
                'actors' => $actors,
                'movies' => $movies,
            ]);
        }

        return $this->render('index/search.html.twig', [
            'actors' => $actors,
            'movies' => $movies,
        ]);
    }
}
