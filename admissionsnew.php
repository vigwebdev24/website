


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vignan University</title>
    <link rel="stylesheet" href="css/button.css" />
    <link rel="stylesheet" href="css/BillBoard.css" />
    <link rel="stylesheet" href="css/accreditation.css" />
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      rel="stylesheet"
    />
   
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/button.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles.css" />
    
  </head>

  <body style="background-color: #f2f1ed">
    <!--NavBar starts-->
    <?php 
include_once 'connect.php';
include_once  'navbar.php';
?>
    <!--NavBar ends-->
    <div class="CombinerMainforAdmissions">
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
                        style="
                          overflow: hidden;
                          width: 50%;
                          height: 100%;
                          box-sizing: border-box;
                        "
                      >
                        <img
                          src="./assets/GirlHat.jpg"
                          style="
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            background-position: right;
                          "
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
                          <button class="BillboardTabplane2Hyperlinks1">
                            <a href="">
                              <?php echo $row['btn_nm1'] ?>
                              <img
                                src="./assets/Button Icons Arrow white.png"
                                style="width: 20px; height: 20px"
                                alt=""
                              />
                            </a>
                          </button>
                          <button class="BillboardTabplane2Hyperlinks2">
                            <a href="">
                              <?php echo $row['btn_nm2'] ?>
                              <img
                                src="./assets/Button Icons Arrow Maroon.png"
                                style="width: 20px; height: 20px"
                                alt=""
                              />
                            </a>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="BillBoardBottom">
                    <div class="BillBoardHeader"><?php echo substr($row['title'],0,16) ?></div>
                    <div class="BillBoardImg">
                      <img
                        src="./BillBoardAssets/Pexels Photo by Anete Lusina.svg"
                        alt=""
                        srcset=""
                      />
                    </div>
                    <div class="BillBoardDescription">
                      <?php echo $row['descr'] ?>
                    </div>
                    <div class="BillBoardNavButtons">
                      <button class="BillBoardNavButtonRed">
                        <div> <?php echo $row['btn_nm1'] ?> </div>
                        <img
                          class="BillBoardButtonArrows"
                          src="./BillBoardAssets/ArrowHorizontalMiniWhite.svg"
                          alt=""
                        />
                      </button>
                      <button class="BillBoardNavButtonWhite">
                        <div><?php echo $row['btn_nm2'] ?></div>
                        <img
                          class="BillBoardButtonArrows"
                          src="./BillBoardAssets/ArrowHorizontalMiniRed.svg"
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
                          <div class="Mini-Hyperlink-button" >
                            <a href="<?php echo $row['subsec1_btn1_hlink'] ?>" class="Mini-Hyperlink-link">
                              <span class="Mini-Hyperlink-text"><?php echo $row['subsec1_btn1'] ?></span>
                              <img
                                src="./assets/SmallDiagonalArrowIconRed.svg"
                                alt=""
                                class="Mini-Hyperlink-icon"
                              />
                            </a>
                            <div class="Mini-Hyperlink-underline"></div>
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
                          <div class="Mini-Hyperlink-button" >
                            <a href="<?php echo $row['subsec2_btn1_hlink'] ?>" class="Mini-Hyperlink-link">
                              <span class="Mini-Hyperlink-text"><?php echo $row['subsec2_btn1'] ?></span>
                              <img
                                src="./assets/SmallDiagonalArrowIconRed.svg"
                                alt=""
                                class="Mini-Hyperlink-icon"
                              />
                            </a>
                            <div class="Mini-Hyperlink-underline"></div>
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
                          <div class="Mini-Hyperlink-button" >
                            <a href="<?php echo $row['subsec2_btn1_hlink'] ?>" class="Mini-Hyperlink-link">
                              <span class="Mini-Hyperlink-text"><?php echo $row['subsec2_btn1'] ?></span>
                              <img
                                src="./assets/SmallDiagonalArrowIconRed.svg"
                                alt=""
                                class="Mini-Hyperlink-icon"
                              />
                            </a>
                            <div class="Mini-Hyperlink-underline"></div>
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
                      <div class="eligibility-button">
                        <span class="eligibility-text"><?php echo $row['btn_nm1'] ?></span>
                        <img
                          src="./assets/MediumHorizontalArrowIconRed.svg"
                          alt=""
                          class="eligibility-icon"
                        />
                      </div>
                      <div class="sample-papers-button">
                        <div class="sample-papers-content">
                          <span class="sample-papers-text"><?php echo $row['btn_nm2'] ?></span>
                          <img
                            src="./assets/MediumDiagonalArrowIconRed.svg"
                            alt=""
                            class="sample-papers-icon"
                          />
                        </div>
                        <div class="sample-papers-underline"></div>
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
                                  src="./assets/CalendraIconRust.svg"
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
                                  src="./assets/CalendraIconRust.svg"
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
                                  src="./assets/HorizontalBlackArrow.svg"
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
                  <div class="Mini-Hyperlink-button" style="align-self: self-end">
                    <a href="#" class="Mini-Hyperlink-link">
                      <span class="Mini-Hyperlink-text">View all</span>
                      <img
                        src="./assets/MediumDiagonalArrowIconRed.svg"
                        alt=""
                        class="Mini-Hyperlink-icon"
                      />
                    </a>
                    <div class="Mini-Hyperlink-underline"></div>
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
                        <div class="Mini-Hyperlink-button" style="align-self: self-start">
                          <a href="<?php echo $row['btn1_hlink']; ?>" class="Mini-Hyperlink-link">
                            <span class="Mini-Hyperlink-text"><?php echo $row['btn_nm1'] ?></span>
                            <img
                              src="./assets/MediumDiagonalArrowIconRed.svg"
                              alt=""
                              class="Mini-Hyperlink-icon"
                            />
                          </a>
                          <div class="Mini-Hyperlink-underline"></div>
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
                            src="./assets/EncircleStarIconRust.svg"
                            alt=""
                            class="placement-stats-icon"
                            loading="lazy"
                          />
                          <div class="placement-stats-line"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <section class="gallery-container">
                    <img
                      src="./assets/IBMLOGO.svg"
                      alt="Gallery image 1"
                      class="gallery-image"
                      loading="lazy"
                    />
                    <img
                      src="./assets/COGNIZANTLOGO.svg"
                      alt="Gallery image 2"
                      class="gallery-image"
                      loading="lazy"
                    />
                    <img
                      src="./assets/CAPGEMINILOGO.svg"
                      alt="Gallery image 3"
                      class="gallery-image"
                      loading="lazy"
                    />
                    <img
                      src="./assets/KOTAKLOGO.svg"
                      alt="Gallery image 4"
                      class="gallery-image"
                      loading="lazy"
                    />
                    <img
                      src="./assets/MODERNHEALTHCARELOGO.svg"
                      alt="Gallery image 5"
                      class="gallery-image"
                      loading="lazy"
                    />
                    <img
                      src="./assets/RELIANCELOGO.png"
                      alt="Gallery image 6"
                      class="gallery-image"
                      loading="lazy"
                    />
                  </section>
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
                <div class="Mini-Hyperlink-button">
                  <a href="#" class="Mini-Hyperlink-link">
                    <span class="Mini-Hyperlink-text"><?php echo $row['subsec1_btn1']; ?></span>
                    <img
                      src="./assets/MediumDiagonalArrowIconRed.svg"
                      alt=""
                      class="Mini-Hyperlink-icon"
                    />
                  </a>
                  <div class="Mini-Hyperlink-underline"></div>
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
                        src="./assets/ArchiveIconRust.svg"
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
                        src="./assets/ScholarHatIconRust.svg"
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
              <div class="Mini-Hyperlink-button" style="align-self: self-start">
                <a href="#" class="Mini-Hyperlink-link">
                  <span class="Mini-Hyperlink-text"
                    ><?php echo $row['subsec2_btn1']; ?></span
                  >
                  <img
                    src="./assets/MediumDiagonalArrowIconRed.svg"
                    alt=""
                    class="Mini-Hyperlink-icon"
                  />
                </a>
                <div class="Mini-Hyperlink-underline"></div>
              </div>
            </div>
          </div>
          <?php
          
          $sql = "SELECT * FROM `testimonials` where Id='Admissions_KUNITA RAO';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            if($row2 = $result->fetch_assoc()) {
              ?>
              <div class="student-testimonial">
                <div class="student-testimonial-content">
                  <img
                    src="./assets/DoubleQuoateIconMaroon.svg"
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
                    <div
                      class="Mini-Hyperlink-button"
                      style="align-self: self-start"
                    >
                      <a href="<?php echo $row['btn1_hlink']; ?>" class="Mini-Hyperlink-link">
                        <span class="Mini-Hyperlink-text"
                          ><?php echo $row['btn_nm1']; ?></span
                        >
                        <img
                          src="./assets/MediumDiagonalArrowIconRed.svg"
                          alt=""
                          class="Mini-Hyperlink-icon"
                        />
                      </a>
                      <div class="Mini-Hyperlink-underline"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bank-logos-column">
                <div class="bank-logos-container">
                  <div class="bank-logos-row">
                    <div class="bank-logos-left-column">
                      <div class="bank-logos-left-container">
                        <div class="bank-logos-top-row">
                          <img
                            src="./assets/SBIBankIcon.svg"
                            alt="Bank logo 1"
                            class="bank-logo-1"
                          />
                          <img
                            src="./assets/SouthIndianBankIcon.svg"
                            alt="Bank logo 2"
                            class="bank-logo-2"
                          />
                        </div>
                        <div class="bank-logos-bottom-row">
                          <img
                            src="./assets/ICICIBankIcon.svg"
                            alt="Bank logo 3"
                            class="bank-logo-3"
                          />
                          <img
                            src="./assets/BankOfBarodaIcon.svg"
                            alt="Bank logo 4"
                            class="bank-logo-4"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="bank-logos-right-column">
                      <div class="bank-logos-right-container">
                        <img
                          src="./assets/CanaraBankIcon.svg"
                          alt="Bank logo 5"
                          class="bank-logo-5"
                        />
                        <img
                          src="./assets/BankOfBarodaIcon.svg"
                          alt="Bank logo 6"
                          class="bank-logo-6"
                        />
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
                    src="./accreditationsAssests/NBA.svg"
                    alt=""
                  />
                  <div class="accreditationbadgesName">
                    <?php echo $row['subsec1_desc']; ?>
                  </div>
                  <div class="Mini-Hyperlink-button">
                    <a href="<?php echo $row['subsec1_btn1_hlink']; ?>" class="Mini-Hyperlink-link">
                      <span class="Mini-Hyperlink-text"><?php echo $row['subsec1_btn1']; ?></span>
                      <img
                        src="./assets/MediumDiagonalArrowIconRed.svg"
                        alt=""
                        class="Mini-Hyperlink-icon"
                      />
                    </a>
                    <div class="Mini-Hyperlink-underline"></div>
                  </div>
                </div>
                <div
                  class="accreditationComponentContentDSIRContainer accreditationbadges"
                >
                  <img
                    class="accreditationbadgesImg"
                    src="./accreditationsAssests/DSIR.svg"
                    alt=""
                  />
                  <div class="accreditationbadgesName">
                    <?php echo $row['subsec2_desc']; ?>
                  </div>
                  <div class="Mini-Hyperlink-button">
                    <a href="<?php echo $row['subsec2_btn1_hlink']; ?>" class="Mini-Hyperlink-link">
                      <span class="Mini-Hyperlink-text"><?php echo $row['subsec1_btn1']; ?></span>
                      <img
                        src="./assets/MediumDiagonalArrowIconRed.svg"
                        alt=""
                        class="Mini-Hyperlink-icon"
                      />
                    </a>
                    <div class="Mini-Hyperlink-underline"></div>
                  </div>
                </div>
                <div
                  class="accreditationComponentContentNAACContainer accreditationbadges"
                >
                  <img
                    class="accreditationbadgesImg"
                    src="./accreditationsAssests/NAAC.svg"
                    alt=""
                  />
                  <div class="accreditationbadgesName">
                   <?php echo $row['subsec1_desc']; ?>
                  </div>
                  <div class="Mini-Hyperlink-button">
                    <a href="#" class="Mini-Hyperlink-link">
                      <span class="Mini-Hyperlink-text"><?php echo $row['subsec1_btn1']; ?></span>
                      <img
                        src="./assets/MediumDiagonalArrowIconRed.svg"
                        alt=""
                        class="Mini-Hyperlink-icon"
                      />
                    </a>
                    <div class="Mini-Hyperlink-underline"></div>
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
      <div class="BrowseDepartmentsMainContainer">
        <div class="browse-departments-title2">Browse Departments</div>
        <div class="BrowseDepartment-image-container">
          <img
            src="./assets/Lab.png"
            alt="Descriptive alt text for the image"
            class="BrowseDepartment-image"
          />
        </div>
        <section class="engineering-container">
          <div class="engineering-row">
            <div class="engineering-column">
              <article class="engineering-card">
                <div class="engineering-card-content">
                  <h2 class="engineering-title">
                    Computer Science Engineering
                  </h2>
                  <div class="engineering-image-container">
                    <img
                      src="./assets/mouse.svg"
                      alt="Computer Science Engineering"
                      class="engineering-image"
                      loading="lazy"
                    />
                    <div class="engineering-divider"></div>
                  </div>
                </div>
              </article>
            </div>
            <div class="engineering-column-right">
              <article class="engineering-card">
                <div class="engineering-card-content">
                  <h2 class="engineering-title">Mechanical Engineering</h2>
                  <div class="engineering-image-container">
                    <img
                      src="./assets/build.svg"
                      alt="Mechanical Engineering"
                      class="engineering-image"
                      loading="lazy"
                    />
                    <div class="engineering-divider"></div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="engineering-row-bottom">
            <div class="engineering-column">
              <article class="engineering-card">
                <div class="engineering-card-content">
                  <h2 class="engineering-title">
                    Electronics &amp; Communication Engineering
                  </h2>
                  <div class="engineering-image-container-bottom">
                    <img
                      src="./assets/ElectricIconBlack.svg"
                      alt="Electronics &amp; Communication Engineering"
                      class="engineering-image"
                      loading="lazy"
                    />
                    <div class="engineering-divider"></div>
                  </div>
                </div>
              </article>
            </div>
            <div class="engineering-column-right">
              <article class="engineering-card">
                <div class="engineering-card-content">
                  <h2 class="engineering-title-center">Civil Engineering</h2>
                  <div class="engineering-image-container-civil">
                    <img
                      src="./assets/RoboticArmIconBlack.svg"
                      alt="Civil Engineering"
                      class="engineering-image"
                      loading="lazy"
                    />
                    <div class="engineering-divider"></div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </section>
        <section class="browse-departments">
          <div class="browse-departments-title">Browse Departments</div>
          <div class="image-wrapper">
            <img
              src="./assets/farmingAgr.png"
              alt=""
              class="image"
              loading="lazy"
            />
          </div>
          <button class="view-all-button">
            <span class="view-all-text">View all</span>
            <img
              src="./assets/MediumHorizontalArrowIconWhite.svg"
              alt=""
              class="arrow-icon"
              loading="lazy"
            />
          </button>
        </section>
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
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/68cfd8f42bb364e485dc466c9ec5e9ec01445a4852a0515fb13e8406ca0c9722?apiKey=802e413bf2b44210ba8882de6dcee498&"
                            alt="Samira Reddy avatar"
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
                    <!-- <div class="testimonial-col">
                      <div class="testimonial-content">
                        <img
                          src="https://cdn.builder.io/api/v1/image/assets/TEMP/c940797eec308085257651f0d157b537a32de69f57334d363e979bf23a44fef2?apiKey=802e413bf2b44210ba8882de6dcee498&"
                          alt="Naveen Varma avatar"
                          class="testimonial-avatar"
                        />
                        <p class="testimonial-text">
                          Our daughter's college experience has been transformative.
                          She's not only gaining valuable knowledge but also
                          developing essential life skills. The supportive environment
                          and diverse opportunities have truly shaped her into a
                          confident and well-rounded individual
                          <br />
                        </p>
                        <div class="testimonial-author">
                          <div class="testimonial-name">Naveen Varma</div>
                          <div class="testimonial-class">Class of 2023</div>
                        </div>
                      </div>
                    </div>
                    <div class="testimonial-col">
                      <div class="testimonial-content">
                        <img
                          src="https://cdn.builder.io/api/v1/image/assets/TEMP/facc42810a31f7ffc1bf02a47568427de1abf05813fab2f8fc5ba68fe8daac9d?apiKey=802e413bf2b44210ba8882de6dcee498&"
                          alt="Sujay shekhar avatar"
                          class="testimonial-avatar"
                        />
                        <p class="testimonial-text">
                          My college years were the foundation of my success today.
                          The rigorous academic curriculum and mentorship from
                          dedicated faculty prepared me for a fulfilling career. The
                          lifelong friendships and professional network I built
                          continue to positively impact my life
                          <br />
                        </p>
                        <div class="testimonial-author">
                          <div class="testimonial-name">Sujay shekhar</div>
                          <div class="testimonial-class">Class of 2023</div>
                        </div>
                      </div>
                    </div> -->
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
                    src="./assets/DoubleQuoateIconMaroon.svg"
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
              <div class="panel-body">Answer</div>
            </div>
          </div>
        </div>
      </div>
      <!---->
      

      <!---->
    </div>
    <!-- Footer starts -->

    <!-- Footer ends -->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
