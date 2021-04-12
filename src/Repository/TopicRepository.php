<?php

namespace App\Repository;

use App\Entity\Topic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Topic|null find($id, $lockMode = null, $lockVersion = null)
 * @method Topic|null findOneBy(array $criteria, array $orderBy = null)
 * @method Topic[]    findAll()
 * @method Topic[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TopicRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Topic::class);
    }

    // /**
    //  * @return Topic[] Returns an array of Topic objects
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
    public function findOneBySomeField($value): ?Topic
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    /**
     * @return QueryBuilder
     */
    private function findNotSoldQuery(): QueryBuilder
    {
    return $this->createQueryBuilder('t');
    }

    /**
     * @return Topic[]
     */
    public function findAllNotSold(): array
    {
        return $this->findNotSoldQuery()
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Topic[]
     */
    public function findLatestNotSold(): array
    {
        return $this->findNotSoldQuery()
            ->setMaxResults(3)
            ->orderBy('a.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Query
     */
    public function findAllNotSoldQuery()
    {
        return $this->findNotSoldQuery()
            ->getQuery()
        ;
    }

}
