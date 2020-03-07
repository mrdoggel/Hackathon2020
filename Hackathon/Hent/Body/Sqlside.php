<div class="flexbox">
  <div class="stang"><img src="Bilder/stang.png" alt=""></div>
  <div class="bildeBG" id="gardin1"> <img src="Bilder/gardin.png" id="bg"></div>
  <div class="bildeBG2" id="gardin2"> <img src="Bilder/gardin.png" id="bg"></div>


<?php

  if (isset($_POST["ident"])) {
    $ident = $_POST["ident"];
    require 'Oppkobling/dbh.kob.php';

    $sql = "SELECT * FROM arrangement WHERE arrangement_id = $ident";
    $result = $conn->query($sql);
    $rowcount = '0';
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
             $id = $row["arrangement_id"];
             $navn = $row["navn"];
             $arrangor = $row["arrangor"];
             $beskrivelse = $row["beskrivelse"];
             $dato = $row["dato"];
             $tid = $row["tid"];
             $type = $row["type"];
             $bilde = $row["bilde"];

             echo '<div class="content">
                      <div id="arrBilde"><img src="'; echo $bilde; echo '"></div>
                        <h1 id="tittel">'; echo $navn; echo '</h1>
                        <div id="arrTekst">
                          <h3>Start: '; echo $dato; echo ' kl '; echo $tid; echo '</h3>
                          <h3>Sted: '; echo $arrangor; echo '</h3>
                          <p>'; echo $beskrivelse; echo '</p>
                        </div>
                        <form action="Oppkobling/registrerskal.php" method="post">
                         <input style="display: none;" name="aid" type="text" value="'; echo $aid; echo '"></input>
                         <button class="skalknapp" type="submit" name="skal" value="'; echo $id; echo '" >Skal</button>
                        </form>
                    </div>
                  </div>';

           }
      }
  }
  else if (isset($_POST["search"])) {
    $sok = $_POST["search"];
    require 'Oppkobling/dbh.kob.php';

    $aid = $_SESSION['minId'];

    $sql = "SELECT * FROM arrangement WHERE navn LIKE '%$sok%' OR arrangor LIKE '%$sok%'";
    $result = $conn->query($sql);
    $rowcount = '0';
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
             $id = $row["arrangement_id"];
             $navn = $row["navn"];
             $arrangor = $row["arrangor"];
             $beskrivelse = $row["beskrivelse"];
             $dato = $row["dato"];
             $tid = $row["tid"];
             $type = $row["type"];
             $bilde = $row["bilde"];

             echo '<div class="content">
                      <div id="arrBilde"><img src="'; echo $bilde; echo '"></div>
                        <h1 id="tittel">'; echo $navn; echo '</h1>
                        <div id="arrTekst">
                          <h3>Start: '; echo $dato; echo ' kl '; echo $tid; echo '</h3>
                          <h3>Sted: '; echo $arrangor; echo '</h3>
                          <p>'; echo $beskrivelse; echo '</p>
                        </div>
                        <form action="Oppkobling/registrerskal.php" method="post">
                         <input style="display: none;" name="aid" type="text" value="'; echo $aid; echo '"></input>
                         <button class="skalknapp" type="submit" name="skal" value="'; echo $id; echo '" >Skal</button>
                        </form>
                      </div>
                    </div>';

           }
      }
      else {
        echo "<h1 style='position: absolute; left: 29%;color: white;' id='tittel'>Ingen sammentreff med ".$sok.", prøv igjen.</h1>";
      }

  }

?>




<script>
  window.onscroll = function() {myFunction()};

  var gardin1 = document.getElementById("gardin1");
  var sticky1 = gardin1.offsetTop;
  var gardin2 = document.getElementById("gardin2");
  var sticky2 = gardin2.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky1) {
      gardin1.classList.add("sticky");
      gardin2.classList.add("sticky");
    } else {
        gardin1.classList.remove("sticky");
        gardin2.classList.remove("sticky");
      }
    }
  </script>
