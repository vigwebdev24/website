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
  <link rel="stylesheet" href="css/mblfooter.css">
  <link rel="stylesheet" href="css/fee_scholarship.css">
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
  
  
  .scholarship-link {
    justify-content: center;
    align-self: start;
    display: flex;
    margin-top: 25px;
    gap: 0px;
    font-size: 16px;
    color: var(--Colors-Buttons-Primary-Button, #992e00);
    font-weight: 400;
    line-height: 140%;
  }
 
 
 
  
  
 
 
  

</style>

<body>
  <?php
  include_once 'connect.php';
  include_once  'navbar.php';

  ?>

  <div class="container home-div1">
  <?php  $sqlquery2 ="SELECT * FROM  sections  where id='fee_scholar_sec1'";

$result=mysqli_query($conn, $sqlquery2);
$goals = $result->fetch_assoc();
?>
  <div class="home-goalsdiv">
      <div class="home-goals_innrdiv">
          <div class="home_goals">
              <div class="home_goalstitle"><?php echo $goals['title'];?></div>
              <div class="home_goalstxt"><?php echo $goals['descr'];?></div>
              <div class="text_btnnew viewall-right"
                  onclick="window.open('<?php echo $goals['btn1_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                          <?php echo $goals['btn_nm1']; ?>
                      </div>

                      <div>
                          <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                              style="width: 16px;height: 16px;" />
                      </div>
                  </div>
              </div>
          </div>
          <div class="non-clk_carddiv">
              <div class="non-clk_card_innrdiv">
                  <div class="non-clk_card_txtdiv">
                      <div class="non-clk_card_txt-innrdiv">
                          <span class="non-clk_num">95</span>
                          <span class="non-clk_percent">%</span>
                      </div>
                      <div class="non-clk_title">PLACEMENTS</div>
                  </div>
                  <div class="non-clk_imgbrdr">
                      <img src="assets/svgicons/circlestar.svg" />
                      <div class="non-clk_brdr"></div>
                  </div>
              </div>
          </div>
      </div>
      <section>

          <div class="rec-slider">
              <ul class="slider-list">
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Amazon.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Rakuten.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Wipro.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/HSBC.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Infosys.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/accenture.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/tcs.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/capgemini.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/HCL.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Samsung.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Simens.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/ibm.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/epam.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/DBS.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Byju.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Hexaware.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/UST Global.svg">
                  </li>

              </ul>

              <ul class="slider-list slider2" aria-hidden="true">
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Amazon.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Rakuten.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Wipro.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/HSBC.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Infosys.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/accenture.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/tcs.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/capgemini.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/HCL.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Samsung.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Simens.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/ibm.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/epam.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/DBS.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Byju.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Hexaware.svg"></li>
                  <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/UST Global.svg">
                  </li>
              </ul>
          </div>
      </section>
    </div>
<div class="divmargin-bottom"></div>
<?php  $sqlquery1 ="SELECT * FROM  sections  where id='fee_scholar_sec2'";

$result1=mysqli_query($conn, $sqlquery1);
$fee = $result1->fetch_assoc();
?>
<div class="fee_container">
  <div class="main-content">
    <div class="scholarship-content">
      <div class="scholarship-header"><?php echo $fee['title'];?></div>
      <div class="scholarship-description">
        <!-- There are a wide range of scholarships open to students at the University. Scholarships are offered to the best and brightest applicants from undergraduate and graduate programs. Students with good academic track record, having the confidence of maintaining the consistency of their performance may apply for the Vignan Scholarship Programme. -->
        <?php echo $fee['descr'];?>
      </div>
      
      
      <!-- <div class="divider"></div> -->
     <div class="naac" style="padding-top:40px">
      <div class="text_btnnew"
                  onclick="window.open('<?php echo $fee['btn1_hlink'];?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                      <?php echo $fee['btn_nm1'];?>
                      </div>

                      <div>
                          <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                              style="width: 16px;height: 16px;" />
                      </div>
                  </div>
              </div>
          </div>
      <div class="scholarship-details">
        <div class="scholarship-column">
          <div class="scholarship-box">
            <div class="scholarship-upto">upto</div>
            <div class="scholarship-percentage">75 
              <span style="font-size: 31px; line-height: 37px">%</span>
            </div>
            <div class="scholarship-tuition">Scholarship on Tuition fee</div>
            <div class="scholarship-footer">
              <img loading="lazy" src="assets/svgicons/fee_sec21.webp" class="footer-icon" />
              <div class="footer-divider"></div>
            </div>
          </div>
        </div>
        <div class="scholarship-column">
          <div class="scholarship-box">
            <div class="scholarship-percentage">16 
              <span style="font-size: 31px; line-height: 37px">cr</span>
            </div>
            <div class="scholarship-tuition">Worth of Scholarships</div>
            <div class="scholarship-footer feest">
              <img loading="lazy" src="assets/svgicons/fee_sec_22.webp" class="footer-icon" />
              <div class="footer-divider"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fee-content">
      <div class="fee-header"><?php echo $fee['subsec1_title'];?></div>
      <div class="fee-description">
        <?php echo $fee['subsec1_desc'];?>
      </div>
      <div class="naac" style="padding-top:40px">
      <div class="text_btnnew"
                  onclick="window.open('<?php echo $fee['subsec1_btn1_hlink'];?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                      <!-- See scholarship Details -->
                      <?php echo $fee['subsec1_btn1'];?>
                      </div>

                      <div>
                          <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                              style="width: 16px;height: 16px;" />
                      </div>
                  </div>
              </div>
          </div>
      <img loading="lazy" src="assets/svgicons/double_comma.svg" class="quote-icon" />
      <div class="quote">
        <?php echo $fee['subsec2_title'];?>
      </div>
      <div class="quote-author"><?php echo $fee['subsec2_desc'];?></div>
    </div>
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