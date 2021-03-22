<?php

namespace App\DataFixtures;

use App\Entity\LigneFraisForfait;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class LigneFraisForfaitFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $lignefraisforfait = new LigneFraisForfait();
        $lignefraisforfait->setFiche($this->getReference('fiche'));
        $lignefraisforfait->setFraisForfait($this->getReference('fraisforfait'));
        $lignefraisforfait->setQuantite(0);
        //$this->addReference('lignefraisforfait',$lignefraisforfait);
        $manager->persist($lignefraisforfait);

        $lignefraisforfait2 = new LigneFraisForfait();
        $lignefraisforfait2->setFiche($this->getReference('fiche'));
        $lignefraisforfait2->setFraisForfait($this->getReference('fraisforfait2'));
        $lignefraisforfait2->setQuantite(0);
        //$this->addReference('lignefraisforfait2',$lignefraisforfait2);
        $manager->persist($lignefraisforfait2);

        $lignefraisforfait3 = new LigneFraisForfait();
        $lignefraisforfait3->setFiche($this->getReference('fiche'));
        $lignefraisforfait3->setFraisForfait($this->getReference('fraisforfait3'));
        $lignefraisforfait3->setQuantite(0);
        //$this->addReference('lignefraisforfait2',$lignefraisforfait2);
        $manager->persist($lignefraisforfait3);

        $lignefraisforfait4 = new LigneFraisForfait();
        $lignefraisforfait4->setFiche($this->getReference('fiche'));
        $lignefraisforfait4->setFraisForfait($this->getReference('fraisforfait4'));
        $lignefraisforfait4->setQuantite(0);
        //$this->addReference('lignefraisforfait2',$lignefraisforfait2);
        $manager->persist($lignefraisforfait4);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            FicheFraisFixtures::class,
            FraisForfaitFixtures::class
        );
    }
}