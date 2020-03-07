<?php
session_start();
if (isset($_POST['skal'])) {

  require 'dbh.kob.php';

  $bid = $_POST['skal'];
  $aid = $_POST['aid'];

  $sql = "INSERT INTO arrangementbruker (bruker_id, arrangement_id) VALUES ($bid, $aid)";
  if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php?registrering=vellykket");
    exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }

}

?>
