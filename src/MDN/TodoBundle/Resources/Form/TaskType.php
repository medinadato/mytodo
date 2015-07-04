<?php

namespace MDN\TodoBundle\Resources\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{

    /**
     * 
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setMethod('post')
                ->add('id', 'hidden')
                ->add('name', 'text', array('attr' => array(
                        'maxlength' => 255,
                        'required' => true,
                    )
                ))
                ->add('priority', 'entity', array(
                    'class' => 'MDNTodoBundle:Priority',
                    'query_builder' => function($repository) { return $repository->createQueryBuilder('p')->orderBy('p.sort', 'ASC'); },
                    'choice_label' => 'name',
                    'multiple' => false,
                ))
                ->add('status_id', 'choice', array(
                    'label' => 'Enabled',
                    'choices' => array(
                        'D' => 'Done',
                        'P' => 'Pending',
                    ),
                    'required' => true,
                    'empty_data' => null,
                ))
                ->add('saveAndAdd', 'submit', array());
    }

    /**
     * 
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MDN\TodoBundle\Entity\Task',
        ));
    }

    /**
     * 
     * @return string
     */
    public function getName()
    {
        return 'task';
    }

}
