Victoire DCMS File Bundle
============

##What is the purpose of this bundle

This bundles gives you access to the *File Widget*, with this you can define any file that the user can download directly from your website.

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the bundle

    php composer.phar require friendsofvictoire/file-widget

###Reminder

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
