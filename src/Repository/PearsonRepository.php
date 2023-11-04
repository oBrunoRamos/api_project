<?php

namespace App\Repository;

use App\Entity\Pearson;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pearson>
 *
 * @method Pearson|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pearson|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pearson[]    findAll()
 * @method Pearson[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PearsonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pearson::class);
    }

//    /**
//     * @return Pearson[] Returns an array of Pearson objects
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

//    public function findOneBySomeField($value): ?Pearson
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
