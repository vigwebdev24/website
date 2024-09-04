<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="./css/mblfooter.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/wedc.css">
    <title>Vignan University</title>
</head>
<body>
    <div class="CoExAMMPCCont">
        <?php include_once "navbar.php" ;
        
        $wedc = "SELECT * FROM `sections` WHERE `id` like '%Wedc%'";
        //$resultmdl = $conn->query($wedc);

        $resultmdl=mysqli_query($conn, $wedc);
         //$all = array();
        while ($row = mysqli_fetch_assoc($resultmdl)) {
			
         //array_push($all,$row);
            $all[]= $row;
			
			
        }
//print_r($all);




        ?>
        <div class="MainAlignerForCoExAMMPC">
            <!--BillBoard-->
            <?php
                $sql = "SELECT * FROM `sections` WHERE `id` = 'Billboard_Wedc';";
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
                                        src="<?php echo $row["img1"] ?>"
                                        class="BillboardTabplane1ChildImg"
                                        alt=""
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
                                    <div class="BillboardTabplane2DiscriptionText rdmr" id="<?php echo $row['id']; ?>">
                                        <?php echo $row["descr"] ?>
                                    </div>
                                    </div>
                                    <div class="BillboardTabplane2DiscriptionTextCont">
                                    <div class="BillboardTabplane2Hyperlinks">
                                        <button onclick="readmore('<?php echo $row['id']; ?>')" class="cta_button_primary text-20-m">
                                            <div><?php echo $row["btn_nm1"] ?></div>
                                            <img src="assets/icons/Button_forwardarrow.png" />
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="BillBoardBottom">
                                <div class="BillBoardHeader"><?php echo $row["title"] ?></div>
                                <div class="BillBoardImg" style="overflow:hidden">
                                    <img
                                    src="<?php echo $row["img1"] ?>"
                                    alt=""
                                    style="width: 100%; height: 100%; object-fit: cover;"
                                    srcset=""
                                    />
                                </div>
                                <div class="BillBoardDescription">
                                    <?php echo $row["descr"] ?>
                                </div>
                                <div class="BillBoardNavButtons">
                                    <button onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')" class="BillBoardNavButtonRed">
                                    <div><?php echo $row["btn_nm1"] ?></div>
                                    <img
                                        class="BillBoardButtonArrows"
                                        src="./assets/icons/ArrowHorizontalMiniWhite.svg"
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
            <!--Committee Members-->
            <?php
                $sql = "SELECT * FROM `sections` WHERE `id` = 'Wedc_Committee_Members';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <div class="wedcCommitteeMemberssection">
                                <div class="wedcCommitteeMemberssectionh122">
                                    <?php echo $row["title"] ?>
                                </div>
                                <div class="wedcCommitteeMemberssectionh44"><?php echo $row["descr"] ?></div>
                                <div class="CoexmmpcContributorsSectionh484">
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img1"] ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec1_title"] ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec1_desc"] ?></div>
                                        </div>
                                    </div>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img2"] ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec2_title"] ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec2_desc"] ?></div>
                                        </div>
                                    </div>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img3"] ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec3_title"] ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec3_desc"] ?></div>
                                        </div>
                                    </div>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img4"] ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["subsec4_title"] ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["subsec4_desc"] ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wedcCommitteeMemberssectionh52">
                                    <button onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')" class="cta_button_primary txt-btn-20-16">
                                        <div><?php echo $row["btn_nm1"] ?></div>
                                        <img src="assets/icons/Button_forwardarrow.png" />
                                    </button>
                                </div>
                            </div>
                        <?php
                    }
                } 
            ?>
            <!--wedcCategories-->
            <?php
                $sql = "SELECT * FROM `sections` WHERE `id` = 'Wedc_categories_1';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <div class="WedcCategoriesSection">
                                <div class="WedcCategoriesSectionw398">
                                    <div class="WedcCategoriesSectionw398h61"><?php echo $row["subsec1_title"] ?></div>
                                    <div class="WedcCategoriesSectionw398h246">
                                        <div class="WedcCategoriesSectionw398h246h198"><?php echo $row["subsec1_desc"] ?></div>
                                        <div class="WedcCategoriesSectionw398h246h24">
                                            <!---->
                                            <div class="text_btnnew viewall-right" id="<?php echo $row['id']  ?>"  onclick="openmodal(this.id, `<?php echo $row['subsec1_title'] ?>`)">
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                        Read More
                                                    </div>
                                                    <div>
                                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="WedcCategoriesSectionw398">
                                    <div class="WedcCategoriesSectionw398h61"><?php echo $row["subsec2_title"] ?></div>
                                    <div class="WedcCategoriesSectionw398h246">
                                        <div class="WedcCategoriesSectionw398h246h198"><?php echo $row["subsec2_desc"] ?></div>
                                        <div class="WedcCategoriesSectionw398h246h24">
                                            <div class="text_btnnew viewall-right"  id="<?php echo $row['id']  ?>"  onclick="openmodal(this.id, `<?php echo $row['subsec2_title'] ?>`)">
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                        Read More
                                                    </div>
                                                    <div>
                                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="WedcCategoriesSectionw398">
                                    <div class="WedcCategoriesSectionw398h61"><?php echo $row["subsec3_title"] ?></div>
                                    <div class="WedcCategoriesSectionw398h246">
                                        <div class="WedcCategoriesSectionw398h246h198"><?php echo $row["subsec3_desc"] ?></div>
                                        <div class="WedcCategoriesSectionw398h246h24">
                                            <div class="text_btnnew viewall-right" id="<?php echo $row['id']  ?>"  onclick="openmodal(this.id, `<?php echo $row['subsec3_title'] ?>`)">
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                        Read More
                                                    </div>
                                                    <div>
                                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
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

            
            <!--wedcCategories-->
             <?php
                $sql = "SELECT * FROM `sections` WHERE `id` = 'Wedc_categories_2';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <div class="WedcCategoriesSection">
                                <div class="WedcCategoriesSectionw398">
                                    <div class="WedcCategoriesSectionw398h122"><?php echo $row["subsec1_title"] ?></div>
                                    <div class="WedcCategoriesSectionw398h246">
                                        <div class="WedcCategoriesSectionw398h246h198"><?php echo $row["subsec1_desc"] ?></div>
                                        <div class="WedcCategoriesSectionw398h246h24">
                                            <div class="text_btnnew viewall-right" id="<?php echo $row['id']  ?>" onclick="openmodal(this.id,`<?php echo $row['subsec1_title'] ?>`)">
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                        Read More
                                                    </div>
                                                    <div>
                                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="WedcCategoriesSectionw398">
                                    <div class="WedcCategoriesSectionw398h122"><?php echo $row["subsec2_title"] ?></div>
                                    <div class="WedcCategoriesSectionw398h246">
                                        <div class="WedcCategoriesSectionw398h246h198"><?php echo $row["subsec2_desc"] ?></div>
                                        <div class="WedcCategoriesSectionw398h246h24">
                                            <div class="text_btnnew viewall-right"  id="<?php echo $row['id']  ?>" onclick="openmodal(this.id,`<?php echo $row['subsec2_title'] ?>`)">
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                        Read More
                                                    </div>
                                                    <div>
                                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="WedcCategoriesSectionw398">
                                    <div class="WedcCategoriesSectionw398h122"><?php echo $row["subsec3_title"] ?></div>
                                    <div class="WedcCategoriesSectionw398h246">
                                        <div class="WedcCategoriesSectionw398h246h198"><?php echo $row["subsec3_desc"] ?></div>
                                        <div class="WedcCategoriesSectionw398h246h24">
                                            <div class="text_btnnew viewall-right"  id="<?php echo $row['id']  ?>" onclick="openmodal(this.id,`<?php echo $row['subsec3_title'] ?>`)">
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                        Read More
                                                    </div>
                                                    <div>
                                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
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
            <!--checking overlay-->
            
            <?php
                $sql = "SELECT * FROM `sections` WHERE `id` = 'Wedc_Overlays_1';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <!-- for WEDC -->
                            <!-- <div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                                aria-hidden="true">
                                <div class="overlay-dialog overlay-dialog-cstm" role="document">
                                    <div class="filter-modal_content cstm-ch">
                                        <div class="modal-header overlaymodal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="assets/icons/cross_big.png">
                                            </button>
                                            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row["subsec1_title"]; ?></h4>
                                        </div>
                                        <div class="modal-body overlaymodal-body">
                                            <p>
                                                <?php echo $row["subsec1_desc"]; ?>
                                            </p>
                                            <div>
                                                <div class="text_btnnew viewall-right">
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt">
                                                            <?php echo $row["subsec1_btn1"]?>
                                                        </div>
                                                        <div>
                                                            <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!--for GSCASH -->
                            <div class="modal fade" id="overlay2" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                                aria-hidden="true">
                                <div class="overlay-dialog overlay-dialog-cstm" role="document">
                                    <div class="filter-modal_content cstm-ch">
                                        <div class="modal-header overlaymodal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="assets/icons/cross_big.png">
                                                <!-- <span aria-hidden="true">&times;</span> -->
                                            </button>
                                            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row["subsec2_title"]; ?></h4>
                                        </div>
                                        <div class="modal-body overlaymodal-body">
                                            <p>
                                                <?php echo $row["subsec2_desc"]; ?>
                                            </p>
                                            <div>
                                                <div class="text_btnnew viewall-right" >
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt">
                                                            <?php echo $row["subsec2_btn1"]; ?>
                                                        </div>
                                                        <div>
                                                            <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--for POSH -->
                            <div class="modal fade" id="overlay3" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                                aria-hidden="true">
                                <div class="overlay-dialog overlay-dialog-cstm" role="document">
                                    <div class="filter-modal_content cstm-ch">
                                        <div class="modal-header overlaymodal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="assets/icons/cross_big.png">
                                                <!-- <span aria-hidden="true">&times;</span> -->
                                            </button>
                                            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row["subsec3_title"]; ?></h4>
                                        </div>
                                        <div class="modal-body overlaymodal-body">
                                            <p>
                                                <?php echo $row["subsec3_desc"]; ?>
                                            </p>
                                            <div>
                                                <div class="text_btnnew viewall-right" >
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt">
                                                            <?php echo $row["subsec3_btn1"]; ?>
                                                        </div>
                                                        <div>
                                                            <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
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
            <?php
                $sql = "SELECT * FROM `sections` WHERE `id` = 'Wedc_Overlays_2';";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {
                        ?>
                            <!-- for WEDC -->
                            <div class="modal fade" id="overlay4" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                                aria-hidden="true">
                                <div class="overlay-dialog overlay-dialog-cstm" role="document">
                                    <div class="filter-modal_content cstm-ch">
                                        <div class="modal-header overlaymodal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="assets/icons/cross_big.png">
                                                <!-- <span aria-hidden="true">&times;</span> -->
                                            </button>
                                            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row["subsec1_title"]; ?></h4>
                                        </div>
                                        <div class="modal-body overlaymodal-body">
                                            <p>
                                                <?php echo $row["subsec1_desc"]; ?>
                                            </p>
                                            <div>
                                                <div class="text_btnnew viewall-right" >
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt">
                                                            <?php echo $row["subsec1_btn1"] ?>
                                                        </div>
                                                        <div>
                                                            <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--for GSCASH -->
                            <div class="modal fade" id="overlay5" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                                aria-hidden="true">
                                <div class="overlay-dialog overlay-dialog-cstm" role="document">
                                    <div class="filter-modal_content cstm-ch">
                                        <div class="modal-header overlaymodal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="assets/icons/cross_big.png">
                                                <!-- <span aria-hidden="true">&times;</span> -->
                                            </button>
                                            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row["subsec2_title"]; ?></h4>
                                        </div>
                                        <div class="modal-body overlaymodal-body">
                                            <p>
                                                <?php echo $row["subsec2_desc"]; ?>
                                            </p>
                                            <div>
                                                <div class="text_btnnew viewall-right" >
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt">
                                                            <?php echo $row["subsec2_btn1"]; ?>
                                                        </div>
                                                        <div>
                                                            <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--for POSH -->
                            <div class="modal fade" id="overlay6" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                                aria-hidden="true">
                                <div class="overlay-dialog overlay-dialog-cstm" role="document">
                                    <div class="filter-modal_content cstm-ch">
                                        <div class="modal-header overlaymodal-header">
                                            <div>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <img src="assets/icons/cross_big.png">
                                                    <!-- <span aria-hidden="true">&times;</span> -->
                                                </button>
                                            </div>
                                            <h4 class="filter-modaltitle" id="modalLabel"><?php echo $row["subsec3_title"]; ?></h4>
                                        </div>
                                        <div class="modal-body overlaymodal-body">
                                            <p>
                                                <?php echo $row["subsec3_desc"]; ?>
                                            </p>
                                            <div class="text_btnnew viewall-right" >
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                        <?php echo $row["subsec3_btn1"]; ?>
                                                    </div>
                                                    <div>
                                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
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

       <!-- for WEDC -->
       <div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                                aria-hidden="true">
                                <div class="overlay-dialog overlay-dialog-cstm" role="document">
                                    <div class="filter-modal_content cstm-ch">
                                        <div class="modal-header overlaymodal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="assets/icons/cross_big.png">
                                                <!-- <span aria-hidden="true">&times;</span> -->
                                            </button>
                                            <h4 class="filter-modaltitle" id="title"></h4>
                                        </div>
                                        <div class="modal-body overlaymodal-body">
                                            <p id="desc">
                                               
                                            </p>
                                            <div>
                                                <div class="text_btnnew viewall-right" id="hlink">
                                                    <div class="text_btnnew_innrdiv">
                                                        <div class="text_btnnew_txt" id="btnm">
                                                        </div>
                                                        <div>
                                                            <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                                        </div>
                                                    </div>
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
    <!-- jQuery -->
    <script>
        $('#filtersearch').click(function() {
            //$('#filtersearch').css('display', 'none');
            $("#filtersearch-show").slideToggle();
            $('#filtersearch-show').css('display', 'flex');

            //    $(".search-box").slideDown("slow");
        })

        function clearall() {
            console.log('clearall');
            $('input:checked').removeAttr('checked');
            $('.smallchip-div').css('display', 'none');
            $("#selected").text($('input[name=lineup]:checked').length);
            //  $('input:checked').attr('checked', false); // Unchecks it
        }
        let dept = [];
        $('.dept').on('click', function() {
            console.log($(this).val());
            var depul = document.getElementById('depul');
            depul.style.height = '74%';

            var deptnm = $(this).val();
            console.log(jQuery.inArray(deptnm, dept) === -1);

            if (jQuery.inArray(deptnm, dept) === -1) {
                $(".dept:checked").each(function() {
                    //$(".dept:checked").removeAttr('checked');

                    dept.push(deptnm);
                    dept = dept.filter((item,
                        index) => dept.indexOf(item) === index);


                });
            } else {
                console.log('remove');
                const branchindex = dept.indexOf(deptnm);
                console.log(branchindex);
                dept.splice(branchindex, 1);
                closechip(deptnm);
                // dept.filter((item,
                // index) =>array.splice(index, 1));
            }
            console.log(dept);
            $('#selectiondiv').css('display', 'inline-flex');
            $("#selected").text(dept.length);
            $('.selecte_no').append(` <div class="smallchip-div" id=` + deptnm + `>
                                                <div class="smallchip-txt">` + deptnm +
                ` </div>
                                                <div class="forward_arrw">
                                                    <img src="assets/icons/cross.png" class="img-size" onclick="closechip(` +
                deptnm + `)" />
                                                </div>
                                            </div>`);
            //  dept.pop();
        });

        function closechip(chipid) {
            console.log(chipid);
            //  console.log(chipid[0].id);
            var chip = document.getElementById(chipid[0].id);
            console.log(chip);
            if (chip == null) {
                $('#' + chip + ':checked').removeAttr('checked');
                document.getElementById(chipid).style.display = 'none';
                console.log($('input[name="dept[]"]:checked').length);
                $("#selected").text($('input[name="dept[]"]:checked').length);
                chip.style.display = 'none';
            } else {
                $('#' + chip.id + ':checked').removeAttr('checked');
                chip.style.display = 'none';
                console.log($('input[name="dept[]"]:checked').length);
                $("#selected").text($('input[name="dept[]"]:checked').length);
            }
            // console.log(chip.id);
            //console.log($('#'+chip.id+':checked'));

            //$('#mech').prop('checked', false);
        }

        function filterFunction() {
            const input = document.getElementById("searchterm");

            const filter = input.value.toUpperCase();

            const div = document.getElementById("depul");
            const optn = div.getElementsByTagName("li");

            for (let i = 0; i < optn.length; i++) {
                txtValue = optn[i].textContent || optn[i].innerText;
                console.log(txtValue.toUpperCase().indexOf(filter));
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    optn[i].style.display = "";
                } else {
                    optn[i].style.display = "none";
                }
            }
        }


        function openmodal(id, title) {
        var num;
          var title;
          var desc;
          var btn;
          var btnlink;
             console.log(id);
			 console.log(title);
			         
			  
                  
                }


    </script>
</body>
</html>