<?php

namespace Eeckman\EventsBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * EventsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventsRepository extends EntityRepository
{

    public function findByPolicyHolder($policyHolder)
    {
        return $this->createQueryBuilder('e')
            //->join('e.ID_PolicyHolder', 'u')
            //->where('e.ID_PolicyHolder = :userID')
            ->where('e.iDPolicyHolder = :IDPolicyHolder')
            ->setParameter('IDPolicyHolder', $policyHolder)
            ->getQuery()
            ->getResult();
    }
}
