<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Movie;
use App\Entity\Rating;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Movie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Movie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Movie[]    findAll()
 * @method Movie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Movie::class);
    }

    public function add(Movie $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function remove(Movie $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByCountry($country)
    {
        return $this->createQueryBuilder('m')
            ->where('m.country = :country')
            ->setParameter('country', $country)
            ->getQuery()
            ->getResult()
            ;
    }


    public function findOneBySlug($slug)
    {
        return $this->createQueryBuilder('m')
            ->where('m.slug = :slug')
            ->setParameter('slug', $slug)
            ->leftJoin('m.actor', 'actor')
            ->addSelect('actor')
            ->leftJoin('m.genre', 'genre')
            ->addSelect('genre')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findMovies(string $search = null)
    {
        $queryBuilder = $this->createQueryBuilder('movie');

        if ($search) {
            $queryBuilder
                ->andWhere('movie.name LIKE :searchTerm')
                ->setParameter('searchTerm', '%'.$search.'%');

        }

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }

    public function findNetflixMovies()
    {
        $queryBuilder = $this->createQueryBuilder('n')
            ->where('n.netflix != :identifier')
            ->setParameter('identifier', 1);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }

    public function findCinemaMovies()
    {
        $queryBuilder = $this->createQueryBuilder('c')
            ->where('c.cinema != :identifier')
            ->setParameter('identifier', 1);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }


    public function sortMovies()
    {
        return $this->createQueryBuilder('s')
            ->select('s.name', 's.slug', 's.filename, s.vote')
            ->from(Movie::class, 'movie')
            ->leftJoin(Rating::class, 'rating', 'ON', 'movie.id = rating.movie_id')
            ->addSelect('rating')
            ->groupBy('s.name', 's.slug')
            ->orderBy('s.vote', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function topMoviesSQL(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT name, slug, filename, description, AVG(vote) as votes FROM movie LEFT JOIN ( rating ) ON ( movie.id = rating.movie_id ) GROUP BY name, slug ORDER BY votes DESC LIMIT 10';
        $stmt = $conn->prepare($sql);
        // returns an array of arrays (i.e. a raw data set)
        return $stmt->executeQuery()->fetchAllAssociative();
    }

//    public function allMoviesSQL(): array
//    {
//        $conn = $this->getEntityManager()->getConnection();
//
//        $sql = '
//        SELECT name, slug, filename, description, released_at, AVG(vote) as votes FROM movie LEFT JOIN ( rating ) ON ( movie.id = rating.movie_id ) GROUP BY name, slug ORDER BY released_at DESC';
//        $stmt = $conn->prepare($sql);
//        // returns an array of arrays (i.e. a raw data set)
//        return $stmt->executeQuery()->fetchAllAssociative();
//    }

    // TODO Pagination

//    public function allMovies(): QueryBuilder
    public function allMovies()
    {
        return $this->createQueryBuilder('m')
            ->leftJoin('m.rating', 'rating')
            ->addSelect('m.slug, m.name, m.filename, m.description, AVG(rating.vote) as votes')
            ->orderBy('m.releasedAt', 'desc')
            ->addGroupBy('m.name, m.slug')
            ->getQuery()
            ->getResult()
            ;
    }
}
