<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>

  <link rel="stylesheet" href="css/exam.css">
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

  <div class="container">


    <div class="exam-head">
      <div class="head-top">EXAM</div>
      <div class="exam-title">
        Registration
      </div>
      <div class="exam-desc">
        The grading system provides a standardized method for evaluating and quantifying academic performance. It serves as a benchmark for students' progress and aids in assessing their comprehension and mastery of subject matter.
      </div>
    </div>

    <div id="apply">

      <?php
      $sql = "SELECT * FROM registrations";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      ?>
        <div class="exam-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="apply-box">
              <div class="apply-box-txt"><?php echo $row['exam_title'] ?></div>
              <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                <div class="text_btnnew_innrdiv">
                  <div class="text_btnnew_txt">
                    <?php echo $row['btn_nm'] ?>
                  </div>
                  <div>
                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>

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