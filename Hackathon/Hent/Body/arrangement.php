<div class="flexbox">
   <div class="stang"><img src="Bilder/stang.png" alt=""></div>
   <div class="bildeBG" id="gardin1"> <img src="Bilder/gardin.png" id="bg"></div>
   <div class="bildeBG2" id="gardin2"> <img src="Bilder/gardin.png" id="bg"></div>
   <div class="content">
     <div class="sorteringsbar">
       <form action="index.php" method="post">
         <div class="dato">
           <p>Arrangement etter:</p>
           <input type="text" name="dato" value="07-03-2020"></input>
         </div>
         <div class="arrangor">
           <p>Arrangør:</p>
           <select name="arra" class="arrangorer">

         <?php
         require 'Oppkobling/dbh.kob.php';

         $sql = "SELECT * FROM arrangement WHERE arrangement_id !=2";
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

                  echo '<option value="'; echo $id; echo '">'; echo $arrangor; echo '</option>';
                }
            }
        ?>
      </select>
      </div>
     <button class="submitknapp" type="submit" title="Fullfør">Fullfør</button>
    </form>
   </div>
   <?php

if (isset($_POST['arra']) && isset($_POST['dato'])) {

  $dato = $_POST['dato'];
  $arra = $_POST['arra'];

   require 'Oppkobling/dbh.kob.php';

   $sql = "SELECT * FROM arrangement WHERE arrangor LIKE '$arra' AND dato > $dato";
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

            echo '<div id="arrBilde"><img src="'; echo $bilde; echo '"></div>
                       <h1 id="tittel">'; echo $navn; echo '</h1>
                       <div id="arrTekst">
                         <h3>Start: '; echo $dato; echo ' kl '; echo $tid; echo '</h3>
                         <h3>Sted: '; echo $arrangor; echo '</h3>
                         <p>'; echo $beskrivelse; echo '</p>
                  </div>';
          }
      }
    }
  ?>

 </div>
</div>
