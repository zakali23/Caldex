<?php

namespace AppBundle\Repository;
use AppBundle\AppBundle;

/**
 * SyndicRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SyndicRepository extends \Doctrine\ORM\EntityRepository
{
    public function findImmeubleById( $id)
    {
        return $this->getEntityManager()
            ->createQuery("SELECT i FROM AppBundle:Immeuble i WHERE i.syndic = $id")
            ->getResult();


    }
}
