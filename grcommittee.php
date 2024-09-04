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

  .iqac-collaborations-section {
    margin-top: 50px;
  }
</style>

<body>
  <?php
  include_once 'connect.php';
  include_once  'navbar.php';

  ?>

  <div class="container home-div1">


    <section class="ucommittee" style="margin-top: 80px;">
      <div class="ranking-sec-title">
        <div class="title-txt">Grievance Redressal Committee</div>
      </div>
      <div class="associatedean-container">
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/srinivasadesikan.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. N. Veeranjaneyulu</div>
            <div class="spes">Chairman</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/jyothi.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. M. S.S. Rukmini</div>
            <div class="spes">Dean, Student Affairs</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/tejavath.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Mr. N. Narayan Rao</div>
            <div class="spes">HOD, AE</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/suryati.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. S. Krupanidhi</div>
            <div class="spes">HOD, BT</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/srinivasadesikan.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. N. Veeranjaneyulu</div>
            <div class="spes">Chairman</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/jyothi.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. M. S.S. Rukmini</div>
            <div class="spes">Dean, Student Affairs</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/tejavath.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Mr. N. Narayan Rao</div>
            <div class="spes">HOD, AE</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/suryati.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. S. Krupanidhi</div>
            <div class="spes">HOD, BT</div>
          </div>
        </div>

      </div>
    </section>


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