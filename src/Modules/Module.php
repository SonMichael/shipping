<?php


namespace HomeTest\Modules;


/**
 * Class Module
 * Module will contain repositories
 * @package HomeTest\Modules
 */
abstract class Module
{
    /** @var  static[] */
    private static array $instances = [];

    /**
     * @return static
     */
    public static final function getInstance()
    {
        if (!array_key_exists(static::class, self::$instances)) {
            self::$instances[static::class] = new static;
        }

        return self::$instances[static::class];
    }
}