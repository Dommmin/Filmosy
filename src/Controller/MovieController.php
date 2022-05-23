<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Movie;
use App\Entity\Rating;
use App\Form\VoteFormType;
use App\Repository\BookmarkRepository;
use App\Repository\GenreRepository;
use App\Repository\MovieRepository;
use App\Repository\RatingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class MovieController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
//    #[Route('/movies/{page<\d+>}', name: 'movies')]
    public function index(MovieRepository $movieRepository, int $page = 1): Response
    {
//        $movies = $movieRepository->allMoviesSQL();

        $movies = $movieRepository->allMovies();

//        $queryBuilder = $movieRepository->allMovies();
//
//        $pagerfanta = new PagerFanta(
//            new QueryAdapter($queryBuilder)
//        );
//
//        $pagerfanta->setMaxPerPage(5);
//        $pagerfanta->setCurrentPage($page);

        return $this->render('content/movies.html.twig', [
//            'pager' => $pagerfanta,
            'movies' => $movies,
        ]);
    }

    #[Route('/movies/top-10', name: 'movies_top_10')]
    public function top(MovieRepository $movieRepository): Response
    {
        $movies = $movieRepository->topMoviesSQL();

        return $this->render('ranking/top-10-movies.html.twig', [
            'movies' => $movies,
        ]);
    }

    #[Route('/movie/{slug}', name: 'movie')]
    public function show(MovieRepository $movieRepository, RatingRepository $ratingRepository, BookmarkRepository $bookmarkRepository, string $slug, Request $request, EntityManagerInterface $manager, Movie $movie): Response
    {
        $movies = $movieRepository->findOneBySlug($slug);

        $ratings = $ratingRepository->countRates($movie);

        $votes = $ratingRepository->countVotes($movie);

        $rates = $ratingRepository->findBy([
            'movie' => $movie,
            'user' => $this->getUser(),
        ]);

        $bookmarks = $bookmarkRepository->findOneBy([
            'movie' => $movie,
            'user' => $this->getUser(),
        ]);

        $vote = $ratingRepository->findOneBy([
            'movie' => $movie,
            'user' => $this->getUser(),
        ]);

        $form = $this->createForm(VoteFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $this->denyAccessUnlessGranted('ROLE_USER');


            if (!$vote) {
                $vote = new Rating();

                $vote->setVote($data['vote']);
                $vote->setMovie($movie);
                $vote->setUser($this->getUser());

                $manager->persist($vote);
                $manager->flush();

                return $this->redirectToRoute('movie', [
                    'slug' => $slug,
                ]);
            }
        }






        return $this->render('movie/index.html.twig', [
            'movies' => $movies,
            'rates' => $rates,
            'ratings' => $ratings,
            'votes' => $votes,
            'bookmarks' => $bookmarks,
            'vote' => $form->createView(),
        ]);
    }

    #[Route('/ranking/movies/genre/{name}', name: 'app_genre')]
    public function genre(GenreRepository $repository, string $name): Response
    {
        $genres = $repository->findOneByName($name);

        return $this->render('genre/index.html.twig', [
            'genres' => $genres,
        ]);
    }

    #[Route('/ranking/movies/country/{country}', name: 'app_country')]
    public function country(MovieRepository $repository, string $country): Response
    {
        $movies = $repository->findByCountry($country);

        return $this->render('country/index.html.twig', [
            'movies' => $movies,
        ]);
    }
}
