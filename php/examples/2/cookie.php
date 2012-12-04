<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        setcookie($_REQUEST['cookieName'], $_REQUEST['cookieValue'], 0);

    }

    var_dump($_COOKIE);
?>
<form action="" method="post">
    <input type="text" name="cookieName"
           value="<?php echo (isset($_REQUEST['cookieName']) ? $_REQUEST['cookieName'] : '') ?>" />:
    <input type="text" name="cookieValue"
           value="<?php echo (isset($_REQUEST['cookieValue']) ? $_REQUEST['cookieValue'] : '') ?>" />

    <br />
    <input type="submit" value="Store cookie" />
</form>
