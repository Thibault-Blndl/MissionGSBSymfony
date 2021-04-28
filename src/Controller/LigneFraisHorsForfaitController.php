<?php

namespace App\Controller;

use App\Entity\FicheFrais;
use App\Entity\LigneFraisHorsForfait;
use App\Form\LigneFraisHorsForfaitType;
use App\Repository\LigneFraisHorsForfaitRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lignefraishorsforfait")
 * @IsGranted("ROLE_USER")
 */
class LigneFraisHorsForfaitController extends AbstractController
{
    /**
     * @Route("/", name="ligne_frais_hors_forfait_index", methods={"GET"})
     */
    public function index(LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository): Response
    {
        return $this->render('ligne_frais_hors_forfait/index.html.twig', [
            'ligne_frais_hors_forfaits' => $ligneFraisHorsForfaitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="ligne_frais_hors_forfait_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ligneFraisHorsForfait = new LigneFraisHorsForfait();
        $form = $this->createForm(LigneFraisHorsForfaitType::class, $ligneFraisHorsForfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ligneFraisHorsForfait);
            $entityManager->flush();

            return $this->redirectToRoute('ligne_frais_hors_forfait_index');
        }

        return $this->render('ligne_frais_hors_forfait/new.html.twig', [
            'ligne_frais_hors_forfait' => $ligneFraisHorsForfait,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ligne_frais_hors_forfait_show", methods={"GET"})
     */
    public function show(LigneFraisHorsForfait $ligneFraisHorsForfait): Response
    {
        return $this->render('ligne_frais_hors_forfait/show.html.twig', [
            'ligne_frais_hors_forfait' => $ligneFraisHorsForfait,
        ]);
    }

    /**
     * @Route("/edit/{id}", name="ligne_frais_hors_forfait_edit", methods={"GET","POST"})
     */
    public function edit(
        Request $request,
        LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository,
        FicheFrais $ficheFrais
    ): Response
    {
        $lignesFraisHorsForfait = $ligneFraisHorsForfaitRepository->findBy(['fiche' => $ficheFrais]);

        foreach ($lignesFraisHorsForfait as $ligneFraisHorsForfait)
        {
            $ligneFraisHorsForfait->setDate($ligneFraisHorsForfait->getFiche()->getMois());
        }

        $form = $this->createForm(
            CollectionType::class,
            $lignesFraisHorsForfait,
            [
                'entry_type' => LigneFraisHorsForfaitType::class,
                'label' => false,
                'entry_options' => ['label' => false]
            ]
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ficheFrais->setDateModif(new \DateTime());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_frais_index');
        }

        return $this->render('ligne_frais_hors_forfait/edit.html.twig', [
            'ligne_frais_hors_forfait' => $lignesFraisHorsForfait,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ligne_frais_hors_forfait_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LigneFraisHorsForfait $ligneFraisHorsForfait): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ligneFraisHorsForfait->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ligneFraisHorsForfait);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ligne_frais_hors_forfait_index');
    }
}
