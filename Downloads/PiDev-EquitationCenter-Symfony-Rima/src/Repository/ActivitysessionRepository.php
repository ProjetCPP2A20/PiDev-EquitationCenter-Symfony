<?php

namespace App\Repository;

use App\Entity\Activitysession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Activitysession>
 *
 * @method Activitysession|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activitysession|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activitysession[]    findAll()
 * @method Activitysession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivitysessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activitysession::class);
    }

//    /**
//     * @return Activitysession[] Returns an array of Activitysession objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Activitysession
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
