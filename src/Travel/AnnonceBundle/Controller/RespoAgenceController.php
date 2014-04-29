<?php

namespace Travel\AnnonceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Travel\AnnonceBundle\Entity\RespoAgence;
use Travel\AnnonceBundle\Form\RespoAgenceType;

/**
 * RespoAgence controller.
 *
 * @Route("/respoagence")
 */
class RespoAgenceController extends Controller
{

    /**
     * Lists all RespoAgence entities.
     *
     * @Route("/", name="respoagence")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TravelAnnonceBundle:RespoAgence')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new RespoAgence entity.
     *
     * @Route("/", name="respoagence_create")
     * @Method("POST")
     * @Template("TravelAnnonceBundle:RespoAgence:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new RespoAgence();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('respoagence_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a RespoAgence entity.
    *
    * @param RespoAgence $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(RespoAgence $entity)
    {
        $form = $this->createForm(new RespoAgenceType(), $entity, array(
            'action' => $this->generateUrl('respoagence_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new RespoAgence entity.
     *
     * @Route("/new", name="respoagence_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new RespoAgence();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a RespoAgence entity.
     *
     * @Route("/{id}", name="respoagence_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:RespoAgence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RespoAgence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing RespoAgence entity.
     *
     * @Route("/{id}/edit", name="respoagence_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:RespoAgence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RespoAgence entity.');
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
    * Creates a form to edit a RespoAgence entity.
    *
    * @param RespoAgence $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RespoAgence $entity)
    {
        $form = $this->createForm(new RespoAgenceType(), $entity, array(
            'action' => $this->generateUrl('respoagence_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing RespoAgence entity.
     *
     * @Route("/{id}", name="respoagence_update")
     * @Method("PUT")
     * @Template("TravelAnnonceBundle:RespoAgence:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAnnonceBundle:RespoAgence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RespoAgence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('respoagence_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a RespoAgence entity.
     *
     * @Route("/{id}", name="respoagence_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TravelAnnonceBundle:RespoAgence')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RespoAgence entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('respoagence'));
    }

    /**
     * Creates a form to delete a RespoAgence entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('respoagence_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
