<?php
abstract class Route {

    public static $validRoutes = array();

    /**
     * Takes in a route name and if
     * it is available run the given function
     */
    public static function set(string $route, object $function) 
    {
        self::$validRoutes[] = $route;

        if ($_SERVER['REQUEST_URI'] == $route) {
            unset($_SESSION['error']);
            $function->__invoke();
        }
        elseif (!in_array($_SERVER['REQUEST_URI'], self::$validRoutes)) {
            $_SESSION['error'] = 'page error';
        }
    }

    public static function requireController(string $name) 
    {
        require_once('./src/Controllers/'.$name.'.php');
    }

    public static function requireLayout(string $name) 
    {
        require_once('./src/Views/Layouts/'.$name.'.php');
    }
}