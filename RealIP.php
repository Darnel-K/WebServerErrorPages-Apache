<?php
function GetIP() {
    if(function_exists('apache_request_headers')) {
        $Headers = apache_request_headers();
    } else {
        $Headers = $_SERVER;
    }
    if(array_key_exists('X-Forwarded-For', $Headers) && filter_var($Headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        return $Headers['X-Forwarded-For'];
    } elseif (array_key_exists('HTTP_X_FORWARDED_FOR', $Headers) && filter_var($Headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        return $Headers['HTTP_X_FORWARDED_FOR'];
    } else {
        return filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    }
}
?>