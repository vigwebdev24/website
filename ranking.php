<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>


  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/iqac.css">
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/mblfooter.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<style>
  body {
    background-color: #F2F1ED !important;
  }
</style>

<body>
  <?php
  include_once 'connect.php';
  include_once  'navbar.php';

  ?>

  <div class="container home-div1">


    <!-- Rankings section starts -->

    <?php
    $sql = "SELECT * FROM  cards  where id like 'iqac_ranking_card%'  order by sequence";

    $sqlcount = "SELECT count(*) as total FROM  cards  where id like 'iqac_ranking_card%'";
    $resultcount = mysqli_query($conn, $sqlcount);
    $total = mysqli_fetch_assoc($resultcount);

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="ranking-section-0">
        <div class="ranking-sec-title">
          <div class="title-txt">Rankings</div>
        </div>
        <div class="ranking-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="ranking-content-box">
              <div class="rankno"><?php echo $row['title'] ?></div>
              <div class="ranktitle"><?php echo $row['subtitle'] ?></div>
              <div class="rankdesc"><?php echo $row['descr'] ?></div>
              <div>
                <div class="text_btnnew" data-toggle="modal" data-target="<?php echo '#' . $row['Id'] . '-overlay' ?>">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
            $sql1 = "SELECT * FROM  cards  where cardtype='rank' and id like 'iqachead_%' and sequence = ". $row['sequence'];
            $result1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            ?>
            <div class="modal fade" id="<?php echo $row['Id'] . '-overlay' ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="overlay-dialog" role="document">
                <div class="filter-modal_content">
                  <div class="modal-header overlaymodal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <img src="assets/icons/cross_big.png">
                      <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                    <div class="steps-head">
                      <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row1['title'] ?></h4>
                    </div>
                  </div>
                  <div class="modal-body overlaymodal-body">
                    <div class="content">
                      <div class="p">
                        <?php
                        echo $row1['descr'] . "<br><br>";

                        $sql2 = "SELECT * FROM  cards  where id not like 'iqac_ranking_card%' and id not like 'iqachead_%' and  cardtype='rank' and sequence = ". $row['sequence']." order by date desc";

                        $result2 = mysqli_query($conn, $sql2);
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?>

                          <div class="text_btnnew" onclick="window.open('<?php echo $row2['btn_hlink']; ?>',  '_blank')">
                            <div class="text_btnnew_innrdiv">
                              <div class="text_btnnew_txt">
                                <?php echo $row2['btn_nm'] ?>
                              </div>
                              <div>
                                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                              </div>
                            </div>
                          </div>
                          <br><br>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php
          }
          ?>

        </div>
      </div>
    <?php
    }
    ?>
    <!-- Rankings section ends -->

    <div class="divmargin-bottom"></div>

    <!-- footer starts here -->
    <div id="mblftr">
      <?php
      include_once  'mblfooter.php';
      ?>
    </div>
    <div id="ftr">
      <?php
      include_once  'footer.php';
      ?>
    </div>
    <!-- footer ends here -->

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