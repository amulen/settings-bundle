<?php

namespace Amulen\SettingsBundle\Model;

/**
 * Interface SettingRepository
 */
interface SettingRepository
{

    /**
     * Get a setting value.
     *
     * @param $key string
     * @return string|null
     */
    public function get($key);


    /**
     * Get all settings.
     */
    public function getAll();
}