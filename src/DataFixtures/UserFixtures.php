<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) #important
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setNom("Villechalane");
        $user->setPrenom("Louis");
        $user->setUsername("lvillachane");
        $encoded = $this->encoder->encodePassword($user,"jux7g");
        $user->setPassword($encoded);
        $user->setAdresse("8 rue des Charmes");
        $user->setCodePostal("46000");
        $user->setVille("Cahors");
        $user->setDateEmbauche(new \DateTime("2005-12-21"));
        $user->setRoles(["ROLE_ADMIN"]);
        $manager->persist($user);

        $user1 = new User();
        $user1->setNom("Tusseau");
        $user1->setPrenom("Louis");
        $user1->setUsername("ltusseau");
        $encoded = $this->encoder->encodePassword($user1,"ktp3s");
        $user1->setPassword($encoded);
        $user1->setAdresse("22 rue des Ternes");
        $user1->setCodePostal("46123");
        $user1->setVille("Gramat");
        $user1->setDateEmbauche(new \DateTime("2000-05-01"));
        $user1->setRoles(["ROLE_USER"]);
        $manager->persist($user1);

        $manager->flush();
    }
}