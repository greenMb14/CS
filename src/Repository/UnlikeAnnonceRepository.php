<?php

namespace App\Repository;

use App\Entity\UnlikeAnnonce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UnlikeAnnonce|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnlikeAnnonce|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnlikeAnnonce[]    findAll()
 * @method UnlikeAnnonce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnlikeAnnonceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnlikeAnnonce::class);
    }

    // /**
    //  * @return UnlikeAnnonce[] Returns an array of UnlikeAnnonce objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UnlikeAnnonce
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
