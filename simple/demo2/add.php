<?php

if ($_REQUEST['method'] == 'post') {
    insert($_REQUEST);
    require 'index.php';
    exit();
}

function insert()
{
}

?>
<form action='add.php' method="Post">
</form>
