<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>президент денег</title>
</head>
<body>


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

function dd($var_dump, $html = false, $die = false)
{
    echo '<pre style="color:#850085;z-index:999999999!important;position:relative;background: #000000;">';
    if ($html) var_dump(htmlspecialchars($var_dump, ENT_QUOTES)); else var_dump($var_dump);
    echo '</pre>';
    if ($die) {
        die();
    }
}

$url = 'https://api.openweathermap.org/data/2.5/weather?lat=11,11&lon=12,12&appid=df5f219bc934fe24a0f5d2136118b4de';
$lat = '';
$lon = '';
if (isset($_GET['city'])) {
    if ($_GET['city'] == 'kiev') {
        $lat = '50,40';
        $lon = '30,62';
    }
    if ($_GET['city'] == 'new york') {
        $lat = '40.75389424187133';
        $lon = '-73.98865955378368';
    }
    $url = "https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&appid=df5f219bc934fe24a0f5d2136118b4de";
}

$APIobj = json_decode(file_get_contents($url));
$f = $APIobj->main->temp;
$c = $f - 273.15;
echo(json_decode(file_get_contents("https://ifconfig.co/json?ip={$_SERVER['REMOTE_ADDR']}"))->ip .
    '<br>Облачность: ' . $APIobj->weather[0]->main . '<br>Температура: ' . $c . '<br>');
$arr = ['ukraine', 'kiev', 1, 2, 3, 5, 23, 4, 62, 5, true];
for ($i = 0; $i < count($arr); $i++) {
    echo($arr[$i] . '<br>');
}
?>

</body>
</html>