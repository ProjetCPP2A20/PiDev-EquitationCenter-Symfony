<?php

namespace App\Repository;

use App\Entity\ProductOrder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Twilio\Rest\Client;
/**
 * @extends ServiceEntityRepository<ProductOrder>
 *
 * @method ProductOrder|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductOrder|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductOrder[]    findAll()
 * @method ProductOrder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductOrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductOrder::class);
    }

//    /**
//     * @return ProductOrder[] Returns an array of ProductOrder objects
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

//    public function findOneBySomeField($value): ?ProductOrder
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    public  function sms(){
        // Your Account SID and Auth Token from twilio.com/console
        $sid = 'ACef33a5a8f8fc5c4f49185924b3d4cfaf';
        $auth_token = 'cf47f9ba45911abc6078459f2ca0052f';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
        // A Twilio number you own with SMS capabilities
        $twilio_number = "+13135283495";

        $client = new Client($sid, $auth_token);
        $client->messages->create(
        // the number you'd like to send the message to
            '+21694854835',
            [
                // A Twilio phone number you purchased at twilio.com/console
                'from' => '+19192611686',
                // the body of the text message you'd like to send
                'body' => 'Votre paiement traiter avec succès'
            ]
        );
    }

}
