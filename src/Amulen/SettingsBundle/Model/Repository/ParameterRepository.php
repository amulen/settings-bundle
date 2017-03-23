<?php

namespace Amulen\SettingsBundle\Model\Repository;

use Amulen\SettingsBundle\Model\SettingRepository;
use Symfony\Component\DependencyInjection\Container;

/**
 *
 */
class ParameterRepository implements SettingRepository
{

    /**
     * @var Container
     */
    protected $container;

    /**
     * ParameterRepository constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }


    /**
     * Get a setting value.
     *
     * @param $key string
     * @return string|null
     */
    public function get($key)
    {
        return $this->container->hasParameter($key) ? $this->container->getParameter($key) : null;
    }

    /**
     * Get all settings.
     */
    public function getAll()
    {
        return $this->container->getParameterBag()->all();
    }
}