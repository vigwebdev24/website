

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vignan University</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/button.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/mblfooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/admission.css" />

</head>

<body style="background-color: #f2f1ed">
    <!--NavBar starts-->
    <?php 
    include_once 'connect.php'; 
    include_once  'navbar.php';?>
    <!--NavBar ends-->
    <div class="container home-div1">
    <?php
        $sql = "SELECT * FROM sections WHERE id = 'BillBoard_Admissions';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
                <div class="BillboardTab">
                  <div class="BillBoardTop">
                    <div class="BillboardTabplane1">
                      <div
                        class="BillboardTabplane1Child"
                      >
                        <img
                          src="<?php echo $row['img1'] ?>"
                          class="BillboardTabplane1ChildImg"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="BillboardTabplane2">
                      <div class="">
                        <div class="BillboardTabplane2TitleText">
                          <div><?php echo substr($row['title'],0,16) ?></div>
                          <div><?php echo substr($row['title'],16,23) ?></div>
                        </div>
                      </div>
                      <div class="BillboardTabplane2DiscriptionTextCont">
                        <div class="BillboardTabplane2DiscriptionText">
                          <?php echo $row['descr'] ?>
                        </div>
                      </div>
                      <div class="BillboardTabplane2DiscriptionTextCont">
                        <div class="BillboardTabplane2Hyperlinks">
                          <button onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')" class="cta_button_primary Ss-btn_txt">
                          <div><?php echo $row['btn_nm1'] ?></div> <img src="assets/icons/Button_forwardarrow.png" /></button>
                          <button onclick="window.open('<?php echo $row['btn2_hlink'] ?>',  '_blank')" class="cta_button_secondary Secondary-btn_txt"><?php echo $row['btn_nm2'] ?> <img src="assets/icons/arrow_forward.png" /></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="BillBoardBottom">
                    <div class="BillBoardHeader"><?php echo $row['title'] ?></div>
                    <div class="BillBoardImg" style="overflow:hidden">
                      <img
                        src="<?php echo $row['img1'] ?>"
                        alt=""
                        style="width: 100%; height: 100%; object-fit: cover;"
                        srcset=""
                      />
                    </div>
                    <div class="BillBoardDescription">
                      <?php echo $row['descr'] ?>
                    </div>
                    <div class="BillBoardNavButtons">
                      <button onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')" class="BillBoardNavButtonRed">
                        <div> <?php echo $row['btn_nm1'] ?> </div>
                        <img
                          class="BillBoardButtonArrows"
                          src="./assets/icons/ArrowHorizontalMiniWhite.svg"
                          alt=""
                        />
                      </button>
                      <button onclick="window.open('<?php echo $row['btn2_hlink'] ?>',  '_blank')" class="BillBoardNavButtonWhite">
                        <div><?php echo $row['btn_nm2'] ?></div>
                        <img
                          class="BillBoardButtonArrows"
                          src="./assets/icons/ArrowHorizontalMiniRed.svg"
                          alt=""
                        />
                      </button>
                    </div>
                  </div>
                </div>
              <?php 
            }
        }
      ?>
      <?php
      
        $sql = "SELECT * FROM sections WHERE id = 'Admissions_Apply to Programs';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
            ?>
            <!---->
            <section class="apply-to-programs">
              <h2 class="section-title"><?php echo $row['title'] ?></h2>
              <div class="programs-container">
                <div class="programs-list">
                  <div class="program-item">
                    <div class="program-card">
                      <div class="program-card-content">
                        <div class="program-details">
                          <h3 class="program-name"><?php echo $row['subsec1_title'] ?></h3>
                          <p class="program-duration"><?php echo $row['subsec1_desc'] ?></p>
                          <div class="text_btnnew" onclick="window.open('<?php echo $row['subsec1_btn1_hlink'] ?>',  '_blank')">
                            <div class="text_btnnew_innrdiv">
                              <div class="text_btnnew_txt ">
                                <?php echo $row['subsec1_btn1'] ?>
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
                  <div class="program-item-post-graduate">
                    <div class="program-card-post-graduate">
                      <div class="program-card-content">
                        <div class="program-details">
                          <h3 class="program-name"><?php echo $row['subsec2_title'] ?></h3>
                          <p class="program-duration"><?php echo $row['subsec2_desc'] ?></p>
                          <div class="text_btnnew" onclick="window.open('<?php echo $row['subsec2_btn1_hlink'] ?>',  '_blank')">
                            <div class="text_btnnew_innrdiv">
                              <div class="text_btnnew_txt">
                                <?php echo $row['subsec2_btn1'] ?>
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
                  <div class="program-item-phd">
                    <div class="program-card-phd">
                      <div class="program-card-content">
                        <div class="program-details">
                          <h3 class="program-name"><?php echo $row['subsec3_title'] ?></h3>
                          <p class="program-duration"><?php echo $row['subsec3_desc'] ?></p>
                          <div class="text_btnnew" onclick="window.open('<?php echo $row['subsec3_btn1_hlink'] ?>',  '_blank')">
                            <div class="text_btnnew_innrdiv">
                              <div class="text_btnnew_txt">
                                <?php echo $row['subsec3_btn1'] ?>
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
                </div>
              </div>
            </section>
            <?php 
            }
        }
      ?>
      <!---->
      <?php 
        $sql = "SELECT * FROM sections WHERE id = 'Admissions_V-SAT';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
              ?>
              <div class="admission-container">
                <div class="admission-column">
                  <div class="admission-content">
                    <div class="admission-title"><?php echo $row['title'] ?></div>
                    <p class="admission-description">
                      <?php echo $row['descr'] ?>
                    </p>
                    <div class="admission-actions">
                      <button onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')" class="cta_button_secondary Secondary-btn_txt"><?php echo $row['btn_nm1'] ?><img src="assets/icons/arrow_forward.png" /></button>
                      <div class="text_btnnew" onclick="window.open('<?php echo $row['btn2_hlink'] ?>',  '_blank')">
                        <div class="text_btnnew_innrdiv">
                          <div class="text_btnnew_txt mediumText_btnnew">
                            <?php echo $row['btn_nm2'] ?>
                          </div>
                          <div>
                            <img src="assets/svgicons/outwardarrow_brown.svg" class="mediumIcon_btnnew" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dates-column">
                  <div class="dates-content">
                    <h3 class="dates-title">Important Dates</h3>
                    <div class="dates-list">
                      <div class="admission-container">
                        <div class="admission-column">
                          <div class="date-item">
                            <div class="date-content">
                              <div class="date-details">
                                <div class="date-month">April</div>
                                <div class="date-day">15</div>
                                <div class="date-description">Last Date to Apply</div>
                              </div>
                              <div class="date-separator">
                                <img
                                  src="./assets/icons/card-calender.png"
                                  alt=""
                                  class="date-icon"
                                />
                                <div class="date-line"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="admission-column">
                          <div class="date-item">
                            <div class="date-content">
                              <div class="date-details">
                                <div class="date-month">April</div>
                                <div class="date-day">30</div>
                                <div class="date-description">Results of VSAT</div>
                              </div>
                              <div class="date-separator">
                                <img
                                  src="./assets/icons/card-calender.png"
                                  alt=""
                                  class="date-icon"
                                />
                                <div class="date-line"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php  
            }
        }
      ?>
      <!---->
      <?php 
        $sql = "SELECT * FROM `notifications` WHERE `id` LIKE 'Admissions_NOTIFICATIONS_%' LIMIT 5;";
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
              ?>
                <section class="notifications-container">
                  <h2 class="notifications-title">Notifications</h2>
                  <div class="notifications-list">
                    <div class="notification-row">
                      <?php 
                      while ($row = $result->fetch_assoc()) {
                      ?>
                          <article class="notification-card">
                            <div class="notification-content">
                              <div class="notification-details">
                                <div class="notification-text">
                                  <p class="notification-description">
                                    <?php echo $row['title'] ?>
                                  </p>
                                  <time class="notification-date"><?php echo $row['date'] ?></time>
                                </div>
                                <img
                                  src="./assets/icons/HorizontalBlackArrow.svg"
                                  alt=""
                                  class="notification-icon"
                                />
                              </div>
                            </div>
                          </article>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                  <div class="text_btnnew" style="align-self:end;" onclick="window.open('',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        View all
                      </div>
                      <div>
                        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                      </div>
                    </div>
                  </div>
                </section>
              <?php 
        }
      ?>
      <?php 
        $sql = "SELECT * FROM `sections` WHERE `id` = 'Admissions_Goals for Your Enriching Journey';";
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
          if($row = $result->fetch_assoc()) {
              ?>
                <section class="goals-journey-container">
                  <div class="goals-journey-content">
                    <div class="goals-journey-text">
                      <h2 class="goals-journey-heading">
                        <?php echo $row['title']; ?>
                      </h2>
                      <div class="goals-journey-description">
                        <p class="goals-journey-paragraph">
                          <?php echo $row['descr']; ?>
                        </p>
                        <div class="text_btnnew scholarship-cta"  onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')">
                          <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt">
                              <?php echo $row['btn_nm1'] ?>
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
                          <span class="placement-stats-percentage"
                            >95<span style="font-size: 31px; line-height: 37px"
                              >%</span
                            ></span
                          >
                          <span class="placement-stats-label">Placements</span>
                        </div>
                        <div class="placement-stats-divider">
                          <img
                            src="./assets/icons/round-star.png"
                            alt=""
                            class="placement-stats-icon"
                            loading="lazy"
                          />
                          <div class="placement-stats-line"></div>
                        </div>
                      </div>
                    </div>
                  </div><br><br>

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
              <?php 
          }
        }
        ?>

      <!---->
      
      <!---->
      <?php
      $sql = "SELECT * FROM `sections` WHERE `id` = 'Admissions_Scholarship';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
        ?>
        <div class="scholarshipAndFeesDetails">
        <section class="scholarship-section">
          <header class="scholarship-header">
            <h2 class="scholarship-title"><?php echo $row['subsec1_title']; ?></h2>
            <div class="scholarship-description">
              <p class="scholarship-text">
                <?php echo $row['subsec1_desc']; ?>
              </p>
              <div class="scholarship-cta">
                <div class="text_btnnew" onclick="window.open('<?php echo $row['subsec1_btn1_hlink'] ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['subsec1_btn1']; ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div class="scholarship-stats">
            <div class="stats-container">
              <div class="stats-column">
                <div class="stats-card">
                  <div class="stats-content">
                    <div class="stats-text">
                      <span class="stats-label">upto</span>
                      <h3 class="stats-value">
                        75<span style="font-size: 31px; line-height: 37px"
                          >%</span
                        >
                      </h3>
                      <p class="stats-description">
                        Scholarship on Tuition fee
                      </p>
                    </div>
                    <div class="stats-divider">
                      <img
                        src="./assets/icons/ArchiveIconRust.svg"
                        alt=""
                        class="stats-icon"
                      />
                      <div class="stats-line"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="stats-column">
                <div class="stats-card">
                  <div class="stats-content">
                    <div class="stats-text">
                      <h3 class="stats-value">
                        16<span style="font-size: 31px; line-height: 37px"
                          >cr</span
                        >
                      </h3>
                      <p class="stats-description">Worth of Scholarships</p>
                    </div>
                    <div class="stats-divider">
                      <img
                        src="./assets/icons/ScholarHatIconRust.svg"
                        alt=""
                        class="stats-icon"
                      />
                      <div class="stats-line"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fee-details">
          <div class="fee-details-content">
            <h2 class="fee-details-title"><?php echo $row['subsec2_title']; ?></h2>
            <div class="fee-details-description">
              <p class="fee-details-text">
                <?php echo $row['subsec2_desc']; ?>
              </p>
              <div class="text_btnnew scholarship-cta" onclick="window.open('<?php echo $row['subsec2_btn1_hlink']; ?>',  '_blank')">
                <div class="text_btnnew_innrdiv">
                  <div class="text_btnnew_txt">
                    <?php echo $row['subsec2_btn1']; ?>
                  </div>
                  <div>
                    <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
          
          $sql = "SELECT * FROM `testimonials` WHERE Id='Admissions_KUNITA RAO';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row2 = $result->fetch_assoc()) {
              ?>
              <div class="student-testimonial">
                <div class="student-testimonial-content">
                  <img
                    src="./assets/icons/DoubleQuoateIconMaroon.svg"
                    alt=""
                    class="student-testimonial-icon"
                  />
                  <p class="student-testimonial-text">
                    <?php echo $row2['descr']; ?>
                  </p>
                </div>
                <p class="student-name"><?php echo $row2['name'] ?></p>
              </div>
              <?php
            }}
          ?>
        </section>
      </div>
        <?php
        }
      }
      ?>

      <!---->

      <?php 
      
      $sql = "SELECT * FROM `sections` WHERE `id` = 'Admissions_Bank Loans';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
          ?>
          <section class="bank-loans-section">
            <div class="bank-loans-container">
              <div class="bank-loans-column">
                <div class="bank-loans-content">
                  <h2 class="bank-loans-heading"><?php echo $row['title']; ?></h2>
                  <div class="bank-loans-description">
                    <p class="bank-loans-text">
                      <?php echo $row['descr']; ?>
                    </p>
                    <div class="text_btnnew scholarship-cta" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
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
              </div>
              <div class="bank-logos-column">
                <div class="bank-logos-container">

                <!--  -->
                  <img
                    src="./assets/icons/SBIBankIcon.svg"
                    alt="Bank logo 1"
                    class="bank-logo"
                  />
                  <img
                    src="./assets/icons/SouthIndianBankIcon.svg"
                    alt="Bank logo 2"
                    class="bank-logo"
                  />
                  <img
                    src="./assets/icons/ICICIBankIcon.svg"
                    alt="Bank logo 3"
                    class="bank-logo"
                  />
                  <img
                    src="./assets/icons/BankOfBarodaIcon.svg"
                    alt="Bank logo 4"
                    class="bank-logo"
                  />
                  <img
                    src="./assets/icons/CanaraBankIcon.svg"
                    alt="Bank logo 5"
                    class="bank-logo"
                  />
                  <img
                    src="./assets/icons/BankOfBarodaIcon.svg"
                    alt="Bank logo 6"
                    class="bank-logo"
                  />
                  
                </div>
              </div>
            </div>
          </section>          
          <?php
        }
      }
      ?>
      
      <!---->
      <?php
      
      $sql = "SELECT * FROM `sections` WHERE `id` = 'Admissions_Accreditations';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
          ?>
          <div class="accreditationComponent">
            <div class="accreditationComponentHeader">
              <div class="accreditationComponentHeaderValue"><?php echo $row['title']; ?></div>
            </div>
            <div class="accreditationComponentContent">
              <div class="accreditationComponentDescription">
                <?php echo $row['descr']; ?>
              </div>
              <div
                class="accreditationComponentContentaccreditationdetailscontainer"
              >
                <div
                  class="accreditationComponentContentNBAContainer accreditationbadges"
                >
                  <img
                    class="accreditationbadgesImg"
                    src="assets/images/nba.svg"
                    alt=""
                  />
                  <div class="accreditationbadgesName">
                    <?php echo $row['subsec1_desc']; ?>
                  </div>
                  <div class="text_btnnew" style="align-self:center"  data-toggle="modal"  data-target="#nba">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        <?php echo $row['subsec1_btn1']; ?>
                      </div>
                      <div>
                        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="accreditationComponentContentDSIRContainer accreditationbadges"
                >
                  <img
                    class="accreditationbadgesImg"
                    src="assets/images/dsir.svg"
                    alt=""
                  />
                  <div class="accreditationbadgesName">
                    <?php echo $row['subsec2_desc']; ?>
                  </div>
                  <div class="text_btnnew" style="align-self:center;"  data-toggle="modal"  data-target="#iqachead_dsiroverlay">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        <?php echo $row['subsec1_btn1']; ?>
                      </div>
                      <div>
                        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="accreditationComponentContentNAACContainer accreditationbadges"
                >
                  <img
                    class="accreditationbadgesImg"
                    src="assets/images/naaca.svg"
                    alt=""
                  />
                  <div class="accreditationbadgesName">
                   <?php echo $row['subsec1_desc']; ?>
                  </div>
                  <div class="text_btnnew" style="align-self:center;" onclick="window.open('naac.php',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        <?php echo $row['subsec3_btn1']; ?>
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
          <?php
        }
      }
      
      ?>
      
      <!---->
      <div class="home-brwsdiv">
            <div class="home-prgmsoffrd_title btnnone-mbl">
                Browse Departments
            </div>
            <div>
                <img loading="lazy" class="home-brwsimg1" src="assets/images/brws-img1.webp" />
            </div>
            <div class="home-depts">
                <div class="deptcard_div" onclick="compdep()" style="cursor:pointer;">
                    <div class="deptcard_innrdiv">
                        <div class="dept_name">Computer Science Engineering</div>
                        <div class="dept-imgbrdr">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_3071_92" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="48" height="48">
                                    <rect width="48" height="48" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_3071_92)">
                                    <path
                                        d="M24.05 42.8001C20.4351 42.8001 17.398 41.5822 14.9388 39.1466C12.4796 36.711 11.25 33.6788 11.25 30.0501V17.5424C11.25 13.9398 12.4796 10.9141 14.9388 8.46541C17.398 6.01671 20.4351 4.79236 24.05 4.79236C27.6392 4.79236 30.6532 6.02326 33.0919 8.48506C35.5306 10.9469 36.75 13.966 36.75 17.5424V30.0501C36.75 33.6669 35.5306 36.6961 33.0919 39.1377C30.6532 41.5793 27.6392 42.8001 24.05 42.8001ZM25.1193 17.5424H34.5616C34.5616 14.8321 33.6603 12.4635 31.8577 10.4366C30.0551 8.40968 27.809 7.26929 25.1193 7.01546V17.5424ZM13.4385 17.5424H22.9307V7.01546C20.241 7.26929 17.9865 8.40968 16.1673 10.4366C14.3481 12.4635 13.4385 14.8321 13.4385 17.5424ZM24.0169 40.6116C26.9185 40.6116 29.4013 39.5819 31.4654 37.5224C33.5295 35.4629 34.5616 32.9721 34.5616 30.0501V19.7308H13.4385V30.0501C13.4385 32.9721 14.4762 35.4629 16.5516 37.5224C18.6269 39.5819 21.1154 40.6116 24.0169 40.6116Z"
                                        fill="black" />
                                </g>
                            </svg>
                            <!--<img src="assets/icons/Computer Science.png" />-->

                            <div class="council-brdr"></div>
                        </div>
                    </div>
                </div>
                <div class="deptcard_div" onclick="mechdep()" style="cursor:pointer;">
                    <div class="deptcard_innrdiv">
                        <div class="dept_name">Mechanical Engineering</div>
                        <div class="dept-imgbrdr">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_3079_85" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="48" height="48">
                                    <rect width="48" height="48" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_3079_85)">
                                    <path
                                        d="M35.7578 41.25L22.4809 27.95C21.7219 28.2936 20.9395 28.5577 20.1338 28.7423C19.3281 28.927 18.4856 29.0193 17.6064 29.0193C14.4771 29.0193 11.8238 27.9184 9.64666 25.7165C7.46946 23.5147 6.38086 20.8554 6.38086 17.7385C6.38086 16.8137 6.48819 15.9462 6.70286 15.1361C6.91749 14.3259 7.21786 13.5254 7.60396 12.7346L14.8117 19.8269L19.8578 14.9269L12.6693 7.71158C13.4578 7.32181 14.2554 7.00577 15.0623 6.76347C15.8692 6.52117 16.7228 6.40002 17.6232 6.40002C20.8057 6.40002 23.5058 7.49928 25.7235 9.69778C27.9412 11.8962 29.0501 14.5754 29.0501 17.7351C29.0501 18.6579 28.9642 19.5135 28.7924 20.3019C28.6206 21.0904 28.3501 21.8551 27.9809 22.5962L41.2694 35.8731C41.6001 36.2099 41.7655 36.5986 41.7655 37.0392C41.7655 37.4797 41.603 37.8605 41.2779 38.1814L38.0339 41.3355C37.7523 41.6272 37.3769 41.7603 36.9077 41.7346C36.4385 41.709 36.0552 41.5475 35.7578 41.25ZM36.9617 39.3692L39.327 37.0039L25.3501 23.0269C25.7578 22.2423 26.1117 21.3943 26.4117 20.4827C26.7117 19.5712 26.8617 18.6564 26.8617 17.7385C26.8617 15.2305 25.8328 12.9945 23.7751 11.0306C21.7174 9.06661 19.2078 8.30771 16.2463 8.75388L21.3347 13.8654C21.6424 14.2071 21.7879 14.6086 21.7713 15.0698C21.7546 15.531 21.5924 15.9321 21.2847 16.2731L16.0847 21.2539C15.7339 21.6205 15.3302 21.8039 14.8736 21.8039C14.4169 21.8039 14.0219 21.6205 13.6886 21.2539L8.72321 16.3C8.26934 19.5411 9.04229 22.1064 11.0421 23.9962C13.0418 25.8859 15.2421 26.8308 17.643 26.8308C18.5059 26.8308 19.3897 26.7122 20.2946 26.475C21.1995 26.2379 22.068 25.8359 22.9001 25.2693L36.9617 39.3692Z"
                                        fill="black" />
                                </g>
                            </svg>
                            <!-- <img src="assets/icons/Mechanical.png" />-->
                            <div class="council-brdr"></div>
                        </div>
                    </div>
                </div>
                <div class="deptcard_div" onclick="ecedep()" style="cursor:pointer;">
                    <div class="deptcard_innrdiv">
                        <div class="dept_name">Electronics & Communication Engineering</div>
                        <div class="dept-imgbrdr">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_3079_1538" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="48" height="48">
                                    <rect width="48" height="48" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_3079_1538)">
                                    <path
                                        d="M23.8885 31.6193L32.9769 18.4154H25.8116L28.9193 7.83847H18.6577V24.3616H23.8885V31.6193ZM21.7 38.7424V26.55H16.4692V5.65002H31.7962L28.75 16.227H37.1577L21.7 38.7424Z"
                                        fill="black" />
                                </g>
                            </svg>

                            <!--<img src="assets/icons/Electric.png" />-->
                            <div class="council-brdr"></div>
                        </div>
                    </div>
                </div>
                <div class="deptcard_div" onclick="civildep()" style="cursor:pointer;">
                    <div class="deptcard_innrdiv">
                        <div class="dept_name">Civil Engineering</div>
                        <div class="dept-imgbrdr">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_3079_2126" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="48" height="48">
                                    <rect width="48" height="48" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_3079_2126)">
                                    <path
                                        d="M9.08446 39.873V36.3499H15.2037L10.0422 18.5499C9.03702 18.1269 8.26651 17.5147 7.73061 16.7134C7.19471 15.9121 6.92676 14.9387 6.92676 13.7931C6.92676 12.3296 7.43926 11.0867 8.46426 10.0643C9.48926 9.04189 10.7354 8.53069 12.2026 8.53069C13.4828 8.53069 14.5883 8.91596 15.5191 9.68649C16.4499 10.457 17.0601 11.4538 17.3499 12.6768H24.8729V9.52684C24.8729 9.19134 24.9692 8.92926 25.1619 8.74059C25.3545 8.55196 25.6146 8.45764 25.9422 8.45764C26.2729 8.45764 26.512 8.54417 26.6595 8.71724C26.8069 8.89031 26.8883 9.10889 26.9037 9.37299V9.91149L30.7306 6.29994C31.0165 6.05891 31.3308 5.90954 31.6735 5.85184C32.0162 5.79414 32.3846 5.85248 32.7785 6.02684L40.5383 9.68454C40.7358 9.77428 40.9095 9.95121 41.0595 10.2153C41.2095 10.4794 41.2043 10.743 41.0439 11.0059C40.9068 11.2455 40.7146 11.3942 40.4671 11.4518C40.2196 11.5095 39.9766 11.4807 39.7383 11.3653L31.923 7.66534L27.0614 12.3961V15.0615L31.923 19.8499L39.7383 16.1384C40.009 16.023 40.2453 15.9961 40.4471 16.0576C40.6489 16.1192 40.8537 16.2692 41.0614 16.5076C41.1511 16.7717 41.1358 17.0397 41.0153 17.3115C40.8948 17.5833 40.7319 17.7769 40.5268 17.8922L32.8807 21.4769C32.4832 21.6589 32.096 21.7352 31.7191 21.7057C31.3422 21.6762 31.0074 21.5133 30.7147 21.2168L26.9037 17.6922V18.2307C26.8883 18.5692 26.7984 18.8063 26.6339 18.9422C26.4694 19.0781 26.2392 19.1461 25.9433 19.1461C25.615 19.1461 25.3545 19.0452 25.1619 18.8434C24.9692 18.6416 24.8729 18.3861 24.8729 18.0768V14.8653H17.2883C17.2704 15.3346 17.121 15.8121 16.8403 16.298C16.5595 16.7839 16.2896 17.1397 16.0306 17.3653L26.0576 36.3499H33.9345V39.873H9.08446ZM12.1547 16.873C13.0092 16.873 13.7419 16.5722 14.3528 15.9705C14.9636 15.3688 15.2691 14.6379 15.2691 13.7779C15.2691 12.9179 14.9667 12.1931 14.362 11.6035C13.7573 11.014 13.0227 10.7192 12.1582 10.7192C11.2937 10.7192 10.5704 11.014 9.98831 11.6035C9.40627 12.1931 9.11526 12.9179 9.11526 13.7779C9.11526 14.6379 9.40817 15.3688 9.99401 15.9705C10.5799 16.5722 11.3001 16.873 12.1547 16.873ZM17.6768 36.3499H23.5729L15.2229 20.473C15.028 20.6166 14.7069 20.7474 14.2595 20.8653C13.812 20.9833 13.4063 21.0333 13.0422 21.0153L17.6768 36.3499Z"
                                        fill="black" />
                                </g>
                            </svg>
                            <!--<img src="assets/icons/Civil.png" />-->
                            <div class="council-brdr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-brwsdiv3">
                <div class="home-div3_title btnnone">
                    Browse Departments
                </div>
                <div>
                    <img loading="lazy" src="assets/images/brws-img2.webp" class="btnnone" />
                </div>
                <div>
                    <button class="cta_button_primary Ss-btn_txt btnnone" onclick="window.open('department.php',  '_blank')">View All
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2"
                                width="24" height="24">
                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_2961_1144)">
                                <path
                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                    fill="#F2F1ED" />
                            </g>
                        </svg>
                        <!--<img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                    </button>
                </div>



                <div class="btnnone-mbl">
                    <button class="cta_button_primary Ss-btn_txt  explore" onclick="window.open('department.php',  '_blank')">View Departments
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2"
                                width="24" height="24">
                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_2961_1144)">
                                <path
                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                    fill="#F2F1ED" />
                            </g>
                        </svg>
                        <!--  <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->

                    </button>
                </div>




                <!-- <div>
                    <button class="cta_button_primary Ss-btn_txt">View All
                        <img src="assets/icons/Button_forwardarrow.png" class="btn_arrow" /></button>
                </div>-->
            </div>
        </div>
      <!---->
      <?php
      $sql = "SELECT * FROM `testimonials` WHERE id = 'Admissions_SAMIRA REDDY' or id = 'Admissions_NAVEEN VARMA' or id = 'Admissions_SUJAY SHEKHAR';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          ?>
            <section class="testimonials">
              <h2 class="testimonials-title">What People Say</h2>
              <div class="testimonials-container">
                <div class="testimonials-wrapper">
                  <div class="testimonials-row">
                    <?php 
                    while($row = $result->fetch_assoc()) {
                      ?>
                      <div class="testimonial-col">
                        <div class="testimonial-content">
                          <img
                            src="./assets/icons/DoubleQuoateIconMaroon.svg"
                            alt="Avatar"
                            class="testimonial-avatar"
                          />
                          <p class="testimonial-text">
                            <?php echo $row['descr'] ?>
                            <br />
                          </p>
                          <div class="testimonial-author">
                            <div class="testimonial-name"><?php echo $row['name'] ?></div>
                            <div class="testimonial-class"><?php echo $row['caption'] ?></div>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
            </section>
          <?php
        }
        $sql = "SELECT * FROM `testimonials` WHERE id = 'Admissions_SAMIRA REDDY' or id = 'Admissions_NAVEEN VARMA' or id = 'Admissions_SUJAY SHEKHAR';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      ?>
          <section class="testimonials-section-mobile">
            <h2 class="testimonials-title-mobile">What People Say</h2>
            <?php
            while($row = $result->fetch_assoc()) {
            ?>
              <article class="testimonial-item-mobile">
                <div class="testimonial-content-mobile">
                  <img
                    src="./assets/icons/DoubleQuoateIconMaroon.svg"
                    alt="Testimonial author Kunita Rao"
                    class="testimonial-image-mobile"
                  />
                  <div class="testimonial-text-mobile">
                    <p class="testimonial-quote-mobile">
                      <?php echo $row['descr'] ?>
                    </p>
                    <p class="testimonial-author-mobile"><?php echo $row['name'] ?></p>
                  </div>
                </div>
              </article>
            <?php 
            }
            ?>
          </section>
      <?php 
      }
      ?>
      <!---->
      <div class="Frequently-asked-questions-component">
        <div class="Frequently-asked-questions-component-title">
          Frequently Asked Questions
        </div>
        <div
          class="panel-group"
          id="accordion"
          role="tablist"
          aria-multiselectable="true"
        >
          <div
            class="panel panel-default"
            style="background-color: transparent"
          >
            <div
              class="panel-heading"
              role="tab"
              id="headingOne"
              style="background-color: transparent"
            >
              <h4 class="panel-title">
                <a
                  class="question"
                  data-toggle="collapse"
                  data-parent="#accordion"
                  href="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  1. How can I apply to the Computer Science program?
                </a>
              </h4>
            </div>
            <div
              id="collapseOne"
              class="panel-collapse collapse in"
              role="tabpanel"
              aria-labelledby="headingOne"
            >
              <div class="panel-body">
                Along with the course, you also get access to the course
                discussion forum. You can ask any questions and I will answer
                them personally within 24 hours. You can ask any questions and.
              </div>
            </div>
          </div>
          <div
            class="panel panel-default"
            style="background-color: transparent"
          >
            <div
              class="panel-heading"
              role="tab"
              id="headingTwo"
              style="background-color: transparent"
            >
              <h4 class="panel-title">
                <a
                  class="question collapsed"
                  data-toggle="collapse"
                  data-parent="#accordion"
                  href="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  2. What are the admission requirement for computer science
                  department?
                </a>
              </h4>
            </div>
            <div
              id="collapseTwo"
              class="panel-collapse collapse"
              role="tabpanel"
              aria-labelledby="headingTwo"
            >
              <div class="panel-body">Answer</div>
            </div>
          </div>
          <div
            class="panel panel-default"
            style="background-color: transparent"
          >
            <div
              class="panel-heading"
              role="tab"
              id="headingThree"
              style="background-color: transparent"
            >
              <h4 class="panel-title">
                <a
                  class="question collapsed"
                  data-toggle="collapse"
                  data-parent="#accordion"
                  href="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  3. Are there any prerequisites for specific courses within the
                  department?
                </a>
              </h4>
            </div>
            <div
              id="collapseThree"
              class="panel-collapse collapse"
              role="tabpanel"
              aria-labelledby="headingThree"
            >
              <div class="panel-body">Answer</div>
            </div>
          </div>
          <div
            class="panel panel-default"
            style="background-color: transparent"
          >
            <div
              class="panel-heading"
              role="tab"
              id="headingFour"
              style="background-color: transparent"
            >
              <h4 class="panel-title">
                <a
                  class="question collapsed"
                  data-toggle="collapse"
                  data-parent="#accordion"
                  href="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseFour"
                >
                  4. How much is the validity of the course?
                </a>
              </h4>
            </div>
            <div
              id="collapseFour"
              class="panel-collapse collapse"
              role="tabpanel"
              aria-labelledby="headingFour"
            >
              <div class="panel-body">Answer</div>
            </div>
          </div>
          <div
            class="panel panel-default"
            style="background-color: transparent"
          >
            <div
              class="panel-heading"
              role="tab"
              id="headingFive"
              style="background-color: transparent"
            >
              <h4 class="panel-title">
                <a
                  class="question collapsed"
                  data-toggle="collapse"
                  data-parent="#accordion"
                  href="#collapseFive"
                  aria-expanded="false"
                  aria-controls="collapseFive"
                >
                  5. What is the typical class size for computer science
                  courses?
                </a>
              </h4>
            </div>
            <div
              id="collapseFive"
              class="panel-collapse collapse"
              role="tabpanel"
              aria-labelledby="headingFive"
            >
              <div class="panel-body">Atmost 70 students can sit together.</div>
            </div>
          </div>
        </div>

      <!---->
      

        </div><br><br><br><br><br><br><br><br>
        <!---->
        <div id="mblftr">
          <?php include_once  'mblfooter.php';?>
        </div>
        <div id="ftr">
          <?php include_once  'footer.php';?>
        </div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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