<?php
//require 'auth.php';
require 'header.php';
?>
    <form method="post">
        <input type="login" name="login" placeholder="enter login">
        <input type="password" name="password" placeholder="enter password">
        <input type="submit" value="Подтвердить" class="btn btn-success">
    </form>
<?php
//print_r($_POST);

$filename = 'test.txt';
$file = fopen($filename, 'w');
$content = json_decode(curl_get_contents("https://ifconfig.co/json?ip={$_SERVER['REMOTE_ADDR']}"))->ip;
fwrite($file, $content);
fclose($file);

$filer = fopen($filename, 'r');
echo fread($filer, filesize($filename));
fclose($filer);
?>