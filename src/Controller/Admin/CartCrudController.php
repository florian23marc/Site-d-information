<?php

namespace App\Controller\Admin;

use App\Entity\Cart;
use DateTimeImmutable;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CartCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cart::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            DateTimeField::new('createdAt','Crée le'),
            DateTimeField::new('updateAt','Mise à jour le'),
            BooleanField::new('status','Etat'),
            
        ];
    }
    
}

//order, order detail et item c'est la ou il y a une liasie
