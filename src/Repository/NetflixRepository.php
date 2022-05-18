<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Netflix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Netflix|null find($id, $lockMode = null, $lockVersion = null)
 * @method Netflix|null findOneBy(array $criteria, array $orderBy = null)
 * @method Netflix[]    findAll()
 * @method Netflix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NetflixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Netflix::class);
    }

    public function add(Netflix $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function remove(Netflix $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
}
