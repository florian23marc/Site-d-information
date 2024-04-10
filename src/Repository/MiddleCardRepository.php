<?php

namespace App\Repository;

use App\Entity\MiddleCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MiddleCard>
 *
 * @method MiddleCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method MiddleCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method MiddleCard[]    findAll()
 * @method MiddleCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MiddleCardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MiddleCard::class);
    }

//    /**
//     * @return MiddleCard[] Returns an array of MiddleCard objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MiddleCard
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
