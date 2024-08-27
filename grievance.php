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
  <link rel="stylesheet" href="css/u-life.css">
  <link rel="stylesheet" href="css/grievance.css">
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
    $sql = "SELECT * FROM sections WHERE id='grievance_hero'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="ulife-div-19">
        <div class="ulife-div-20">
          <div class="ulife-column">
            <div class="ulife-div-21">
              <div class="ulife-div-22"><?php echo $row['title'] ?></div>
              <div class="ulife-div-23"><?php echo $row['descr'] ?></div>
              <div class="btn-123">
                <div class="text_btnnew" data-toggle="modal" data-target="#grievance-hero-overlay">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm1'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
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

    <?php
    $sql = "SELECT * FROM  cards  where id like 'grievance_card%'  order by sequence";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="aaa-section">
        <div class="aaa-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="aaa-content-box">
              <div class="gtitle"><?php echo $row['title'] ?></div>
              <div class="aaadesc"><?php echo $row['descr'] ?></div>
              <div class="aaabtn">
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
          }
          ?>

        </div>
      </div>
    <?php
    }
    ?>

    <!-- section starts -->
    <section class="associatedean">
      <div class="ranking-sec-title">
        <div class="title-txt">Grievance Redressal Committee</div>
        <div class="viewbtn">
          <div class="text_btnnew" onclick="window.open('grcommittee.php',  '_blank')">
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
    <!--  section ends -->

    <div class="regform-section">
      <div class="regform-title">Grievance Registration Forms</div>
      <div class="regform-content">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a class="question" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  1. Student Grievance Registration
                </a>
              </h4>

            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body panel-content">
                <div class="reginput">
                  <label for="simplelabel">
                    <input type="text" id="simplelabel" placeholder="eg. LM123">
                    <span>Register No</span>
                  </label>
                </div>
                <div class="captcha-container">
                  <div class="captcha">
                    Captcha
                    <div class="captcha-value-container">
                      <div class="captcha-value"></div>
                      <div id="captcha-refresh" onclick="generateCaptcha()">
                        <img src="assets/svgicons/refresh.svg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="captcha-input">
                    <label for="simplelabel">
                      <input type="text" id="simplelabel" placeholder="Enter">
                      <span>Enter Captcha</span>
                    </label>
                  </div>
                </div>
                <div class="btn-con">
                  <button class="cta_button_primary Ss-btn_txt">
                    Proceed
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                      </mask>
                      <g mask="url(#mask0_2961_1144)">
                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED" />
                      </g>
                    </svg>
                    <!--<img src="assets/icons/Button_forwardarrow.png" />-->
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="question collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  2. Parent Grievance Registration
                </a>
              </h4>

            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body panel-content">
                <div class="reginput">
                  <label for="simplelabel">
                    <input type="text" id="simplelabel" placeholder="Enter Your Name">
                    <span>Parent Name</span>
                  </label>
                </div>
                <div class="reginput">
                  <label for="simplelabel">
                    <input type="text" id="simplelabel" placeholder="Enter Ward Number">
                    <span>Ward Register No</span>
                  </label>
                </div>
                <div class="captcha-container">
                  <div class="captcha">
                    Captcha
                    <div class="captcha-value-container">
                      <div class="captcha-value"></div>
                      <div id="captcha-refresh" onclick="generateCaptcha()">
                        <img src="assets/svgicons/refresh.svg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="captcha-input">
                    <label for="simplelabel">
                      <input type="text" id="simplelabel" placeholder="Enter">
                      <span>Enter Captcha</span>
                    </label>
                  </div>
                </div>
                <div class="btn-con">
                  <button class="cta_button_primary Ss-btn_txt">
                    Proceed
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                      </mask>
                      <g mask="url(#mask0_2961_1144)">
                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED" />
                      </g>
                    </svg>
                    <!--<img src="assets/icons/Button_forwardarrow.png" />-->
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="question collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  3. Staff Grievance Registration
                </a>
              </h4>

            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body panel-content">
                <div class="reginput">
                  <label for="simplelabel">
                    <input type="text" id="simplelabel" placeholder="Enter Your Name">
                    <span>Emp Name</span>
                  </label>
                </div>
                <div class="reginput">
                  <label for="simplelabel">
                    <input type="text" id="simplelabel" placeholder="Enter Your Emp Code">
                    <span>Emp Code</span>
                  </label>
                </div>
                <div class="reginput">
                  <label for="simplelabel">
                    <input type="text" id="simplelabel" placeholder="Enter Mob Number">
                    <span>Mob Number</span>
                  </label>
                </div>
                <div class="captcha-container">
                  <div class="captcha">
                    Captcha
                    <div class="captcha-value-container">
                      <div class="captcha-value"></div>
                      <div id="captcha-refresh" onclick="generateCaptcha()">
                        <img src="assets/svgicons/refresh.svg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="captcha-input">
                    <label for="simplelabel">
                      <input type="text" id="simplelabel" placeholder="Enter">
                      <span>Enter Captcha</span>
                    </label>
                  </div>
                </div>
                <div class="btn-con">
                  <button class="cta_button_primary Ss-btn_txt">
                    Proceed
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                      </mask>
                      <g mask="url(#mask0_2961_1144)">
                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED" />
                      </g>
                    </svg>
                    <!--<img src="assets/icons/Button_forwardarrow.png" />-->
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="question collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  4. Grievance Status
                </a>
              </h4>

            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body panel-content">
                <div class="reginput">
                  <label for="simplelabel">
                    <input type="text" id="simplelabel" placeholder="Enter Grievance ID">
                    <span>Enter Grievance ID</span>
                  </label>
                </div>
                <div class="captcha-container">
                  <div class="captcha">
                    Captcha
                    <div class="captcha-value-container">
                      <div class="captcha-value"></div>
                      <div id="captcha-refresh" onclick="generateCaptcha()">
                        <img src="assets/svgicons/refresh.svg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="captcha-input">
                    <label for="simplelabel">
                      <input type="text" id="simplelabel" placeholder="Enter">
                      <span>Enter Captcha</span>
                    </label>
                  </div>
                </div>
                <div class="btn-con">
                  <button class="cta_button_primary Ss-btn_txt">
                    Verify
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                      </mask>
                      <g mask="url(#mask0_2961_1144)">
                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED" />
                      </g>
                    </svg>
                    <!--<img src="assets/icons/Button_forwardarrow.png" />-->
                  </button>
                </div>
              </div>
            </div>
          </div>
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

  <div class="modal fade" id="grievance-hero-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Online Grievance Redressal </h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              Vignan's Foundation for Science Technology and Research has constituted Grievance Redressal cell, Anti Ragging Committee and Internal Complaints Committee (ICC) for the redressal of students' grievances related to academic and non academic matters, such as assessment, victimisation, attendance, conducting of examinations, ragging and harassment by colleague students or teachers etc.
              <br><br>
              Institute follows various protocols & procedures to resolve student grievances within 3 working days.
              <br><br>
              First step student with grievance can take if to consult counsellor or HoD of their department. Most of the times issues are taken care at this stage it self. If not student can register their grievances by three modes namely,
              <br><br>
              They can write grievance to Counsellor / HOD
              They can put a application form in Drop box located outside of HoD cabin
              They register online though institute website
              <br><br>
              The grievances that are received through these three modes are classified & analysed based on seriousness. If it is not a serious issue then counsellor/HOD communicates with student & takes care if it. But if they think that the grievance is a serious one then they call for a meeting of redressal committee with the members and initiate suitable action.
              In either case grievances are resolved in 3 working days
            </div><br>
            <div class="text_btnnew" onclick="window.open('https://vignan.ac.in/pdf/Grievance_Policy%20document.pdf',  '_blank')">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  Grievance Redressal Policy Document
                </div>
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="grievance_card1-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Students Grievance Redressal Cell</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              The function of the Cell is to look into the grievances lodged by any student, and judge its merit, and take appropriate actions for redressal. Anyone with a grievance may approach any member of the grievance redressal cell, or any faculty member of the department. The complaint can be in writing, or oral.
            </div>
            <div class="h3">Functions</div>
            <div class="p">
              a) Provide platform to express their complaints / grievances freely and frankly.
              <br><br>
              b) Make the students to respect the right and dignity of one another and show utmost restraint and patience whenever any occasion of rift arises.
              <br><br>
              c) Enable students to participate in the Student Redressal Grievance Cell as members.
              <br><br>
              d) Recommend the actions to be taken for redressal of the Grievance.
              <br><br>
              e) Recommend the actions to be taken for non-recurrence of the similar grievances in future.
            </div><br>
            <div class="h3">Facilities</div>
            <div class="p">Required infrastructure and network facilities will be provided for the smooth functioning of the cell.</div><br>
            <div class="h3">Committee Composition</div>
            <div class="p">
              The following is the composition of Student Grievance and Redressal cell.
              <br><br>
              a) Dean Student Affairs as Chair person.
              <br><br>
              b) 2/3 senior faculty members of major departments as a member.
              <br><br>
              c) 1 student from each department as a student member.
              <br><br>
              d) Associate Dean Engineering & Management as Convener.
            </div><br><br>
            <div class="h3">Roles and responsibilities of members.</div>
            <div class="p"><br>
              <h4>Chairperson</h4>
              1. He / She heads the meeting and presides the meeting. <br>
              2. Appoints the committee for solving grievances. <br>
              3. Takes part in the case investigation and finalises the judgments per the Management policy.
              <br><br>
              <h4>Faculty Member </h4>
              1. Takes part in making of year planner and events to be organised for every academic year. <br>
              2. Conduct awareness camps about grievance and redressal cell functionalities among students. <br>
              3. If requires, provides the counselling to the students who are being identified with behavioural problems. <br>
              4. Studies the suggestions received from suggestion box through convener and report to chairman of the cell.
              <br><br>
              <h4>Student Member </h4>
              1. Student member of the cell creates awareness about the cell functionalities among the students' community. <br>
              2. Interacts with the concerned student community to know the ground reality of the case and reports the same to chairman of the cell.
              <br><br>
              <h4>Convener </h4>
              1. He receives the SMS immediately upon the complaints registered through web portal and reports the same to chairperson. <br>
              2. Opens the suggestion box for every month and suggestions will be brought to the notice of faculty member. <br>
              3. Organises the meeting and provides intimation to the members of committee and students who registered complaints about case investigation. <br>
              4. Convener of the cell works on the actions given by chairperson. <br>
              5. Makes the feedback form, collects the feedback at the end of event, analyses it and makes a report.
            </div>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="grievance_card2-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Anti-Ragging Committee</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              Ragging is a social menace which has no place in Academic environment of the University and concerted efforts required to be in place to prevent its occurrence at any point of time. The Policy of the Institute is to make the campus fully “Anti-ragging campus” in line with UGC/AICTE guidelines.
            </div><br>
            <div class="text_btnnew" onclick="window.open('https://vignan.ac.in/pdf/Grievance_Policy%20document.pdf',  '_blank')">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  Read More About Anti Ragging Committee
                </div>
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
            <br>
            <div class="h3">Functions</div>
            <div class="p">
              To uphold and comply with the directions of the Hon'ble Supreme Court and be vigilant on any acts amounting to ragging. <br>
              • To publicize to all students' prevalent directives and the actions that can be taken against those indulging in ragging. <br>
              • To consider the complaints received from the students and conduct enquiry and submit report along with recommendation on punishment for the offenders. <br>
              • Oversee the procedure of obtaining undertaking from the students in accordance with the provisions. <br>
              • Conduct workshops against ragging menace and orient the students. <br>
              • To provide students the information pertaining to contact address and telephone numbers of the person(s) identified to receive complaints/distress calls. <br>
              • To offer services of counselling and create awareness to the students. <br>
              • To take all necessary measures for prevention of Ragging inside the Campus/ Hostels. <br>
            </div>
            <div class="h3">Committee Composition</div>
            <div class="p">
              The following is the composition of Anti Ragging Committee
              <br>
              a) One Senior Faculty appointed by Vice Chancellor as a Chairman
              <br><br>
              b) Dean Student Affairs, all Heads of the departments and Chief Wardens as members.
              <br><br>
              c) 5/6 students as core committee member
              <br><br>
              d) Student representatives from each department.
            </div>
            <div class="h3">Procedure for handling issues</div>
            <div class="p">
              The information on ragging can be received in the following manner:
              <br><br>
              • Through the notified contact details of the Committee members
              <br><br>
              • Through national help-line number of UGC on ragging for necessary relief.
              <br><br>
              • Through any other member of the Institute. • From any external source <br>
            </div>
            <div class="h3">Follow up actions on complaints</div>
            <div class="p">
              In the event of receipt of information of ragging by any of the officers mentioned at (i) above, he/she will promptly alert/inform the Chairman of the Anti-Ragging Committee of the Institute or any of its members. The activity shall be completed, at the most, within two hours of receipt of this information.
              <br><br>
              • The Anti-Ragging Committee of the Institute shall promptly conduct a preliminary on the spot enquiry and collect prima facie details of the incident as available. The preliminary investigation/details of the incident shall be immediately brought to the notice of the Chairman of the Committee. The activity shall be completed, at the most, within twenty-four hours of receipt of information.
              <br><br>
              • The Anti-Ragging Committee of the Institute shall promptly conduct enquiry into the incidents.
              <br><br>
              • The Anti-Ragging Committee of the Institute shall complete the enquiry and submit its report along with recommendations to the Chairman of the Anti Ragging Committee of the Institute within fifteen days of the incident.
              <br><br>
              • Thereafter, the said report and recommendations shall be considered by the Anti- Ragging Committee for recommending the punishment on the erring students. <br>
            </div>
            <div class="h3">Empowering Anti-Ragging Committee
              by the University</div>
            <div class="p">
              The Institute will constitute, empower and support the work of Anti-ragging committee in all respects.
            </div>
            <div class="h3">Initiatives to prevent the menace of ragging</div>
            <div class="p">
              Anti-ragging committee members are encouraged to attend meetings/ seminars on Anti ragging to keep abreast of recent issues and solutions.
              <br><br>
              • Posters on Anti ragging received from UGC put up on prominent places in the institute.
              <br><br>
              • Conduct competitions like essay/slogan writing, posters and paintings etc. on menace of ragging to create awareness among students on the issues and derive solutions from the student quarter.
              <br><br>
              • Organizing rallies within and outside the campus as an awareness generation measure. <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="grievance_card3-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Internal Complaints Committee (ICC)</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              In compliance with the instructions of National Commission for women, Vignans Foundation for Science Technology and Research has established Internal Complaints Committee (ICC) to prevent sexual harassment of girl students and women, and to create harmonious environment for the benefit of women. A senior woman Professor of the institution is the Chairperson of the ICC
            </div><br>
            <div class="text_btnnew" onclick="window.open('https://vignan.ac.in/pdf/Grievance_Policy%20document.pdf',  '_blank')">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  Read More About ICC
                </div>
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
            <br>
            <div class="h3">Objectives</div>
            <div class="p">
              The primary objective of the Internal Complaint Committee of VFSTR is to Prevent Sexual Harassment of Women and girl students at the workplace. The detailed objectives are given below
              <br><br>
              • To develop a policy against sexual harassment of women and girl students at the Institute. <br>
              • To evolve a permanent mechanism for the prevention and redressal of sexual harassment cases and other acts of gender based violence at the Institute. <br>
              • To ensure the implementation of the policy in letter and spirit through proper reporting of the complaints and their follow-up procedures. <br>
              • To uphold the commitment of the Institute to provide an environment free of gender based discrimination <br>
              • To create a secure physical and social environment to deter any act of sexual harassment. <br>
              • To promote a social and psychological environment to raise awareness on sexual harassment in its various forms <br><br>
            </div>
            <div class="h3">Functions</div>
            <div class="p">
              The ICC's twin functions are
              <br><br>
              a. To hear and address complaints regarding sexual harassment at VFSTR
              <br><br>
              b. To spread awareness about gender-related issues and functioning of the ICC. <br><br>
            </div>
            <div class="h3">Composition</div>
            <div class="p">The cell consists of one senior professor as the chairperson, three other members and one student representative</div>
            <div class="h3">Roles and responsibilities of members.</div>
            <div class="p">
              • ICC members should create confidence among women employees and girl students, and be accessible to them. <br>
              • ICC should not consider the socio-economic profile as well as position of individuals in the organisation, while dealing the complaints. <br>
              • All ICC members should be objective in dealing and investigating the complaints <br>
            </div>
            <div class="h3">Procedure for Filing Complaints
              and Initiating Inquiry</div>
            <div class="p">An aggrieved woman or female student may complain against a male student /employee /faculty /administrative staff / research staff / to any of the members of the ICC.
              • All complaints must be in writing. <br>
              • After receiving the complaint, Chairperson convenes the meeting of ICC and constitutes the enquiry committee if prima facie case exists. <br>
              • The Committee is required to complete the inquiry within a time period of 90 days from the date of receiving the complaint. <br>
              • On completion of the inquiry, the report will be submitted to the Vice-Chancellor with recommendations.</div>
            <br><br>
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
    function generateCaptcha() {
      const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      let captcha = '';
      const captchaLength = 6;
      for (let i = 0; i < captchaLength; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        captcha += characters[randomIndex] + ' ';
      }
      document.getElementsByClassName('captcha-value')[0].innerText = captcha;
      document.getElementsByClassName('captcha-value')[1].innerText = captcha;
      document.getElementsByClassName('captcha-value')[2].innerText = captcha;
      document.getElementsByClassName('captcha-value')[3].innerText = captcha;
    }

    window.onload = generateCaptcha;

    document.getElementById('question').addEventListener('click', generateCaptcha);


    function toggleCollapse(element) {
      const content = element.parentElement.nextElementSibling;
      const isCollapsed = content.style.display === 'block';

      if (!isCollapsed) {
        content.style.display = 'block';
        element.innerHTML = '<img src="assets/svgicons/minus.svg" alt="Collapse">';
      } else {
        content.style.display = 'none';
        element.innerHTML = '<img src="assets/svgicons/plus.svg" alt="Collapse">';
      }
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