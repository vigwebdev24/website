<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>


  <link rel="stylesheet" href="css/iqac.css">
  <link rel="stylesheet" href="css/home.css">
  
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/program.css">
  <link rel="stylesheet" href="css/naac.css">
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
  {
    width:100px !important;
  }
  .naac{
    display: flex;
    padding:10px;
    justify-content: center;
  }
</style>


  <?php
  include_once 'connect.php';
  include_once  'navbar.php';
  $sql = "SELECT * FROM cards where id like 'naac%' ";

$result=mysqli_query($conn, $sql);

$c1 = array();
$c2 = array();
$c1c=0;
$c2c=0;


if (mysqli_num_rows($result) > 0) {
   
    while ($row = mysqli_fetch_assoc($result)) {
      if($row['cardtype']=='naacapc1'){
        $c1[] = $row;
        $c1c=$c1c+1;
      }
      else if($row['cardtype']=='naacapc2'){
        $c2[] = $row;
        $c2c=$c2c+1;
      }

    }
} else {
    echo "No data found.";
}

?>

<div class="container home-div1">

    <?php
    $sqlquery17 = "SELECT * FROM  sections  where id='naac'";

    $result = mysqli_query($conn, $sqlquery17);
    $research = mysqli_fetch_assoc($result);


    $sqlquery19 = "SELECT * FROM  stats where id='naac_card1'";

    $res_funding = mysqli_query($conn, $sqlquery19);
    $researchfunding = $res_funding->fetch_assoc();

    $sqlquery20 = "SELECT * FROM  stats where id='naac_card2'";
    $res_papers = mysqli_query($conn, $sqlquery20);
    $researchpapers = $res_papers->fetch_assoc();

    $sqlquery21 = "SELECT * FROM  stats where id='naac_card3'";
    $res_patents = mysqli_query($conn, $sqlquery21);
    $researchpatents = $res_patents->fetch_assoc();


    ?>

    <div class="home-research naac-home">
      <div class="home-researchdiv">

        <div class="home-research_innrdiv">
          <div class="iqac-title">
            <?php echo $research['title']; ?>

          </div>
          <div class="home-researchdiv1">

            <div class="iqac-txt">
              <?php echo $research['descr']; ?>

            </div>
            <div class="text_btnnew">
              <div class="text_btnnew_innrdiv" data-toggle="modal" data-target="#overlay">
                <div class="text_btnnew_txt">
                  <?php echo $research['btn_nm1'];?> 
                </div>
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="home-reseachcountdiv ">
          <div class="home-reseachcount_innrdiv">
            <div class="home-reseachcount">
              <?php echo $researchfunding['statvalue']; ?>

            </div>
            <div class="home-reseach_txt"> <?php echo $researchfunding['descr']; ?></div>
          </div>
          <div class="home-reseach_imgbdrdiv">
            <svg class="home-reseach_img" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
              <mask id="mask0_3079_9" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
                <rect width="48" height="48" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_3079_9)">
                <path d="M23.9839 40.1115C26.5048 40.1115 28.6647 39.2223 30.4635 37.4441C32.2623 35.6658 33.1617 33.5232 33.1617 31.0162C33.1617 28.4953 32.2675 26.3354 30.4789 24.5366C28.6904 22.7378 26.5353 21.8384 24.0135 21.8384C21.4918 21.8384 19.3406 22.7326 17.5598 24.5212C15.779 26.3097 14.8886 28.4648 14.8886 30.9866C14.8886 33.5083 15.7778 35.6595 17.556 37.4403C19.3343 39.2211 21.4769 40.1115 23.9839 40.1115ZM17.9886 21.4384C18.6464 20.9811 19.3615 20.6193 20.1339 20.3531C20.9063 20.0869 21.7233 19.882 22.5848 19.7384L18.0656 10.9153H12.7463L17.9886 21.4384ZM30.0117 21.4384L35.3425 10.9153H29.9348L25.7809 19.1961L26.1334 19.8648C26.8267 20.001 27.5041 20.2061 28.1656 20.48C28.8271 20.7538 29.4425 21.0733 30.0117 21.4384ZM14.3425 38.1769C14.3109 37.939 14.3177 37.6488 14.363 37.3065C14.4083 36.9641 14.5079 36.6165 14.6617 36.2637C14.0463 35.2186 13.622 34.0864 13.3886 32.8672C13.1553 31.6479 13.1271 30.4024 13.304 29.1307C13.304 28.1307 13.4771 27.1819 13.8232 26.2845C14.1694 25.3871 14.6502 24.5794 15.2655 23.8615C14.6373 23.8794 14.0553 24.0534 13.5194 24.3835C12.9835 24.7135 12.6386 25.1321 12.4848 25.6393C10.9976 26.1464 9.92581 27.1019 9.26944 28.5057C8.61304 29.9096 8.52203 31.3512 8.9964 32.8307C8.9964 34.3435 9.51561 35.6127 10.554 36.6384C11.5925 37.664 12.8553 38.1769 14.3425 38.1769ZM33.6579 38.1769C35.6194 38.1845 37.3188 37.4913 38.7559 36.0972C40.1931 34.703 40.9117 33.0088 40.9117 31.0145C40.9117 29.0202 40.1931 27.3211 38.7559 25.9172C37.3188 24.5134 35.6194 23.8025 33.6579 23.7845C33.5041 23.7845 33.3502 23.7973 33.1963 23.823C33.0425 23.8486 32.8887 23.8615 32.7348 23.8615C33.5271 24.8512 34.1611 25.9511 34.6367 27.1611C35.1124 28.3711 35.3502 29.6525 35.3502 31.0053C35.3502 32.3581 35.1124 33.6377 34.6367 34.8442C34.1611 36.0506 33.5271 37.1358 32.7348 38.0999C32.8887 38.1255 33.0425 38.1448 33.1963 38.1576C33.3502 38.1704 33.5041 38.1769 33.6579 38.1769ZM23.9949 42.2999C22.6627 42.2999 21.4145 42.1024 20.2503 41.7075C19.0861 41.3125 18.0233 40.7087 17.0617 39.8961C16.6216 40.0362 16.1538 40.1386 15.6585 40.2031C15.1632 40.2676 14.6771 40.2999 14.2002 40.2999C11.6279 40.2999 9.4432 39.4021 7.646 37.6064C5.8488 35.8107 4.9502 33.6279 4.9502 31.0578C4.9502 28.4804 5.85148 26.2835 7.65405 24.467C9.45661 22.6505 11.6528 21.7486 14.2425 21.7615C14.5246 21.7615 14.7938 21.7807 15.0502 21.8191C15.3066 21.8576 15.563 21.9025 15.8194 21.9538L9.19249 8.72681H19.4309L24.0002 17.8653L28.5694 8.72681H38.8579L32.3194 21.8153C32.5502 21.764 32.7874 21.7255 33.031 21.6999C33.2746 21.6743 33.5245 21.6615 33.7809 21.6615C36.363 21.6563 38.5617 22.5645 40.3771 24.386C42.1925 26.2075 43.1002 28.4121 43.1002 30.9999C43.1002 33.617 42.1961 35.8213 40.388 37.6128C38.5799 39.4042 36.3673 40.2999 33.7502 40.2999C33.2476 40.2999 32.7643 40.2704 32.3002 40.2115C31.8361 40.1525 31.3951 40.0474 30.9771 39.8961C30.0158 40.683 28.9448 41.2804 27.764 41.6882C26.5832 42.096 25.3268 42.2999 23.9949 42.2999ZM20.8271 35.6769L22.0152 31.7324L18.8232 29.4422H22.7826L24.0002 25.323L25.2436 29.4422H29.1771L26.004 31.7192L27.2233 35.6769L24.0077 33.2307L20.8271 35.6769Z" fill="#C57654" />
              </g>
            </svg>
            <!--<img src="assets/icons/research.png" class="home-reseach_img" />-->
            <div class="home-reseach_bdr"></div>
          </div>
        </div>
        <div class="home-reseach_div3">
          <div class="home-reseach_circle">
            <div class="home-reseach_circle_txtdiv">
              <div class="home-reseach_circle_txt"><?php echo $researchpapers['statvalue']; ?><small class="home-reseach_circle_small"></small>
              </div>
              <div class="home-reseach_circle_title"><?php echo $researchpapers['descr']; ?></div>
            </div>
          </div>
          <div class="home-reseach_square">
            <div class="home-reseach_square_innrdiv">
              <div class="home-reseach_square_content">
                <div class="home-reseach_square_txt">
                  <?php echo $researchpatents['statvalue']; ?>
                  <!-- <small class="home-reseach_circle_small">+</small>-->
                </div>
                <div class="home-reseach_square_title">
                  <?php echo $researchpatents['descr']; ?>

                </div>

              </div>
              <div class="home-reseach_squareimgbdrdiv">
                <img src="assets/svgicons/circlestar.svg" />
                <!--  <img src="assets/icons/round-star.png" />-->
                <div class="non-clk_brdr"></div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
    <div class="footer-margin-top"></div>
<header>
    <h1 class="header-title">Accreditation Parameters - Cycle II</h1>
    <p class="accreditation-dates">05 Years | 16 Nov 2020 - 17 Nov 2024</p>
</header>

<div class="course-cards-container">
  <div class="course-cards naac">
  <?php
  $id=1;
   foreach ($c2 as $row) { ?>
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      
      
<!----added new things --->
<div class="naac">
<div class="text_btnnew ">

<div class="text_btnnew_innrdiv">
  <a class="a" href="naac_card.php?id=cy2_card<?php echo $id; ?>" target="_blank">
    <div class="text_btnnew_txt">
    <?php echo $row['btn_nm']; ?>
    </div>
    </a>
    <div>
        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
    </div>
</div>
</div>

</div>

     



      <!-- <div class="course-cta-divider small"></div> -->
    </div>
    <?php $id++; 
    if($id==8)
    $id=0;
    } ?>
  </div>
</div>

<div class="footer-margin-top"></div>
<header>
    <h1 class="header-title">Accreditation Parameters - Cycle I</h1>
    <p class="accreditation-dates">05 Years  |  16 Nov 2015 - 15 Nov 2020</p>
</header>
<div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($c1 as $row) { ?>
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>

<div class="naac">
<div class="text_btnnew ">

<div class="text_btnnew_innrdiv">
  <a class="a" href="naac_card.php?id=cy2_card<?php echo $id; ?>" target="_blank">
    <div class="text_btnnew_txt">
    <?php echo $row['btn_nm']; ?>
    </div>
    </a>
    <div>
        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
    </div>
</div>
</div>

</div>
     
    </div>
    <?php $id++; } ?>
  </div>
</div>


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
<div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="overlay-dialog" role="document">
                    <div class="filter-modal_content">
                        <div class="modal-header overlaymodal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="assets/icons/cross_big.png">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                            <h4 class="filter-modaltitle" id="modalLabel">NAAC</h4>
                        </div>
                        <div class="modal-body overlaymodal-body">


                            <p>
                                Vignan's Foundation for Science, Technology & Research (VFSTR) (Deemed to be University)
                                is known for quality-consciousness through its student-centric activities for
                                transforming them into globally accepted, socially conscious, emotionally balanced and
                                psychologically strong professionals. VFSTR sustains a culture that supports excellence
                                in teaching-learning, outcome-based education, and provides an environment that serves
                                the needs of students, faculty and staff.National Assessment and Accreditation Council
                                (NAAC) accredited VFSTR and awarded "A" grade on 16 November 2015 in the first cycle of
                                its assessment for a period of five years till 15 November 2020. The institution is
                                heading towards the second cycle of accreditation in the year 2020
                            </p>
                            <div class="naac-gap-btn1"></div>
      <!-- <div class="course-cta">
      <a class="a" href="#" target="_blank"><div class="course-cta-text">Visit NAAC Website</div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div> -->
      <div class="text_btnnew viewall" onclick="viewnaac()">

            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                Visit NAAC Website
                </div>
                <div>
                    <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
      
      <div class="naac-gap-btn2"></div>
      <div class="text_btnnew viewall" onclick="certificates()">

            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                View NAAC Certificates
                </div>
                <div>
                    <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
      

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
    function certificates(){
      window.open("https://vignan.ac.in/pdf/NAAC-Cycle-II.pdf");
    }
    function viewnaac(){
     
      window.open("http://naac.gov.in/index.php/en/");

    }
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