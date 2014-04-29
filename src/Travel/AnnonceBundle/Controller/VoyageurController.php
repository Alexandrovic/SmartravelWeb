<?php

namespace Travel\AnnonceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Travel\AnnonceBundle\Entity\Voyageur;
use Travel\AnnonceBundle\Form\VoyageurType;

/**
 * Voyageur controller.
 *
 * @Route("/voyageur")
 */
class VoyageurController extends Controller
{

    /**
     * Lists all Voyageur entities.
     *
     * @Route("/", name="voyageur")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TravelAnnonceBundle:Voyageur')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Voyageur entity.
     *
     * @Route("/", name="voyageur_create")
     * @Method("POST")
     * @Template("TravelAnnonceBundle:Voyageur:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Voyageur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('voyageur_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Voyageur entity.
    *
    * @param Voyageur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Voyageur $entity)
    {
        $form = $this->createForm(new VoyageurType(), $entity, array(
            'action' => $this->generateUrl('voyageur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Voyageur entity.
     *
     * @Route("/new", name="voyageur_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Voyageur();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Voyageur entity.
     *
     * @Route("/{id}", name="voyageur_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:Voyageur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Voyageur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Voyageur entity.
     *
     * @Route("/{id}/edit", name="voyageur_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:Voyageur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Voyageur entity.');
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
    * Creates a form to edit a Voyageur entity.
    *
    * @param Voyageur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Voyageur $entity)
    {
        $form = $this->createForm(new VoyageurType(), $entity, array(
            'action' => $this->generateUrl('voyageur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Voyageur entity.
     *
     * @Route("/{id}", name="voyageur_update")
     * @Method("PUT")
     * @Template("TravelAnnonceBundle:Voyageur:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:Voyageur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Voyageur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('voyageur_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Voyageur entity.
     *
     * @Route("/{id}", name="voyageur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TravelAnnonceBundle:Voyageur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Voyageur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('voyageur'));
    }

    /**
     * Creates a form to delete a Voyageur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('voyageur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
