<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Bookmark;
use App\Entity\Movie;
use App\Repository\BookmarkRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[IsGranted('ROLE_USER')]
final class FavoriteController extends AbstractController
{
    #[Route('/movie/{slug}/favorite', name: 'app_favorite')]
    public function addFavorite(EntityManagerInterface $manager, BookmarkRepository $bookmarkRepository, Movie $movie, string $slug): Response
    {
        $favorite = $bookmarkRepository->findOneBy([
            'movie' => $movie,
            'user' => $this->getUser(),
        ]);

        if (!$favorite) {
            $favorite = new Bookmark();
            $favorite->setIsFavorite(true);
            $favorite->setMovie($movie);
            $favorite->setUser($this->getUser());

            $manager->persist($favorite);
        } else {
            $manager->remove($favorite);
        }

        $manager->flush();

        return $this->redirectToRoute('movie', ['slug' => $slug]);
    }
}
