<?php
namespace App\Repository;
use App\Entity\Dog;


Class DogRepository
{
    private $dogs;

    public function __construct()
    {
        $dog1 = new Dog();
        $dog1->setId(0);
        $dog1->setName('Reinhard');
        $dog1->setGoodBoy(4);
        $dog1->setColor('gris');
        $dog1->setPrice(559);

        $dog2 = new Dog();
        $dog2->setId(1);
        $dog2->setName('Werner');
        $dog2->setGoodBoy(5);
        $dog2->setColor('noir');
        $dog2->setPrice(999);

        $dog3 = new Dog();
        $dog3->setId(2);
        $dog3->setName('Erwin');
        $dog3->setGoodBoy(4);
        $dog3->setColor('roux');
        $dog3->setPrice(1555);

        $dog4 = new Dog();
        $dog4->setId(3);
        $dog4->setName('Albert');
        $dog4->setGoodBoy(4);
        $dog4->setColor('green');
        $dog4->setPrice(556);

        $dog5 = new Dog();
        $dog5->setId(4);
        $dog5->setName('Rudolf');
        $dog5->setGoodBoy(4);
        $dog5->setColor('noir');
        $dog5->setPrice(350);

        $this->dogs = [
            $dog1,
            $dog2,
            $dog3,
            $dog4,
            $dog5,
        ];
    }
    public function findAll(): array
    {
        return $this->dogs;
    }

    public function findOneById(int $id): Dog
    {
        return $this->dogs[$id];
    }
}
