<?php

namespace App\Controller\Admin;

use App\Entity\Footer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FooterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Footer::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre de la colonne'),
            TextField::new('subtitle1', 'Item dans la colonne 1'),
            TextField::new('subtitle2', 'Item dans la colonne 2'),
            TextField::new('subtitle3', 'Item dans la colonne 3'),
            TextField::new('subtitle4', 'Item dans la colonne 4'),
            TextField::new('subtitle5', 'Item dans la colonne 5'),
            TextField::new('subtitle6', 'Item dans la colonne 6'),
        ];
    }
    
}
