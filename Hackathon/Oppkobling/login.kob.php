<?php

  if (isset($_POST['logginn-knapp'])) {

    require 'dbh.kob.php';

    $user = $_POST['username'];
    $pwd = $_POST['psw'];


    if (empty($user) || empty($pwd)) {
      header("Location: ../index.php?error=emptyfields");
      exit();
    }
    else {
      $sql = "SELECT * FROM bruker WHERE brukernavn = '$user'";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
      }
      else {

        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
          if ($pwd !== $row['passord']) {
            header('Location:../index.php?=wrongpassword');
          }
          else if ($pwd == $row['passord']) {
            session_start();
            $_SESSION['userId'] = $row['brukernavn'];
            $_SESSION['userUid'] = $row['fornavn'];
            $_SESSION['minId'] = $row['bruker_id'];

            header("Location: ../index.php");
            exit();
          }
          else {
            header("Location: ../index.php?error=wrongpassword2");
            exit();
          }
        }
        else {
          header("Location: ../index.php?error=nouser");
          exit();
        }

      }
    }

  }
  else {
    header("Location: ../index.php");
    exit();
  }
 ?>
