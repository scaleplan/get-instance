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
    protected static $instance;

    /**
     * Синглтон
     *
     * @param mixed ...$params - параметры конструктора
     *
     * @return mixed
     */
    public static function getInstance(...$params) : self
    {
        if (!static::$instance) {
            $className = static::class;
            static::$instance = new $className(...$params);
        }

        return static::$instance;
    }
}
