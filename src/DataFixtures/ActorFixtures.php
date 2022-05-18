<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('Tom Hanks');
        $actor->setSlug('tom-hanks');
        $actor->setAvatar('tom-hanks.jpg');
        $actor->setBio('');
        $actor->setBirthday(new \DateTime('1956-07-09'));
        $actor->setBirthplace('Concord, California, USA');

        $actor2 = new Actor();
        $actor2->setName('Johnny Depp');
        $actor2->setSlug('johnny-depp');
        $actor2->setAvatar('johnny-depp.jpg');
        $actor2->setBio('');
        $actor2->setBirthday(new \DateTime('1963-06-09'));
        $actor2->setBirthplace('Owensboro, Kentucky, USA');

        $actor3 = new Actor();
        $actor3->setName('Orlando Bloom');
        $actor3->setSlug('orlando-bloom');
        $actor3->setAvatar('orlando-bloom.jpg');
        $actor3->setBio('');
        $actor3->setBirthday(new \DateTime('1977-01-13'));
        $actor3->setBirthplace('Canterbury, England, United Kingdom');

        $actor4 = new Actor();
        $actor4->setName('Vin Diesel');
        $actor4->setSlug('vin-diesel');
        $actor4->setAvatar('vin-diesel.jpg');
        $actor4->setBio('');
        $actor4->setBirthday(new \DateTime('1967-07-18'));
        $actor4->setBirthplace('New York, USA');

        $actor5 = new Actor();
        $actor5->setName('Dwayne Johnson');
        $actor5->setSlug('dwayne-johnson');
        $actor5->setAvatar('dwayne-johnson.jpg');
        $actor5->setBio('');
        $actor5->setBirthday(new \DateTime('1972-05-02'));
        $actor5->setBirthplace('Hayward, California, USA');

        $actor6 = new Actor();
        $actor6->setName('Jason Statham');
        $actor6->setSlug('jason-statham');
        $actor6->setAvatar('jason-statham.jpg');
        $actor6->setBio('');
        $actor6->setBirthday(new \DateTime('1967-07-26'));
        $actor6->setBirthplace('somewhere');

        $actor7 = new Actor();
        $actor7->setName('Tyres Gibson');
        $actor7->setSlug('tyres-gibson');
        $actor7->setAvatar('tyres-gibson.jpg');
        $actor7->setBio('');
        $actor7->setBirthday(new \DateTime('1978-12-30'));
        $actor7->setBirthplace('Los Angeles, California, USA');

        $actor8 = new Actor();
        $actor8->setName('Michelle Rodriguez');
        $actor8->setSlug('michelle-rodriguez');
        $actor8->setAvatar('michelle-rodriguez.jpg');
        $actor8->setBio('');
        $actor8->setBirthday(new \DateTime('1978-07-12'));
        $actor8->setBirthplace('San Antonio, Texas, USA');

        $actor9 = new Actor();
        $actor9->setName('Will Smith');
        $actor9->setSlug('will-smith');
        $actor9->setAvatar('will-smith.jpg');
        $actor9->setBio('');
        $actor9->setBirthday(new \DateTime('1968-09-25'));
        $actor9->setBirthplace('Philadelphia, Pennsylvania, USA');

        $actor10 = new Actor();
        $actor10->setName('Omar Sy');
        $actor10->setSlug('omar-sy');
        $actor10->setAvatar('omar-sy.jpg');
        $actor10->setBio('');
        $actor10->setBirthday(new \DateTime('1978-01-20'));
        $actor10->setBirthplace('Trappes, France');

        $actor11 = new Actor();
        $actor11->setName('John Travolta');
        $actor11->setSlug('john-travolta');
        $actor11->setAvatar('john-travolta.jpg');
        $actor11->setBio('');
        $actor11->setBirthday(new \DateTime('1954-02-18'));
        $actor11->setBirthplace('Englewood, New Jersey, USA');

        $actor12 = new Actor();
        $actor12->setName('Samuel L. Jackson');
        $actor12->setSlug('samuel-l-jackson');
        $actor12->setAvatar('samuel-l-jackson.jpg');
        $actor12->setBio('');
        $actor12->setBirthday(new \DateTime('1948-12-21'));
        $actor12->setBirthplace('Washington, USA');

        $actor13 = new Actor();
        $actor13->setName('Uma Thurman');
        $actor13->setSlug('uma-thurman');
        $actor13->setAvatar('uma-thurman.jpg');
        $actor13->setBio('');
        $actor13->setBirthday(new \DateTime('1970-04-29'));
        $actor13->setBirthplace('Boston, USA');

        $actor14 = new Actor();
        $actor14->setName('Bruce Willis');
        $actor14->setSlug('bruce-willis');
        $actor14->setAvatar('bruce-willis.jpg');
        $actor14->setBio('');
        $actor14->setBirthday(new \DateTime('1955-03-19'));
        $actor14->setBirthplace('Idar-Oberstein, RFN (Germany)');

        $actor15 = new Actor();
        $actor15->setName('Leonardo Di Caprio');
        $actor15->setSlug('leonardo-di-caprio');
        $actor15->setAvatar('leonardo-di-caprio.jpg');
        $actor15->setBio('');
        $actor15->setBirthday(new \DateTime('1974-11-11'));
        $actor15->setBirthplace('Los Angeles, California, USA');

        $actor16 = new Actor();
        $actor16->setName('Jamie Foxx');
        $actor16->setSlug('jamie-foxx');
        $actor16->setAvatar('jamie-foxx.jpg');
        $actor16->setBio('');
        $actor16->setBirthday(new \DateTime('1967-12-13'));
        $actor16->setBirthplace('Terrell, Texas, USA');


        $actor17 = new Actor();
        $actor17->setName('Jonah Hill');
        $actor17->setSlug('jonah-hill');
        $actor17->setAvatar('jonah-hill.jpg');
        $actor17->setBio('');
        $actor17->setBirthday(new \DateTime('1983-12-20'));
        $actor17->setBirthplace('Los Angeles, California, USA');

        $actor18 = new Actor();
        $actor18->setName('Margot Robbie');
        $actor18->setSlug('margot-robbie');
        $actor18->setAvatar('margot-robbie.jpg');
        $actor18->setBio('');
        $actor18->setBirthday(new \DateTime('1990-07-02'));
        $actor18->setBirthplace('Gold Coast, Australia');

        $actor19 = new Actor();
        $actor19->setName('Channing Tatum');
        $actor19->setSlug('channing-tatum');
        $actor19->setAvatar('channing-tatum.jpg');
        $actor19->setBio('');
        $actor19->setBirthday(new \DateTime('1980-04-26'));
        $actor19->setBirthplace('Alabama, USA');

        $actor20 = new Actor();
        $actor20->setName('Dave Franco');
        $actor20->setSlug('dave-franco');
        $actor20->setAvatar('dave-franco.jpg');
        $actor20->setBio('');
        $actor20->setBirthday(new \DateTime('1985-06-12'));
        $actor20->setBirthplace('California, USA');


        $actor21 = new Actor();
        $actor21->setName('Olivia Newton-John');
        $actor21->setSlug('olivia-newton-john');
        $actor21->setAvatar('olivia-newton-john.jpg');
        $actor21->setBio('');
        $actor21->setBirthday(new \DateTime('1948-09-26'));
        $actor21->setBirthplace('Cambridge, United Kingdom');

        $actor22 = new Actor();
        $actor22->setName('Kate Winslet');
        $actor22->setSlug('kate-winslet');
        $actor22->setAvatar('kate-winslet.jpg');
        $actor22->setBio('');
        $actor22->setBirthday(new \DateTime('1975-10-05'));
        $actor22->setBirthplace('Reading, United Kingdom');

        $actor23 = new Actor();
        $actor23->setName('Gal Gadot');
        $actor23->setSlug('gal-gadot');
        $actor23->setAvatar('gal-gadot.jpg');
        $actor23->setBio('');
        $actor23->setBirthday(new \DateTime('1985-04-30'));
        $actor23->setBirthplace('Rosz ha-Ajin, Israel');

        $actor24 = new Actor();
        $actor24->setName('Ryan Reynolds');
        $actor24->setSlug('ryan-reynolds');
        $actor24->setAvatar('ryan-reynolds.jpg');
        $actor24->setBio('');
        $actor24->setBirthday(new \DateTime('1976-10-23'));
        $actor24->setBirthplace('Vancouver, Canada');

        $actor25 = new Actor();
        $actor25->setName('Paul Walker');
        $actor25->setSlug('paul-walker');
        $actor25->setAvatar('paul-walker.jpg');
        $actor25->setBio('');
        $actor25->setBirthday(new \DateTime('1973-09-12'));
        $actor25->setBirthplace('Glendale, California, USA');

        $actor26 = new Actor();
        $actor26->setName('Mateusz Banasiuk');
        $actor26->setSlug('mateusz-banasiuk');
        $actor26->setAvatar('mateusz-banasiuk.jpg');
        $actor26->setBio('');
        $actor26->setBirthday(new \DateTime('1985-09-21'));
        $actor26->setBirthplace('Warsaw, Poland');

        $actor27 = new Actor();
        $actor27->setName('Weronika Książkiewicz');
        $actor27->setSlug('weronika-ksiazkiewicz');
        $actor27->setAvatar('weronika-ksiazkiewicz.jpg');
        $actor27->setBio('');
        $actor27->setBirthday(new \DateTime('1981-03-21'));
        $actor27->setBirthplace('Moscow, Russia');

        $actor28 = new Actor();
        $actor28->setName('Mateusz Damięcki');
        $actor28->setSlug('mateusz-damiecki');
        $actor28->setAvatar('mateusz-damiecki.jpg');
        $actor28->setBio('');
        $actor28->setBirthday(new \DateTime('1981-05-19'));
        $actor28->setBirthplace('Warsaw, Poland');

        $actor29 = new Actor();
        $actor29->setName('Noomi Rapace');
        $actor29->setSlug('noomi-rapace');
        $actor29->setAvatar('noomi-rapace.jpg');
        $actor29->setBio('');
        $actor29->setBirthday(new \DateTime('1979-12-28'));
        $actor29->setBirthplace('Hudiksvall, Sweden');

        $actor30 = new Actor();
        $actor30->setName('Tom Cruise');
        $actor30->setSlug('tom-cruise');
        $actor30->setAvatar('tom-cruise.jpg');
        $actor30->setBio('');
        $actor30->setBirthday(new \DateTime('1962-07-03'));
        $actor30->setBirthplace('New York, USA');

        $actor31 = new Actor();
        $actor31->setName('Grant Gustin');
        $actor31->setSlug('grant-gustin');
        $actor31->setAvatar('grant-gustin.jpg');
        $actor31->setBio('');
        $actor31->setBirthday(new \DateTime('1990-01-14'));
        $actor31->setBirthplace('Norfolk, Virginia, USA');

        $actor32 = new Actor();
        $actor32->setName('Tomasz Włosok');
        $actor32->setSlug('tomasz-wlosok');
        $actor32->setAvatar('tomasz-wlosok.jpg');
        $actor32->setBio('');
        $actor32->setBirthday(new \DateTime('1990-10-13'));
        $actor32->setBirthplace('Warsaw, Poland');

        $actor33 = new Actor();
        $actor33->setName('Antoni Królikowski');
        $actor33->setSlug('antoni-królikowski');
        $actor33->setAvatar('antoni-krolikowski.jpg');
        $actor33->setBio('');
        $actor33->setBirthday(new \DateTime('1989-02-17'));
        $actor33->setBirthplace('Łódź, Poland');

        $actor34 = new Actor();
        $actor34->setName('Janusz Chabior');
        $actor34->setSlug('janusz-chabior');
        $actor34->setAvatar('janusz-chabior.jpg');
        $actor34->setBio('');
        $actor34->setBirthday(new \DateTime('1963-02-17'));
        $actor34->setBirthplace('Legnica, Poland');

        $actor35 = new Actor();
        $actor35->setName('Nicolas Cage');
        $actor35->setSlug('nicolas-cage');
        $actor35->setAvatar('nicolas-cage.jpg');
        $actor35->setBio('');
        $actor35->setBirthday(new \DateTime('1964-01-07'));
        $actor35->setBirthplace('California, Poland');

        $actor36 = new Actor();
        $actor36->setName('Mark Wahlberg');
        $actor36->setSlug('mark-wahlberg');
        $actor36->setAvatar('mark-wahlberg.jpg');
        $actor36->setBio('');
        $actor36->setBirthday(new \DateTime('1971-06-05'));
        $actor36->setBirthplace('Boston, Massachusetts, USA');

        $actor37 = new Actor();
        $actor37->setName('Daniel Radcliffe');
        $actor37->setSlug('daniel-radcliffe');
        $actor37->setAvatar('daniel-radcliffe.jpg');
        $actor37->setBio('');
        $actor37->setBirthday(new \DateTime('1989-07-23'));
        $actor37->setBirthplace('London, England, United Kingdom');

        $actor38 = new Actor();
        $actor38->setName('Sandra Bullock');
        $actor38->setSlug('sandra-bullock');
        $actor38->setAvatar('sandra-bullock.jpg');
        $actor38->setBio('');
        $actor38->setBirthday(new \DateTime('1964-07-26'));
        $actor38->setBirthplace('Arlington, Virginia, USA');

        $actor39 = new Actor();
        $actor39->setName('Maciej Zakościelny');
        $actor39->setSlug('maciej-zakoscielny');
        $actor39->setAvatar('maciej-zakoscielny.jpg');
        $actor39->setBio('');
        $actor39->setBirthday(new \DateTime('1980-05-07'));
        $actor39->setBirthplace('Stalowa Wola, Poland');

        $actor40 = new Actor();
        $actor40->setName('Alicja Bachleda-Curuś');
        $actor40->setSlug('alicja-bachleda-curus');
        $actor40->setAvatar('alicja-bachleda-curus.jpg');
        $actor40->setBio('');
        $actor40->setBirthday(new \DateTime('1983-05-12'));
        $actor40->setBirthplace('Tampico, Mexico');

        $actor41 = new Actor();
        $actor41->setName('Liam Neeson');
        $actor41->setSlug('liam-neeson');
        $actor41->setAvatar('liam-neeson.jpg');
        $actor41->setBio('');
        $actor41->setBirthday(new \DateTime('1952-06-07'));
        $actor41->setBirthplace('Ballymena, North Ireland, United Kingdom');

        $actor42 = new Actor();
        $actor42->setName('Robert Pattinson');
        $actor42->setSlug('robert-pattinson');
        $actor42->setAvatar('robert-pattinson.jpg');
        $actor42->setBio('');
        $actor42->setBirthday(new \DateTime('1986-05-13'));
        $actor42->setBirthplace('London, England, United Kingdom');

        $manager->persist($actor);
        $manager->persist($actor2);
        $manager->persist($actor3);
        $manager->persist($actor4);
        $manager->persist($actor5);
        $manager->persist($actor6);
        $manager->persist($actor7);
        $manager->persist($actor8);
        $manager->persist($actor9);
        $manager->persist($actor10);
        $manager->persist($actor11);
        $manager->persist($actor12);
        $manager->persist($actor13);
        $manager->persist($actor14);
        $manager->persist($actor15);
        $manager->persist($actor16);
        $manager->persist($actor17);
        $manager->persist($actor18);
        $manager->persist($actor19);
        $manager->persist($actor20);
        $manager->persist($actor21);
        $manager->persist($actor22);
        $manager->persist($actor23);
        $manager->persist($actor24);
        $manager->persist($actor25);
        $manager->persist($actor26);
        $manager->persist($actor27);
        $manager->persist($actor28);
        $manager->persist($actor29);
        $manager->persist($actor30);
        $manager->persist($actor31);
        $manager->persist($actor32);
        $manager->persist($actor33);
        $manager->persist($actor34);
        $manager->persist($actor35);
        $manager->persist($actor36);
        $manager->persist($actor37);
        $manager->persist($actor38);
        $manager->persist($actor39);
        $manager->persist($actor40);
        $manager->persist($actor41);
        $manager->persist($actor42);
        $manager->flush();

        $this->addReference('tomhanks', $actor);
        $this->addReference('johnnydepp', $actor2);
        $this->addReference('orlandobloom', $actor3);
        $this->addReference('vindiesel', $actor4);
        $this->addReference('dwaynejohnson', $actor5);
        $this->addReference('jasonstatham', $actor6);
        $this->addReference('tyresgibson', $actor7);
        $this->addReference('michellerodriguez', $actor8);
        $this->addReference('willsmith', $actor9);
        $this->addReference('omarsy', $actor10);
        $this->addReference('johntravolta', $actor11);
        $this->addReference('samuelljackson', $actor12);
        $this->addReference('umathurman', $actor13);
        $this->addReference('brucewillis', $actor14);
        $this->addReference('leonardodicaprio', $actor15);
        $this->addReference('jamiefoxx', $actor16);
        $this->addReference('jonahhill', $actor17);
        $this->addReference('margotrobbie', $actor18);
        $this->addReference('channingtatum', $actor19);
        $this->addReference('davefranco', $actor20);
        $this->addReference('olivianewtonjohn', $actor21);
        $this->addReference('katewinslet', $actor22);
        $this->addReference('galgadot', $actor23);
        $this->addReference('ryanreynolds', $actor24);
        $this->addReference('paulwalker', $actor25);
        $this->addReference('mateuszbanasiuk', $actor26);
        $this->addReference('weronikaksiazkiewicz', $actor27);
        $this->addReference('mateuszdamiecki', $actor28);
        $this->addReference('noomirapace', $actor29);
        $this->addReference('tomcruise', $actor30);
        $this->addReference('grantgustin', $actor31);
        $this->addReference('tomaszwlosok', $actor32);
        $this->addReference('antonikrolikowski', $actor33);
        $this->addReference('januszchabior', $actor34);
        $this->addReference('nicolascage', $actor35);
        $this->addReference('markwahlberg', $actor36);
        $this->addReference('danielradcliffe', $actor37);
        $this->addReference('sandrabullock', $actor38);
        $this->addReference('maciejzakoscielny', $actor39);
        $this->addReference('alicjabachledacurus', $actor40);
        $this->addReference('liamneeson', $actor41);
        $this->addReference('robertpattinson', $actor42);
    }
}
