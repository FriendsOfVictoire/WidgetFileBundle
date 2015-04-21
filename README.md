Victoire CMS File Bundle
============

Need to add a file in a victoire cms website ?
Get this file bundle and so on

First you need to have a valid Symfony2 Victoire edition.
Then you just have to run the following composer command :

    php composer.phar require victoire/file-widget

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\FileBundle\VictoireWidgetFileBundle(),
            );

            return $bundles;
        }
    }
