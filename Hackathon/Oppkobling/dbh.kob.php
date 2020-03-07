<?php

$servername = "localhost";
$dBusername = "root";
$dBpassword = "";
$dBname ="hackathon";

$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);
$conn->set_charset("utf8");

if (!$conn) {
  die("connection failed: ".mysqli_connect_error());
}
