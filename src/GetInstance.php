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
    public static function create(...$params)
    {
        if (!self::$instance) {
            $className = static::class;
            self::$instance = new $className(...$params);
        }

        return self::$instance;
    }
}