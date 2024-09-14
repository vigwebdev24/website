<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>

  <link rel="stylesheet" href="css/exam.css">
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

  .content1 {
    display: none;
  }

  .content1.active1 {
    display: block;
  }
</style>

<body>
  <?php
  include_once 'connect.php';
  include_once  'navbar.php';

  ?>

  <div class="container home-div1">


    <div class="exam-head">
      <div class="head-top">EXAM</div>
      <div class="exam-title">
        Academic Registration
      </div>
      <div class="exam-desc">
        For regular students (RI9), pay tuition fees via bank challan or online banking. Upon verification by the Finance Office, receive an SMS confirming clearance of semester dues. Present proof of payment at the department, collect and fill the registration form, meet the counselor, and begin attending classes. Expect an SMS confirmation of subject registration. Complete registration before the start of class work for timely attendance.
      </div>
    </div>

    <div class="exam-nav">
      <div class="exam-nav-leftbox">
        <div class="exam-nav-title color" onclick="handleClick(this, 'apply')">Apply <div class="hline visible"></div>
        </div>
        <div class="exam-nav-title" onclick="handleClick(this, 'timetable')">Time table <div class="hline"></div>
        </div>
        <div class="exam-nav-title" onclick="handleClick(this, 'questionpaper')">Question paper <div class="hline"></div>
        </div>
        <div class="exam-nav-title" onclick="handleClick(this, 'schemes')">Schemes <div class="hline"></div>
        </div>
      </div>
      <div class="exam-nav-rightbox">
        <button class="cta_button_secondary Secondary-btn_txt" onclick="window.open('https://vignan.ac.in/tutionfee.php',  '_blank')">
          Pay Tution Fee
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_2961_1149" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
              <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
            </mask>
            <g mask="url(#mask0_2961_1149)">
              <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#992E00" />
            </g>
          </svg>
        </button>
        <div class="text_btnnew" data-toggle="modal" data-target="#overlay">
          <div class="text_btnnew_innrdiv">
            <div class="text_btn_txt">
              Registration procedure
            </div>

            <div>
              <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="apply" class="content1 active1">
      <div class="exam-container">
        <div class="apply-box">
          <div class="apply-box-txt">Ph.D Examinations</div>
          <div class="text_btnnew" onclick="window.open('https://vignan.ac.in/prephd.php', '_blank')">
            <div class="text_btnnew_innrdiv">
              <div class="text_btnnew_txt">
                Apply Now
              </div>
              <div>
                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
              </div>
            </div>
          </div>
        </div>
        <div class="apply-box">
          <div class="apply-box-txt">Supplementary Examinations</div>
          <div class="text_btnnew" onclick="window.open('https://vignan.ac.in/examinstructions.php',  '_blank')">
            <div class="text_btnnew_innrdiv">
              <div class="text_btnnew_txt">
                 Apply Now
              </div>
              <div>
                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
              </div>
            </div>
          </div>
        </div>
        <div class="apply-box">
          <div class="apply-box-txt">Regular Examinations</div>
          <div class="text_btnnew" onclick="window.open('https://vignan.ac.in/examinstructions.php',  '_blank')">
            <div class="text_btnnew_innrdiv">
              <div class="text_btnnew_txt">
                 Apply Now
              </div>
              <div>
                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
              </div>
            </div>
          </div>
        </div>
        <div class="apply-box">
          <div class="apply-box-txt">Retotalling/ Revaluation Examinations</div>
          <div class="text_btnnew" onclick="window.open('https://vignan.ac.in/revalretot.php',  '_blank')">
            <div class="text_btnnew_innrdiv">
              <div class="text_btnnew_txt">
                 Apply Now
              </div>
              <div>
                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- timetable -->
    <div id="timetable" class="content1">
      <div class="tt">
        <div class="tt-head">Under Graduate Program</div>
        <div class="tt-box-container">
          <?php
          $sql = "SELECT * FROM timetables WHERE prog_type='ug' order by date desc";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <div class="tt-box">
                <div class="tt-box-title"><?php echo $row['title'] ?></div>
                <div class="tt-box-desc"><?php echo $row['descr'] ?></div>
                <div class="tt-box-btn">
                  <div class="dt">
                    <?php
                    if ($row['revised'] == 1) {
                    ?>
                      <span class="color">Revised</span><br>
                    <?php } ?>

                    <?php echo substr(date("F", strtotime($row['date'])), 0, 3), " ", substr($row['date'], 0, 4) ?>
                  </div>
                  <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btn_txt">
                        <?php echo $row['btn_nm'] ?>
                      </div>

                      <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                      </div>
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

      <div class="tt">
        <div class="tt-head">Post Graduate Program</div>
        <div class="tt-box-container">
          <?php
          $sql = "SELECT * FROM timetables WHERE prog_type='pg' order by date desc";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <div class="tt-box">
                <div class="tt-box-title"><?php echo $row['title'] ?></div>
                <div class="tt-box-desc"><?php echo $row['descr'] ?></div>
                <div class="tt-box-btn">
                  <div class="dt">
                    <?php
                    if ($row['revised'] == 1) {
                    ?>
                      <span class="color">Revised</span><br>
                    <?php } ?>

                    <?php echo substr(date("F", strtotime($row['date'])), 0, 3), " ", substr($row['date'], 0, 4) ?>
                  </div>
                  <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btn_txt">
                        <?php echo $row['btn_nm'] ?>
                      </div>

                      <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                      </div>
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

      <div class="tt">
        <?php
        $sql = "SELECT * FROM timetables WHERE prog_type='phd' order by date desc";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
          <div class="tt-head">Ph. D</div>
          <div class="tt-box-container">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <div class="tt-box">
                <div class="tt-box-title"><?php echo $row['title'] ?></div>
                <div class="tt-box-desc"><?php echo $row['descr'] ?></div>
                <div class="tt-box-btn">
                  <div class="dt">
                    <?php
                    if ($row['revised'] == 1) {
                    ?>
                      <span class="color">Revised</span><br>
                    <?php } ?>

                    <?php echo substr(date("F", strtotime($row['date'])), 0, 3), " ", substr($row['date'], 0, 4) ?>
                  </div>
                  <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btn_txt">
                        <?php echo $row['btn_nm'] ?>
                      </div>

                      <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                      </div>
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

      <div class="tt">
        <?php
        $sql = "SELECT * FROM timetables WHERE prog_type='other' order by date desc";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
          <div class="tt-head">Mixed</div>
          <div class="tt-box-container">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <div class="tt-box">
                <div class="tt-box-title"><?php echo $row['title'] ?></div>
                <div class="tt-box-desc"><?php echo $row['descr'] ?></div>
                <div class="tt-box-btn">
                  <div class="dt">
                    <?php
                    if ($row['revised'] == 1) {
                    ?>
                      <span class="color">Revised</span><br>
                    <?php } ?>

                    <?php echo substr(date("F", strtotime($row['date'])), 0, 3), " ", substr($row['date'], 0, 4) ?>
                  </div>
                  <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btn_txt">
                        <?php echo $row['btn_nm'] ?>
                      </div>

                      <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                      </div>
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

    </div>

    <div id="questionpaper" class="content1">

      <?php
      $sql = "SELECT * FROM questionpapers";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      ?>
        <div class="exam-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="question-box">
              <div class="apply-box-txt"><?php echo $row['title'] ?>
                <br>
                <?php echo $row['sub_code'] ?>
              </div>
              <div>
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
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>
    </div>

    <div id="schemes" class="content1">
      <?php
      $sql = "SELECT * FROM schemes";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      ?>
        <div class="exam-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="question-box">
              <div class="apply-box-txt"><?php echo $row['title'] ?>
                <br>
                <?php echo $row['sub_code'] ?>
              </div>
              <div>
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


  <!-- Registration procedure Overlay starts -->

  <div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content fcontent">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle fmodaltitle " id="modalLabel">Registration Procedure - R19</h4>
            <div class="download-btn">
              <div class="text_btnnew">
                <div class="text_btnnew_innrdiv">
                  <div class="text_btnnew_txt">
                    Download
                  </div>
                  <div>
                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-body mbcontent overlaymodal-body">


          <div class="content">
            <div class="steps-no">Step 1:</div>
            <div class="steps-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor quidem quo incidunt voluptas quae nostrum magni eligendi officia hic?</div>
            <div class="steps-no">Step 2:</div>
            <div class="steps-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor quidem quo incidunt voluptas quae nostrum magni eligendi officia hic?</div>
            <div class="steps-no">Step 3:</div>
            <div class="steps-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor quidem quo incidunt voluptas quae nostrum magni eligendi officia hic?</div>
            <div class="steps-no">Step 4:</div>
            <div class="steps-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor quidem quo incidunt voluptas quae nostrum magni eligendi officia hic?</div>
            <div class="steps-no">Step 5:</div>
            <div class="steps-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor quidem quo incidunt voluptas quae nostrum magni eligendi officia hic?</div>

            <div class="exam-instructions">
              <h3>General Instructions to the candidates</h3>
              <ul>
                <li>All candidates should be present in the Examination Hall 15 minutes before the time of commencement of Examinations. No student will be allowed into examination hall after that time.</li>
                <li>Students has to bring Examination Hall tickets & Identity Cards and produce them for verification whenever asked by Invigilators or Squad members.</li>
                <li>Candidates are prohibited from bringing to the examination hall any books, notebooks, loose sheets of paper, programmable calculators, cell phones, or any electronic device. If they do so, they are liable for expulsion. Candidates are not allowed to use any book or books nor are they allowed to keep with them a book or part thereof, or paper of any kind. They are also prohibited from talking to each other, copy or communication with a person outside the examination hall. If a candidate is found violating these rules and/or committing any other malpractice and/or behaving in an undisciplined manner or causing nuisance or disturbance to the other candidates, he will at once be expelled from the examination hall. He will not be allowed for the remaining papers and he will be liable to be rusticated. Candidates are permitted to bring Electronic Calculators into the examination hall.</li>
                <li>Candidates are allowed to leave the examination hall only after 1 ½ hour from the commencement of examination.</li>
                <li>In extraordinary circumstances the dates and time of examination may be changed with short notice. To avoid inconvenience, the students are advised to regularly view the examinations link at university website.</li>
                <li>These instructions are to be read along with the 'norms' displayed at www.vignan.ac.in ⇒ Current Students ⇒ Examination ⇒ Examinations Related Information⇒ Disciplinary Action - Malpractice.</li>
                <li>The students who are put into 'R' grade will not be allowed to take up the summative assessment in that semester. In case due to lack and/or delay in information, if he/she appears for the summative assessment in that course, office of AAA is empowered to cancel the attended exams. The scores obtained either in formative or summative assessment will not be considered for grading.</li>
              </ul>
            </div>
          </div>


        </div>

      </div>

    </div>
  </div>

  <!-- Registration procedure Overlay ends -->




  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/common.js"></script>

  <script>
    function handleClick(element, sectionId) {

      const titles = document.querySelectorAll('.exam-nav-title');
      titles.forEach(function(title) {
        title.classList.remove('color');
        title.querySelector('.hline').classList.remove('visible');
      });

      element.classList.add('color');
      element.querySelector('.hline').classList.add('visible');

      const contents = document.querySelectorAll('.content1');
      contents.forEach(function(content) {
        content.classList.remove('active1');
      });

      const activeContent = document.getElementById(sectionId);
      activeContent.classList.add('active1');
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