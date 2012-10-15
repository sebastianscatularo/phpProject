<?php

namespace Libs\Core;

class Request {

    private $phpself;
    private $gatewayinterface;
    private $serveraddr;
    private $servername;
    private $servername;
    private $serversoftware;
    private $serverprotocol;
    private $requestmethod;
    private $requesttime;
    private $requesttimefloat;
    private $querystring;
    private $documentroot;
    private $httpaccept;
    private $httpacceptcharset;
    private $httpacceptencodig;
    private $httpacceptlanguaje;
    private $httpconnection;
    private $httphost;
    private $httpreferer;
    private $httpuseragent;
    private $https;
    private $remoteaddr;
    private $remotehost;
    private $remoteport;
    private $remoteuser;
    private $redirectremoteuser;
    private $scriptfilename;
    private $serveradmin;
    private $serverport;
    private $serversignature;
    private $pathtranslated;
    private $scriptname;
    private $requesturi;
    private $phpauthdigest;
    private $phpauthuser;
    private $phpauthpw;
    private $authtype;
    private $pathinfo;
    private $origpathinfo;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __construct() {
        foreach ($_SERVER as $key => $value) {
            $key = strtolower(str_replace("_", "", $key));
            $this->$key = $value;
        }
        unset($_SERVER);
    }

//  'UNIQUE_ID' => string 'UHiS0X8AAAEAABKT3AMAAAAF' (length=24)
//  'HTTP_HOST' => string 'api.local' (length=9)
//  'HTTP_CONNECTION' => string 'keep-alive' (length=10)
//  'HTTP_CACHE_CONTROL' => string 'max-age=0' (length=9)
//  'HTTP_USER_AGENT' => string 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4' (length=102)
//  'HTTP_ACCEPT' => string 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8' (length=63)
//  'HTTP_ACCEPT_ENCODING' => string 'gzip,deflate,sdch' (length=17)
//  'HTTP_ACCEPT_LANGUAGE' => string 'es-419,es;q=0.8' (length=15)
//  'HTTP_ACCEPT_CHARSET' => string 'ISO-8859-1,utf-8;q=0.7,*;q=0.3' (length=30)
//  'PATH' => string '/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin' (length=60)
//  'SERVER_SIGNATURE' => string '<address>Apache/2.2.23 (Unix) mod_ssl/2.2.23 OpenSSL/1.0.1c DAV/2 PHP/5.4.7 Server at api.local Port 80</address>' (length=114)
//  'SERVER_SOFTWARE' => string 'Apache/2.2.23 (Unix) mod_ssl/2.2.23 OpenSSL/1.0.1c DAV/2 PHP/5.4.7' (length=66)
//  'SERVER_NAME' => string 'api.local' (length=9)
//  'SERVER_ADDR' => string '127.0.0.1' (length=9)
//  'SERVER_PORT' => string '80' (length=2)
//  'REMOTE_ADDR' => string '127.0.0.1' (length=9)
//  'DOCUMENT_ROOT' => string '/home/sebastian/public_html/phpProject/public_html' (length=50)
//  'SERVER_ADMIN' => string 'you@example.com' (length=15)
//  'SCRIPT_FILENAME' => string '/home/sebastian/public_html/phpProject/public_html/index.php' (length=60)
//  'REMOTE_PORT' => string '39273' (length=5)
//  'GATEWAY_INTERFACE' => string 'CGI/1.1' (length=7)
//  'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8)
//  'REQUEST_METHOD' => string 'GET' (length=3)
//  'QUERY_STRING' => string '/persona' (length=8)
//  'REQUEST_URI' => string '/?/persona' (length=10)
//  'SCRIPT_NAME' => string '/index.php' (length=10)
//  'PHP_SELF' => string '/index.php' (length=10)
//  'REQUEST_TIME_FLOAT' => float 1350079185.866
//  'REQUEST_TIME' => int 1350079185
}

?>
