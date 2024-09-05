<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/history.css" />
    <link rel="stylesheet" href="css/mblfooter.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="./css/button.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>Vignan University</title>
  </head>
  <body>
    <div class="MainAligner">
    <?php include_once "navbar.php" ?>
    <!---->
    <div class="container">
      <div class="TopAligner">
        <?php           
          $sql = "SELECT * FROM `sections` WHERE `id` = 'History_OurJourney';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
                <div class="OurJourneyTitle95"><?php echo $row["title"]; ?></div>
              <?php
            }
          }  
        ?>
        <div class="HistoryMainAligner">
          <div class="sectionaligningline"></div>
          <div class="HistorySectionsCont">
            <!--StartedFirstSchool-->
            <?php 
              $sql = "SELECT * FROM `sections` WHERE `id` = 'History_1983';";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                  ?>
                    <div class="StartedFirst">
                      <div class="StartedFirstCont">
                        <div class="StartedFirst381">
                          <div class="StartedFirst381h95"><?php echo $row["title"]; ?></div>
                          <div class="StartedFirst381h28"><?php echo $row["subsec1_title"]; ?></div>
                          <div class="StartedFirst381h176">
                            <?php echo $row["subsec1_desc"]; ?> </div>
                        </div>
                        <img
                          src="<?php echo $row["img1"]; ?>"
                          class="StartedFirst647"
                        />
                      </div>
                    </div>
                  <?php
                }
              } 
            ?>
            <!--StartedFirstHighSchool-->
            <?php           
              $sql = "SELECT * FROM `sections` WHERE `id` = 'History_1991';";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                  ?>
                    <div class="StartedFirstHighSchool">
                      <div class="StartedFirstHighSchoolCont">
                        <img
                          src="<?php echo $row["img1"]; ?>"
                          class="StartedFirstHighSchool647"
                        />
                        <div class="StartedFirstHighSchool315">
                          <div class="StartedFirstHighSchool315h95"><?php echo $row["title"]; ?></div>
                          <div class="StartedFirstHighSchool315h28">
                            <?php echo $row["subsec1_title"]; ?>
                          </div>
                          <div class="StartedFirstHighSchool315h176">
                            <?php echo $row["subsec1_desc"]; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                }
              }  
            ?>
            <!--StartedFirstSchool-->
            <?php 
              $sql = "SELECT * FROM `sections` WHERE `id` = 'History_2003';";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                  ?>
                    <div class="StartedFirst">
                      <div class="StartedFirstCont">
                        <div class="StartedFirst381">
                          <div class="StartedFirst381h95"><?php echo $row["title"]; ?></div>
                          <div class="StartedFirst381h28"><?php echo $row["subsec1_title"]; ?></div>
                          <div class="StartedFirst381h176">
                            <?php echo $row["subsec1_desc"]; ?> </div>
                        </div>
                        <img
                          src="<?php echo $row["img1"]; ?>"
                          class="StartedFirst647"
                        />
                      </div>
                    </div>
                  <?php
                }
              } 
            ?>
            <!--StartedFirstHighSchool-->
            <?php           
              $sql = "SELECT * FROM `sections` WHERE `id` = 'History_2024';";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                  ?>
                    <div class="StartedFirstHighSchool">
                      <div class="StartedFirstHighSchoolCont">
                        <img
                          src="<?php echo $row["img1"]; ?>"
                          class="StartedFirstHighSchool647"
                        />
                        <div class="StartedFirstHighSchool315">
                          <div class="StartedFirstHighSchool315h95"><?php echo $row["title"]; ?></div>
                          <div class="StartedFirstHighSchool315h28">
                            <?php echo $row["subsec1_title"]; ?>
                          </div>
                          <div class="StartedFirstHighSchool315h176">
                            <?php echo $row["subsec1_desc"]; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                }
              }  
            ?>
          </div>
        </div>
      </div>
    </div>
    <!---->
    <div class="footer-cover">
      <div id="mblftr">
          <?php include_once  'mblfooter.php'; ?>
      </div>
      <div id="ftr">
          <?php include_once  'footer.php'; ?>
      </div>
    </div>
    </div>
    
    
    <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/common.js"></script>
    <script>
      function toggleDivContent() {
        var smallScreenDiv = document.querySelector("#mblftr");
        var largeScreenDiv = document.querySelector("#ftr");
        if (window.innerWidth <= 700) {
            // Empty large-screen div and show small-screen div content
            largeScreenDiv.style.display = 'none';
            smallScreenDiv.style.display = 'block';
        } else {
            // Empty small-screen div and show large-screen div content
            smallScreenDiv.style.display = 'none';
            largeScreenDiv.style.display = 'block';
        }
    }
    window.addEventListener("resize", toggleDivContent);
    toggleDivContent();
    </script>
  </body>
</html>
