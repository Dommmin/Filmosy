<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ActorRepository;
use App\Repository\MovieRepository;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ActorController extends AbstractController
{
    #[Route('/actor/{slug}', name: 'actor')]
    public function index(ActorRepository $repository, MovieRepository $movieRepository, string $slug): Response
    {
        $actors = $repository->findOneBySlug($slug);

        $movies = $movieRepository->findBy([], ['releasedAt' => 'DESC']);

        return $this->render('actor/index.html.twig', [
            'actors' => $actors,
            'movies' => $movies
        ]);

    }

    #[Route('/actors/top-10', name: 'actors_top_10')]
    public function topActors(ActorRepository $actorRepository): Response
    {
        $actors = $actorRepository->findBy([], ['birthday' => 'DESC'], 10);

        return $this->render('ranking/top-10-actors.html.twig', [
            'actors' => $actors,
        ]);
    }

    #[Route('/actors/{page<\d+>}', name: 'actors')]
    public function allActors(ActorRepository $actorRepository, int $page = 1): Response
    {
//        $actors = $actorRepository->findBy([], ['name' => 'ASC']);

        $queryBuilder = $actorRepository->findActorsPager();

        $pagerfanta = new Pagerfanta(
                new QueryAdapter($queryBuilder)
            );

        $pagerfanta->setMaxPerPage(10);
        $pagerfanta->setCurrentPage($page);

        return $this->render('content/actors.html.twig', [
            'pager' => $pagerfanta,
        ]);
    }
}
