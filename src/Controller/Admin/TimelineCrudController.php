<?php

namespace App\Controller\Admin;

use App\Entity\Timeline;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TimelineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Timeline::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('illustration', 'Image timeline')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('link', 'Lien vers l information'),
            DateTimeField::new('created_at', 'Date de publication'),
            TextEditorField::new('description', 'Description de l actualité'),
        ];
    }
    
}
