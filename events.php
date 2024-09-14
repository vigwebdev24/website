<?php
    include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/ncc.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/nccActivity.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/mobile.css">

    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/exam_home.css">
    <link rel="stylesheet" href="css/mblfooter.css">
    <link rel="stylesheet" href="css/newstudent.css">
    <link rel="stylesheet" href="css/program.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/eve.css">
    <link rel="stylesheet" href="dep_css/deptevents.css">
    <link rel="stylesheet" href="css/exam.css">
	 <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>

    <!-- Include Locomotive Scroll JS -->
</head>
<body>
    <?php
        include_once 'connect.php';
        include_once 'navbar.php';
        function addOrdinalSuffix($day)
        {
            if (!in_array(($day % 100), array(11, 12, 13))) {
                switch ($day % 10) {
                    case 1:
                    return $day . 'st';
                    case 2:
                    return $day . 'nd';
                    case 3:
                    return $day . 'rd';
                }
            }
            return $day . 'th';
        }
        $sqlquery22 ="SELECT * FROM `events` order by date desc";
        $result2=mysqli_query($conn, $sqlquery22);
        $result3=mysqli_query($conn, $sqlquery22);
        $all = array();


        $guestlectures_len=0;
        $workshops_len=0; 
        $webinars_len=0;
        $conferences_len=0;
        $research_len=0;
        $others_len=0;


        if (mysqli_num_rows($result2) > 0) {
            while ($row = mysqli_fetch_assoc($result2)) {
                
                if($row['event_mode']=='guestlec'){
                    $guestlectures[] = $row;
                    $guestlectures_len = count($guestlectures);
                }
                else if($row['event_mode']=='Workshop'){
                    $workshops[] = $row;
                    $workshops_len = count($workshops);
                }
                else if($row['event_mode']=='Webinar'){
                    $webinars[] = $row;
                    $webinars_len = count($webinars);
                }
                else if($row['event_mode']=='Conference'){
                    $conferences[] = $row;
                    $conferences_len = count($conferences);
                }
                else if ($row['event_mode']=='Research'){
                    $research[] = $row;
                    $research_len = count($research);
                }
                else{
                    $others[] = $row;
                    $others_len = count($others);
                }
            }
	    } else {
            echo "No Events found.";
        }
    ?>
    <div class="container home-div1">
        <div class="newstudent-div-space">
            <div style="width: 100%;">
                <h1 class="activities-title2">Events</h1>
                <p class="activities-description2">Stay informed and connected with the latest university events</p>
            </div>
            <div style="display: flex;flex-direction: column;align-items: flex-start;gap: var(--Spacing-Spacing-Mega-L, 61px);width:100%;">
                <div class="news-page">
                    <div class="news-pgtitle">Showing All Events</div>
                    <div class="search-filter-container" style="margin-top:0;">
                        <div class="search-container">
                            <span class="search-input-container">
                                <img src="assets/svgicons/search.svg" alt="" class="prog-search-icon" />
                                <input type="text" class="search-input" id="search" placeholder="Search for Programs"
                                    autofocus />
                            </span>
                            <div class="search-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="w3-bar w3-black news-tabbox" id="normalmenu" style="display:flex;">
                    <button class="w3-bar-item w3-button news-tab tab-active" id="all_btn" onclick="openCity('All', '')">All</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="GuestLectures_btn" onclick="openCity('GuestLectures', '')">GuestLectures</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="Workshops_btn" onclick="openCity('Workshops', '')">Workshops</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="Webinars_btn" onclick="openCity('Webinars', '')">Webinars</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="Conferences_btn" onclick="openCity('Conferences', '')">Conferences</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="Research_btn" onclick="openCity('Research', '')">Research</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="Others_btn" onclick="openCity('Others', '')">Others</button>
                </div>
				<!-- Dropdown for smaller screens -->
                <div class="dropDown" id="dropdownMenu" style="display:none;">
                    <select onchange="openCity(this.value, '')">
                        <option value="All">All</option>
                        <option value="GuestLectures">Guest Lectures</option>
                        <option value="Workshops">Workshops</option>
                        <option value="Webinars">Webinars</option>
                        <option value="Conferences">Conferences</option>
                        <option value="Research">Research</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
				<!-- All Starts -->
				<div id="All" class="w3-container city" style="width:100%;">
					
					<?php 
					    if($guestlectures_len>0){
                    ?>
                            <div class="news-type">
                                <div class="news-count">
                                    <h2 class="news-typenm">Guest Lectures</h2>
                                    <div class="text_btnnew viewall-right">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt" onclick="openCity('GuestLectures', 'GuestLectures_btn')">
                                                View All (<?php echo $guestlectures_len; ?>)
                                            </div>
                                            <div>
                                                <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg" style="width: 16px;height: 16px;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ntf-content-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='guestlec' ORDER BY Date DESC;";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    $i=0;
                                                    while($row71 = $result71->fetch_assoc() and $i<4){
                                        ?>
                                        <div class="depteve_imgdetls_innrdiv"  <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                            <img src="departments/<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                            <div class="depteve_details_div">
                                                            
                                                <div class="depteve_details_innrdiv">
                                                <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                $month = $notf_dbdate->format('F');
                                                $notif_dt= $notf_dbdate->format('jS');
                                                $notif_yr= $notf_dbdate->format('y'); ?>

                                                    <div class="depteve_date">
                                                        <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                    </div>
                                                    <div class="depteve_txt">
                                                        <?php echo $row71['title']?>
                                                    </div>
                                                </div>

                                                <div class="depteve_author">
                                                    <?php echo $row71['caption']?>
                                                </div>

                                            </div>
                                        </div>
                                            <?php $i=$i+1;}}?>
                                </div>
                            </div>
					   <?php  
                            }
                        ?>
					 
                     <?php 
					    if($workshops_len>0){
                    ?>
                            <div class="news-type">
                                <div class="news-count">
                                    <h2 class="news-typenm">Workshops</h2>
                                    <div class="text_btnnew viewall-right">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt" onclick="openCity('Workshops', 'Workshops_btn')">
                                                View All (<?php echo $workshops_len; ?>)
                                            </div>
                                            <div>
                                                <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg" style="width: 16px;height: 16px;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ntf-content3-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='Workshop' ORDER BY Date DESC;";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    $i=0;
                                                    while($row71 = $result71->fetch_assoc() and $i<3){
                                        ?>
                                        <div class="depteve_imgdetls_innrdiv">
                                            <div class="depteve_imgdetls_workshop"  <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                                <img src="departments/<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                                <div class="depteve_details_div">

                                                    <div class="depteve_details_innrdiv">
                                                    <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                    $month = $notf_dbdate->format('F');
                                                    $notif_dt= $notf_dbdate->format('jS');
                                                    $notif_yr= $notf_dbdate->format('y'); ?>

                                                        <div class="depteve_date">
                                                            <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                        </div>
                                                        <div class="depteve_txt">
                                                            <?php echo $row71['title']?>
                                                        </div>
                                                    </div>

                                                    <div class="depteve_author">
                                                        <?php echo $row71['caption']?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php $i=$i+1;}}?>
                                </div>
                            </div>
					   <?php  
                            }
                        ?>
                        <?php 
					    if($webinars_len>0){
                    ?>
                            <div class="news-type">
                                <div class="news-count">
                                    <h2 class="news-typenm">Webinars</h2>
                                    <div class="text_btnnew viewall-right">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt" onclick="openCity('Webinars', 'Webinars_btn')">
                                                View All (<?php echo $webinars_len; ?>)
                                            </div>
                                            <div>
                                                <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg" style="width: 16px;height: 16px;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ntf-content-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='Webinar' ORDER BY Date DESC;";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    $i=0;
                                                    while($row71 = $result71->fetch_assoc() and $i<4){
                                        ?>
                                        <div class="depteve_imgdetls_innrdiv"  <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                            <img src="departments/<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                            <div class="depteve_details_div">

                                                <div class="depteve_details_innrdiv">
                                                    <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                    $month = $notf_dbdate->format('F');
                                                    $notif_dt= $notf_dbdate->format('jS');
                                                    $notif_yr= $notf_dbdate->format('y'); ?>

                                                    <div class="depteve_date">
                                                        <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                    </div>
                                                    <div class="depteve_txt">
                                                        <?php echo $row71['title']?>
                                                    </div>
                                                </div>

                                                <div class="depteve_author">
                                                    <?php echo $row71['caption']?>
                                                </div>

                                            </div>
                                        </div>
                                    <?php $i=$i+1;}}?>
                                </div>
                            </div>
					   <?php  
                            }
                        ?>
					 
					 
					 <!--Research notifications starts-->
				<?php 
					    if($research_len>0){
                    ?>
                            <div class="news-type">
                                <div class="news-count">
                                    <h2 class="news-typenm">Research</h2>
                                    <div class="text_btnnew viewall-right">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt" onclick="openCity('Research', 'Research_btn')">
                                                View All (<?php echo $research_len; ?>)
                                            </div>
                                            <div>
                                                <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg" style="width: 16px;height: 16px;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ntf-content-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='Research' ORDER BY Date DESC;";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    $i=0;
                                                    while($row71 = $result71->fetch_assoc() and $i<4){
                                        ?>
                                        <div class="depteve_imgdetls_innrdiv"  <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                            <img src="<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                            <div class="depteve_details_div">
                                                            
                                                <div class="depteve_details_innrdiv">
                                                <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                $month = $notf_dbdate->format('F');
                                                $notif_dt= $notf_dbdate->format('jS');
                                                $notif_yr= $notf_dbdate->format('y'); ?>

                                                    <div class="depteve_date">
                                                        <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                    </div>
                                                    <div class="depteve_txt">
                                                        <?php echo $row71['title']?>
                                                    </div>
                                                </div>

                                                <div class="depteve_author">
                                                    <?php echo $row71['caption']?>
                                                </div>

                                            </div>
                                        </div>
                                            <?php $i=$i+1;}}?>
                                </div>
                            </div>
					   <?php  
                            }
                        ?>
					 
					 <!--Research notifications starts-->
					 
					 
					 
					 
                     <?php 
					    if($conferences_len>0){
                    ?>
                            <div class="news-type">
                                <div class="news-count">
                                    <h2 class="news-typenm">Conferences</h2>
                                    <div class="text_btnnew viewall-right">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt" onclick="openCity('Conferences', 'Conferences_btn')">
                                                View All (<?php echo $conferences_len; ?>)
                                            </div>
                                            <div>
                                                <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg" style="width: 16px;height: 16px;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ntf-content2-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='Conference' ORDER BY Date DESC;";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    $i=0;
                                                    while($row71 = $result71->fetch_assoc() and $i<2){
                                        ?>
                                        <div class="depteve_imgdetls_innrdiv">
                                            <div class="depteve_imgdetls_conference" style="cursor:pointer;" <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                                <img src="<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                                <div class="depteve_details_div">

                                                    <div class="depteve_details_innrdiv">
                                                    <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                        $month = $notf_dbdate->format('F');
                                                        $notif_dt= $notf_dbdate->format('jS');
                                                        $notif_yr= $notf_dbdate->format('y'); ?>

                                                        <div class="depteve_date">
                                                            <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                        </div>
                                                        <div class="depteve_txt">
                                                            <?php echo $row71['title']?>
                                                        </div>
                                                    </div>

                                                    <div class="depteve_author">
                                                        <?php echo $row71['caption']?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                            <?php $i=$i+1; }}?>
                                </div>
                            </div>
					   <?php  
                            }
                        ?>
					 
                     <?php 
					    if($others_len>0){
                    ?>
                            <div class="news-type">
                                <div class="news-count">
                                    <h2 class="news-typenm">Others</h2>
                                    <div class="text_btnnew viewall-right">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt" onclick="openCity('Others', 'Others_btn')">
                                                View All (<?php echo $others_len; ?>)
                                            </div>
                                            <div>
                                                <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg" style="width: 16px;height: 16px;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ntf-content2-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM events WHERE (event_mode != 'Research' AND event_mode != 'Workshop' AND event_mode != 'guestlec' 
                                                        AND event_mode != 'Webinar' AND event_mode != 'Conference') OR event_mode IS NULL ORDER BY Date DESC;";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    $i=0;
                                                    while($row71 = $result71->fetch_assoc() and $i<2){
                                        ?>
                                        <div class="ulife-column-18">
                                                    <div class="ulife-div-120" <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                                    <img loading="lazy" src=<?php echo $row71['img1']; ?> class="ulife-img-30" />
                                                    <div class="ulife-div-121">
                                                        <div class="ulife-div-122"><?php echo $row71['title']; ?></div>
                                                        <div class="ulife-div-123"><?php
                                                                                    echo date("d", strtotime($row71['date'])), " ", strtoupper(substr(date("F", strtotime($row71['date'])), 0, 3)), " ", substr($row71['date'], 0, 4);
                                                                                    ?></div>
                                                    </div>
                                                    </div>
                                                </div>
                                            <?php $i=$i+1; }}?>
                                </div>
                            </div>
					   <?php  
                            }
                        ?>
					 
					 
				</div>
				<!--  All ends -->
				
				<!--  GuestLecture starts -->
				 <div id="GuestLectures" class="w3-container city" style="display:none">
					
					
                 <?php 
					    if($guestlectures_len>0){
                    ?>
                            <div class="news-type">
                                <div class="ntf-content-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='guestlec' ORDER BY Date DESC";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    while($row71 = $result71->fetch_assoc()){
                                        ?>
                                        <div class="depteve_imgdetls_innrdiv"  <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                            <img src="departments/<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                            <div class="depteve_details_div">

                                                <div class="depteve_details_innrdiv">
                                                <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                    $month = $notf_dbdate->format('F');
                                                    $notif_dt= $notf_dbdate->format('jS');
                                                    $notif_yr= $notf_dbdate->format('y'); ?>

                                                    <div class="depteve_date">
                                                        <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                    </div>
                                                    <div class="depteve_txt">
                                                        <?php echo $row71['title']?>
                                                    </div>
                                                </div>

                                                <div class="depteve_author">
                                                    <?php echo $row71['caption']?>
                                                </div>

                                            </div>
                                        </div>
                                    <?php }}?>
                                </div>
                            </div>
					   <?php  
                            }else{
					       echo 'No GuestLecture Events';
					}

									?>
					 
				</div>	 
<!--  GuestLecture ends -->
				
				
				
				<!--Workshops starts -->
				 <div id="Workshops" class="w3-container city" style="display:none">
					
					
                 <?php 
					    if($workshops_len>0){
                    ?>
                            <div class="news-type">
                                <div class="ntf-content3-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='Workshop' ORDER BY Date DESC";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    while($row71 = $result71->fetch_assoc()){
                                        ?>
                                        <div class="depteve_imgdetls_innrdiv">
                                            <div class="depteve_imgdetls_workshop"  <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                                <img src="departments/<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                                <div class="depteve_details_div">

                                                    <div class="depteve_details_innrdiv">
                                                    <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                            $month = $notf_dbdate->format('F');
                                                            $notif_dt= $notf_dbdate->format('jS');
                                                            $notif_yr= $notf_dbdate->format('y'); ?>

                                                    <div class="depteve_date">
                                                        <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                    </div>
                                                        <div class="depteve_txt">
                                                            <?php echo $row71['title']?>
                                                        </div>
                                                    </div>

                                                    <div class="depteve_author">
                                                        <?php echo $row71['caption']?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php }}?>
                                </div>
                            </div>
					   <?php  
                            }else{
					 echo 'No Workshops Events';
					}

									?>
					 
					 
				</div>
<!-- Workshops ends -->
              
				<!--Webinars starts -->
                <div id="Webinars" class="w3-container city" style="display:none">
					
					
                <?php 
					    if($webinars_len>0){
                    ?>
                            <div class="news-type">
                                <div class="ntf-content-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='Webinar' ORDER BY Date DESC";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    while($row71 = $result71->fetch_assoc()){
                                        ?>
                                        <div class="depteve_imgdetls_innrdiv" <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                            <img src="departments/<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                            <div class="depteve_details_div">

                                                <div class="depteve_details_innrdiv">
                                                <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                    $month = $notf_dbdate->format('F');
                                                    $notif_dt= $notf_dbdate->format('jS');
                                                    $notif_yr= $notf_dbdate->format('y'); ?>

                                                    <div class="depteve_date">
                                                        <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                    </div>
                                                    <div class="depteve_txt">
                                                        <?php echo $row71['title']?>
                                                    </div>
                                                </div>

                                                <div class="depteve_author">
                                                    <?php echo $row71['caption']?>
                                                </div>

                                            </div>
                                        </div>
                                    <?php }}?>
                                </div>
                            </div>
					   <?php  
                            } else{
                        echo 'No Webinar Events';
                       }
   
                                       ?>
                        
                        
                   </div>
   <!-- Webinars ends -->
				<!--conferences starts -->
                <div id="Conferences" class="w3-container city" style="display:none">
					
					
                    <?php 
					    if($conferences_len>0){
                    ?>
                    <div class="news-type">
                        <div class="ntf-content2-wrapper" style="margin-top:0;">
                            <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='Conference' ORDER BY Date DESC";
                                    $result71=mysqli_query($conn, $sqlquery71);
                                    if($result71->num_rows>0){
                                        while($row71 = $result71->fetch_assoc()){
                                        ?>
                                            <div class="depteve_imgdetls_innrdiv">
                                                <div class="depteve_imgdetls_conference" style="cursor:pointer;" <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                                    <img src="<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                                    <div class="depteve_details_div">
                                                        <div class="depteve_details_innrdiv">
                                                        <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                            $month = $notf_dbdate->format('F');
                                                            $notif_dt= $notf_dbdate->format('jS');
                                                            $notif_yr= $notf_dbdate->format('y'); ?>

                                                    <div class="depteve_date">
                                                        <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                    </div>
                                                            <div class="depteve_txt">
                                                                <?php echo $row71['title']?>
                                                            </div>
                                                        </div>

                                                        <div class="depteve_author">
                                                            <?php echo $row71['caption']?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php }}?>
                        </div>
                    </div>
					   <?php  
                            }else{
                                echo 'No Conference Events';
                            }
                        ?>
                </div>
   <!--Conferences ends -->
				<!--Research notifications starts-->
				 <div id="Research" class="w3-container city" style="display:none;width: 100%;">
                 <?php 
					    if($research_len>0){
                    ?>
                            <div class="news-type">
                                <div class="ntf-content-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM  events  where event_mode='Research' ORDER BY Date DESC";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    while($row71 = $result71->fetch_assoc()){
                                        ?>
                                        <div class="depteve_imgdetls_innrdiv"  <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                            <img src="<?php echo $row71['img1']?>" class="depteve_img" alt="" srcset="">
                                            <div class="depteve_details_div">

                                                <div class="depteve_details_innrdiv">
                                                <?php $notf_dbdate =new DateTime($row71['date']);  // get the event date and set it to the variable $date 
                                                    $month = $notf_dbdate->format('F');
                                                    $notif_dt= $notf_dbdate->format('jS');
                                                    $notif_yr= $notf_dbdate->format('y'); ?>

                                                    <div class="depteve_date">
                                                        <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                                    </div>
                                                    <div class="depteve_txt">
                                                        <?php echo $row71['title']?>
                                                    </div>
                                                </div>

                                                <div class="depteve_author">
                                                    <?php echo $row71['caption']?>
                                                </div>

                                            </div>
                                        </div>
                                    <?php }}?>
                                </div>
                            </div>
					   <?php  
                            }else{
					       echo 'No Research Events';
					}

									?>
				</div>
					 <!--Research notifications ends-->
                    <!--Others starts -->
                <div id="Others" class="w3-container city" style="display:none;width:100%;">
					
					
                <?php 
					    if($others_len>0){
                    ?>
                            <div class="news-type">
                                <div class="ntf-content2-wrapper" style="margin-top:0;">
                                    <?php   $sqlquery71 ="SELECT * FROM events WHERE (event_mode != 'Research' AND event_mode != 'Workshop' AND event_mode != 'guestlec' 
                                                        AND event_mode != 'Webinar' AND event_mode != 'Conference') OR event_mode IS NULL ORDER BY Date DESC;";
                                                $result71=mysqli_query($conn, $sqlquery71);
                                                if($result71->num_rows>0){
                                                    while($row71 = $result71->fetch_assoc()){
                                        ?>
                                        <div class="ulife-column-18">
                                                    <div class="ulife-div-120" <?php if(!empty($row71['hlink'])){ ?>onclick="window.open('<?php echo $row71['hlink']?>',  '_blank')"<?php }?>>
                                                    <img loading="lazy" src=<?php echo $row71['img1']; ?> class="ulife-img-30" />
                                                    <div class="ulife-div-121">
                                                        <div class="ulife-div-122"><?php echo $row71['title']; ?></div>
                                                        <div class="ulife-div-123"><?php
                                                                                    echo date("d", strtotime($row71['date'])), " ", strtoupper(substr(date("F", strtotime($row71['date'])), 0, 3)), " ", substr($row71['date'], 0, 4);
                                                                                    ?></div>
                                                    </div>
                                                    </div>
                                                </div>
                                            <?php }}?>
                                </div>
                            </div>
					   <?php  
                            }else{
                                echo 'No Events';
                            }
                        ?>
                </div>
   <!--Others ends -->
				
				





                    <div id="mblftr">
                        <?php

      include_once 'mblfooter.php';
      ?>
                    </div>



                    <div id="ftr" style="display: block;width:100%;">
                        <?php

      include_once 'footer.php';
      ?>
                    </div>
                </div>
                <script src="js/moment.js"></script>
                <script>
					
                function openCity(cityName, tabid) {
					console.log(tabid);
                    var i;
                    var x = document.getElementsByClassName("city");
					console.log(x);
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    document.getElementById(cityName).style.display = "block";
					 var btns= document.getElementsByClassName("news-tab");
			   for (i = 0; i < btns.length; i++) {
								btns[i].classList.remove("tab-active");
				   
                    }
					$('#'+tabid).addClass("tab-active");
					
					
                }
					
					let buttons = document.querySelectorAll(".news-tab"); // queryselectorall will return and nodelist of button with classnaem .unLockUser-button
buttons.forEach((btn, index) => {// index will be current button index
  btn.addEventListener("click", function(e) {
    console.log(e.target.id);
	  var btn_id = e.target.id;
	  var btns= document.getElementsByClassName("news-tab");
	   for (i = 0; i < btns.length; i++) {
                        btns[i].classList.remove("tab-active");
		   //element.classList.remove("mystyle");
                    }
								
	  $('#'+btn_id).addClass("tab-active");
  });
});

                function openmodal(id) {
                    var news = [];
                    console.log(id);
                    <?php  $json = json_encode($all); ?>
                    var json = <?=$json?>;
                    console.log(json);
                    console.log(moment().format('MMMM Do YYYY'));
                    for (i = 0; i < json.length; i++) {
                        if (id == json[i].id) {
                            console.log(json[i].title);
                            $('#overlaynews').modal({
                                show: 'true'
                            });

                            console.log($("#newsimg")[0].src);
                            console.log(moment().format('MMMM Do YYYY'));

                            //     $dateObj = new DateTime($date);

                            // $day = addOrdinalSuffix($dateObj->format('j'));
                            // $month = $dateObj->format('F');

                            // $year = $dateObj->format('Y'); // 4 digits of the year

                            // $dt = "$day $month $year";

                            console.log(moment(json[i].date).format('Do MMMM  YYYY'));
                            $("#time").html(moment(json[i].date).format('Do MMMM  YYYY'));
                            $("#newsimg")[0].src = json[i].img;
                            $("#newstitle").text(json[i].subheading);
                            $("#newsdesc").html(json[i].descr);

                            //$("#newsimg").text(json_data); 
                            //$(".modal-body").text(json_data); 
                        }
                    }
                }

                function naac() {
                    window.location.href = "https://vignan.ac.in/naac.php"
                }

                function dsir() {
                    window.location.href = "https://vignan.ac.in/iqacranks.php"
                }

                function accreditations() {
                    window.location.href = "https://vignan.ac.in/iqaccer.php";
                }

                function parentteach() {
                    window.location.href =
                        "https://vignan.ac.in/pdf/Parents%20Teachers%20Association%20Executive%20Committee%2018.07.2023.pdf";
                }

                function advisory() {
                    window.location.href =
                    "https://vignan.ac.in/pdf/Admissions%20Advisory%20Committee%2022.02.2022.pdf";
                }

                function eval() {
                    window.location.href =
                        "https://vignan.ac.in/pdf/Evaluation%20Standards%20Committee%2025.04.2022.pdf";
                }

                function institucomm() {
                    window.location.href = "https://vignan.ac.in/insticomm.php";
                }

                function annualreports() {
                    window.location.href = "https://vignan.ac.in/areports.php";
                }

                function offcampus() {
                    window.location.href = "https://vignan.ac.in/hyd/";
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

                document.querySelector('.div-232').addEventListener('click', function() {
                    var emailInput = document.getElementById('emailInput');
                    // Toggle the display of the input field
                    if (emailInput.style.opacity === "0" || emailInput.style.opacity === "") {
                        emailInput.style.opacity = "1";
                        emailInput.style.maxHeight = "40px";
                        this.style.transform = "translateY(-20px)";
                    } else {
                        emailInput.style.opacity = "0";
                        emailInput.style.maxHeight = "0px"; // Hide the input field
                        this.style.transform = "translateY(0px)"; // Move the div-232 text back
                    }
                });

                // Check screen size and toggle visibility
                function toggleDivContent() {
                    var smallScreenDiv = document.querySelector("#mblftr");
                    var largeScreenDiv = document.querySelector("#ftr");
                    if (window.innerWidth <= 900) {
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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Bootstrap JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script>
                var initialSmallScreenContent = document.querySelector("#dropdownMenu").innerHTML;
                var initialLargeScreenContent = document.querySelector("#normalmenu").innerHTML;
                function toggleDivContent() {
                    var smallScreenDiv = document.querySelector("#dropdownMenu");
                    var largeScreenDiv = document.querySelector("#normalmenu");
                    if (window.innerWidth <= 1000) {
                        // Empty large-screen div and show small-screen div content
                        largeScreenDiv.style.display = 'none';
                        smallScreenDiv.style.display = 'block';
                        smallScreenDiv.innerHTML = initialSmallScreenContent;
                    } else {
                        // Empty small-screen div and show large-screen div content
                        smallScreenDiv.style.display = 'none';
                        largeScreenDiv.style.display = 'flex';
                        largeScreenDiv.innerHTML = initialLargeScreenContent;
                    }
                }
                window.addEventListener("resize", toggleDivContent);
                toggleDivContent();
                function reloadOnResize() {
                    window.location.reload(); // Reloads the page when resized
                }

                // Listen for window resize event
                window.addEventListener("resize", reloadOnResize);
                </script>
            </div>

</body>