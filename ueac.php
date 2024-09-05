<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, 
maximum-scale=1.0, user-scalable=no" />
  <title>Vignan University</title>
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/ueac.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/mblfooter.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once 'connect.php'; include_once  'navbar.php'; ?>
    <div class="container ueac-div1">
        <!--UEAC INTRO STARTS -->
        <div class="ueac-intro">
            <?php 
                $query1 = "SELECT title,descr,btn_nm1, btn1_hlink,img1 FROM sections WHERE id='ueac_sec1';";
                $result = mysqli_query($conn, $query1);
                if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            ?>
            <div class="ueac-column ueac-column-1">
                <div class="ueac-div-inner-column-1">
                    <div class="ueac-div-title"><?php echo $row['title'];?></div>
                    <div class="ueac-div-desc"><?php echo $row['descr']; ?></div>
                    <div class="ueac-div-btn" style="margin-top: 20px;">
                    <button class="cta_button_primary " onclick="window.open('ueaclogin.php',  '_blank')">
                        <div class="Ss-btn_txt" >Login</div>
                        <img src="assets/icons/Button_forwardarrow.png">
                    </button>
                    </div>
                </div>
            </div>
            <div class="ueac-column ueac-column-2">
                <div class=".ueac-div-inner-column-2">
                <img loading="lazy" src="assets/images/ueachome.png" alt="image" class="ueac-img-1">
                </div>
            </div>
            <?php } ?>
        </div>
        <!--UEAC INTRO ENDS -->
        
        <!--UEAC OVERVIEW STARTS -->
        <div class="ueac-overview">
            <?php 
                $query2 = "SELECT * FROM `sections` WHERE id='ueac_card1';";
                $result = mysqli_query($conn, $query2);
                if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            ?>
            <div class="ueac-overview-left">
                <div class="ueac-overview-title section-title"><?php echo $row['title'];?></div>
                <div class="ueac-overview-desc"><?php echo $row['descr'];?></div>
            </div>
            <div class="ueac-overview-right">
                <div class="non-clk_card_innrdiv">
                    <div class="non-clk_card_txtdiv">
                        <div class="non-clk_card_txt-innrdiv">
                            <span class="non-clk_num"><?php echo $row['subsec1_title'];?></span>
                        </div>
                        <div class="non-clk_title"><?php echo $row['subsec1_desc'];?></div>
                    </div>
                    <div class="non-clk_imgbrdr">
                        <img src="assets/svgicons/circlestar.svg">
                        <div class="non-clk_brdr"></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--UEAC OVERVIEW ENDS -->

        <!--UEAC TEAM STARTS -->
        <div class="ueac-team">
            <div class="ueac-team-top">
                <div class="ueac-team-title section-title"> Team </div>
                <!-- <div class="search-filter-container">
                    <div class="search-container">
                        <span class="search-input-container">
                        <img src="assets/svgicons/search.svg" alt="" class="prog-search-icon">
                        <input type="text" class="search-input" id="searchprg" onchange="handleSearch()" placeholder="Search">
                        </span>
                        <div class="search-divider"></div>
                    </div>
                    <button class="filter_button_secondary filter_secondary-btn_txt"> <img src="assets/icons/filter_list.png"> &nbsp;Filter </button>
                </div> -->
            </div>
            <div class="ueac-team-bottom">
                <?php
                $priorityOrder = ['Program Officer', 'Associate Dean', 'UEAC Coordinator'];
                $query3 = "SELECT * FROM `peoples` WHERE type='ueac' ORDER BY FIELD(designation, '" . implode("','", $priorityOrder) . "') LIMIT 4";
                $result = $conn->query($query3);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    
                ?>
                <div class="member-card">
                    <img src="<?php echo $row['img']; ?>" class="profcard-image" alt="Description of the image">
                    <div class="member-content">
                        <div class="member-name"><?php echo $row['name']; ?></div>
                        <div class="member-role"><?php echo $row['designation']; ?></div>
                    </div>
                </div>
                <?php } } ?>
            </div>
            <div class="ueac-team-btn" onclick="window.open('ueacmembers.php',  '_blank')">
                <div class="cta_button_primary Ss-btn_txt width100 ">
                    <div class="aboutus-div-64">View all Members</div>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                            <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9"></rect>
                        </mask>
                        <g mask="url(#mask0_2961_1144)">
                            <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <!--UEAC TEAM ENDS -->

        <!--UEAC ABHIYAAN STARTS -->
        <div class="ueac-overview">
            <?php 
                $query4 = "SELECT * FROM `sections` WHERE id='ueac_card2';";
                $result = mysqli_query($conn, $query4);
                if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            ?>
            <div class="ueac-overview-left">
                <div class="ueac-overview-title section-title"><?php echo $row['title'];?></div>
                <div class="ueac-overview-desc"><?php echo $row['descr'];?></div>
            </div>
            <div class="ueac-overview-right">
                <div class="non-clk_card_innrdiv">
                    <div class="non-clk_card_txtdiv">
                        <div class="non-clk_card_txt-innrdiv">
                            <span class="non-clk_num"><?php echo $row['subsec1_title'];?></span>
                        </div>
                        <div class="non-clk_title"><?php echo $row['subsec1_desc'];?></div>
                    </div>
                    <div class="non-clk_imgbrdr">
                        <img src="assets/svgicons/circlestar.svg">
                        <div class="non-clk_brdr"></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--UEAC ABHIYAAN ENDS -->
        
        <!--UEAC ABOUT STARTS -->
        <div class="ueac-about">
            <?php 
                $query5 = "SELECT * FROM `cards` WHERE Id LIKE 'unnat_%';";
                $result = mysqli_query($conn, $query5);
                if (mysqli_num_rows($result) > 0) {
                    $cards = [];
                    while($row = $result->fetch_assoc()) {
                        $cards[] = $row;
                    }
            ?>
            <div class="ueac-about-card">
                <div class="ueac-about-card-title"><?php echo $cards[0]['title'];?></div>
                <div class="ueac-about-card-desc"><?php echo $cards[0]['descr'];?></div>
                <div class="vismis_imgdiv">
                    <div class="vismis_imgbrdr"></div>
                    <img src="<?php echo $cards[0]['img'];?>">
                    <div class="vismis_imgbrdr"></div>
                </div>
            </div>
            <div class="ueac-about-card">
            <div class="ueac-about-card-title"><?php echo $cards[2]['title'];?></div>
                <div class="ueac-about-card-desc"><?php echo $cards[2]['descr'];?></div>
                <div class="vismis_imgdiv">
                    <div class="vismis_imgbrdr"></div>
                    <img src="<?php echo $cards[2]['img'];?>">
                    <div class="vismis_imgbrdr"></div>
                </div>
            </div>
            <div class="ueac-about-card">
            <div class="ueac-about-card-title"><?php echo $cards[1]['title'];?></div>
                <div class="ueac-about-card-desc"><?php echo $cards[1]['descr'];?></div>
                <div class="vismis_imgdiv">
                    <div class="vismis_imgbrdr"></div>
                    <img src="<?php echo $cards[2]['img'];?>">
                    <div class="vismis_imgbrdr"></div>
                </div>
            </div>
            <div class="ueac-about-card">
            <div class="ueac-about-card-title"><?php echo $cards[3]['title'];?></div>
                <div class="ueac-about-card-desc"><?php echo $cards[3]['descr'];?></div>
                <div class="vismis_imgdiv">
                    <div class="vismis_imgbrdr"></div>
                    <img src="<?php echo $cards[3]['img'];?>">
                    <div class="vismis_imgbrdr"></div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--UEAC ABOUT ENDS -->

        <!--UEAC EVENTS STARTS -->
        <div class="ueac-event">
            <?php 
                $query6 = "SELECT * FROM `sections` WHERE id='ueac_event_1';";
                $result = mysqli_query($conn, $query6);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
            ?>
            <div class="ueac-event-left">
                <div class="ueac-event-title section-title"><?php echo $row['title']; ?></div>
                <div><img style="width:100%;" src="<?php echo $row['img1']; ?>"></div>
                <div class="ueac-event-desc"><?php echo $row['descr']; ?></p>
                </div>
            </div>
            <div class="ueac-event-right">
                <div class="ueac-event-image2"><img style="width:100%;" src="<?php echo $row['img2']; ?>"></div>
                <div class="ueac-event-btn">
                    <div class="content-center"><img class="ueac-event-image3" style="border-radius: 50%;" src="<?php echo $row['img3']; ?>"></div>
                    <button class="cta_button_primary Ss-btn_txt" onclick="window.open('<?php echo $row['btn1_hlink']; ?>',  '_blank')">
						<div class="Ss-btn_txt"><?php echo $row['btn_nm1']; ?></div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                                    <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9"></rect>
                                </mask>
                                <g mask="url(#mask0_2961_1144)">
                                    <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED"></path>
                                </g>
                            </svg>
                    </button>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--UEAC EVENTS ENDS -->
        <div id="mblftr" style="margin-top: 150px;">
          <?php include_once  'mblfooter.php';?>
        </div>
        <div id="ftr" style="margin-top: 150px;">
          <?php include_once  'footer.php';?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        function toggleDivContent() {
            var smallScreenDiv = document.querySelector("#mblftr");
            var largeScreenDiv = document.querySelector("#ftr");
            if (window.innerWidth <= 700) {
                largeScreenDiv.style.display = 'none';
                smallScreenDiv.style.display = 'block';
            } else {
                smallScreenDiv.style.display = 'none';
                largeScreenDiv.style.display = 'block';
            }
        }
        window.addEventListener("resize", toggleDivContent);
        toggleDivContent();
    </script>
</body>
</html>