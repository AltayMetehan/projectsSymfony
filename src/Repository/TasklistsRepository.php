<?php

namespace App\Repository;

use App\Entity\Tasklists;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tasklists>
 *
 * @method Tasklists|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tasklists|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tasklists[]    findAll()
 * @method Tasklists[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TasklistsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tasklists::class);
    }

//    /**
//     * @return Tasklists[] Returns an array of Tasklists objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tasklists
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
