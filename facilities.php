<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>

  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/u-life.css">
  <link rel="stylesheet" href="css/facilities.css">
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/iqac.css">
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


    <!-- Hero section start here -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_hero'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="ulife-div-19">
        <div class="ulife-div-20">
          <div class="ulife-column">
            <div class="ulife-div-21">
              <div class="ulife-div-22"><?php echo $row['title'] ?></div>
              <div class="ulife-div-23">
                <?php echo $row['descr'] ?>
              </div>
            </div>
          </div>
          <div class="ulife-column-2">
            <div class="ulife-div-24">
              <img loading="lazy" src=<?php echo $row['img1'] ?> alt="image" class="ulife-img-5" />
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Hero section ends here -->

    <!-- general facility sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_general'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="gfacility-section">
        <div class="gfacility-img-container">
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img3']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm3']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img4']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm4']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn4_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="gfacility-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img5']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['subsec1_btn1']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['subsec1_btn1_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- general facility sections ends -->

    <!-- outdoor sports sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_outdoor'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="outdoor-section">
        <div class="gfacility-img-container">
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img3']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm3']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img4']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm4']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn4_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="gfacility-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img5']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['subsec1_btn1']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['subsec1_btn1_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- outdoor sports sections ends -->

    <!-- indoor sports sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_indoor'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="indoor-section">
        <div class="indoor-img-container">
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box2">
            <div class="card-img1" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box3">
            <div class="card-img1" style="background-image: url(<?php echo $row['img3']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm3']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="indoor-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img4']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['btn_nm4']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn4_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- indoor sports sections ends -->

    <!-- Hostel sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_hostel'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="hostel-section">
        <div class="indoor-img-container">
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box2">
            <div class="card-img1" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box3">
            <div class="card-img1" style="background-image: url(<?php echo $row['img3']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm3']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hostel-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
          <div>
            <div class="text_btnnew" data-toggle="modal" data-target="#hostel-overlay">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  <?php echo $row['subsec1_btn1']; ?>
                </div>
                <div>
                  <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img4']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['btn_nm4']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn4_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Hostel sections ends -->

    <!-- Food sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_food'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="indoor-section">
        <div class="indoor-img-container">
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box2">
            <div class="card-img1" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box3">
            <div class="card-img1" style="background-image: url(<?php echo $row['img3']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm3']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hostel-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img4']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['btn_nm4']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn4_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Food sections ends -->

    <!-- Library sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_library'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="hostel-section">
        <div class="indoor-img-container">
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box2">
            <div class="card-img1" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box3">
            <div class="card-img1" style="background-image: url(<?php echo $row['img3']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm3']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hostel-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
          <div>
            <div class="text_btnnew" data-toggle="modal" data-target="#library-overlay">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  <?php echo $row['subsec1_btn1']; ?>
                </div>
                <div>
                  <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img4']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['btn_nm4']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn4_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Library sections ends -->

    <!-- Accessibility sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_accessibility'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="indoor-section">
        <div class="indoor-img-container">
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box2">
            <div class="card-img1" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box3">
            <div class="card-img1" style="background-image: url(<?php echo $row['img3']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm3']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="food-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img4']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['btn_nm4']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn4_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Accessibility sections ends -->

    <!-- Medical sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_medical'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="hostel-section">
        <div class="indoor-img-container">
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="medical-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img3']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['btn_nm3']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Medical sections ends -->

    <!-- security sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_safety'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="indoor-section">
        <div class="indoor-img-container">
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hostel-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img3']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['btn_nm3']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- security sections ends -->

    <!-- transport sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_transport'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="hostel-section">
        <div class="indoor-img-container">
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box1">
            <div class="card-img3" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay3">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hostel-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
          <div>
            <div class="text_btnnew" data-toggle="modal" data-target="#transport-overlay">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  <?php echo $row['subsec1_btn1']; ?>
                </div>
                <div>
                  <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img3']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['btn_nm3']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Transport sections ends -->

    <!-- guesthouse sections stars -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='facilities_guesthouse'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="gfacility-section">
        <div class="gfacility-img-container">
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img1']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm1']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="gfacility-img-box">
            <div class="card-img1" style="background-image: url(<?php echo $row['img2']; ?>);">
              <div class="card-overlay1">
                <div class="card-caption"><?php echo $row['btn_nm2']; ?>
                  <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                    <img src="assets/svgicons/arrow_outward.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="gfacility-details-container">
          <div class="gfacility-title"><?php echo $row['title']; ?></div>
          <div class="gfacility-desc"><?php echo $row['descr']; ?></div>
        </div>
      </div>
      <div style="margin-top: 25px;">
        <div class="card-img2" style="background-image: url(<?php echo $row['img3']; ?>);">
          <div class="card-overlay2">
            <div class="card-caption"><?php echo $row['btn_nm3']; ?>
              <button class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                <img src="assets/svgicons/arrow_outward.svg" />
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- gguesthouse sections ends -->





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


  <!-- hostel overlay starts -->
  <div class="modal fade" id="hostel-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Hostel</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body mbcontent-mob">
          <div class="content1 p">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore facere, laborum repellat cumque nisi distinctio nihil repellendus dolor suscipit optio mollitia blanditiis quaerat excepturi earum. Modi, blanditiis. Nobis officia aperiam quae beatae ab porro, esse asperiores, doloribus, et fugiat illum voluptatum sapiente voluptate consectetur minima? Exercitationem suscipit odio dicta neque possimus enim itaque ipsam similique rem tempora ipsa esse magni eveniet, earum vero dolorum, quis in laboriosam dolorem repellat consequuntur reiciendis! Doloribus eveniet totam sint asperiores nesciunt quae accusamus! Officia exercitationem, delectus et vel non, nobis saepe itaque deserunt voluptates doloribus impedit odit? Iure eos, vitae quidem reiciendis hic quam.
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- hostel Overlay ends -->


  <!-- library overlay starts -->
  <div class="modal fade" id="library-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Library</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1 p">
            The Central library at Vignan's University, inaugurated in the year of 2005 by the Coal and Mines Minister, Govt. of India, Sri. Dasari Narayana Rao has an exclusive user friendly and comfort oriented infrastructure, which is spread over a space of about 2951 Sqm. It is an air conditioned, aesthetically designed facility with plenty of indoor greenery, modern furniture and reprographic conveniences. There are separate enclaves for individual and group study. Students and staff can avail the library from 7.30 AM to 10.00 PM everyday and refer to a wide variety of resources, apart from the books relevant to their curriculum, like a rich collection of titles and journals useful for general study and research.
            <h3>Ground Floor</h3>
            The ground floor of the library is spread over a floor space of about 1500 sqm. It has a lounge area for relaxed reading, text book reference, stock area of issue books of all departments, Thesis, Question Papers, Journals back volumes etc.
            The library also has separate display racks for National and international print journals, magazines separate reading area for news papers.
            The library circulation section issues renewals and returns more than 1000 on a daily basis with more than 1100 students and staff utilizing the library services daily. It has an Online Public Access Catalogue (OPAC) technology to facilitate for user friendly, quick and easy search facility for the students and faculty.
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- library Overlay ends -->

  <!-- transport overlay starts -->
  <div class="modal fade" id="transport-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Transport</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1 p">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum est quidem nobis similique dolor accusantium veritatis maiores aliquid eum, impedit veniam in quisquam omnis laborum cupiditate sunt! Voluptas molestias magnam sit omnis, nobis nemo consectetur qui. Aliquid molestias voluptatum aperiam! Nulla, unde laborum officia facilis dicta, quae dolore aperiam beatae neque aliquam mollitia? Rem impedit itaque eaque, tenetur sit eos qui fugiat, nisi, numquam recusandae assumenda. Voluptatibus atque, nulla doloremque cupiditate expedita corrupti qui dignissimos ex inventore dicta consectetur eum tempora porro molestias, illo modi officiis possimus molestiae. Magnam exercitationem officia, impedit odit similique nobis autem rem ab explicabo sunt.
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- transport Overlay ends -->




  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
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