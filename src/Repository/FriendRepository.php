<?php

namespace App\Repository;

use App\Entity\Friend;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Friend|null find($id, $lockMode = null, $lockVersion = null)
 * @method Friend|null findOneBy(array $criteria, array $orderBy = null)
 * @method Friend[]    findAll()
 * @method Friend[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FriendRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Friend::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Friend $entity, bool $flush = true): void
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
    public function remove(Friend $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

     /**
     * @return Friend[] Returns an array of Friend objects
     */

    public function findById($value)
    {
        return $this->createQueryBuilder('f')
            ->where('f.Player1 = :user')->orWhere('f.Player2 = :user')->andWhere('f.is_valided = False')
            ->setParameter('user', $value)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAllFriend($value1)
    {
        return $this->createQueryBuilder('f')
            ->where('f.Player1 = :user')->orWhere('f.Player2 = :user')
            ->setParameter('user', $value1)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Friend
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
