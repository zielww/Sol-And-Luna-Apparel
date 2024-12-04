<?php

namespace Core;

class Session
{
    public static function has($key)
    {
        return (bool) static::get($key);
    }

    public static function get($key, $default = null)
    {
        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $default;
    }

    public static function fetch($key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public static function put($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function flash($key, $value)
    {
        $_SESSION['_flash'][$key] = $value;
    }

    public static function unflash()
    {
        unset($_SESSION['_flash']);
    }

    public static function flush()
    {
        $_SESSION = [];
    }

    public static function destroy()
    {
        static::flush();
        session_destroy();
        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }

    public static function get_flashed(array $keys = []): array
    {
        return array_reduce($keys, function ($carry, $key) {
            $carry[$key] = Session::get($key, null);
            return $carry;
        }, []);
    }
}