<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Sic controller.
 *
 */
class SicController extends Controller
{
    /**
     * Lists all sic entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sics = $em->getRepository('AppBundle:Sic')->findAll();

        return $this->render('sic/index.html.twig', array(
            'sics' => $sics,
        ));
    }

    /**
     * Creates a new sic entity.
     *
     */
    public function newAction(Request $request)
    {
        $sic = new Sic();
        $form = $this->createForm('AppBundle\Form\SicType', $sic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sic);
            $em->flush();

            return $this->redirectToRoute('sic_show', array('id' => $sic->getId()));
        }

        return $this->render('sic/new.html.twig', array(
            'sic' => $sic,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sic entity.
     *
     */
    public function showAction(Sic $sic)
    {
        $deleteForm = $this->createDeleteForm($sic);

        return $this->render('sic/show.html.twig', array(
            'sic' => $sic,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sic entity.
     *
     */
    public function editAction(Request $request, Sic $sic)
    {
        $deleteForm = $this->createDeleteForm($sic);
        $editForm = $this->createForm('AppBundle\Form\SicType', $sic);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sic_edit', array('id' => $sic->getId()));
        }

        return $this->render('sic/edit.html.twig', array(
            'sic' => $sic,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sic entity.
     *
     */
    public function deleteAction(Request $request, Sic $sic)
    {
        $form = $this->createDeleteForm($sic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sic);
            $em->flush();
        }

        return $this->redirectToRoute('sic_index');
    }

    /**
     * Creates a form to delete a sic entity.
     *
     * @param Sic $sic The sic entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sic $sic)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sic_delete', array('id' => $sic->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
