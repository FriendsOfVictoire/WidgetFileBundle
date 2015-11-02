<?php

namespace Victoire\Widget\FileBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

/**
 * WidgetFile form type.
 */
class WidgetFileType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'file',
                'media',
                [
                    'label' => 'widget_file.form.file.label',
                ]
            )
            ->add(
                'linkLabel',
                null,
                [
                    'label' => 'widget_file.form.linkLabel.label',
                ]
            );

        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetFile entity.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\FileBundle\Entity\WidgetFile',
            'widget'             => 'File',
            'translation_domain' => 'victoire',
        ]);
    }

    /**
     * get form name.
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_file';
    }
}
