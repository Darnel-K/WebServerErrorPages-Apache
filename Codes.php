<?php
    $HTTP_HOST = $_SERVER['HTTP_HOST'];
    $REQUEST_URI = $_SERVER['REQUEST_URI'];
    $ErrorCodes = array(
        400 => array('Bad request!', 'Your browser (or proxy) sent a request that this server could not understand.'),
        401 => array('Authentication required!', 'This server could not verify that you are authorized to access the URL "' . $HTTP_HOST . $REQUEST_URI . '". You either supplied the wrong credentials (e.g., bad password), or your browser doesn\'t understand how to supply the credentials required. In case you are allowed to request the document, please check your user-id and password and try again.'),
        403 => array('Access forbidden!', 'You don\'t have permission to access the requested object. It is either read-protected or not readable by the server.'),
        404 => array('Object not found!', 'The requested URL was not found on this server. If you entered the URL manually please check your spelling and try again.'),
        405 => array(),
        408 => array(),
        410 => array(),
        411 => array(),
        412 => array(),
        413 => array(),
        414 => array(),
        415 => array(),
        418 => array(),
        500 => array(),
        501 => array(),
        502 => array(),
        503 => array(),
        505 => array(),
        506 => array()
    );
?>