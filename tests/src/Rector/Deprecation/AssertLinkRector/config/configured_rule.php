<?php declare(strict_types=1);

use DrupalRector\Rector\Deprecation\AssertLinkRector;
use DrupalRector\Rector\Deprecation\AssertNoLinkRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(AssertLinkRector::class);
    $services->set(AssertNoLinkRector::class);

    $parameters = $containerConfigurator->parameters();
    $parameters->set('drupal_rector_notices_as_comments', true);
};
