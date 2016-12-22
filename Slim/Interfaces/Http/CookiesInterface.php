<?php
/**
 * Slim Framework (https://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Slim\Interfaces\Http;

/**
 * Cookies Interface
 *
 * @package Slim
 * @since   3.0.0
 */
interface CookiesInterface
{
    public function get(string $name, $default = null);
    public function set(string $name, $value);
    public function toHeaders() : array;
    public static function parseHeader($header) : array;
}
