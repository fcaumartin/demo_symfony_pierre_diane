<?php

namespace App\DataFixtures;

use App\Entity\Disc;
use App\Entity\Artist;
use App\Entity\Client;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $a1 = new Artist();
        $a1->setNom("artist1");
        $a1->setUrl("test");

        $a2 = new Artist();
        $a2->setNom("artist2");
        $a2->setUrl("test");
        
        
        $d1 = new Disc();
        $d1->setTitre("disc1");
        $d1->setAnnee(2023);

        $d2 = new Disc();
        $d2->setTitre("disc2");
        $d2->setAnnee(2023);

        $d3 = new Disc();
        $d3->setTitre("disc3");
        $d3->setAnnee(2023);

        $d4 = new Disc();
        $d4->setTitre("disc4");
        $d4->setAnnee(2023);

        $d1->setArtist($a1);
        $d2->setArtist($a1);
        $d3->setArtist($a2);
        $d4->setArtist($a2);

        $manager->persist($a1);
        $manager->persist($a2);
        
        $manager->persist($d1);
        $manager->persist($d2);
        $manager->persist($d3);
        $manager->persist($d4);
        
        $manager->flush();
    }
}
