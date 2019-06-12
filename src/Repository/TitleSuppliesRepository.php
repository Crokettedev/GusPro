<?php

namespace App\Repository;

use App\Entity\TitleSupplies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TitleSupplies|null find($id, $lockMode = null, $lockVersion = null)
 * @method TitleSupplies|null findOneBy(array $criteria, array $orderBy = null)
 * @method TitleSupplies[]    findAll()
 * @method TitleSupplies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TitleSuppliesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TitleSupplies::class);
    }

    // /**
    //  * @return TitleSupplies[] Returns an array of TitleSupplies objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TitleSupplies
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
