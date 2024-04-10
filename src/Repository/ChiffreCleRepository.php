<?php

namespace App\Repository;

use App\Entity\ChiffreCle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ChiffreCle>
 *
 * @method ChiffreCle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChiffreCle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChiffreCle[]    findAll()
 * @method ChiffreCle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChiffreCleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChiffreCle::class);
    }

//    /**
//     * @return ChiffreCle[] Returns an array of ChiffreCle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ChiffreCle
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
