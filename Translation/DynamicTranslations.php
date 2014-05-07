<?php
namespace Victoire\FileBundle\Translation;

use JMS\TranslationBundle\Model\Message;
use JMS\TranslationBundle\Translation\TranslationContainerInterface;
use JMS\TranslationBundle\Model\FileSource;

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
            new Message('widget.file.new.action.label', 'victoire')
        );
    }
}
