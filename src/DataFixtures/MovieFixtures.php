<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Cinema;
use App\Entity\Movie;
use App\Entity\Netflix;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setName('Pirates of the Caribbean: The Curse of the Black Pearl');
        $movie->setSlug('pirates-of-the-caribbean:-the-curse-of-the-black-pearl');
        $movie->setDescription('Blacksmith Will Turner teams up with eccentric pirate "Captain" Jack Sparrow to save his love, the governor\'s daughter, from Jack\'s former pirate allies, who are now undead.');
        $movie->setCountry('USA');
        $movie->setReleasedAt(new \DateTime('2003-06-28'));
        $movie->setFilename('Pirates-of-the-Caribbean.jpg');
        $movie->setTrailer('https://drive.google.com/file/d/1H1vfHO-TeZVhq0gDxRjjDcBnQRtZhht6/preview');
        $movie->addActor($this->getReference('johnnydepp'));
        $movie->addActor($this->getReference('orlandobloom'));
        $movie->addDirector($this->getReference('goreverbinski'));
        $movie->addGenre($this->getReference('fantasy'));

        $movie2 = new Movie();
        $movie2->setName('Forrest Gump');
        $movie2->setSlug('forrest-gump');
        $movie2->setDescription('The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.');
        $movie2->setCountry('USA');
        $movie2->setReleasedAt(new \DateTime('1994-06-23'));
        $movie2->setFilename('Forrest-Gump.jpg');
        $movie2->setTrailer('https://drive.google.com/file/d/1BchIPigitWriQglnWOECeNbdcfzJXmwp/preview');
        $movie2->addActor($this->getReference('tomhanks'));
        $movie2->addDirector($this->getReference('robertzemeckis'));
        $movie2->addGenre($this->getReference('drama'));

        $movie3 = new Movie();
        $movie3->setName('The Fate of the Furious');
        $movie3->setSlug('the-fate-of-the-furious');
        $movie3->setDescription('When a mysterious woman seduces Dominic Toretto into the world of terrorism and a betrayal of those closest to him, the crew face trials that will test them as never before.');
        $movie3->setCountry('USA');
        $movie3->setReleasedAt(new \DateTime('2017-04-04'));
        $movie3->setFilename('The-Fate-of-the-Furious.jpg');
        $movie3->setTrailer('https://drive.google.com/file/d/1l6LjZK6f4HDWx3Vy0DrPhA-CaFeDTPqB/preview');
        $movie3->addActor($this->getReference('dwaynejohnson'));
        $movie3->addActor($this->getReference('vindiesel'));
        $movie3->addActor($this->getReference('michellerodriguez'));
        $movie3->addActor($this->getReference('tyresgibson'));
        $movie3->addActor($this->getReference('jasonstatham'));
        $movie3->addDirector($this->getReference('fgarygray'));
        $movie3->addGenre($this->getReference('action'));

        $movie4 = new Movie();
        $movie4->setName('Vaiana');
        $movie4->setSlug('vaiana');
        $movie4->setDescription('In Ancient Polynesia, when a terrible curse incurred by the Demigod Maui reaches Moana\'s island, she answers the Ocean\'s call to seek out the Demigod to set things right.');
        $movie4->setCountry('USA');
        $movie4->setReleasedAt(new \DateTime('2016-11-16'));
        $movie4->setFilename('Vaiana.jpg');
        $movie4->setTrailer('https://drive.google.com/file/d/10n0IHhhX8BuUkPXosLStkrZSt4MlkNpV/preview');
        $movie4->setWatch('https://player.pl/playerplus/filmy-online/vaiana-skarb-oceanu,207399');
        $movie4->addActor($this->getReference('dwaynejohnson'));
        $movie4->addDirector($this->getReference('ronclements'));
        $movie4->addGenre($this->getReference('animation'));
        $movie4->addGenre($this->getReference('family'));
        $movie4->addGenre($this->getReference('adventure'));

        $movie5 = new Movie();
        $movie5->setName('The Green Mile');
        $movie5->setSlug('the-green-mile');
        $movie5->setDescription('The lives of guards on Death Row are affected by one of their charges: a black man accused of child murder and rape, yet who has a mysterious gift.');
        $movie5->setCountry('USA');
        $movie5->setReleasedAt(new \DateTime('1999-12-06'));
        $movie5->setFilename('The-Green-Mile.jpg');
        $movie5->setTrailer('https://drive.google.com/file/d/1mTLvauUkTbcqKVjc-PYiazRLCCAj3i4V/preview');
        $movie5->addActor($this->getReference('tomhanks'));
        $movie5->addDirector($this->getReference('frankdarabont'));
        $movie5->addGenre($this->getReference('drama'));

        $movie6 = new Movie();
        $movie6->setName('King Richard');
        $movie6->setSlug('king-richard');
        $movie6->setDescription('A look at how tennis superstars Venus and Serena Williams became who they are after the coaching from their father Richard Williams.');
        $movie6->setCountry('USA');
        $movie6->setReleasedAt(new \DateTime('2021-09-02'));
        $movie6->setFilename('king-richard.jpg');
        $movie6->setTrailer('https://drive.google.com/file/d/1oROeRHmu8uTHU7eUAWx7EeIeQ_jCLHw2/preview');
        $movie6->setWatch('https://play.hbomax.com/feature/urn:hbo:feature:GYXB0OgEQO5OhegEAAAAl');
        $movie6->addActor($this->getReference('willsmith'));
        $movie6->addDirector($this->getReference('reinaldomarcusgreen'));
        $movie6->addGenre($this->getReference('drama'));
        $movie6->addGenre($this->getReference('biography'));
        $movie6->addGenre($this->getReference('sport'));

        $movie7 = new Movie();
        $movie7->setName('Intouchables');
        $movie7->setSlug('intouchables');
        $movie7->setDescription('After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver.');
        $movie7->setCountry('France');
        $movie7->setReleasedAt(new \DateTime('2011-09-23'));
        $movie7->setFilename('intouchables.jpg');
        $movie7->setTrailer('https://drive.google.com/file/d/1ziiyq0U2HDHlb6THYCC6tpcHDzGS685T/preview');
        $movie7->addActor($this->getReference('omarsy'));
        $movie7->addDirector($this->getReference('oliviernakache'));
        $movie7->addGenre($this->getReference('drama'));
        $movie7->addGenre($this->getReference('comedy'));
        $movie7->addGenre($this->getReference('biography'));

        $movie8 = new Movie();
        $movie8->setName('Pulp Fiction');
        $movie8->setSlug('pulp-fiction');
        $movie8->setDescription('The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.');
        $movie8->setCountry('USA');
        $movie8->setReleasedAt(new \DateTime('1994-05-21'));
        $movie8->setFilename('pulp-fiction.jpg');
        $movie8->setTrailer('https://drive.google.com/file/d/1aDClIXveYV18SEK1OEt83qAkXKd6_MHF/preview');
        $movie8->addActor($this->getReference('johntravolta'));
        $movie8->addActor($this->getReference('umathurman'));
        $movie8->addActor($this->getReference('samuelljackson'));
        $movie8->addActor($this->getReference('brucewillis'));
        $movie8->addDirector($this->getReference('quentintarantino'));
        $movie8->addGenre($this->getReference('crime'));

        $movie9 = new Movie();
        $movie9->setName('Django');
        $movie9->setSlug('django');
        $movie9->setDescription('With the help of a German bounty-hunter, a freed slave sets out to rescue his wife from a brutal plantation-owner in Mississippi.');
        $movie9->setCountry('USA');
        $movie9->setReleasedAt(new \DateTime('2012-12-11'));
        $movie9->setFilename('django.jpg');
        $movie9->setTrailer('https://drive.google.com/file/d/1AifNg91L_FyQhTZb998GjMfp5KeOpIFL/preview');
        $movie9->addActor($this->getReference('leonardodicaprio'));
        $movie9->addActor($this->getReference('samuelljackson'));
        $movie9->addActor($this->getReference('jamiefoxx'));
        $movie9->addDirector($this->getReference('quentintarantino'));
        $movie9->addGenre($this->getReference('western'));

        $movie10 = new Movie();
        $movie10->setName('The Wolf of Wall Street');
        $movie10->setSlug('the-wolf-of-wall-street');
        $movie10->setDescription('Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.');
        $movie10->setCountry('USA');
        $movie10->setReleasedAt(new \DateTime('2013-12-09'));
        $movie10->setFilename('the-wolf-of-wall-street.jpg');
        $movie10->setTrailer('https://drive.google.com/file/d/109ztxxhkKFci0PY0X7QqnhEKN3Yqv92O/preview');
        $movie10->addActor($this->getReference('leonardodicaprio'));
        $movie10->addActor($this->getReference('jonahhill'));
        $movie10->addActor($this->getReference('margotrobbie'));
        $movie10->addDirector($this->getReference('martinscorsese'));
        $movie10->addGenre($this->getReference('biography'));

        $movie11 = new Movie();
        $movie11->setName('21 Jump Street');
        $movie11->setSlug('21-jump-street');
        $movie11->setDescription('A pair of underachieving cops are sent back to a local high school to blend in and bring down a synthetic drug ring.');
        $movie11->setCountry('USA');
        $movie11->setReleasedAt(new \DateTime('2012-03-12'));
        $movie11->setFilename('21-jump-street.jpg');
        $movie11->setTrailer('https://drive.google.com/file/d/1Tq1WOOBSX3UKwPhw09qy1hLXULhvlaS5/preview');
        $movie11->addActor($this->getReference('jonahhill'));
        $movie11->addActor($this->getReference('davefranco'));
        $movie11->addActor($this->getReference('channingtatum'));
        $movie11->addDirector($this->getReference('phillord'));
        $movie11->addGenre($this->getReference('comedy'));
        $movie11->addGenre($this->getReference('action'));

        $movie12 = new Movie();
        $movie12->setName('22 Jump Street');
        $movie12->setSlug('22-jump-street');
        $movie12->setDescription('After making their way through high school (twice), big changes are in store for officers Schmidt and Jenko when they go deep undercover at a local college.');
        $movie12->setCountry('USA');
        $movie12->setReleasedAt(new \DateTime('2014-06-04'));
        $movie12->setFilename('22-jump-street.jpg');
        $movie12->setTrailer('https://drive.google.com/file/d/1inCnktGlMWt7cBbqh_LUj21WxdWEd8Ai/preview');
        $movie12->addActor($this->getReference('jonahhill'));
        $movie12->addActor($this->getReference('davefranco'));
        $movie12->addActor($this->getReference('channingtatum'));
        $movie12->addDirector($this->getReference('phillord'));
        $movie12->addGenre($this->getReference('comedy'));
        $movie12->addGenre($this->getReference('action'));

        $movie13 = new Movie();
        $movie13->setName('Grease');
        $movie13->setSlug('grease');
        $movie13->setDescription('Good girl Sandy Olsson and greaser Danny Zuko fell in love over the summer. When they unexpectedly discover they\'re now in the same high school, will they be able to rekindle their romance?');
        $movie13->setCountry('USA');
        $movie13->setReleasedAt(new \DateTime('1978-06-13'));
        $movie13->setFilename('grease.jpg');
        $movie13->setTrailer('https://drive.google.com/file/d/1hXTIV_QLF9c2P-8E7i07EHox8kSoyODU/preview');
        $movie13->addActor($this->getReference('johntravolta'));
        $movie13->addActor($this->getReference('olivianewtonjohn'));
        $movie13->addDirector($this->getReference('randalkleiser'));
        $movie13->addGenre($this->getReference('musical'));
        $movie13->addGenre($this->getReference('romance'));

        $movie14 = new Movie();
        $movie14->setName('Titanic');
        $movie14->setSlug('titanic');
        $movie14->setDescription('A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.');
        $movie14->setCountry('USA');
        $movie14->setReleasedAt(new \DateTime('1997-11-01'));
        $movie14->setFilename('titanic.jpg');
        $movie14->setTrailer('https://drive.google.com/file/d/1l-Y4-d1w2kCpYtYhhgUwcwbmlNeCONi5/preview');
        $movie14->addActor($this->getReference('leonardodicaprio'));
        $movie14->addActor($this->getReference('katewinslet'));
        $movie14->addDirector($this->getReference('jamescameron'));
        $movie14->addGenre($this->getReference('romance'));
        $movie14->addGenre($this->getReference('drama'));

        $movie15 = new Movie();
        $movie15->setName('The Pursuit of Happyness');
        $movie15->setSlug('the-pursuit-of-happyness');
        $movie15->setDescription('A struggling salesman takes custody of his son as he\'s poised to begin a life-changing professional career.');
        $movie15->setCountry('USA');
        $movie15->setReleasedAt(new \DateTime('2006-12-15'));
        $movie15->setFilename('the-pursuit-of-happyness.jpg');
        $movie15->setTrailer('https://drive.google.com/file/d/1nWzHDm4cT751iYfnUic-1WAKJV4xyyU1/preview');
        $movie15->addActor($this->getReference('willsmith'));
        $movie15->addDirector($this->getReference('gabrielemuccino'));
        $movie15->addGenre($this->getReference('biography'));

        $movie16 = new Movie();
        $movie16->setName('Seven Pounds');
        $movie16->setSlug('seven-pounds');
        $movie16->setDescription('A man with a fateful secret embarks on an extraordinary journey of redemption by forever changing the lives of seven strangers.');
        $movie16->setCountry('USA');
        $movie16->setReleasedAt(new \DateTime('2008-12-19'));
        $movie16->setFilename('seven-pounds.jpg');
        $movie16->setTrailer('https://drive.google.com/file/d/1jwBYZBD7V5hDIAuvc82c-2z_CiqiAHfu/preview');
        $movie16->setWatch('https://www.netflix.com/watch/70104313');
        $movie16->addActor($this->getReference('willsmith'));
        $movie16->addDirector($this->getReference('gabrielemuccino'));
        $movie16->addGenre($this->getReference('drama'));

        $movie17 = new Movie();
        $movie17->setName('Red Notice');
        $movie17->setSlug('red-notice');
        $movie17->setDescription('An Interpol agent tracks the world\'s most wanted art thief.');
        $movie17->setCountry('USA');
        $movie17->setReleasedAt(new \DateTime('2021-11-04'));
        $movie17->setFilename('red-notice.jpg');
        $movie17->setTrailer('https://drive.google.com/file/d/19uIvCAdu0i4nilIytgFhHS5--JBTpAzA/preview');
        $movie17->setWatch('https://www.netflix.com/title/81161626');
        $movie17->addActor($this->getReference('dwaynejohnson'));
        $movie17->addActor($this->getReference('galgadot'));
        $movie17->addActor($this->getReference('ryanreynolds'));
        $movie17->addDirector($this->getReference('rawsonmarshallthurber'));
        $movie17->addGenre($this->getReference('comedy'));
        $movie17->addGenre($this->getReference('action'));

        $movie18 = new Movie();
        $movie18->setName('Fast Five');
        $movie18->setSlug('fast-five');
        $movie18->setDescription('Dominic Toretto and his crew of street racers plan a massive heist to buy their freedom while in the sights of a powerful Brazilian drug lord and a dangerous federal agent.');
        $movie18->setCountry('USA');
        $movie18->setReleasedAt(new \DateTime('2011-04-15'));
        $movie18->setFilename('fast-five.jpg');
        $movie18->setTrailer('https://drive.google.com/file/d/1H6YH-wqODgusgoZ4FPzAzxyWQGqT9vOn/preview');
        $movie18->addActor($this->getReference('dwaynejohnson'));
        $movie18->addActor($this->getReference('vindiesel'));
        $movie18->addActor($this->getReference('michellerodriguez'));
        $movie18->addActor($this->getReference('tyresgibson'));
        $movie18->addActor($this->getReference('galgadot'));
        $movie18->addActor($this->getReference('paulwalker'));
        $movie18->addDirector($this->getReference('justinlin'));
        $movie18->addGenre($this->getReference('action'));

        $movie19 = new Movie();
        $movie19->setName('Deadpool');
        $movie19->setSlug('deadpool');
        $movie19->setDescription('A wisecracking mercenary gets experimented on and becomes immortal but ugly, and sets out to track down the man who ruined his looks.');
        $movie19->setCountry('USA');
        $movie19->setReleasedAt(new \DateTime('2016-01-21'));
        $movie19->setFilename('deadpool.jpg');
        $movie19->setTrailer('https://drive.google.com/file/d/1ETb_DYrCWoVo0LcZqtu_owxLeTPWBac8/preview');
        $movie19->setWatch('https://play.hbomax.com/page/urn:hbo:page:GV7t0pwGO7sJfPwEAAADM:type:feature');
        $movie19->addActor($this->getReference('ryanreynolds'));
        $movie19->addDirector($this->getReference('timmiller'));
        $movie19->addGenre($this->getReference('comedy'));
        $movie19->addGenre($this->getReference('action'));

        $movie20 = new Movie();
        $movie20->setName('Deadpool 2');
        $movie20->setSlug('deadpool-2');
        $movie20->setDescription('Foul-mouthed mutant mercenary Wade Wilson (a.k.a. Deadpool) assembles a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg Cable.');
        $movie20->setCountry('USA');
        $movie20->setReleasedAt(new \DateTime('2018-05-01'));
        $movie20->setFilename('deadpool-2.jpg');
        $movie20->setTrailer('https://drive.google.com/file/d/1xfFqBxt26O9eU5BxZtVEANvahWS_MGy_/preview');
        $movie20->setWatch('https://play.hbomax.com/page/urn:hbo:page:GXBPEvwLFwUS7iQEAAAGI:type:feature');
        $movie20->addActor($this->getReference('ryanreynolds'));
        $movie20->addDirector($this->getReference('timmiller'));
        $movie20->addGenre($this->getReference('comedy'));
        $movie20->addGenre($this->getReference('action'));

        $movie21 = new Movie();
        $movie21->setName('Furioza');
        $movie21->setSlug('furioza');
        $movie21->setDescription('An event from the past separates the fate of three friends. Unexpectedly, in the life of David (Mateusz Banasiuk) she appears again. Dzika (Weronika Ksiazkiewicz) - once the love of his life, now an experienced policewoman, makes him an offer that cannot be rejected.');
        $movie21->setCountry('Poland');
        $movie21->setReleasedAt(new \DateTime('2021-10-18'));
        $movie21->setFilename('furioza.jpg');
        $movie21->setTrailer('https://drive.google.com/file/d/1yHoX_Xif3gSkpBJG0Gpcnsl00hkDZZuZ/preview');
        $movie21->setWatch('https://www.netflix.com/watch/81570254');
        $movie21->addGenre($this->getReference('drama'));
        $movie21->addGenre($this->getReference('action'));
        $movie21->addDirector($this->getReference('cypriantolencki'));
        $movie21->addActor($this->getReference('mateuszdamiecki'));
        $movie21->addActor($this->getReference('mateuszbanasiuk'));
        $movie21->addActor($this->getReference('weronikaksiazkiewicz'));
        $movie21->addActor($this->getReference('januszchabior'));

        $movie22 = new Movie();
        $movie22->setName('How I Fell in Love with a Gangster');
        $movie22->setSlug('how-i-fell-in-love-with-a-gangster');
        $movie22->setDescription('A mysterious woman recounts the rise and fall of Nikodem "Nikos" Skotarczak, one of the biggest gangsters in Poland\'s history.');
        $movie22->setCountry('Poland');
        $movie22->setReleasedAt(new \DateTime('2022-01-05'));
        $movie22->setFilename('jak-pokochalam-gangstera.jpg');
        $movie22->setTrailer('https://drive.google.com/file/d/1Cjec6VdXP6fG5SQLWB8K5dObuMT5lYGa/preview');
        $movie22->setWatch('https://www.netflix.com/watch/81399298');
        $movie22->addGenre($this->getReference('drama'));
        $movie22->addGenre($this->getReference('crime'));
        $movie22->addDirector($this->getReference('maciejkawulski'));
        $movie22->addActor($this->getReference('antonikrolikowski'));
        $movie22->addActor($this->getReference('tomaszwlosok'));
        $movie22->addActor($this->getReference('januszchabior'));

        $movie23 = new Movie();
        $movie23->setName('8 things you don\'t know about guys');
        $movie23->setSlug('8-things-you-don\'t-know-about-guys');
        $movie23->setDescription('In the new installment of the comedy about male "weaknesses", Ricky fights a creative crisis, Jaroslaw with panic attacks, Filip goes crazy on the stock market, Stefan tries to control his anger, and Kordian tries to piece together a broken heart.');
        $movie23->setCountry('Poland');
        $movie23->setReleasedAt(new \DateTime('2022-01-28'));
        $movie23->setFilename('8-rzeczy-ktorych-nie-wiecie-o-facetach.jpg');
        $movie23->setTrailer('https://drive.google.com/file/d/1c9Nmvgw1uosctrTk3dyhA7hMkUhq2hvx/preview');
        $movie23->setWatch('https://www.netflix.com/watch/81591235');
        $movie23->addGenre($this->getReference('comedy'));
        $movie23->addActor($this->getReference('maciejzakoscielny'));
        $movie23->addActor($this->getReference('alicjabachledacurus'));
        $movie23->addDirector($this->getReference('sylwesterjakimow'));

        $movie24 = new Movie();
        $movie24->setName('The Takedown');
        $movie24->setSlug('the-takedown');
        $movie24->setDescription('Diakité and Monge as police officers who are the complete opposite, and get paired together to uncover an unexpectedly big criminal case.');
        $movie24->setCountry('France');
        $movie24->setReleasedAt(new \DateTime('2022-05-06'));
        $movie24->setFilename('the-takedown.jpg');
        $movie24->setTrailer('https://drive.google.com/file/d/1EwjtUWL4tdym5NUijKDpsf7rQzze2it9/preview');
        $movie24->setWatch('https://www.netflix.com');
        $movie24->addGenre($this->getReference('action'));
        $movie24->addGenre($this->getReference('comedy'));
        $movie24->addActor($this->getReference('omarsy'));
        $movie24->addDirector($this->getReference('louisleterrier'));

        $movie25 = new Movie();
        $movie25->setName('Black Crab');
        $movie25->setSlug('black-crab');
        $movie25->setDescription('In a post-apocalyptic world, six soldiers on a covert mission must transport a mysterious package across a frozen archipelago. Noomi Rapace stars.');
        $movie25->setCountry('France');
        $movie25->setReleasedAt(new \DateTime('2022-05-06'));
        $movie25->setFilename('black-crab.jpg');
        $movie25->setTrailer('https://drive.google.com/file/d/1s9KtSl9HyLx_LDkfzJ1wFWgfkP73iobS/preview');
        $movie25->setWatch('https://www.netflix.com/watch/80220426');
        $movie25->addGenre($this->getReference('action'));
        $movie25->addGenre($this->getReference('sci-fi'));
        $movie25->addDirector($this->getReference('adamberg'));
        $movie25->addActor($this->getReference('noomirapace'));

        $movie26 = new Movie();
        $movie26->setName('Rescued by Ruby');
        $movie26->setSlug('rescued-by-ruby');
        $movie26->setDescription('Chasing his dream to join an elite K-9 unit, a state trooper partners with a fellow underdog: clever but naughty shelter pup Ruby.');
        $movie26->setCountry('USA');
        $movie26->setReleasedAt(new \DateTime('2022-03-17'));
        $movie26->setFilename('rescued-by-ruby.jpg');
        $movie26->setTrailer('https://drive.google.com/file/d/1YsagG-JfCFvSffOOHahrXzLPWBfmHxEj/preview');
        $movie26->setWatch('https://www.netflix.com/watch/81107362');
        $movie26->addGenre($this->getReference('drama'));
        $movie26->addGenre($this->getReference('biography'));
        $movie26->addDirector($this->getReference('kattshea'));
        $movie26->addActor($this->getReference('grantgustin'));

        $movie27 = new Movie();
        $movie27->setName('Uncharted');
        $movie27->setSlug('uncharted');
        $movie27->setDescription('Street-smart Nathan Drake is recruited by seasoned treasure hunter Victor "Sully" Sullivan to recover a fortune amassed by Ferdinand Magellan, and lost 500 years ago by the House of Moncada.');
        $movie27->setCountry('USA');
        $movie27->setReleasedAt(new \DateTime('2022-02-10'));
        $movie27->setFilename('uncharted.jpg');
        $movie27->setTrailer('https://drive.google.com/file/d/1H24kWea7i0u4OwdwSYF-LpCXi2ewX0bm/preview');
        $movie27->addGenre($this->getReference('adventure'));
        $movie27->addActor($this->getReference('markwahlberg'));
        $movie27->addDirector($this->getReference('rubenfleischer'));

        $movie28 = new Movie();
        $movie28->setName('The Batman');
        $movie28->setSlug('the-batman');
        $movie28->setDescription('When the Riddler, a sadistic serial killer, begins murdering key political figures in Gotham, Batman is forced to investigate the city\'s hidden corruption and question his family\'s involvement.');
        $movie28->setCountry('USA');
        $movie28->setReleasedAt(new \DateTime('2022-03-04'));
        $movie28->setFilename('the-batman.jpg');
        $movie28->setTrailer('https://drive.google.com/file/d/1kEgIcJmLuF5Grng4CNTvNBjgcogd4Yr2/preview');
        $movie28->addGenre($this->getReference('action'));
        $movie28->addGenre($this->getReference('sci-fi'));
        $movie28->addActor($this->getReference('robertpattinson'));
        $movie28->addDirector($this->getReference('mattreeves'));

        $movie29 = new Movie();
        $movie29->setName('The Unbearable Weight of Massive Talent');
        $movie29->setSlug('the-unbearable-weight-of-massive-talent');
        $movie29->setDescription('In this action-packed comedy, Nicolas Cage plays Nick Cage, channeling his iconic characters as he\'s caught between a superfan (Pedro Pascal) and a CIA agent (Tiffany Haddish).');
        $movie29->setCountry('USA');
        $movie29->setReleasedAt(new \DateTime('2022-04-22'));
        $movie29->setFilename('the-unbearable-weight-of-massive-talent.jpg');
        $movie29->setTrailer('https://drive.google.com/file/d/1fXcX2tbPelD37pOmB0c4ZLrWxwk_1QeU/preview');
        $movie29->addGenre($this->getReference('comedy'));
        $movie29->addDirector($this->getReference('tomgormican'));
        $movie29->addActor($this->getReference('nicolascage'));

        $movie30 = new Movie();
        $movie30->setName('Top Gun: Maverick');
        $movie30->setSlug('top-gun-maverick');
        $movie30->setDescription('After more than thirty years of service as one of the Navy\'s top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him.');
        $movie30->setCountry('USA');
        $movie30->setReleasedAt(new \DateTime('2022-05-25'));
        $movie30->setFilename('top-gun-maverick.jpg');
        $movie30->setTrailer('https://drive.google.com/file/d/1AaKcvlLTXqW1fG2aZ_23R-VopdTOHWiF/preview');
        $movie30->addGenre($this->getReference('action'));
        $movie30->addDirector($this->getReference('josephkosinski'));
        $movie30->addActor($this->getReference('tomcruise'));

        $movie31 = new Movie();
        $movie31->setName('Memory');
        $movie31->setSlug('memory');
        $movie31->setDescription('An assassin-for-hire finds that he\'s become a target after he refuses to complete a job for a dangerous criminal organization. A remake of the 2003 Belgian film "The Memory of a Killer".');
        $movie31->setCountry('USA');
        $movie31->setReleasedAt(new \DateTime('2022-04-28'));
        $movie31->setFilename('memory.jpg');
        $movie31->setTrailer('https://drive.google.com/file/d/1ar4qF7doW_EPgO-OnUkYI0q_dYhFsC6T/preview');
        $movie31->addGenre($this->getReference('action'));
        $movie31->addGenre($this->getReference('thriller'));
        $movie31->addDirector($this->getReference('martincampbell'));
        $movie31->addActor($this->getReference('liamneeson'));

        $movie32 = new Movie();
        $movie32->setName('The Lost City');
        $movie32->setSlug('the-lost-city');
        $movie32->setDescription('A reclusive romance novelist on a book tour with her cover model gets swept up in a kidnapping attempt that lands them both in a cutthroat jungle adventure.');
        $movie32->setCountry('USA');
        $movie32->setReleasedAt(new \DateTime('2022-04-01'));
        $movie32->setFilename('the-lost-city.jpg');
        $movie32->setTrailer('https://drive.google.com/file/d/1HC8dZGrgAHtHatk0SWlPuwUYgCo66yKP/preview');
        $movie32->addGenre($this->getReference('action'));
        $movie32->addGenre($this->getReference('comedy'));
        $movie32->addActor($this->getReference('channingtatum'));
        $movie32->addActor($this->getReference('sandrabullock'));
        $movie32->addActor($this->getReference('danielradcliffe'));
        $movie32->addDirector($this->getReference('aaronnee'));

        $netflix = new Netflix();
        $netflix->addMovie($movie21);

        $netflix2 = new Netflix();
        $netflix2->addMovie($movie22);

        $netflix3 = new Netflix();
        $netflix3->addMovie($movie23);

        $netflix4 = new Netflix();
        $netflix4->addMovie($movie24);

        $netflix5 = new Netflix();
        $netflix5->addMovie($movie25);

        $netflix6 = new Netflix();
        $netflix6->addMovie($movie26);

        $cinema = new Cinema();
        $cinema->addMovie($movie27);

        $cinema2 = new Cinema();
        $cinema2->addMovie($movie28);

        $cinema3 = new Cinema();
        $cinema3->addMovie($movie29);

        $cinema4 = new Cinema();
        $cinema4->addMovie($movie30);

        $cinema5 = new Cinema();
        $cinema5->addMovie($movie31);

        $cinema6 = new Cinema();
        $cinema6->addMovie($movie32);

        $manager->persist($movie);
        $manager->persist($movie2);
        $manager->persist($movie3);
        $manager->persist($movie4);
        $manager->persist($movie5);
        $manager->persist($movie6);
        $manager->persist($movie7);
        $manager->persist($movie8);
        $manager->persist($movie9);
        $manager->persist($movie10);
        $manager->persist($movie11);
        $manager->persist($movie12);
        $manager->persist($movie13);
        $manager->persist($movie14);
        $manager->persist($movie15);
        $manager->persist($movie16);
        $manager->persist($movie17);
        $manager->persist($movie18);
        $manager->persist($movie19);
        $manager->persist($movie20);
        $manager->persist($movie21);
        $manager->persist($movie22);
        $manager->persist($movie23);
        $manager->persist($movie24);
        $manager->persist($movie25);
        $manager->persist($movie26);
        $manager->persist($movie27);
        $manager->persist($movie28);
        $manager->persist($movie29);
        $manager->persist($movie30);
        $manager->persist($movie31);
        $manager->persist($movie32);
        $manager->persist($netflix);
        $manager->persist($netflix2);
        $manager->persist($netflix3);
        $manager->persist($netflix4);
        $manager->persist($netflix5);
        $manager->persist($netflix6);
        $manager->persist($cinema);
        $manager->persist($cinema2);
        $manager->persist($cinema3);
        $manager->persist($cinema4);
        $manager->persist($cinema5);
        $manager->persist($cinema6);
        $manager->flush();
    }
}
