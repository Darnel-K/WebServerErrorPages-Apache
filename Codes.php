<?php
    if (isset($_SERVER['HTTPS'])) {
        $HTTP = "https://";
    } else {
        $HTTP = "http://";
    }
    $ErrorCodes = array(
        400 => array('Bad Request!', 'Your browser (or proxy) sent a request that this server could not understand.'),
        401 => array('Authentication Required!', 'This server could not verify that you are authorized to access the URL "' . $HTTP . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '". You either supplied the wrong credentials (e.g., bad password), or your browser doesn\'t understand how to supply the credentials required. In case you are allowed to request the document, please check your user-id and password and try again.'),
        403 => array('Access Forbidden!', 'You don\'t have permission to access the requested object. It is either read-protected or not readable by the server.'),
        404 => array('Object Not Found!', 'The requested URL was not found on this server. If you entered the URL manually please check your spelling and try again.'),
        405 => array('Method Not Allowed!', 'The ' . $_SERVER['REQUEST_METHOD'] . ' method is not allowed for the requested URL.'),
        408 => array('Request Time-Out!', 'The server closed the network connection because the browser didn\'t finish the request within the specified time.'),
        410 => array('Resource Is No Longer Available!', 'The requested URL is no longer available on this server and there is no forwarding address. If you followed a link from a foreign page, please contact the author of this page.'),
        411 => array('Bad Content-Length!', 'A request with the ' . $_SERVER['REQUEST_METHOD'] . ' method requires a valid Content-Length header.'),
        412 => array('Precondition Failed!', 'The precondition on the request for the URL failed positive evaluation.'),
        413 => array('Request Entity Too Large!', 'The ' . $_SERVER['REQUEST_METHOD'] . ' method does not allow the data transmitted, or the data volume exceeds the capacity limit.'),
        414 => array('Submitted URI Too Large!', 'The length of the requested URL exceeds the capacity limit for this server. The request cannot be processed.'),
        415 => array('Unsupported Media Type!', 'The server does not support the media type transmitted in the request.'),
        418 => array('I\'m A Teapot!', 'The requested entity body is short and stout.'),
        500 => array('Internal Server Error!', 'The server encountered an internal error and was unable to complete your request. Either the server is overloaded or there was an error in a CGI script.'),
        501 => array('Cannot Process Request!', 'The server does not support the action requested by the browser.'),
        502 => array('Bad Gateway!', 'The proxy server received an invalid response from an upstream server.'),
        503 => array('Service Unavailable!', 'The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.'),
        505 => array('HTTP Version Not Supported!', 'The server does not support, or refuses to support, the major version of HTTP that was used in the request message.'),
        506 => array('Variant Also Varies!', 'A variant for the requested entity is itself a negotiable resource. Access not possible.')
    );
?>