<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    /**
     * Find all products ordered by name
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findAllOrderedByName()
    {
        return $this->createQueryBuilder('p')
            ->select('p')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
}