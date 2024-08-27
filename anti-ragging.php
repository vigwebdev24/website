<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>


  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/u-life.css">
  <link rel="stylesheet" href="css/iqac.css">
  <link rel="stylesheet" href="css/admission.css">
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/anti-ragging.css">
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
    $sql = "SELECT * FROM sections WHERE id='antiragging_hero'";
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

    <!-- message from chairman section starts -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='antiragging_messagefromchairman'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="message-section">
        <div class="message-txt-container">
          <div class="message-title"><?php echo $row['title'] ?></div>
          <div class="message-desc"><?php echo $row['descr'] ?></div>
          <div class="message-btn">
            <div class="text_btnnew" data-toggle="modal" data-target="#message-section-overlay">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  <?php echo $row['btn_nm1']; ?>
                </div>
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="message-img-container">
          <img src="<?php echo $row['img1'] ?>" alt="chairman img" class="message-img">
          <div class="message-img-txt">
            <?php echo $row['subsec1_title'] ?>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- message from chairman section ends -->

    <!-- section starts -->
    <?php
    $sql = "SELECT * FROM  cards  where id like 'antiragging_card%'  order by sequence";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="mess-section">
        <div class="aaa-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="aaa-content-box">
              <div class="aaaimg">
                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="58" viewBox="0 0 66 58" fill="none">
                  <path d="M0 28.2C0 16.6 3.86667 8.4 11.6 3.6C15.2 1.33334 19.1333 0.13334 23.4 0V18.8C19.5333 18.8 16.8 20.3333 15.2 23.4C14.6667 24.7333 14.2667 26.3333 14 28.2H28.2V56.2L0 57.4V28.2ZM37.4 28.2C37.4 16.7333 41.3333 8.53333 49.2 3.6C52.5333 1.46667 56.4667 0.266671 61 0V18.8C56.8667 18.8 54.1333 20.3333 52.8 23.4C52 24.7333 51.6 26.3333 51.6 28.2H65.6V56.2L37.4 57.4V28.2Z" fill="#992E00" />
                </svg>
              </div>
              <div class="aaa-mess"><?php echo $row['descr'] ?></div>
              <div class="aaa-txt-h">
                <?php echo $row['title'] ?>
              </div>
              <div class="aaa-descr" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                <?php echo $row['btn_nm'] ?>
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
    <!-- section ends -->

    <!-- University Committee section starts -->
    <section class="associatedean">
      <div class="ranking-sec-title">
        <div class="title-txt">University Committee</div>
        <div class="viewbtn">
          <div class="text_btnnew" onclick="window.open('ucommittee.php',  '_blank')">
            <div class="text_btnnew_innrdiv">
              <div class="text_btnnew_txt">
                View All (13)
              </div>
              <div>
                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
              </div>
            </div>
          </div>
        </div>
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

      </div>
    </section>
    <!-- University Committee section ends -->

    <!-- Committee - Girls Hostel section starts -->
    <section class="associatedean">
      <div class="ranking-sec-title">
        <div class="title-txt">Committee - Girls Hostel</div>
        <div class="viewbtn">
          <div class="text_btnnew" onclick="window.open('gcommittee.php',  '_blank')">
            <div class="text_btnnew_innrdiv">
              <div class="text_btnnew_txt">
                View All (13)
              </div>
              <div>
                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
              </div>
            </div>
          </div>
        </div>
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

      </div>
    </section>
    <!-- Committee - Girls Hostel section ends -->

    <!-- Committee - Boys Hostel section starts -->
    <section class="associatedean">
      <div class="ranking-sec-title">
        <div class="title-txt">Committee - Boys Hostel</div>
        <div class="viewbtn">
          <div class="text_btnnew" onclick="window.open('bcommittee.php',  '_blank')">
            <div class="text_btnnew_innrdiv">
              <div class="text_btnnew_txt">
                View All (13)
              </div>
              <div>
                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
              </div>
            </div>
          </div>
        </div>
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

      </div>
    </section>
    <!-- Committee - Boys Hostel section ends -->

    <!-- national antiragging programme section starts -->
    <?php
    $sql = "SELECT * FROM  sections  where id = 'antiragging_national_programme'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="goals-journey-content">
        <div class="goals-journey-text">
          <h2 class="goals-journey-heading">
            <?php echo $row['title']; ?>
          </h2>
          <div class="goals-journey-description">
            <p class="goals-journey-paragraph">
              <?php echo $row['descr']; ?>
            </p>
            <div class="text_btnnew scholarship-cta">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  <?php echo $row['btn_nm1']; ?>
                </div>
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="placement-stats-container">
          <div class="placement-stats-content">
            <div class="placement-stats-text">
              <img src="<?php echo $row['img1']; ?>" alt="" width="136" height="73px">
            </div>
            <div class="placement-stats-divider">
              <img src="./assets/icons/round-star.png" alt="" class="placement-stats-icon" loading="lazy" />
              <div class="placement-stats-line"></div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- national antiragging programme section ends -->

    <!-- contact us section starts -->
    <?php
    $sql = "SELECT * FROM  contactus where id like 'antiragging_%'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="contactus-section">
        <div class="contactus-title">Contact Us</div>
        <div class="contactus-box-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="contactus-box">
              <div class="cbox-txt"><?php echo $row['title']; ?></div>
              <div class="cbox-add"><?php echo $row['address']; ?></div>
              <div class="cbox-mob"><?php echo $row['mobno']; ?></div>
              <div class="cbox-mail"><?php echo $row['email']; ?></div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- contact us section ends -->




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




  <div class="modal fade" id="message-section-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Rules & Regulations </h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              The All India Council For Technical Education (AICTE), New Delhi vide its Notification no. 37-3/Legal/AICTE/2009 dated 25-03-2009 has taken a very serious view of ragging incidences in educational institutions and on Directions of the Hon'ble Supreme Court of India vide its Order dated 16.5.2007 has ordered strict implementation of following rules & regulations for Prevention and prohibition of Ragging in technical Institutions.
            </div>
            <div class="h3">Various Types of Ragging</div>
            <div class="p">
              The Hon'ble Supreme Court has, inter-alia, mentioned the following types of ragging :
              <br>
              <ul>
                <li>Ragging has several aspects with, among others, psychological, social, political, economic, cultural, and academic dimensions.</li>
                <li>Any act that prevents, disrupts or disturbs the regular academic activity of a student should be considered with in the academics related aspect of ragging; similarly, exploiting the services of a junior student for completing the academic tasks assigned to an individual or a group of seniors is also an aspect of academics related ragging prevalent in many institutions, particularly in the technical institutions.</li>
                <li>Any act of financial extortion or forceful expenditure burden put on a junior student by senior students should be considered an aspect of ragging for ragging economic dimensions.</li>
                <li>Any act of physical abuse including all variants of it: sexual abuse, homosexual assaults, stripping, forcing obscene and lewd acts, gestured, causing bodily harm or any other danger to health or person can be put in the category of ragging with criminal dimensions.</li>
                <li>Any act or abuse by spoken words, emails, snail-mails, blogs, public insults should be considered with in the psychological aspects of ragging. This aspect would also include deriving perverted pleasure, vicarious or sadistic thrill from actively or passively participating in the discomfiture to others; the absence of preparing 'freshers' in the run up to their admission to higher education and life in hostels also can be ascribed as a psychological aspect of ragging - coping skills in interaction with seniors or strangers can be imparted by parents as well. Any act that affects the mental health and self-confidence of students also can be described in terms of the psychological aspects of ragging.</li>
                <li>The human rights perspective of ragging involves the injury caused to the fundamental right to human dignity through humiliation heaped on junior students by seniors; often resulting in the extreme step of suicide by the victims.</li>
              </ul>
            </div>
            <div class="h3">Actions to be taken</div>
            <div class="p">
              Actions to be taken against students for indulging and abetting in Ragging in technical institutions Universities including Deemed to be University imparting technical education
              <ul>
                <li>The punishment to be meted out to the persons indulged in ragging has to be exemplary and justifiably harsh to act as a deterrent against recurrence of such incidents. The students who are found to be indulged in ragging should be debarred from taking admission in any technical institution in India.</li>
                <li>Every single incident of ragging a First Information Report (FIR) must be filed without exception by the institutional authorities with the local police authorities.</li>
                <li>Depending upon the nature and gravity of the offence as established by the Anti-Ragging Committee of the institution, the possible punishments for those found guilty of ragging at the institution level shall be any one or any combination of the following.</li>
                <ol style="list-style-type:lower-alpha">
                  <li>Cancellation of admission</li>
                  <li>Suspension from attending classes</li>
                  <li>Withholding/withdrawing scholarship/fellowship and other benefits
                    Debarring from appearing in any test/examination or other evaluation process
                    Withholding results</li>
                  <li>Debarring from representing the institution in any regional, national or international meet, tournament, youth festival, etc.</li>
                  <li>Suspension/expulsion from the hostel</li>
                  <li>Rustication from the institution for period ranging from 1 to 4 semesters
                    Expulsion from the institution and consequent debarring from admission to any other institution.</li>
                  <li>Fine of Rupees 25,000/-</li>
                  <li>Collective punishment: when the persons committing or abetting the crime of ragging are not identified, the institution shall resort to collective punishment as a deterrent to ensure community pressure on the potential raggers.</li>
                </ol>
                <li>
                  The institutional authority shall intimate the incidents of ragging occurred in their premises along with actions taken to the Council immediately after occurrence of such incident and inform the status of the case from time to time.
                </li>
                <li>
                  Courts should make an effort to ensure that cases involving ragging are taken up on priority basis to send the correct message that ragging is not only to be discouraged but also to be dealt with sternness.</li>
              </ul>
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