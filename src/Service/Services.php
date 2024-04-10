<?php

namespace App\Service;


use Doctrine\ORM\EntityManagerInterface;


class Services
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $em) // Injection de dépendance
    {
        $this->em = $em;
    } 

}

