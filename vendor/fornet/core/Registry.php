<?php


namespace fornet;


class Registry
{
    use TSingltone;

    public static $properties;

    public static function setProperties ($name, $value) {
        self::$properties[$name] = $value;
    }

    public function getProperties($name) {
        if(isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }
}