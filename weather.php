<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
</head>
<body>
<?php
include 'header.php';
$url = 'https://api.openweathermap.org/data/2.5/weather?lat=11,11&lon=12,12&appid=df5f219bc934fe24a0f5d2136118b4de';
$APIobj = json_decode(file_get_contents($url));
$f = $APIobj->main->temp;
$c = $f - 273.15;
echo('<h1>' . '<br>Облачность: ' . $APIobj->weather[0]->main . '<br>Температура: ' . $c . '<br></h1>');
?>
</body>
</html>