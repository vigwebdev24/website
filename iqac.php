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
</style>

<body>
  <?php
  include_once 'connect.php';
  include_once  'navbar.php';

  ?>

  <div class="container home-div1">


    <!-- hero section starts -->
    <?php
    $sqlquery17 = "SELECT * FROM  sections  where id='iqac_hero'";

    $result = mysqli_query($conn, $sqlquery17);
    $iqac = mysqli_fetch_assoc($result);


    $sqlquery20 = "SELECT * FROM  stats where id='newpar_nirf'";
    $res_papers = mysqli_query($conn, $sqlquery20);
    $nirf = mysqli_fetch_assoc($res_papers);

    $sqlquery21 = "SELECT * FROM  stats where id='iqac_naacrank'";
    $res_patents = mysqli_query($conn, $sqlquery21);
    $naacrank = mysqli_fetch_assoc($res_patents);


    ?>

    <div class="home-research">
      <div class="home-researchdiv">

        <div class="home-research_innrdiv">
          <div class="iqac-title">
            <?php echo $iqac['title']; ?>

          </div>
          <div class="home-researchdiv1">

            <div class="iqac-txt">
              <?php echo $iqac['descr']; ?>

            </div>
            <div class="text_btnnew" onclick="window.open('<?php echo $iqac['btn1_hlink']; ?>',  '_blank')">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  <?php echo $iqac['btn_nm1']; ?>
                </div>
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="home-reseachcountdiv">
          <div class="home-reseachcount_innrdiv">
            <div class="home-reseachcount">
              <?php echo $nirf['statvalue']; ?>

            </div>
            <div class="home-reseach_txt"> <?php echo $nirf['descr']; ?></div>
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
              <div class="home-reseach_circle_txt">DSIR
              </div>
              <div class="home-reseach_circle_title">CERTIFIED</div>
              <img src="assets/icons/iqac_award.svg" class="home-reseach_img" />
            </div>
          </div>
          <div class="home-reseach_square">
            <div class="home-reseach_square_innrdiv">
              <div class="home-reseach_square_content">
                <div class="home-reseach_square_txt">
                  <?php echo $naacrank['statvalue']; ?>
                  <!-- <small class="home-reseach_circle_small">+</small>-->
                </div>
                <div class="home-reseach_square_title">
                  <?php echo $naacrank['descr']; ?>

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
    <!-- hero section ends -->

    <!-- overview section starts -->
    <?php
    $sql = "SELECT * FROM  sections  where id='iqac_overview'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $overview = mysqli_fetch_assoc($result);

    ?>
      <section class="overview-section">
        <div class="overview-container">
          <article class="content-column">
            <div class="overview-main">
              <div class="overview-title"><?php echo $overview['title'] ?></div>
              <p class="overview-description">
                <?php echo $overview['descr'] ?>
              </p>
              <div class="quality-info">
                <div class="text_btnnew" data-toggle="modal" data-target="#iqacfunction-overlay">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $overview['btn_nm1'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
                <div class="text_btnnew" data-toggle="modal" data-target="#iqacexperts-overlay">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $overview['btn_nm2'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <aside class="profile-column">
            <section class="profile-section">
              <div class="profile-container">
                <img loading="lazy" src='<?php echo $overview['img1'] ?>' alt="Dr. M. Ramakrishna Profile Image" class="profile-img" />
                <div class="profile-details">
                  <div class="profile-name"><?php echo $overview['subsec1_title'] ?></div>
                  <div class="profile-role"><?php echo $overview['subsec1_desc'] ?></div>
                </div>
              </div>
            </section>
          </aside>
        </div>
      </section>
    <?php
    }
    ?>
    <!-- overview section ends -->

    <!-- Associate Dean's section starts -->
    <section class="associatedean">
      <div class="associatedean-title">
        Associate Dean's
      </div>
      <div class="associatedean-container">
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/srinivasadesikan.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. Srinivasadesikan. V</div>
            <div class="spes">Associate Dean, IQAC</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/jyothi.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. Y. Jyothi</div>
            <div class="spes">Associate Dean, IQAC</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/tejavath.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. Shilpa Tejavath</div>
            <div class="spes">Associate Dean, IQAC</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/suryati.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. Khamsah Suryati Mohd</div>
            <div class="spes">Associate Dean, IQAC</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/nagendra.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Dr. T. Nagendrakumar</div>
            <div class="spes">Associate Dean, IQAC</div>
          </div>
        </div>
        <div class="assdean-box">
          <img class="assdean-img" src="assets/images/ravikanth.webp" alt="" height="392">
          <div class="assdean-txt">
            <div class="name-txt">Mr. D. Ravikanth</div>
            <div class="spes">Associate Dean, IQAC</div>
          </div>
        </div>

      </div>
    </section>
    <!-- Associate Dean's section ends -->

    <!-- Rankings section starts -->

    <?php
    $sql = "SELECT * FROM  cards  where id like 'iqac_ranking_card%'  order by sequence limit 4";

    $sqlcount = "SELECT count(*) as total FROM  cards  where id like 'iqac_ranking_card%'";
    $resultcount = mysqli_query($conn, $sqlcount);
    $total = mysqli_fetch_assoc($resultcount);

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="ranking-section-0">
        <div class="ranking-sec-title">
          <div class="title-txt">Rankings</div>
          <div class="viewbtn">
            <div class="text_btnnew" onclick="window.open('ranking.php')">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  View All (<?php echo $total['total'] ?>)
                </div>
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ranking-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="ranking-content-box">
              <div class="rankno"><?php echo $row['title'] ?></div>
              <div class="ranktitle"><?php echo $row['subtitle'] ?></div>
              <div class="rankdesc"><?php echo $row['descr'] ?></div>
              <div>
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
            $sql1 = "SELECT * FROM  cards  where cardtype='rank' and id like 'iqachead_%' and sequence = ". $row['sequence'];
            $result1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            ?>
            <div class="modal fade" id="<?php echo $row['Id'] . '-overlay' ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="overlay-dialog od" role="document">
                <div class="filter-modal_content fcontent">
                  <div class="modal-header overlaymodal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <img src="assets/icons/cross_big.png">
                      <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                    <div class="steps-head">
                      <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row1['title'] ?></h4>
                    </div>
                  </div>
                  <div class="modal-body overlaymodal-body mbcontent-mob">
                    <div class="content">
                      <div class="p">
                        <?php
                        echo $row1['descr'] . "<br><br>";

                        $sql2 = "SELECT * FROM  cards  where id not like 'iqac_ranking_card%' and id not like 'iqachead_%' and  cardtype='rank' and sequence = ". $row['sequence']." order by date desc";

                        $result2 = mysqli_query($conn, $sql2);
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?>

                          <div class="text_btnnew" onclick="window.open('<?php echo $row2['btn_hlink']; ?>',  '_blank')">
                            <div class="text_btnnew_innrdiv">
                              <div class="text_btnnew_txt">
                                <?php echo $row2['btn_nm'] ?>
                              </div>
                              <div>
                                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                              </div>
                            </div>
                          </div>
                          <br><br>
                        <?php
                        }
                        ?>
                      </div>
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
    <!-- Rankings section ends -->

    <!-- Accreditation section starts -->
    <?php
    $sql = "SELECT * FROM  cards  where id like 'iqac_accreditation_card%'  order by sequence";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="accreditation-section">
        <div class="ranking-sec-title">
          <div class="title-txt">Accreditation</div>
        </div>
        <div class="ranking-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="ranking-content-box">
              <div class="ranktitle"><?php echo $row['title'] ?></div>
              <div class="rankdesc"><?php echo $row['descr'] ?></div>
              <div>
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
            $sql1 = "SELECT * FROM  cards  where cardtype='accreditation' and id like 'iqachead_%' and sequence = ". $row['sequence'];
            $result1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            ?>
            <div class="modal fade" id="<?php echo $row['Id'] . '-overlay' ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="overlay-dialog od" role="document">
                <div class="filter-modal_content">
                  <div class="modal-header overlaymodal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <img src="assets/icons/cross_big.png">
                      <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                    <div class="steps-head">
                      <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row1['title'] ?></h4>
                    </div>
                  </div>
                  <div class="modal-body overlaymodal-body mbcontent-mob">
                    <div class="content">
                      <div class="p">
                        <?php
                        echo $row1['descr'] . "<br><br>";

                        $sql2 = "SELECT * FROM  cards  where id not like 'iqac_accreditation_card%' and id not like 'iqachead_%' and  cardtype='accreditation' and sequence = ". $row['sequence']." order by date desc";

                        $result2 = mysqli_query($conn, $sql2);
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?>

                          <div class="text_btnnew" onclick="window.open('<?php echo $row2['btn_hlink']; ?>',  '_blank')">
                            <div class="text_btnnew_innrdiv">
                              <div class="text_btnnew_txt">
                                <?php echo $row2['btn_nm'] ?>
                              </div>
                              <div>
                                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                              </div>
                            </div>
                          </div>
                          <br><br>
                        <?php
                        }
                        ?>
                      </div>
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
    <!-- Accreditation section ends -->
    <!-- certifications section starts -->
    <?php
    $sql = "SELECT * FROM  cards  where id like 'iqac_certifications_card%'  order by sequence";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="certifications-section">
        <div class="ranking-sec-title">
          <div class="title-txt">Certifications</div>
        </div>
        <div class="ranking-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="ranking-content-box">
              <div class="ranktitle"><?php echo $row['title'] ?></div>
              <div class="rankdesc"><?php echo $row['descr'] ?></div>
              <div>
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
            $sql1 = "SELECT * FROM  cards  where cardtype='certifications' and id like 'iqachead_%' and sequence = ". $row['sequence'];
            $result1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            ?>
            <div class="modal fade" id="<?php echo $row['Id'] . '-overlay' ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="overlay-dialog od" role="document">
                <div class="filter-modal_content">
                  <div class="modal-header overlaymodal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <img src="assets/icons/cross_big.png">
                      <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                    <div class="steps-head">
                      <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row1['title'] ?></h4>
                    </div>
                  </div>
                  <div class="modal-body overlaymodal-body mbcontent-mob">
                    <div class="content">
                      <div class="p">
                        <?php
                        echo $row1['descr'] . "<br><br>";

                        $sql2 = "SELECT * FROM  cards  where id not like 'iqac_certifications_card%' and id not like 'iqachead_%' and  cardtype='certifications' and sequence = ". $row['sequence']." order by date desc";

                        $result2 = mysqli_query($conn, $sql2);
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?>

                          <div class="text_btnnew" onclick="window.open('<?php echo $row2['btn_hlink']; ?>',  '_blank')">
                            <div class="text_btnnew_innrdiv">
                              <div class="text_btnnew_txt">
                                <?php echo $row2['btn_nm'] ?>
                              </div>
                              <div>
                                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                              </div>
                            </div>
                          </div>
                          <br><br>
                        <?php
                        }
                        ?>
                      </div>
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
    <!-- certifications section ends -->


    <!-- Statutory Approvals section starts -->
    <?php
    $sql = "SELECT * FROM  cards  where id like 'iqac_statutory_card%'  order by sequence";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="statutory-section">
        <div class="ranking-sec-title">
          <div class="title-txt">Statutory Approvals</div>
        </div>
        <div class="ranking-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="ranking-content-box">
              <div class="ranktitle"><?php echo $row['title'] ?></div>
              <div class="rankdesc"><?php echo $row['descr'] ?></div>
              <div>
                <div class="text_btnnew" data-toggle="modal" data-target="#iqac_statutory_card-overlay">
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
    <!-- Statutory Approvals section ends -->

    <!-- AAA section starts -->
    <?php
    $sql = "SELECT * FROM  cards  where id like 'iqac_aaa_card%'  order by sequence";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="aaa-section">
        <div class="aaa-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="aaa-content-box">
              <div class="aaatitle"><?php echo $row['title'] ?></div>
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
    <!-- AAA section ends -->


    <!-- Best Practices section starts -->
    <?php
    $sql = "SELECT * FROM  cards  where id like 'iqac_best_practices_card%'  order by sequence";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="best-practices-section">
        <div class="ranking-sec-title">
          <div class="title-txt">Best Practices</div>
        </div>
        <div class="best-practices-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="ranking-content-box">
              <div class="ranktitle"><?php echo $row['title'] ?></div>
              <div class="rankdesc"><?php echo $row['descr'] ?></div>
              <div>
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
    <!-- Best Practices section ends -->


    <!-- section starts -->
    <?php
    $sql = "SELECT * FROM  cards  where id like 'iqac_policieshandbook%'  order by sequence";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="aaa-section">
        <div class="aaa-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row['Id'] == "iqac_policieshandbook_card1") {
          ?>
              <div class="aaa-content-box">
                <div class="aaatitle"><?php echo $row['title'] ?></div>
                <div class="aaadesc"><?php echo $row['descr'] ?></div>
                <div class="aaabtn">
                  <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
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
            } else {
            ?>
              <div class="aaa-content-box">
                <div class="aaatitle"><?php echo $row['title'] ?></div>
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
          <?php
          }
          ?>
        </div>
      </div>

    <?php
    }
    ?>
    <!-- section ends -->

    <!-- IQAC Collaborations section starts -->

    <?php
    $sql = "SELECT * FROM  cards  where id like 'iqac_collaborations_card%'  order by sequence limit 3";

    $sqlcount = "SELECT count(*) as total FROM  cards  where id like 'iqac_collaborations_card%'";
    $resultcount = mysqli_query($conn, $sqlcount);
    $total = mysqli_fetch_assoc($resultcount);

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="iqac-collaborations-section">
        <div class="ranking-sec-title">
          <div class="title-txt">IQAC Collaborations</div>
          <div class="viewbtn">
            <div class="text_btnnew" onclick="window.open('collaborations.php')">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  View All (<?php echo $total['total'] ?>)
                </div>
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="iqac-collaborations-content-container">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="assdean-box">
              <img class="collab-img" src='<?php echo $row['img'] ?>' alt="">
              <div class="collab-txt-container" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                <div class="collab-txt"><?php echo $row['btn_nm'] ?></div>
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
    <!-- IQAC Collaborations section ends -->


    <!-- Ranking summary section starts -->

    <div class="ranking-summary-section">
      <div class="year-container">
        <div class="years">
          <?php
          $sql = "SELECT distinct(date) as year FROM ranks  order by date desc";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="years-txt<?php if($row['year']==2023) echo ' activeyear'; ?>"><a href="#<?php echo $row['year']; ?>"><?php echo $row['year']; ?></a></div>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="ranking-summary">
        <?php
        $sql = "SELECT distinct(date) as year FROM ranks order by date desc";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="ranking-summary-year" id='<?php echo $row['year']; ?>' >
            <?php echo $row['year']; ?>
          </div>
          <?php
          $sql1 = "SELECT * FROM ranks where date = " . $row['year'];
          $result1 = mysqli_query($conn, $sql1);
          while ($row1 = mysqli_fetch_assoc($result1)) {
          ?>
            <div class="ranking-summary-txt-container">
              <div class="ranking-summary-subtitle"><?php echo $row1['rank_nm']; ?></div>
              <div class="ranking-summary-title"><?php echo $row1['descr']; ?></div>
              <div class="ranking-summary-btn"  onclick="window.open('<?php echo $row1['hlink']; ?>',  '_blank')"><?php echo $row1['btn_nm']; ?></div>
            </div>
          <?php
          }
          ?>
          <div class="hline"></div>
        <?php
        }
        ?>
      </div>
    </div>


    <!-- Ranking summary section ends -->






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





  <!-- iqac function overlay starts -->
  <div class="modal fade" id="iqacfunction-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">IQAC Functions</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body mbcontent-mob">
          <div class="content p">
            Development and application of quality benchmarks/ parameters for various academic and administrative activities of the institution
            <br><br>
            Facilitating the creation of a learner-centric environment conducive to quality education and faculty maturation to adopt the required knowledge and technology for participatory teaching and learning process
            <br><br>
            Arrangement for feedback response from students, parents and other stakeholders on quality-related institutional processes
            <br><br>
            Dissemination of information on various quality parameters of higher education
            <br><br>
            Organisation of inter and intra institutional workshops, seminars on quality related themes and promotion of quality circles
            <br><br>
            Documentation of the various programmes/activities leading to quality improvement
            <br><br>
            Acting as a nodal agency of the Institution for coordinating quality-related activities, including adoption and dissemination of best practices
            <br><br>
            Development and maintenance of institutional database through MIS for the purpose of maintaining/enhancing the institutional quality
            <br><br>
            Development of Quality Culture in the institution
            <br><br>
            Preparation of the Annual Quality Assurance Report (AQAR) as per guidelines and parameters of NAAC, to be submitted to NAAC
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac function Overlay ends -->

  <!-- iqac experts overlay starts -->
  <div class="modal fade" id="iqacexperts-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Experts on Quality Management</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="padd">
              <h3>Dr. M. Subrahmanyam</h3>
              <p>Former VC, GITAM University and Former Registrar, Andhra University</p>
            </div>
            <div class="padd">
              <h3>Dr. E. Chakravarthy</h3>
              <p>Member, Executive Council Head, TCS, Bangalore</p>
            </div>
            <div class="padd">
              <h3>Permanent Invitee</h3>
              <p>All Deans</p>
            </div>
            <h2>Other Members </h2>
            <div class="padd">
              <h3>Mr. Amitabh Soni</h3>
              <p>Applied Engineering</p>
            </div>
            <div class="padd">
              <h3>Dr. S. Balakrishna</h3>
              <p>Applied Engineering</p>
            </div>
            <div class="padd">
              <h3>Science and Engineering</h3>
              <p>Applied Engineering</p>
            </div>
            <div class="padd">
              <h3>Dr. K. Sudheer Kumar </h3>
              <p>Applied Engineering</p>
            </div>
            <div class="padd">
              <h3>Mr. Sanjeeth Kumar</h3>
              <p>Applied Engineering</p>
            </div>
            <div class="padd">
              <h3>Dr. V. Dinesh Rahul</h3>
              <p>Applied Engineering</p>
            </div>
            <div class="padd">
              <h3>Dr. P. Bharath Singh</h3>
              <p>Applied Engineering</p>
            </div>
            <div class="padd">
              <h3>Mr. Y. Ramamohan</h3>
              <p>Applied Engineering</p>
            </div>
            <h2>Other Staff </h2>
            <div class="padd">
              <h3>Ms. R. Amani</h3>
              <p>Jr. Assistant</p>
            </div>
            <div class="padd">
              <h3>Mr. B. Ashok Kumar</h3>
              <p>Office Assistant</p>
            </div>

            <p>Development and application of quality benchmarks/parameters for various academic and administrative activities of the institution
              <br><br>
              Facilitating the creation of a learner-centric environment conducive to quality education and faculty maturation to adopt the required knowledge and technology for participatory teaching and learning process
              <br><br>
              Arrangement for feedback response from students, parents and other stakeholders on quality-related institutional processes
              <br><br>
              Dissemination of information on various quality parameters of higher education
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac experts Overlay ends -->



  <!-- iqac_statutory_card1 overlay starts -->
  <div class="modal fade" id="iqac_statutory_card-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Statutory Approvals</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="statutory">
              <?php
              $sql = "SELECT * FROM  cards  where id='iqachead_statutoryaicte'";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              ?>
              <div class="statutory_img">
                <img src="<?php echo $row['img'] ?>" alt="logo" class="statutoryimg">
              </div>
              <div class="statutory-content">
                <div class="statutory-title">
                  <?php echo $row['title'] ?>
                </div>
                <div class="statutory-descr">
                  <?php echo $row['descr'] ?>
                </div>
                <?php
                $sql = "SELECT * FROM  cards  where id like 'iqac_statutory_aicte%' order by date desc";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <div class="statutory-subtitle">
                    <?php echo $row['subtitle'] ?>
                  </div>
                  <div class="statutory-caption">
                    <?php echo $row['caption'] ?>
                  </div>
                  <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        <?php echo $row['btn_nm'] ?>
                      </div>
                      <div>
                        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="statutory">
              <?php
              $sql = "SELECT * FROM  cards  where id='iqachead_statutorypci'";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              ?>
              <div class="statutory_img">
                <img src="<?php echo $row['img'] ?>" alt="logo" class="statutoryimg">
              </div>
              <div class="statutory-content">
                <div class="statutory-title">
                  <?php echo $row['title'] ?>
                </div>
                <div class="statutory-descr">
                  <?php echo $row['descr'] ?>
                </div>
                <?php
                $sql = "SELECT * FROM  cards  where id like 'iqac_statutory_pci%' order by date desc";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <div class="statutory-subtitle">
                    <?php echo $row['subtitle'] ?>
                  </div>
                  <div class="statutory-caption">
                    <?php echo $row['caption'] ?>
                  </div>
                  <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        <?php echo $row['btn_nm'] ?>
                      </div>
                      <div>
                        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="statutory">
              <?php
              $sql = "SELECT * FROM  cards  where id='iqachead_statutorybci'";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              ?>
              <div class="statutory_img">
                <img src="<?php echo $row['img'] ?>" alt="logo" class="statutoryimg">
              </div>
              <div class="statutory-content">
                <div class="statutory-title">
                  <?php echo $row['title'] ?>
                </div>
                <div class="statutory-descr">
                  <?php echo $row['descr'] ?>
                </div>
                <?php
                $sql = "SELECT * FROM  cards  where id like 'iqac_statutory_bci%' order by date desc";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <div class="statutory-subtitle">
                    <?php echo $row['subtitle'] ?>
                  </div>
                  <div class="statutory-caption">
                    <?php echo $row['caption'] ?>
                  </div>
                  <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        <?php echo $row['btn_nm'] ?>
                      </div>
                      <div>
                        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="statutory">
              <?php
              $sql = "SELECT * FROM  cards  where id='iqachead_statutoryugc'";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              ?>
              <div class="statutory_img">
                <img src="<?php echo $row['img'] ?>" alt="logo" class="statutoryimg">
              </div>
              <div class="statutory-content">
                <div class="statutory-title">
                  <?php echo $row['title'] ?>
                </div>
                <div class="statutory-descr">
                  <?php echo $row['descr'] ?>
                </div>
                <br>
                <?php
                $sql = "SELECT * FROM  cards  where id like 'iqac_statutory_ugc%' order by date desc";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                  <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        <?php echo $row['btn_nm'] ?>
                      </div>
                      <div>
                        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                      </div>
                    </div>
                  </div>
                  <br><br>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_statutory_card1 overlay ends -->


  <!-- iqac_aaa_card1 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='iqachead_aaa'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="iqac_aaa_card1-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body mbcontent-mob">
          <div class="content1">
            <div class="p">
              <?php
              echo $row['descr'] . "<br><br>";

              $sql = "SELECT * FROM  cards  where id like 'iqac_aaa_%' order by date desc";

              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>

                <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
                <br><br>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_aaa_card1 overlay ends -->
  <!-- iqac_aaa_card2 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='iqachead_iqac_initiatives'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="iqac_aaa_card2-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body mbcontent-mob">
          <div class="content1">
            <div class="p">
              <?php
              echo $row['descr'] . "<br><br>";

              $sql = "SELECT * FROM  cards  where id like 'iqac_initiatives%' order by date desc";

              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>

                <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
                <br><br>
              <?php
              }
              ?>
              <h3>General Initiatives</h3>
              <ul>
                <li>Feedback Collected & Analysed</li>
                <li>Review and Monitoring of Value-Added Courses (VAC)</li>
                <li>Verification of Course Materials</li>
                <li>E-Content Verification</li>
                <li>Implementation of Double and Digital Evaluation System</li>
                <li>Auditing of Content in VU MOODLE</li>
                <li>Student Satisfaction Survey</li>
                <li>Faculty Progress Tracking System</li>
                <li>Implementation of Research Clusters</li>
                <li>Screening Mechanism for Seed Grant Proposals</li>
                <li>Benchmarking for Quality Publications</li>
                <li>Promoting Utilization of research facilities</li>
                <li>Implementation and monitoring of Strategic plan</li>
                <li>Academic Audit</li>
                <li>Effective utilization of waste</li>
                <li>Student Progression Monitoring System</li>
                <li>Review &Monitoring the functioning of Institutional Committees</li>
              </ul>
              <h3>Audits</h3>
              <ul>
                <li>Academic Audit</li>
                <li>Academic and Administrative Audit (AAA)</li>
                <li>Energy Audit</li>
                <li>Green & Environment Audit</li>
              </ul>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_aaa_card2 overlay ends -->
  <!-- iqac_aaa_card3 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='iqachead_minutes_of_meeting'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="iqac_aaa_card3-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              <?php
              echo $row['descr'] . "<br>";

              $sql = "SELECT * FROM  cards  where id like 'iqac_minutes_of_meeting_%' order by date desc";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <div class="statutory-subtitle">
                  <?php echo $row['subtitle'] ?>
                </div>
                <div class="statutory-caption">
                  <?php echo $row['caption'] ?>
                </div>
                <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_aaa_card3 overlay ends -->


  <!-- iqac_best_practices_card1 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='iqachead_bookletonhealth'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="iqac_best_practices_card1-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              <?php
              echo $row['descr'] . "<br><br>";

              $sql = "SELECT * FROM  cards  where id like 'iqac_bookletonhealth%' order by date desc";

              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>

                <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
                <br><br>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_best_practices_card1 overlay ends -->
  <!-- iqac_best_practices_card2 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='iqachead_physicalfitness'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="iqac_best_practices_card2-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              <?php
              echo $row['descr'] . "<br>";

              $sql = "SELECT * FROM  cards  where id like 'iqac_physicalfitness_%' order by date desc";

              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <div class="statutory-subtitle">
                  <?php echo $row['subtitle'] ?>
                </div>
                <div class="statutory-caption">
                  <?php echo $row['caption'] ?>
                </div>
                <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
                <br>
              <?php
              }
              ?>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_best_practices_card2 overlay ends -->
  <!-- iqac_best_practices_card3 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='iqachead_facultydevelopment'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="iqac_best_practices_card3-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              <?php
              echo $row['descr'] . "<br>";

              $sql = "SELECT * FROM  cards  where id like 'iqac_facultydevelopment%' order by date desc";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <div class="statutory-subtitle">
                  <?php echo $row['subtitle'] ?>
                </div>
                <div class="statutory-caption">
                  <?php echo $row['caption'] ?>
                </div>
                <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_best_practices_card3 overlay ends -->


  <!-- iqac_policieshandbook_card1 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='iqachead_bookletonhealth'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="iqac_policieshandbook_card1-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              <?php
              echo $row['descr'] . "<br><br>";

              $sql = "SELECT * FROM  cards  where id like 'iqac_bookletonhealth%' order by date desc";

              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>

                <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
                <br><br>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_policieshandbook_card1 overlay ends -->
  <!-- iqac_policieshandbook_card2 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='iqachead_stakeholderfeedback'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="iqac_policieshandbook_card2-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              <?php
              echo $row['descr'] . "<br><br>";

              $sql = "SELECT * FROM  cards  where id like 'iqac_stakeholderfeedback%' order by date desc";

              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>

                <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
                <br><br>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_policieshandbook_card2 overlay ends -->
  <!-- iqac_policieshandbook_card3 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='iqachead_institutionaldistinctiveness'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="iqac_policieshandbook_card3-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body">
          <div class="content1">
            <div class="p">
              <?php
              echo $row['descr'] . "<br><br>";

              $sql = "SELECT * FROM  cards  where id like 'iqac_institutionaldistinctiveness_%' order by date desc";

              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['btn_nm'] ?>
                    </div>
                    <div>
                      <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
                <br>
              <?php
              }
              ?>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- iqac_policieshandbook_card3 overlay ends -->


  




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