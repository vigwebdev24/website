<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/u-life.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/admission.css">
    <!-- <link rel="stylesheet" href="css/about.css"> -->
    <link rel="stylesheet" href="../css/news.css">
    <link rel="stylesheet" href="../css/mblfooter.css">
    <link rel="stylesheet" href="../css/newstudent.css">
    <link rel="stylesheet" href="dep_css/dept.css">
    <link rel="stylesheet" href="../css/newparent.css">
    <link rel="stylesheet" href="../css/modals.css">
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
include_once '../connect.php';
include_once  'deptnavbar.php';
  
?>
    <div class="container home-div1 ">
        <div class="newstudent-div-space">
            <div class="ulife-div-19">
                <div class="ulife-div-20">
                    <div class="ulife-column dept_mblhod">
                        <div class="ulife-div-21">
                            <div class="individualdept_name">Computer Science & Engineering </div>
                            <div class="ulife-div-22">Innovate, Compute, Transform.</div>
                            <div class="dept_descbtndiv">
                                <div class="ulife-div-23">
                                    Computer Science & Engineering (CSE) course was started in the year 1997 in this
                                    institution
                                </div>

                                <div class="herosec-buttons" style="clip-path: inset(0 0% 0 0);">
                                    <button class="cta_button_primary Ss-btn_txt" data-toggle="modal"
                                        data-target="#overlay">
                                        Vision & Mission
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_2961_1144" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g mask="url(#mask0_2961_1144)">
                                                <path
                                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                                    fill="#F2F1ED" />
                                            </g>
                                        </svg>
                                    </button>
                                    <button class="cta_button_secondary Secondary-btn_txt" data-toggle="modal"
                                        data-target="#hodoverlay">
                                        HOD Message
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_2961_1149" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g mask="url(#mask0_2961_1149)">
                                                <path
                                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                                    fill="#992E00" />
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ulife-column-2">
                        <div class="ulife-div-24">
                            <img loading="lazy" src="dep_assets/images/depthomeimg.webp" alt="image"
                                class="ulife-img-5" />
                        </div>
                    </div>
                </div>
            </div>


            <!-- programs offered starts here -->
            <div class="home-prgmsoffrd_div">
                <div class="home-prgmsoffrd_title">
                    Programs Offered
                </div>
                <div class="home-prgms">
                    <div class="home-prgms-rect dept-prgms-rect">
                        <div class="home-prgmtype">
                            Under Graduate
                        </div>
                        <div class="deptprgm_nm">
                            B.Tech in Computer Science & Engineering
                        </div>
                        <div class="deptprgm_btns">
                            <div class="text_btnnew" onclick="programs()">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        Course details
                                    </div>
                                    <div>
                                        <img src="../assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                            <button class="button_secondary Secondary-btn_txt">Apply</button>
                        </div>

                        <!--<button class="text_btn_secondary text_btn_secondary-btn_txt viewall"> <img
                                    src="assets/icons/arrow_outward.png" /> &nbsp;View Programs</button>-->
                    </div>

                    <div class="home-prgms-rect dept-prgms-rect">
                        <div class="home-prgmtype">
                            Post Graduate
                        </div>
                        <div class="deptprgm_nm">
                            M.Tech in Computer Science & Engineering
                        </div>
                        <div class="deptprgm_btns">
                            <div class="text_btnnew" onclick="programs()">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        Course details
                                    </div>
                                    <div>
                                        <img src="../assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                            <button class="button_secondary Secondary-btn_txt">Apply</button>
                        </div>
                    </div>


                    <div class="home-prgms-rect dept-prgms-rect">
                        <div class="home-prgmtype">
                            Ph.D
                        </div>
                        <div class="deptprgm_nm">
                            Ph.D in Computer Science & Engineering
                        </div>
                        <div class="deptprgm_btns">
                            <div class="text_btnnew" onclick="programs()">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        Course details
                                    </div>
                                    <div>
                                        <img src="../assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                            <button class="button_secondary Secondary-btn_txt">Apply</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- programs offered ends here -->



            <!-- New news carusel starts -->
            <?php
    $sqlquery22 ="SELECT * FROM  news  order by  date desc";

      $result=mysqli_query($conn, $sqlquery22);
    //  print_r($result);
    
?>
            <div style="width:100%;">
                <div class="news-txt">
                    NEWS
                </div>
                <div class="news-div">

                    <div class="news-info">

                        <div class="newstxt-carousel">

                            <?php  if(mysqli_num_rows($result) > 0){
                while ($news = $result->fetch_assoc()) { 
                    $newsdatedb =new DateTime($news['date']);  // get the event date and set it to the variable $date 
                    $news_mnth= substr(($newsdatedb->format('F')), 0, 3);
                    $newsdate = $newsdatedb->format('d');
                    $newsyr = $newsdatedb->format('Y');
                    ?>
                            <div class="content">
                                <div class="news-title">
                                    <?php echo $news['title']; ?>

                                </div>
                                <div class="news-contentdiv">
                                    <div class="news-date">
                                        <?php echo $newsdate .", " . $news_mnth .", ". $newsyr;  ?>
                                    </div>
                                    <div class="news-subhdng">
                                        <?php echo $news['subheading']; ?>

                                    </div>
                                    <div class="news-content">
                                        <?php echo $news['descr']; ?>

                                    </div>

                                </div>
                            </div>
                            <?php } }?>


                        </div>
                        <div class="news-cntrlsdiv">
                            <div class="news-rdmore">
                                <div class="text_btnnew viewall-right">
                                    <div class="text_btnnew_innrdiv">
                                        <div class="text_btnnew_txt">
                                            Read More
                                        </div>
                                        <div>
                                            <img loading="lazy" src="../assets/svgicons/outwardarrow_brown.svg"
                                                style="width: 16px;height: 16px;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="news-prvnxt">
                                    <div class="smallcta_btn_primary prevnew" style="transform: rotate(179deg);">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_2961_1144" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g mask="url(#mask0_2961_1144)">
                                                <path
                                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                                    fill="#F2F1ED" />
                                            </g>
                                        </svg>
                                        <!--  <img loading="lazy" src="assets/svgicons/arrow_back_white.svg" />-->
                                    </div>
                                    <div class="smallcta_btn_primary nextnew">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_2961_1144" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                                            </mask>
                                            <g mask="url(#mask0_2961_1144)">
                                                <path
                                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                                    fill="#F2F1ED" />
                                            </g>
                                        </svg>
                                        <!--<img loading="lazy" src="assets/svgicons/arrow_back_white.svg"    />-->
                                    </div>
                                </div>
                            </div>
                            <div class="prgrs-outrr">
                                <div id="progressBar" class="prgrs" style=""></div>
                            </div>
                            <!-- <div style="width:100%;"><progress class="progressbar1" value="10" max="100"></progress></div> -->
                        </div>





                    </div>
                    <div class="news-imgdiv">

                        <!-- <div class="photos-container"> -->
                        <div class="photos2">

                            <img src="../assets/images/DSC_813.webp" loading="lazy" class="activeimg" alt="Image 2">
                            <img src="../assets/images/DSC_7222.webp" loading="lazy" class="" alt="Image 2">
                            <img src="../assets/images/MOU PHOTO.webp" loading="lazy" class="" alt="Image 3">
                            <img src="../assets/images/DSC_683.webp" loading="lazy" class="" alt="Image 4">
                            <img src="../assets/images/1.webp" class="" loading="lazy" alt="Image 5">
                            <!-- <img src="assets/images/APPE USA 2024.jpg" class="" alt="Image 6">-->
                            <img src="../assets/images/womensday-2024.jpeg" loading="lazy" class="" alt="Image 1">

                            <!-- Add more images as needed -->
                        </div>
                        <!-- </div> -->


                    </div>

                </div>
            </div>

            <!-- New news carousel ends -->



            <!-- Events starts here -->


            <?php 

$sqlquery4 ="SELECT * FROM  events  where eve_type='academics' order by  date desc limit 4";

$result=mysqli_query($conn, $sqlquery4);
    
?>
            <div style="width:100%;">
                <div class="home-events" style="margin-top:0;">
                    <div class="events">EVENTS</div>

                    <div class="eventsdiv">
                        <?php  if(mysqli_num_rows($result) > 0){
                while ($row = $result->fetch_assoc()) { 
                     $date =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $truncated_date = substr(($date->format('F')), 0, 3);
                   ?>

                        <div class="events_innrdiv">
                            <div class="datediv">
                                <div class="event_mnth"><?php  echo  $truncated_date; ?></div>
                                <div class="event_date"><?php   echo $date->format('d'); ?></div>
                            </div>
                            <div class="event-topicdiv">
                                <div class="event_topic"><?php echo $row['title'];?></div>
                                <div class="event_author"><?php echo $row['caption'];?></div>
                                <div class="eventarrow-dsktp elementnone-mbl">
                                    <a href="<?php echo $row['hlink'];?>">
                                        <!--<img  src="assets/svgicons/arrow_right_white.svg"   loading="lazy" />-->
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_2961_1144" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
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
                                <div>
                                    <a href="<?php echo $row['hlink'];?>">
                                        <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_2994_7519" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
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
                        </div>

                        <?php } }?>


                    </div>

                </div>
                <div class="text_btnnew viewall-right" onclick="window.open('deptevents.php',  '_self')">
                    <div class="text_btnnew_innrdiv">
                        <div class="text_btnnew_txt">
                            View All Events
                        </div>
                        <div>
                            <img src="../assets/svgicons/outwardarrow_brown.svg" loading="lazy"
                                style="width: 16px;height: 16px;" />
                        </div>
                    </div>
                </div>
            </div>



            <!-- Events end here -->


            <!-- notifications start here -->

            <?php 

$sqlquery5 ="SELECT * FROM  notifications where notify_type='exam'  order by  date desc limit 4";

$result=mysqli_query($conn, $sqlquery5);

     
?>
            <div>
                <div class="home-events" style="margin-top:0;">
                    <div class="events">NOTIFICATIONS</div>
                    <div class="eventsdiv">
                        <?php  if(mysqli_num_rows($result) > 0){
                while ($row = $result->fetch_assoc()) { 
                    //print_r($row);
                     $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                    $month = $notf_dbdate->format('F');
                    $notif_dt= $notf_dbdate->format('jS');
                    $notif_yr= $notf_dbdate->format('y'); 
                    
                   ?>
                        <div class="notf_innrdiv">
                            <div class="notf_title"><?php echo $row['title']; ?></div>
                            <div class="notf_date"> <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?></div>
                            <div class="eventarrow-dsktp elementnone-mbl">
                                <a href="<?php echo $row['hlink'];?>" target="_blank">
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
                                </a>
                            </div>
                            <div class="div-notf_img" onclick="notifications()">
                                <a href="<?php echo $row['hlink'];?>" target="_blank">

                                    <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="18" height="18">
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
                        <?php } }?>


                    </div>
                </div>
                <div class="text_btnnew viewall-right" onclick="notifications()">

                    <div class="text_btnnew_innrdiv">
                        <div class="text_btnnew_txt">
                            View All
                        </div>
                        <div>
                            <img src="../assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- notifications ends here -->


            <!-- what you'll learn start here -->
            <div class="whatu_learnparent">

                <div class="whatu_learnleftupper">
                    <div class="whatu_learnleftupper1">

                        <div class="whatu_learn_content">
                            <div class="whatu_lear_hdng">
                                What You’ll learn
                            </div>
                            <div class="whatu_learn_desc">
                                Some key learnings that you’ll embrace once you get part of us
                            </div>
                        </div>

                        <div class="whatu_learn_cardoutrr">
                            <div class="whatu_learn_cardinnr">
                                <div class="whatu_learn_cardtxt">
                                    Learning methodologies integrated with professional skill development activities
                                </div>
                                <div class="dept-imgbrdr">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_3071_92" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="48" height="48">
                                            <rect width="48" height="48" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_3071_92)">
                                            <path
                                                d="M24.05 42.8001C20.4351 42.8001 17.398 41.5822 14.9388 39.1466C12.4796 36.711 11.25 33.6788 11.25 30.0501V17.5424C11.25 13.9398 12.4796 10.9141 14.9388 8.46541C17.398 6.01671 20.4351 4.79236 24.05 4.79236C27.6392 4.79236 30.6532 6.02326 33.0919 8.48506C35.5306 10.9469 36.75 13.966 36.75 17.5424V30.0501C36.75 33.6669 35.5306 36.6961 33.0919 39.1377C30.6532 41.5793 27.6392 42.8001 24.05 42.8001ZM25.1193 17.5424H34.5616C34.5616 14.8321 33.6603 12.4635 31.8577 10.4366C30.0551 8.40968 27.809 7.26929 25.1193 7.01546V17.5424ZM13.4385 17.5424H22.9307V7.01546C20.241 7.26929 17.9865 8.40968 16.1673 10.4366C14.3481 12.4635 13.4385 14.8321 13.4385 17.5424ZM24.0169 40.6116C26.9185 40.6116 29.4013 39.5819 31.4654 37.5224C33.5295 35.4629 34.5616 32.9721 34.5616 30.0501V19.7308H13.4385V30.0501C13.4385 32.9721 14.4762 35.4629 16.5516 37.5224C18.6269 39.5819 21.1154 40.6116 24.0169 40.6116Z"
                                                fill="black" />
                                        </g>
                                    </svg>
                                    <!--<img src="assets/icons/Computer Science.png" />-->

                                    <div class="council-brdr"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="whatu_learnleftupper1">
                        <div class="whatu_learn_cardoutrr">
                            <div class="whatu_learn_cardinnr">
                                <div class="whatu_learn_cardtxt">
                                    How to apply new technologies to become an entreperenur
                                </div>
                                <div class="dept-imgbrdr">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_3071_92" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="48" height="48">
                                            <rect width="48" height="48" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_3071_92)">
                                            <path
                                                d="M24.05 42.8001C20.4351 42.8001 17.398 41.5822 14.9388 39.1466C12.4796 36.711 11.25 33.6788 11.25 30.0501V17.5424C11.25 13.9398 12.4796 10.9141 14.9388 8.46541C17.398 6.01671 20.4351 4.79236 24.05 4.79236C27.6392 4.79236 30.6532 6.02326 33.0919 8.48506C35.5306 10.9469 36.75 13.966 36.75 17.5424V30.0501C36.75 33.6669 35.5306 36.6961 33.0919 39.1377C30.6532 41.5793 27.6392 42.8001 24.05 42.8001ZM25.1193 17.5424H34.5616C34.5616 14.8321 33.6603 12.4635 31.8577 10.4366C30.0551 8.40968 27.809 7.26929 25.1193 7.01546V17.5424ZM13.4385 17.5424H22.9307V7.01546C20.241 7.26929 17.9865 8.40968 16.1673 10.4366C14.3481 12.4635 13.4385 14.8321 13.4385 17.5424ZM24.0169 40.6116C26.9185 40.6116 29.4013 39.5819 31.4654 37.5224C33.5295 35.4629 34.5616 32.9721 34.5616 30.0501V19.7308H13.4385V30.0501C13.4385 32.9721 14.4762 35.4629 16.5516 37.5224C18.6269 39.5819 21.1154 40.6116 24.0169 40.6116Z"
                                                fill="black" />
                                        </g>
                                    </svg>
                                    <!--<img src="assets/icons/Computer Science.png" />-->

                                    <div class="council-brdr"></div>
                                </div>
                            </div>
                        </div>


                        <div class="whatu_learn_cardoutrr">
                            <div class="whatu_learn_cardinnr">
                                <div class="whatu_learn_cardtxt">
                                    Research and consultancy activities
                                </div>
                                <div class="dept-imgbrdr">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_3071_92" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="48" height="48">
                                            <rect width="48" height="48" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_3071_92)">
                                            <path
                                                d="M24.05 42.8001C20.4351 42.8001 17.398 41.5822 14.9388 39.1466C12.4796 36.711 11.25 33.6788 11.25 30.0501V17.5424C11.25 13.9398 12.4796 10.9141 14.9388 8.46541C17.398 6.01671 20.4351 4.79236 24.05 4.79236C27.6392 4.79236 30.6532 6.02326 33.0919 8.48506C35.5306 10.9469 36.75 13.966 36.75 17.5424V30.0501C36.75 33.6669 35.5306 36.6961 33.0919 39.1377C30.6532 41.5793 27.6392 42.8001 24.05 42.8001ZM25.1193 17.5424H34.5616C34.5616 14.8321 33.6603 12.4635 31.8577 10.4366C30.0551 8.40968 27.809 7.26929 25.1193 7.01546V17.5424ZM13.4385 17.5424H22.9307V7.01546C20.241 7.26929 17.9865 8.40968 16.1673 10.4366C14.3481 12.4635 13.4385 14.8321 13.4385 17.5424ZM24.0169 40.6116C26.9185 40.6116 29.4013 39.5819 31.4654 37.5224C33.5295 35.4629 34.5616 32.9721 34.5616 30.0501V19.7308H13.4385V30.0501C13.4385 32.9721 14.4762 35.4629 16.5516 37.5224C18.6269 39.5819 21.1154 40.6116 24.0169 40.6116Z"
                                                fill="black" />
                                        </g>
                                    </svg>
                                    <!--<img src="assets/icons/Computer Science.png" />-->

                                    <div class="council-brdr"></div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="whatu_learn_hod">
                    <img src="dep_assets/images/hod_pic.webp" alt="" srcset="">
                    <div class="whatu_learn_hoddetails">
                        <div class="whatu_learn_hodname">
                            K.V. Krishna Kishore
                        </div>
                        <div class="whatu_learn_hoddesig">
                            Professor & HoD CSE Dept
                        </div>
                    </div>
                </div>
            </div>


            <!-- what you'll learn ens here -->


            <!-- where students go starts here -->
            <?php
 $sqlquery6="SELECT * FROM  sections  where id='newpar_whrdostugo'";

$result=mysqli_query($conn, $sqlquery6);
$wheredo = $result->fetch_assoc();


$sqlquery7="SELECT * FROM  cards  where id='newpar_joincmpny'";

$result=mysqli_query($conn, $sqlquery7);
$joincmpny = $result->fetch_assoc();

$sqlquery8="SELECT * FROM  cards  where id like 'newpar%' and sequence > 1 order by sequence limit 3 ";

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
                            <img src="../assets/images/tcs.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="../assets/images/ibm.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="../assets/images/Congnizant.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="../assets/images/infosys.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="../assets/images/wipro.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="../assets/images/Hexaware.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="../assets/images/Samsung.svg" class="whr_do_stu_go_cmpnyimg" />
                            <img src="../assets/images/DBS.svg" class="whr_do_stu_go_cmpnyimg" />
                        </div>


                    </div>

                    <!-- <div style="display: flex;align-items: flex-start;gap: var(--Spacing-Spacing-xl, 25px);"></div> -->
                    <div class="whr_do_stu_go_upperdiv_rghtsec">
                        <div class="whr_do_stu_go_upper_rgt_innrdiv">

                            <div class="whr_do_stu_go_title"> <?php echo $joincmpny['title']; ?></div>

                            <div class="whr_do_stu_go_upper_rgt_txt">
                                <div class="whr_do_stu_go_joincmpny">
                                    <?php echo $joincmpny['subtitle']; ?>
                                </div>

                                <div class="whr_do_stu_go_desc">
                                    <?php echo $joincmpny['descr']; ?>
                                </div>
                            </div>

                            <div class="text_btnnew" >
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        <?php echo $joincmpny['btn_nm']; ?>
                                    </div>
                                    <div>
                                        <img src="../assets/svgicons/outwardarrow_brown.svg"
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

                                <div class="whr_do_stu_go_desc">
                                    <?php echo $info['descr']; ?>
                                </div>
                            </div>

                            <div class="text_btnnew" data-toggle="modal" data-target="#heoverlay">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        Read More
                                    </div>
                                    <div>
                                        <img src="../assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <?php     } }?>






                </div>

            </div>



            <!-- where students go ends here -->


            <!-- faculty starts here -->

            <div class="faculty_div">
                <div class="faculty_leftdiv">
                    <div class="hdng">
                        Faculty
                    </div>
                    <div class="contnt">
                        At VIGNAN, our commitment to student success extends beyond graduation. We take immense pride in
                        our top recruiters, who play a crucial role in connecting our talented graduates with
                        exceptional career opportunities. These organisations and companies have recognised the caliber
                        of
                    </div>
                </div>

                <div class="fac_picdiv">
                    <div class="fac_card">
                        <img src="../assets/images/aboutus_img13.webp" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. P. M. V. RAO
                            </div>
                        </div>
                    </div>

                    <div class="fac_card">
                        <img src="../assets/images/aboutus_img13.webp" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. P. M. V. RAO
                            </div>
                        </div>
                    </div>


                    <div class="fac_card ">
                        <img src="../assets/images/aboutus_img13.webp" alt="" srcset="" class="fac_card2_img">
                        <div class="fac_namediv fac_namediv2">
                            <div class="fac_name">
                                DR. P. M. V. RAO
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <!-- faculty ends here -->


            <!-- Explore facilities starts here -->

            <div class="explore_facilidiv">

                <div class="explore_facili_leftdiv">

                    <div class="explore_facili_leftupprdiv">
                        <div class="hdng">Explore Facilities to Support you</div>
                        <div class="contnt">At our college, department-level facilities are designed to foster an
                            optimal learning environment. From state-of-the-art laboratories equipped with cutting-edge
                            technology to collaborative study spaces, we provide students with the resources needed to
                            excel in their academic pursuits and cultivate innovative ideas within their respective
                            departments</div>
                    </div>

                    <div class="explore_facili_leftlwrdiv">
                        <img class="explore_facili_leftlwrdiv_img1" src="dep_assets/images/explorefac_img1.webp" alt=""
                            srcset="">
                        <img class="explore_facili_leftlwrdiv_img2" src="dep_assets/images/explorefac_img2.webp" alt=""
                            srcset="">
                    </div>


                </div>

                <div class="explore_facili_rightdiv">
                    <img class="explore_facili_rightdiv_img" src="dep_assets/images/explorefac_img3.webp" alt=""
                        srcset="">
                    <div class="explore_facili_right_imgbtndiv">
                        <img class="explore_facili_rightdiv_img2" src="dep_assets/images/explorefac_img4.webp" alt=""
                            srcset="">
                        <button class="cta_button_primary Ss-btn_txt btnnone">Explore All
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

            <!-- Explore facilities ends here -->

            <!-- typical week starts here -->


            <?php 
  
  $sqlquery2 ="SELECT * FROM  sections  where id='newstu_frst6days'";

$result=mysqli_query($conn, $sqlquery2);
$frst6days = $result->fetch_assoc();

?>
            <div class="frst6daysoutdiv">

                <div class="frst6days-picsdiv">

                    <div class="frst6days-pics1-2">
                        <img loading="lazy" src="../<?php echo $frst6days['img1'];?>" alt="" srcset="">
                        <img loading="lazy" src="../<?php echo $frst6days['img2'];?>" alt="" srcset="">

                    </div>
                    <img class="frst6days-picsdiv_img3" loading="lazy" src="../<?php echo $frst6days['img3'];?>" alt=""
                        srcset="">

                </div>

                <div class="frst6days-contentoutrdiv">

                    <div class="frst6days-title">
                        <?php echo $frst6days['title'];?>
                    </div>
                    <p class="frst6days-desc">
                        <?php echo $frst6days['descr'];?>

                    </p>

                </div>

            </div>


            <!-- typical week ends here -->



            <!-- alumni starts here -->
            <?php
 $sqlquery14="SELECT * FROM  sections  where id='home_alumni'";

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
                    <img class="imgwidth" src="../<?php echo $alumni['img1'];?>" />
                </div>
                <div>
                    <img class="home-renowed_div2img" src="../<?php echo $alumni['img2'];?>" />

                </div>
                <div class="home-renowed_div3">
                    <img src="../<?php echo $alumni['img3'];?>" class="home-renowed_div3img" />
                    <div class="home-renowed_div3txtbtn btnnone">
                        <div class="home-renowed_div3txtbtn ">
                            <?php echo $alumni['descr']; ?>

                        </div>

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



                    </div>
                </div>
                <div>
                    <img class="home-renowed_div4img" src="../<?php echo $alumni['img4'];?>" />
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


            <!-- what people say starts here -->

            <?php
      $sql = "SELECT * FROM `testimonials` WHERE id = 'Admissions_SAMIRA REDDY' or id = 'Admissions_NAVEEN VARMA' or id = 'Admissions_SUJAY SHEKHAR';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          ?>
            <section class="testimonials" style="margin-top:0;">
                <h2 class="testimonials-title">What People Say</h2>
                <div class="testimonials-container">
                    <div class="testimonials-wrapper">
                        <div class="testimonials-row">
                            <?php 
                    while($row = $result->fetch_assoc()) {
                      ?>
                            <div class="testimonial-col">
                                <div class="testimonial-content">
                                    <img src="../assets/icons/DoubleQuoateIconMaroon.svg" alt="Avatar"
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
                        <img src="../assets/icons/DoubleQuoateIconMaroon.svg" alt="Testimonial author Kunita Rao"
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


            <!-- FAQ starts here -->
            <div class="Frequently-asked-questions-component" style="margin-top:0;">
                <div class="Frequently-asked-questions-component-title">
                    Frequently Asked Questions
                </div>
                <div class="panel-group" id="deptaccordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="deptheading1" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question" data-toggle="collapse" data-parent="#deptaccordion" href="#deptq1"
                                    aria-expanded="true" aria-controls="deptq1">
                                    1. How can I apply to the Computer Science program?
                                </a>
                            </h4>
                        </div>
                        <div id="deptq1" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="deptheading1">
                            <div class="panel-body">
                                Along with the course, you also get access to the course
                                discussion forum. You can ask any questions and I will answer
                                them personally within 24 hours. You can ask any questions and.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="deptheading2" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#deptaccordion"
                                    href="#deptq2" aria-expanded="false" aria-controls="deptq2">
                                    2. What are the admission requirement for computer science
                                    department?
                                </a>
                            </h4>
                        </div>
                        <div id="deptq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="deptheading2">
                            <div class="panel-body">Answer</div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="deptheading3" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#deptaccordion"
                                    href="#deptq3" aria-expanded="false" aria-controls="deptq3">
                                    3. Are there any prerequisites for specific courses within the
                                    department?
                                </a>
                            </h4>
                        </div>
                        <div id="deptq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="deptheading3">
                            <div class="panel-body">Answer</div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="deptheading4" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#deptaccordion"
                                    href="#deptq4" aria-expanded="false" aria-controls="deptq4">
                                    4. How much is the validity of the course?
                                </a>
                            </h4>
                        </div>
                        <div id="deptq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="deptheading4">
                            <div class="panel-body">Answer</div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="deptheading5" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#deptaccordion"
                                    href="#deptq5" aria-expanded="false" aria-controls="deptq5">
                                    5. What is the typical class size for computer science
                                    courses?
                                </a>
                            </h4>
                        </div>
                        <div id="deptq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="deptheading5">
                            <div class="panel-body">Answer</div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- FAQ ends here -->

            <!-- contact us starts here -->

            <div class="contactusdiv">

                <div class="contactus_upprdiv">
                    <div class="hdng">Contact Us</div>
                    <div class="contnt" style="width: 474px;">Connect with us effortlessly; your inquiries, feedback,
                        and curiosity are always welcome – reach out through our Contact Us section for prompt
                        assistance and information</div>
                </div>

                <div class="contactus_lwrdiv">

                    <div class="contactus_detaildiv">
                        <div class="contactus_hdng">
                            The HoD
                        </div>
                        <div class="contactus_desc">
                            For industrial interactions, projects, consultancy, etc.
                            please contact, the HoD
                        </div>
                        <div class="contactus_medium">
                            HoD@vignan.ac.in
                        </div>
                    </div>


                    <div class="contactus_detaildiv">
                        <div class="contactus_hdng">
                            Phone & Email
                        </div>
                        <div class="contactus_desc">
                            For direct assistance, dial our dedicated helpline – your gateway to information and support
                            at your fingertips
                        </div>
                        <div class="contactus_medium">
                            +91 91234 31241
                        </div>
                        <div class="contactus_medium">
                            023-2292 2294
                        </div>
                        <div class="contactus_medium">
                            office.cse@vignan.ac.in
                        </div>
                    </div>






                    <div class="contactus_detaildiv">
                        <div class="contactus_hdng">
                            Feedback
                        </div>
                        <div class="contactus_desc">
                            Kindly send your valuable suggestions to
                        </div>
                        <div class="contactus_medium">
                            feedback@vignan.ac.in
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div><br><br>
    <!-- contact us ends here -->

    <!-- query section starts here -->
    <div class="query-outdiv query-depthome">

        <div class="query-leftdiv">
            <div class="home_goalstitle" style="color:white;">
                Have a Query?
                We are here to help
            </div>
            <div class="button_secondary2 Secondary-btn_txt">
                Submit a query
            </div>
        </div>


        <div class="query-rightdiv">

            <div class="query-contactnumdiv">
                <img loading="lazy" src="../assets/svgicons/tollfreewhite.webp" class="ulife-img-53" />
                <div class="query-contactnum">7799 427 427 </div>
            </div>
            <div class="query-timings">

                Vignan team is available in from Mon - Sat 9:00 am to 6:00 pm
            </div>
        </div>



    </div><br><br>


    <!-- query section ends here -->

    <!-- map starts here -->
    <div class="container home-div1 newstudent-div-space">
        <div class="map_div">
            <div class="map_leftdiv">

                <div class="map_lefttxtdiv">
                    <div class="map_lefttxt1">
                        How to reach
                    </div>
                    <div class="map_leftdesc">
                        Department of computer science & engineering is located near main Library of the institute.
                        It is at 600m from main gate & adjacent to department of Information Technology
                        Institute has free bus services within campus to reach out different places
                    </div>
                    <div class="map_distancediv">
                        <div class="map_distance1">
                            600 Meters from Main gate
                        </div>
                        <div class="map_distance2">
                            50 Meters from Main Library
                        </div>
                    </div>
                </div>

                <div class="map_btnsdiv">
                    <button class="button_primary Ss-btn_txt">How To Reach</button>
                    <div class="text_btnnew" onclick="programs()">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt">
                                Locate Us
                            </div>
                            <div>
                                <img src="../assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <img src="dep_assets/images/contactus_map.webp" alt="">
        </div>
        <!-- map starts here -->

        <!-- Footer starts here -->
        <div id="mblftr">
            <?php include_once  '../mblfooter.php';   ?>
        </div>
        <div id="ftr" style="width:100%;">
            <?php include_once  '../footer.php';    ?>
        </div>
        <!-- Footer ends here -->
    </div>
    </div>



    <!-- Vision and mission Overlay Image modal starts -->


    <div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="deptoverlay-dialog" role="document">
            <div class="filter-modal_content">
                <!-- <div class="modal-header overlaymodal-header">
                          
                          
                        </div> -->
                <button type="button" class="deptclose" data-dismiss="modal" aria-label="Close">
                    <img src="../assets/icons/cross_big.png">
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
                <div class="deptmodal-body">



                    <div class="vm_modal_outdiv">

                        <div class="vm_modal_box">
                            <div class="vm_modal_title">
                                Our Vision
                            </div>
                            <img src="../assets/images/vision.png" alt="" class="vm_icn" srcset="">
                            <div class="vm_desc">
                                To evolve as a centre of high repute in Computer Science & Engineering and create
                                computer software professionals trained on problem solving skills imbued with ethics to
                                serve the ever evolving and emerging requirements of IT Industry and society at large.

                            </div>
                        </div>

                        <div class="vm_modal_box">
                            <div class="vm_modal_title">
                                Our Mission
                            </div>
                            <img src="../assets/images/mission.webp" alt="" class="vm_icn" srcset="">
                            <div class="vm_desc">
                                Imparting quality education through well designed curriculum, innovative teaching and
                                learning methodologies integrated with professional skill development activities to meet
                                the challenges in the career.
                                Nurture research and consultancy activities amongst students and faculty by providing
                                State-of-art facilities and Industry-Institute Interaction.
                                Developing capacity to learn new technologies and apply to solve social and industrial
                                problems to become an entrepreneur.
                            </div>
                        </div>
                    </div>




                </div>

            </div>

        </div>
    </div>

    <!-- Vision and mission Overlay Image modal ends -->



    <!-- HOD message starts -->


    <div class="modal fade" id="hodoverlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="deptoverlay-dialog" role="document">
            <div class="filter-modal_content">
                <button type="button" class="deptclose" data-dismiss="modal" aria-label="Close">
                    <img src="../assets/icons/cross_big.png">
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
                <div class="deptmodal-body">


                    <div class="">
                        <div class="ulife-div-20">
                            <div class="ulife-column">
                                <div class="dept_hoddiv">
                                    <div class="ulife-div-22">HOD Message</div>
                                    <div class="vm_desc">
                                        The unprecedented growth of computer systems and their adoption into every
                                        possible walk of life made the computer science as one of the fast-paced
                                        engineering streams. Be it a simple mobile-phone or a sophisticated space
                                        shuttle, computer is there everywhere to play its vital role.
                                    </div>
                                </div>
                            </div>
                            <div class="whatu_learn_hod whatu_learn_hod_mbl">
                                <img src="dep_assets/images/hod_pic.webp" alt="" srcset="" class="hod_modal_img">
                                <div class="whatu_learn_hoddetails">
                                    <div class="whatu_learn_hodname">
                                        K.V. Krishna Kishore
                                    </div>
                                    <div class="whatu_learn_hoddesig">
                                        Professor & HoD CSE Dept
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>

    <!-- HOD message modal ends -->


    <!--  Higher Education overlay starts -->
    <div class="modal fade" id="heoverlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="deptoverlay2-dialog" role="document">
            <div class="filter-modal_content">
                <div class="deptmodal-header overlaymodal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="../assets/icons/cross_big.png">
                        <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                    <h4 class="filter-modaltitle" id="modalLabel">For Higher Education</h4>
                </div>
                <div class="modal-body heoverlaymodal-body">
                    <div class="cnt_div">
                        <p class="heoverlay_desc">
                            Approximately 10-15% of students opt to pursue higher education after completing their
                            undergraduate studies at university. This subset of students demonstrates a commitment to
                            furthering their academic and professional development, often seeking specialised knowledge
                            or advanced degrees in their chosen fields. Higher education offers opportunities for deeper
                            exploration, research, and specialization, equipping individuals with the expertise and
                            credentials needed to excel in their careers or pursue advanced academic pursuits. While not
                            all students choose this path, those who do contribute to the advancement of knowledge and
                            innovation across various disciplines, shaping the future of society through their
                            dedication to continuous learning and intellectual growth.
                        </p>
                        <p class="heoverlay_desc">
                            Key universities where student’s have gone for higher education
                        </p>


                        <div style="display: flex;flex-direction: column;align-items: flex-start;gap: 44px;">
                            <div class="heoverlay_hlnkdiv">
                                <img src="dep_assets/images/dept_logo.webp" alt="" srcset="">
                                <div class="heoverlay_hlnk_innrdiv">
                                    <div class="heoverlay_hlnknm">
                                        Vignan Foundation For Science, Research & Technology
                                    </div>
                                    <div class="text_btnnew">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt">
                                                Visit website
                                            </div>
                                            <div>
                                                <img src="../assets/svgicons/outwardarrow_brown.svg"
                                                    style="width: 16px;height: 16px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="heoverlay_hlnkdiv">
                                <img src="dep_assets/images/stanford.webp" alt="" srcset="">
                                <div class="heoverlay_hlnk_innrdiv">
                                    <div class="heoverlay_hlnknm">
                                    Stanford University
                                    </div>
                                    <div class="text_btnnew">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt">
                                                Visit website
                                            </div>
                                            <div>
                                                <img src="../assets/svgicons/outwardarrow_brown.svg"
                                                    style="width: 16px;height: 16px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="heoverlay_hlnkdiv">
                                <img src="dep_assets/images/stanford.webp" alt="" srcset="">
                                <div class="heoverlay_hlnk_innrdiv">
                                    <div class="heoverlay_hlnknm">
                                    University of Cambridge
                                    </div>
                                    <div class="text_btnnew">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt">
                                                Visit website
                                            </div>
                                            <div>
                                                <img src="../assets/svgicons/outwardarrow_brown.svg"
                                                    style="width: 16px;height: 16px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="heoverlay_hlnkdiv">
                                <img src="dep_assets/images/stanford.webp" alt="" srcset="">
                                <div class="heoverlay_hlnk_innrdiv">
                                    <div class="heoverlay_hlnknm">
                                    Indian Institute of Technology, Bombay
                                    </div>
                                    <div class="text_btnnew">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt">
                                                Visit website
                                            </div>
                                            <div>
                                                <img src="../assets/svgicons/outwardarrow_brown.svg"
                                                    style="width: 16px;height: 16px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="heoverlay_hlnkdiv">
                                <img src="dep_assets/images/stanford.webp" alt="" srcset="">
                                <div class="heoverlay_hlnk_innrdiv">
                                    <div class="heoverlay_hlnknm">
                                    Indian Institute of Technology, Madras
                                    </div>
                                    <div class="text_btnnew">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt">
                                                Visit website
                                            </div>
                                            <div>
                                                <img src="../assets/svgicons/outwardarrow_brown.svg"
                                                    style="width: 16px;height: 16px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>

            </div>

        </div>
    </div>
    <!--  Higher Education overlay ends -->


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/deptnewscarousel.js"></script>
    <script src="../js/common.js"></script>
</body>

</html>