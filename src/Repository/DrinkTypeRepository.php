<?php

namespace App\Repository;

use App\Entity\DrinkType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DrinkType|null find($id, $lockMode = null, $lockVersion = null)
 * @method DrinkType|null findOneBy(array $criteria, array $orderBy = null)
 * @method DrinkType[]    findAll()
 * @method DrinkType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrinkTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DrinkType::class);
    }

    // /**
    //  * @return DrinkType[] Returns an array of DrinkType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DrinkType
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
