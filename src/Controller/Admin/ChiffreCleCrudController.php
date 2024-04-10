<?php

namespace App\Controller\Admin;

use App\Entity\ChiffreCle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ChiffreCleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ChiffreCle::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('subject', 'Sujet'),
            TextField::new('number_of_subject', 'Nombre de Sujet'),
        ];
    }
    
}
