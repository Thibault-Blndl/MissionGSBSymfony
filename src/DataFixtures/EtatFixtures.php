<?php

namespace App\DataFixtures;

use App\Entity\Etat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EtatFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $etat = new Etat();
        $etat->setLibelle("Fiche signée, saisie clôturée");
        $manager->persist($etat);

        $etat2 = new Etat();
        $etat2->setLibelle("Fiche créée, saisie en cours");
        $manager->persist($etat2);

        $etat3 = new Etat();
        $etat3->setLibelle("Invalide, 12 mois écoulés");
        $manager->persist($etat3);

        $etat4 = new Etat();
        $etat4->setLibelle("Fiche remboursée");
        $manager->persist($etat4);

        $etat5 = new Etat();
        $etat5->setLibelle("Fiche refusée");
        $manager->persist($etat5);

        $etat6 = new Etat();
        $etat6->setLibelle("Validée et mise en paiement");
        $manager->persist($etat6);

        $manager->flush();
    }
}