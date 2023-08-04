<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $user = new User();
         $user->setName("MR . Victory Onorhime")
         ->setEmail("onorhimevictory@gmail.com")
         ->setTitle("Fullstack Web/Mobile Developer")
         ->setPhone("+234(80)-765-516-84")
         ->setAddress("Abuja Nigeria")
         ->setAge(23)
         ->setRole(['ROLE_ADMIN']);
         $manager->persist($user);

        $manager->flush();
    }
}
