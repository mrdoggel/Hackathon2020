<div class="header">
  <!-- Knapper i navbar/header - blir dropdown i telefonstørrelse !-->
  <img style=" width: 50%; float: left;" class="headerimg" src="Bilder/top.png"/>
  <img style=" width: 50%; float: right" class="headerimg" src="Bilder/top.png"/>
  <div class="dropdown">
    <a class="kryss"><img src="Bilder/kryssknapp.png"/></a>
    <a class="meny"><img src="Bilder/menyknapp.png"/></a>
    <div class="dropdown-innhold">
      <form action="index.php" method="post" style="display: inline;">
        <button class="<?php echo $aktiv1; ?>" type="submit" name="knapp1" title="Hovedside">Hovedside</button>
      </form>
      <form action="index.php" method="post" style="display: inline;"  >
        <button class="<?php echo $aktiv2; ?>" type="submit" name="knapp2" title="Arrangement">Arrangementer</button>
      </form>
    </div>
  </div>
  <!-- "Overskrift" i navbar/header !-->
  <div class="tekst">
    <a href="index.php"><h1>Spotlight</h1></a>
  </div>
  <!-- Søkeområdet i navbar/header !-->
  <div class="search-container">
    <form action="index.php" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <!-- Logg-inn område i navbar/header !-->
  <?php
    if (isset($_SESSION['userId'])) {
    $fornavn = $_SESSION['userUid'];
  ?>
      <!-- Logg-inn når man er logget inn !-->
      <div class="login">
	       <a class="logbtn"><img src="Bilder/profil.png"/></a>
         <div class="logg-content">
    	      <p> Du er logget inn som <?php echo $fornavn; ?></p>
            <form style="display: inline;" action="index.php" method="post">
              <button type="submit" name="profil-knapp" title="Din profil">Din profil</button>
            </form>
            <form style="display: inline;" action="Oppkobling/logout.kob.php" method="post">
              <button type="submit" name="loggut-knapp" title="Logg ut">Logg ut</button>
            </form>
        </div>
      </div>

      <?php
    }
    else {
      ?>
      <!-- Logg-inn område når man ikke er logget inn !-->
      <div class="login">
	       <a class="logbtn"><img src="Bilder/profil.png"/></a>
         <div class="logg-content">
    	      <form style="display: inline;" action="Oppkobling/login.kob.php" method="post">
              <input type="text" placeholder="brukernavn" name="username"></input><br>
              <input type="password" placeholder="Passord" name="psw"></input><br>
              <button class="knapp1" type="submit" name="logginn-knapp" title="Logg inn">Logg inn</button>
      	    </form>
      	    <form style="display: inline;" action="index.php" action="" method="post">
          	   <button class="reg" type="submit" name="registrer-knapp" title="Registrering">Registrer deg</button>
      	    </form>
        </div>
      </div>

  <?php
    }
  ?>
</div>
