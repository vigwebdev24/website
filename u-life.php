<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, 
maximum-scale=1.0, user-scalable=no" />
  <title>Vignan University</title>

  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="./css/mobile.css">
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/iqac.css">
  <link rel="stylesheet" href="./css/font.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="css/u-life.css">
  <link rel="stylesheet" href="css/mblfooter.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
  <style>
    body {
      background-color: #F2F1ED !important;
    }

    .menu-large {
      position: static !important;
    }
  </style>
</head>

<body>



  <?php include_once 'connect.php';
  include_once  'navbar.php'; ?>
  <div class="container home-div1">


    <!-- Hero section start here -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='ulife_hero'";
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


    <!-- Experience the Ambience section start here -->
    <?php
    $sql = "SELECT * FROM sections WHERE id='ulife_experience'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>

      <div class="ulife-div-25">
        <div class="ulife-div-26">
          <div class="ulife-column-3">
            <div class="ulife-div-27">
              <div class="ulife-div-28"><?php echo $row['title']; ?></div>
              <div class="ulife-div-29">
                <img loading="lazy" src=<?php echo $row['img1']; ?> class="ulife-img-6" />
                <div class="ulife-div-30">
                  <div class="ulife-div-31">
                    <div class="ulife-div-32"><?php echo $row['btn_nm1']; ?>
                      <div class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                        <img src="assets/icons/arrow_outward_white.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ulife-div-34">
                <?php echo $row['descr']; ?>
              </div>
            </div>
          </div>
          <div class="ulife-column-4">
            <div class="ulife-div-35">
              <div class="ulife-div-36">
                <img loading="lazy" src=<?php echo $row['img2']; ?> class="ulife-img-8" />
                <div class="ulife-div-37">
                  <div class="ulife-div-38">
                    <div class="ulife-div-39"><?php echo $row['btn_nm2']; ?>
                      <div class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                        <img src="assets/icons/arrow_outward_white.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ulife-div-41">
                <div class="ulife-div-42">
                  <div class="ulife-column-5">
                    <div class="ulife-div-43">
                      <img loading="lazy" src=<?php echo $row['img3']; ?> class="ulife-img-10" />
                      <div class="ulife-div-44">
                        <div class="ulife-div-45">
                          <div class="ulife-div-46"><?php echo $row['btn_nm3']; ?>
                            <div class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                              <img src="assets/icons/arrow_outward_white.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ulife-column-6">
                    <button class="cta_button_primary Ss-btn_txt ulife-div-48 width100 explore" onclick="ambience()">
                      <div>Veiw All </div> <img src="./assets/svgicons/arrow_right_white.svg" />
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php
    }
    ?>
    <!-- Experience the Ambience section ends here -->


    <!-- Student Council starts here -->
    <?php
    $sql = "Select * FROM cards where id like 'ulife_sc_card%'";
    $sc = mysqli_query($conn, $sql);
    if (mysqli_num_rows($sc) > 0) {
    ?>
      <div class="ulife-div-50">Student Council</div>
      <div class="ulife-div-51">
        <div class="ulife-div-52">
          <?php
          while ($row = mysqli_fetch_assoc($sc)) {
          ?>
            <div class="ulife-column-7">
              <div class="ulife-div-53">
                <div class="ulife-div-54"><?php echo $row['title']; ?></div>
                <div class="ulife-div-55">
                  <?php echo $row['descr']; ?>
                </div>
                <div class="ulife-div-56" data-toggle="modal" data-target="<?php echo '#' . $row['Id'] . '-overlay' ?>" style="cursor:pointer;">
                  <div class="text_btnnew viewall-right">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        <?php echo $row['btn_nm']; ?>
                      </div>
                      <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
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
    <!-- Student Council ends here -->

    <!-- Sports Amenities starts here -->
    <?php
    $sql = "Select * FROM sections where id='ulife_sport'";
    $sa = mysqli_query($conn, $sql);
    if (mysqli_num_rows($sa) > 0) {
      $row = mysqli_fetch_assoc($sa);
    ?>
      <div class="ulife-div-77">
        <div class="ulife-div-78">
          <div class="ulife-column-11">
            <div class="ulife-div-79">
              <div class="ulife-div-80"> <?php echo $row['title'] ?></div>
              <div class="ulife-div-97-mob">
                <div class="ulife-div-98-mob">
                  <?php echo $row['descr'] ?>
                </div>
              </div>

              <div class="ulife-div-81">
                <img loading="lazy" src=<?php echo $row['img1']; ?> class="ulife-img-17" />
                <div class="ulife-div-82">
                  <div class="ulife-div-83">
                    <div class="ulife-div-84"><?php echo $row['btn_nm1']; ?> &nbsp;
                      <div class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                        <img src="assets/icons/arrow_outward_white.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ulife-column-12">
            <div class="ulife-div-86">
              <img loading="lazy" src=<?php echo $row['img2']; ?> class="ulife-img-19" />
              <div class="ulife-div-87">
                <div class="ulife-div-88">
                  <div class="ulife-div-89"><?php echo $row['btn_nm2']; ?> &nbsp;
                    <div class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
                      <img src="assets/icons/arrow_outward_white.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ulife-column-13">
            <div class="ulife-div-91">
              <div class="ulife-div-92">
                <img loading="lazy" src=<?php echo $row['img3']; ?> class="ulife-img-21" />
                <div class="ulife-div-93">
                  <div class="ulife-div-94">
                    <div class="ulife-div-95"><?php echo $row['btn_nm3']; ?> &nbsp;
                      <div class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                        <img src="assets/icons/arrow_outward_white.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ulife-div-97">
                <div class="ulife-div-98">
                  <?php echo $row['descr'] ?>
                </div>
                <div class="ulife-div-99">
                  <button class="cta_button_primary Ss-btn_txt" onclick="sports()">
                    <div>Explore All Amenities</div> <img src="./assets/svgicons/arrow_right_white.svg" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="ulife-column-14">
            <div class="ulife-div-101">
              <img loading="lazy" src=<?php echo $row['img4']; ?> class="ulife-img-24" />
              <div class="ulife-div-102">
                <div class="ulife-div-103">
                  <div class="ulife-div-104"><?php echo $row['btn_nm4']; ?>
                    <div class="smallcta_btn_primary" onclick="window.open('<?php echo $row['btn4_hlink']; ?>',  '_blank')">
                      <img src="./assets/svgicons/arrow_outward.svg" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ulife-div-99-mob">
            <button class="cta_button_primary Ss-btn_txt explore width100" onclick="sports()">
              <div>Explore All Amenities</div> <img src="./assets/svgicons/arrow_right_white.svg" />
            </button>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Sports Amenities ends here -->

    <!-- Art & Culture Amenities starts here -->
    <?php
    $sql = "Select * FROM sections where id='ulife_artculture'";
    $aca = mysqli_query($conn, $sql);
    if (mysqli_num_rows($aca) > 0) {
      $row = mysqli_fetch_assoc($aca);
    ?>
      <div class="home-facilities divmargin-top10 divmargin-bottom">
        <div class="home-goodfood_innrdiv">
          <div class="home_goalstitle"><?php echo $row['title']; ?></div>
          <div><img style="width:100%;" src=" <?php echo $row['img1']; ?>" /></div>
          <div class="home-goodfood_txt" style="font-size:16px;">
            <?php echo $row['descr']; ?>
          </div>
        </div>
        <div><img style="width:100%;" src="<?php echo $row['img2']; ?>" /></div>
        <div class="home-goodfood_div2 btnnone elementnone-mbl">
          <div><img class="home-goodfood_img3" src="<?php echo $row['img3']; ?>" /></div>
          <button class="cta_button_primary Ss-btn_txt width100 explore" onclick="sports()">
            <div><?php echo $row['btn_nm1']; ?></div> <img src="./assets/svgicons/arrow_right_white.svg" />
          </button>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Art & Culture Amenities ends here -->

    <!-- Major Event starts here -->
    <div class="ulife-div-117">Major Events</div>
    <div class="ulife-div-118">
      <div class="ulife-div-119">
        <?php
        $sql = "Select * FROM events where id='ulife_event1'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
        ?>
          <div class="ulife-column-18">
            <div class="ulife-div-120">
              <img loading="lazy" src=<?php echo $row['img1']; ?> class="ulife-img-30" />
              <div class="ulife-div-121">
                <div class="ulife-div-122"><?php echo $row['title']; ?></div>
                <div class="ulife-div-123"><?php
                                            echo date("d", strtotime($row['date'])), " ", strtoupper(substr(date("F", strtotime($row['date'])), 0, 3)), " ", substr($row['date'], 0, 4);
                                            ?></div>
              </div>
            </div>
          </div>
        <?php
        }
        $sql = "Select * FROM events where id='ulife_event2'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
        ?>
          <div class="ulife-column-19">
            <div class="ulife-div-124">
              <img loading="lazy" src=<?php echo $row['img1']; ?> class="ulife-img-31" />
              <div class="ulife-div-125">
                <div class="ulife-div-126"><?php echo $row['title']; ?></div>
                <div class="ulife-div-127"><?php
                                            echo date("d", strtotime($row['date'])), " ", strtoupper(substr(date("F", strtotime($row['date'])), 0, 3)), " ", substr($row['date'], 0, 4);
                                            ?></div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="ulife-div-128">
      <div class="ulife-div-129">
        <?php
        $sql = "Select * FROM events where id='ulife_event3'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
        ?>
          <div class="ulife-column-20">
            <div class="ulife-div-130">
              <img loading="lazy" src=<?php echo $row['img1']; ?> class="ulife-img-32" />
              <div class="ulife-div-131">
                <div class="ulife-div-132"><?php echo $row['title']; ?></div>
                <div class="ulife-div-133"><?php
                                            echo date("d", strtotime($row['date'])), " ", strtoupper(substr(date("F", strtotime($row['date'])), 0, 3)), " ", substr($row['date'], 0, 4);
                                            ?></div>
              </div>
            </div>
          </div>
        <?php
        }
        $sql = "Select * FROM events where id='ulife_event4'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
        ?>
          <div class="ulife-column-21">
            <div class="ulife-div-134">
              <img loading="lazy" src=<?php echo $row['img1']; ?> class="ulife-img-33" />
              <div class="ulife-div-135">
                <div class="ulife-div-136"><?php echo $row['title']; ?></div>
                <div class="ulife-div-137"><?php
                                            echo date("d", strtotime($row['date'])), " ", strtoupper(substr(date("F", strtotime($row['date'])), 0, 3)), " ", substr($row['date'], 0, 4);
                                            ?></div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
    <!-- Major Event ends here -->

    <!-- Facilities starts here -->
    <div class="ulife-div-138">Facilities</div>
    <div class="ulife-div-139">
      <div class="ulife-div-140">
        <div class="ulife-column-22">
          <div class="ulife-div-141">
            <img loading="lazy" src="./assets/images/ulife_facility.webp" class="ulife-img-34" />
          </div>
        </div>
        <div class="ulife-column-23">
          <div class="ulife-div-142">
            <div class="ulife-div-143">
              <div class="ulife-div-144">
                <div class="ulife-column-24" onclick="facilities()" style="cursor:pointer;">
                  <div class="ulife-div-145">
                    <div class="ulife-div-146">Canteen and Shopping Facility</div>
                    <div class="ulife-div-147">

                      <img loading="lazy" src="./assets/svgicons/ulife_canteen.svg" class="ulife-img-35" />
                      <div class="ulife-div-148"></div>
                    </div>
                  </div>
                </div>
                <div class="ulife-column-25" onclick="facilities()" style="cursor:pointer;">
                  <div class="ulife-div-149">
                    <div class="ulife-div-150">Medical Facility</div>
                    <div class="ulife-div-151">
                      <img loading="lazy" src="./assets/svgicons/ulife_medical.svg" class="ulife-img-36" />
                      <div class="ulife-div-152"></div>
                    </div>
                  </div>
                </div>
                <div class="ulife-column-26" onclick="facilities()" style="cursor:pointer;">
                  <div class="ulife-div-153">
                    <div class="ulife-div-154">Hostel Facility</div>
                    <div class="ulife-div-155">
                      <img loading="lazy" src="./assets/svgicons/ulife_hostel.svg" class="ulife-img-37" />
                      <div class="ulife-div-156"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ulife-div-157" onclick="facilities()" style="cursor:pointer;">
              <div class="ulife-div-158">
                <div class="ulife-column-27">
                  <div class="ulife-div-159">
                    <div class="ulife-div-160">Security and safety</div>
                    <div class="ulife-div-161">
                      <img loading="lazy" src="./assets/svgicons/ulife_security.svg" class="ulife-img-38" />
                      <div class="ulife-div-162"></div>
                    </div>
                  </div>
                </div>
                <div class="ulife-column-28" onclick="facilities()" style="cursor:pointer;">
                  <div class="ulife-div-163">
                    <div class="ulife-div-164">Transport Facility</div>
                    <div class="ulife-div-165">
                      <img loading="lazy" src="./assets/svgicons/ulife_transport.svg" class="ulife-img-39" />
                      <div class="ulife-div-166"></div>
                    </div>
                  </div>
                </div>
                <div class="ulife-column-29" onclick="facilities()" style="cursor:pointer;">
                  <div class="ulife-div-167">
                    <div class="ulife-div-168">Banking facility</div>
                    <div class="ulife-div-169">
                      <img loading="lazy" src="./assets/svgicons/ulife_banking.svg" class="ulife-img-40" />
                      <div class="ulife-div-170"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facilities ends here -->

    <!-- library starts here -->
    <?php
    $sql = "Select * FROM sections where id='ulife_library'";
    ?>
    <div class="ulife-div-171">
      <div class="ulife-div-172">
        <?php
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
        ?>
          <div class="ulife-column-30">
            <div class="ulife-div-173">
              <div class="ulife-div-174"><?php echo $row['title']; ?></div>
              <div class="ulife-div-175">
                <?php echo $row['descr']; ?>
              </div>
            </div>
            <div class="ulife-div-192-mob">
              <img loading="lazy" src=<?php echo $row['img1'] ?> class="ulife-img-44" />
            </div>
          </div>
          <div class="ulife-column-31">
            <div class="ulife-div-176">
              <div class="ulife-div-177"><?php echo $row['subsec1_title']; ?></div>
              <div class="ulife-div-178">
                <?php echo $row['subsec1_desc']; ?>
              </div>
              <div class="ulife-div-179" onclick="window.open('<?php echo $row['subsec1_btn1_hlink']; ?>',  '_blank')" style="cursor:pointer;">
                <div class="text_btnnew">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['subsec1_btn1']; ?>
                    </div>
                    <div>
                      <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="ulife-div-182"><?php echo $row['subsec2_title']; ?></div>
              <div class="ulife-div-183">
                <?php echo $row['subsec2_desc']; ?>
              </div>
              <div class="ulife-div-184" onclick="window.open('<?php echo $row['subsec2_btn1_hlink']; ?>',  '_blank')" style="cursor:pointer;">
                <div class="text_btnnew">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['subsec2_btn1']; ?>
                    </div>
                    <div>
                      <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="ulife-div-187"><?php echo $row['subsec3_title']; ?></div>
              <div class="ulife-div-188">
                <?php echo $row['subsec3_desc']; ?>
              </div>
              <div class="ulife-div-189" onclick="window.open('<?php echo $row['subsec3_btn1_hlink']; ?>',  '_blank')" style="cursor:pointer;">
                <div class="text_btnnew">
                  <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt">
                      <?php echo $row['subsec3_btn1']; ?>
                    </div>
                    <div>
                      <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ulife-column-32">
            <div class="ulife-div-192">
              <img loading="lazy" src=<?php echo $row['img1'] ?> class="ulife-img-44" />
            </div>
          </div>
        <?php
        } ?>
      </div>
    </div>
    <!-- library ends here -->


    <!-- Emotional and Physiological Development starts here -->
    <?php
    $sqlquery15 = "SELECT * FROM  sections  where id='home_emotional'";

    $result = mysqli_query($conn, $sqlquery15);
    $emotional = $result->fetch_assoc();
    ?>


    <div class="home-emational_div">
      <div class="home-emational_div3_subdivtitle btnnone-mbl">
        <?php echo $emotional['title'] ?>

      </div>
      <div class="home-emational_div1">
        <div class="home-emational_subdv_txt1">
          <?php echo $emotional['descr']; ?>
        </div>
        <div class="home-emational_subdv2">
          <div class="home-emational_subdv2_title">
            <?php echo $emotional['subsec1_title']; ?>

          </div>
          <div class="home-emational_subdv2_txt">
            <?php echo $emotional['subsec1_desc']; ?>

          </div>
          <div>
            <button class="cta_button_primary Ss-btn_txt btnnone" onclick="window.open('<?php echo $emotional['btn1_hlink']; ?>',  '_blank')">
              <?php echo $emotional['btn_nm1'] ?>
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                  <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_2961_1144)">
                  <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED" />
                </g>
              </svg>
              <!-- <img src="assets/icons/Button_forwardarrow.png" class="btn_arrow" />-->
            </button>
          </div>

          <div class="btnnone-mbl">
            <button class="cta_button_primary Ss-btn_txt  explore" onclick="window.open('<?php echo $emotional['btn2_hlink']; ?>',  '_blank')">
              <?php echo $emotional['btn_nm2'] ?>
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                  <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_2961_1144)">
                  <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED" />
                </g>
              </svg>

              <!--<img src="assets/icons/Button_forwardarrow.png" class="explore-icon" />-->
            </button>
          </div>

        </div>

      </div>
      <div>
        <img class="home-emational_div2img" src="<?php echo  $emotional['img1']; ?>" />
      </div>
      <div class="home-emational_div3">
        <div class="home-emational_div3_subdiv">
          <div class="home-emational_div3_subdivtitle btnnone">
            <?php echo $emotional['title'] ?>

          </div>
          <div class="home-emational_div3_subdiv2">
            <div class="home-emational_div3_subdiv2_hdng">
              <?php echo $emotional['subsec2_title'] ?>

            </div>
            <div class="home-emational_div3_subdiv2_txt">
              <?php echo $emotional['subsec2_desc'] ?>
            </div>

            <div>
              <button class="cta_button_primary Ss-btn_txt btnnone" onclick="window.open('<?php echo $emotional['btn2_hlink']; ?>',  '_blank')">
                <?php echo $emotional['btn_nm2'] ?>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                    <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                  </mask>
                  <g mask="url(#mask0_2961_1144)">
                    <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED" />
                  </g>
                </svg>
                <!--   <img src="assets/icons/Button Icons.svg" class="btn_arrow" />-->
              </button>
            </div>


            <!--
                                        <div class="width100 btnnone-mbl">
            <button class="cta_button_primary Ss-btn_txt  explore" onclick="holistic()">Explore More
                <img src="assets/icons/Button Icons.svg" class="explore-icon" /></button>
        </div>-->
          </div>

        </div>
        <div>
          <img src="<?php echo  $emotional['img2']; ?>" class="home-emational_subdivimg2" />
        </div>

        <div class="btnnone-mbl">
          <button class="cta_button_primary Ss-btn_txt  explore" onclick="window.open('<?php echo $emotional['btn2_hlink']; ?>',  '_blank')">
            <?php echo $emotional['btn_nm2'] ?>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_2961_1144)">
                <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED" />
              </g>
            </svg>

            <!-- <img src="assets/icons/Button_forwardarrow.png" class="button-arrow" />-->
          </button>
        </div>
      </div>
    </div>
    <!-- Emotional and Physiological Development ends here -->

    <!-- Anti ragging starts here -->

    <?php
    $sql = "Select * FROM sections where id='ulife_antiragging'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    ?>
      <div class="ulife-div-209">
        <div class="ulife-div-210">
          <div class="ulife-column-36">
            <div class="ulife-div-211">
              <div class="ulife-div-212">
                <div class="ulife-column-37">
                  <div class="ulife-div-213">
                    <img loading="lazy" src=<?php echo $row['img1']; ?> class="ulife-img-50" />
                  </div>
                </div>
                <div class="ulife-column-38">
                  <div class="ulife-div-214">
                    <div class="ulife-div-215"><?php echo $row['title']; ?></div>
                    <div class="ulife-div-216">
                      <?php echo $row['descr']; ?>
                    </div>
                    <div class="ulife-div-217">
                      <button class="cta_button_primary Ss-btn_txt width100 explore" onclick="window.open('anti-ragging.php',  '_blank')">
                        <div><?php echo $row['btn_nm1']; ?></div><img src="./assets/svgicons/arrow_right_white.svg" />
                      </button>
                    </div>
                    <div class="ulife-div-219">
                      <img loading="lazy" src=<?php echo $row['img2']; ?> class="ulife-img-52" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ulife-column-39">
            <div class="ulife-div-220">
              <div class="ulife-div-221">
                <div class="ulife-div-222">
                  <div class="ulife-div-223">
                    <br />
                    800 - 180 - 5522
                  </div>
                  <div class="ulife-div-224">Toll Free No</div>
                </div>
                <div class="ulife-div-225">
                  <img loading="lazy" src="./assets/svgicons/tollfree.svg" class="ulife-img-53" />
                  <div class="ulife-div-226"></div>
                </div>
              </div>
              <div class="ulife-div-227"><?php echo $row['subsec1_title']; ?></div>
              <div class="ulife-div-228">
                <?php echo $row['subsec1_desc']; ?>
              </div>
              <div class="ulife-div-229">
                <button class="cta_button_primary Ss-btn_txt width100 explore" onclick="window.open('grievance.php',  '_blank')">
                  <div><?php echo $row['subsec1_btn1']; ?></div><img src="./assets/svgicons/arrow_right_white.svg" />
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Anti ragging ends here -->

     <!-- Institutional Committee starts here -->

     <?php
    $sql = "Select * FROM cards where id like 'ulifeaboutus%' limit 3";

    // Execute the query
    $c1 = 0;
    $result = mysqli_query($conn, $sql);
    ?>

    <div class="con">
      <section class="institutional-committees">
        <h2 class="institutional-committees__title">Institutional Committees</h2>
        <div class="institutional-committees__container">
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <article class="committee-card">
                <h3 class="committee-card__title">
                  <?php echo $row['title']; ?>
                </h3>
                <div class="committee-card__details" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                  <div class="text_btnnew">
                    <div class="text_btnnew_innrdiv">
                      <div class="text_btnnew_txt">
                        <?php echo $row['btn_nm']; ?>
                      </div>
                      <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                      </div>
                    </div>
                  </div>
                </div>
              </article>
          <?php
            }
          }
          ?>

        </div>
      </section>
    </div>


    <div class="ulife-div-249">
      <button class="cta_button_primary Ss-btn_txt" onclick="window.open('institutionalCommittees.php',  '_blank')">
        <div>View All</div> <img src="./assets/svgicons/arrow_right_white.svg" />
      </button>
    </div>
    <div class="ulife-div-250">
      <div class="ulife-div-254" onclick="window.open('institutionalCommittees.php',  '_blank')">
        <div class="text_btnnew">
          <div class="text_btnnew_innrdiv">
            <div class="text_btnnew_txt">
              View All
            </div>
            <div>
              <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Institutional Committee ensds here -->


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


  <!-- sac overlay starts -->
  <div class="modal fade" id="ulife_sc_card1-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content fcontent">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle fmodaltitle" id="modalLabel">STUDENT ACTIVITIES COUNCIL</h4>
          </div>
        </div>
        <div class="modal-body mbcontent overlaymodal-body">
          <div class="content1 p">
            In a student's life, education is not solely about academics, rhetorical studies, lectures and seminars but about learning many more important social and life skills like leadership skills, group dynamics etc., Which are considered to be highly essential elements for a student to transform into successful engineer. And Vignan's Foundation for Science, Technology and Research University truly believes in this fact. To ensure sharpening of minds and strengthening of souls, the students of Vignan have built their own student body: the Student Activities Council.
            <br><br>
            The Student Activities Council of 80 members is elected annually from among the nominees and selections done through a democratic process involving a panel of faculty members and student representatives drawn from across all departments. It has a President, Vice Presidents, General Secretaries, Member Secretaries and a Treasurer, supported by a sub-structure of various committees, who plan, organize and execute a plethora of Co and Extracurricular events and competitions on campus. The student activities council has emerged truly on the distinct determination and inseparable co-ordination of the students in working towards success. SAC is the leading student programming board on campus. Here in vignan, SAC aids in providing meaningful and enjoyable, social, cultural and educational programs and events that appeal and are accessible to the widest group of students possible, both on and off campus.
            <br><br>
            This student activities council ensures the students that their journey in this campus is not just filled with intellectual studies but with more involvement of passion, interests and creativity. SAC extends its roots to every student who wants to develop professionally, socially, contribute to a team and be inspiringly successful.
            <br><br>
            SAC is diversified just as students are, into various departments leading to more a tension free and peaceful work atmosphere. Starting from team logistics, stage management, technical controls through media and public relations ending in literary, cultural, fine arts is the departmenting of this council. Student activities council is established to be a platform with fostering leadership, managerial skills and group dynamics. This is a stage where people with vivid as well as similar mindsets meet, initiate, discuss, share, and present their ideas. This council also envisions in students being able to manage and maintain good relations, networking and adapt the culture of work streams. Following a typical framework and conventional functioning policies, the student activities council will be active on a daily basis to keep up the spirits of the inhabitants of the campus.
            <br><br>
            Thus ,the student activities council being the most happening student body, is gripped as the backbone for all student activities and has grown , is growing and will grow to be the most efficient, reliable , effective student body. VFSTR's student activities council works according to its motto that there are no secrets to success. It's the preparation, hard work and learning from failure."
            <div class="h3">Planning and Execution of Institution clubs:</div>
            The best way to ever experience the vast spectrum of activities would be to join the various clubs .These clubs will help students to meet other enthusiasts and experts inthe fields and thus create the perfect learning environment, making the clubs a hugebank of collective knowledge which is passed from one batch to another.
            <br><br>
            There are 13 optional clubs categorized into four major groups such as cultural, Literary, fine arts and Innovators club which are overseen by the Student ActivitiesCouncil of the institution.
            <br><br>
            In addition to the conduction of club activities various events will be planned by the Student Activities council. On this regard an activity calendar of all the training activities organized under clubs and other activities will be interspersed by the Student Activities Council and it ensures their execution as per the schedule.
            <br><br>
            <h4>Click for Glimpses of Student Activities Organised by Student Council</h4>
            <div class="text_btnnew" onclick="window.open('https://vignan.ac.in/naacdownload/Glimpses%20of%20Student%20Activities%20Organised%20by%20Student%20Council.pdf',  '_blank')">
              <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                  View Document
                </div>
                <div>
                  <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- sac Overlay ends -->
  <!-- sports overlay starts -->
  <div class="modal fade" id="ulife_sc_card2-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content fcontent">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle fmodaltitle" id="modalLabel">SPORTS & CULTURALS</h4>
          </div>
        </div>
        <div class="modal-body mbcontent overlaymodal-body">
          <div class="content1 p">
            The institution provides rich scope and facilities for different clubs like literary, cultural, sports and fine arts. These clubs offer a platform for students to exhibit their innate and latent talents in the areas of their interest.For facilitating students to conduct and participate in the wide spectrum of recreational activities,the institution has well planned infrastructure.
            <br><br>
            <li><b>Open-air Theatres:</b> Two spacious open-air theatres are available with a capacity of 1500 to 2000 students for the use of different co-curricular and extra curricular activities as well as to conduct mega events like Vignan Mahostav (A National Level Youth Festival).
            </li><br>
            <li><b>Seminar Halls:</b> State of the art Seminar and Gallery halls in both the Visweswaraiah and Aryabhatta blocks give scope for conduction of Intra- Departmental literary, cultural events.
            </li><br>
            <li><b>Sports Facilities:</b> The campus is equipped with facilities for all outdoor games like cricket, football, volleyball, tennis, basketball, and a 400-meter track athletics. An Indoor Sports Complex offers provision for indoor games like table tennis, badminton etc.
            </li>
            <br>
            To keep the students motivated,the physical educational department under the supervision of a well qualified Physical Director conducts intramurals round the year for keeping the sports persons well practiced and ready to participate whenever, there is a state level or national level event.

            <h3>Sports Facilities </h3>

            <h4>Out door Games </h4>
            <li>Athletics Track (400mts) - 1</li>

            <li>Volley Ball Courts - 9</li>

            <li>Lawn Tennis - 2 (Clay courts)</li>

            <h4>Indoor Games </h4>
            <li>Table Tennis Boards - 2</li>

            <li>Carroms and Chess</li>

            <h4>Girls Play Arena </h4>
            <li>Ball Badminton - 2</li>

            <li>Foot Ball Field - 1</li>

            <li>Basket Ball Court - 2</li>

            <li>Tennicoit - 7</li>

            <li>Throw Ball - 3</li>
            <br><br>

            <iframe width="300" height="170" src="https://www.youtube.com/embed/ZezfYglm74E?si=Gn_3dhwPHh1eEexW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <br><br>
            <iframe width="300" height="170" src="https://www.youtube.com/embed/QkUHhs-s0Cw?si=G_-qSDezwEzO9z91" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- sports Overlay ends -->
  <!-- ncc overlay starts -->
  <div class="modal fade" id="ulife_sc_card3-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content fcontent">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle fmodaltitle" id="modalLabel">National Cadet Corps</h4>
          </div>
        </div>
        <div class="modal-body mbcontent overlaymodal-body">
          <div class="content1 p">
            <h4>Objective:</h4>

            The objective of National Cadet Corps is to develop character, comradeship, and capacity for leadership among youth in India.
            <br><br>
            The VFSTR NCC Company motivates the students with best training and the ideals of selfless service.
            <br><br>
            The training inculcates team spirit, a sense of nationalism and it also helps in developing the overall personality of an individual and thus enabling them to become a responsible citizen of this nation.

            <br><br>
            <img src="assets/images/republic20.webp" alt="" width="300" height="170">
            <br><br>


            <h4>Formation:</h4>

            The VFSTR NCC 138-B Sub Unit (Senior Division and Senior Wing) under the control of 25(Andhra) BATTALION NCC, GUNTUR - GROUP was started in 2009.
            <br><br>
            The VFSTR NCC 65-G Sub Unit (Senior Wing) under the control of 10(Andhra) GIRLS BATTALION NCC, GUNTUR - GROUP was started in 2011.
            <br><br>
            <h4>Contact:</h4>
            138-B, 25(A) BN NCC: <br>
            Lt Siva Koteswararao Chinnam <br>
            Associate NCC Officer <br>
            138-B, 25(A) BN NCC, Guntur <br>
            vfstrncc@gmail.com
            <br><br>
            65-G(A), 10(A) Girls BN NCC: <br>
            Lt Keerthi Priya Yadala <br>
            Associate NCC Officer <br>
            65-G(A), 10(A) Girls BN NCC, Guntur <br>
            keerthi.kavi111@gmail.com
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ncc Overlay ends -->
  <!-- ncc overlay starts -->
  <div class="modal fade" id="ulife_sc_card4-overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content fcontent">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle fmodaltitle" id="modalLabel">UNIVERSITY EXTENSION ACTIVITY COUNCIL</h4>
          </div>
        </div>
        <div class="modal-body mbcontent overlaymodal-body">
          <div class="content1 p">


            The UEAC Unit of VFSTR was established in the year 2009, (continued erstwhile Vignan's Engineering College NSS unit under new name) to motivate students towards community oriented service.
            <br><br>
            These activities are aimed at instilling social consciousness and responsibility among budding engineers.
            <br><br>
            These activities also enable the VFSTR to forge strong links with community and help in its development through various extension activities.
            <br><br>
            It also encourages the involvement of the community in the college growth and development.
            <br><br>
            <h3>A SIGNIFICANT ACHIEVEMENT</h3>
            The UEAC unit has received a Silver Medal through Indian Red Cross Society announced by Honorable Governor of Andhra Pradesh in the year 2016.

            <br><br>
            It's not a single day effort, it is the continuous process from the last 6 years by organizing various Blood donation camps, Tree plantations, Special camps, old age home visits, orphan home visits, raise the fund to Armed forces &flood effected people in the villages of Pedalanka & Pesarlanka, AIDS day, Voters day, Water day, Rallies, Camps in the adopted schools like Eye checkup, Dental Checkup, Health Checkup, Academic classes and providing Infrastructure support & Hygienic food for X class students at the time of their examinations.
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ncc Overlay ends -->

  <!-- jQuery 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->


  <script>
    function ambience() {
      window.location.href = "https://vignan.ac.in/ambience.php";
    }

    function sports() {
      window.location.href = "https://vignan.ac.in/recreational.php";
    }

    function facilities() {
      window.location.href = "https://vignan.ac.in/generalfacilities.php";
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
	  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--<script src="js/common.js"></script>-->
</body>

</html>