<?php

namespace Security\Filters;

/**
 * Class Cleaning
 * @package Security\Filters
 * @link http://php.net/manual/ru/filter.filters.sanitize.php
 */
class Cleaning
{
    /**
     * @param string $string
     * @return string|bool
     */
    public static function email($string)
    {
        return filter_var($string, FILTER_SANITIZE_EMAIL);
    }

    /**
     * @param string $string
     * @return string|bool
     */
    public static function encoded($string)
    {
        return filter_var($string, FILTER_SANITIZE_ENCODED);
    }

    /**
     * @param string $string
     * @return string|bool
     */
    public static function quotes($string)
    {
        return filter_var($string, FILTER_SANITIZE_MAGIC_QUOTES);
    }

    /**
     * @param string $string
     * @return string|bool
     */
    public static function float($string)
    {
        return filter_var($string, FILTER_SANITIZE_NUMBER_FLOAT);
    }

    /**
     * @param string $string
     * @return string|bool
     */
    public static function integer($string)
    {
        return filter_var($string, FILTER_SANITIZE_NUMBER_INT);
    }

    /**
     * @param string $string
     * @return string|bool
     */
    public static function specialChars($string)
    {
        return filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @param string $string
     * @return string|bool
     */
    public static function fullSpecialChars($string)
    {
        return filter_var($string, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    /**
     * @param string $string
     * @return string|bool
     */
    public static function string($string)
    {
        return filter_var($string, FILTER_SANITIZE_STRING);
    }

    /**
     * @param string $string
     * @return string|bool
     */
    public static function url($string)
    {
        return filter_var($string, FILTER_SANITIZE_URL);
    }

    /**
     * @param string $string
     * @return string|bool
     */
    public static function unsafe($string)
    {
        return filter_var($string, FILTER_UNSAFE_RAW);
    }
}
