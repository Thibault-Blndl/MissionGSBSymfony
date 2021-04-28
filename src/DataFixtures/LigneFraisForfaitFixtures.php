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
        $manager->persist($lignefraisforfait);

        $lignefraisforfait2 = new LigneFraisForfait();
        $lignefraisforfait2->setFiche($this->getReference('fiche'));
        $lignefraisforfait2->setFraisForfait($this->getReference('fraisforfait2'));
        $lignefraisforfait2->setQuantite(0);
        $manager->persist($lignefraisforfait2);

        $lignefraisforfait3 = new LigneFraisForfait();
        $lignefraisforfait3->setFiche($this->getReference('fiche'));
        $lignefraisforfait3->setFraisForfait($this->getReference('fraisforfait3'));
        $lignefraisforfait3->setQuantite(0);
        $manager->persist($lignefraisforfait3);

        $lignefraisforfait4 = new LigneFraisForfait();
        $lignefraisforfait4->setFiche($this->getReference('fiche'));
        $lignefraisforfait4->setFraisForfait($this->getReference('fraisforfait4'));
        $lignefraisforfait4->setQuantite(0);
        $manager->persist($lignefraisforfait4);

        $lignefraisforfait5 = new LigneFraisForfait();
        $lignefraisforfait5->setFiche($this->getReference('fiche3'));
        $lignefraisforfait5->setFraisForfait($this->getReference('fraisforfait'));
        $lignefraisforfait5->setQuantite(0);
        $manager->persist($lignefraisforfait5);

        $lignefraisforfait6 = new LigneFraisForfait();
        $lignefraisforfait6->setFiche($this->getReference('fiche3'));
        $lignefraisforfait6->setFraisForfait($this->getReference('fraisforfait2'));
        $lignefraisforfait6->setQuantite(0);
        $manager->persist($lignefraisforfait6);

        $lignefraisforfait7 = new LigneFraisForfait();
        $lignefraisforfait7->setFiche($this->getReference('fiche3'));
        $lignefraisforfait7->setFraisForfait($this->getReference('fraisforfait3'));
        $lignefraisforfait7->setQuantite(0);
        $manager->persist($lignefraisforfait7);

        $lignefraisforfait8 = new LigneFraisForfait();
        $lignefraisforfait8->setFiche($this->getReference('fiche3'));
        $lignefraisforfait8->setFraisForfait($this->getReference('fraisforfait4'));
        $lignefraisforfait8->setQuantite(0);
        $manager->persist($lignefraisforfait8);

        $lignefraisforfait9 = new LigneFraisForfait();
        $lignefraisforfait9->setFiche($this->getReference('fiche4'));
        $lignefraisforfait9->setFraisForfait($this->getReference('fraisforfait'));
        $lignefraisforfait9->setQuantite(0);
        $manager->persist($lignefraisforfait9);

        $lignefraisforfait10 = new LigneFraisForfait();
        $lignefraisforfait10->setFiche($this->getReference('fiche4'));
        $lignefraisforfait10->setFraisForfait($this->getReference('fraisforfait2'));
        $lignefraisforfait10->setQuantite(0);
        $manager->persist($lignefraisforfait10);

        $lignefraisforfait11 = new LigneFraisForfait();
        $lignefraisforfait11->setFiche($this->getReference('fiche4'));
        $lignefraisforfait11->setFraisForfait($this->getReference('fraisforfait3'));
        $lignefraisforfait11->setQuantite(0);
        $manager->persist($lignefraisforfait11);

        $lignefraisforfait12 = new LigneFraisForfait();
        $lignefraisforfait12->setFiche($this->getReference('fiche4'));
        $lignefraisforfait12->setFraisForfait($this->getReference('fraisforfait4'));
        $lignefraisforfait12->setQuantite(0);
        $manager->persist($lignefraisforfait12);

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