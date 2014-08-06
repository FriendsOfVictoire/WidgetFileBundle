<?php
namespace Victoire\Widget\FileBundle\Translation;

use JMS\TranslationBundle\Model\Message;
use JMS\TranslationBundle\Translation\TranslationContainerInterface;

/**
 *
 */
class DynamicTranslations implements TranslationContainerInterface
{
    /**
     * Get the translations
     *
     * @return multitype:\JMS\TranslationBundle\Model\Message
     */
    public static function getTranslationMessages()
    {
        return array(
            new Message('modal.form.widget.type.file.label', 'victoire'),
            new Message('widget.file.new.action.label', 'victoire')
        );
    }
}
