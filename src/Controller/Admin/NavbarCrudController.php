<?php

namespace App\Controller\Admin;

use App\Entity\Navbar;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NavbarCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Navbar::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('icon_i24', 'Logo de la chaine')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('subject', 'Sujet'),
            TextField::new('icon', 'Icone'),
            TextField::new('complement', 'Complement du sujet')
            
        ];
    }
    
}
