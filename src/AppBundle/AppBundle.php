<?php

namespace AppBundle;

use AppBundle\DependencyInjection\Compiler\RegisterDictionaryLoaderPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RegisterDictionaryLoaderPass());
    }

}
