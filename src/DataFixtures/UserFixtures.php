<?php

namespace App\DataFixtures;

use App\Entity\TypeUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PropertyInfo\Type;
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
        $user->setUsername("QQQ");
        $encoded = $this->encoder->encodePassword($user,"QQQ");
        $user->setPassword($encoded);
        $user->setAdresse("8 rue des Charmes");
        $user->setCodePostal("46000");
        $user->setVille("Cahors");
        $user->setDateEmbauche(new \DateTime("2005-12-21"));
        $user->setRoles(["ROLE_USER"]);
        $user->setTypeUser($this->getReference("visiteur"));
        $manager->persist($user);

        $user1 = new User();
        $user1->setNom("Tusseau");
        $user1->setPrenom("Louis");
        $user1->setUsername("TTT");
        $encoded = $this->encoder->encodePassword($user1,"TTT");
        $user1->setPassword($encoded);
        $user1->setAdresse("22 rue des Ternes");
        $user1->setCodePostal("46123");
        $user1->setVille("Gramat");
        $user1->setDateEmbauche(new \DateTime("2000-05-01"));
        $user1->setRoles(["ROLE_USER"]);
        $user1->setTypeUser($this->getReference("comptable"));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setNom("Blondel");
        $user2->setPrenom("Thibault");
        $user2->setUsername("tblondel");
        $encoded = $this->encoder->encodePassword($user2,"0qdyTjvk");
        $user2->setPassword($encoded);
        $user2->setAdresse("1 Avenue Charles de Gaulle");
        $user2->setCodePostal("62217");
        $user2->setVille("Tilloy-les-Mofflaines");
        $user2->setDateEmbauche(new \DateTime("2010-05-01"));
        $user2->setRoles(["ROLE_ADMIN"]);
        $user2->setTypeUser($this->getReference("admin"));
        $manager->persist($user2);

        $manager->flush();
    }
}