<?php

require_once('db_credentials.php');

function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;
}
//need to pass in the variable created from db_connect() into db_disconnect()
function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}
