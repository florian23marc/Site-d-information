<?php

namespace App\Repository;

use App\Entity\PetiteCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PetiteCard>
 *
 * @method PetiteCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method PetiteCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method PetiteCard[]    findAll()
 * @method PetiteCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PetiteCardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PetiteCard::class);
    }

//    /**
//     * @return PetiteCard[] Returns an array of PetiteCard objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PetiteCard
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
