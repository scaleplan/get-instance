<?php

namespace Scaleplan\GetInstance;

/**
 * Трейт для добавления синглтона классу
 *
 * Trait GetInstanceTrait
 *
 * @package Scaleplan\GetInstance
 */
trait GetInstanceTrait
{
    public static $instance;

    /**
     * Синглтон
     *
     * @param mixed ...$params - параметры конструктора
     *
     * @return mixed
     */
    public static function getInstance(...$params)
    {
        if (!static::$instance) {
            $className = static::class;
            static::$instance = new $className(...$params);
        }

        return static::$instance;
    }
}