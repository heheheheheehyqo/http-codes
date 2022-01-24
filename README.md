# HTTP status codes
![Packagist Version](https://img.shields.io/packagist/v/hyqo/http-codes?style=flat-square)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/hyqo/http-codes?style=flat-square)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/hyqo/http-codes/run-tests?style=flat-square)

## Install

```sh
composer require hyqo/http-codes
```
## Usage

### PHP >=7.2
```php
use Hyqo\HTTP\HTTPCode;

echo new HTTPCode(200); //HTTP/1.0 200 OK
echo (new HTTPCode(200)->setVersion(1.1)); //HTTP/1.1 200 OK
echo (new HTTPCode(200)->setVersion('http/1.1')); //HTTP/1.1 200 OK

echo HTTPCode::IM_A_TEAPOT; //418
echo HTTPCode::message(HTTPCode::IM_A_TEAPOT); //I'm a teapot
echo HTTPCode::message(418); //I'm a teapot

echo HTTPCode::version(200); //1
echo HTTPCode::version(203); //1.1
```

### Supported codes
See https://en.wikipedia.org/wiki/List_of_HTTP_status_codes

#### 1xx informational response
| Code | Message                         |
|------|---------------------------------|
| 100  | Continue                        |
| 101  | Switching Protocols             |
| 102  | Processing                      |
| 103  | Early Hints                     |

#### 2xx success
| Code | Message                         |
|------|---------------------------------|
| 200  | OK                              |
| 201  | Created                         |
| 202  | Accepted                        |
| 203  | Non-Authoritative Information   |
| 204  | No Content                      |
| 205  | Reset Content                   |
| 206  | Partial Content                 |
| 207  | Multi Status                    |
| 208  | Already Reported                |
| 226  | IM Used                         |

#### 3xx redirection
| Code | Message                         |
|------|---------------------------------|
| 300  | Multiple Choices                |
| 301  | Moved Permanently               |
| 302  | Found                           |
| 303  | See Other                       |
| 304  | Not Modified                    |
| 305  | Use Proxy                       |
| 306  | Switch Proxy                    |
| 307  | Temporary Redirect              |
| 308  | Permanent Redirect              |

#### 4xx client errors
| Code | Message                         |
|------|---------------------------------|
| 400  | Bad Request                     |
| 401  | Unauthorized                    |
| 402  | Payment Required                |
| 403  | Forbidden                       |
| 404  | Not Found                       |
| 405  | Method Not Allowed              |
| 406  | Not Acceptable                  |
| 407  | Proxy Authentication Required   |
| 408  | Request Timeout                 |
| 409  | Conflict                        |
| 410  | Gone                            |
| 411  | Length Required                 |
| 412  | Precondition Failed             |
| 413  | Payload Too Large               |
| 414  | URI Too Long                    |
| 415  | Unsupported Media Type          |
| 416  | Range Not Satisfiable           |
| 417  | Expectation Failed              |
| 418  | I'm a teapot                    |
| 421  | Misdirected Request             |
| 422  | Unprocessable Entity            |
| 423  | Locked                          |
| 424  | Failed Dependency               |
| 425  | Too Early                       |
| 426  | Upgrade Required                |
| 428  | Precondition Required           |
| 429  | Too Many Requests               |
| 431  | Request Header Fields Too Large |
| 451  | Unavailable For Legal Reasons   |

#### 5xx server errors
| Code | Message                         |
|------|---------------------------------|
| 500  | Internal Server Error           |
| 501  | Not Implemented                 |
| 502  | Bad Gateway                     |
| 503  | Service Unavailable             |
| 504  | Gateway Timeout                 |
| 505  | HTTP Version Not Supported      |
| 506  | Variant Also Negotiates         |
| 507  | Insufficient Storage            |
| 508  | Loop Detected                   |
| 510  | Not Extended                    |
| 511  | Network Authentication Required |
