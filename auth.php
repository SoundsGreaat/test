<?php
function dd($var_dump, $html = false, $die = false)
{
    echo '<pre style="color:#850085;z-index:999999999!important;position:relative;background: #000000;">';
    if ($html) var_dump(htmlspecialchars($var_dump, ENT_QUOTES)); else var_dump($var_dump);
    echo '</pre>';
    if ($die) {
        die();
    }
}
function curl_get_contents($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
const ADMIN_LOGIN = '1';
const ADMIN_PASSWORD = '1';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])
    || ($_SERVER['PHP_AUTH_USER'] != ADMIN_LOGIN)
    || ($_SERVER['PHP_AUTH_PW'] != ADMIN_PASSWORD)) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Password For check-casino-kit-version.prokit.me"');
    exit("Access Denied: Username and password required.");
}