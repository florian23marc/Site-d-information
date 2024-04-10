<?php

namespace App\Repository;

use App\Entity\GrandeCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrandeCard>
 *
 * @method GrandeCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrandeCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrandeCard[]    findAll()
 * @method GrandeCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrandeCardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrandeCard::class);
    }

//    /**
//     * @return GrandeCard[] Returns an array of GrandeCard objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GrandeCard
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
