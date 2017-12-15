<?php
    if ($ResponseCode == 401) {
        $HTTP_HOST = $_SERVER['HTTP_HOST'];
        $REQUEST_URI = $_SERVER['REQUEST_URI'];
        if ($_SERVER['HTTPS'] != null || "") {
            $HTTP = "https://";
        } else {
            $HTTP = "http://";
        }
    } else if ($ResponseCode == 405) {
        $Method = $_SERVER['REQUEST_METHOD'];
    }
    $ErrorCodes = array(
        400 => array('Bad request!', 'Your browser (or proxy) sent a request that this server could not understand.'),
        401 => array('Authentication required!', 'This server could not verify that you are authorized to access the URL "' . $HTTP . $HTTP_HOST . $REQUEST_URI . '". You either supplied the wrong credentials (e.g., bad password), or your browser doesn\'t understand how to supply the credentials required. In case you are allowed to request the document, please check your user-id and password and try again.'),
        403 => array('Access forbidden!', 'You don\'t have permission to access the requested object. It is either read-protected or not readable by the server.'),
        404 => array('Object not found!', 'The requested URL was not found on this server. If you entered the URL manually please check your spelling and try again.'),
        405 => array('Method not allowed!', 'The ' . $Method . ' method is not allowed for the requested URL.'),
        408 => array('Request time-out!', 'The server closed the network connection because the browser didn\'t finish the request within the specified time.'),
        410 => array(''),
        411 => array(''),
        412 => array(''),
        413 => array(''),
        414 => array(''),
        415 => array(''),
        418 => array(''),
        500 => array(''),
        501 => array(''),
        502 => array(''),
        503 => array(''),
        505 => array(''),
        506 => array('')
    );
?>