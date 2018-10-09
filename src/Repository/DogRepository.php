<?php

namespace App\Repository;

use App\Entity\Dog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dog[]    findAll()
 * @method Dog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DogRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dog::class);
    }

//    /**
//     * @return Dog[] Returns an array of Dog objects
//     */

    public function findByPrice()
    {
        return $this->createQueryBuilder('d')
            //->andWhere('d.price > :price ')
            //->setParameter('price', 50)
            ->orderBy('d.price', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    public function findByAlpha()
    {
        return $this->createQueryBuilder('d')
            //->andWhere('d.price > :price ')
            //->setParameter('price', 50)
            ->orderBy('d.name', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Dog
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
