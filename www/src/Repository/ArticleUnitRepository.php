<?php

namespace App\Repository;

use App\Entity\ArticleUnit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArticleUnit>
 *
 * @method ArticleUnit|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleUnit|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleUnit[]    findAll()
 * @method ArticleUnit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleUnitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleUnit::class);
    }

    /**
     * @return ArticleUnit
     * @throws NonUniqueResultException
     */
    public function findByPath(string $path): ArticleUnit
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.path = :val')
            ->setParameter('val', $path)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

//    /**
//     * @return ArticleUnit[] Returns an array of ArticleUnit objects
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

//    public function findOneBySomeField($value): ?ArticleUnit
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
