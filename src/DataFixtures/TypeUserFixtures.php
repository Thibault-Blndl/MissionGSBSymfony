<?php

namespace App\DataFixtures;

use App\Entity\TypeUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class TypeUserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) #important
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        $typeUser = new TypeUser();
        $typeUser->setLibelle("Visiteur");
        $this->addReference('visiteur', $typeUser);
        $manager->persist($typeUser);

        $typeUser1 = new TypeUser();
        $typeUser1->setLibelle("Comptable");
        $this->addReference('comptable', $typeUser1);
        $manager->persist($typeUser1);

        $typeUser2 = new TypeUser();
        $typeUser2->setLibelle("Admin");
        $this->addReference('admin', $typeUser2);
        $manager->persist($typeUser2);

        $manager->flush();
    }
}