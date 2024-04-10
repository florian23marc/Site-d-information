<?php

namespace App\Controller;

use App\Entity\Video;
use App\Service\Services;
use App\Entity\Footer;
use App\Entity\Timeline;
use App\Entity\GrandeCard;
use App\Entity\IconFooter;
use App\Entity\MiddleCard;
use App\Entity\PetiteCard;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private EntityManagerInterface $em;
    private Services $service;
    public function __construct(EntityManagerInterface $em, Services $service) // Injection de dépendance
    {
        $this->em = $em;
        $this->service = $service;
    } 
    
    #[Route('/', name: 'app_home')] // page d'acceuil de symfony c'est home avec le /
    public function index(Services $service): Response
    {
        // A propos de la navbar
    
        // A propos des petites cards
        //$infos = $this->em->getRepository(PetiteCard::class)->findAll(); DESC affiche les éléments en ordre decroissant
         $infos = $this->em->getRepository(PetiteCard::class)->findBy(
            [],
            ['id'=> 'DESC'],
            4
        ); 
    
         // A propos de la grande cards
        //$infos1 = $this->em->getRepository(GrandeCard::class)->findAll(); 
        $infos1 = $this->em->getRepository(GrandeCard::class)->findBy(
            [],
            ['id'=> 'DESC'],
            1
        ); 
    
         // A propos des vidéos
        $video = $this->em->getRepository(Video::class)->findAll(); 
    
        // A propos des middle cards
        //$infos2 = $this->em->getRepository(MiddleCard::class)->findAll();
        $infos2 = $this->em->getRepository(MiddleCard::class)->findBy(
            [],
            ['id'=> 'DESC'],
            4
        ); 

    
        // A propos des middle cards
        //$time = $this->em->getRepository(Timeline::class)->findAll();
        $time = $this->em->getRepository(Timeline::class)->findBy(
            [],
            ['id'=> 'DESC'],
            3
        ); 
    
        // A propos du footer
        $footer = $this->em->getRepository(Footer::class)->findAll();
    
        $icon = $this->em->getRepository(IconFooter::class)->findAll();
    
       /* $videos = $this->em->getRepository(Video::class)->findBy(
            [],
            ['id'=> 'DESC'],
            3
        );*/
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            //'nav' => $nav,
            //'nav2' => $nav2,
            'infos' => $infos,
            'video' => $video,
            'infos1' => $infos1,
            'infos2' => $infos2,
            'time' => $time,
            'footer' => $footer,
            'icon' => $icon,
        ]);
    }
    #[Route('/showGrand/article/{id}', name: 'app_show_article_grand')] // page d'acceuil de symfony c'est home avec le /
    public function showArticleGrand($id): Response
    {
        $showArticlesGrand = $this->em->getRepository(GrandeCard::class)->findOneBy(['id' => $id]);

        //dd($showArticles);
        return $this->render('home/showGrand.html.twig', [

            'showArticlesGrand' => $showArticlesGrand,

        ]);
    }
    #[Route('/show/article/{id}', name: 'app_show_article')] // page d'acceuil de symfony c'est home avec le /
    public function showArticle($id): Response
    {
        $showArticles = $this->em->getRepository(PetiteCard::class)->findOneBy(['id' => $id]);

        //dd($showArticles);
        return $this->render('home/show.html.twig', [

            'showArticles' => $showArticles,

        ]);
    }
    #[Route('/showMiddle/article/{id}', name: 'app_show_article_middle')] // page d'acceuil de symfony c'est home avec le /
    public function showArticleMiddle($id): Response
    {
        $showArticlesMiddle = $this->em->getRepository(MiddleCard::class)->findOneBy(['id' => $id]);

        //dd($showArticles);
        return $this->render('home/showMiddle.html.twig', [

            'showArticlesMiddle' => $showArticlesMiddle,

        ]);
    }
    
}
