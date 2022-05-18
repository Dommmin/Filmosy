<?php

declare(strict_types=1);

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class User extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new \App\Entity\User();
        $user->setEmail('admin@localhost.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordHasher->hashPassword($user, 'admin'));
        $user->setName('Admin');
        $user->setIsVerified(true);

        $user2 = new \App\Entity\User();
        $user2->setEmail('john@localhost.com');
        $user2->setRoles(['ROLE_USER']);
        $user2->setPassword($this->passwordHasher->hashPassword($user, 'user'));
        $user2->setName('John Doe');
        $user2->setIsVerified(true);

        $manager->persist($user);
        $manager->persist($user2);
        $manager->flush();
    }
}
