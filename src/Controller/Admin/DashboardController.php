<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\Actor;
use App\Entity\Cinema;
use App\Entity\Director;
use App\Entity\Genre;
use App\Entity\Movie;
use App\Entity\Netflix;
use App\Entity\TVShow;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DashboardController extends AbstractDashboardController
{
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Movies');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-dashboard');
        yield MenuItem::linkToCrud('Movies', 'fas fa-video', Movie::class);
        yield MenuItem::linkToCrud('TV Shows', 'fas fa-film', TVShow::class);
        yield MenuItem::linkToCrud('Actors', 'fas fa-list', Actor::class);
        yield MenuItem::linkToCrud('Directors', 'fas fa-pen-nib', Director::class);
        yield MenuItem::linkToCrud('Genres', 'fas fa-arrow-right', Genre::class);
        yield MenuItem::linkToCrud('Cinema', 'fas fa-video', Cinema::class);
        yield MenuItem::linkToCrud('Netflix', 'fas fa-play', Netflix::class);
        yield MenuItem::linkToCrud('Users', 'fas fa-user-circle', User::class);
        yield MenuItem::linkToUrl('Homepage', 'fas fa-home', $this->generateUrl('app_home'));
    }
}
