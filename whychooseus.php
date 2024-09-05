<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vignan University</title>
    <link rel="stylesheet" href="./css/mblfooter.css">
    <link rel="stylesheet" href="./css/WCU.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="./css/button.css">
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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/WCU.css" />

  </head>
  <body >
    <div class="WhyChooseUSMainContainer">
    <?php include "navbar.php" ?>
    <div class="MainAligner">
      <div class="container">
      <!--CombinerMainForWhyChooseUs-->
      <div class=" CombinerMainForWhyChooseUs">
        <!--Billboard_WhyChooseUs-->
        <?php
          $sql = "SELECT * FROM `sections` WHERE `id` = 'Billboard_WhyChooseUs';";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              if($row = $result->fetch_assoc()) {
                ?>
                <div class="BillboardTab">
                  <div class="BillBoardTop">
                    <div class="BillboardTabplane1">
                      <div
                        class="BillboardTabplane1Child"
                      >
                        <img
                          class="BillboardTabplane1ChildImg"
                          src="<?php echo $row["img1"] ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="BillboardTabplane2">
                      <div class="">
                        <div class="BillboardTabplane2TitleText">
                          <div><?php echo $row['title']; ?></div>
                         <!-- <div><?php echo substr($row['title'],10) ?></div>-->
                        </div>
                      </div>
                      <div class="BillboardTabplane2DiscriptionTextCont">
                        <div class="BillboardTabplane2DiscriptionTextWCU sm-text-desc">
                          <?php echo $row['descr'] ?>
                        </div>
                      </div>
                      <div class="BillboardTabplane2DiscriptionTextCont">
                        <div class="BillboardTabplane2Hyperlinks">
                          <button onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')" class="cta_button_primary Secondary-btn_txt"><?php echo $row['btn_nm1'] ?> <img src="assets/icons/Button_forwardarrow.png"></button>
                          <button onclick="window.open('<?php echo $row['btn2_hlink'] ?>',  '_blank')" class="cta_button_secondary Secondary-btn_txt"><?php echo $row['btn_nm2'] ?> <img src="assets/icons/arrow_forward.png"></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="BillBoardBottom">
                    <div class="BillBoardHeader"><?php echo $row['title']; ?></div>
                    <div class="BillBoardImg">
                      <img
                        src="<?php echo $row["img1"] ?>"
                        alt=""
                        srcset=""
                        class="BillBoardImgimg"
                      />
                    </div>
                    <div class="BillBoardDescription sm-text-desc">
                      <?php echo $row['descr']; ?>
                    </div>
                    <div class="BillBoardNavButtons">
                      <button class="BillBoardNavButtonRed" onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')" >
                        <div><?php echo $row['btn_nm1'] ?></div>
                        <img
                          class="BillBoardButtonArrows"
                          src="./assets/icons/ArrowHorizontalMiniWhite.svg"
                          alt=""
                        />
                      </button>
                      <button class="BillBoardNavButtonWhite" onclick="window.open('<?php echo $row['btn2_hlink'] ?>',  '_blank')">
                        <div><?php echo $row['btn_nm2'] ?></div>
                        <img
                          class="BillBoardButtonArrows"
                          src="./assets/icons/ArrowHorizontalMiniRed.svg"
                          alt=""
                        />
                      </button>
                    </div>
                  </div>
                </div>
                <?php 
              }
            }
        ?>
        <!--InvigoratingEnvironmentSection-->
        <?php      
          $sql = "SELECT * FROM `sections` WHERE `id` = 'WhyChooseUs_InvirogatingEnv';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
                <div class="InvigoratingEnvironmentSection">
                  <div class="InvigoratingEnvironment478">
                    <div class="InvigoratingEnvironment478h424">
                      <div class="InvigoratingEnvironment478h424h122 sm-text-header">
                        <div><?php echo substr($row['title'],0,12) ?></div>
                        <div><?php echo substr($row['title'],12) ?></div>
                      </div>
                      <div class="InvigoratingEnvironment478h424h253">
                        <div class="InvigoratingEnvironment478h424h253h30 sm-text-sub-header">
                          <?php echo $row['subsec1_title'] ?>
                        </div>
                        <div class="InvigoratingEnvironment478h424h253h198 sm-text-desc">
                          <?php echo $row['subsec1_desc'] ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="InvigoratingEnvironment450">
                    <img
                      src="<?php echo $row['img2'] ?>"
                      class="InvigoratingEnvironment450img"
                      alt=""
                    />
                  </div>
                  <div class="InvigoratingEnvironment292">
                    <div class="InvigoratingEnvironment478h244">
                      <img
                        src="<?php echo $row['img1'] ?>"
                        class="InvigoratingEnvironment478h244img"
                        alt=""
                      />
                    </div>
                    <div class="InvigoratingEnvironment292h363">
                      <div class="InvigoratingEnvironment292h363h30">
                        <?php echo $row['subsec2_title'] ?>
                      </div>
                      <div class="InvigoratingEnvironment292h363h308 sm-text-desc">
                        <?php echo $row['subsec2_desc'] ?>
                        <!-- <div>
                          Located along the Guntur-Tenali highway, just 35 kms from
                          Vijayawada, the institution is well connected to all the three
                          towns through public transport.
                        </div>
                        <div>
                          It is also well connected by rail and air. The biggest railway
                          Junction in South India, namely Vijayawada is just 45 minutes
                          drive from the University campus.
                        </div>
                        <div>
                          The Gannavaram airport is about an hour drive from the campus
                          and it provides daily flights to major cites like Bangalore,
                          Mumbai, Chennai, Hyderabad and Delhi.
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>            
              <?php 
            }
          }
        ?>
        <!--EncouragingMeritSection-->
        <?php      
          $sql = "SELECT * FROM `sections` WHERE `id` = 'WhyChooseUs_EncouragingMerit';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
              <div class="EncouragingMeritSection">
                <img
                  src="<?php echo $row["img2"] ?>"
                  class="EncouragingMeritSection450"
                />
                <div class="EncouragingMeritSection474">
                  <div class="EncouragingMeritSection474h122 sm-text-header"><?php echo $row["title"] ?></div>
                  <div class="EncouragingMeritSection474h264 sm-text-desc">
                    <div>
                      <?php echo $row["descr"] ?>
                    </div>
                    <ul class="mg-0">
                      <?php 
                        // Split the string into an array of characters
                        $parts = explode(",", $row['subsec1_desc']);
                        // Output each character in the array
                        foreach ($parts as $part) {
                            ?>
                            <li><?php echo $part?></li>
                            <?php
                        }
                      ?>
                    </ul>
                    <div >
                      <?php echo $row["subsec2_desc"] ?>
                    </div>
                  </div>
                </div>
                <div class="EncouragingMeritSection298">
                  <img
                    src="<?php echo $row["img3"] ?>"
                    class="EncouragingMeritSection298h298img"
                    alt=""
                  />
                  <img
                    src="<?php echo $row["img1"] ?>"
                    class="EncouragingMeritSection298h298img2"
                    alt=""
                  />
                </div>
              </div>
              <?php 
            }
          }
        ?>
        <!--KeepingPaceWithIndustry-->
        <?php      
          $sql = "SELECT * FROM `sections` WHERE `id` = 'WhyChooseUs_KeepingPace';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
                <div class="KeepingPaceWithIndustry">
                  <div class="KeepingPaceWithIndustry450">
                    <div class="KeepingPaceWithIndustry450h122 sm-text-header">
                      <?php echo $row["title"] ?>
                    </div>
                    <img
                      src="<?php echo $row["img1"] ?>"
                      class="KeepingPaceWithIndustry450h556"
                    />
                  </div>
                  <div class="KeepingPaceWithIndustry296">
                    <div class="KeepingPaceWithIndustry296h341">
                      <div class="KeepingPaceWithIndustry296h341h30 ">
                        <?php echo $row["subsec1_title"] ?>
                      </div>
                      <div class="KeepingPaceWithIndustry296h341h286 sm-text-desc">
                        <?php echo $row["subsec1_desc"] ?>
                      </div>
                    </div>
                    <div class="KeepingPaceWithIndustry296h165">
                      <div class="KeepingPaceWithIndustry296h165h30 "><?php echo $row["subsec2_title"] ?></div>
                      <div class="KeepingPaceWithIndustry296h165h110 sm-text-desc">
                        <?php echo $row["subsec2_desc"] ?>
                      </div>
                    </div>
                  </div>
                  <img
                    src="<?php echo $row["img2"] ?>"
                    class="KeepingPaceWithIndustry450Img"
                  />
                </div>
              <?php 
            }
          }
        ?>
        <!--ChalkingOutACareerOfChoice-->
        <?php      
          $sql = "SELECT * FROM `sections` WHERE `id` = 'WhyChooseUs_ChalkingOut';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
                <div class="ChalkingOutACareerOfChoice">
                  <div class="ChalkingOutACareerOfChoice373">
                    <div class="ChalkingOutACareerOfChoice373h183 sm-text-header">
                      <?php echo $row["title"] ?>
                    </div>
                    <div class="ChalkingOutACareerOfChoice373h231">
                      <div class="ChalkingOutACareerOfChoice373h231h30 sm-text-sub-header">
                        <?php echo $row["subsec1_title"] ?>
                      </div>
                      <div class="ChalkingOutACareerOfChoice373h231h176 sm-text-desc">
                        <?php echo $row["subsec1_desc"] ?>
                      </div>
                    </div>
                  </div>
                  <img
                    class="ChalkingOutACareerOfChoice450"
                    src="<?php echo $row["img1"] ?>"
                  />
                  <div class="ChalkingOutACareerOfChoice298">
                    <img
                      src="<?php echo $row["img2"] ?>"
                      class="ChalkingOutACareerOfChoice298h298I"
                    />
                    <div class="ChalkingOutACareerOfChoice373h187">
                      <div class="ChalkingOutACareerOfChoice373h187h30 sm-text-sub-header">
                        <?php echo $row["subsec2_title"] ?>
                      </div>
                      <div class="ChalkingOutACareerOfChoice373h187h132 sm-text-desc">
                        <?php echo $row["subsec2_desc"] ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php 
            }
          }
        ?>
        <!--JoinTheRanks-->
        <?php      
          $sql = "SELECT * FROM `sections` WHERE `id` = 'WhyChooseUs_JoinTheRanks';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
                <div class="JoinTheRanks">
                  <img class="JoinTheRanks450" src="<?php echo $row["img1"] ?>" />
                  <div class="JoinTheRanks373">
                    <div class="JoinTheRanks373h305 sm-text-header">
                      <?php echo $row["title"] ?>
                    </div>
                    <div class="JoinTheRanks373h275">
                      <div class="JoinTheRanks373h275h30"><?php echo $row["subsec1_title"] ?></div>
                      <div class="JoinTheRanks373h275h220 sm-text-desc">
                        <?php echo $row["subsec1_desc"] ?>
                      </div>
                    </div>
                  </div>
                  <div class="JoinTheRanks298">
                    <div class="JoinTheRanks298h198 sm-text-desc">
                      <?php echo $row["subsec2_desc"] ?>
                    </div>
                    <img
                      class="JoinTheRanks298h298"
                      src="<?php echo $row["img2"] ?>"
                    />
                  </div>
                </div>
              <?php 
            }
          }
        ?>
        <!--TrainingExtra-->
        <?php      
          $sql = "SELECT * FROM `sections` WHERE `id` = 'WhyChooseUs_Training';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
                <div class="TrainingExtra">
                  <div class="TrainingExtra478">
                    <div class="TrainingExtra478h122 sm-text-header"><?php echo $row["title"] ?></div>
                    <img
                      class="TrainingExtra478h244"
                      src="<?php echo $row["img1"] ?>"
                    />
                  </div>
                  <div class="TrainingExtra292">
                    <div class="TrainingExtra478h195">
                      <div class="TrainingExtra478h195h60 sm-text-sub-header">
                        <?php echo $row["subsec1_title"] ?>
                      </div>
                      <div class="TrainingExtra478h195h110 sm-text-desc">
                        <?php echo $row["subsec1_desc"] ?>
                      </div>
                    </div>
                    <div class="TrainingExtra292h327">
                      <div class="TrainingExtra292h327h60 sm-text-sub-header">
                        <?php echo $row["subsec2_title"] ?>
                      </div>
                      <div class="TrainingExtra292h327h242 sm-text-desc">
                        <?php echo $row["subsec2_desc"] ?>
                      </div>
                    </div>
                  </div>
                  <img class="TrainingExtra450" src="<?php echo $row["img2"] ?>" />
                </div>
              <?php 
            }
          }
        ?>
        <!--RichRepository-->
        <?php      
          $sql = "SELECT * FROM `sections` WHERE `id` = 'WhyChooseUs_ARichRepository';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
                <div class="RichRepository">
                  <img class="RichRepository450II" src="<?php echo $row["img2"] ?>" />
                  <div class="RichRepository450I">
                    <div class="RichRepository450Ih183 sm-text-header">
                      <?php echo $row["title"]; ?>
                    </div>
                    <div class="RichRepository296h319I">
                      <div class="RichRepository296h319Ih30 sm-text-sub-header"><?php echo $row["subsec1_title"]; ?></div>
                      <div class="RichRepository296h319Ih264 sm-text-desc">
                        <?php echo $row["subsec1_desc"]; ?>
                      </div>
                    </div>
                  </div>
                  <div class="RichRepository296">
                    <div class="RichRepository296h319I">
                      <div class="RichRepository296h319Ih30 sm-text-sub-header"><?php echo $row["subsec2_title"]; ?></div>
                      <div class="RichRepository296h319Ih264 sm-text-desc">
                        <?php echo $row["subsec2_desc"] ?>
                      </div>
                    </div>
                    <img
                      class="RichRepository450Ih556"
                      src="<?php echo $row["img1"]; ?>"
                    />
                  </div>
                </div>
              <?php 
            }
          }
        ?>
        <!---->
      </div>
    </div>
    <!---->
    <?php      
      $sql = "SELECT * FROM `sections` WHERE `id` = 'WhyChooseUs_LetsCreateHistory';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
          ?>
            <div class="CreateHistory">
              <div class="CreateHistoryContent">
                <div class="CreateHistory487">
                  <div class="CreateHistory487h183 sm-text-header">
                    <?php echo $row["title"]; ?>
                  </div>
                  <div class="CreateHistory487h53">
                    <button class="BillboardTabplane2Hyperlinks2" onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')">
                      <?php echo $row["btn_nm1"]; ?>
                      <img
                        src="./assets/icons/ArrowHorizontalMiniRed.svg"
                        style="width: 20px; height: 20px"
                        alt=""
                      />
                    </button>
                    <button class="BillboardTabplane2Hyperlinks1 border-cream" onclick="window.open('<?php echo $row['btn2_hlink'] ?>',  '_blank')">
                      <?php echo $row["btn_nm2"]; ?>
                      <img
                        src="./assets/icons/ArrowHorizontalMiniWhite.svg"
                        style="width: 20px; height: 20px"
                        alt=""
                      />
                    </button>
                  </div>
                </div>
                
              </div>
            </div>
          <?php 
        }
      }
    ?>
    <div class="footer-top-margin"></div>
    <!--footer-->
    <div id="mblftr">
        <?php
          include_once  'mblfooter.php';
        ?>
    </div>
    <div id="ftr">
      <div class="footer-cover">
        <?php
          include_once  'footer.php';
        ?>
      </div>
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
