<?php

namespace App\DataFixtures;

use App\Entity\Etat;
use App\Entity\FicheFrais;
use App\Entity\FraisForfait;
use App\Entity\LigneFraisForfait;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class FraisForfaitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $fraisforfait = new FraisForfait();
        $fraisforfait->setLibelle('Forfait Etape');
        $fraisforfait->setMontant(110.00);
        //$fraisforfait->setLigneFraisForfait($this->getReference('lignefraisforfait'));
       // $this->addReference('fraisforfait',$fraisforfait);
        $this->setReference('fraisforfait', $fraisforfait);
        $manager->persist($fraisforfait);

        $fraisforfait2 = new FraisForfait();
        $fraisforfait2->setLibelle('Frais Kilométrique');
        $fraisforfait2->setMontant(0.62);
        //$fraisforfait->setLigneFraisForfait($this->getReference('lignefraisforfait2'));
        //$this->addReference('fraisforfait2',$fraisforfait2);
        $this->setReference('fraisforfait2', $fraisforfait2);
        $manager->persist($fraisforfait2);

        $fraisforfait3 = new FraisForfait();
        $fraisforfait3->setLibelle('Nuitée Hôtel');
        $fraisforfait3->setMontant(80.00);
        //$fraisforfait->setLigneFraisForfait($this->getReference('lignefraisforfait2'));
        //$this->addReference('fraisforfait2',$fraisforfait2);
        $this->setReference('fraisforfait3', $fraisforfait3);
        $manager->persist($fraisforfait3);

        $fraisforfait4 = new FraisForfait();
        $fraisforfait4->setLibelle('Repas Restaurant');
        $fraisforfait4->setMontant(25.00);
        //$fraisforfait->setLigneFraisForfait($this->getReference('lignefraisforfait2'));
        //$this->addReference('fraisforfait2',$fraisforfait2);
        $this->setReference('fraisforfait4', $fraisforfait4);
        $manager->persist($fraisforfait4);

        $manager->flush();
    }
}