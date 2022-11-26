<?php
require 'auth.php';
require 'header.php';
?>
    <form action="index.php" method="post">
        <input type="login" name="login" placeholder="enter login">
        <input type="password" name="password" placeholder="enter password"><br>
        <input type="radio" name="radio" value="1">1<br>
        <input type="radio" name="radio" value="2">2<br>
        <input type="radio" name="radio" value="3">3<br>
        <input type="submit" value="Подтвердить" class="btn btn-success">
    </form>
<?php
echo $_POST['login'] . ' ' . ($_POST['password']) . '<br>';
$filename = 'test.txt';
$file = fopen($filename, 'w');
$content = json_decode(curl_get_contents("https://ifconfig.co/json?ip={$_SERVER['REMOTE_ADDR']}"))->ip;
fwrite($file, $content);
fclose($file);

$filer = fopen($filename, 'r');
echo fread($filer, filesize($filename)) . '<br>';
fclose($filer);
if (isset($_GET['_ijt'])) {
    $link = explode('?_ijt', $_SERVER['REQUEST_URI']);
    $redirect = "http://$_SERVER[HTTP_HOST]$link[0]";
    header("Location: $redirect");
//}
?>