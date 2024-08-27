<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>

  <link rel="stylesheet" href="css/awards.css">
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

    <div class="awards-heading">
      <h1>Awards & Appreciations</h1>
    </div>

    <div class="awards-box-container">

      <?php
      $sql = "SELECT * FROM awards where id like 'awards_card%'";

      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="awards-box">
            <div class="awards-title"><?php echo $row['title']; ?></div>
            <div class="awards-profile">
              <img src="<?php echo $row['img1']; ?>" alt="image" class="awards-img">
              <?php
              if ($row['img2'] != null) {
              ?>
                <img src="<?php echo $row['img2']; ?>" alt="image" class="awards-img">
              <?php
              }
              ?>
              <?php
              if ($row['img3'] != null) {
              ?>
                <img src="<?php echo $row['img3']; ?>" alt="image" class="awards-img">
              <?php
              }
              ?>
              <div class="awards-text">
                <?php if ($row['img2'] == null) echo $row['person_name']; ?>
              </div>
            </div>
            <div class="awards-desc">
              <?php echo $row['descr']; ?>
            </div>
          </div>

      <?php
        }
      } else {
        echo "No Records Found";
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