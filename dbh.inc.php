<?php

$servername = "localhost";
$dBusername = "root";
$dBpassword = "";
$dBName ="hostelsys";

$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBName);

if (!$conn) {
   die("Connection failed" . mysqli_connect_error());
}
