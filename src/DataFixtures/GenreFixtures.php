<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $genre = new Genre();
        $genre->setName('Drama');

        $genre2 = new Genre();
        $genre2->setName('Comedy');

        $genre3 = new Genre();
        $genre3->setName('Crime');

        $genre4 = new Genre();
        $genre4->setName('Romance');

        $genre5 = new Genre();
        $genre5->setName('Action');

        $genre6 = new Genre();
        $genre6->setName('Horror');

        $genre7 = new Genre();
        $genre7->setName('Thriller');

        $genre8 = new Genre();
        $genre8->setName('Fantasy');

        $genre9 = new Genre();
        $genre9->setName('Sci-Fi');

        $genre10 = new Genre();
        $genre10->setName('Musical');

        $genre11 = new Genre();
        $genre11->setName('Biography');

        $genre12 = new Genre();
        $genre12->setName('Western');

        $genre13 = new Genre();
        $genre13->setName('Animation');

        $genre14 = new Genre();
        $genre14->setName('Family');

        $genre15 = new Genre();
        $genre15->setName('Adventure');

        $genre16 = new Genre();
        $genre16->setName('Sport');

        $manager->persist($genre);
        $manager->persist($genre2);
        $manager->persist($genre3);
        $manager->persist($genre4);
        $manager->persist($genre5);
        $manager->persist($genre6);
        $manager->persist($genre7);
        $manager->persist($genre8);
        $manager->persist($genre9);
        $manager->persist($genre10);
        $manager->persist($genre11);
        $manager->persist($genre12);
        $manager->persist($genre13);
        $manager->persist($genre14);
        $manager->persist($genre15);
        $manager->persist($genre16);
        $manager->flush();

        $this->addReference('drama', $genre);
        $this->addReference('comedy', $genre2);
        $this->addReference('crime', $genre3);
        $this->addReference('romance', $genre4);
        $this->addReference('action', $genre5);
        $this->addReference('horror', $genre6);
        $this->addReference('thriller', $genre7);
        $this->addReference('fantasy', $genre8);
        $this->addReference('sci-fi', $genre9);
        $this->addReference('musical', $genre10);
        $this->addReference('biography', $genre11);
        $this->addReference('western', $genre12);
        $this->addReference('animation', $genre13);
        $this->addReference('family', $genre14);
        $this->addReference('adventure', $genre15);
        $this->addReference('sport', $genre16);
    }
}
