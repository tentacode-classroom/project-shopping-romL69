<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Dog;
use App\Entity\Breed;
use App\Entity\Tag;

class AddDog extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        $breed= new Breed();
        $breed->setName('Labrador');
        $tag1=new Tag();
        $tag1->setName('Mignon');
        $tag2=new Tag();
        $tag2->setName('Rigolo');
        $tag3=new Tag();
        $tag3->setName('Gentil');
        $tag4=new Tag();
        $tag4->setName('Voleur');
        $tag5=new Tag();
        $tag5->setName('Courageux');


        $dog1 = new Dog();
        $dog1->setName('Reinhard');
        $dog1->setGoodBoy(4);
        $dog1->setColor('gris');
        $dog1->setPrice(559);
        $dog1->setBreed($breed);
        $dog1->setViewCounter(0);
        $dog1->addTag($tag1);
        $dog1->addTag($tag2);
        $manager->persist($dog1);

        $breed2= new Breed();
        $breed2->setName('Chow-chow');

        $dog2 = new Dog();
        $dog2->setName('Werner');
        $dog2->setGoodBoy(5);
        $dog2->setColor('noir');
        $dog2->setPrice(999);
        $dog2->setBreed($breed2);
        $dog2->setViewCounter(0);
        $dog2->addTag($tag5);
        $dog2->addTag($tag4);
        $manager->persist($dog2);

        $breed3= new Breed();
        $breed3->setName('Berger Allemand');
        $dog3 = new Dog();
        $dog3->setName('Erwin');
        $dog3->setGoodBoy(4);
        $dog3->setColor('roux');
        $dog3->setPrice(1555);
        $dog3->setBreed($breed3);
        $dog3->setViewCounter(0);
        $dog3->addTag($tag5);
        $dog3->addTag($tag3);

        $manager->persist($dog3);

        $breed4= new Breed();
        $breed4->setName('Golden');
        $dog4 = new Dog();
        $dog4->setName('Albert');
        $dog4->setGoodBoy(4);
        $dog4->setColor('noir');
        $dog4->setPrice(556);
        $dog4->setBreed($breed4);
        $dog4->setViewCounter(0);
        $dog4->addTag($tag4);
        $dog4->addTag($tag1);
        $manager->persist($dog4);

        $breed5= new Breed();
        $breed5->setName('Eurasier');
        $dog5 = new Dog();
        $dog5->setName('Rudolf');
        $dog5->setGoodBoy(4);
        $dog5->setColor('noir');
        $dog5->setPrice(350);
        $dog5->setBreed($breed5);
        $dog5->setViewCounter(0);
        $dog5->addTag($tag3);
        $dog5->addTag($tag2);
        $manager->persist($dog5);

        $breed6= new Breed();
        $breed6->setName('Caniche');
        $dog6 = new Dog();
        $dog6->setName('Joachim ');
        $dog6->setGoodBoy(3);
        $dog6->setColor('orange');
        $dog6->setPrice(999);
        $dog6->setBreed($breed6);
        $dog6->setViewCounter(0);
        $dog6->addTag($tag1);
        $dog6->addTag($tag3);
        $manager->persist($dog6);

        $breed7= new Breed();
        $breed7->setName('Beagle');
        $dog7 = new Dog();
        $dog7->setName('Wilhelm');
        $dog7->setGoodBoy(4);
        $dog7->setColor('jaune');
        $dog7->setPrice(655);
        $dog7->setBreed($breed7);
        $dog7->setViewCounter(0);
        $dog7->addTag($tag4);
        $dog7->addTag($tag2);
        $manager->persist($dog7);

        $breed8= new Breed();
        $breed8->setName('Teckel');
        $dog8 = new Dog();
        $dog8->setName('Karl ');
        $dog8->setGoodBoy(2);
        $dog8->setColor('blue');
        $dog8->setPrice(666);
        $dog8->setBreed($breed8);
        $dog8->setViewCounter(0);
        $dog8->addTag($tag2);
        $dog8->addTag($tag3);
        $manager->persist($dog8);

        $breed9= new Breed();
        $breed9->setName('Bulldog');
        $dog9 = new Dog();
        $dog9->setName('Erich');
        $dog9->setGoodBoy(1);
        $dog9->setColor('blond chatain pale');
        $dog9->setPrice(700);
        $dog9->setBreed($breed9);
        $dog9->setViewCounter(0);
        $dog9->addTag($tag5);
        $dog9->addTag($tag4);
        $manager->persist($dog9);

        $manager->persist($breed);
        $manager->persist($breed2);
        $manager->persist($breed3);
        $manager->persist($breed4);
        $manager->persist($breed5);
        $manager->persist($breed6);
        $manager->persist($breed7);
        $manager->persist($breed8);
        $manager->persist($breed9);

        $manager->persist($tag1);
        $manager->persist($tag2);
        $manager->persist($tag3);
        $manager->persist($tag4);
        $manager->persist($tag5);
        // $manager->persist($product);

        $manager->flush();
    }
}
