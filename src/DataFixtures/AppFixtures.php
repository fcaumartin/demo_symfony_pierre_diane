<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $client = new Client();
        $client->setNom("test");
        $client->setPrenom("test");
        $client->setVille("test");

        $manager->persist($client);
        
        $manager->flush();
    }
}
