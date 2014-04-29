<?php

namespace Travel\AnnonceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Travel\AnnonceBundle\Entity\VoyageurHasVoyage;
use Travel\AnnonceBundle\Form\VoyageurHasVoyageType;

/**
 * VoyageurHasVoyage controller.
 *
 * @Route("/voyageurhasvoyage")
 */
class VoyageurHasVoyageController extends Controller
{

    /**
     * Lists all VoyageurHasVoyage entities.
     *
     * @Route("/", name="voyageurhasvoyage")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TravelAnnonceBundle:VoyageurHasVoyage')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new VoyageurHasVoyage entity.
     *
     * @Route("/", name="voyageurhasvoyage_create")
     * @Method("POST")
     * @Template("TravelAnnonceBundle:VoyageurHasVoyage:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new VoyageurHasVoyage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('voyageurhasvoyage_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a VoyageurHasVoyage entity.
    *
    * @param VoyageurHasVoyage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(VoyageurHasVoyage $entity)
    {
        $form = $this->createForm(new VoyageurHasVoyageType(), $entity, array(
            'action' => $this->generateUrl('voyageurhasvoyage_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new VoyageurHasVoyage entity.
     *
     * @Route("/new", name="voyageurhasvoyage_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new VoyageurHasVoyage();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a VoyageurHasVoyage entity.
     *
     * @Route("/{id}", name="voyageurhasvoyage_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:VoyageurHasVoyage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VoyageurHasVoyage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing VoyageurHasVoyage entity.
     *
     * @Route("/{id}/edit", name="voyageurhasvoyage_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:VoyageurHasVoyage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VoyageurHasVoyage entity.');
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
    * Creates a form to edit a VoyageurHasVoyage entity.
    *
    * @param VoyageurHasVoyage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(VoyageurHasVoyage $entity)
    {
        $form = $this->createForm(new VoyageurHasVoyageType(), $entity, array(
            'action' => $this->generateUrl('voyageurhasvoyage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing VoyageurHasVoyage entity.
     *
     * @Route("/{id}", name="voyageurhasvoyage_update")
     * @Method("PUT")
     * @Template("TravelAnnonceBundle:VoyageurHasVoyage:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:VoyageurHasVoyage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VoyageurHasVoyage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('voyageurhasvoyage_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a VoyageurHasVoyage entity.
     *
     * @Route("/{id}", name="voyageurhasvoyage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TravelAnnonceBundle:VoyageurHasVoyage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find VoyageurHasVoyage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('voyageurhasvoyage'));
    }

    /**
     * Creates a form to delete a VoyageurHasVoyage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('voyageurhasvoyage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
