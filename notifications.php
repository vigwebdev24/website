<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ncc</title>
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
	<style>
		.tab-active{
		 color: var(--Colors-Buttons-Primary-Button, #992e00);
         border-bottom: 1px solid #992e00;
		}
		
		.ntf-content-wrapper {
    display: grid;
    grid-template-columns: repeat(4, 17fr);
    align-self: center;
    margin-top: 180px;
    width: 100%;
    max-width: 1284px;
    margin-bottom: 10%;
    gap: 20px;
}
	</style>

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

  $sqlquery22 ="SELECT * FROM `notifications` order by date desc";

      $result2=mysqli_query($conn, $sqlquery22);
 $result3=mysqli_query($conn, $sqlquery22);

 $all = array();
// $admns = array();
// $stu = array();
// $alu = array();
// $career = array();
// $di = array();

	//$data = $result3->fetch_all( MYSQLI_ASSOC );
//echo json_encode( $data );
if (mysqli_num_rows($result2) > 0) {
  
    while ($row = mysqli_fetch_assoc($result2)) {
      

        //$alll[] = $row;
        // $alll_len = count($alll);
		
    
       if($row['notify_type']=='exam'){
        $academics[] = $row;
		  //echo jsonencode($academics);
        $academics_len = count($academics);
      }
      else if($row['notify_type']=='admissions'){
        $admissions[] = $row;
        $admissions_len = count($admissions);
      }
      else if ($row['notify_type']=='research'){
        $research[] = $row;
        $research_len = count($research);
      }
      else if ($row['notify_type']=='job'){
        $careers[] = $row;
        $careers_len = count($careers);
      }
      

    }
	
} else {
    echo "No Notifications found.";
}

    ?>
    <div class="container home-div1">
        <div class="newstudent-div-space">
            <div style="    width: 100%;">
                <h1 class="activities-title2">Notifications</h1>
                <p class="activities-description2">Stay informed and connected with the latest university notifications</p>

            </div>

            <div
                style="display: flex;flex-direction: column;align-items: flex-start;gap: var(--Spacing-Spacing-Mega-L, 61px);">
                <div class="news-page">
                    <div class="news-pgtitle">Showing All Notifications</div>
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

                <div class="w3-bar w3-black news-tabbox" style="">
                    <button class="w3-bar-item w3-button news-tab tab-active" id="all_btn" onclick="openCity('All', '')">All</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="aca_btn" onclick="openCity('Academic', '')">Academic</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="adm_btn" onclick="openCity('Admissions', '')">Admissions</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="res_btn" onclick="openCity('Research', '')">Research</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="car_btn" onclick="openCity('Career', '')">Career</button>
                </div>
				
				<!-- All Starts -->
				 <div id="All" class="w3-container city">
					
					
					<?php 
			
					if($academics_len > 0){?>
                        <div class="news-type">
                               <div class="news-count">
                            <h2 class="news-typenm">Academics</h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt" onclick="openCity('Academic', 'aca_btn')">
                                        View All (<?php echo $academics_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="ntf-content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($academics as $row) { 
                           if( $i1 >= 4) break;
                        $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $month = $notf_dbdate->format('F');
                    $notif_dt= $notf_dbdate->format('jS');
                    $notif_yr= $notf_dbdate->format('y'); 

                      
                          ?> <div class="notf_innrdiv">
                    <div class="notf_title"><?php echo $row['title']; ?></div>
                    <div class="notf_date"> <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?></div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">
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
                        </a>
                    </div>
                    <div class="div-notf_img" onclick="notifications()">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">

                            <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="18" height="18">
                                    <rect width="18" height="18" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2994_7519)">
                                    <path
                                        d="M11.136 14.2139L10.2822 13.3601L14.0379 9.60433H1.6687V8.36683H14.0523L10.2822 4.61106L11.136 3.7572L16.3644 8.98558L11.136 14.2139Z"
                                        fill="black" />
                                </g>
                            </svg>

                        </a>
                    </div>

                </div>
                              
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }

									?>
					 
					 
					 <!--Admissions notifications starts-->
					 <?php 
			
					if($admissions_len > 0){?>
                        <div class="news-type">
                               <div class="news-count">
                            <h2 class="news-typenm">Admissions</h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt" onclick="openCity('Admissions', 'adm_btn')">
                                        View All (<?php echo $admissions_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="ntf-content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($admissions as $row) { 
                           if( $i1 >= 4) break;
                        $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $month = $notf_dbdate->format('F');
                    $notif_dt= $notf_dbdate->format('jS');
                    $notif_yr= $notf_dbdate->format('y'); 

                      
                          ?> <div class="notf_innrdiv">
                    <div class="notf_title"><?php echo $row['title']; ?></div>
                    <div class="notf_date"> <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?></div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">
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
                        </a>
                    </div>
                    <div class="div-notf_img" onclick="notifications()">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">

                            <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="18" height="18">
                                    <rect width="18" height="18" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2994_7519)">
                                    <path
                                        d="M11.136 14.2139L10.2822 13.3601L14.0379 9.60433H1.6687V8.36683H14.0523L10.2822 4.61106L11.136 3.7572L16.3644 8.98558L11.136 14.2139Z"
                                        fill="black" />
                                </g>
                            </svg>

                        </a>
                    </div>

                </div>
                              
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }

									?>
					 <!--Admissions notifications ends-->
					 
					 
					 
					 <!--Research notifications starts-->
					  <?php 
			
					if($research_len > 0){?>
                        <div class="news-type">
                               <div class="news-count">
                            <h2 class="news-typenm">Research</h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt" onclick="openCity('Research', 'res_btn')">
                                        View All (<?php echo $research_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="ntf-content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($research as $row) { 
                           if( $i1 >= 4) break;
                        $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $month = $notf_dbdate->format('F');
                    $notif_dt= $notf_dbdate->format('jS');
                    $notif_yr= $notf_dbdate->format('y'); 

                      
                          ?> <div class="notf_innrdiv">
                    <div class="notf_title"><?php echo $row['title']; ?></div>
                    <div class="notf_date"> <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?></div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">
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
                        </a>
                    </div>
                    <div class="div-notf_img" onclick="notifications()">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">

                            <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="18" height="18">
                                    <rect width="18" height="18" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2994_7519)">
                                    <path
                                        d="M11.136 14.2139L10.2822 13.3601L14.0379 9.60433H1.6687V8.36683H14.0523L10.2822 4.61106L11.136 3.7572L16.3644 8.98558L11.136 14.2139Z"
                                        fill="black" />
                                </g>
                            </svg>

                        </a>
                    </div>

                </div>
                              
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }

									?>
					 
					 <!--Research notifications starts-->
					 
					 
					 
					 
					  <!--Career notifications starts-->
					   <?php 
			
					if($careers_len > 0){?>
                        <div class="news-type">
                               <div class="news-count">
                            <h2 class="news-typenm">Career</h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt" onclick="openCity('Career', 'car_btn')">
                                        View All (<?php echo $careers_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="ntf-content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($careers as $row) { 
                           if( $i1 >= 4) break;
                        $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $month = $notf_dbdate->format('F');
                    $notif_dt= $notf_dbdate->format('jS');
                    $notif_yr= $notf_dbdate->format('y'); 

                      
                          ?> <div class="notf_innrdiv">
                    <div class="notf_title"><?php echo $row['title']; ?></div>
                    <div class="notf_date"> <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?></div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">
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
                        </a>
                    </div>
                    <div class="div-notf_img" onclick="notifications()">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">

                            <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="18" height="18">
                                    <rect width="18" height="18" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2994_7519)">
                                    <path
                                        d="M11.136 14.2139L10.2822 13.3601L14.0379 9.60433H1.6687V8.36683H14.0523L10.2822 4.61106L11.136 3.7572L16.3644 8.98558L11.136 14.2139Z"
                                        fill="black" />
                                </g>
                            </svg>

                        </a>
                    </div>

                </div>
                              
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }

									?>
					 
					 <!--Career notifications starts-->
					 
					 
					 
					 
					 
				</div>
				<!--  All ends -->
				
				<!--  Academic starts -->
				 <div id="Academic" class="w3-container city" style="display:none">
					
					
					<?php 
			
					if($academics_len > 0){?>
                        <div class="news-type">
                              
                        
                            <div class="ntf-content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($academics as $row) { 
                         
                        $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $month = $notf_dbdate->format('F');
                    $notif_dt= $notf_dbdate->format('jS');
                    $notif_yr= $notf_dbdate->format('y'); 

                      
                          ?> <div class="notf_innrdiv">
                    <div class="notf_title"><?php echo $row['title']; ?></div>
                    <div class="notf_date"> <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?></div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">
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
                        </a>
                    </div>
                    <div class="div-notf_img" onclick="notifications()">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">

                            <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="18" height="18">
                                    <rect width="18" height="18" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2994_7519)">
                                    <path
                                        d="M11.136 14.2139L10.2822 13.3601L14.0379 9.60433H1.6687V8.36683H14.0523L10.2822 4.61106L11.136 3.7572L16.3644 8.98558L11.136 14.2139Z"
                                        fill="black" />
                                </g>
                            </svg>

                        </a>
                    </div>

                </div>
                              
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }else{
					 echo 'No Exam Notifications';
					}

									?>
					 
					 
				</div>
<!--  Academic ends -->
				
				
				
				<!--  Admissions starts -->
				 <div id="Admissions" class="w3-container city" style="display:none">
					
					
					<?php 
			
					if($admissions_len > 0){?>
                        <div class="news-type">
                               
                        
                            <div class="ntf-content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($admissions as $row) { 
                         
                        $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $month = $notf_dbdate->format('F');
                    $notif_dt= $notf_dbdate->format('jS');
                    $notif_yr= $notf_dbdate->format('y'); 

                      
                          ?> <div class="notf_innrdiv">
                    <div class="notf_title"><?php echo $row['title']; ?></div>
                    <div class="notf_date"> <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?></div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">
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
                        </a>
                    </div>
                    <div class="div-notf_img" onclick="notifications()">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">

                            <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="18" height="18">
                                    <rect width="18" height="18" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2994_7519)">
                                    <path
                                        d="M11.136 14.2139L10.2822 13.3601L14.0379 9.60433H1.6687V8.36683H14.0523L10.2822 4.61106L11.136 3.7572L16.3644 8.98558L11.136 14.2139Z"
                                        fill="black" />
                                </g>
                            </svg>

                        </a>
                    </div>

                </div>
                              
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }else{
					 echo 'No Admissions Notifications';
					}

									?>
					 
					 
				</div>
<!--  Admissions ends -->
              
				
				
				<!--Research notifications starts-->
				 <div id="Research" class="w3-container city" style="display:none">
					 <?php 
			
					if($research_len > 0){?>
                        <div class="news-type">
                               
                        
                            <div class="ntf-content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($research as $row) { 
                           if( $i1 >= 4) break;
                        $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $month = $notf_dbdate->format('F');
                    $notif_dt= $notf_dbdate->format('jS');
                    $notif_yr= $notf_dbdate->format('y'); 

                      
                          ?> <div class="notf_innrdiv">
                    <div class="notf_title"><?php echo $row['title']; ?></div>
                    <div class="notf_date"> <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?></div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">
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
                        </a>
                    </div>
                    <div class="div-notf_img" onclick="notifications()">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">

                            <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="18" height="18">
                                    <rect width="18" height="18" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2994_7519)">
                                    <path
                                        d="M11.136 14.2139L10.2822 13.3601L14.0379 9.60433H1.6687V8.36683H14.0523L10.2822 4.61106L11.136 3.7572L16.3644 8.98558L11.136 14.2139Z"
                                        fill="black" />
                                </g>
                            </svg>

                        </a>
                    </div>

                </div>
                              
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }else{
					 echo 'No Research Notifications';
					}

									?>
				</div>
					 <!--Research notifications ends-->
				
				
				
				<!--Career notifications starts-->
				 <div id="Career" class="w3-container city" style="display:none">
					 <?php 
			
					if($careers_len > 0){?>
                        <div class="news-type">
                               
                        
                            <div class="ntf-content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($careers as $row) { 
                           if( $i1 >= 4) break;
                        $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $month = $notf_dbdate->format('F');
                    $notif_dt= $notf_dbdate->format('jS');
                    $notif_yr= $notf_dbdate->format('y'); 

                      
                          ?> <div class="notf_innrdiv">
                    <div class="notf_title"><?php echo $row['title']; ?></div>
                    <div class="notf_date"> <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?></div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">
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
                        </a>
                    </div>
                    <div class="div-notf_img" onclick="notifications()">
                        <a href="<?php echo $row['hlink'];?>" target="_blank">

                            <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="18" height="18">
                                    <rect width="18" height="18" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2994_7519)">
                                    <path
                                        d="M11.136 14.2139L10.2822 13.3601L14.0379 9.60433H1.6687V8.36683H14.0523L10.2822 4.61106L11.136 3.7572L16.3644 8.98558L11.136 14.2139Z"
                                        fill="black" />
                                </g>
                            </svg>

                        </a>
                    </div>

                </div>
                              
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }else{
					 echo 'No Career Notifications';
					}

									?>
				</div>
					 <!--Career notifications ends-->





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
                </script>



                <!-- jQuery -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Bootstrap JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            </div>

</body>