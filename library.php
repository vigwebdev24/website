<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VIGNAN NTR LIBRARY</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/button.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mblfooter.css">
    <link rel="stylesheet" href="css/exam_home.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/lib2.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
</head>
<body style="background-color: #f2f1ed">
    <!--NavBar starts-->
        <?php 
            include_once 'connect.php';
            include_once  'navbar.php';
            $sql = "Select * FROM sections where id like '%lib%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if($row['id']=='lib_sec1'){
        ?>
    <!-- NavBar Ends-->
    <div class="container home-div1">
        <div class="newstudent-div-space">
            <!--BillBoard starts-->
            <div class="BillboardTab">
                        <div class="BillBoardTop">
                            <div class="BillboardTabplane1">
                                <div class="ove">
                                    <img class="oveimg"
                                    src="<?php echo $row['img1']?>"/>
                                </div>
                            </div>
                            <div class="BillboardTabplane2">
                                <div class="">
                                    <div class="BillboardTabplane2TitleText">
                                        <div><?php echo $row['title']?></div>
                                    </div>
                                </div>
                            <div class="BillboardTabplane2DiscriptionTextCont">
                                <div class="BillboardTabplane2DiscriptionText">
                                    <?php echo $row['descr']?>
                                </div>
                            </div>
                            <div class="BillboardTabplane2DiscriptionTextCont">
                                <div class="BillboardTabplane2Hyperlinks">
                                    <button class="cta_button_primary Ss-btn_txt"  onclick="window.open('<?php echo $row['btn1_hlink']?>',  '_blank')" >
                                        <?php echo $row['btn_nm1']?>
                                        <img
                                            src="assets/svgicons/arrow_right_white.svg"
                                            style="width: 15px; height: 15px"
                                            alt=""
                                        />
                                        </a>
                                    </button>
                                    <button class="cta_button_secondary Secondary-btn_txt" onclick="window.open('<?php echo $row['btn2_hlink']?>',  '_blank')">
                                        <?php echo $row['btn_nm2']?>

                                            <img
                                                src="assets/svgicons/arrow_right_brown.svg"
                                                style="width: 15px; height: 15px"
                                                alt=""
                                            />
                                            </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="BillBoardBottom">
                    <div class="BillBoardHeader"><?php echo $row['title']?></div>
                    <div class="BillBoardImg" style="overflow: hidden">
                        <img
                            src="<?php echo $row['img1']?>"
                            alt=""
                            style="width: 100%; height: 100%; object-fit: cover"
                            srcset=""
                        />
                    </div>
                    <div class="BillBoardDescription">
                        <?php echo $row['descr']?>
                    </div>
                    <div class="BillBoardNavButtons">
                        <button class="cta_button_primary Ss-btn_txt" id="aplybt" onclick="window.open('exam.php',  '_blank')">
                            <div><?php echo $row['btn_nm1']?></div>
                            <img
                            class="BillBoardButtonArrows"
                            src="assets/svgicons/arrow_right_white.svg"
                            alt=""
                            />
                        </button>
                        <button class="cta_button_secondary Secondary-btn_txt">
                            <div> <?php echo $row['btn_nm2']?></div>
                            <img
                            class="BillBoardButtonArrows"
                            src="assets/svgicons/arrow_right_brown.svg"
                            alt=""
                            />
                        </button>
                    </div>
                </div>
                <?php
                    }}}
                ?>
            <!-- BillBoard Ends-->
            <!-- Overview Starts-->
            <div class="Overview">
                <?php  $sqlquery2 ="SELECT * FROM  sections  where id='lib_sec2'";
                    $result2=mysqli_query($conn, $sqlquery2);
                    $goals2 = $result2->fetch_assoc();
                ?>
                <div class="lib-overview">
                    <div class="overview-library">
                        <div class="libov-content">
                            <div class="libov-tnc">
                                <div class="lib-overviewtitle">
                                    <?php echo $goals2['title']?>
                                </div>
                                <div class="libov-tcontent">
                                    <?php echo $goals2['descr']?>
                                </div>
                            </div>               
                                <div class="col-lg-22" style="">
                                    <button class="cta_button_secondary Secondary-btn_txt" data-toggle="modal" data-target="#overlay"><?php echo $goals2['btn_nm1']?><img
                                            src="assets/icons/arrow_forward.png" /></button>
                                </div>
                        </div>
                        <div class="libov-stats">
                            <div class="lib-overviewdiv">
                                <?php  $sqlquery2_1 ="SELECT * FROM  stats  where id='lib_timings'";
                                    $result2_1=mysqli_query($conn, $sqlquery2_1);
                                    $goals2_1 = $result2_1->fetch_assoc();
                                ?>
                                <div class="lib-overview_innrdiv">
                                    <div class="lib-timings">
                                        <?php echo $goals2_1['statvalue']?>
                                    </div>
                                    <div class="lib-timings_txt">
                                        <?php echo $goals2_1['descr']?>
                                    </div>
                                </div>
                                <div class="lib-timings_imgbdrdiv">
                                    <svg class="lib-timings_img" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 48 48" fill="none">
                                        <mask id="mask0_3079_9" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                            width="48" height="48">
                                            <rect width="48" height="48" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_3079_9)">
                                            <path
                                                d="M23.9839 40.1115C26.5048 40.1115 28.6647 39.2223 30.4635 37.4441C32.2623 35.6658 33.1617 33.5232 33.1617 31.0162C33.1617 28.4953 32.2675 26.3354 30.4789 24.5366C28.6904 22.7378 26.5353 21.8384 24.0135 21.8384C21.4918 21.8384 19.3406 22.7326 17.5598 24.5212C15.779 26.3097 14.8886 28.4648 14.8886 30.9866C14.8886 33.5083 15.7778 35.6595 17.556 37.4403C19.3343 39.2211 21.4769 40.1115 23.9839 40.1115ZM17.9886 21.4384C18.6464 20.9811 19.3615 20.6193 20.1339 20.3531C20.9063 20.0869 21.7233 19.882 22.5848 19.7384L18.0656 10.9153H12.7463L17.9886 21.4384ZM30.0117 21.4384L35.3425 10.9153H29.9348L25.7809 19.1961L26.1334 19.8648C26.8267 20.001 27.5041 20.2061 28.1656 20.48C28.8271 20.7538 29.4425 21.0733 30.0117 21.4384ZM14.3425 38.1769C14.3109 37.939 14.3177 37.6488 14.363 37.3065C14.4083 36.9641 14.5079 36.6165 14.6617 36.2637C14.0463 35.2186 13.622 34.0864 13.3886 32.8672C13.1553 31.6479 13.1271 30.4024 13.304 29.1307C13.304 28.1307 13.4771 27.1819 13.8232 26.2845C14.1694 25.3871 14.6502 24.5794 15.2655 23.8615C14.6373 23.8794 14.0553 24.0534 13.5194 24.3835C12.9835 24.7135 12.6386 25.1321 12.4848 25.6393C10.9976 26.1464 9.92581 27.1019 9.26944 28.5057C8.61304 29.9096 8.52203 31.3512 8.9964 32.8307C8.9964 34.3435 9.51561 35.6127 10.554 36.6384C11.5925 37.664 12.8553 38.1769 14.3425 38.1769ZM33.6579 38.1769C35.6194 38.1845 37.3188 37.4913 38.7559 36.0972C40.1931 34.703 40.9117 33.0088 40.9117 31.0145C40.9117 29.0202 40.1931 27.3211 38.7559 25.9172C37.3188 24.5134 35.6194 23.8025 33.6579 23.7845C33.5041 23.7845 33.3502 23.7973 33.1963 23.823C33.0425 23.8486 32.8887 23.8615 32.7348 23.8615C33.5271 24.8512 34.1611 25.9511 34.6367 27.1611C35.1124 28.3711 35.3502 29.6525 35.3502 31.0053C35.3502 32.3581 35.1124 33.6377 34.6367 34.8442C34.1611 36.0506 33.5271 37.1358 32.7348 38.0999C32.8887 38.1255 33.0425 38.1448 33.1963 38.1576C33.3502 38.1704 33.5041 38.1769 33.6579 38.1769ZM23.9949 42.2999C22.6627 42.2999 21.4145 42.1024 20.2503 41.7075C19.0861 41.3125 18.0233 40.7087 17.0617 39.8961C16.6216 40.0362 16.1538 40.1386 15.6585 40.2031C15.1632 40.2676 14.6771 40.2999 14.2002 40.2999C11.6279 40.2999 9.4432 39.4021 7.646 37.6064C5.8488 35.8107 4.9502 33.6279 4.9502 31.0578C4.9502 28.4804 5.85148 26.2835 7.65405 24.467C9.45661 22.6505 11.6528 21.7486 14.2425 21.7615C14.5246 21.7615 14.7938 21.7807 15.0502 21.8191C15.3066 21.8576 15.563 21.9025 15.8194 21.9538L9.19249 8.72681H19.4309L24.0002 17.8653L28.5694 8.72681H38.8579L32.3194 21.8153C32.5502 21.764 32.7874 21.7255 33.031 21.6999C33.2746 21.6743 33.5245 21.6615 33.7809 21.6615C36.363 21.6563 38.5617 22.5645 40.3771 24.386C42.1925 26.2075 43.1002 28.4121 43.1002 30.9999C43.1002 33.617 42.1961 35.8213 40.388 37.6128C38.5799 39.4042 36.3673 40.2999 33.7502 40.2999C33.2476 40.2999 32.7643 40.2704 32.3002 40.2115C31.8361 40.1525 31.3951 40.0474 30.9771 39.8961C30.0158 40.683 28.9448 41.2804 27.764 41.6882C26.5832 42.096 25.3268 42.2999 23.9949 42.2999ZM20.8271 35.6769L22.0152 31.7324L18.8232 29.4422H22.7826L24.0002 25.323L25.2436 29.4422H29.1771L26.004 31.7192L27.2233 35.6769L24.0077 33.2307L20.8271 35.6769Z"
                                                fill="#C57654" />
                                        </g>
                                    </svg>
                                    <div class="non-clk_brdr"></div>
                                </div>
                            </div>
                            <div class="lib-overview_div3">
                                <div class="lib_ov_circle">
                                    <?php  $sqlquery2_2 ="SELECT * FROM  stats  where id='lib_inaug'";
                                        $result2_2=mysqli_query($conn, $sqlquery2_2);
                                        $goals2_2 = $result2_2->fetch_assoc();
                                    ?>
                                    <div class="lib-ov_circle_txtdiv">
                                        <div class="lib-ov_circle_txt">
                                            <?php echo $goals2_2['statvalue']?>
                                        </div>
                                        <div class="lib-ov_circle_title">
                                            <?php echo $goals2_2['descr']?>
                                        </div>
                                    </div>
                                </div>
                                <div class="lib-ov_square">
                                    <div class="lib-ov_square_innrdiv">
                                        <div class="lib-ov_square_content">
                                            <?php  $sqlquery2_3 ="SELECT * FROM  stats  where id='lib_space'";
                                                $result2_3=mysqli_query($conn, $sqlquery2_3);
                                                $goals2_3 = $result2_3->fetch_assoc();
                                            ?>
                                            <div class="lib-ov_square_txt">
                                                <?php echo $goals2_3['statvalue']?><small class="lib-ov_circle_small">sqm</small>
                                            </div>
                                            <div class="lib-ov_square_title">
                                                <?php echo $goals2_3['descr']?>
                                            </div>
                                        </div>
                                        <div class="lib-ov_squareimgbdrdiv">
                                            <img src="assets/svgicons/circlestar.svg" />
                                            <div class="non-clk_brdr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Overview Ends-->
            <div class="AdvisoryCommittee">
                <?php
                    $sql = "SELECT * FROM `sections` WHERE `id` = 'lib_adv_committee';";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        if($row = $result->fetch_assoc()) {
                ?>
                <div class="lib-committe">
                    <div class="lib-committe-top">
                        <div class="lib-committe-title section-title"><?php echo $row["title"]; ?></div>
                    </div>
                    <div class="lib-committe-bottom">
                            <div class="member-card">
                                <img src="<?php echo $row["img1"]; ?>" class="profcard-image" alt="Description of the image">
                                <div class="member-content">
                                    <div class="member-name"><?php echo $row["subsec1_title"]; ?></div>
                                    <div class="member-role"><?php echo $row["subsec1_desc"]; ?></div>
                                </div>
                            </div>
                            <div class="member-card">
                                <img src="<?php echo $row["img2"]; ?>" class="profcard-image" alt="Description of the image">
                                <div class="member-content">
                                    <div class="member-name"><?php echo $row["subsec2_title"]; ?></div>
                                    <div class="member-role"><?php echo $row["subsec2_desc"]; ?></div>
                                </div>
                            </div>
                            <div class="member-card">
                                <img src="<?php echo $row["img3"]; ?>" class="profcard-image" alt="Description of the image">
                                <div class="member-content">
                                    <div class="member-name"><?php echo $row["subsec3_title"]; ?></div>
                                    <div class="member-role"><?php echo $row["subsec3_desc"]; ?></div>
                                </div>
                            </div>
                            <div class="member-card">
                                <img src="<?php echo $row["img4"]; ?>" class="profcard-image" alt="Description of the image">
                                <div class="member-content">
                                    <div class="member-name"><?php echo $row["subsec4_title"]; ?></div>
                                    <div class="member-role"><?php echo $row["subsec4_desc"]; ?></div>
                                </div>
                            </div>
                        <?php } } ?>
                    </div>
                    <div class="lib-committe-btn">
                        <button onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')" class="cta_button_primary txt-btn-20-16">
                        <div><?php echo $row["btn_nm1"]; ?></div>
                            <img src="assets/icons/Button_forwardarrow.png" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="StudentCommittee">
                <?php
                    $sql = "SELECT * FROM `sections` WHERE `id` = 'lib_stu_members';";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        if($row = $result->fetch_assoc()) {
                ?>
                <div class="lib-committe">
                    <div class="lib-committe-top">
                        <div class="lib-committe-title section-title"><?php echo $row["title"]; ?></div>
                    </div>
                    <div class="lib-committe-bottom">
                            <div class="member-card">
                                <img src="<?php echo $row["img1"]; ?>" class="profcard-image" alt="Description of the image">
                                <div class="member-content">
                                    <div class="member-name"><?php echo $row["subsec1_title"]; ?></div>
                                    <div class="member-role"><?php echo $row["subsec1_desc"]; ?></div>
                                </div>
                            </div>
                            <div class="member-card">
                                <img src="<?php echo $row["img2"]; ?>" class="profcard-image" alt="Description of the image">
                                <div class="member-content">
                                    <div class="member-name"><?php echo $row["subsec2_title"]; ?></div>
                                    <div class="member-role"><?php echo $row["subsec2_desc"]; ?></div>
                                </div>
                            </div>
                            <div class="member-card">
                                <img src="<?php echo $row["img3"]; ?>" class="profcard-image" alt="Description of the image">
                                <div class="member-content">
                                    <div class="member-name"><?php echo $row["subsec3_title"]; ?></div>
                                    <div class="member-role"><?php echo $row["subsec3_desc"]; ?></div>
                                </div>
                            </div>
                            <div class="member-card">
                                <img src="<?php echo $row["img4"]; ?>" class="profcard-image" alt="Description of the image">
                                <div class="member-content">
                                    <div class="member-name"><?php echo $row["subsec4_title"]; ?></div>
                                    <div class="member-role"><?php echo $row["subsec4_desc"]; ?></div>
                                </div>
                            </div>
                        <?php } } ?>
                    </div>
                    <div class="lib-committe-btn">
                        <button onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')" class="cta_button_primary txt-btn-20-16">
                        <div><?php echo $row["btn_nm1"]; ?></div>
                            <img src="assets/icons/Button_forwardarrow.png" />
                        </button>
                    </div>
                </div>
            </div>
            <!--Resources starts here-->
            <div class="Resources">
                <?php
                    $sql = "SELECT * FROM `sections` WHERE `id` = 'lib_resources';";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        if($row = $result->fetch_assoc()) {
                ?>
                <div class="resourcesAndFeesDetails" style="margin-top:0;">
                    <section class="resources-section">
                        <header class="resources-header" style="display: flex;flex-direction: column;gap: 49px;">
                            <h2 class="resources-title"><?php echo $row['title']; ?></h2>
                            <div class="resources-description">
                                <p class="resources-text">
                                    <?php echo $row['descr']; ?>
                                </p>
                                <div class="BillboardTabplane2DiscriptionTextCont">
                                    <div class="BillboardTabplane2Hyperlinks">
                                        <button onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')" class="cta_button_primary Ss-btn_txt">
                                            <div><?php echo $row['btn_nm1'] ?></div> 
                                            <img src="assets/icons/Button_forwardarrow.png" />
                                        </button>
                                        <button onclick="window.open('<?php echo $row['btn2_hlink'] ?>',  '_blank')" class="cta_button_secondary Secondary-btn_txt">
                                            <?php echo $row['btn_nm2'] ?> 
                                            <img src="assets/icons/arrow_forward.png" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </section>
                </div>
                <?php
                        }
                    }
                ?>
                <div class="subsection">
                    <?php  $sqlquery51="SELECT * FROM  sections  where id='lib_resources_books'";
                        $result51=mysqli_query($conn, $sqlquery51);
                        $goals51= $result51->fetch_assoc();?>
                        <header class="resourcessection-header">
                            <h2 class="resourcessection-title"><?php echo $goals51['title']; ?></h2>
                        </header>
                        <?php  $sqlquery41 ="SELECT * FROM  cards  where id='lib_sec5_books1'";
                            $result41=mysqli_query($conn, $sqlquery41);
                            $goals41 = $result41->fetch_assoc();
                        ?>
                        <div class="depresearchproj_outdiv">
                            <div style="display: flex;flex-direction: column;justify-content: center;
                                    gap: var(--Spacing-Spacing-xl, 25px);">
                                <div style="display:flex; row-gap:25px;">
                                    <div class="ulife-div-52">
                                        <div class="ulife-column-7">
                                            <div class="ulife-div-53">
                                                <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                        font-weight: 400;line-height: 140%; /* 18.2px */">
                                                        <?php echo $goals41['title']?>
                                                </div>
                                                <div class="ulife-div-55">
                                                <?php echo $goals41['descr']?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  $sqlquery42 ="SELECT * FROM  cards  where id='lib_sec5_books2'";
                                            $result42=mysqli_query($conn, $sqlquery42);
                                            $goals42 = $result42->fetch_assoc();
                                        ?>
                                        <div class="ulife-column-7">
                                            <div class="ulife-div-53">
                                                <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $goals42['title']?></div>
                                                <div class="ulife-div-55">
                                                    <?php echo $goals42['descr']?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_books3'";
                                                $result43=mysqli_query($conn, $sqlquery43);
                                                $goals43 = $result43->fetch_assoc();
                                        ?>
                                        <div class="ulife-column-7">
                                            <div class="ulife-div-53">
                                                <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                        font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $goals43['title']?></div>
                                                <div class="ulife-div-55">
                                                    <?php echo $goals43['descr']?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  $sqlquery44 ="SELECT * FROM  cards  where id='lib_sec5_books4'";
                                            $result44=mysqli_query($conn, $sqlquery44);
                                            $goals44 = $result44->fetch_assoc();
                                        ?>
                                        <div class="ulife-column-7">
                                            <div class="ulife-div-53">
                                                <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                        font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $goals44['title']?></div>
                                                <div class="ulife-div-55">
                                                    <?php echo $goals44['descr']?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lib-committe-btn">
                                <button class="cta_button_primary Ss-btn_txt" style="margin-bottom: 30px;align-items:flex-end;" onclick="window.open('<?php echo $goals51['btn1_hlink']?>', '_self')">
                                    <?php echo $goals51['btn_nm1']?>
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
                                </button>
                            </div>
                        </div>
                </div>
                <!-- Books ends here-->
                <!-- E-Books starts here-->
                <div class="subsection">
                    <?php  $sqlquery51="SELECT * FROM  sections  where id='lib_resources_ebooks'";
                        $result51=mysqli_query($conn, $sqlquery51);
                        $goals51= $result51->fetch_assoc();?>
                    <header class="resourcessection-header">
                        <h2 class="resourcessection-title"><?php echo $goals51['title']; ?></h2>
                    </header>
                    <?php  $sqlquery41 ="SELECT * FROM  cards  where id='lib_sec5_ebooks1'";
                            $result41=mysqli_query($conn, $sqlquery41);
                            $goals41 = $result41->fetch_assoc();
                    ?>
                    <div class="depresearchproj_outdiv">
                        <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;
                                gap: var(--Spacing-Spacing-xl, 25px);">
                            <div style="display:flex; gap:4px;">
                                <div class="ulife-div-52">
                                    <div class="ulife-column-7">
                                        <div class="ulife-div-53">
                                            <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                    font-weight: 400;line-height: 140%; /* 18.2px */">
                                                    <?php echo $goals41['title']?>
                                            </div>
                                            <div class="ulife-div-55">
                                                <?php echo $goals41['descr']?>
                                            </div>
                                            <div class="ulife-div-56" style="cursor:pointer;">
                                                <div class="text_btnnew viewall-right">
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt">
                                                            <?php echo $goals41['btn_nm']?>
                                                        </div>
                                                        <div>
                                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  
                                        $sqlquery42 ="SELECT * FROM  cards  where id='lib_sec5_ebooks2'";
                                        $result42=mysqli_query($conn, $sqlquery42);
                                        $goals42 = $result42->fetch_assoc();
                                    ?>
                                    <div class="ulife-column-7">
                                        <div class="ulife-div-53">
                                            <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $goals42['title']?></div>
                                                <div class="ulife-div-55">
                                                    <?php echo $goals42['descr']?>
                                                </div>
                                                <div class="ulife-div-56" style="cursor:pointer;">
                                                    <div class="text_btnnew viewall-right">
                                                        <div class="text_btnnew_innrdiv">
                                                            <div class="text_btnnew_txt">
                                                                <?php echo $goals42['btn_nm']?>
                                                            </div>
                                                            <div>
                                                                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  
                                            $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_ebooks3'";
                                            $result43=mysqli_query($conn, $sqlquery43);
                                            $goals43 = $result43->fetch_assoc();
                                        ?>
                                        <div class="ulife-column-7">
                                            <div class="ulife-div-53">
                                                <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                        font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $goals43['title']?></div>
                                                    <div class="ulife-div-55">
                                                    <?php echo $goals43['descr']?>
                                                    </div>
                                                    <div class="ulife-div-56" style="cursor:pointer;">
                                            <div class="text_btnnew viewall-right">
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                    <?php echo $goals42['btn_nm']?>
                                                    </div>
                                                    <div>
                                                        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php   $sqlquery44 ="SELECT * FROM  cards  where id='lib_sec5_ebooks4'";
                                        $result44=mysqli_query($conn, $sqlquery44);
                                        $goals44 = $result44->fetch_assoc();
                                ?>
                                <div class="ulife-column-7">
                                    <div class="ulife-div-53">
                                        <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                        font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $goals44['title']?></div>
                                            <div class="ulife-div-55">
                                                <?php echo $goals44['descr']?>
                                            </div>
                                            <div class="ulife-div-56" style="cursor:pointer;">
                                                <div class="text_btnnew viewall-right">
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt">
                                                            <?php echo $goals42['btn_nm']?>
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
                            <button class="cta_button_primary Ss-btn_txt" style="margin-bottom: 30px;" onclick="window.open('<?php echo $goals51['btn1_hlink']?>', '_self')">
                                <?php echo $goals51['btn_nm1']?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2"
                                                    width="24" height="24">
                                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_2961_1144)">
                                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                                        fill="#F2F1ED" />
                                    </g>
                                </svg>
                                        <!-- <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                            </button>
                        </div>
                    </div>
                </div>
                <!--E-books Ends here-->
                <!-- E-Journals starts here-->
                <div class="subsection"> 
                    <?php  $sqlquery51="SELECT * FROM  sections  where id='lib_resources_ejournals'";
                            $result51=mysqli_query($conn, $sqlquery51);
                            $goals51= $result51->fetch_assoc();?>
                    <header class="resourcessection-header">
                        <h2 class="resourcessection-title"><?php echo $goals51['title']; ?></h2>
                    </header>
                    <?php   $sqlquery41 ="SELECT * FROM  cards  where id='lib_sec5_ejournals1'";
                            $result41=mysqli_query($conn, $sqlquery41);
                            $goals41 = $result41->fetch_assoc();
                    ?>
                    <div class="depresearchproj_outdiv">
                        <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;
                                gap: var(--Spacing-Spacing-xl, 25px);">
                            <div style="display:flex; gap:4px;">
                                <div class="ulife-div-52">
                                    <div class="ulife-column-7">
                                        <div class="ulife-div-53">
                                            <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                    font-weight: 400;line-height: 140%; /* 18.2px */">
                                                    <?php echo $goals41['title']?>
                                            </div>
                                            <div class="ulife-div-55">
                                                <?php echo $goals41['descr']?>
                                            </div>
                                            <div class="ulife-div-56" style="cursor:pointer;">
                                                <div class="text_btnnew viewall-right">
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt">
                                                            <?php echo $goals42['btn_nm']?>
                                                        </div>
                                                        <div>
                                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  $sqlquery42 ="SELECT * FROM  cards  where id='lib_sec5_ejournals2'";
                                            $result42=mysqli_query($conn, $sqlquery42);
                                            $goals42 = $result42->fetch_assoc();
                                    ?>
                                    <div class="ulife-column-7">
                                        <div class="ulife-div-53">
                                            <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                            font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $goals42['title']?></div>
                                                <div class="ulife-div-55">
                                                    <?php echo $goals42['descr']?>
                                                </div>
                                                <div class="ulife-div-56" style="cursor:pointer;">
                                                    <div class="text_btnnew viewall-right">
                                                        <div class="text_btnnew_innrdiv">
                                                            <div class="text_btnnew_txt">
                                                                <?php echo $goals42['btn_nm']?>
                                                            </div>
                                                            <div>
                                                                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_ejournals3'";
                                                $result43=mysqli_query($conn, $sqlquery43);
                                                $goals43 = $result43->fetch_assoc();
                                        ?>
                                        <div class="ulife-column-7">
                                            <div class="ulife-div-53">
                                                <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                    font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $goals43['title']?></div>
                                                <div class="ulife-div-55">
                                                    <?php echo $goals43['descr']?>
                                                </div>
                                                <div class="ulife-div-56" style="cursor:pointer;">
                                                    <div class="text_btnnew viewall-right">
                                                        <div class="text_btnnew_innrdiv">
                                                            <div class="text_btnnew_txt">
                                                                <?php echo $goals42['btn_nm']?>
                                                            </div>
                                                            <div>
                                                                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  $sqlquery44 ="SELECT * FROM  cards  where id='lib_sec5_ejournals4'";
                                                $result44=mysqli_query($conn, $sqlquery44);
                                                $goals44 = $result44->fetch_assoc();
                                        ?>
                                        <div class="ulife-column-7">
                                            <div class="ulife-div-53">
                                                <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                    font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $goals44['title']?></div>
                                                <div class="ulife-div-55">
                                                    <?php echo $goals44['descr']?>
                                                </div>
                                                <div class="ulife-div-56" style="cursor:pointer;">
                                                <div class="text_btnnew viewall-right">
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt">
                                                            <?php echo $goals42['btn_nm']?>
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
                            <button class="cta_button_primary Ss-btn_txt" style="margin-bottom: 30px;" onclick="window.open('<?php echo $goals51['btn1_hlink']?>', '_self')">
                                <?php echo $goals51['btn_nm1']?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2"
                                            width="24" height="24">
                                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_2961_1144)">
                                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                                fill="#F2F1ED" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!--E-Journals Ends here-->
                <!-- E-Content starts here-->
                <div class="subsection"> 
                    <?php  $sqlquery51="SELECT * FROM  sections  where id='lib_resources_econtent'";
                        $result51=mysqli_query($conn, $sqlquery51);
                        $goals51= $result51->fetch_assoc();?>
                    <header class="resourcessection-header">
                        <h2 class="resourcessection-title"><?php echo $goals51['title']; ?></h2>
                    </header>
                    <div class="course-cards naac">
                        <?php   $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_econtent1'";
                                $result43=mysqli_query($conn, $sqlquery43);
                                $goals43 = $result43->fetch_assoc();
                        ?>
                        <div class="course-card">
                            <div class="course-name"><?php echo $goals43['title']?></div>
                            <div class="naac">
                                <div class="text_btnnew ">
                                    <div class="text_btnnew_innrdiv">
                                        <a class="a" href="naac_card.php?id=cy2_card1" target="_blank">
                                            <div class="text_btnnew_txt"><?php echo $goals43['btn_nm']?></div>
                                        </a>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php   $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_econtent2'";
                                $result43=mysqli_query($conn, $sqlquery43);
                                $goals43 = $result43->fetch_assoc();
                        ?>
                        <div class="course-card">
                            <div class="course-name"><?php echo $goals43['title']?></div>
                            <div class="naac">
                                <div class="text_btnnew ">
                                    <div class="text_btnnew_innrdiv">
                                        <a class="a" href="naac_card.php?id=cy2_card2" target="_blank">
                                            <div class="text_btnnew_txt"><?php echo $goals43['btn_nm']?></div>
                                        </a>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <?php   $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_econtent3'";
                                $result43=mysqli_query($conn, $sqlquery43);
                                $goals43 = $result43->fetch_assoc();
                        ?>
                        <div class="course-card">
                            <div class="course-name"><?php echo $goals43['title']?></div>
                            <div class="naac">
                                <div class="text_btnnew ">
                                    <div class="text_btnnew_innrdiv">
                                        <a class="a" href="naac_card.php?id=cy2_card3" target="_blank">
                                            <div class="text_btnnew_txt"><?php echo $goals43['btn_nm']?></div>
                                        </a>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php   $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_econtent4'";
                                $result43=mysqli_query($conn, $sqlquery43);
                                $goals43 = $result43->fetch_assoc();
                        ?>
                        <div class="course-card">
                            <div class="course-name"><?php echo $goals43['title']?></div>
                            <div class="naac">
                                <div class="text_btnnew ">
                                    <div class="text_btnnew_innrdiv">
                                        <a class="a" href="naac_card.php?id=cy2_card4" target="_blank">
                                            <div class="text_btnnew_txt"><?php echo $goals43['btn_nm']?></div>
                                        </a>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="depresearchproj_outdiv">
                        <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;
                                        gap: var(--Spacing-Spacing-xl, 25px);">
                            <div class="lib-committe-btn">
                                <button class="cta_button_primary Ss-btn_txt" onclick="window.open('<?php echo $goals51['btn1_hlink']?>', '_self')">
                                    <?php echo $goals51['btn_nm1']?>
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
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--E-Content Ends here-->
                <!--OtherJournals starts here-->
                <div class="subsection">
                    <?php  $sqlquery51="SELECT * FROM  sections  where id='lib_resources_others'";
                        $result51=mysqli_query($conn, $sqlquery51);
                        $goals51= $result51->fetch_assoc();?>
                    <header class="resourcessection-header">
                        <h2 class="resourcessection-title"><?php echo $goals51['title']; ?></h2>
                    </header>
                    <div class="course-cards naac">
                        <div class="course-card">
                            <?php   $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_others1'";
                                    $result43=mysqli_query($conn, $sqlquery43);
                                    $goals43 = $result43->fetch_assoc();
                            ?>
                            <div class="course-name"><?php echo $goals43['title']?></div>
                            <div class="naac">
                                <div class="text_btnnew ">
                                    <div class="text_btnnew_innrdiv">
                                        <a class="a" href="naac_card.php?id=cy2_card1" target="_blank">
                                            <div class="text_btnnew_txt"><?php echo $goals43['btn_nm']?></div>
                                        </a>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-card">
                            <?php   $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_others2'";
                                    $result43=mysqli_query($conn, $sqlquery43);
                                    $goals43 = $result43->fetch_assoc();
                            ?>
                            <div class="course-name"><?php echo $goals43['title']?></div>
                            <div class="naac">
                                <div class="text_btnnew ">
                                    <div class="text_btnnew_innrdiv">
                                        <a class="a" href="naac_card.php?id=cy2_card2" target="_blank">
                                            <div class="text_btnnew_txt"><?php echo $goals43['btn_nm']?></div>
                                        </a>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-card">
                            <?php   $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_others3'";
                                    $result43=mysqli_query($conn, $sqlquery43);
                                    $goals43 = $result43->fetch_assoc();
                            ?>
                            <div class="course-name"><?php echo $goals43['title']?></div>
                            <div class="naac">
                                <div class="text_btnnew ">
                                    <div class="text_btnnew_innrdiv">
                                        <a class="a" href="naac_card.php?id=cy2_card3" target="_blank">
                                            <div class="text_btnnew_txt"><?php echo $goals43['btn_nm']?></div>
                                        </a>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-card">
                            <?php   $sqlquery43 ="SELECT * FROM  cards  where id='lib_sec5_others4'";
                                    $result43=mysqli_query($conn, $sqlquery43);
                                    $goals43 = $result43->fetch_assoc();
                            ?>
                            <div class="course-name"><?php echo $goals43['title']?></div>
                            <div class="naac">
                                <div class="text_btnnew ">
                                    <div class="text_btnnew_innrdiv">
                                        <a class="a" href="naac_card.php?id=cy2_card4" target="_blank">
                                            <div class="text_btnnew_txt"><?php echo $goals43['btn_nm']?></div>
                                        </a>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="depresearchproj_outdiv">
                        <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;
                                gap: var(--Spacing-Spacing-xl, 25px);">
                                <div class="lib-committe-btn">
                                    <button class="cta_button_primary Ss-btn_txt" onclick="window.open('<?php echo $goals51['btn1_hlink']?>', '_self')">
                                        <?php echo $goals51['btn_nm1']?>
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
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
                <!--Other Journals Ends here-->
            </div>
            <!-- resources ends here -->
            <!-- Automation -->
            <div class="Automation">
                <div class="lib-automation">
                        <div class="lib-automation-left">
                            <div class="lib-automation-title section-title">Library Automation</div>
                            <div class="lib-automation-desc">The automation system indigenously developed by engineering students of the institute (2005-'06 Batch -B.Srinivasa Rao, P.Venkata Vinay Kumar, K.Bhargava Phani, Y.Bala Krishna under the guidance of Mr.K.V.K.Kishore) reduces congestion at the counters during the peak hours of the college and helps in the efficient management of library procedures. This frees the library personnel from routine and mundane tasks so that they can concentrate on providing better service to the subscribers. The surveillance system with its randomly timed video footing helps to control pilferage of library resources like,  Acquisition, Cataloguing, Circulation, Serial control, Late fine collection, Online opinion poll, Order processing, Usage statistics, OPAC etc.</div>
                        </div>
                        <div class="lib-automation_div3">
                            <div class="lib-automation_circle">
                                <?php  
                                $sqlquery2_2 ="SELECT * FROM  stats  where id='lib_inaug'";
                                $result2_2=mysqli_query($conn, $sqlquery2_2);
                                $goals2_2 = $result2_2->fetch_assoc();
                                ?>
                                <div class="lib-automation_circle_txtdiv">
                                    <div class="lib-automation_circle_txt">2005</div>
                                    <div class="lib-automation_circle_title">YEAR OF DEVELOPMENT</div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- Automation ends -->
             <!--FAQs starts-->
            <div class="FAQ">
                <div class="Frequently-asked-questions-component">
                    <div class="Frequently-asked-questions-component-title">
                        How Do I?
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" style="background-color: transparent">
                            <div class="panel-heading" role="tab" id="headingOne" style="background-color: transparent">
                                <h4 class="panel-title">
                                    <a class="question" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. How do I become a member of the Library ?
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
                                Vignan's University faculty, students, and staff are bona-fide members and no other formality is required. As soon as you get your ID card, please visit the library once to activate your membership.
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
                                        2. How do I search books ?
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
                                        3. What is OPAC ?
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
                                        4. How do I Know what e-books are available / accessible to VU users ?
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
                                        5. How do I Borrow books ?
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
            </div>
            <!-- Rules starts-->
            <div class="Rules">
                <?php  $sqlquery2 ="SELECT * FROM  sections  where id='lib_rules'";
                    $result2=mysqli_query($conn, $sqlquery2);
                    $goals2 = $result2->fetch_assoc();
                ?>
                <!-- <div class="newstudent-div-space"> -->
                <div class="lib-research">
                    <div class="librules-main">
                        <div class="lib-content">
                            <div class="librules-tnc">
                                <div class="librules1-researchtitle">
                                <?php echo $goals2['title']?>
                                </div>
                            </div>
                        </div>
                        <div class="librules-maindiv"> 
                            <div class="librules-div">
                                <div class="librules-divcontent">   
                                    <div class="librules-researchtitle">
                                    <?php echo $goals2['subsec1_title']?>
                                    </div>
                                    
                                    <div class="librules-tcontent">
                                    <?php echo $goals2['subsec1_desc']?>
                                    </div>

                                    <div class="librules-researchtitle">
                                    <?php echo $goals2['subsec2_title']?>
                                    </div>
                                    
                                    <div class="librules-tcontent">
                                    <?php echo $goals2['subsec2_desc']?>
                                    </div>
                                    <div class="librules-researchtitle">
                                    <?php echo $goals2['subsec3_title']?>
                                    </div>
                                    
                                    <div class="librules-tcontent">
                                    <?php echo $goals2['subsec3_desc']?>
                                    </div>
                                </div>
                                <div class="col-lg-22" style="">
                                    <button class="cta_button_secondary Secondary-btn_txt" data-toggle="modal" data-target="#overlay2"><?php echo $goals2['btn_nm1']?><img
                                        src="assets/icons/arrow_forward.png" /></button>
                                </div>
                            </div>
                            <div class="BillBoardImg">
                                <img
                                    src="<?php echo $goals2['img1']?>"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--Rules ends-->
        <!--Contactus startshere-->
            <div class="ContactUS">
                <?php
                    $sql = "Select * FROM contactus";
                    $result = $conn->query($sql);
                ?>
                <?php 
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    if($row['Id']=='lib_contact_1'){
                ?>
                <section class="contact-container">
                    <div class="contact-content">
                        <div class="contact-info">
                            <section class="contact-section">
                                <h1 class="section-title"><?php echo $row['title']?></h1>
                                <p style="font-size:16px;"> NTR Memorial Library is kept open on 325 days in a year. </br>
                                Changes in Timings during the vacation period will be informed on the Library Notice Board and through circular</p>
                                <div class="officer-cards">
                                    <div class="officer-list">
                                        <div class="officer-item">
                                            <div class="officer-card">
                                                <img loading="lazy" src="<?php echo $row['img']?>" alt="Dr. Y. Ravisekhar" class="officer-img" />
                                                <div class="officer-details">
                                                    <p class="officer-name"><?php echo $row['name']?></p>
                                                    <p class="officer-role"><?php echo $row['designation']?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }
                                                else if($row['Id']=='lib_contact_2'){
                                        ?>
                                        <div class="officer-item">
                                            <div class="officer-card">
                                                <img loading="lazy" src="<?php echo $row['img']?>" alt="Smt. A. Rajani Kumari" class="officer-img" />
                                                <div class="officer-details">
                                                    <p class="officer-name"><?php echo $row['name']?></p>
                                                    <p class="officer-role"><?php echo $row['designation']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <?php
                        }}}?>
                        <?php
                            $sql = "Select * FROM contactus";
                            $result = $conn->query($sql);
                        ?>
                        <?php 
                            if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                            if($row['Id']=='lib_contact_1'){
                        ?>
                        <aside class="contact-info-column">
                            <div class="contact-info-wrapper">
                                <h2 class="contact-info-title"><?php echo $row['subsec']?></h2>
                                <p class="contact-info-item">Dean<br /> </p>
                                <p class="contact-info-email"><?php echo $row['email']?></p>
                                <?php $mob = $row['mobno']; }
                                    else if($row['Id']=='lib_contact_2'){
                                ?>
                                <p class="contact-info-item">Librarian<br /> 
                                </p>
                                <p class="contact-info-email"><?php echo $row['email']?></p>
                                <?php $mob2 = $row['mobno'];?>
                            </div>
                            <div class="contact-info-wrapper">
                                <h2 class="contact-info-title">Phone</h2>
                                <p class="contact-info-email"><?php echo $mob?><br><?php echo $mob2?></p>
                            </div>
                            <div class="contact-info-wrapper">
                                <h2 class="contact-info-title">Timings</h2>
                                <p class="contact-info-email">Working Days : 7am - 10pm <br /> Issue Timings : 8am - 6pm <br /> Holidays           : 10am - 5pm</p>
                            </div>
                        </aside>
                    </div>
                </section>
                <?php }}}?>
            </div>
            <!--contactus ends here-->
            </div>           
            <!--footer--> 
            <div id="mblftr">
                <?php
                include_once  'mblfooter.php';
                ?>
            </div>
            <div id="ftr">
                <div class="footer-cover">
                    <?php
                    include_once  'footer.php';
                    ?>
                </div>
            </div>
        </div>
        <!-- Overview Overlay starts-->  
  <div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="overlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="modal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="filter-modaltitle" id="modalLabel">Library</h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body mbcontent-mob">
          <div class="content1">
            <div class="p">
                The Central library at Vignan’s University, inaugurated in the year of 2005 by the Coal and Mines Minister, Govt. of India, Sri. Dasari Narayana Rao has an exclusive user friendly and comfort oriented infrastructure, which is spread over a space of about 2951 Sqm. It is an air conditioned, aesthetically designed facility with plenty of indoor greenery, modern furniture and reprographic conveniences. There are separate enclaves for individual and group study. Students and staff can avail the library from 7.30 AM to 10.00 PM everyday and refer to a wide variety of resources, apart from the books relevant to their curriculum, like a rich collection of titles and journals useful for general study and research
                <br><br>
                <h4>Ground Floor</h4>
                The ground floor of the library is spread over a floor space of about 1500 sqm. It has a lounge area for relaxed reading, text book reference, stock area of issue books of all departments, Thesis, Question Papers, Journals back volumes etc.   
                <br>The library also has separate display racks for National and international print journals, magazines separate reading area for news papers.
                <br>The library circulation section issues renewals and returns more than 1000 on a daily basis with more than 1100 students and staff utilizing the library services daily. It has an Online Public Access Catalogue (OPAC) technology to facilitate for user friendly, quick and easy search facility for the students and faculty.
                <br><br>
                <h4>First Floor</h4>
              The library first floor is spread over a space of 1475 Sqm. It has a separate General Reference, Research Carrels, Digital library, Video conference room, Exclusive section for civil services aspirants, group discussion rooms, etc.
              <br><br>
              <h4>General Reference Section</h4>
              The air conditioned General Reference section with 700 separate volumes and materials for preparation of GRE, CAT, TOEFL, IELTS, GATE, Encyclopedias, etc with 56 seating capacity.
              <br><br>
              <h4>Civil Services Aspirants</h4>
              The first floor also has an air conditioned exclusive section with 3055 separate volumes and materials (Philosophy, IAS, and IES & NECERT) for the preparation of Civil Services and other competitive examinations.
              <br><br>
              <h4>Video Conference Hall</h4>
              NTR Vignan Library has a separate air conditional video conference hall for conducting extension, career guidance and motivation sessions for the library user community. It has 339 video lectures and NPTEL Videos covered different subject areas with capacity of 100 seating.
                <br><br>
                <h4>Research Carrels</h4>
                The separate air conditioned facility, i.e. research carrels on the first floor of the library has 54 individual cabins with 2000 separate volumes for research scholars of different fields of research areas.
            <br><br>
            <h4>Digital Library</h4>
                The first floor of the NTR Vignan Library has a separate Digital Library of about 50 systems with a configuration of 30mbps speed offering access to the 2922 online journals ranging from IEEE,  ASME, ASCE, SPRINGERLINK, EBSCO, JSTOR, DOAJ (worth of 60,000 Lakhs per annum)  multi users at a time in addition other social network sites.
                <br><br>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Overview overlay ends -->
   <!-- iqac_aaa_card2 overlay starts -->
  <?php
  $sql = "SELECT * FROM  cards  where id='lib_copyrights&guidelines'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="modal fade" id="overlay2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="liboverlay-dialog od" role="document">
      <div class="filter-modal_content">
        <div class="libmodal-header overlaymodal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/icons/cross_big.png">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
          <div class="steps-head">
            <h4 class="libfilter-modaltitle" id="modalLabel"><?php echo $row['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body overlaymodal-body mbcontent-mob">
          <div class="content2">
            <div class="p">
              <?php
              echo $row['descr'];

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