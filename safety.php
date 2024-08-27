<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>


  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/button.css">
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

  .home-goodfood_innrdiv {
    gap: 49px;
  }

  .home_goalstitle {
    margin-top: 0;
  }

  .home-goodfood_txt {
    color: var(--Colors-Text-Color, #000);
    font-family: "Familjen Grotesk";
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 140%;
  }

  .home-goodfood_div2 {
    width: 23%;
    gap: 23px;
  }

  @media (max-width: 991px) {
    .home-goodfood_div2 {
      width: 100%;
    }

    .home-goodfood_img3 {
      border-radius: 0;
    }

    .home-goodfood_txt {
      width: 100% !important;
    }
  }

  .subtext {
    color: var(--Colors-Text-Color, #000);
    font-family: "Familjen Grotesk";
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 140%;
  }

  .home-facilities {
    margin-top: 10% !important;
  }
</style>

<body>
  <?php
  include_once 'connect.php';
  include_once  'navbar.php';

  ?>

  <div class="container home-div1">

    <?php
    $sqlquery16 = "SELECT * FROM  sections  where id='safety_main'";

    $result = mysqli_query($conn, $sqlquery16);
    $safety = mysqli_fetch_assoc($result);
    ?>

    <div class="home-facilities divmargin-top10 divmargin-bottom">
      <div class="home-goodfood_innrdiv">
        <div class="home_goalstitle">
          <?php echo $safety['title']; ?>
        </div>
        <div>
          <img style="width:100%;" src=" <?php echo $safety['img1']; ?>" />
        </div>
        <div class="home-goodfood_txt" style="font-size:16px;">
          <?php echo $safety['descr']; ?>
        </div>
        <div>
          <div class="text_btnnew" onclick="window.open('<?php echo $safety['btn1_hlink']; ?>',  '_blank')">
            <div class="text_btnnew_innrdiv">
              <div class="text_btnnew_txt">
                <?php echo $safety['btn_nm1']; ?>
              </div>
              <div>
                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <img class="honor-img2" src="<?php echo $safety['img2']; ?>" />
      </div>
      <div class="home-goodfood_div2">
        <div class="subtext">
          <?php echo $safety['subsec1_desc']; ?>
        </div>
        <div>
          <div class="text_btnnew" onclick="window.open('<?php echo $safety['subsec1_btn1_hlink']; ?>',  '_blank')">
            <div class="text_btnnew_innrdiv">
              <div class="text_btnnew_txt">
                <?php echo $safety['subsec1_btn1']; ?>
              </div>
              <div>
                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
              </div>
            </div>
          </div>
        </div>
        <div>
          <img class="home-goodfood_img3" src="<?php echo $safety['img3']; ?>" />
        </div>
      </div>
    </div>

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