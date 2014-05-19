<?php

namespace Victoire\FileBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\EntityProxyFormType;
use Victoire\Bundle\CoreBundle\Form\WidgetType;


/**
 * WidgetFile form type
 */
class WidgetFileType extends WidgetType
{

    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //choose form mode
        if ($this->entity_name === null) {
            //if no entity is given, we generate the static form
            $builder
                ->add('title')
                ->add('file', 'media', array(
                    'label' => 'widget.file.form.file.label'
                ))
                //
                ;

        } else {
            //else, WidgetType class will embed a EntityProxyType for given entity
            parent::buildForm($builder, $options);
        }


    }


    /**
     * bind form to WidgetFile entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\FileBundle\Entity\WidgetFile',
            'widget'             => 'file',
            'translation_domain' => 'victoire'
        ));
    }


    /**
     * get form name
     */
    public function getName()
    {
        return 'appventus_victoirecorebundle_widgetfiletype';
    }
}
