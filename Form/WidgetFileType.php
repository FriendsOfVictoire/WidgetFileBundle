<?php

namespace Victoire\Widget\FileBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\MediaBundle\Form\Type\MediaType;

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
            ->add('file', MediaType::class, [
                'label' => 'widget_file.form.file.label',
            ])
            ->add('linkLabel', null, [
                    'label' => 'widget_file.form.linkLabel.label',
                ]
            );

        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\FileBundle\Entity\WidgetFile',
            'widget'             => 'File',
            'translation_domain' => 'victoire',
        ]);
    }
}
