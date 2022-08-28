<?php

namespace App\Repository;

use App\Entity\Message;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Message|null find($id, $lockMode = null, $lockVersion = null)
 * @method Message|null findOneBy(array $criteria, array $orderBy = null)
 * @method Message[]    findAll()
 * @method Message[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Message $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Message $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByTwoIdnull($value1, $value2)
    {
        return $this->createQueryBuilder('m')
            ->where('m.to_user = :val1')->andWhere('m.to_user = :val2')->andWhere('m.from_user = :val1')->andWhere('m.from_user = :val2')
            ->setParameter('val1', $value1)
            ->setParameter('val2', $value2)
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByTwoId1($value1, $value2){

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT m
            FROM App\Entity\Message m
            WHERE m.to_user = :value2 AND m.from_user = :value1'
        )->setParameter('value1', $value1)->setParameter('value2', $value2);

        return $query->getResult();
    }

    public function findByTwoId2($value1, $value2){

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT m
            FROM App\Entity\Message m
            WHERE m.to_user = :value1 AND m.from_user = :value2'
        )->setParameter('value1', $value1)->setParameter('value2', $value2);

        return $query->getResult();

    }

    // /**
    //  * @return Message[] Returns an array of Message objects
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
    public function findOneBySomeField($value): ?Message
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
