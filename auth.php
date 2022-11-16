<?php
const ADMIN_LOGIN = '1';
const ADMIN_PASSWORD = '1';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])
    || ($_SERVER['PHP_AUTH_USER'] != ADMIN_LOGIN)
    || ($_SERVER['PHP_AUTH_PW'] != ADMIN_PASSWORD)) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Password For check-casino-kit-version.prokit.me"');
    exit("Access Denied: Username and password required.");
}