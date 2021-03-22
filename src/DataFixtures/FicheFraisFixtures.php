<?php

namespace App\DataFixtures;

use App\Entity\Etat;
use App\Entity\FicheFrais;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class FicheFraisFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $fichefrais = new FicheFrais();
        $fichefrais->setUser($this->getReference('id'));
        $fichefrais->setDateModif(new \DateTime("2005-11-20"));
        $fichefrais->setEtat($this->getReference("FSSC"));
        $fichefrais->setMois(new \DateTime('2012-12-01'));
        $fichefrais->setMontantValide('750');
        $fichefrais->setNbJustificatifs('2');
        $fichefrais->setMotifRefus('');
        $this->addReference('fiche', $fichefrais);
        $manager->persist($fichefrais);

        $fichefrais2 = new FicheFrais();
        $fichefrais2->setUser($this->getReference('id1'));
        $fichefrais2->setDateModif(new \DateTime("2005-11-23"));
        $fichefrais2->setEtat($this->getReference("FSSC"));
        $fichefrais2->setMois(new \DateTime('2012-11-01'));
        $fichefrais2->setMontantValide('7250');
        $fichefrais2->setNbJustificatifs('4');
        $fichefrais2->setMotifRefus('');
        $this->addReference('fiche2', $fichefrais2);
        $manager->persist($fichefrais2);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
            EtatFixtures::class
        );
    }
}