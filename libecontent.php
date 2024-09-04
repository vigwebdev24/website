<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="./css/mblfooter.css">
    <link rel="stylesheet" href="./css/button.css">
    <title>Vignan University</title>
    <style>
        .patent-section {
           margin-top: 0px;
        }
        @media (min-width: 1255px) {
            .container {
                width: 1255px;
            }
        }
        @media(max-width:767px) {
            .Secondary-btn_txt {
                color: #992E00;
                font-size: 16px !important;
                height: 31px !important;
                align-items: center !important;
                width: 150px !important;
            }
        }
        .patent-subhead {
            color: #000;
            font-family: "Familjen Grotesk";
            font-size: 25px;
            font-style: normal;
            font-weight: 500;
            line-height: 100%;
            text-transform: uppercase;
        }
        .patent-head {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
        }
        .patent-title {
            color: #000;
            font-family: "DM Serif Display";
            font-size: 61px;
            font-style: normal;
            font-weight: 400;
            line-height: 100%;
        }
        .patent-controls {
            display: flex;
            align-items: end;
            gap: 25px;
        }
        @media(max-width:767px){
            .patent-subhead {
                font-size:16px;
            }
            .patent-title {
                font-size: 31px;
            }
        }
        @media (max-width: 400px) {
            .patent-head {
                flex-direction:column !important;
            }
            .patent-controls {
                flex-direction: column !important;
                margin-top: 30px;
                align-items:start;

            }
        }
        @media(max-width:500px){
            .ulife-div-52 {
                display: flex !important;
                flex-direction:column;
                row-gap:25px !important;
            }
        }
        @media(max-width:1000px){
            .patentsection{
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }
        }
        .libadvCommitteeMembersSection {
            height: fit-content;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            row-gap: 80px;
        }
        .depresearchproj_outdiv {
            display: flex;
            flex-direction: column;
            column-gap: 61px;
            row-gap:25px;
        }
        
                
        .naac{
            display: flex;
            justify-content: center;
        }
        .course-card {
            justify-content: center;
            border: 1px solid var(--Colors-Text-Color, #000);
            display: flex;
            width: 291px;
            height: 180px;
            flex-direction: column;
            font-size: 16px;
            color: var(--Colors-Text-Color, #000);
            font-weight: 400;
            margin: 0 auto;
            padding: 50px 25px;
        }
        .course-cards {
            display: flex;
            flex-wrap: wrap;
            row-gap: 61px;
            column-gap:20px;
            padding-bottom: 10px;
            justify-content: flex-start;
        }
        .course-name {
            text-align: center;
            font: 25px/120% DM Serif Display, -apple-system, Roboto, Helvetica, sans-serif;
        }


        @media (max-width: 1260px) and (min-width: 500px) {
            .course-card {
                width: calc(50% - 10px); 
            }
        }

        @media (max-width: 500px) {
            .course-card {
                width: 100%; /* One card per row */
            }
        }
    </style>
</head>
<body>
    <?php include_once "navbar.php" ?>
    <div class="container home-div1">
        <div class="libadvCommitteeMembersSection">
            <div class="patent-section">
                <div class="patent-subhead">LIBRARY</div>
                <div class="patent-head">
                    <div class="patent-title">
                        E-Content
                    </div>
                    <div class="patent-controls">
                        <div class="col-lg-22" style="">
                            <button class="cta_button_secondary Secondary-btn_txt">BookSearch<img
                                    src="assets/icons/arrow_forward.png" /></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="depresearchproj_outdiv">
                <div style="display: flex;flex-direction: column;justify-content: center;
                                    gap: var(--Spacing-Spacing-xl, 25px);">
                    <div style="display:flex; row-gap:25px;">
                        <div class="course-cards naac">
                            <?php
                                $sql = "SELECT * FROM `Cards` WHERE `cardtype` = 'lib_resources_econtent'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="course-card">
                                <div class="course-name"><?php echo $row['title']?></div>
                                <div class="naac">
                                    <div class="text_btnnew ">
                                        <div class="text_btnnew_innrdiv">
                                            <a class="a" href="naac_card.php?id=cy2_card1" target="_blank">
                                                <div class="text_btnnew_txt"><?php echo $row['btn_nm']?></div>
                                            </a>
                                            <div>
                                                <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                    }
                                } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
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