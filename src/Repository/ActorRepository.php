<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Actor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Actor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actor[]    findAll()
 * @method Actor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actor::class);
    }

    public function add(Actor $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function remove(Actor $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findOneBySlug($slug)
    {
        return $this->createQueryBuilder('a')
            ->where('a.slug = :slug')
            ->setParameter('slug', $slug)
            ->leftJoin('a.movies', 'movies')
            ->addSelect('movies')
            ->addOrderBy('movies.releasedAt', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findActors(string $search = null)
    {
        $queryBuilder = $this->createQueryBuilder('actor');

        if ($search) {
            $queryBuilder
                ->andWhere('actor.name LIKE :searchTerm')
                ->setParameter('searchTerm', '%'.$search.'%');
        }

            return $queryBuilder
            ->getQuery()
            ->getResult();
    }

    public function findActorsPager(): QueryBuilder
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.name', 'ASC')

            ;
    }
}
