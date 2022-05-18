<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Director;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class DirectorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $director = new Director();
        $director->setName('Gore Verbinski');
        $director->setSlug('gore-verbinski');
        $director->setAvatar('gore-verbinski.jpg');
        $director->setBirthday(new \DateTime('1964-03-16'));
        $director->setBirthplace('Oak Ridge, Tennessee, USA');
        $director->setBio('');

        $director2 = new Director();
        $director2->setName('Robert Zemeckis');
        $director2->setSlug('robert-zemeckis');
        $director2->setAvatar('robert-zemeckis.jpg');

        $director3 = new Director();
        $director3->setName('F. Gary Gray');
        $director3->setSlug('f.gary-gray');
        $director3->setAvatar('f.gary-gray.jpg');

        $director4 = new Director();
        $director4->setName('Ron Clements');
        $director4->setSlug('ron-clements');
        $director4->setAvatar('ron-clements.jpg');

        $director5 = new Director();
        $director5->setName('Frank Darabont');
        $director5->setSlug('frank-darabont');
        $director5->setAvatar('frank-darabont.jpg');

        $director6 = new Director();
        $director6->setName('Reinaldo Marcus Green');
        $director6->setSlug('reinaldo-marcus-green');
        $director6->setAvatar('reinaldo-marcus-green.jpg');
        $director6->setBirthday(new \DateTime('2000-00-00'));
        $director6->setBirthplace('0');

        $director7 = new Director();
        $director7->setName('Olivier Nakache');
        $director7->setSlug('olivier-nakache');
        $director7->setAvatar('olivier-nakache.jpg');
        $director7->setBirthday(new \DateTime('1973-04-14'));
        $director7->setBirthplace('Surenses, France');

        $director8 = new Director();
        $director8->setName('Quentin Tarantino');
        $director8->setSlug('quentin-tarantino');
        $director8->setAvatar('quentin-tarantino.jpg');
        $director8->setBirthday(new \DateTime('1963-03-27'));
        $director8->setBirthplace('Knoxville, Tennessee, USA');

        $director9 = new Director();
        $director9->setName('Martin Scorsese');
        $director9->setSlug('martin-scorsese');
        $director9->setAvatar('martin-scorsese.jpg');
        $director9->setBirthday(new \DateTime('1942-11-17'));
        $director9->setBirthplace('New York, USA');

        $director10 = new Director();
        $director10->setName('Phil Lord');
        $director10->setSlug('phil-lord');
        $director10->setAvatar('phil-lord.jpg');
        $director10->setBirthday(new \DateTime('1975-07-25'));
        $director10->setBirthplace('Miami, Florida USA');

        $director11 = new Director();
        $director11->setName('Randal Kleiser');
        $director11->setSlug('randal-kleiser');
        $director11->setAvatar('randal-kleiser.jpg');
        $director11->setBirthday(new \DateTime('1946-07-20'));
        $director11->setBirthplace('Philadelphia, USA');

        $director12 = new Director();
        $director12->setName('James Cameron');
        $director12->setSlug('james-cameron');
        $director12->setAvatar('james-cameron.jpg');
        $director12->setBirthday(new \DateTime('1954-08-16'));
        $director12->setBirthplace('Canada');

        $director13 = new Director();
        $director13->setName('Gabriele Muccino');
        $director13->setSlug('gabriele-muccino');
        $director13->setAvatar('gabriele-muccino.jpg');
        $director13->setBirthday(new \DateTime('1967-05-20'));
        $director13->setBirthplace('Rome, Italia');

        $director14 = new Director();
        $director14->setName('Rawson Marshall Thurber');
        $director14->setSlug('rawson-marshall-thurber');
        $director14->setAvatar('rawson-marshall-thurber.jpg');
        $director14->setBirthday(new \DateTime('1975-02-09'));
        $director14->setBirthplace('San Francisco, California, USA');

        $director15 = new Director();
        $director15->setName('Justin Lin');
        $director15->setSlug('justin-lin');
        $director15->setAvatar('justin-lin.jpg');
        $director15->setBirthday(new \DateTime('1973-11-11'));
        $director15->setBirthplace('Tajpej, Taiwan');

        $director16 = new Director();
        $director16->setName('Tim Miller');
        $director16->setSlug('tim-miller');
        $director16->setAvatar('tim-miller.jpg');
        $director16->setBirthday(new \DateTime('1970-02-28'));
        $director16->setBirthplace('Fort Washington, Maryland, USA');

        $director17 = new Director();
        $director17->setName('Cyprian T. Olencki');
        $director17->setSlug('cyprian-t-olencki');
        $director17->setBirthday(new \DateTime('1974-02-14'));
        $director17->setBirthplace('Poland');

        $director18 = new Director();
        $director18->setName('Maciej Kawulski');
        $director18->setSlug('maciej-kawulski');
        $director18->setAvatar('maciej-kawulski.jpg');
        $director18->setBirthday(new \DateTime('1980-04-26'));
        $director18->setBirthplace('Poland');

        $director19 = new Director();
        $director19->setName('Louis Leterrier');
        $director19->setSlug('louis-leterrier');
        $director19->setAvatar('louis-leterrier.jpg');
        $director19->setBirthday(new \DateTime('1973-06-17'));
        $director19->setBirthplace('Paris, France');

        $director20 = new Director();
        $director20->setName('Adam Berg');
        $director20->setSlug('adam-berg');
        $director20->setBirthday(new \DateTime('1972-12-06'));
        $director20->setBirthplace('Eskilstuna, Sweden');

        $director21 = new Director();
        $director21->setName('Joseph Kosinski');
        $director21->setSlug('joseph-kosinski');
        $director21->setBirthday(new \DateTime('1974-05-04'));
        $director21->setBirthplace('Marshalltown, USA');

        $director22 = new Director();
        $director22->setName('Katt Shea');
        $director22->setSlug('katt-shea');
        $director22->setBirthday(new \DateTime('1956-10-09'));
        $director22->setBirthplace('Michigan, USA');

        $director23 = new Director();
        $director23->setName('Tom Gormican');
        $director23->setSlug('tom-gormican');

        $director24 = new Director();
        $director24->setName('Ruben Fleischer');
        $director24->setSlug('ruben-fleischer');
        $director24->setBirthday(new \DateTime('1974-10-31'));
        $director24->setBirthplace('Washington, USA');

        $director25 = new Director();
        $director25->setName('Aaron Nee');
        $director25->setSlug('aaron-nee');

        $director26 = new Director();
        $director26->setName('Sylwester Jakimow');
        $director26->setSlug('sylwester-jakimow');

        $director27 = new Director();
        $director27->setName('Martin Campbell');
        $director27->setSlug('martin-campbell');

        $director28 = new Director();
        $director28->setName('Matt Reeves');
        $director28->setSlug('matt-reeves');

        $manager->persist($director);
        $manager->persist($director2);
        $manager->persist($director3);
        $manager->persist($director4);
        $manager->persist($director5);
        $manager->persist($director6);
        $manager->persist($director7);
        $manager->persist($director8);
        $manager->persist($director9);
        $manager->persist($director10);
        $manager->persist($director11);
        $manager->persist($director12);
        $manager->persist($director13);
        $manager->persist($director14);
        $manager->persist($director15);
        $manager->persist($director16);
        $manager->persist($director17);
        $manager->persist($director18);
        $manager->persist($director19);
        $manager->persist($director20);
        $manager->persist($director21);
        $manager->persist($director22);
        $manager->persist($director23);
        $manager->persist($director24);
        $manager->persist($director25);
        $manager->persist($director26);
        $manager->persist($director27);
        $manager->persist($director28);
        $manager->flush();

        $this->addReference('goreverbinski', $director);
        $this->addReference('robertzemeckis', $director2);
        $this->addReference('fgarygray', $director3);
        $this->addReference('ronclements', $director4);
        $this->addReference('frankdarabont', $director5);
        $this->addReference('reinaldomarcusgreen', $director6);
        $this->addReference('oliviernakache', $director7);
        $this->addReference('quentintarantino', $director8);
        $this->addReference('martinscorsese', $director9);
        $this->addReference('phillord', $director10);
        $this->addReference('randalkleiser', $director11);
        $this->addReference('jamescameron', $director12);
        $this->addReference('gabrielemuccino', $director13);
        $this->addReference('rawsonmarshallthurber', $director14);
        $this->addReference('justinlin', $director15);
        $this->addReference('timmiller', $director16);
        $this->addReference('cypriantolencki', $director17);
        $this->addReference('maciejkawulski', $director18);
        $this->addReference('louisleterrier', $director19);
        $this->addReference('adamberg', $director20);
        $this->addReference('josephkosinski', $director21);
        $this->addReference('kattshea', $director22);
        $this->addReference('tomgormican', $director23);
        $this->addReference('rubenfleischer', $director24);
        $this->addReference('aaronnee', $director25);
        $this->addReference('sylwesterjakimow', $director26);
        $this->addReference('martincampbell', $director27);
        $this->addReference('mattreeves', $director28);
    }
}
