<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Video;
use App\Entity\Footer;
use App\Entity\Navbar;
use App\Entity\NavIcon;
use App\Entity\Timeline;
use App\Entity\ChiffreCle;
use App\Entity\GrandeCard;
use App\Entity\IconFooter;
use App\Entity\MiddleCard;
use App\Entity\PetiteCard;
use App\Controller\Admin\NavbarCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(NavbarCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('TF1 Actus');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Retour au site','fas fa-home','app_home');

        yield MenuItem::section('Gestion des utilisateurs'); 

        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-users', User::class);

        yield MenuItem::section('Gestion de la navbar'); 

        yield MenuItem::linkToCrud('La navbar', 'fa fa-list', Navbar::class);
        yield MenuItem::linkToCrud('La navbar avec icone', 'fa fa-list', NavIcon::class);

        yield MenuItem::section('Gestion des articles'); 

        yield MenuItem::linkToCrud('La première partie / Grande card', 'fa fa-newspaper', GrandeCard::class);
        yield MenuItem::linkToCrud('La première partie / Petite card', 'fa fa-newspaper', PetiteCard::class);
        yield MenuItem::linkToCrud('Les chiffres clés', 'fa fa-chart-column', ChiffreCle::class);
        yield MenuItem::linkToCrud('Les videos', 'fa fa-file-video', Video::class);
        yield MenuItem::linkToCrud('La deuxième partie / Petite Card', 'fa fa-newspaper', MiddleCard::class);
        yield MenuItem::linkToCrud('La Timeline', 'fa fa-timeline', Timeline::class);

        yield MenuItem::section('Gestion du footer'); 
        
        yield MenuItem::linkToCrud('Le Footer', 'fa fa-shoe-prints', Footer::class);
        yield MenuItem::linkToCrud('Les icones du Footer', 'fa fa-icons', IconFooter::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
