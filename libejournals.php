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
        
        .ulife-div-52 {
            width: 100%;
            display: flex;
            align-items:center;
            flex-wrap: wrap;
            column-gap: 20px;
            row-gap:61px;
            justify-content: space-between;

        }
        
        .ulife-column-7 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: calc(25% - 15px);
            height: 300px;
            box-sizing: border-box;
        }
        
        .ulife-div-53 {
            justify-content: center;
            border: 1px solid var(--Colors-Text-Color, #000);
            display: flex;
            width: 291px;
            height: 100%;
            flex-direction: column;
            font-size: 16px;
            color: var(--Colors-Text-Color, #000);
            font-weight: 400;
            margin: 0 auto;
            padding: 50px 25px;
        }
        
        .ulife-div-54 {
            margin-top: 14px;
            font: 25px/120% DM Serif Display, -apple-system, Roboto, Helvetica, sans-serif;
        }
        
        .ulife-div-55 {
            font-family: Familjen Grotesk, sans-serif;
            line-height: 22px;
            margin-top: 13px;
        }
        
        .ulife-div-56 {
            display: flex;
            margin-top: 13px;
            padding-right: 28px;
            gap: 0px;
            color: var(--Colors-Buttons-Primary-Button, #992e00);
            line-height: 140%;
        }
        @media (max-width: 1260px) and (min-width: 500px) {
            .ulife-column-7 {
            width: calc(50% - 10px); /* 2 cards per row with gap consideration */
            height: 300px; /* Consistent height */
            }
        
            .ulife-div-53 {
            width: 100%; 
            height: 100%; /* Full height of the column */
            }
        }
        
        @media (max-width: 500px) {
            .ulife-column-7 {
                width: 100%;
            }
        
            .ulife-div-53 {
            width: 100%; /* Full width of the column */
            height: 100%; /* Full height of the column */
            }
        
            .ulife-div-55 {
            font-size: 14px;
            line-height: 18px;
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
                        E-Journal Packages
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
                        <div class="ulife-div-52">
                            <?php
                                $sql = "SELECT * FROM `Cards` WHERE `cardtype` = 'lib_resources_ejournals'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="ulife-column-7">
                                <div class="ulife-div-53">
                                    <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                                font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $row['title']?></div>
                                    <div class="ulife-div-55">
                                        <?php echo $row['descr']?>
                                    </div>
                                    <div class="ulife-div-56" style="cursor:pointer;">
                                        <div class="text_btnnew viewall-right">
                                            <div class="text_btnnew_innrdiv">
                                                <div class="text_btnnew_txt">
                                                    <?php echo $row['btn_nm']?>
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