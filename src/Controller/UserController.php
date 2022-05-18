<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\UserFormType;
use App\Repository\BookmarkRepository;
use App\Repository\RatingRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class UserController extends AbstractController
{
    #[Route('/user/{name}', name: 'user')]
    public function show(UserRepository $userRepository, BookmarkRepository $bookmarkRepository, RatingRepository $ratingRepository, string $name): Response
    {
        $users = $userRepository->findUserByName($name);

        $bookmarks = $bookmarkRepository->findBy([
            'user' => $this->getUser(),
        ]);

        $favorites = $ratingRepository->findBy([
           'user' => $this->getUser(),
        ]);

        return $this->render('user/profile.html.twig', [
            'users' => $users,
            'bookmarks' => $bookmarks,
            'favorites' => $favorites,
        ]);
    }

    #[Route('/user', name: 'user_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(UserFormType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() && $this->getUser()) {

            /** @var UploadedFile $avatar */
            $avatar = $form->get('avatar')->getData();

            if ($avatar) {
                $originalFilename = pathinfo($avatar->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$avatar->guessExtension();

                try {
                    $avatar->move(
                      $this->getParameter('avatar_directory'),
                        $newFilename,
                    );
                }catch (FileException $e) {

                }

                $this->getUser()->setAvatar($newFilename);
            }

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user', [
                'name' => $this->getUser()->getName(),
            ]);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $form->createView(),
        ]);
    }
}
