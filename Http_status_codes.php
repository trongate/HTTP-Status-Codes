<?php
class Http_status_codes extends Trongate {

    public $http_status_codes = [
        // 1xx Informational
        100 => [
            'code' => 100,
            'phrase' => 'Continue',
            'description' => 'This interim response indicates that the client should continue the request or ignore the response if the request is already finished.',
            'category' => 'Informational'
        ],
        101 => [
            'code' => 101,
            'phrase' => 'Switching Protocols',
            'description' => 'This code is sent in response to an Upgrade request header from the client and indicates the protocol the server is switching to.',
            'category' => 'Informational'
        ],
        102 => [
            'code' => 102,
            'phrase' => 'Processing',
            'description' => 'Deprecated. This code was used in WebDAV contexts to indicate that a request has been received by the server, but no status was available at the time of the response.',
            'category' => 'Informational',
            'note' => 'Deprecated'
        ],
        103 => [
            'code' => 103,
            'phrase' => 'Early Hints',
            'description' => 'This status code is primarily intended to be used with the Link header, letting the user agent start preloading resources while the server prepares a response or preconnect to an origin from which the page will need resources.',
            'category' => 'Informational'
        ],

        // 2xx Success
        200 => [
            'code' => 200,
            'phrase' => 'OK',
            'description' => 'The request succeeded. The result and meaning of "success" depends on the HTTP method: GET → resource fetched, HEAD → headers only, PUT/POST → result description, TRACE → request echo.',
            'category' => 'Successful'
        ],
        201 => [
            'code' => 201,
            'phrase' => 'Created',
            'description' => 'The request succeeded, and a new resource was created as a result. This is typically the response sent after POST requests, or some PUT requests.',
            'category' => 'Successful'
        ],
        202 => [
            'code' => 202,
            'phrase' => 'Accepted',
            'description' => 'The request has been received but not yet acted upon. It is noncommittal, intended for cases where another process or server handles the request, or for batch processing.',
            'category' => 'Successful'
        ],
        203 => [
            'code' => 203,
            'phrase' => 'Non-Authoritative Information',
            'description' => 'The returned metadata is not exactly the same as from the origin server, but is collected from a local or third-party copy (mostly used for mirrors/backups).',
            'category' => 'Successful'
        ],
        204 => [
            'code' => 204,
            'phrase' => 'No Content',
            'description' => 'There is no content to send for this request, but the headers are useful. The user agent may update its cached headers.',
            'category' => 'Successful'
        ],
        205 => [
            'code' => 205,
            'phrase' => 'Reset Content',
            'description' => 'Tells the user agent to reset the document which sent this request.',
            'category' => 'Successful'
        ],
        206 => [
            'code' => 206,
            'phrase' => 'Partial Content',
            'description' => 'This response code is used in response to a range request when the client has requested a part or parts of a resource.',
            'category' => 'Successful'
        ],
        207 => [
            'code' => 207,
            'phrase' => 'Multi-Status',
            'description' => 'Conveys information about multiple resources (WebDAV), for situations where multiple status codes might be appropriate.',
            'category' => 'Successful'
        ],
        208 => [
            'code' => 208,
            'phrase' => 'Already Reported',
            'description' => 'Used inside a <dav:propstat> response element to avoid repeatedly enumerating the internal members of multiple bindings to the same collection (WebDAV).',
            'category' => 'Successful'
        ],
        226 => [
            'code' => 226,
            'phrase' => 'IM Used',
            'description' => 'The server has fulfilled a GET request for the resource using one or more instance-manipulations (HTTP Delta encoding).',
            'category' => 'Successful'
        ],

        // 3xx Redirection
        300 => [
            'code' => 300,
            'phrase' => 'Multiple Choices',
            'description' => 'The request has more than one possible response and the client/user should choose one (agent-driven content negotiation). Rarely used.',
            'category' => 'Redirection'
        ],
        301 => [
            'code' => 301,
            'phrase' => 'Moved Permanently',
            'description' => 'The URL of the requested resource has been changed permanently. The new URL is given in the response.',
            'category' => 'Redirection'
        ],
        302 => [
            'code' => 302,
            'phrase' => 'Found',
            'description' => 'The URI of the requested resource has been changed temporarily. The same URI should be used for future requests.',
            'category' => 'Redirection'
        ],
        303 => [
            'code' => 303,
            'phrase' => 'See Other',
            'description' => 'The server directs the client to get the requested resource at another URI using a GET request.',
            'category' => 'Redirection'
        ],
        304 => [
            'code' => 304,
            'phrase' => 'Not Modified',
            'description' => 'Used for caching. Tells the client the resource has not changed, so it can use the cached version.',
            'category' => 'Redirection'
        ],
        305 => [
            'code' => 305,
            'phrase' => 'Use Proxy',
            'description' => 'Deprecated. Indicated that the response must be accessed through a proxy (deprecated due to security concerns).',
            'category' => 'Redirection',
            'note' => 'Deprecated'
        ],
        306 => [
            'code' => 306,
            'phrase' => '(Unused)',
            'description' => 'No longer used; reserved (was used in an earlier HTTP/1.1 specification).',
            'category' => 'Redirection'
        ],
        307 => [
            'code' => 307,
            'phrase' => 'Temporary Redirect',
            'description' => 'Temporary redirect. The client must reuse the same HTTP method when following the redirect (unlike 302).',
            'category' => 'Redirection'
        ],
        308 => [
            'code' => 308,
            'phrase' => 'Permanent Redirect',
            'description' => 'Permanent redirect. The client must reuse the same HTTP method (like 301, but preserves method).',
            'category' => 'Redirection'
        ],

        // 4xx Client Error
        400 => [
            'code'        => 400,
            'phrase'      => 'Bad Request',
            'short'       => 'Bad Request',
            'description' => 'The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing).',
            'category'    => 'Client Error'
        ],
        401 => [
            'code'        => 401,
            'phrase'      => 'Unauthorized',
            'short'       => 'Unauthorized',
            'description' => 'Although the HTTP standard specifies "unauthorized", semantically this response means "unauthenticated". That is, the client must authenticate itself to get the requested response.',
            'category'    => 'Client Error'
        ],
        402 => [
            'code'        => 402,
            'phrase'      => 'Payment Required',
            'short'       => 'Payment Required',
            'description' => 'The initial purpose of this code was for digital payment systems, however this status code is rarely used and no standard convention exists.',
            'category'    => 'Client Error',
            'note'        => 'Rarely used'
        ],
        403 => [
            'code'        => 403,
            'phrase'      => 'Forbidden',
            'short'       => 'Forbidden',
            'description' => 'The client does not have access rights to the content; that is, it is unauthorized, so the server is refusing to give the requested resource. Unlike 401 Unauthorized, the client\'s identity is known to the server.',
            'category'    => 'Client Error'
        ],
        404 => [
            'code'        => 404,
            'phrase'      => 'Not Found',
            'short'       => 'Not Found',
            'description' => 'The server cannot find the requested resource. In the browser, this means the URL is not recognized. In an API, this can also mean that the endpoint is valid but the resource itself does not exist. Servers may also send this response instead of 403 Forbidden to hide the existence of a resource from an unauthorized client. This response code is probably the most well known due to its frequent occurrence on the web.',
            'category'    => 'Client Error'
        ],
        405 => [
            'code'        => 405,
            'phrase'      => 'Method Not Allowed',
            'short'       => 'Method Not Allowed',
            'description' => 'The request method is known by the server but is not supported by the target resource. For example, an API may not allow DELETE on a resource, or the TRACE method entirely.',
            'category'    => 'Client Error'
        ],
        406 => [
            'code'        => 406,
            'phrase'      => 'Not Acceptable',
            'short'       => 'Not Acceptable',
            'description' => 'This response is sent when the web server, after performing server-driven content negotiation, doesn\'t find any content that conforms to the criteria given by the user agent.',
            'category'    => 'Client Error'
        ],
        407 => [
            'code'        => 407,
            'phrase'      => 'Proxy Authentication Required',
            'short'       => 'Proxy Authentication Required',
            'description' => 'This is similar to 401 Unauthorized but authentication is needed to be done by a proxy.',
            'category'    => 'Client Error'
        ],
        408 => [
            'code'        => 408,
            'phrase'      => 'Request Timeout',
            'short'       => 'Request Timeout',
            'description' => 'This response is sent on an idle connection by some servers, even without any previous request by the client. It means that the server would like to shut down this unused connection. This response is used much more since some browsers use HTTP pre-connection mechanisms to speed up browsing.',
            'category'    => 'Client Error'
        ],
        409 => [
            'code'        => 409,
            'phrase'      => 'Conflict',
            'short'       => 'Conflict',
            'description' => 'This response is sent when a request conflicts with the current state of the server. In WebDAV remote web authoring, 409 responses are errors sent to the client so that a user might be able to resolve a conflict and resubmit the request.',
            'category'    => 'Client Error'
        ],
        410 => [
            'code'        => 410,
            'phrase'      => 'Gone',
            'short'       => 'Gone',
            'description' => 'This response is sent when the requested content has been permanently deleted from server, with no forwarding address. Clients are expected to remove their caches and links to the resource. The HTTP specification intends this status code to be used for "limited-time, promotional services". APIs should not feel compelled to indicate resources that have been deleted with this status code.',
            'category'    => 'Client Error'
        ],
        411 => [
            'code'        => 411,
            'phrase'      => 'Length Required',
            'short'       => 'Length Required',
            'description' => 'Server rejected the request because the Content-Length header field is not defined and the server requires it.',
            'category'    => 'Client Error'
        ],
        412 => [
            'code'        => 412,
            'phrase'      => 'Precondition Failed',
            'short'       => 'Precondition Failed',
            'description' => 'In conditional requests, the client has indicated preconditions in its headers which the server does not meet.',
            'category'    => 'Client Error'
        ],
        413 => [
            'code'        => 413,
            'phrase'      => 'Content Too Large',
            'short'       => 'Payload Too Large',
            'description' => 'The request body is larger than limits defined by server. The server might close the connection or return a Retry-After header field.',
            'category'    => 'Client Error'
        ],
        414 => [
            'code'        => 414,
            'phrase'      => 'URI Too Long',
            'short'       => 'URI Too Long',
            'description' => 'The URI requested by the client is longer than the server is willing to interpret.',
            'category'    => 'Client Error'
        ],
        415 => [
            'code'        => 415,
            'phrase'      => 'Unsupported Media Type',
            'short'       => 'Unsupported Media Type',
            'description' => 'The media format of the requested data is not supported by the server, so the server is rejecting the request.',
            'category'    => 'Client Error'
        ],
        416 => [
            'code'        => 416,
            'phrase'      => 'Range Not Satisfiable',
            'short'       => 'Range Not Satisfiable',
            'description' => 'The ranges specified by the Range header field in the request cannot be fulfilled. It\'s possible that the range is outside the size of the target resource\'s data.',
            'category'    => 'Client Error'
        ],
        417 => [
            'code'        => 417,
            'phrase'      => 'Expectation Failed',
            'short'       => 'Expectation Failed',
            'description' => 'This response code means the expectation indicated by the Expect request header field cannot be met by the server.',
            'category'    => 'Client Error'
        ],
        418 => [
            'code'        => 418,
            'phrase'      => 'I\'m a teapot',
            'short'       => 'I\'m a teapot',
            'description' => 'The server refuses the attempt to brew coffee with a teapot.',
            'category'    => 'Client Error',
            'note'        => 'April Fools\' joke (RFC 2324)'
        ],
        421 => [
            'code'        => 421,
            'phrase'      => 'Misdirected Request',
            'short'       => 'Misdirected Request',
            'description' => 'The request was directed at a server that is not able to produce a response. This can be sent by a server that is not configured to produce responses for the combination of scheme and authority that are included in the request URI.',
            'category'    => 'Client Error'
        ],
        422 => [
            'code'        => 422,
            'phrase'      => 'Unprocessable Content',
            'short'       => 'Unprocessable Entity',
            'description' => 'The request was well-formed but was unable to be followed due to semantic errors. (WebDAV)',
            'category'    => 'Client Error'
        ],
        423 => [
            'code'        => 423,
            'phrase'      => 'Locked',
            'short'       => 'Locked',
            'description' => 'The resource that is being accessed is locked. (WebDAV)',
            'category'    => 'Client Error'
        ],
        424 => [
            'code'        => 424,
            'phrase'      => 'Failed Dependency',
            'short'       => 'Failed Dependency',
            'description' => 'The request failed due to failure of a previous request. (WebDAV)',
            'category'    => 'Client Error'
        ],
        425 => [
            'code'        => 425,
            'phrase'      => 'Too Early',
            'short'       => 'Too Early',
            'description' => 'Indicates that the server is unwilling to risk processing a request that might be replayed.',
            'category'    => 'Client Error',
            'note'        => 'Experimental'
        ],
        426 => [
            'code'        => 426,
            'phrase'      => 'Upgrade Required',
            'short'       => 'Upgrade Required',
            'description' => 'The server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol. The server sends an Upgrade header in a 426 response to indicate the required protocol(s).',
            'category'    => 'Client Error'
        ],
        428 => [
            'code'        => 428,
            'phrase'      => 'Precondition Required',
            'short'       => 'Precondition Required',
            'description' => 'The origin server requires the request to be conditional. This response is intended to prevent the \'lost update\' problem.',
            'category'    => 'Client Error'
        ],
        429 => [
            'code'        => 429,
            'phrase'      => 'Too Many Requests',
            'short'       => 'Too Many Requests',
            'description' => 'The user has sent too many requests in a given amount of time (rate limiting).',
            'category'    => 'Client Error'
        ],
        431 => [
            'code'        => 431,
            'phrase'      => 'Request Header Fields Too Large',
            'short'       => 'Request Header Fields Too Large',
            'description' => 'The server is unwilling to process the request because its header fields are too large. The request may be resubmitted after reducing the size of the request header fields.',
            'category'    => 'Client Error'
        ],
        451 => [
            'code'        => 451,
            'phrase'      => 'Unavailable For Legal Reasons',
            'short'       => 'Unavailable For Legal Reasons',
            'description' => 'The user agent requested a resource that cannot legally be provided, such as a web page censored by a government.',
            'category'    => 'Client Error'
        ],

        // 5xx Server Error
        500 => [
            'code'        => 500,
            'phrase'      => 'Internal Server Error',
            'short'       => 'Internal Server Error',
            'description' => 'The server has encountered a situation it does not know how to handle. This error is generic, indicating that the server cannot find a more appropriate 5XX status code to respond with.',
            'category'    => 'Server Error'
        ],
        501 => [
            'code'        => 501,
            'phrase'      => 'Not Implemented',
            'short'       => 'Not Implemented',
            'description' => 'The request method is not supported by the server and cannot be handled. The only methods that servers are required to support (and therefore must not return this code) are GET and HEAD.',
            'category'    => 'Server Error'
        ],
        502 => [
            'code'        => 502,
            'phrase'      => 'Bad Gateway',
            'short'       => 'Bad Gateway',
            'description' => 'This error response means that the server, while working as a gateway to get a response needed to handle the request, got an invalid response.',
            'category'    => 'Server Error'
        ],
        503 => [
            'code'        => 503,
            'phrase'      => 'Service Unavailable',
            'short'       => 'Service Unavailable',
            'description' => 'The server is not ready to handle the request. Common causes are a server that is down for maintenance or that is overloaded. Should be used for temporary conditions; Retry-After header is recommended.',
            'category'    => 'Server Error'
        ],
        504 => [
            'code'        => 504,
            'phrase'      => 'Gateway Timeout',
            'short'       => 'Gateway Timeout',
            'description' => 'This error response is given when the server is acting as a gateway and cannot get a response in time.',
            'category'    => 'Server Error'
        ],
        505 => [
            'code'        => 505,
            'phrase'      => 'HTTP Version Not Supported',
            'short'       => 'HTTP Version Not Supported',
            'description' => 'The HTTP version used in the request is not supported by the server.',
            'category'    => 'Server Error'
        ],
        506 => [
            'code'        => 506,
            'phrase'      => 'Variant Also Negotiates',
            'short'       => 'Variant Also Negotiates',
            'description' => 'The server has an internal configuration error: during content negotiation, the chosen variant is configured to engage in content negotiation itself, which results in circular references when creating responses.',
            'category'    => 'Server Error'
        ],
        507 => [
            'code'        => 507,
            'phrase'      => 'Insufficient Storage',
            'short'       => 'Insufficient Storage',
            'description' => 'The method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request. (WebDAV)',
            'category'    => 'Server Error'
        ],
        508 => [
            'code'        => 508,
            'phrase'      => 'Loop Detected',
            'short'       => 'Loop Detected',
            'description' => 'The server detected an infinite loop while processing the request. (WebDAV)',
            'category'    => 'Server Error'
        ],
        510 => [
            'code'        => 510,
            'phrase'      => 'Not Extended',
            'short'       => 'Not Extended',
            'description' => 'The client request declares an HTTP Extension (RFC 2774) that should be used to process the request, but the extension is not supported.',
            'category'    => 'Server Error'
        ],
        511 => [
            'code'        => 511,
            'phrase'      => 'Network Authentication Required',
            'short'       => 'Network Authentication Required',
            'description' => 'Indicates that the client needs to authenticate to gain network access.',
            'category'    => 'Server Error'
        ]
    ];

    /**
     * Get information about an HTTP status code
     *
     * @param int $code The HTTP status code to look up
     * @return array|null Returns the status code info array, or null if not found
     */
    public function get_status_info(int $code): ?array {
        return $this->http_status_codes[$code] ?? null;
    }

}