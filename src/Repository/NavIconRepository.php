<?php

namespace App\Repository;

use App\Entity\NavIcon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NavIcon>
 *
 * @method NavIcon|null find($id, $lockMode = null, $lockVersion = null)
 * @method NavIcon|null findOneBy(array $criteria, array $orderBy = null)
 * @method NavIcon[]    findAll()
 * @method NavIcon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NavIconRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NavIcon::class);
    }

//    /**
//     * @return NavIcon[] Returns an array of NavIcon objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NavIcon
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
