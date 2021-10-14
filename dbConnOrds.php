<?php

$db = mysqli_connect("localhost","root","","customerorder");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>