<?php

declare(strict_types=1);

namespace Setono\PrerenderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('setono_prerender');

        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
