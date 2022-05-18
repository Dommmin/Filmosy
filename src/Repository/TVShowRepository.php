<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\TVShow;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TVShow|null find($id, $lockMode = null, $lockVersion = null)
 * @method TVShow|null findOneBy(array $criteria, array $orderBy = null)
 * @method TVShow[]    findAll()
 * @method TVShow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TVShowRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TVShow::class);
    }

    public function add(TVShow $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function remove(TVShow $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
}
