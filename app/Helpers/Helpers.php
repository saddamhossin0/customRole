<?php

if (!function_exists('hasPermission')) {

    function hasPermission($key_word)
    {
//         dd(in_array($key_word, Auth::user()->permission));
        if (in_array($key_word, Sentinel::getUser()->permissions)) {
            return true;
        }
        return false;
    }
}



if (!function_exists('static_asset')) {

    function static_asset($path = null, $secure = null)
    {
        if (strpos(php_sapi_name(), 'cli') !== false || defined('LARAVEL_START_FROM_PUBLIC')) :
            return app('url')->asset($path, $secure);
        else:
            return app('url')->asset('public/' . $path, $secure);
        endif;
    }
}
