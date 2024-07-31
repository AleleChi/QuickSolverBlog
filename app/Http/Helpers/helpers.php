<?php

function getPaginate($paginate = 20)
{
    return $paginate;
}

function renderArray($array) {
    if (is_array($array)) {
        echo '<ul>';
        foreach ($array as $key => $value) {
            echo '<li><strong>' . htmlspecialchars($key) . ':</strong> ';
            if (is_array($value)) {
                renderArray($value);
            } else {
                echo htmlspecialchars($value);
            }
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo htmlspecialchars($array);
    }
}

function menuOpen($routeName, $type = null)
{
    if ($type == 3) {
        $class = 'open';
    } elseif ($type == 2) {
        $class = 'sidebar-submenu__open';
    } else {
        $class = 'active';
    }
    if (is_array($routeName)) {
        foreach ($routeName as $key => $value) {
            if (request()->routeIs($value)) {
                return $class;
            }
        }
    } elseif (request()->routeIs($routeName)) {
        return $class;
    }
}

function verificationCode($length)
{
    if ($length == 0) return 0;
    $min = pow(10, $length - 1);
    $max = 0;
    while ($length > 0 && $length--) {
        $max = ($max * 10) + 9;
    }
    return random_int($min, $max);
}


function menuActive($routeName, $type = null)
{
    if ($type == 3) {
        $class = 'active';
    } elseif ($type == 2) {
        $class = 'sidebar-submenu__open';
    } else {
        $class = 'active';
    }
    if (is_array($routeName)) {
        foreach ($routeName as $key => $value) {
            if (request()->routeIs($value)) {
                return $class;
            }
        }
    } elseif (request()->routeIs($routeName)) {
        return $class;
    }
}

function getName()
{
    return auth()->user()->name;
}

function getUserById($userId){
    $user = \App\Models\User::find($userId);
    if (is_null($user)) {
        return 'Unknown User';
    }
    return $user->first_name.' '.$user->last_name;

}

function showDateTime($date, $format = 'd M, Y h:i A')
{
    $lang = session()->get('lang');
    \Carbon\Carbon::setlocale($lang);
    return \Carbon\Carbon::parse($date)->translatedFormat($format);
}

function diffForHumans($date)
{
    $lang = session()->get('lang');
    return \Carbon\Carbon::parse($date)->diffForHumans();
}

function getAmount($amount, $length = 0)
{
    if (0 < $length) {
        return number_format($amount + 0, $length);
    }
    return $amount + 0;
}

function urlPath($routeName,$routeParam=null){
    if($routeParam == null){
        $url = route($routeName);
    } else {
        $url = route($routeName,$routeParam);
    }
    $basePath = route('dashboard');
    $path = str_replace($basePath,'',$url);
    return $path;
}


