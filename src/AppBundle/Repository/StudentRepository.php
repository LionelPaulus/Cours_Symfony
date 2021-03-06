<?php

namespace AppBundle\Repository;

/**
 * StudentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StudentRepository extends \Doctrine\ORM\EntityRepository
{
    public function uneMethode()
    {
        $query = $this->createQueryBuilder('student_repository')
            ->addOrderBy('student_repository.dateOfBith', 'DESC')
            ->getQuery()
        ;
        return $query->getResult();
    }

    public function displayAges()
    {
        $data = $this->findAll();
        return $data;
    }
}
