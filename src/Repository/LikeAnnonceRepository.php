<?php

namespace App\Repository;

use App\Entity\LikeAnnonce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LikeAnnonce|null find($id, $lockMode = null, $lockVersion = null)
 * @method LikeAnnonce|null findOneBy(array $criteria, array $orderBy = null)
 * @method LikeAnnonce[]    findAll()
 * @method LikeAnnonce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LikeAnnonceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LikeAnnonce::class);
    }

    // /**
    //  * @return LikeAnnonce[] Returns an array of LikeAnnonce objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LikeAnnonce
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
