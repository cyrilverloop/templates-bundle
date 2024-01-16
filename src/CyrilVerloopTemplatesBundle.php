<?php

declare(strict_types=1);

namespace CyrilVerloop\Bundle\TemplatesBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class CyrilVerloopTemplatesBundle extends AbstractBundle
{
    public function prependExtension(ContainerConfigurator $containerConfigurator, ContainerBuilder $containerBuilder): void
    {
        $containerConfigurator->import('../config/packages/twig.yaml');
    }
}
