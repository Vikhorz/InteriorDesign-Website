<?php

$db = mysqli_connect("localhost","root","","messages");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>