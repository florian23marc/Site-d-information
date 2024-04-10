<?php

namespace App\Controller\Admin;

use App\Entity\PetiteCard;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PetiteCardCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PetiteCard::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('image', 'Image grande card')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('title', 'Titre de la card'),
            TextField::new('subtitle', 'Sous titre de la card'),
            TextEditorField::new('description', 'Description de l actualité'),
            TextField::new('icon_clock', 'Icone date de publication'),
            TextField::new('author', 'Auteur du texte'),
            DateTimeField::new('publishedAt', 'Date de publication'),
            TextField::new('icon_bookmark', 'Bookmark'),
            TextField::new('icon_download', 'Download'),
            BooleanField::new('isAbonne', 'Abonnement'),
            MoneyField::new('prix','Prix')
                    ->setCurrency('EUR')
                    ->setStoredAscents(true),
        ];
    }
    
}