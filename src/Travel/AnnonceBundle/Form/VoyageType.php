<?php

namespace Travel\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VoyageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('moyenTransport')
            ->add('destination')
            ->add('budget')
            ->add('nbPlace')
            ->add('programme')
            ->add('itineraire')
            ->add('dateDepart')
            ->add('dateRetour')
            ->add('type')
            ->add('typesortie')
            ->add('hotelId')
            ->add('voyageResponsable')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Travel\AnnonceBundle\Entity\Voyage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'travel_annoncebundle_voyage';
    }
}
