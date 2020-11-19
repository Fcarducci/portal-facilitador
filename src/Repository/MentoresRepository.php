<?php

namespace App\Repository;

use App\Entity\Mentores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mentores|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mentores|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mentores[]    findAll()
 * @method Mentores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MentoresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mentores::class);
    }

    // /**
    //  * @return Mentores[] Returns an array of Mentores objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mentores
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
