<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vignan University</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/exam.css">
    <link rel="stylesheet" href="css/uniresearch.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/u-life.css">
    <link rel="stylesheet" href="css/newstudent.css">
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
.bsn1 {
    display: flex;
    width: 170px;
    height: 52px;
    padding: var(--Numbers-6, 16px);
    justify-content: center;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
    border-radius: var(--Numbers-12, 61px);
    border: 1px solid var(--Colors-Buttons-Primary-Button-Text, #F2F1ED);
    position: relative;
    top: 38px;
    left: 1050px;
    font-family: "Familjen Grotesk";
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 100%;
    /* 20px */
}

.bsn2 {
    display: inline-flex;
    padding: var(--Numbers-6, 16px) var(--Numbers-6, 16px) var(--Numbers-6, 16px) var(--Numbers-9, 31px);
    align-items: center;
    gap: 10px;
    border-radius: var(--Numbers-12, 61px);
    background: var(--Colors-Buttons-Primary-Button, #992E00);
    position: absolute;
    top: 275px;
    left: 1040px;
}
.rot {
    width: 1575px !important;
    height: auto;
    /* transform: rotate(-90deg); */
    background: rgba(0, 0, 0, 0.56);
    flex-shrink: 0;
}
/* @media (max-width: 768px) {
    .faqt1{
        font-size: 40px !important;
        margin-left: 200px;
    }
    .applytitle {
        margin-top: 20px;
        margin-left: 200px;
        font-family: "DM Serif Display";
    font-size: 20px;
    font-style: normal;
    }
    .appmed1 {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        margin-left: 0px;
        margin-top: 30px;
    }
    .applytitle .bsn1{
        margin-left: -1050px !important;
    }
    .applytitle .bsn2{
        margin-left: -840px !important;
        margin-top: 10px !important;
    }
}
    @media (max-width: 1200px) {
        .rot {
    width: 91% !important;
    height: auto;
    background: rgba(0, 0, 0, 0.56);
    flex-shrink: 0;
}
    .text_btnnew_innrdiv img {
        width: 24px !important; 
        height: 24px !important; 
    }

    .text_btnnew {
        flex-direction: column !important;
        align-items: flex-start !important;
    }

    .text_btnnew_txt {
        margin-bottom: 8px !important;
    }

    .pabinn {
        margin-bottom: 40px !important; 
    }

    .pabframe {
        display: flex !important;
        flex-direction: column !important;
    }

    .pabinn {
        width: 100% !important;
    }
} */
 /* Media query for screen size 1200px or less */
@media (max-width: 1200px) {
    .rot {
        width: 91% !important;
        height: auto;
        /* transform: rotate(-90deg); */
        background: rgba(0, 0, 0, 0.56);
        flex-shrink: 0;
    }
    .faqt1{
        font-size: 60px !important;
        margin-left: 230px;
    }
    .applytitle {
        margin-top: 20px;
        margin-left: 250px;
        font-family: "DM Serif Display";
        font-size: 20px;
        font-style: normal;
    }
    .appmed1 {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        margin-left: 0px;
        margin-top: 30px;
    }
    .applytitle .bsn1{
        margin-left: -150px !important;
    }
    .applytitle .bsn2{
        margin-left: -40px !important;
        margin-top: -50px !important;
    }
}

/* Media query for screen size 768px or less */
@media (max-width: 768px) {
    .faqt1{
        font-size: 40px !important;
        margin-left: 200px;
    }
    .applytitle {
        margin-top: 20px;
        margin-left: 200px;
        font-family: "DM Serif Display";
        font-size: 20px;
        font-style: normal;
    }
    .appmed1 {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        margin-left: 0px;
        margin-top: 30px;
    }
    .applytitle .bsn1{
        margin-left: -1050px !important;
    }
    .applytitle .bsn2{
        margin-left: -840px !important;
        margin-top: -45px !important;
    }
}


    /* adm end */
    @media (max-width: 768px) {
        .non-clk_brdr{
        flex: 0.8 1 0 !important;
        margin-right: -280px !important;
        margin-top: -18px !important;
        width: 20px !important;
        height: 20px !important;
    }
    .bord{
        flex: 0.6 1 0 !important;
        margin-right: -280px !important;
        margin-top: -18px !important;
        width: 20px !important;
        height: 20px !important;
    }
    
    .bord{
        flex: 0.4 1 0 !important;
        margin-right: -280px !important;
        margin-top: -18px !important;
        width: 20px !important;
        height: 20px !important;
    }
}

.home-emational_div3_subdivtitle{
  color: var(--Colors-Text-Color, #000);
                        font-family: DM Serif Display;
                        font-size: 40px !important;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 100%; /* 61px */
                        margin-top: -100px !important;
}

@media (min-width: 320px) and (max-width: 575.98px) {
    .home-emational_div3_subdivtitle {
        color: var(--Colors-Text-Color, #000);
        font-family: DM Serif Display;
        font-size: 20px !important;
    }
}

.home-emational_div2img{
  display: flex;
                    width: 400px;
                    height: 836px !important;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    /* margin-top: 50px !important; */
}
</style>

<body>
    <?php
        include_once 'connect.php';
        include_once  'navbar.php';
        $sqlquery1 ="SELECT * FROM  carousel  order by  slide asc";
        //-fluid home-contfld
        $result=mysqli_query($conn, $sqlquery1);
    
    ?>

    <div class="container home-div1">

        <!-- Start section 1 -->
            <?php  $sqlquery1 ="SELECT * FROM  sections  where id='unires_sec1'";

                $result1=mysqli_query($conn, $sqlquery1);
                $goals1 = $result1->fetch_assoc();
            ?>

        <div data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-innerhome">
                <div class="item active">
                    <div class="row" style="flex-shrink: 0;">
                        <!-- Content for the static slide -->
                        <div class="herosec-content">

                            <div>
                                <h1 class="herosec-bigtxt">
                                    <!-- Encourages,&nbsp;challenges,you to be inquisitive -->
                                    <?php echo $goals1['title']?> 
                                </h1>
                            </div>
                        </div>
                        <div class="img-div">
                            <img loading="lazy" src="<?php echo $goals1['img1']; ?>" class="herosec-img" />
                        </div>
                        <div class="herosec-content">
                            <div>
                                <h1 class="herosec-txt">
                                    <!-- A strong scientific spirit and commitment to innovation
                                    drive
                                    faculty and students at VFSTR University -->
                                    <?php echo $goals1['descr'];?>
                                </h1>
                            </div>
                        </div>
                        <div class="herosec-buttons">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End section 1 -->
        <div class="newstudent-div-space">



        <!-- Start section 2 overview-->
        <?php  $sqlquery2 ="SELECT * FROM  sections  where id='unires_sec2'";
            $result2=mysqli_query($conn, $sqlquery2);
            $goals2 = $result2->fetch_assoc();
        ?>
        <!-- <div class="newstudent-div-space"> -->
        <div class="home-research">
            <div class="overview-main" style="margin-bottom:150px;">
                <div class="ov-content">
                    <div class="ov-tnc">
                        <div class="home-researchtitle">
                        <?php echo $goals2['title']?>
                        </div>
                        
                        <div class="ov-tcontent">
                        <?php echo $goals2['descr']?>
                        </div>
                    </div>

                    
                    <div class="ov-tnb">
                        

                        <div class="text_btnnew viewall-right" onclick="window.open('<?php echo $goals2['btn1_hlink']?>', '_blank')">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt"><?php echo $goals2['btn_nm1']?></div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-reseachcountdiv">

                    <?php  $sqlquery2_1 ="SELECT * FROM  stats  where id='unires_pap'";
                        $result2_1=mysqli_query($conn, $sqlquery2_1);
                        $goals2_1 = $result2_1->fetch_assoc();
                    ?>
                    <div class="home-reseachcount_innrdiv">
                        <div class="home-reseachcount">
                        <?php echo $goals2_1['statvalue']?><small class="home-reseach_circle_small">+</small>
                        </div>
                        <div class="home-reseach_txt">
                        <?php echo $goals2_1['descr']?>
                        </div>
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
                    </div>
                </div>
                <div class="home-reseach_div3">
                    <div class="home-reseach_circle">
                        <?php  $sqlquery2_2 ="SELECT * FROM  stats  where id='unires_fun'";
                            $result2_2=mysqli_query($conn, $sqlquery2_2);
                            $goals2_2 = $result2_2->fetch_assoc();
                        ?>
                        <div class="home-reseach_circle_txtdiv">
                            <div class="home-reseach_circle_txt">
                            <?php echo $goals2_2['statvalue']?><small class="home-reseach_circle_small">cr</small>
                            </div>
                            <div class="home-reseach_circle_title">
                            <?php echo $goals2_2['descr']?>
                            </div>
                        </div>
                    </div>
                    <div class="home-reseach_square">
                        <div class="home-reseach_square_innrdiv">
                            <div class="home-reseach_square_content">
                                <?php  $sqlquery2_3 ="SELECT * FROM  stats  where id='unires_pat'";
                                    $result2_3=mysqli_query($conn, $sqlquery2_3);
                                    $goals2_3 = $result2_3->fetch_assoc();
                                ?>
                                <div class="home-reseach_square_txt">
                                <?php echo $goals2_3['statvalue']?><small class="home-reseach_circle_small">+</small>
                                </div>
                                <div class="home-reseach_square_title">
                                <?php echo $goals2_3['descr']?>
                                </div>
                            </div>
                            <div class="home-reseach_squareimgbdrdiv">
                                <img src="assets/svgicons/circlestar.svg" />
                                <div class="non-clk_brdr"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- space -->
        <!-- End  section 2 -->


        <!-- Start  section 3 xplore -->
        <?php  $sqlquery3 ="SELECT * FROM  sections  where id='unires_sec3'";
            $result3=mysqli_query($conn, $sqlquery3);
            $goals3 = $result3->fetch_assoc();
        ?>
        <div class="home-researchdiv" style="margin-bottom: 20px;">
            <!-- Start  section 3 -->
            <div class="eri-mainframe">
                <div class="eri-tnc">
                    <div class="eri-title">
                        <?php echo $goals3['title']?>
                    </div>
                    <div class="eri-content">
                    <?php echo $goals3['descr']?>
                    </div>
                </div>
                <div class="eri-images">
                    <div class="me1container">
                        <img src="<?php echo $goals3['img1']?>">
                    </div>
                    <div class="me2container">
                        <img src="<?php echo $goals3['img2']?>">
                    </div>
                </div>
            </div>
        </div>
     <!-- </div>  -->
     <!-- spacae closing -->
    
        <!-- Start  section 4 explore cards-->
        <?php  $sqlquery41 ="SELECT * FROM  cards  where id='unires_sec3_c1'";
            $result41=mysqli_query($conn, $sqlquery41);
            $goals41 = $result41->fetch_assoc();
        ?>
        <!-- <div class="mainresearch" style="margin-bottom: 80px;">
        
        </div> -->
        <!-- research projects starts here -->
    <!-- <div class="newstudent-div-space"> -->
        <div class="depresearchproj_outdiv" style="margin-bottom:150px;">
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
                                                
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                            <?php  $sqlquery42 ="SELECT * FROM  cards  where id='unires_sec3_c2'";
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
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php  $sqlquery43 ="SELECT * FROM  cards  where id='unires_sec3_c3'";
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
                                                <?php echo $goals43['btn_nm']?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                <?php  $sqlquery44 ="SELECT * FROM  cards  where id='unires_sec3_c4'";
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
                                                <?php echo $goals44['btn_nm']?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>
                    <button class="cta_button_primary Ss-btn_txt" style="margin-bottom: 30px;"" onclick="window.open('<?php echo $goals3['btn1_hlink']?>',  '_self')"><?php echo $goals3['btn_nm1']?>
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
            </div>
            <!-- research projects ends here -->
        
                
        
        <!-- -----------------End  section 3 --------------------->

 




        <!-- -----------------Start  section professors_leading_research_areas -section 4--------------------->
    
        <div class="home-researchdiv1" style="margin-bottom:150px;">
                <?php  $sqlquery4 ="SELECT * FROM  sections  where id='unires_sec4'";
                    $result4=mysqli_query($conn, $sqlquery4);
                    $goals4 = $result4->fetch_assoc();
                ?>
            <div class="home-researchtitle">
            <?php echo $goals4['title']?>
            </div>
            <!-- <div class="home-researchtxt"> -->

            <div class="profmain">
                <div class="prof">
                    <!-- all cards in this div  -->
                    <div class="profcard">
                            <?php  $sqlquery4c1 ="SELECT * FROM  cards  where id='unires_sec4_c1'";
                                $result4c1=mysqli_query($conn, $sqlquery4c1);
                                $goals4c1 = $result4c1->fetch_assoc();
                            ?>
                        <div class="profcard-image"><img src="assets/images/profl.webp" alt="Description of the image">
                        </div>
                        <div class="profcard-content">
                            <div class="profcard-name"><?php echo $goals4c1['title']?></div>
                            <!-- <div class="profcard-lead">Best Motivator</div> -->
                        </div>
                    </div>
                    <div class="profcard">
                            <?php  $sqlquery4c2 ="SELECT * FROM  cards  where id='unires_sec4_c2'";
                                $result4c2=mysqli_query($conn, $sqlquery4c2);
                                $goals4c2 = $result4c2->fetch_assoc();
                            ?>
                        <img src="assets/images/prof2.webp" class="profcard-image" alt="Description of the image">
                        <div class="profcard-content">
                            <div class="profcard-name"><?php echo $goals4c2['title']?></div>
                            <!-- <div class="profcard-lead">Best Leader</div> -->
                        </div>

                    </div>
                    <div class="profcard">
                            <?php  $sqlquery4c3 ="SELECT * FROM  cards  where id='unires_sec4_c3'";
                                $result4c3=mysqli_query($conn, $sqlquery4c3);
                                $goals4c3 = $result4c3->fetch_assoc();
                            ?>
                        <img src="assets/images/prof3.webp" class="profcard-image" alt="Description of the image">
                        <div class="profcard-content">
                            <div class="profcard-name"><?php echo $goals4c3['title']?></div>
                            <!-- <div class="profcard-lead">Best Leader</div> -->
                        </div>

                    </div>
                    <div class="profcard">
                            <?php  $sqlquery4c4 ="SELECT * FROM  cards  where id='unires_sec4_c4'";
                                $result4c4=mysqli_query($conn, $sqlquery4c4);
                                $goals4c4 = $result4c4->fetch_assoc();
                            ?>
                        <img src="assets/images/prof4.webp" class="profcard-image" alt="Description of the image">
                        <div class="profcard-content">
                            <div class="profcard-name"><?php echo $goals4c4['title']?></div>
                            <!-- <div class="profcard-lead">Best Leader</div> -->
                        </div>

                    </div>



                </div>
                <!-- </div> -->
                <!-- <div class="col-lg-offset-10" style="margin-top: -50px;">
                <button class="cta_button_primary Ss-btn_txt">view all<img
                        src="assets/icons/Button_forwardarrow_small.png" /></button>
            </div> -->
                <!-- <div class="col-lg-offset-10" style="margin-top: -50px;">
                    <button class="cta_button_primary Ss-btn_txt"
                        onclick="window.open('https://vignan.ac.in/bshresearch.php', '_blank')">view all<img
                            src="assets/icons/Button_forwardarrow.png" /></button>
                </div> -->

                <div class="div-w">
                    <button class="cta_button_primary Ss-btn_txt unire-btn"
                        onclick="window.open('<?php echo $goals4['btn1_hlink']?>', '_blank')"><?php echo $goals4['btn_nm1']?><img
                            src="assets/icons/Button_forwardarrow.png" /></button>
                </div>

            </div>
        </div>


        <!-- -----------------End  section professors_leading_research_areas --------------------->


        <!---------- New news What’s Up in Research. carusel starts---------------------------- -->


        <!-- New news What’s Up in Research. carousel ends -->


        <!-- -----------------Start  section Awards & Appreciations-section 6 --------------------->

        <div class="home-researchdiv1" style="margin-bottom:150px;">
                    <?php  $sqlquery6 ="SELECT * FROM  sections  where id='unires_sec6'";
                        $result6=mysqli_query($conn, $sqlquery6);
                        $goals6 = $result6->fetch_assoc();
                    ?>
            <div class="home-researchtitle">
            <?php echo $goals6['title']?>
            </div>
            <div class="profmain">
                <!-- <div class="home-researchtxt"> -->
                <div class="prof">
                    <!-- all cards in this div  -->
                            <?php  $sqlquery6c1 ="SELECT * FROM  cards  where id='unires_sec6_c1'";
                                $result6c1=mysqli_query($conn, $sqlquery6c1);
                                $goals6c1 = $result6c1->fetch_assoc();
                            ?>
                    <div class="profcard">
                        <img src="<?php echo $goals6c1['img']?>" class="profcard-image" alt="Description of the image">
                        <div class="profcard-content">
                            <div class="profcard-name"><?php echo $goals6c1['title']?></div>
                            <div class="profcard-lead"><?php echo $goals6c1['subtitle']?></div>
                        </div>

                    </div>
                    <div class="profcard">
                            <?php  $sqlquery6c2 ="SELECT * FROM  cards  where id='unires_sec6_c2'";
                                $result6c2=mysqli_query($conn, $sqlquery6c2);
                                $goals6c2 = $result6c2->fetch_assoc();
                            ?>
                        <img src="<?php echo $goals6c2['img']?>" class="profcard-image" alt="Description of the image">
                        <div class="profcard-content">
                            <div class="profcard-name"><?php echo $goals6c2['title']?></div>
                            <div class="profcard-lead"><?php echo $goals6c2['subtitle']?></div>
                        </div>

                    </div>
                    <div class="profcard">
                            <?php  $sqlquery6c3 ="SELECT * FROM  cards  where id='unires_sec6_c3'";
                                $result6c3=mysqli_query($conn, $sqlquery6c3);
                                $goals6c3 = $result6c3->fetch_assoc();
                            ?>
                        <img src="<?php echo $goals6c3['img']?>" class="profcard-image" alt="Description of the image">
                        <div class="profcard-content">
                            <div class="profcard-name"><?php echo $goals6c3['title']?></div>
                            <div class="profcard-lead"><?php echo $goals6c3['subtitle']?></div>
                        </div>

                    </div>
                    <div class="profcard">
                    <?php  $sqlquery6c4 ="SELECT * FROM  cards  where id='unires_sec6_c4'";
                                $result6c4=mysqli_query($conn, $sqlquery6c4);
                                $goals6c4 = $result6c4->fetch_assoc();
                            ?>
                        <img src="<?php echo $goals6c4['img']?>" class="profcard-image" alt="Description of the image">
                        <div class="profcard-content">
                            <div class="profcard-name"><?php echo $goals6c4['title']?></div>
                            <div class="profcard-lead"><?php echo $goals6c4['subtitle']?></div>
                        </div>

                    </div>



                </div>
                <!-- </div> -->
                <!-- <div class="col-lg-offset-10" style="margin-top: -50px;">
                <button class="cta_button_primary Ss-btn_txt">view all<img
                        src="assets/icons/Button_forwardarrow_small.png" /></button>
            </div> -->
                <!-- <div class="col-lg-offset-10" style="margin-top: -50px;">
                    <button class="cta_button_primary Ss-btn_txt"
                        onclick="window.open('https://vignan.ac.in/itachieve.php', '_blank')">view all<img
                            src="assets/icons/Button_forwardarrow.png" /></button>
                </div> -->
                <div class="div-w">
                    <button class="cta_button_primary Ss-btn_txt unire-btn"
                        onclick="window.open('<?php echo $goals6['btn1_hlink']?>', '_blank')"><?php echo $goals6['btn_nm1']?><img
                            src="assets/icons/Button_forwardarrow.png" /></button>
                </div>
            </div>
        </div>


        <!-- -----------------End  section Awards & Appreciations --------------------->
        <!-- -----------------Start  section Events --------------------->

        <div class="eventsmainframe" style="margin-bottom:20px;">
                            <?php  $sqlquery7 ="SELECT * FROM  sections  where id='unires_sec7'";
                                $result7=mysqli_query($conn, $sqlquery7);
                                $goals7 = $result7->fetch_assoc();
                            ?>
            <div class="eventstitle">
            <?php echo $goals7['title']?>
            </div>

            <div class="eventscardframe">
                <div class="eventscards">
                            <?php  $sqlquery71 ="SELECT * FROM  events  where id='unires_events1'";
                                $result71=mysqli_query($conn, $sqlquery71);
                                $goals71 = $result71->fetch_assoc();
                            ?>
                    <img src="<?php echo $goals71['img1']?>" class="event-image" alt="Description of the image">
                    <div class="event-content">
                        <div class="event-time"><?php echo $goals71['title']?></div>
                        <div class="event-title"><?php echo $goals71['descr']?></div>
                        <div class="event-by"><?php echo $goals71['caption']?></div>
                    </div>
                </div>
                <div class="eventscards">
                    <img src="<?php echo $goals71['img2']?>" class="event-image" alt="Description of the image">
                    <div class="event-content">
                    <div class="event-time"><?php echo $goals71['title']?></div>
                        <div class="event-title"><?php echo $goals71['descr']?></div>
                        <div class="event-by"><?php echo $goals71['caption']?></div>
                    </div>
                </div>
                <div class="eventscards">
                    <img src="<?php echo $goals71['img1']?>" class="event-image" alt="Description of the image">
                    <div class="event-content">
                    <div class="event-time"><?php echo $goals71['title']?></div>
                        <div class="event-title"><?php echo $goals71['descr']?></div>
                        <div class="event-by"><?php echo $goals71['caption']?></div>
                    </div>
                </div>
                <div class="eventscards">
                    <img src="<?php echo $goals71['img2']?>" class="event-image" alt="Description of the image">
                    <div class="event-content">
                    <div class="event-time"><?php echo $goals71['title']?></div>
                        <div class="event-title"><?php echo $goals71['descr']?></div>
                        <div class="event-by"><?php echo $goals71['caption']?></div>
                    </div>
                </div>
            </div>
            <div class="div-w">
                <button class="cta_button_primary Ss-btn_txt unire-btn"
                    onclick="window.open('<?php echo $goals7['btn1_hlink']?>', '_blank')"><?php echo $goals7['btn_nm1']?><img
                        src="assets/icons/Button_forwardarrow.png" /></button>
            </div>
        </div>


        <!-- -----------------End  section Events --------------------->





        <!-- Emotional and Physiological Development starts here CoExAMMPC -->
        <?php
 $sqlquery15="SELECT * FROM  sections  where id='uni_exe'";

$result=mysqli_query($conn, $sqlquery15);
$emotional = $result->fetch_assoc();
?>


    <div class="home-emational_div" style="margin-bottom: 150px;">
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
                        <!-- <img src="assets/icons/Button_forwardarrow.png" class="btn_arrow" />-->
                    </button>
                </div>

                <div class="btnnone-mbl">
                    <button class="cta_button_primary Ss-btn_txt  explore"
                        onclick="window.open('<?php echo $emotional['btn2_hlink']; ?>',  '_blank')">
                        <?php echo $emotional['btn_nm2'] ?>
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
                <img src="<?php echo  $emotional['img2'];?>" class="home-emational_subdivimg2" />
            </div>

            <div class="btnnone-mbl">
                <button class="cta_button_primary Ss-btn_txt  explore"
                    onclick="window.open('<?php echo $emotional['btn2_hlink']; ?>',  '_blank')">
                    <?php echo $emotional['btn_nm2'] ?>
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

                    <!-- <img src="assets/icons/Button_forwardarrow.png" class="button-arrow" />-->
                </button>
            </div>
        </div>
    </div>
        <!-- Emotional and Physiological Development ends here -->



        <!-- -----------------Start  section Patents --------------------->
        <div class="home-researchdiv1" style="margin-bottom:150px;">

                            <?php  $sqlquery8 ="SELECT * FROM  sections  where id='unires_sec8'";
                                $result8=mysqli_query($conn, $sqlquery8);
                                $goals8 = $result8->fetch_assoc();
                            ?>
            <div class="home-researchtitle patmed" >
                <?php echo  $goals8['title']; ?>
            </div>
            <div class="mainresearch">

                <div class="patentsbox">
                            <?php  $sqlquery81 ="SELECT * FROM  cards  where id='unires_sec8_c1'";
                                $result81=mysqli_query($conn, $sqlquery81);
                                $goals81 = $result81->fetch_assoc();
                            ?>
                    <div class="patentyear">
                        <?php echo  $goals81['caption']; ?>
                    </div>
                    <div class="patentssec">
                        <?php echo  $goals81['title']; ?>
                    </div>
                    <div class="resemiddlepat">
                        <?php echo  $goals81['descr']; ?>
                    </div>
                    <div class="text_btnnew viewall-right" onclick="window.open('your_link_here', '_blank')">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt"><?php echo  $goals81['btn_nm']; ?></div>
                            <div>
                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="patentsbox">
                            <?php  $sqlquery82 ="SELECT * FROM  cards  where id='unires_sec8_c2'";
                                $result82=mysqli_query($conn, $sqlquery82);
                                $goals82= $result82->fetch_assoc();
                            ?>
                    <div class="patentyear" style="margin-top: -80px;">
                        <?php echo  $goals82['caption']; ?>
                    </div>
                    <div class="patentssec">
                        <?php echo  $goals82['title']; ?>
                    </div>
                    <div class="resemiddlepat">
                    <?php echo  $goals82['descr']; ?>
                    </div>
                    <div class="text_btnnew viewall-right" onclick="window.open('your_link_here', '_blank')">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt"><?php echo  $goals82['btn_nm']; ?></div>
                            <div>
                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="patentsbox">
                            <?php  $sqlquery83 ="SELECT * FROM  cards  where id='unires_sec8_c3'";
                                $result83=mysqli_query($conn, $sqlquery83);
                                $goals83= $result83->fetch_assoc();
                            ?>
                    <div class="patentyear" style="margin-top: -100px;">
                        <?php echo  $goals83['caption']; ?>
                    </div>
                    <div class="patentssec">
                        <?php echo  $goals83['title']; ?>
                    </div>
                    <div class="resemiddlepat">
                        <?php echo  $goals83['descr']; ?>
                    </div>
                    <div class="text_btnnew viewall-right" onclick="window.open('your_link_here', '_blank')">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt"><?php echo  $goals83['btn_nm']; ?></div>
                            <div>
                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="patentsbox">
                            <?php  $sqlquery84 ="SELECT * FROM  cards  where id='unires_sec8_c4'";
                                $result84=mysqli_query($conn, $sqlquery84);
                                $goals84= $result84->fetch_assoc();
                            ?>
                    <div class="patentyear" style="margin-top: -80px;">
                        <?php echo  $goals84['caption']; ?>
                    </div>
                    <div class="patentssec">
                        <?php echo  $goals84['title']; ?>
                    </div>
                    <div class="resemiddlepat">
                        <?php echo  $goals84['descr']; ?>
                    </div>
                    <div class="text_btnnew viewall-right" onclick="window.open('your_link_here', '_blank')">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt"><?php echo  $goals84['btn_nm']; ?></div>
                            <div>
                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="col-lg-offset-10">
                    <button class="cta_button_primary Ss-btn_txt">Explore Patents<img
                            src="assets/icons/Button_forwardarrow_small.png" /></button>
                </div> -->
                <div class="col-lg-offset-10">
                    <button class="cta_button_primary Ss-btn_txt"
                        onclick="window.open('<?php echo  $goals8['btn1_hlink']; ?>', '_blank')"><?php echo  $goals8['btn_nm1']; ?><img
                            src="assets/icons/Button_forwardarrow.png" /></button>
                </div>
            </div>
        </div>

        <!-- -----------------End  section Patents --------------------->




        <!-- -----------------start  section Research statistics scopus --------------------->
        <div class="resstat" style="margin-bottom:150px;" id="researchstats">
        
            <?php  $sqlquery91 ="SELECT * FROM  sections  where id='unires_sec9'";
                $result91=mysqli_query($conn, $sqlquery91);
                $goals91= $result91->fetch_assoc();
            ?>
            <div class="restitle"><?php echo  $goals91['title']; ?></div>
            <div class="home-researchdiv1">
                <div class="restatsub">
                    <div class="restatsub2con">
                        <div class="restatsub2contit">
                        <?php echo  $goals91['subsec1_title']; ?>

                        </div>
                        <div class="restateledesc">
                            <?php echo  $goals91['subsec1_desc']; ?>
                        </div>
                    </div>
                    <div class="resbox1">
                        <div class="home-reseach_square">
                            <?php  $sqlquery91_1 ="SELECT * FROM  stats  where id='uni_stat1'";
                                $result91_1=mysqli_query($conn, $sqlquery91_1);
                                $goals91_1= $result91_1->fetch_assoc();
                            ?>
                            <div class="home-reseach_square_innrdiv">
                                <div class="home-reseach_square_content">
                                    <div class="home-reseach_square_txt">
                                    <?php echo  $goals91_1['statvalue']; ?>
                                    </div>
                                    <div class="home-reseach_square_title">
                                    <?php echo  $goals91_1['descr']; ?>
                                    </div>
                                </div>
                                <div class="home-reseach_squareimgbdrdiv">
                                    <img src="assets/svgicons/circlestar.svg" />
                                    <div class="non-clk_brdr">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-reseach_circle">
                            <div class="home-reseach_circle_txtdiv">
                                <?php  $sqlquery91_2 ="SELECT * FROM  stats  where id='uni_stat2'";
                                    $result91_2=mysqli_query($conn, $sqlquery91_2);
                                    $goals91_2= $result91_2->fetch_assoc();
                                ?>
                                <div class="home-reseach_circle_txt">
                                <?php echo  $goals91_2['statvalue']; ?>
                                </div>
                                <div class="home-reseach_circle_title">
                                <?php echo  $goals91_2['descr']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
            <div class="home-researchdiv1">
                <div class="restatsub2">
                    <div class="restatsub2con">
                        <div class="restatsub2contit"><?php echo  $goals91['subsec2_title']; ?></div>
                        <div class="restateledesc">
                            <?php echo  $goals91['subsec2_desc']; ?>

                        </div>
                    </div>
                    <div class="restatbox">
                        <div class="home-reseach_square">
                            <div class="home-reseach_square_innrdiv">
                                <?php  $sqlquery91_3 ="SELECT * FROM  stats  where id='uni_stat3'";
                                    $result91_3=mysqli_query($conn, $sqlquery91_3);
                                    $goals91_3= $result91_3->fetch_assoc();
                                ?>
                                <div class="home-reseach_square_content">
                                    <div class="home-reseach_square_txt">
                                        <?php echo  $goals91_3['statvalue']; ?>
                                    </div>
                                    <div class="home-reseach_square_title">
                                    <?php echo  $goals91_3['descr']; ?>
                                    </div>
                                </div>
                                <div class="home-reseach_squareimgbdrdiv">
                                    <img src="assets/svgicons/circlestar.svg" />
                                    <div class="non-clk_brdr">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="home-reseach_circle">
                            <div class="home-reseach_circle_txtdiv">
                                <?php  $sqlquery91_4 ="SELECT * FROM  stats  where id='uni_stat4'";
                                    $result91_4=mysqli_query($conn, $sqlquery91_4);
                                    $goals91_4= $result91_4->fetch_assoc();
                                ?>
                                <div class="home-reseach_circle_txt">
                                <?php echo  $goals91_4['statvalue']; ?>
                                </div>
                                <div class="home-reseach_circle_title">
                                <?php echo  $goals91_4['descr']; ?>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>

        <!-- -----------------End  section Research statistics --------------------->



        <!-- -----------------End  section Research statistics --------------------->
	


 <!-------------------FUNDING AGENCIES----------->



<div class="home-goalsdiv" style="margin-bottom: 40px;">
                <?php  $sqlquery10 ="SELECT * FROM  sections  where id='unires_sec10'";
                    $result10=mysqli_query($conn, $sqlquery10);
                    $goals10= $result10->fetch_assoc();
                ?>
                <div class="home-goals_innrdiv">
                    <div class="home_goals">
                        <div class="home_goalstitle"><?php echo  $goals10['title']; ?></div>
                        <div class="home_goalstxt"><?php echo  $goals10['descr']; ?></div>
                        <div class="text_btnnew viewall-right" onclick="window.open('<?php echo  $goals10['btn1_hlink']; ?>', '_blank')">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt"><?php echo  $goals10['btn_nm1']; ?></div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="non-clk_carddiv">
                        <div class="non-clk_card_innrdiv">
                        <?php  $sqlquery10_1 ="SELECT * FROM  cards  where id='unires_sec10_c1'";
                            $result10_1=mysqli_query($conn, $sqlquery10_1);
                            $goals10_1= $result10_1->fetch_assoc();
                        ?>
                            <div class="non-clk_card_txtdiv">
                                <div class="non-clk_card_txt-innrdiv">
                                    <span class="non-clk_num"><?php echo  $goals10_1['descr']; ?></span>
                                    <span class="non-clk_percent">cr</span>
                                </div>
                                <div class="non-clk_title"><?php echo  $goals10_1['title']; ?></div>
                            </div>
                            <div class="non-clk_imgbrdr">
                                <img src="assets/svgicons/circlestar.svg" />
                                <div class="non-clk_brdr bord"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div>  -->
        <!-- space closing -->
<div class="agf" style="margin-bottom: 150px;">
    <div class="custom-image-container first">
        <img src="<?php echo  $goals10['img1']; ?>" alt="Image" class="custom-image">
    </div>
    <div class="custom-image-container first">
        <img src="<?php echo  $goals10['img2']; ?>" alt="Image" class="custom-image">
    </div>
    <div class="custom-image-container">
        <img src="<?php echo  $goals10['img3']; ?>" alt="Image" class="custom-image">
    </div>
    <div class="custom-image-container">
        <img src="<?php echo  $goals10['img4']; ?>" alt="Image" class="custom-image">
    </div>
    <div class="custom-image-container">
        <img src="<?php echo  $goals10['img5']; ?>" alt="Image" class="custom-image">
    </div>
    <div class="custom-image-container" style="margin-bottom:150px;">
        <img src="<?php echo  $goals10['img6']; ?>" alt="Image" class="custom-image">
    </div>
</div>




 <!-------------------FUNDING AGENCIES----------->

       


        <!-------------------Start section "Policies and Board" ------------------------->
        
        <div class="pab" style="margin-bottom:150px;">
    <?php  
        $sqlquery11 = "SELECT * FROM sections where id='unires_sec11'";
        $result11 = mysqli_query($conn, $sqlquery11);
        $goals11 = $result11->fetch_assoc();
    ?>
    <div class="pabtitle"><?php echo $goals11['title']; ?> </div>
    <div class="pabframe">
        <div class="pabinn">
            <div class="pab-intitle"><?php echo $goals11['subsec1_title']; ?></div>
            <div class="pab-content"><?php echo $goals11['subsec1_desc']; ?></div>
            <div class="text_btnnew viewall-right" data-toggle="modal" data-target="#overlay1">
                <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt"><?php echo $goals11['subsec1_btn1']; ?></div>
                    <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="pabinn">
            <div class="pab-intitle"><?php echo $goals11['subsec2_title']; ?></div>
            <div class="pab-content"><?php echo $goals11['subsec2_desc']; ?> </div>
            <div class="text_btnnew viewall-right" data-toggle="modal" data-target="#overlay2">
                <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt"><?php echo $goals11['subsec2_btn1']; ?></div>
                    <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="pabinn">
            <div class="pab-intitle"><?php echo $goals11['subsec3_title']; ?></div>
            <div class="pab-content"><?php echo $goals11['subsec3_desc']; ?></div>
            <div class="text_btnnew viewall-right" data-toggle="modal" data-target="#overlay3">
                <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt"><?php echo $goals11['subsec3_btn1']; ?></div>
                    <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="pabinn">
            <div class="pab-intitle"><?php echo $goals11['subsec4_title']; ?></div>
            <div class="pab-content"><?php echo $goals11['subsec4_desc']; ?></div>
            <div class="text_btnnew viewall-right" data-toggle="modal" data-target="#overlay4">
                <div class="text_btnnew_innrdiv">
                    <div class="text_btnnew_txt"><?php echo $goals11['btn_nm4']; ?></div>
                    <div>
                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 1 -->
<div class="modal fade" id="overlay1" tabindex="-1" role="dialog" aria-labelledby="modalLabel1" aria-hidden="true">
    <div class="overlay-dialog" role="document">
        <div class="filter-modal_content">
            <div class="modal-header overlaymodal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="assets/icons/cross_big.png">
                </button>
                <div class="steps-head">
                    <h4 class="filter-modaltitle" id="modalLabel1">Content for Button 1</h4>
                    <div class="download-btn">
                        <div class="text_btnnew">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">Download</div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body overlaymodal-body">
                <div class="content">
                    <div class="steps-no">Step 1:</div>
                    <div class="exam-instructions">
                        <h3>General Instructions to the candidates</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal 2 -->
<div class="modal fade" id="overlay2" tabindex="-1" role="dialog" aria-labelledby="modalLabel2" aria-hidden="true">
    <div class="overlay-dialog" role="document">
        <div class="filter-modal_content">
            <div class="modal-header overlaymodal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="assets/icons/cross_big.png">
                </button>
                <div class="steps-head">
                    <h4 class="filter-modaltitle" id="modalLabel2">Content for Button 2</h4>
                    <div class="download-btn">
                        <div class="text_btnnew">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">Download</div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body overlaymodal-body">
                <div class="content">
                    <div class="steps-no">Step 1:</div>
                    <div class="exam-instructions">
                        <h3>General Instructions to the candidates</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 3 -->
<div class="modal fade" id="overlay3" tabindex="-1" role="dialog" aria-labelledby="modalLabel3" aria-hidden="true">
    <div class="overlay-dialog" role="document">
        <div class="filter-modal_content">
            <div class="modal-header overlaymodal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="assets/icons/cross_big.png">
                </button>
                <div class="steps-head">
                    <h4 class="filter-modaltitle" id="modalLabel3">Content for Button 3</h4>
                    <div class="download-btn">
                        <div class="text_btnnew">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">Download</div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body overlaymodal-body">
                <div class="content">
                    <div class="steps-no">Step 1:</div>
                    <div class="exam-instructions">
                        <h3>General Instructions to the candidates</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal 4 -->
<div class="modal fade" id="overlay4" tabindex="-1" role="dialog" aria-labelledby="modalLabel4" aria-hidden="true">
    <div class="overlay-dialog" role="document">
        <div class="filter-modal_content">
            <div class="modal-header overlaymodal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="assets/icons/cross_big.png">
                </button>
                <div class="steps-head">
                    <h4 class="filter-modaltitle" id="modalLabel4">Content for Button 4</h4>
                    <div class="download-btn">
                        <div class="text_btnnew">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">Download</div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body overlaymodal-body">
                <div class="content">
                    <div class="steps-no">Step 1:</div>
                    <div class="exam-instructions">
                        <h3>General Instructions to the candidates</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end -->

        <!----------------------start Section downloads--------------------------------------->
        <div class="download" style="margin-bottom:150px;">
                    <?php  $sqlquery12 ="SELECT * FROM  sections  where id='unires_sec12'";
                        $result12=mysqli_query($conn, $sqlquery12);
                        $goals12= $result12->fetch_assoc();
                    ?>
            <div class="downtit">
                <?php echo  $goals12['title']; ?>

            </div>
            <div class="downb">
                <div class="downbind">
                    <div class="title">
                        <?php echo  $goals12['subsec1_title']; ?>
                    </div>
                    <div class="text_btnnew viewall-right" onclick="window.open('<?php echo  $goals12['subsec1_btn1_hlink']; ?>', '_blank')">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt"><?php echo  $goals12['subsec1_btn1']; ?></div>
                            <div>
                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>

                </div>


                <div class="downbind">
                    <div class="title">
                        <?php echo  $goals12['subsec2_title']; ?>
                        <div class=subt><?php echo  $goals12['subsec2_desc']; ?></div>
                    </div>

                    <div class="text_btnnew viewall-right" onclick="window.open('<?php echo  $goals12['subsec2_btn1_hlink']; ?>', '_blank')">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt"><?php echo  $goals12['subsec2_btn1']; ?></div>
                            <div>
                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="downbind">
                    <div class="title">
                    <?php echo  $goals12['subsec3_title']; ?>
                        <div class=subt><?php echo  $goals12['subsec3_desc']; ?></div>
                    </div>

                    <div class="text_btnnew viewall-right" onclick="window.open('<?php echo  $goals12['subsec3_btn1_hlink']; ?>', '_blank')">
                        <div class="text_btnnew_innrdiv">
                        <div class="text_btnnew_txt"><?php echo  $goals12['subsec3_btn1']; ?></div>
                            <div>
                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!-- </div> spcae closing -->
        <!----------------------End Section downloads--------------------------------------->
                <!-- Admissions apply -->

                <div class="xyz" style="margin-bottom:150px;">
                    <?php  $sqlquery13 ="SELECT * FROM  sections  where id='unires_sec13'";
                        $result13=mysqli_query($conn, $sqlquery13);
                        $goals13= $result13->fetch_assoc();
                    ?>
            <img src="assets/images/applynew.png" alt="image" class="rot">
            <div class="faqt1">
                <?php echo  $goals13['title']; ?>
            </div>
            <div class="applytitle">
                <?php echo  $goals13['descr']; ?>
                <button class="cta_button_primary Ss-btn_txt bsn1" onclick="window.open('<?php echo  $goals13['btn1_hlink']; ?>', '_blank')"><?php echo  $goals13['btn_nm1']; ?> <img
                                src="assets/icons/Button_forwardarrow.png" /></button>
                <button class="mblbutton_secondary mblbtn_txt bsn2" onclick="window.open('<?php echo  $goals13['btn1_hlink']; ?>', '_blank')"><?php echo  $goals13['btn_nm2']; ?></button>
            </div>
            <div class="appmed1">
                <div class="col-lg-2" style="">
                    <!-- <a href="https://vignan.ac.in/v-sat/?type=individual"> -->
                        <!-- <button class="cta_button_primary Ss-btn_txt bsn1">Apply Now <img
                                src="assets/icons/Button_forwardarrow.png" /></button> -->
                            <!-- </a> -->
                    <!-- <div class="cta_button_primary">
                                <div class="Ss-btn_txt">Button  </div>
                                <img src="assets/icons/Button_forwardarrow.png" />
                            </div> -->
                </div>

                <div class="col-lg-2" style="">
                    <!-- <a href="https://vignan.ac.in/v-sat/?type=individual"> -->
                        <!-- <button class="mblbutton_secondary mblbtn_txt bsn2">Sign in</button> -->
                    <!-- </a> -->

                </div>
            </div>
        </div>







        <!----------------------start Section FAQ--------------------------------------->
        <div class="faq" style="margin-bottom:150px;">

            <div class="faqt">
                Frequently <br> Asked <br>Questions
            </div>

            <div class="container mbcon">
                <div class="row">
                    <div class="col-lg-12">


                        <div class="panel-group" id="unifaq1" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="unifaqhead">
                                    <h4 class="panel-title">
                                        <a class="question" data-toggle="collapse" data-parent="#unifaq1"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            1.How can I apply to the Computer Science program
                                        </a>
                                    </h4>

                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="unifaqhead">
                                    <div class="panel-body">Along with the course, you also get access to
                                        the course discussion forum.<br> You can ask any questions and I
                                        will answer them personally within 24<br> hours. You can ask any
                                        questions and.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="unifaqhead2">
                                    <h4 class="panel-title">
                                        <a class="question collapsed" data-toggle="collapse" data-parent="#unifaq1"
                                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            2.What are the admission requirement for computer science department
                                        </a>
                                    </h4>

                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="unifaqhead2">
                                    <div class="panel-body">Answer</div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="unifaqhead3">
                                    <h4 class="panel-title">
                                        <a class="question collapsed" data-toggle="collapse" data-parent="#unifaq1"
                                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            3.Are there any prerequisites for specific courses within the department?
                                        </a>
                                    </h4>

                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="unifaqhead3">
                                    <div class="panel-body">Answer </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="unifaqhead4">
                                    <h4 class="panel-title">
                                        <a class="question collapsed" data-toggle="collapse" data-parent="#unifaq1"
                                            href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            4.How much is the validity of the course?
                                        </a>
                                    </h4>

                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="unifaqhead4">
                                    <div class="panel-body">Answer </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="unifaqhead5">
                                    <h4 class="panel-title">
                                        <a class="question collapsed" data-toggle="collapse" data-parent="#unifaq1"
                                            href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            5.What is the typical class size for computer science courses
                                        </a>
                                    </h4>

                                </div>
                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="unifaqhead5">
                                    <div class="panel-body">Answer </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------End Section FAQ--------------------------------------->




        <!-- write code below here -->
        <!-- </div> --  Removed this??>


<!-- Footer -->
	

	<div class="footer-margin-top"></div>

  <?php
   include('footer.php');
?>



   <div id="mblftr" style="padding: 6px;">
<?php
    
   include_once  'mblfooter.php';
    ?>
</div>
<div id="ftr" style="padding: 110px;">
<?php
    
   include_once  'footer.php';
    ?>
</div>

<!-- Footer -->











    <!-- End -->

      
    </div>

    <!-- jQuery -->
    <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Bootstrap JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>-->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    //New news carousel

    const photosparent = document.querySelector('.photos');

    $(document).ready(function() {
        updateProgressBar();

    });
    // Add your JavaScript here
    let Index = 0;

    let intervalFlag = true;
    const content = document.querySelectorAll('.content');
    const progressBar = document.getElementById('progressBar');
    let PrevIndex = content.length - 1;
    img = document.querySelectorAll('.photos img');
    var time = 12000;
    var setIntervalId;






    function next() {
        content[Index].classList.add('active-slide');
        setTimeout(() => {
            if (Index > 0) {
                content[Index - 1].style.display = 'none';
            } else {
                content[content.length - 1].style.display = 'none';
            }
        }, 2000);


        Index = (Index + 1) % content.length;

        setTimeout(() => {
            content[Index].style.display = 'flex';
        }, 2000);



        progressBar.classList.remove("prg-active");
        setInterval(updateProgressBar, 100);


        slideImagestest();


        // Add active class to the next content
        document.querySelectorAll('.content').forEach((curcontent, index) => {
            if (index === Index) {
                setTimeout(() => {
                    if (Index > 0) {
                        content[Index - 1].classList.remove('active-slide');
                    } else {
                        content[content.length - 1].classList.remove('active-slide');
                    }
                    //  content[Index-1].classList.remove('active-slide');
                }, 2100);

                curcontent.classList.add('show-slide');



            } else {
                setTimeout(() => {
                    if (Index > 0) {
                        content[Index - 1].classList.remove('active-slide');
                    } else {
                        content[content.length - 1].classList.remove('active-slide');
                    }
                    //  content[Index-1].classList.remove('active-slide');
                }, 2100);
                curcontent.classList.remove('show-slide');

            }


        });
    }

    function updateProgressBar() {
        progressBar.classList.add("prg-active");

    }

    function slideImagestest() {
        const imageWidth = document.querySelector('.photos img').clientWidth;

        if (Index == 0) {
            const offset = -Index * 260;
            photosparent.style.opacity = `0.3`;
            photosparent.style.transition = `opacity 0.1s`;
            // photosparent.style.transitionDelay = "2s";
            if (window.innerWidth <= 800) {
                photosparent.style.opacity = `1`;
                photosparent.style.transform = `translateX(0%)`;
            } else {

                setTimeout(() => {
                    photosparent.style.opacity = `1`;
                    photosparent.style.transition = `opacity 2s`;

                    photosparent.style.transform = `translateX(${offset}px)`;

                }, 10);
            }


        } else {
            const offset = -Index * 260;
            // var left= 120+(Index*33.5);
            //photosparent.style.left = `${left}%`;
            photosparent.style.opacity = `1`;
            if (window.innerWidth <= 800) {
                const mbloffset = -Index * 33;
                photosparent.style.transform = `translateX(0%)`;

            } else {
                photosparent.style.transform = `translateX(${offset}px)`;
            }


            photosparent.style.transition = `transform 2s`;
        }




        // Remove active class from all images
        const allImages = document.querySelectorAll('.photos img');
        allImages.forEach(image => image.classList.remove('activeimg'));
        // Add active class to the current slide
        const Image = allImages[1];
        Image.classList.add('activeimg');
        if (window.innerWidth <= 800) {

            const activeImage = photosparent.children[0].cloneNode(true);


            photosparent.appendChild(activeImage);
            const imageToRemove = photosparent.children[0];
            photosparent.removeChild(imageToRemove);
            var left = 120 + (Index * 33);
            var mblleft = 100 + (Index * 2);



            photosparent.style.left = `0px`;

        } else {
            setTimeout(() => {
                const activeImage = photosparent.children[0].cloneNode(true);


                photosparent.appendChild(activeImage);
                const imageToRemove = photosparent.children[0];
                photosparent.removeChild(imageToRemove);
                var left = 120 + (Index * 33);
                var mblleft = 100 + (Index * 2);


                photosparent.style.left = `${left}%`;


            }, 2300);

        }



    }


    function slideprevImages() {

        const imageWidth = document.querySelector('.photos img').clientWidth;
        if (Index == 0) {
            const offset = -Index * 260;
            photosparent.style.opacity = `0`;
            photosparent.style.transition = `opacity 0.1s`;
            // photosparent.style.transitionDelay = "2s";
            setTimeout(() => {
                photosparent.style.opacity = `1`;
                photosparent.style.transition = `opacity 2s`;
                photosparent.style.transform = `translateX(${offset}px)`;
            }, 20);

        } else {
            const offset = Index * 260;
            var left = 120 - (Index * 33);
            if (window.innerWidth <= 800) {
                photosparent.style.left = `0%`;
                photosparent.style.transform = `translateX(0px)`;

            } else {
                photosparent.style.left = `${left}%`;
                photosparent.style.opacity = `1`;
                photosparent.style.transform = `translateX(${offset}px)`;
                photosparent.style.transition = `transform 2s`;

            }

        }

        const allImages = document.querySelectorAll('.photos img');

        // Remove active class from all images
        allImages.forEach(image => image.classList.remove('activeimg'));

        // Add active class to the current slide
        const Image = allImages[PrevIndex];

        Image.classList.add('activeimg');
        var firstChild = photosparent.children[0];
        const activeImage = photosparent.children[PrevIndex].cloneNode(true);

        const imageToRemove = photosparent.children[PrevIndex];
        photosparent.removeChild(imageToRemove);
        photosparent.insertBefore(activeImage, firstChild);
        // const offset =Index*25;
        // var left= 130-(Index*2);

        // photosparent.style.left = `${left}%`;
        //  photosparent.style.transform = `translateX(${offset}px)`;
        //  photosparent.style.transition = `transform 2s`;


    }

    function restart() {
        setIntervalId = setInterval(next, 12000);

    }
    // start();
    setIntervalId = setInterval(next, 12000);

    //setInterval(next, 16000);


    $('.nextnew').click(function() {
        clearInterval(setIntervalId);
        setIntervalId = undefined;

        //start();
        setInterval(next(), 12000);
        //setInterval(next(), 16000);
        restart();


    });



    $('.prevnew').click(function() {

        content[Index].style.display = 'none';
        Index = (Index - 1 + content.length) % content.length;
        content[Index].style.display = 'block';

        progressBar.classList.remove("prg-active");
        setInterval(updateProgressBar, 100);

        slideprevImages();

        // Add active class to the next content
        document.querySelectorAll('.content').forEach((content, index) => {
            if (index === Index) {
                content.classList.add('active-slide');
                content.classList.add('show-slide');
            } else {
                content.classList.remove('active-slide');

            }
        });
    })
    //New news carousel ends
    </script>
</body>

</html>