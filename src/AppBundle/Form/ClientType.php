<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fName')
                ->add('lName')
                ->add('mobile')
                ->add('landline')
                ->add('email')
                ->add('address1')
                ->add('address2')
                ->add('address3')
                ->add('address4')
                ->add('postcode')
                ->add('dateofbirth')
                ->add('nationality')
                ->add('email2')
                ->add('email3')
                ->add('comment');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_client';
    }


}
