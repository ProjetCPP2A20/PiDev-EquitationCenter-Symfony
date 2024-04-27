<?php

namespace App\Repository;

use App\Entity\Medicalvisit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Medicalvisit>
 *
 * @method Medicalvisit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Medicalvisit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Medicalvisit[]    findAll()
 * @method Medicalvisit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedicalvisitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Medicalvisit::class);
    }

//    /**
//     * @return Medicalvisit[] Returns an array of Medicalvisit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Medicalvisit
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
