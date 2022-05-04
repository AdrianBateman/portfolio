<?php

namespace Route;

class Route
{
    private static array $routes = array();
    private static $pathNotFound = null;
    private static $methodNotAllowed = null;

    public static function add($expression, $function, $method = 'get')
    {
        self::$routes[] = array(
            'expression' => $expression,
            'function' => $function,
            'method' => $method
        );
    }

    public static function pathNotFound($function)
    {
        self::$pathNotFound = $function;
    }

    public static function methodNotAllowed($function)
    {
        self::$methodNotAllowed = $function;
    }

    private static function noMatchFound($pathMatchFound, $path, $method)
    {
        if ($pathMatchFound) {
            header("HTTP/1.0 405 Method Not Allowed");
            if (self::$methodNotAllowed) {
                call_user_func_array(self::$methodNotAllowed, array($path, $method));
            }
        } else {
            header("HTTP/1.0 404 Not Found");
            if (self::$pathNotFound) {
                call_user_func_array(self::$pathNotFound, array($path));
            }
        }
    }

    public static function run($basePath = '/')
    {
        $parsedUrl = parse_url($_SERVER['REQUEST_URI']);

        $path = $parsedUrl['path'] ?? '/';

        $method = $_SERVER['REQUEST_METHOD'];
        $pathMatchFound = false;
        $routeMatchFound = false;

        foreach (self::$routes as $route) {
            if ($basePath != '' && $basePath != '/') {
                $route['expression'] = '(' . $basePath . ')' . $route['expression'];
            }

            $route['expression'] = '^' . $route['expression'];
            $route['expression'] = $route['expression'] . '$';

            if (preg_match('#' . $route['expression'] . '#', $path, $matches)) {
                $pathMatchFound = true;

                if (strtolower($method) == strtolower($route['method'])) {
                    array_shift($matches);

                    if ($basePath != '' && $basePath != '/') {
                        array_shift($matches);
                    }

                    call_user_func_array($route['function'], $matches);
                    $routeMatchFound = true;
                    break;
                }
            }
        }

        if (!$routeMatchFound) {
            self::noMatchFound($pathMatchFound, $path, $method);
        }
    }
}
