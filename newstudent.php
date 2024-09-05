<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vignan University</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/u-life.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/admission.css">
    <!-- <link rel="stylesheet" href="css/about.css"> -->
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/mblfooter.css">
    <link rel="stylesheet" href="css/newstudent.css">
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

$sqlquery1 ="SELECT * FROM  sections  where id='newstu_hero'";

$result=mysqli_query($conn, $sqlquery1);
$hero = $result->fetch_assoc();

    
    

     
?>
    <div class="container home-div1 ">
        <div class="newstudent-div-space">
            <div class="">
                <div class="ulife-div-19">
                    <div class="ulife-div-20">
                        <div class="ulife-column">
                            <div class="ulife-div-21">
                                <div class="ulife-div-22"><?php echo $hero['title'];?></div>
                                <div class="ulife-div-23">
                                <?php echo $hero['descr'];?>
                                </div>
                            </div>
                        </div>
                        <div class="ulife-column-2">
                            <div class="ulife-div-24">
                                <img loading="lazy" src=" <?php echo $hero['img1'];?>" alt="image"
                                    class="ulife-img-5" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- second section starts -->
  <?php 
  
  $sqlquery2 ="SELECT * FROM  sections  where id='newstu_frst6days'";

$result=mysqli_query($conn, $sqlquery2);
$frst6days = $result->fetch_assoc();

?>
            <div class="frst6daysoutdiv">

                <div class="frst6days-picsdiv">

                    <div class="frst6days-pics1-2">
                        <img loading="lazy" src="<?php echo $frst6days['img1'];?>" alt="" srcset="">
                        <img loading="lazy" src="<?php echo $frst6days['img2'];?>" alt="" srcset="">

                    </div>
                    <img loading="lazy" src="<?php echo $frst6days['img3'];?>" alt="" srcset="">

                </div>

                <div class="frst6days-contentoutrdiv">

                    <div class="frst6days-title">
                    <?php echo $frst6days['title'];?>
                    </div>
                    <p class="frst6days-desc">
                    <?php echo $frst6days['descr'];?>
                 
                    </p>

                </div>

            </div>
            <!-- second section ends -->


            <!-- thrid section starts -->

            <?php 
  
  $sqlquery3 ="SELECT * FROM  sections  where id='newstu_training'";

$result=mysqli_query($conn, $sqlquery3);
$training = $result->fetch_assoc();

?>


            <div class="home-facilities" style="margin-top:0;">
                <div class="home-goodfood_innrdiv">
                    <div class="home_goalstitle"> <?php echo $training['title'];?></div>

                    <div class="campus-desc-div">
                        <div class="campus-hdng">
                        <?php echo $training['subsec1_title'];?>
                        </div>
                        <div class="home-goodfood_txt" style="font-size:16px;">
                        <?php echo $training['subsec1_desc'];?>

                        </div>
                    </div>

                    <img loading="lazy" style="width:100%;" src=" <?php echo $training['img1'];?>" />

                </div>
                <div><img class="homegood-img2" style="width:100%;" loading="lazy"
                        src=" <?php echo $training['img2'];?>" />
                </div>
                <div class="home-goodfood_div2 campus-subsec-div" style="">


                    <div class="home-goodfood_sidecontent">
                        <div class="campus-hdng">
                        <?php echo $training['subsec2_title'];?>
                        </div>
                    </div>
                    <div class="home-goodfood_txt" style="font-size:16px;text-align:justify;">
                    <?php echo $training['subsec2_desc'];?>
                    </div>

                </div>
            </div>




            <!-- third section ends -->



            <!-- Anti ragging starts here -->

            <?php
$sql = "Select * FROM sections where id='ulife_antiragging'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
?>
            <div class="ulife-div-209" style="margin-top:0;">
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
                                            <button class="cta_button_primary Ss-btn_txt width100 explore"
                                                onclick="antiragging()">
                                                <div><?php echo $row['btn_nm1']; ?></div><img
                                                    src="./assets/svgicons/arrow_right_white.svg" />
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
                                <button class="cta_button_primary Ss-btn_txt width100 explore"
                                    onclick="window.open('<?php echo $row['subsec1_btn1_hlink']; ?>',  '_blank')">
                                    <div><?php echo $row['subsec1_btn1']; ?></div><img
                                        src="./assets/svgicons/arrow_right_white.svg" />
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


            <!-- Hostel life starts -->
            <?php 
  
  $sqlquery4 ="SELECT * FROM  sections  where id='newstu_hstl'";

$result=mysqli_query($conn, $sqlquery4);
$hostel = $result->fetch_assoc();

?>

            <div class="home-facilities" style="margin-top:0;">
                <div class="home-facilities_innrdiv">
                    <div class="home_goalstitle"><?php echo $hostel['title']; ?></div>
                    <div><img style="width:100%;" src="<?php echo $hostel['img1']; ?>" /></div>
                    <div class="home-facilitiestxt" style="transform: translate(0px, 0px);">
                    <?php echo $hostel['descr']; ?>
                    </div>
                </div>
                <div class="home-facilities_div2">
                    <div class=""><img style="width:100%;" src="<?php echo $hostel['img2']; ?>" /></div>
                    <div class="home-facilities_imgbtn">
                        <div><img class="home-facilitiesimg3" src="<?php echo $hostel['img3']; ?>" /></div>
                        <button class="cta_button_primary Ss-btn_txt btnnone"
                            onclick="window.open('#',  '_blank')"><?php echo $hostel['btn_nm1']; ?>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2"
                                    y="-2" width="24" height="24">
                                    <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2961_1144)">
                                    <path
                                        d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                        fill="#F2F1ED" />
                                </g>
                            </svg>
                            <!-- <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                        </button>
                    </div>

                </div>

            </div>


            <div class="width100 btnnone-mbl">
                <button class="cta_button_primary Ss-btn_txt  explore width100"
                    onclick="window.open('#',  '_blank')"><?php echo $hostel['btn_nm1']; ?>
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
                    <!-- <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                </button>
            </div>
            <!-- Hostel life ends -->


            <!-- Good food for health starts -->


            <?php 

$sqlquery7 ="SELECT * FROM  sections  where id='newstu_goodfood'";

$result=mysqli_query($conn, $sqlquery7);
$goodfood = $result->fetch_assoc();

?>
            <div class="home-facilities divmargin-top" style="margin-top:0;">
                <div class="home-goodfood_innrdiv">
                    <div class="home_goalstitle"><?php echo $goodfood['title']; ?></div>
                    <img loading="lazy" style="width:100%;" src="<?php echo $goodfood['img1']; ?>" />
                    <div class="home-goodfood_txt" style="font-size:16px;">
                        <?php echo $goodfood['descr']; ?>

                    </div>
                </div>
                <div><img class="homegood-img2" loading="lazy" src="<?php echo $goodfood['img2']; ?>" /></div>
                <div class="home-goodfood_div2">
                    <img class="home-goodfood_img3 btnnone" loading="lazy" src="<?php echo $goodfood['img3']; ?>" />
                    <div class="home-goodfood_sidecontentdiv">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="58" viewBox="0 0 66 58"
                                fill="none">
                                <path
                                    d="M0 28.2C0 16.6 3.86667 8.4 11.6 3.6C15.2 1.33334 19.1333 0.13334 23.4 0V18.8C19.5333 18.8 16.8 20.3333 15.2 23.4C14.6667 24.7333 14.2667 26.3333 14 28.2H28.2V56.2L0 57.4V28.2ZM37.4 28.2C37.4 16.7333 41.3333 8.53333 49.2 3.6C52.5333 1.46667 56.4667 0.266671 61 0V18.8C56.8667 18.8 54.1333 20.3333 52.8 23.4C52 24.7333 51.6 26.3333 51.6 28.2H65.6V56.2L37.4 57.4V28.2Z"
                                    fill="#992E00" />

                            </svg>
                            <!--<img loading="lazy" src="assets/images/quotes.png" />-->
                        </div>
                        <div class="home-goodfood_sidecontent">
                            <?php echo $goodfood['subsec1_desc']; ?>
                        </div>

                        <div class="home-goodfood_sidecontent_btndiv" style="display:none;"> <button
                                class="button_secondary Secondary-btn_txt"
                                onclick="window.open('<?php echo $goodfood['btn1_hlink']; ?>',  '_blank')"><?php echo $goodfood['btn_nm1']; ?></button>
                        </div>
                    </div>
                </div>


            </div>


            <!-- Good food for health ends -->



            <!-- Experience the Ambience section start here -->
            <?php
$sql = "SELECT * FROM sections WHERE id='ulife_experience'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
?>

            <div class="ulife-div-25" style="margin-top:0;">
                <div class="ulife-div-26">
                    <div class="ulife-column-3">
                        <div class="ulife-div-27">
                            <div class="ulife-div-28"><?php echo $row['title']; ?></div>
                            <div class="ulife-div-29">
                                <img loading="lazy" src=<?php echo $row['img1']; ?> class="ulife-img-6" />
                                <div class="ulife-div-30">
                                    <div class="ulife-div-31">
                                        <div class="ulife-div-32"><?php echo $row['btn_nm1']; ?>
                                            <div class="smallcta_btn_primary"
                                                onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
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
                                            <div class="smallcta_btn_primary"
                                                onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
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
                                                        <div class="smallcta_btn_primary"
                                                            onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
                                                            <img src="assets/icons/arrow_outward_white.png" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ulife-column-6">
                                        <button class="cta_button_primary Ss-btn_txt ulife-div-48 width100 explore"
                                            onclick="ambience()">
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



            <!-- Sports Amenities starts here -->
            <?php
$sql = "Select * FROM sections where id='ulife_sport'";
$sa = mysqli_query($conn, $sql);
if (mysqli_num_rows($sa) > 0) {
  $row = mysqli_fetch_assoc($sa);
?>
            <div class="ulife-div-77" style="margin-top:0;">
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
                                            <div class="smallcta_btn_primary"
                                                onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
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
                                        <div class="smallcta_btn_primary"
                                            onclick="window.open('<?php echo $row['btn2_hlink']; ?>',  '_blank')">
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
                                            <div class="smallcta_btn_primary"
                                                onclick="window.open('<?php echo $row['btn3_hlink']; ?>',  '_blank')">
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
                                        <div>Explore All Amenities</div> <img
                                            src="./assets/svgicons/arrow_right_white.svg" />
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
                                        <div class="smallcta_btn_primary"
                                            onclick="window.open('<?php echo $row['btn4_hlink']; ?>',  '_blank')">
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




            <!-- Major Event starts here -->
            <div style="margin-top:0;">
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
                  echo date("d", strtotime($row['date']))," ", strtoupper(substr(date("F", strtotime($row['date'])), 0, 3)), " ", substr($row['date'], 0, 4);
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
                  echo date("d", strtotime($row['date']))," ", strtoupper(substr(date("F", strtotime($row['date'])), 0, 3)), " ", substr($row['date'], 0, 4);
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
                  echo date("d", strtotime($row['date']))," ", strtoupper(substr(date("F", strtotime($row['date'])), 0, 3)), " ", substr($row['date'], 0, 4);
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
                  echo date("d", strtotime($row['date']))," ", strtoupper(substr(date("F", strtotime($row['date'])), 0, 3)), " ", substr($row['date'], 0, 4);
                  ?></div>
                                </div>
                            </div>
                        </div>
                        <?php
    }
    ?>
                    </div>
                </div>
            </div>
            <!-- Major Event ends here -->


            <!-- find your department starts here -->

            <div class="home-brwsdiv" style="margin-top:0;">
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
                                    <mask id="mask0_3071_92" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="48" height="48">
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
                                    <mask id="mask0_3079_85" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="48" height="48">
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
                        <button class="cta_button_primary Ss-btn_txt btnnone" onclick="programs()">View All
                            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2"
                                    y="-2" width="24" height="24">
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
                        <button class="cta_button_primary Ss-btn_txt  explore" onclick="programs()">View Departments
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2"
                                    y="-2" width="24" height="24">
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

            <!-- find your department ends here -->




            <!-- library starts here -->
            <?php
$sql = "Select * FROM sections where id='ulife_library'";
?>
            <div class="ulife-div-171" style="margin-top:0;">
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
                            <div class="ulife-div-179"
                                onclick="window.open('<?php echo $row['subsec1_btn1_hlink']; ?>',  '_blank')"
                                style="cursor:pointer;">
                                <div class="text_btnnew">
                                    <div class="text_btnnew_innrdiv">
                                        <div class="text_btnnew_txt">
                                            <?php echo $row['subsec1_btn1']; ?>
                                        </div>
                                        <div>
                                            <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                                style="width: 16px;height: 16px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ulife-div-182"><?php echo $row['subsec2_title']; ?></div>
                            <div class="ulife-div-183">
                                <?php echo $row['subsec2_desc']; ?>
                            </div>
                            <div class="ulife-div-184"
                                onclick="window.open('<?php echo $row['subsec2_btn1_hlink']; ?>',  '_blank')"
                                style="cursor:pointer;">
                                <div class="text_btnnew">
                                    <div class="text_btnnew_innrdiv">
                                        <div class="text_btnnew_txt">
                                            <?php echo $row['subsec2_btn1']; ?>
                                        </div>
                                        <div>
                                            <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                                style="width: 16px;height: 16px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ulife-div-187"><?php echo $row['subsec3_title']; ?></div>
                            <div class="ulife-div-188">
                                <?php echo $row['subsec3_desc']; ?>
                            </div>
                            <div class="ulife-div-189"
                                onclick="window.open('<?php echo $row['subsec3_btn1_hlink']; ?>',  '_blank')"
                                style="cursor:pointer;">
                                <div class="text_btnnew">
                                    <div class="text_btnnew_innrdiv">
                                        <div class="text_btnnew_txt">
                                            <?php echo $row['subsec3_btn1']; ?>
                                        </div>
                                        <div>
                                            <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                                style="width: 16px;height: 16px;" />
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

            <!-- scholarship starts here -->


            <?php
      $sql = "SELECT * FROM `sections` WHERE `id` = 'Admissions_Scholarship';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
        ?>
            <div class="scholarshipAndFeesDetails" style="margin-top:0;">
                <section class="scholarship-section">
                    <header class="scholarship-header">
                        <h2 class="scholarship-title"><?php echo $row['subsec1_title']; ?></h2>
                        <div class="scholarship-description">
                            <p class="scholarship-text">
                                <?php echo $row['subsec1_desc']; ?>
                            </p>
                            <div class="scholarship-cta">
                                <div class="text_btnnew"
                                    onclick="window.open('<?php echo $row['subsec1_btn1_hlink'] ?>',  '_blank')">
                                    <div class="text_btnnew_innrdiv">
                                        <div class="text_btnnew_txt">
                                            <?php echo $row['subsec1_btn1']; ?>
                                        </div>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg"
                                                style="width: 16px;height: 16px;">
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
                                                75<span style="font-size: 31px; line-height: 37px">%</span>
                                            </h3>
                                            <p class="stats-description">
                                                Scholarship on Tuition fee
                                            </p>
                                        </div>
                                        <div class="stats-divider">
                                            <img src="./assets/icons/ArchiveIconRust.svg" alt="" class="stats-icon" />
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
                                                16<span style="font-size: 31px; line-height: 37px">cr</span>
                                            </h3>
                                            <p class="stats-description">Worth of Scholarships</p>
                                        </div>
                                        <div class="stats-divider">
                                            <img src="./assets/icons/ScholarHatIconRust.svg" alt=""
                                                class="stats-icon" />
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
                            <div class="text_btnnew scholarship-cta"
                                onclick="window.open('<?php echo $row['subsec2_btn1_hlink']; ?>',  '_blank')">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        <?php echo $row['subsec2_btn1']; ?>
                                    </div>
                                    <div>
                                        <img src="assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;">
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
                            <img src="./assets/icons/DoubleQuoateIconMaroon.svg" alt=""
                                class="student-testimonial-icon" />
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
            <!-- scholarship ends here -->




            <!-- Student Council starts here -->
            <?php
$sql = "Select * FROM cards where id like 'ulife_sc_card%'";
$sc = mysqli_query($conn, $sql);
if (mysqli_num_rows($sc) > 0) {
?>
            <div style="margin-top:0;">
                <div class="ulife-div-50" style="margin-top:0;">Student Council</div>
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
                                <div class="ulife-div-56"
                                    onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')"
                                    style="cursor:pointer;">
                                    <div class="text_btnnew viewall-right">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt">
                                                <?php echo $row['btn_nm']; ?>
                                            </div>
                                            <div>
                                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                                    style="width: 16px;height: 16px;" />
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
            </div>
            <?php
}
?>
            <!-- Student Council ends here -->


            <!-- day scholar start here -->

            <?php 
  
  $sqlquery5 ="SELECT * FROM  sections  where id='newstu_dayscholar'";

$result=mysqli_query($conn, $sqlquery5);
$dayscholar = $result->fetch_assoc();

?>

            <div class="dayscholar-bus">

                <div class="dayscholar-bus_leftdiv">
                    <div class="home_goalstitle" style="margin-top:0;"><?php echo $dayscholar['title']; ?>
                    </div>
                    <div class="home-goodfood_txt" style="width:553px;"><?php echo $dayscholar['descr']; ?>
                    </div>
                    <button class="cta_button_primary Ss-btn_txt btnnone" onclick="window.open('#',  '_blank')"><?php echo $dayscholar['btn_nm1']; ?>
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
                        <!-- <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                    </button>

                </div>
                <img src="<?php echo $dayscholar['img1']; ?>" style="width:47%;" alt="" srcset="">
            </div>
            <!-- day scholar ends here -->


            <div id="mblftr">
                <?php
                
                include_once  'mblfooter.php';
                ?>
            </div>
            <div id="ftr" style="    width: 100%;">
                <?php
                
                include_once  'footer.php';
                ?>
            </div>
        </div>

        <!-- query section starts here -->
        <div class="query-outdiv">

            <div class="query-leftdiv">
                <div class="home_goalstitle" style="color:white;">
                    Have a Query?
                    We are here to help
                </div>
                <div class="button_secondary2 Secondary-btn_txt">
                    Submit a query
                </div>
            </div>


            <div class="query-rightdiv">

                <div class="query-contactnumdiv">
                    <img loading="lazy" src="./assets/svgicons/tollfreewhite.webp" class="ulife-img-53" />
                    <div class="query-contactnum">7799 427 427 </div>
                </div>
                <div class="query-timings">

                    Vignan team is available in from Mon - Sat 9:00 am to 6:00 pm
                </div>
            </div>



        </div>
    </div>
    <!-- query section ends here -->

</body>
<script src="js/common.js"></script>

</html>