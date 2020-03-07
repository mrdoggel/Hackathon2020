     <div class="flexbox">
        <div class="stang"><img src="Bilder/stang.png" alt=""></div>
        <div class="bildeBG" id="gardin1"> <img src="Bilder/gardin.png" id="bg"></div>
        <div class="bildeBG2" id="gardin2"> <img src="Bilder/gardin.png" id="bg"></div>
        <div class="content">

          <?php

            require 'Oppkobling/dbh.kob.php';

            $sql = "SELECT * FROM arrangement";
            $result = $conn->query($sql);
            $rowcount = '0';
               if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                     $id = $row['arrangement_id'];
                     $navn = $row["navn"];
                     $arrangor = $row["arrangor"];
                     $beskrivelse = $row["beskrivelse"];
                     $dato = $row["dato"];
                     $tid = $row["tid"];
                     $type = $row["type"];
                     $bilde = $row["bilde"];
                     if ($type == 0) {

                     echo '<div class="litenBox">
                            <form action="index.php" method="post">
                              <button name="ident" value="'.$id.'" title="'.$navn.'"><img src="'.$bilde.'"</img></button>
                            </form>
                           </div>';

                     }
                     else if ($type == 1) {

                       echo '<div class="storBox">
                              <form action="index.php" method="post">
                                <button name="ident" value="'.$id.'" title="'.$navn.'"><img src="'.$bilde.'"</img></button>
                              </form>
                             </div>';

                     }
                   }
                }
          ?>

        </div>
    </div>
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
