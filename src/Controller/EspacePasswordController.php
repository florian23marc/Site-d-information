<?php

namespace App\Controller;

use App\Form\EspacePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class EspacePasswordController extends AbstractController
{
    private $em;  

    public function __construct(EntityManagerInterface $em)// injection de dépendance
    {
        $this->em = $em; // Initialisation de la propriété $em
    }

    
    #[Route('/espace1/password_modify', name: 'password_modify')]
    public function index(Request $request, UserPasswordHasherInterface $hasher): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(EspacePasswordType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            // Comparaison du mot de passe actuel et celui saisie dans le formulaire
            $old_pwd = $form->get('old_password')->getData(); 

            if($hasher->isPasswordValid($user, $old_pwd)){
                // Modification du mot de passe
                $new_pwd = $form->get('new_password')->getData();
                $user->setPassword($hasher->hashPassword($user, $new_pwd));
                $this->em->persist($user);
                $this->em->flush();
                return $this->redirectToRoute('app_espace1');
                $this->addFlash('success', 'votre mot de passe a bien été modifié');

            }else{
                $this->addFlash('danger','votre mot de passe actuel est incorrect'); /* permet de définir une clé tel que succès ou error et active le message d'erreur */
            }
        }

        return $this->render('espace1/change_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}