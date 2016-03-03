<?php

namespace Phig\Contracts;

interface ConfigInterface
{
    /**
     * Determine if the given configuration value exists.
     *
     * @param string $key
     *
     * @return bool
     */
    public function has($key);

    /**
     * Get the specified configuration value.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Get all of the configuration items for the application.
     *
     * @return array
     */
    public function all();

    /**
     * Set a given configuration value.
     *
     * @param array|string $key
     * @param mixed        $value
     */
    public function set($key, $value = null);

    /**
     * Prepend a value onto an array configuration value.
     *
     * @param string $key
     * @param mixed  $value
     */
    public function prepend($key, $value);

    /**
     * Push a value onto an array configuration value.
     *
     * @param string $key
     * @param mixed  $value
     */
    public function push($key, $value);
}