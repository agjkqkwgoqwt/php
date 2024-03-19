<?php

require "variables.php";

$mysqli = new mysqli($host, $mysqluser, $mysqluserpassword, $mysqldb);

//Check connection and raise error if occurs
if ($mysqli -> connect_errno) {
    echo "MySQL onnection failed with error: " . $mysql -> connect_error;
    exit();
}