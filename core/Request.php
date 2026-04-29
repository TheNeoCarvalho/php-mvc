<?php
namespace core;

use src\Config;

class Request {

    public static function getUrl() {
        // Tentar pegar da query string (quando .htaccess está ativo)
        if(isset($_GET['request'])) {
            $url = $_GET['request'];
        } else {
            // Fallback para REQUEST_URI (servidor sem .htaccess)
            $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $url = str_replace(Config::BASE_DIR, '', $url);
        }
        
        $url = trim($url, '/');
        return $url ? '/' . $url : '/';
    }

    public static function getMethod() {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}