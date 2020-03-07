<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    if (isset($_POST['registrert'])) {

      require 'dbh.kob.php';

      $fnavn = $_POST['fornavn'];
      $enavn = $_POST['etternavn'];
      $mail = $_POST['mail'];
      $brukernavn = $_POST['brukernavn'];
      $passord = $_POST['passord'];
      $bpassord = $_POST['bpassord'];


      if (empty($fnavn) || empty($enavn) || empty($mail) || empty($brukernavn) || empty($passord) || empty($bpassord)){
        header("Location: ../index.php?error=tommefelt");
        exit();
      } else if ($passord != $bpassord) {
        header("Location: ../index.php?error=passord_samsvarer_ikke");
      } else {
            $sql = "INSERT INTO bruker (fornavn, etternavn, email, brukernavn, passord) VALUES ('$fnavn', '$enavn', '$mail', '$brukernavn', '$passord')";
            if ($conn->query($sql) === TRUE) {
              header("Location: ../index.php?registrering=vellykket");
              exit();
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }
        } else {
          exit();
        }


?>
  </body>
</html>
