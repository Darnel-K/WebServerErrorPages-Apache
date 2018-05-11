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
        406 => array('Not Acceptable!', 'The target resource does not have a current representation that would be acceptable to the user agent, according to the proactive negotiation header fields received in the request, and the server is unwilling to supply a default representation.'),
        407 => array('Proxy Authentication Required!', 'This server could not verify that you are authorized to access the URL "' . $HTTP . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '". You either supplied the wrong credentials (e.g., bad password), or your browser doesn\'t understand how to supply the credentials required. In case you are allowed to request the document, please check your user-id and password and try again.'),
        408 => array('Request Time-Out!', 'The server closed the network connection because the browser didn\'t finish the request within the specified time.'),
        409 => array('Conflict!', 'The request could not be completed due to a conflict with the current state of the target resource.'),
        410 => array('Resource Is No Longer Available!', 'The requested URL is no longer available on this server and there is no forwarding address. If you followed a link from a foreign page, please contact the author of this page.'),
        411 => array('Bad Content-Length!', 'A request with the ' . $_SERVER['REQUEST_METHOD'] . ' method requires a valid Content-Length header.'),
        412 => array('Precondition Failed!', 'The precondition on the request for the URL failed positive evaluation.'),
        413 => array('Request Entity Too Large!', 'The ' . $_SERVER['REQUEST_METHOD'] . ' method does not allow the data transmitted, or the data volume exceeds the capacity limit.'),
        414 => array('Submitted URI Too Large!', 'The length of the requested URL exceeds the capacity limit for this server. The request cannot be processed.'),
        415 => array('Unsupported Media Type!', 'The server does not support the media type transmitted in the request.'),
        416 => array('Requested Range Not Satisfiable!', 'None of the ranges in the request\'s Range header field overlap the current extent of the selected resource or that the set of ranges requested has been rejected due to invalid ranges or an excessive request of small or overlapping ranges.'),
        418 => array('I\'m A Teapot!', 'The requested entity body is short and stout.'),
        421 => array('Misdirected Request!', 'The client needs a new connection for this request as the requested host name does not match the Server Name Indication (SNI) in use for this connection.'),
        422 => array('Unprocessable Entity!', 'The server understands the content type of the request entity (hence a 415 Unsupported Media Type status code is inappropriate), and the syntax of the request entity is correct (thus a 400 Bad Request status code is inappropriate) but was unable to process the contained instructions.'),
        423 => array('Locked!', 'The source or destination resource of a method is locked.'),
        424 => array('Failed Dependency!', 'The method could not be performed on the resource because the requested action depended on another action and that action failed.'),
        426 => array('Upgrade Required!', 'The server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol.'),
        428 => array('Precondition Required!', 'The origin server requires the request to be conditional.'),
        429 => array('Too Many Requests!', 'You have made too many requests in too short a time. Try again later.'),
        431 => array('Request Header Fields Too Large!', 'The server is unwilling to process the request because its header fields are too large. The request MAY be resubmitted after reducing the size of the request header fields.'),
        500 => array('Internal Server Error!', 'The server encountered an internal error and was unable to complete your request. Either the server is overloaded or there was an error in a CGI script.'),
        501 => array('Cannot Process Request!', 'The server does not support the action requested by the browser.'),
        502 => array('Bad Gateway!', 'The proxy server received an invalid response from an upstream server.'),
        503 => array('Service Unavailable!', 'The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.'),
        504 => array('Gateway Timeout!', 'The server, while acting as a gateway or proxy, did not receive a timely response from an upstream server it needed to access in order to complete the request.'),
        505 => array('HTTP Version Not Supported!', 'The server does not support, or refuses to support, the major version of HTTP that was used in the request message.'),
        506 => array('Variant Also Varies!', 'A variant for the requested entity is itself a negotiable resource. Access not possible.'),
        507 => array('Insufficient Storage!', 'The method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request.'),
        508 => array('Loop Detected!', 'The server terminated an operation because it encountered an infinite loop while processing a request with "Depth: infinity". This status indicates that the entire operation failed.'),
        511 => array('Network Authentication Required!', 'You need to authenticate with the local network in order to gain access.')
    );
?>