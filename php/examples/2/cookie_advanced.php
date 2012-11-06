<?php
    include_once './includes/functions.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        store_into_session($_REQUEST['cookieName'], $_REQUEST['cookieValue']);
    }
?>
<form action="" method="post">
    <input type="text" name="cookieName" value="" />:
    <input type="text" name="cookieValue" value="" />

    <br />
    <input type="submit" value="Store cookie" />
</form>

<hr />
Current session data:<br />
<?php

    var_dump(db_get());

?>