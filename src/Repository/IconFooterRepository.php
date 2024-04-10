<?php

namespace App\Repository;

use App\Entity\IconFooter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IconFooter>
 *
 * @method IconFooter|null find($id, $lockMode = null, $lockVersion = null)
 * @method IconFooter|null findOneBy(array $criteria, array $orderBy = null)
 * @method IconFooter[]    findAll()
 * @method IconFooter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IconFooterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IconFooter::class);
    }

//    /**
//     * @return IconFooter[] Returns an array of IconFooter objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IconFooter
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
