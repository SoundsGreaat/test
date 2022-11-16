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
print_r($_POST);
?>