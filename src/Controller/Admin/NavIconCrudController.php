<?php

namespace App\Controller\Admin;

use App\Entity\NavIcon;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NavIconCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NavIcon::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('icon', 'Icone'),
            TextField::new('text', 'Thematique'),
            TextField::new('sup', 'Supplément thématique')
        ];
    }
    
}
