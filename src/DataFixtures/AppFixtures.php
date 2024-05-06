<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{  private UserPasswordHasherInterface $hashes;

  public function __construct(UserPasswordHasherInterface $hashes)
  {
    $this->hashes = $hashes;
  }

  public function load(ObjectManager $manager): void
  {
    // $product = new Product();
    // $manager->persist($product);
    $faker = Faker\Factory::create('fr_FR');
    for ($i = 0; $i < 20; $i++) {
      $user=new Users();
      $password = $this->hashes->hashPassword($user, 'password');
      $user->setName($faker->firstName)
            ->setLastname($faker->lastName)
           ->setEmail($faker->email)
            ->setPassword($password)
            ->setRoles(['ROLE_USER'])
           ->setNumTel($faker->phoneNumber)
            ->setAddress($faker->address)
             ->setImageData($faker->imageUrl(640, 480, 'people'));


      $manager->persist($user);

    }

    $manager->flush();
  }
}
