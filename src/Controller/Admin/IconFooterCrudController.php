<?php

namespace App\Controller\Admin;

use App\Entity\IconFooter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class IconFooterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return IconFooter::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('icon', 'Icone du footer'),
        ];
    }
    
}
