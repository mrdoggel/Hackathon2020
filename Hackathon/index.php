<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
      if (isset($_POST["knapp1"])) {
        require "Hent/Head/header.php";
      }
      else if (isset($_POST["knapp2"])) {
        require "Hent/Head/header.php";
      }
      else {
        require "Hent/Head/header.php";
      }
    ?>
    <title>Hackathon2020</title>
  </head>
  <body>
    <?php
      session_start();
      $aktiv1 = "";
      $aktiv2 = "";
      $ident = "";


      if (isset($_POST["knapp1"])) {
        $aktiv1 = "active";
        require "Hent/Body/header.php";
        require "Hent/Body/hovedside.php";
      }
      else if (isset($_POST["knapp2"])) {
        $aktiv2 = "active";
        require "Hent/Body/header.php";
        require "Hent/Body/Arrangement.php";
      }
      else if (isset($_POST["ident"])) {
        require "Hent/Body/header.php";
        require "Hent/Body/Sqlside.php";
      }
      else if (isset($_POST["search"])) {
        require "Hent/Body/header.php";
        require "Hent/Body/Sqlside.php";
      }
      else if (isset($_POST['dato']) && isset($_POST['arra'])) {
        $aktiv2 = "active";
        require "Hent/Body/header.php";
        require "Hent/Body/Arrangement.php";
      }
      else if (isset($_POST['registrer-knapp'])) {
        require "Hent/Body/header.php";
        require "Hent/Body/reg.php";
      }
      else if (isset($_POST['profil-knapp'])) {
        require "Hent/Body/header.php";
      }
      else {
        $aktiv1 = "active";
        require "Hent/Body/header.php";
        require "Hent/Body/hovedside.php";
      }
    ?>
  </body>
</html>
