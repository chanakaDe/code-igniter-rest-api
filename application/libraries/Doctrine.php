<?php

/**
 * Doctrine library for CodeIgniter
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Doctrine {

    /**
     * @var EntityManager Doctrine Entity Manager
     */
    private $entityManager = NULL;

    public function __construct() {
        require_once 'bootstrap.php';
        $this->entityManager = EntityManager::create($conn, $config);
    }

    /**
     * @return EntityManager Doctrine Entity Manager
     */
    public function getEntityManager() {
        return $this->entityManager;
    }

}
