<?php

namespace Esiea\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends \Doctrine\ORM\EntityRepository
{
	public function getAdverts($page, $nbPerPage)
  {
    $query = $this->createQueryBuilder('a')
      ->orderBy('a.date', 'DESC')
      ->getQuery()
    ;
    
    return $query->getResult();

  }
}
