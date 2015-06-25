<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // Symfony
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),

            // doctrine
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),


            new AppBundle\AppBundle(),

            // FOS User-Bundle
            new FOS\UserBundle\FOSUserBundle(),

            // JMS Security
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),

            // White October BreadCrumb
            new WhiteOctober\BreadcrumbsBundle\WhiteOctoberBreadcrumbsBundle(),

            // KNPLabs
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),

            // app
            new Eeckman\ObjectBundle\EeckmanObjectBundle(),
            new Eeckman\EventsBundle\EeckmanEventsBundle(),
            new Eeckman\UserBundle\EeckmanUserBundle(),
            new Eeckman\AddressBundle\EeckmanAddressBundle(),
            new Eeckman\PolicyBundle\EeckmanPolicyBundle(),
            new Eeckman\CoverageBundle\EeckmanCoverageBundle(),
            new Eeckman\TransportsBundle\EeckmanTransportsBundle(),
            new Eeckman\CertificateBundle\EeckmanCertificateBundle(),

        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
