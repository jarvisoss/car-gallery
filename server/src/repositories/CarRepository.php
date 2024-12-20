<?php

namespace App\Repositories;

use App\Models\Car;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class CarRepository extends EntityRepository
{
    public function __construct(EntityManager $manager)
    {
        parent::__construct($manager, new ClassMetadata(Car::class));
    }
}
