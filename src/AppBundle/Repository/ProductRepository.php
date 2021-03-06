<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
    public function getDataFromTimeRange($fromDate,$toDate,$status){
        $qb = $this->createQueryBuilder('o');
        $qb->select('o.date,count(o),sum(o.value)');
        $qb->where('o.status = :status')
            ->setParameter('status',$status);
        $qb->andWhere(
            $qb->expr()->between(
                'o.date',
                ':fromDate',
                ':toDate'
            )
        )
            ->setParameter('fromDate', $fromDate)
            ->setParameter('toDate', $toDate);
        $qb->groupBy('o.date')
        ->orderBy('o.date','ASC');

        return $qb->getQuery()->getResult();
    }

    public function getStatusData(){
        $qb = $this->createQueryBuilder('o');
        $qb->select('o.status,count(o)');
        $qb->groupBy('o.status');

        return $qb->getQuery()->getResult();
    }

    public function getCompetitorData(){
        $qb = $this->createQueryBuilder('o');
        $qb->select('o.competition,count(o)');
        $qb->groupBy('o.competition');

        return $qb->getQuery()->getResult();
    }
}
