<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mblfooter.css">
    <link rel="stylesheet" href="./css/CoExAMMPC.css">
    <link rel="stylesheet" href="./css/button.css">
    <title>Vignan University</title>
</head>
<body>
    <div class="CoExAMMPCCont">
        <?php include_once "navbar.php" ?>
        <div class="MainAlignerForCoExAMMPC">
            <!--BillBoard-->
            <?php 
                $sql = "SELECT * FROM `sections` WHERE `id` = 'Billboard_CoExAMMPC';";
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
                                                class="BillboardTabplane1ChildImg"
                                                src="<?php echo $row["img2"] ?>"
                                            />
                                    </div>
                                </div>
                                <div class="BillboardTabplane2">
                                    <div class="">
                                        <div class="BillboardTabplane2TitleText">
                                            <?php echo $row["title"] ?>
                                        </div>
                                    </div>
                                    <div class="BillboardTabplane2DiscriptionTextCont">
                                        <div class="BillboardTabplane2DiscriptionTextWCU">
                                            <?php echo $row["descr"]; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="BillBoardBottom">
                                <div class="BillBoardHeader">
                                    <?php echo $row["title"] ?>
                                </div>
                                <div class="BillBoardImg">
                                    <img
                                    src="<?php echo $row["img2"] ?>"
                                    class="BillBoardImgimg"
                                    />
                                </div>
                                <div class="BillBoardDescription">   
                                    <?php echo $row["descr"]; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } 
            ?>
            <!--OverviewSection-->
            <?php 
                $sql = "SELECT * FROM `sections` WHERE `id` = 'CoExAMMPC_overview';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <div class="OverviewSectionCoExAMMPC">
                                <div class="OverviewSectionCoExAMMPC621">
                                    <div class="OverviewSectionCoExAMMPC621h562">
                                        <div class="OverviewSectionCoExAMMPC621h562h61"><?php echo $row["title"]; ?></div>
                                        <div class="OverviewSectionCoExAMMPC621h562w498">
                                            <?php echo $row["descr"]; ?>
                                        </div>
                                        <div class="">
                                            <div class="text_btnnew viewall-right" onclick="events()">
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                        <?php echo $row["btn_nm1"] ?>
                                                    </div>
                                                    <div>
                                                        <img src="assets/svgicons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="OverviewSectionCoExAMMPC624">
                                    <div class="home-reseachcountdiv-cstm">
                                    <div class="home-reseachcount_innrdiv">
                                        <div class="home-reseachcount">
                                            673 <p class="text-suffix">Lacs</p>
                                        </div>
                                        <div class="home-reseach_txt">FUNDING</div>
                                    </div>
                                    <div class="home-reseach_imgbdrdiv">
                                        <svg class="home-reseach_img" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                            <mask id="mask0_3079_9" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
                                                <rect width="48" height="48" fill="#D9D9D9"></rect>
                                            </mask>
                                            <g mask="url(#mask0_3079_9)">
                                                <path d="M23.9839 40.1115C26.5048 40.1115 28.6647 39.2223 30.4635 37.4441C32.2623 35.6658 33.1617 33.5232 33.1617 31.0162C33.1617 28.4953 32.2675 26.3354 30.4789 24.5366C28.6904 22.7378 26.5353 21.8384 24.0135 21.8384C21.4918 21.8384 19.3406 22.7326 17.5598 24.5212C15.779 26.3097 14.8886 28.4648 14.8886 30.9866C14.8886 33.5083 15.7778 35.6595 17.556 37.4403C19.3343 39.2211 21.4769 40.1115 23.9839 40.1115ZM17.9886 21.4384C18.6464 20.9811 19.3615 20.6193 20.1339 20.3531C20.9063 20.0869 21.7233 19.882 22.5848 19.7384L18.0656 10.9153H12.7463L17.9886 21.4384ZM30.0117 21.4384L35.3425 10.9153H29.9348L25.7809 19.1961L26.1334 19.8648C26.8267 20.001 27.5041 20.2061 28.1656 20.48C28.8271 20.7538 29.4425 21.0733 30.0117 21.4384ZM14.3425 38.1769C14.3109 37.939 14.3177 37.6488 14.363 37.3065C14.4083 36.9641 14.5079 36.6165 14.6617 36.2637C14.0463 35.2186 13.622 34.0864 13.3886 32.8672C13.1553 31.6479 13.1271 30.4024 13.304 29.1307C13.304 28.1307 13.4771 27.1819 13.8232 26.2845C14.1694 25.3871 14.6502 24.5794 15.2655 23.8615C14.6373 23.8794 14.0553 24.0534 13.5194 24.3835C12.9835 24.7135 12.6386 25.1321 12.4848 25.6393C10.9976 26.1464 9.92581 27.1019 9.26944 28.5057C8.61304 29.9096 8.52203 31.3512 8.9964 32.8307C8.9964 34.3435 9.51561 35.6127 10.554 36.6384C11.5925 37.664 12.8553 38.1769 14.3425 38.1769ZM33.6579 38.1769C35.6194 38.1845 37.3188 37.4913 38.7559 36.0972C40.1931 34.703 40.9117 33.0088 40.9117 31.0145C40.9117 29.0202 40.1931 27.3211 38.7559 25.9172C37.3188 24.5134 35.6194 23.8025 33.6579 23.7845C33.5041 23.7845 33.3502 23.7973 33.1963 23.823C33.0425 23.8486 32.8887 23.8615 32.7348 23.8615C33.5271 24.8512 34.1611 25.9511 34.6367 27.1611C35.1124 28.3711 35.3502 29.6525 35.3502 31.0053C35.3502 32.3581 35.1124 33.6377 34.6367 34.8442C34.1611 36.0506 33.5271 37.1358 32.7348 38.0999C32.8887 38.1255 33.0425 38.1448 33.1963 38.1576C33.3502 38.1704 33.5041 38.1769 33.6579 38.1769ZM23.9949 42.2999C22.6627 42.2999 21.4145 42.1024 20.2503 41.7075C19.0861 41.3125 18.0233 40.7087 17.0617 39.8961C16.6216 40.0362 16.1538 40.1386 15.6585 40.2031C15.1632 40.2676 14.6771 40.2999 14.2002 40.2999C11.6279 40.2999 9.4432 39.4021 7.646 37.6064C5.8488 35.8107 4.9502 33.6279 4.9502 31.0578C4.9502 28.4804 5.85148 26.2835 7.65405 24.467C9.45661 22.6505 11.6528 21.7486 14.2425 21.7615C14.5246 21.7615 14.7938 21.7807 15.0502 21.8191C15.3066 21.8576 15.563 21.9025 15.8194 21.9538L9.19249 8.72681H19.4309L24.0002 17.8653L28.5694 8.72681H38.8579L32.3194 21.8153C32.5502 21.764 32.7874 21.7255 33.031 21.6999C33.2746 21.6743 33.5245 21.6615 33.7809 21.6615C36.363 21.6563 38.5617 22.5645 40.3771 24.386C42.1925 26.2075 43.1002 28.4121 43.1002 30.9999C43.1002 33.617 42.1961 35.8213 40.388 37.6128C38.5799 39.4042 36.3673 40.2999 33.7502 40.2999C33.2476 40.2999 32.7643 40.2704 32.3002 40.2115C31.8361 40.1525 31.3951 40.0474 30.9771 39.8961C30.0158 40.683 28.9448 41.2804 27.764 41.6882C26.5832 42.096 25.3268 42.2999 23.9949 42.2999ZM20.8271 35.6769L22.0152 31.7324L18.8232 29.4422H22.7826L24.0002 25.323L25.2436 29.4422H29.1771L26.004 31.7192L27.2233 35.6769L24.0077 33.2307L20.8271 35.6769Z" fill="#C57654"></path>
                                            </g>
                                        </svg>
                                        <!--<img src="assets/icons/research.png" class="home-reseach_img" />-->
                                        <div class="home-reseach_bdr"></div>
                                    </div>
                                </div>
                                <div class="home-reseach_div3">
                                    <div class="home-reseach_circle">
                                        <div class="home-reseach_circle_txtdiv">
                                            <div class="home-reseach_circle_txt">43<small class="home-reseach_circle_small">cr</small>
                                            </div>
                                            <div class="home-reseach_circle_title">Research Papers Published</div>
                                        </div>
                                    </div>
                                    <div class="home-reseach_square">
                                        <div class="home-reseach_square_innrdiv">
                                            <div class="home-reseach_square_content">
                                                <div class="home-reseach_square_txt">
                                                    28                            
                                                </div>
                                                <div class="home-reseach_square_title">
                                                    FACILITIES AVAILABLE
                                                </div>

                                            </div>
                                            <div class="home-reseach_squareimgbdrdiv">
                                                <img src="assets/svgicons/circlestar.svg">
                                                <!--  <img src="assets/icons/round-star.png" />-->
                                                <div class="non-clk_brdr"></div>
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
            <!--Contributors-->
            <?php 
                $sql = "SELECT * FROM `sections` WHERE `id` = 'CoExAMMPC_Contributors';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <div class="CoexmmpcContributorsSection">
                                <div class="CoexmmpcContributorsSectionTitle"><?php echo $row["title"]; ?> </div>
                                
                                <div class="CoexmmpcContributorsSectionh484">
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img1"]; ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec1_title"]; ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec1_desc"]; ?></div>
                                        </div>
                                    </div>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img2"]; ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec2_title"]; ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec2_desc"]; ?></div>
                                        </div>
                                    </div>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img3"]; ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec3_title"]; ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec3_desc"]; ?></div>
                                        </div>
                                    </div>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img4"]; ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec4_title"]; ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec4_desc"]; ?></div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="CoexmmpcContributorsSectionh52">
                                    <button onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')" class="cta_button_primary txt-btn-20-16">
                                        <div><?php echo $row["btn_nm1"]; ?></div>
                                        <img src="assets/icons/Button_forwardarrow.png" />
                                    </button>
                                </div>
                            </div>
                        <?php 
                    }
                }
            ?>
            <!--Collaborators -->
            <?php 
                $sql = "SELECT * FROM `sections` WHERE `id` = 'CoExAMMPC_Collaborators';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <div class="CoexmmpcContributorsSection2">
                                <div class="CoexmmpcContributorsSectionTitle"><?php echo $row["title"]; ?></div>
                                <div class="CoexmmpcContributorsSectionh484">
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img1"]; ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec1_title"]; ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec1_desc"]; ?></div>
                                        </div>
                                    </div>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img2"]; ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec2_title"]; ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec2_desc"]; ?></div>
                                        </div>
                                    </div>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img3"]; ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec3_title"]; ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec3_desc"]; ?></div>
                                        </div>
                                    </div>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img4"]; ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec4_title"]; ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec4_desc"]; ?></div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="CoexmmpcContributorsSectionh52">
                                    <button onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')" class="cta_button_primary txt-btn-20-16">
                                        <div><?php echo $row["btn_nm1"]; ?></div>
                                        <img src="assets/icons/Button_forwardarrow.png" />
                                    </button>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
            <!--Facilities Available-->
            <?php 
                $sql = "SELECT * FROM `sections` WHERE `id` = 'CoExAMMPC_Facilities';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <div class="CoexammpcFacilitiesAvailablesection">
                                <div class="CoexammpcFacilitiesAvailablesectionw773">
                                    <div class="CoexammpcFacilitiesAvailablesectionw621w298">
                                        <div class="CoexammpcFacilitiesAvailablesectionw621w298cont">
                                            <div><?php echo $row["subsec1_title"]; ?></div>
                                        </div>
                                        <img src="<?php echo $row["img1"]; ?>" class="CoexammpcFacilitiesAvailablesectionw621w298img"/>
                                    </div>
                                    <div class="CoexammpcFacilitiesAvailablesectionw621w450">
                                        <div class="CoexammpcFacilitiesAvailablesectionw621w450child" >
                                            <img src="<?php echo $row["img2"]; ?>" class="CoexammpcFacilitiesAvailablesectionw621w450img">
                                            <div class="CoexammpcFacilitiesAvailablesectionw621w450cont">
                                                <div class="CoexammpcFacilitiesAvailablesectionw621w450conttxt"><?php echo $row["subsec2_title"]; ?></div>
                                            </div>
                                        </div>
                                        <div class="CoexammpcFacilitiesAvailablesectionw621w450child" >
                                            <img src="<?php echo $row["img3"]; ?>" class="CoexammpcFacilitiesAvailablesectionw621w450img">
                                            <div class="CoexammpcFacilitiesAvailablesectionw621w450cont">
                                                <div class="CoexammpcFacilitiesAvailablesectionw621w450conttxt"><?php echo $row["subsec3_title"]; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="CoexammpcFacilitiesAvailablesectionw383">
                                    <div class="CoexammpcFacilitiesAvailablesectionw383h61"><?php echo $row["title"]; ?></div>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>

            <!--Fluorescence Spectrophotometer-->
            <?php 
                $sql = "SELECT * FROM `sections` WHERE `id` = 'CoExAMMPC_Fluorescence';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <div class="CoexammpFluorescenceSpectrophotometer">
                                <div class="CoexammpFluorescenceSpectrophotometerCont">
                                    <div><?php echo $row["title"]; ?></div>
                                </div>
                                <img src="<?php echo $row["img1"]; ?>" class="CoexammpFluorescenceSpectrophotometerimg" />
                            </div>
                        <?php
                    }
                } 
            ?>
            
            <!--Contacts US-->
            <?php 
                $sql = "SELECT * FROM `sections` WHERE `id` = 'CoExAMMPC_Contact';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <div class="CoexammpContactUs">
                                <div class="CoexammpContactUsw654">
                                    <div class="CoexammpContactUsw385">
                                        <div class="CoexammpContactUsw385h61"><?php echo $row["title"]; ?></div>
                                        <div class="CoexammpContactUsw385h497">
                                            <img src="<?php echo $row["img1"]; ?>" class="CoexammpContactUsw385h497h392"/>
                                            <div class="CoexammpContactUsw385h497h98">
                                                <div class="CoexammpContactUsw385h497h98h25"><?php echo $row["subsec1_title"]; ?></div>
                                                <div class="CoexammpContactUsw385h497h98h28"><?php echo $row["subsec1_desc"]; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="CoexammpContactUsw269">
                                        <div class="CoexammpContactUsw269h275">
                                            <div class="CoexammpContactUsw269h275w194">
                                                <div class="CoexammpContactUsw269h275w194w86"><?php echo $row["subsec2_title"]; ?></div>
                                                <div class="CoexammpContactUsw269h275w194w194"><?php echo $row["subsec2_desc"]; ?></div>
                                            </div>
                                            <div class="CoexammpContactUsw269w269h85">
                                                <div class="CoexammpContactUsw269w269h85w78"><?php echo $row["subsec3_title"]; ?></div>
                                                <div class="CoexammpContactUsw269w269h85w269"><?php echo $row["subsec3_desc"]; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                } 
            ?>
            
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