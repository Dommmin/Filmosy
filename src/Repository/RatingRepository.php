<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Movie;
use App\Entity\Rating;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rating|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rating|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rating[]    findAll()
 * @method Rating[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rating::class);
    }

    public function add(Rating $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function remove(Rating $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }


    public function countRates(Movie $movie)
    {
        return $this->createQueryBuilder('cv')
            ->select('AVG(cv.vote) as vote_avg')
            ->andWhere('cv.movie = :movie')
            ->setParameter('movie', $movie)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function countVotes(Movie $movie)
    {
        return $this->createQueryBuilder('cv')
            ->andWhere('cv.movie = :movie')
            ->setParameter('movie', $movie)
            ->select('COUNT(cv.vote) as vote_avg')
            ->getQuery()
            ->getOneOrNullResult();
    }
}
