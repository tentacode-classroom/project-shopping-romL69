<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Dog;

class AddDog extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        $dog1 = new Dog();
        $dog1->setName('Reinhard');
        $dog1->setGoodBoy(4);
        $dog1->setColor('gris');
        $dog1->setPrice(559);
        $dog1->setBreed('labrador');
        $manager->persist($dog1);

        $dog2 = new Dog();
        $dog2->setName('Werner');
        $dog2->setGoodBoy(5);
        $dog2->setColor('noir');
        $dog2->setPrice(999);
        $dog2->setBreed('labrador');
        $manager->persist($dog2);

        $dog3 = new Dog();
        $dog3->setName('Erwin');
        $dog3->setGoodBoy(4);
        $dog3->setColor('roux');
        $dog3->setPrice(1555);
        $dog3->setBreed('labrador');
        $manager->persist($dog3);

        $dog4 = new Dog();
        $dog4->setName('Albert');
        $dog4->setGoodBoy(4);
        $dog4->setColor('green');
        $dog4->setPrice(556);
        $dog4->setBreed('labrador');
        $manager->persist($dog4);

        $dog5 = new Dog();
        $dog5->setName('Rudolf');
        $dog5->setGoodBoy(4);
        $dog5->setColor('noir');
        $dog5->setPrice(350);
        $dog5->setBreed('labrador');
        $manager->persist($dog5);

        $dog6 = new Dog();
        $dog6->setName('Joachim ');
        $dog6->setGoodBoy(3);
        $dog6->setColor('orange');
        $dog6->setPrice(999);
        $dog6->setBreed('labrador');
        $manager->persist($dog6);

        $dog7 = new Dog();
        $dog7->setName('Wilhelm');
        $dog7->setGoodBoy(4);
        $dog7->setColor('jaune');
        $dog7->setPrice(655);
        $dog7->setBreed('labrador');
        $manager->persist($dog7);


        $dog8 = new Dog();
        $dog8->setName('Karl ');
        $dog8->setGoodBoy(2);
        $dog8->setColor('blue');
        $dog8->setPrice(666);
        $dog8->setBreed('labrador');
        $manager->persist($dog8);

        $dog9 = new Dog();
        $dog9->setName('Erich ');
        $dog9->setGoodBoy(1);
        $dog9->setColor('blond chatain pale');
        $dog9->setPrice(700);
        $dog9->setBreed('labrador');
        $manager->persist($dog9);

        // $manager->persist($product);

        $manager->flush();
    }
}
