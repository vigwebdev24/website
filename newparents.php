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
    <link rel="stylesheet" href="css/newparent.css">
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


$sqlquery1 ="SELECT * FROM  sections  where id='newpar_hero'";

$result=mysqli_query($conn, $sqlquery1);
$hero= $result->fetch_assoc(); 
?>
    <div class="container home-div1 ">
        <div class="newstudent-div-space">
            <div class="">
                <div class="ulife-div-19">
                    <div class="ulife-div-20">
                        <div class="ulife-column">
                            <div class="ulife-div-21">
                                <div class="ulife-div-22"><?php echo $hero['title']; ?></div>
                                <div class="ulife-div-23">
                                    <?php echo $hero['descr']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="ulife-column-2">
                            <div class="ulife-div-24">
                                <img loading="lazy" src="  <?php echo $hero['img1']; ?>" alt="image"
                                    class="ulife-img-5" />
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <!-- overview starts here -->

            <?php 
$sqlquery2 ="SELECT * FROM  sections  where id='newpar_overview'";

$result=mysqli_query($conn, $sqlquery2);
$overview= $result->fetch_assoc(); 

$sqlquery3 ="SELECT * FROM  stats  where id='newpar_legacy'";

$result=mysqli_query($conn, $sqlquery3);
$legacy= $result->fetch_assoc(); 

$sqlquery4 ="SELECT * FROM  stats  where id='newpar_package'";

$result=mysqli_query($conn, $sqlquery4);
$package= $result->fetch_assoc(); 

$sqlquery5 ="SELECT * FROM  stats  where id='newpar_nirf'";

$result=mysqli_query($conn, $sqlquery5);
$nirf= $result->fetch_assoc(); 
?>
            <div class="home-research" style="margin-top:0;">
                <div class="home-researchdiv">

                    <div class="home-research_innrdiv">
                        <div class="home-researchtitle"><?php echo $overview['title']; ?></div>
                        <div class="home-researchdiv1">

                            <div class="home-researchtxt">
                            <?php echo $overview['descr']; ?>
                            </div>

                            <div class="text_btnnew viewall-right" onclick="window.open('#',  '_blank')">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                    <?php echo $overview['btn_nm1']; ?>
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="home-reseachcountdiv">
                        <div class="home-reseachcount_innrdiv">
                            <div class="home-reseachcount">
                            <?php echo $legacy['statvalue']; ?>

                            </div>
                            <div class="home-reseach_txt">   <?php echo $legacy['descr']; ?></div>
                        </div>
                        <div class="home-reseach_imgbdrdiv">
                            <svg class="home-reseach_img" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
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
                            <!--<img src="assets/icons/research.png" class="home-reseach_img" />-->
                            <div class="home-reseach_bdr"></div>
                        </div>
                    </div>
                    <div class="home-reseach_div3">
                        <div class="home-reseach_circle">
                            <div class="home-reseach_circle_txtdiv">
                                <div class="home-reseach_circle_txt" style="line-height: 42%;">   <?php echo $package['statvalue']; ?> <br><small
                                        class="home-reseach_circle_small">Lakhs</small>
                                </div>
                                <div class="home-reseach_circle_title">   <?php echo $package['descr']; ?></div>
                            </div>
                        </div>
                        <div class="home-reseach_square">
                            <div class="home-reseach_square_innrdiv">
                                <div class="home-reseach_square_content">
                                    <div class="home-reseach_square_txt">
                                    <?php echo $nirf['statvalue']; ?>
                                        <!-- <small class="home-reseach_circle_small">+</small>-->
                                    </div>
                                    <div class="home-reseach_square_title">
                                    <?php echo $nirf['descr']; ?>

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
            <!-- overview ends here -->

            <!-- honor our roots starts here -->
            <?php
 $sqlquery16="SELECT * FROM  sections  where id='home_felictation'";

$result=mysqli_query($conn, $sqlquery16);
$felictation = $result->fetch_assoc();
?>

            <div class="home-facilities divmargin-top10" style="margin-top:0;">
                <div class="home-goodfood_innrdiv">
                    <div class="home_goalstitle"><?php echo $felictation['title']; ?></div>
                    <div><img style="width:100%;" src=" <?php echo $felictation['img1']; ?>" /></div>
                    <div class="home-goodfood_txt" style="font-size:16px;">
                        <?php echo $felictation['descr']; ?>

                    </div>
                </div>
                <div><img style="width:100%;" class="honor-img2" src="<?php echo $felictation['img2']; ?>" /></div>
                <div class="home-goodfood_div2 btnnone elementnone-mbl">
                    <div><img class="home-goodfood_img3" src="<?php echo $felictation['img3']; ?>" /></div>



                </div>



            </div>
            <!-- honor our roots ends here -->

            <!-- where do students go starts here -->
            <?php
 $sqlquery6="SELECT * FROM  sections  where id='newpar_whrdostugo'";

$result=mysqli_query($conn, $sqlquery6);
$wheredo = $result->fetch_assoc();


$sqlquery7="SELECT * FROM  cards  where id='newpar_joincmpny'";

$result=mysqli_query($conn, $sqlquery7);
$joincmpny = $result->fetch_assoc();

$sqlquery8="SELECT * FROM  cards  where id like 'newpar%' and sequence > 1 order by sequence ";

$cards=mysqli_query($conn, $sqlquery8);
//$cards = $result->fetch_assoc();
?>
            <div class="whr_do_stu_go">

                <div class="whr_do_stu_go_upperdiv">
                    <div class="whr_do_stu_go_upperdiv_leftsec">

                        <div class="whr_do_stu_go_title">
                        <?php echo $wheredo['title']; ?>
                        </div>

                        <div class="whr_do_stu_go_desc">
                        <?php echo $wheredo['descr']; ?>
                        </div>

                        <div class="whr_do_stu_go_cmpnydiv">
                            <img src="assets/images/tcs.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="assets/images/ibm.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="assets/images/Congnizant.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="assets/images/infosys.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="assets/images/wipro.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="assets/images/Hexaware.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="assets/images/Samsung.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="assets/images/DBS.svg" class="whr_do_stu_go_cmpnyimg" />
                        </div>


                    </div>

                    <!-- <div style="display: flex;align-items: flex-start;gap: var(--Spacing-Spacing-xl, 25px);"></div> -->
                    <div class="whr_do_stu_go_upperdiv_rghtsec">
                        <div class="whr_do_stu_go_upper_rgt_innrdiv">

                            <div class="whr_do_stu_go_title">   <?php echo $joincmpny['title']; ?></div>

                            <div class="whr_do_stu_go_upper_rgt_txt">
                                <div class="whr_do_stu_go_joincmpny">
                                <?php echo $joincmpny['subtitle']; ?>
                                </div>

                                <div class="whr_do_stu_go_desc">
                                <?php echo $joincmpny['descr']; ?>
                                </div>
                            </div>

                            <div class="text_btnnew">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                    <?php echo $joincmpny['btn_nm']; ?>
                                    </div>
                                    <div>
                                        <img src="assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="whr_do_stu_go_lowerdiv">
                <?php  if(mysqli_num_rows($cards) > 0){
                while ($info = $cards->fetch_assoc()) {  ?>
                <div class="whr_do_stu_go_crd_outrdiv">
                        <div class="whr_do_stu_go_crd_innrdiv">


                            <div class="whr_do_stu_go_title"> <?php echo $info['title']; ?></div>

                            <div class="whr_do_stu_go_upper_rgt_txt">
                                <div class="whr_do_stu_go_joincmpny">
                                   <?php echo $info['subtitle']; ?>
                                </div>

                                <div class=whr_do_stu_go_desc">
                                <?php echo $info['descr']; ?>
                                </div>
                            </div>

                            <div class="text_btnnew">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        Read More
                                    </div>
                                    <div>
                                        <img src="assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <?php     } }?>
                    <!-- <div class="whr_do_stu_go_crd_outrdiv">
                        <div class="whr_do_stu_go_crd_innrdiv">


                            <div class="whr_do_stu_go_title">10-15%</div>

                            <div class="whr_do_stu_go_upper_rgt_txt">
                                <div class="whr_do_stu_go_joincmpny">
                                    Go For Higher Education
                                </div>

                                <div class=whr_do_stu_go_desc">
                                    Opting for higher education opens a gateway to specialised knowledge and advanced
                                    skills, propelling your career to new heights
                                </div>
                            </div>

                            <div class="text_btnnew">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        Read More
                                    </div>
                                    <div>
                                        <img src="assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>



                    <div class="whr_do_stu_go_crd_outrdiv">
                        <div class="whr_do_stu_go_crd_innrdiv">


                            <div class="whr_do_stu_go_title">02%</div>

                            <div class="whr_do_stu_go_upper_rgt_txt">
                                <div class="whr_do_stu_go_joincmpny">
                                    Choose Academia and Research
                                </div>

                                <div class="whr_do_stu_go_desc">
                                    Opting for higher education opens a gateway to specialised knowledge and advanced
                                    skills, propelling your career to new heights
                                </div>
                            </div>

                            <div class="text_btnnew">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        Read More
                                    </div>
                                    <div>
                                        <img src="assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>



                    <div class="whr_do_stu_go_crd_outrdiv">
                        <div class="whr_do_stu_go_crd_innrdiv">


                            <div class="whr_do_stu_go_title">02%</div>

                            <div class="whr_do_stu_go_upper_rgt_txt">
                                <div class="whr_do_stu_go_joincmpny">
                                    Become Entrepreneurs & Consults
                                </div>

                                <div class="whr_do_stu_go_desc">
                                    Opting for higher education opens a gateway to specialised knowledge and advanced
                                    skills, propelling your career to new heights
                                </div>
                            </div>

                            <div class="text_btnnew">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        Read More
                                    </div>
                                    <div>
                                        <img src="assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div> -->






                </div>

            </div>




            <!-- where do students go ends here -->

            <!-- good food starts here -->

            <?php 

$sqlquery7 ="SELECT * FROM  sections  where id='home_goodfood'";

$result=mysqli_query($conn, $sqlquery7);
$goodfood = $result->fetch_assoc();

?>
            <div class="home-facilities" style="margin-top:0;">
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

            <!-- good food ends here -->


            <!-- emotional starts here -->
            <?php
 $sqlquery15="SELECT * FROM  sections  where id='newpar_emotional'";

$result=mysqli_query($conn, $sqlquery15);
$emotional = $result->fetch_assoc();
?>


            <div class="home-emational_div" style="margin-top:0;">
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
                            <button class="cta_button_primary Ss-btn_txt btnnone"
                                onclick="window.open('<?php echo $emotional['btn1_hlink']; ?>',  '_blank')">
                                <?php echo $emotional['btn_nm1'] ?>
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
                                <!-- <img src="assets/icons/Button_forwardarrow.png" class="btn_arrow" />-->
                            </button>
                        </div>

                        <div class="btnnone-mbl">
                            <button class="cta_button_primary Ss-btn_txt  explore"
                                onclick="window.open('<?php echo $emotional['btn2_hlink']; ?>',  '_blank')">
                                <?php echo $emotional['btn_nm2'] ?>
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

                                <!--<img src="assets/icons/Button_forwardarrow.png" class="explore-icon" />-->
                            </button>
                        </div>

                    </div>

                </div>
                <div>
                    <img class="home-emational_div2img" src="<?php echo  $emotional['img1'];?>" />
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
                                <button class="cta_button_primary Ss-btn_txt btnnone"
                                    onclick="window.open('<?php echo $emotional['btn2_hlink']; ?>',  '_blank')">
                                    <?php echo $emotional['btn_nm2'] ?>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="-2" y="-2" width="24" height="24">
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
                    <div>
                        <img src="<?php echo  $emotional['img2'];?>" class="home-emational_subdivimg2" />
                    </div>

                    <div class="btnnone-mbl">
                        <button class="cta_button_primary Ss-btn_txt  explore"
                            onclick="window.open('<?php echo $emotional['btn2_hlink']; ?>',  '_blank')">
                            <?php echo $emotional['btn_nm2'] ?>
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
                        </button>
                    </div>
                </div>
            </div>
            <!-- emotional ends here -->


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

            <!-- what people say starts here -->

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
                                    <img src="./assets/icons/DoubleQuoateIconMaroon.svg" alt="Avatar"
                                        class="testimonial-avatar" />
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
                        <img src="./assets/icons/DoubleQuoateIconMaroon.svg" alt="Testimonial author Kunita Rao"
                            class="testimonial-image-mobile" />
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
            <!-- what people say ends here -->


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


            <!-- bank loans start here -->

            <?php 
      
      $sql = "SELECT * FROM `sections` WHERE `id` = 'Admissions_Bank Loans';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
          ?>
            <section class="bank-loans-section" style="margin-top:0;">
                <div class="bank-loans-container">
                    <div class="bank-loans-column">
                        <div class="bank-loans-content">
                            <h2 class="bank-loans-heading"><?php echo $row['title']; ?></h2>
                            <div class="bank-loans-description">
                                <p class="bank-loans-text">
                                    <?php echo $row['descr']; ?>
                                </p>
                                <div class="text_btnnew scholarship-cta"
                                    onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
                                    <div class="text_btnnew_innrdiv">
                                        <div class="text_btnnew_txt">
                                            <?php echo $row['btn_nm1']; ?>
                                        </div>
                                        <div>
                                            <img src="assets/svgicons/outwardarrow_brown.svg"
                                                style="width: 16px;height: 16px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bank-logos-column">
                        <div class="bank-logos-container">

                            <!--  -->
                            <img src="./assets/icons/SBIBankIcon.svg" alt="Bank logo 1" class="bank-logo" />
                            <img src="./assets/icons/SouthIndianBankIcon.svg" alt="Bank logo 2" class="bank-logo" />
                            <img src="./assets/icons/ICICIBankIcon.svg" alt="Bank logo 3" class="bank-logo" />
                            <img src="./assets/icons/BankOfBarodaIcon.svg" alt="Bank logo 4" class="bank-logo" />
                            <img src="./assets/icons/CanaraBankIcon.svg" alt="Bank logo 5" class="bank-logo" />
                            <img src="./assets/icons/BankOfBarodaIcon.svg" alt="Bank logo 6" class="bank-logo" />

                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
      }
      ?>

            <!-- bank loans ends here -->




            <!-- safety and security starts here -->
            <?php
 $sqlquery9="SELECT * FROM  sections  where id='newpar_safety'";

$result=mysqli_query($conn, $sqlquery9);
$safety = $result->fetch_assoc();
?>

            <div class="home-facilities divmargin-top10" style="margin-top:0; align-items: end;">
                <div class="home-goodfood_innrdiv">
                    <div class="home_goalstitle"><?php echo $safety['title']; ?></div>
                    <div><img style="width:100%;" src="<?php echo $safety['img1']; ?>" /></div>
                    <div class="home-goodfood_txt" style="font-size:16px;">
                    <?php echo $safety['descr']; ?>

                    </div>
                </div>
                <div><img style="width:100%;" class="honor-img2" src="<?php echo $safety['img2']; ?>" /></div>
                <div class="home-goodfood_div2 btnnone elementnone-mbl">
                    <div><img class="home-goodfood_img3" src="<?php echo $safety['img3']; ?>" /></div>



                </div>



            </div>
            <!-- safety and security ends here -->



            <!-- alumni starts here -->
            <?php
 $sqlquery14="SELECT * FROM  sections  where id='newpar_alumni'";

$result=mysqli_query($conn, $sqlquery14);
$alumni = $result->fetch_assoc();
?>
            <div class="home-renowed_div1_title btnnone-mbl">
                Alumni Hall of Fame
            </div>
            <div class="home-renowed" style="margin-top:0;">

                <div class="home-renowed_div1">
                    <div class="home-renowed_div1_title btnnone">
                        <?php echo $alumni['title']; ?>
                    </div>
                    <img class="imgwidth" src="<?php echo $alumni['img1'];?>" />
                </div>
                <div>
                    <img class="home-renowed_div2img" src="<?php echo $alumni['img2'];?>" />

                </div>
                <div class="home-renowed_div3">
                    <img src="<?php echo $alumni['img3'];?>" class="home-renowed_div3img" />
                    <div class="home-renowed_div3txtbtn btnnone">
                        <div class="home-renowed_div3txtbtn ">
                            <?php echo $alumni['descr']; ?>

                        </div>
                        <!-- <div> <button class="cta_button_primary Ss-btn_txt">Explore More
                            <img src="assets/icons/Button_forwardarrow.png" class="btn_arrow" /></button></div>-->
                        <div class="">
                            <button class="cta_button_primary Ss-btn_txt btnnone"
                                onclick="window.open('<?php echo $alumni['btn1_hlink']; ?>',  '_blank')">
                                <?php echo $alumni['btn_nm1']; ?>
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
                                <!-- <img src="assets/icons/Button_forwardarrow.png" class="btn_arrow" />-->
                            </button>
                        </div>


                        <!-- <div class="width100 btnnone-mbl">
                    <button class="cta_button_primary Ss-btn_txt  explore width100" onclick="window.open('<?php echo $alumni['btn1_hlink']; ?>',  '_blank')">
                    <?php echo $alumni['btn_nm1']; ?>
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
                        <!--<img src="assets/icons/Button_forwardarrow.png" class="explore-icon" />
                    </button>
                </div> -->
                    </div>
                </div>
                <div>
                    <img class="home-renowed_div4img" src="<?php echo $alumni['img4'];?>" />
                </div>
            </div>

            <div class="home-renowed_div3txtbtn btnnone-mbl">
                <div class="home-renowed_div3txt ">
                    <?php echo $alumni['descr']; ?>
                </div>


                <div class="width100 btnnone-mbl">
                    <button class="cta_button_primary Ss-btn_txt  explore"
                        onclick="window.open('<?php echo $alumni['btn1_hlink']; ?>',  '_blank')">
                        <?php echo $alumni['btn_nm1']; ?>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2"
                                width="24" height="24">
                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9"></rect>
                            </mask>
                            <g mask="url(#mask0_2961_1144)">
                                <path
                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                    fill="#F2F1ED"></path>
                            </g>
                        </svg>
                        <!--<img src="assets/icons/Button_forwardarrow.png" class="explore-icon" />-->
                    </button>
                </div>
            </div>

            <!-- alumni ends here -->

            <!-- Footer starts here -->
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

            <!-- Footer ends here -->


        </div>



    </div>

</body>
<script src="js/common.js"></script>

</html>