<?php

$sname="localhost";
$uname="root";
$password= "";

$db_name="test-db";

$conn = mysqli_connect($sname,$uname,$password,$db_name);

if (!$conn) {
    echo "connecttion failed";


}


