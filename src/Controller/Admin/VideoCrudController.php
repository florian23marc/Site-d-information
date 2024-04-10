<?php

namespace App\Controller\Admin;

use App\Entity\Video;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VideoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Video::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title_carousel', 'Titre du carousel'),
            TextField::new('video', 'Video '),
            TextField::new('description_video2', 'Description de la video '),
            TextField::new('video2', 'Video 2'),
            TextField::new('description_video', 'Description de la video '),
            TextField::new('video3', 'Video 3'),
            TextField::new('description_video3', 'Description de la video ')
        ];
    }
    
}
