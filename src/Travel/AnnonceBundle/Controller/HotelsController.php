<?php

namespace Travel\AnnonceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Travel\AnnonceBundle\Entity\Hotels;
use Travel\AnnonceBundle\Form\HotelsType;

/**
 * Hotels controller.
 *
 * @Route("/hotels")
 */
class HotelsController extends Controller
{

    /**
     * Lists all Hotels entities.
     *
     * @Route("/", name="hotels")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TravelAnnonceBundle:Hotels')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Hotels entity.
     *
     * @Route("/", name="hotels_create")
     * @Method("POST")
     * @Template("TravelAnnonceBundle:Hotels:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Hotels();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hotels_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Hotels entity.
    *
    * @param Hotels $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Hotels $entity)
    {
        $form = $this->createForm(new HotelsType(), $entity, array(
            'action' => $this->generateUrl('hotels_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hotels entity.
     *
     * @Route("/new", name="hotels_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Hotels();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Hotels entity.
     *
     * @Route("/{id}", name="hotels_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:Hotels')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotels entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Hotels entity.
     *
     * @Route("/{id}/edit", name="hotels_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:Hotels')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotels entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Hotels entity.
    *
    * @param Hotels $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hotels $entity)
    {
        $form = $this->createForm(new HotelsType(), $entity, array(
            'action' => $this->generateUrl('hotels_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hotels entity.
     *
     * @Route("/{id}", name="hotels_update")
     * @Method("PUT")
     * @Template("TravelAnnonceBundle:Hotels:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:Hotels')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotels entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hotels_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Hotels entity.
     *
     * @Route("/{id}", name="hotels_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TravelAnnonceBundle:Hotels')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hotels entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hotels'));
    }

    /**
     * Creates a form to delete a Hotels entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hotels_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
