<?php

namespace Security\Filters;

/**
 * Class Validation
 * @package Security\Filters
 * @link http://php.net/manual/ru/filter.filters.validate.php
 */
class Validation
{
    /**
     * @param string $string
     * @return bool
     */
    public static function boolean($string)
    {
        return filter_var($string, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function email($string)
    {
        return filter_var($string, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function float($string)
    {
        return filter_var($string, FILTER_VALIDATE_FLOAT);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function integer($string)
    {
        return filter_var($string, FILTER_VALIDATE_INT);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function ip($string)
    {
        return filter_var($string, FILTER_VALIDATE_IP);
    }

    /**
     * @param string $string
     * @param string $regExpr
     * @return bool
     */
    public static function regExpr($string, $regExpr)
    {
        return filter_var($string, FILTER_VALIDATE_REGEXP, $regExpr);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function url($string)
    {
        return filter_var($string, FILTER_VALIDATE_URL);
    }
}
