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
    <!-- <link rel="stylesheet" href="css/about.css"> -->
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/mblfooter.css">
	   <link rel="stylesheet" href="css/nccActivity.css">
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



$sqlquery1 ="SELECT * FROM  carousel  order by  slide asc";
//-fluid home-contfld
    

      $result=mysqli_query($conn, $sqlquery1);
    
    

     
?>

    <div class="container home-div1">

           <div id="carousel-home" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol> -->

            <!-- Wrapper for slides -->
            <div class="carousel-innerhome">
                <?php  if(mysqli_num_rows($result) > 0){
                while ($slide = $result->fetch_assoc()) { 	?>
                <div class="item <?php if($slide['active'] == 1){echo 'active';}else{echo '';}?>">
                    <div class="row" style="flex-shrink: 0;">
                        <!-- flex-flow: row-reverse;display: flex; -->
                        <div class="herosec-content">
                            <div>
                                <h1 class="herosec-bigtxt"><?php echo $slide['title']?></h1>
                            </div>

                        </div>
                        <div class="img-div">
                            <img loading="lazy" src="<?php echo $slide['img1'];?>" class=" herosec-img" />
                        </div>

                        <div class="herosec-content">
                            <div>
                                <h1 class="herosec-txt"><?php echo $slide['descr']?></h1>
                            </div>


                        </div>
                        <div class="herosec-buttons">
                            <button class="cta_button_primary"
                                onclick="window.open('<?php echo $slide['btn1_hlink']; ?>',  '_blank')"
                                style="<?php if($slide['btn_nm1'] == '') {echo 'display: none';}?>">
								<div class="Ss-btn_txt"><?php echo $slide['btn_nm1']?></div>
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
                            <button class="cta_button_secondary"
                                style="<?php if($slide['btn_nm2'] == '') {echo 'display: none';}?>"
                                onclick="window.open('<?php echo $slide['btn2_hlink']; ?>',  '_blank')">
								<div class="Secondary-btn_txt"><?php echo $slide['btn_nm2']?></div>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_2961_1149" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2"
                                        y="-2" width="24" height="24">
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
                <?php } } ?>
            </div>
            <div class="home_controls"></div>
        </div>
        <!-- Carousel End -->

        <?php  $sqlquery2 ="SELECT * FROM  sections  where id='home_goals'";

      $result=mysqli_query($conn, $sqlquery2);
      $goals = $result->fetch_assoc();
      ?>
        <div class="home-goalsdiv">
            <div class="home-goals_innrdiv">
                <div class="home_goals">
                    <div class="home_goalstitle"><?php echo $goals['title'];?></div>
                    <div class="home_goalstxt"><?php echo $goals['descr'];?></div>
                    <div class="text_btnnew viewall-right"
                        onclick="window.open('<?php echo $goals['btn1_hlink']; ?>',  '_blank')">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt">
                                <?php echo $goals['btn_nm1']; ?>
                            </div>

                            <div>
                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="non-clk_carddiv">
                    <div class="non-clk_card_innrdiv">
                        <div class="non-clk_card_txtdiv">
                            <div class="non-clk_card_txt-innrdiv">
                                <span class="non-clk_num">95</span>
                                <span class="non-clk_percent">%</span>
                            </div>
                            <div class="non-clk_title">PLACEMENTS</div>
                        </div>
                        <div class="non-clk_imgbrdr">
                            <img src="assets/svgicons/circlestar.svg" />
                            <div class="non-clk_brdr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <section>

                <div class="rec-slider">
                    <ul class="slider-list">
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Amazon.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Rakuten.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Wipro.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/HSBC.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Infosys.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/accenture.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/tcs.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/capgemini.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/HCL.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Samsung.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Simens.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/ibm.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/epam.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/DBS.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Byju.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Hexaware.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/UST Global.svg">
                        </li>

                    </ul>

                    <ul class="slider-list slider2" aria-hidden="true">
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Amazon.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Rakuten.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Wipro.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/HSBC.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Infosys.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/accenture.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/tcs.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/capgemini.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/HCL.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Samsung.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Simens.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/ibm.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/epam.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/DBS.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Byju.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/Hexaware.svg"></li>
                        <li><img loading="lazy" class="cmpny-imgslide" src="assets/images/UST Global.svg">
                        </li>
                    </ul>
                </div>
            </section>
            <!-- <div class="toprec rounded">

                <div class="rec-slider">

                    <div class="logos">
                        <div class="slide"><img class="cmpny-imgslide" src="assets/images/ibm.png"></div>
                        <div class="slide"><img class="cmpny-imgslide" src="assets/images/capgemini.png"></div>
                        <div class="slide"><img class="cmpny-imgslide" src="assets/images/cognizant.png"></div>
                        <div class="slide"><img class="cmpny-imgslide" src="assets/images/kotak.png"></div>
                        <div class="slide"><img class="cmpny-imgslide" src="assets/images/modern_hcare.png"></div>
                        <div class="slide"><img class="cmpny-imgslide" src="assets/images/pfizer.png"></div>
                    </div>
                </div>
            </div>-->
        </div>

                <!-- New news carusel starts -->
        <?php
    $sqlquery22 ="SELECT * FROM  news  order by  date desc limit 6";

      $result=mysqli_query($conn, $sqlquery22);
		 $all = array();
    //  print_r($result);
    
?>
        <div class="news-txt">
            NEWS
        </div>
        <div class="news-div">
            <div class="news-info">

                <div class="newstxt-carousel">

                    <?php  if(mysqli_num_rows($result) > 0){
                while ($news = $result->fetch_assoc()) { 
                        $all[] = $news;
                    $newsdatedb =new DateTime($news['date']);  // get the event date and set it to the variable $date 
                    $news_mnth= substr(($newsdatedb->format('F')), 0, 3);
                    $newsdate = $newsdatedb->format('d');
                    $newsyr = $newsdatedb->format('Y');
                    ?>
                    <div class="content"  id="<?php echo $news['id']; ?>"  data-active-type="<?php echo $news['active']; ?>">
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
                            <div class="news-content rdmr-news">
                                <?php echo $news['descr']; ?>

                            </div>

                        </div>
                    </div>
                    <?php } }?>

                  
                </div>
                <div class="news-cntrlsdiv">
                    <div class="news-rdmore">
                        <div class="news-rdmr-view">
                            <div class="text_btnnew viewall-right" onclick="newsreadmore()">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        Read More
                                    </div>
                                    <div>
                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                            <div class="text_btnnew viewall-right" onclick="window.open('news.php', '_blank')">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt">
                                        View All
                                    </div>
                                    <div>
                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                       </div>
                        <div class="news-prvnxt">
                            <div class="smallcta_btn_primary prevnew" style="transform: rotate(179deg);">
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
                                <!--  <img loading="lazy" src="assets/svgicons/arrow_back_white.svg" />-->
                            </div>
                            <div class="smallcta_btn_primary nextnew">
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
                <div class="photos">

                    <?php
                    $sqlquery22_1 ="SELECT img,active FROM  news  order by  date desc limit 6";

                    $result1=mysqli_query($conn, $sqlquery22_1);

                if(mysqli_num_rows($result1) > 0){
               
                while ($newsimg = $result1->fetch_assoc()) {?>
                    <img src="<?php echo $newsimg['img']; ?>" loading="lazy"
                        class="<?php  if($newsimg['active'] == 1){ echo 'activeimg';}else{ echo '';} ?>"
                        alt="<?php echo $newsimg['img']; ?>">
                    <?php      }   }?>
                    <!--
                     <img src="assets/images/DSC_813.webp" loading="lazy" class="activeimg" alt="Image 2">
                    <img src="assets/images/DSC_7222.webp" loading="lazy" class="" alt="Image 2">
                    <img src="assets/images/MOU PHOTO.webp" loading="lazy" class="" alt="Image 3">
                    <img src="assets/images/DSC_683.webp" loading="lazy" class="" alt="Image 4">
                    <img src="assets/images/1.webp" class="" loading="lazy" alt="Image 5">
                    <img src="assets/images/womensday-2024.jpeg" loading="lazy" class="" alt="Image 1"> -->
                    <!-- Add more images as needed -->
                </div>
                <!-- </div> -->


            </div>

        </div>

        <!-- New news carousel ends -->

        <?php 

$sqlquery4 ="SELECT * FROM  events order by  date desc limit 4";

$result=mysqli_query($conn, $sqlquery4);
    
?>
        <div class="home-events">
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
                        <div>
                            <a href="<?php echo $row['hlink'];?>">
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
                </div>

                <?php } }?>


                <!--   <div class="events_innrdiv">
                <div class="datediv">
                    <div class="event_mnth">Jun</div>
                    <div class="event_date">20</div>
                </div>
                <div class="event-topicdiv">
                    <div class="event_topic">ICETMSC 2024</div>
                    <div class="event_author">By MATHS Department</div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a
                            href="https://docs.google.com/forms/d/e/1FAIpQLSd7X8Q8QuvmhRM2Pjsv9o6HMm_7c8f5GvV9wy8YrAtRbzab4w/viewform">
                          
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
                    <div>
                        <a
                            href="https://docs.google.com/forms/d/e/1FAIpQLSd7X8Q8QuvmhRM2Pjsv9o6HMm_7c8f5GvV9wy8YrAtRbzab4w/viewform">
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
            </div>
            <div class="events_innrdiv">
                <div class="datediv">
                    <div class="event_mnth">Mar</div>
                    <div class="event_date">12</div>
                </div>
                <div class="event-topicdiv">
                    <div class="event_topic">National Webinar</div>
                    <div class="event_author">By MBA Department</div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a
                            href="https://docs.google.com/forms/d/e/1FAIpQLSeaLBBMY5EX8OmluKYCYJKE5X_-yDm9xYc70lUDjwigq7N--w/viewform">
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
                    <div>
                        <a
                            href="https://docs.google.com/forms/d/e/1FAIpQLSeaLBBMY5EX8OmluKYCYJKE5X_-yDm9xYc70lUDjwigq7N--w/viewform">
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
            </div>

            <div class="events_innrdiv">
                <div class="datediv">
                    <div class="event_mnth">MAR</div>
                    <div class="event_date">05</div>
                </div>
                <div class="event-topicdiv">
                    <div class="event_topic">WAASAGA 2024</div>
                    <div class="event_author">By ECE Department </div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="https://vignan.ac.in/wAASAGA2024/register.php">
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
                    <div>
                        <a href="https://vignan.ac.in/wAASAGA2024/register.php">
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

            </div>

            <div class="events_innrdiv">
                <div class="datediv">
                    <span class="event_mnth">FEB</span>
                    <span class="event_date">12</span>
                </div>
                <div class="event-topicdiv">
                    <div class="event_topic">
                        eFDP/SDP
                    </div>
                    <div class="event_author">
                        By BIOTECH Department
                    </div>
                    <div class="eventarrow-dsktp elementnone-mbl">
                        <a href="https://vignan.ac.in/pdf/FLSVAPB%20FDP%20BROCHURE.pdf">
                          
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
                    <div>
                        <a href="https://vignan.ac.in/pdf/FLSVAPB%20FDP%20BROCHURE.pdf">
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
            </div>-->
                <!-- <div class="events_innrdiv">
                    <div class="datediv">
                        <div class="event_mnth">DEC</div>
                        <div class="event_date">18</div>
                    </div>
                    <div class="event-topicdiv">
                        <div class="event_topic">ATAL FDP</div>
                        <div class="event_author">By ECE</div>
                        <div class="eventarrow-dsktp elementnone-mbl">
							 <a href="https://vignan.ac.in/atalfdp/">
                            <img  src="assets/svgicons/arrow_right_white.svg" />
							</a>
                        </div>
                        
                        <div>
							 <a href="https://vignan.ac.in/atalfdp/">
                            <img class="eventarrow" src="assets/svgicons/arrow_right_black.svg" />
							</a>
                        </div>
                    </div>
                </div>-->


            </div>
        </div>
        <div class="text_btnnew viewall-right" onclick="events()">
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                    View All Events
                </div>
                <div>
                    <img src="assets/svgicons/outwardarrow_brown.svg" loading="lazy"
                        style="width: 16px;height: 16px;" />
                </div>
            </div>
        </div>
        <!--<div class="viewall-right">
            <button class="text_btn_secondary text_btn_secondary-btn_txt viewall"> <img
                    src="assets/icons/arrow_outward.png" /> &nbsp;View all Events</button>
        </div>-->


        <?php 

$sqlquery5 ="SELECT * FROM  notifications  order by  date desc limit 4";

$result=mysqli_query($conn, $sqlquery5);

     
?>

        <div class="home-events">
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
                <?php } }?>

                <!-- <div class="notf_innrdiv">
                <div class="notf_title">BA & BBA LLB, Pharmacy, M.Sc Aprill 2024 Fee Notification</div>
                <div class="notf_date">18th March 2024</div>
                <div class="eventarrow-dsktp elementnone-mbl">
                    <a href="https://vignan.ac.in/2023pdf/I,II,III%20&%20IV%20B.A.%20&%20B.B.A.%20LLB(Hons),%20IV-B.Pharmacy,%20II-M.Sc_%20II%20Sem%20%20Sup%20End%20Exams-April%202024%20Fee%20Notification.pdf"
                        target="_blank">
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
                     
                    </a>
                </div>
                <div class="div-notf_img" onclick="notifications()">
                    <a href="https://vignan.ac.in/2023pdf/I,II,III%20&%20IV%20B.A.%20&%20B.B.A.%20LLB(Hons),%20IV-B.Pharmacy,%20II-M.Sc_%20II%20Sem%20%20Sup%20End%20Exams-April%202024%20Fee%20Notification.pdf"
                        target="_blank">

                        <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="18" height="18">
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

            <div class="notf_innrdiv">
                <div class="notf_title">Diploma R21 Fee Notification</div>
                <div class="notf_date">13th March 2024</div>
                <div class="eventarrow-dsktp elementnone-mbl">
                    <a href="https://vignan.ac.in/2023pdf/I%20&%20II%20Diploma%20(R21)%20I%20Semester_%20Supplementary%20Examinations_%20April%202024%20fee%20notification.pdf"
                        target="_blank">
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
                      
                    </a>
                </div>
                <div class="div-notf_img">
                    <a href="https://vignan.ac.in/2023pdf/I%20&%20II%20Diploma%20(R21)%20I%20Semester_%20Supplementary%20Examinations_%20April%202024%20fee%20notification.pdf"
                        target="_blank">
                        <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="18" height="18">
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

            <div class="notf_innrdiv">
                <div class="notf_title">B.Pharmacy R18 April 2024 Fee Notification</div>
                <div class="notf_date">10th March 2024</div>
                <div class="eventarrow-dsktp elementnone-mbl">
                    <a href="https://vignan.ac.in/2023pdf/B.Pharmacy%20(R18)-%20Regular%20Examinations_%20April%202024%20fee%20notification.pdf"
                        target="_blank">
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
                   
                    </a>
                </div>
                <div class="div-notf_img">
                    <a href="https://vignan.ac.in/2023pdf/B.Pharmacy%20(R18)-%20Regular%20Examinations_%20April%202024%20fee%20notification.pdf"
                        target="_blank">
                        <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="18" height="18">
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

            <div class="notf_innrdiv">
                <div class="notf_title">B.Tech r19, BBA R20 Supply March 2024 Notification</div>
                <div class="notf_date">12th Feb 2024</div>
                <div class="eventarrow-dsktp elementnone-mbl">
                    <a href="https://vignan.ac.in/2023pdf/B.Tech%20(R19)%20&%20BBA%20(R20)_Special%20Supplementary%20Examinations_%20March%202024%20fee%20notification.pdf"
                        target="_blank">
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
                      
                    </a>
                </div>
                <div class="div-notf_img">
                    <a href="https://vignan.ac.in/2023pdf/B.Tech%20(R19)%20&%20BBA%20(R20)_Special%20Supplementary%20Examinations_%20March%202024%20fee%20notification.pdf"
                        target="_blank">
                        <svg class="eventarrow" width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2994_7519" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="18" height="18">
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
            </div>-->
            </div>
        </div>
        <div class="text_btnnew viewall-right" onclick="notifications()">

            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                    View All
                </div>
                <div>
                    <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
            </div>
        </div>
        <!--<div class="viewall-right">
            <button class="text_btn_secondary text_btn_secondary-btn_txt viewall"> <img
                    src="assets/icons/arrow_outward.png" /> &nbsp;View all</button>
        </div>-->

        <?php 

$sqlquery6 ="SELECT * FROM  sections  where id='home_facility'";

$result=mysqli_query($conn, $sqlquery6);
$facilities = $result->fetch_assoc();
?>
        <div class="home-facilities">
            <div class="home-facilities_innrdiv">
                <div class="home_goalstitle"><?php echo $facilities['title']; ?></div>
                <div><img style="width:100%;" src="<?php echo $facilities['img1']; ?>" /></div>
            </div>
            <div class="home-facilities_div2">
                <div class=""><img style="width:100%;" src="<?php echo $facilities['img2']; ?>" /></div>
                <div class="home-facilities_imgbtn">
                    <div><img class="home-facilitiesimg3" src="<?php echo $facilities['img3']; ?>" /></div>
                    <button class="cta_button_primary Ss-btn_txt btnnone"
                        onclick="window.open('<?php echo $facilities['btn1_hlink']; ?>',  '_blank')">

						<div class="Ss-btn_txt"><?php echo $facilities['btn_nm1']; ?></div>
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
                       
                        <!-- <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                    </button>
                </div>

            </div>

        </div>

        <div class="home-facilitiestxt">
            <?php echo $facilities['descr']; ?>
        </div>
        <div class="width100 btnnone-mbl">
            <button class="cta_button_primary Ss-btn_txt  explore width100"
                onclick="window.open('<?php echo $facilities['btn1_hlink']; ?>',  '_blank')"><?php echo $facilities['btn_nm1']; ?>
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


        <?php 

$sqlquery7 ="SELECT * FROM  sections  where id='home_goodfood'";

$result=mysqli_query($conn, $sqlquery7);
$goodfood = $result->fetch_assoc();

?>
        <div class="home-facilities divmargin-top">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="58" viewBox="0 0 66 58" fill="none">
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

        <?php 

$sqlquery8 ="SELECT * FROM  sections  where id='home_cultivate'";

$result=mysqli_query($conn, $sqlquery8);
$cultivate = $result->fetch_assoc();

$sqlquery9 ="SELECT * FROM  stats  where id like 'home%' order by statorder asc limit 3";

$statsres=mysqli_query($conn, $sqlquery9);
//$statsres = $res->fetch_assoc();

?>

        <div class="home-cultivatediv">
            <div class="home_cultstitle"><?php echo $cultivate['title']; ?> </div>
            <div class="home-cultivate_innrdiv">

                <div class="home-cultivateholediv">
                    <div class="home-cultivate_innrdiv">

                        <div class="home-cultivate_txt"><?php echo $cultivate['descr']; ?></div>
                        <div class="home-cultivate_facultydiv">
                            <div class="home-cultivate_facultytitle">
                                Faculty
                            </div>
                            <div class="home-cultivate_rank_outrdiv">

                                <?php if(mysqli_num_rows($statsres) > 0){
    
    while ($stats = $statsres->fetch_assoc()) { 
        if($stats['logo'] != ''){?>
                                <div class="home-cultivate_rankdiv">
                                    <div>
                                        <img loading="lazy" src="<?php echo $stats['logo']; ?>" />
                                    </div>
                                    <div class="home-cultivate_rank"><?php echo $stats['statvalue']; ?></div>
                                </div>

                                <?php
        }else{?>
                                <div class="home-cultivate_rankdiv">
                                    <div class="home-cultivate_statnum"><?php echo $stats['statvalue']; ?></div>
                                    <div class="home-cultivate_stattxt"><?php echo $stats['descr']; ?></div>
                                </div>
                                <?php   }
      } }	?>
                                <!-- <div class="home-cultivate_rankdiv">
                                <div>
                                    <img loading="lazy" src="assets/images/nirf.svg" />
                                </div>
                                <div class="home-cultivate_rank">75</div>
                            </div>


                            <div class="home-cultivate_rankdiv">
                                <div class="home-cultivate_statnum">40%</div>
                                <div class="home-cultivate_stattxt">From iit,<br> iisc, Nit</div>
                            </div>


                            <div class="home-cultivate_rankdiv">
                                <div class="home-cultivate_statnum">1:20</div>
                                <div class="home-cultivate_stattxt">Faculty to Student Ratio</div>
                            </div> -->

                            </div>
                            <div> <button class="cta_button_primary Ss-btn_txt btnnone"
                                    onclick="window.open('<?php echo $cultivate['btn1_hlink']; ?>',  '_blank')">
                                    <?php echo $cultivate['btn_nm1']; ?>

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
                                    <!--<img src="assets/icons/Button_forwardarrow.png" />-->
                                </button></div>



                            <button class="cta_button_primary Ss-btn_txt  explore width100 btnnone-mbl"
                                onclick="window.open('<?php echo $cultivate['btn1_hlink']; ?>',  '_blank')">
                                <?php echo $cultivate['btn_nm1']; ?>
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
                                <!--<img src="assets/svgicons/arrow_right_white.svg" class="explore-icon" />-->
                            </button>


                        </div>
                    </div>
                    <div class="home-cultivate_div2">
                        <div>
                            <div><img class="home-cultivate_img1" src="<?php echo $cultivate['img1'];?>" /></div>

                        </div>
                        <!-- <div><img src="assets/images/dean_iqac.jpeg" class="home-cultivate_img3" /></div>
                            <div><img src="assets/images/Dean _ AAA.jpg" class="home-cultivate_img2" /></div>-->
                        <div class="home-cultivate_img2-3">
                            <div><img src="<?php echo $cultivate['img2'];?>" class="home-cultivate_img2" /></div>
                            <div><img src="<?php echo $cultivate['img3'];?>" class="home-cultivate_img3" /></div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="home-prgmsoffrd_div">
                <div class="home-prgmsoffrd_title">
                    Programs Offered
                </div>
                <div class="home-prgms">
                    <div class="home-prgms-rect">
                        <div class="home-prgmtype">
                            Under Graduate
                        </div>
                        <div class="home-duration">
                            3 years & 4 years
                        </div>
                        <div class="text_btnnew" onclick="programs()">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    View Programs
                                </div>
                                <div>
                                    <img src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                        <!--<button class="text_btn_secondary text_btn_secondary-btn_txt viewall"> <img
                                    src="assets/icons/arrow_outward.png" /> &nbsp;View Programs</button>-->
                    </div>

                    <div class="home-prgms-rounded">
                        <div class="home-prgmtype">
                            Post Graduate
                        </div>
                        <div class="home-duration">
                            2 years
                        </div>
                        <div class="text_btnnew" onclick="programs()">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    View Programs
                                </div>
                                <div>
                                    <img src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="home-prgms-rect">
                        <div class="home-prgmtype">
                            Ph.D
                        </div>
                        <div class="home-duration">
                            Min. 5 years
                        </div>
                        <div class="text_btnnew" onclick="programs()">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    View Programs
                                </div>
                                <div>
                                    <img src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <?php 

$sqlquery10="SELECT * FROM  sections  where id='home_accrd'";

$result=mysqli_query($conn, $sqlquery10);
$acc = $result->fetch_assoc();


$sqlquery11="SELECT * FROM  accreditation  where id='homeacc_nba' ";

$accresult1=mysqli_query($conn, $sqlquery11);
$accinfo1 = $accresult1->fetch_assoc();


$sqlquery12="SELECT * FROM  accreditation  where id='homeacc_disr'";

$accresult2=mysqli_query($conn, $sqlquery12);
$accinfo2 = $accresult2->fetch_assoc();

$sqlquery13="SELECT * FROM  accreditation  where id='homeacc_naac'";

$accresult3=mysqli_query($conn, $sqlquery13);
$accinfo3 = $accresult3->fetch_assoc();

?>
        <div class="acc-div-113"><?php echo $acc ['title'];?></div>

        <div class="acc-div1">
            <div class="div-116 acc_txt">
                <?php echo $acc ['descr'];?>
            </div>
            <div class="acc-column-18">
                <div class="div-117">
                    <div class="div-118">
                        <div class="column-19">
                            <div class="acc-div-119">
                                <div class="div-120">
                                    <img loading="lazy" srcset="<?php echo $accinfo1['acc_logo'];?>" class="img-27" />
                                    <div class="div-121">
                                        <?php echo $accinfo1['acc_desc'];?>

                                    </div>
                                    <div class="text_btnnew viewall-right"
                                        data-toggle="modal"  data-target="#nba">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt">
                                                <?php echo $accinfo1['acc_btnm']; ?>
                                            </div>

                                            <div>
                                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                                    style="width: 16px;height: 16px;" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="div-122"
                                        onclick="window.open('<?php echo $accinfo1['acc_btnhlink']; ?>',  '_blank')">
                                        <div class="div-123"> <?php echo $accinfo1['acc_btnm'];?></div>
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/e1b0dd7e8411329289ead0266cfae2eff19643b2df2dd27bee97165d191ae425?apiKey=199c707a719f471b99f1a193498eeddd&"
                                            class="img-28" />
                                    </div>
                                    <div class="div-124"></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="column-20">
                            <div class="acc-div-125">
                                <div class="div-126">
                                    <img loading="lazy" srcset="<?php echo $accinfo2['acc_logo'];?>" class="img-29" />
                                    <div class="div-127">
                                        <?php echo $accinfo2['acc_desc'];?>
                                    </div>

                                    <div class="text_btnnew viewall-right"
                                        data-toggle="modal"  data-target="#iqachead_dsiroverlay" >
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt">
                                                <?php echo $accinfo2['acc_btnm'];?>
                                            </div>

                                            <div>
                                                <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                                    style="width: 16px;height: 16px;" />
                                            </div>
                                        </div>
                                    </div>


                                    <!-- <div class="div-128"
                                        onclick="window.open('<?php echo $accinfo2['acc_btnlink']; ?>',  '_blank')">
                                        <div class="div-129"> <?php echo $accinfo2['acc_btnm'];?></div>
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/d5a33ae3690f14f042df2b12008de2232be6d28cc9b81bfe43c78fef2ce84800?apiKey=199c707a719f471b99f1a193498eeddd&"
                                            class="img-30" />
                                    </div>
                                    <div class="div-130"></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="column-21">
                            <div class="acc-div-119">
                                <div class="div-120">
                                    <img loading="lazy" srcset="<?php echo $accinfo3['acc_logo'];?>" class="img-27" />
                                    <div class="div-121">
                                        <?php echo $accinfo3['acc_desc'];?>

                                    </div>
                                    <div class="text_btnnew viewall-right"
                                        onclick="window.open('<?php echo $accinfo3['acc_btnhlink']; ?>',  '_blank')">
                                        <div class="text_btnnew_innrdiv">
                                            <div class="text_btnnew_txt">
                                                <?php echo $accinfo3['acc_btnm']; ?>
                                            </div>

                                            <div>
                                                <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                                    style="width: 16px;height: 16px;" />
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


        <div class="home-brwsdiv">
            <div class="home-prgmsoffrd_title btnnone-mbl">
                Browse Departments
            </div>
            <div>
                <img loading="lazy" class="home-brwsimg1" src="assets/images/brws-img1.webp" />
            </div>
            <div class="home-depts">
                <div class="deptcard_div" onclick="compdep()" style="cursor:pointer;">
                    <div class="deptcard_innrdiv">
                        <div class="dept_name">Computer Science Engineering</div>
                        <div class="dept-imgbrdr">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_3071_92" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="48" height="48">
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
                <div class="deptcard_div" onclick="mechdep()" style="cursor:pointer;">
                    <div class="deptcard_innrdiv">
                        <div class="dept_name">Mechanical Engineering</div>
                        <div class="dept-imgbrdr">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_3079_85" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="48" height="48">
                                    <rect width="48" height="48" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_3079_85)">
                                    <path
                                        d="M35.7578 41.25L22.4809 27.95C21.7219 28.2936 20.9395 28.5577 20.1338 28.7423C19.3281 28.927 18.4856 29.0193 17.6064 29.0193C14.4771 29.0193 11.8238 27.9184 9.64666 25.7165C7.46946 23.5147 6.38086 20.8554 6.38086 17.7385C6.38086 16.8137 6.48819 15.9462 6.70286 15.1361C6.91749 14.3259 7.21786 13.5254 7.60396 12.7346L14.8117 19.8269L19.8578 14.9269L12.6693 7.71158C13.4578 7.32181 14.2554 7.00577 15.0623 6.76347C15.8692 6.52117 16.7228 6.40002 17.6232 6.40002C20.8057 6.40002 23.5058 7.49928 25.7235 9.69778C27.9412 11.8962 29.0501 14.5754 29.0501 17.7351C29.0501 18.6579 28.9642 19.5135 28.7924 20.3019C28.6206 21.0904 28.3501 21.8551 27.9809 22.5962L41.2694 35.8731C41.6001 36.2099 41.7655 36.5986 41.7655 37.0392C41.7655 37.4797 41.603 37.8605 41.2779 38.1814L38.0339 41.3355C37.7523 41.6272 37.3769 41.7603 36.9077 41.7346C36.4385 41.709 36.0552 41.5475 35.7578 41.25ZM36.9617 39.3692L39.327 37.0039L25.3501 23.0269C25.7578 22.2423 26.1117 21.3943 26.4117 20.4827C26.7117 19.5712 26.8617 18.6564 26.8617 17.7385C26.8617 15.2305 25.8328 12.9945 23.7751 11.0306C21.7174 9.06661 19.2078 8.30771 16.2463 8.75388L21.3347 13.8654C21.6424 14.2071 21.7879 14.6086 21.7713 15.0698C21.7546 15.531 21.5924 15.9321 21.2847 16.2731L16.0847 21.2539C15.7339 21.6205 15.3302 21.8039 14.8736 21.8039C14.4169 21.8039 14.0219 21.6205 13.6886 21.2539L8.72321 16.3C8.26934 19.5411 9.04229 22.1064 11.0421 23.9962C13.0418 25.8859 15.2421 26.8308 17.643 26.8308C18.5059 26.8308 19.3897 26.7122 20.2946 26.475C21.1995 26.2379 22.068 25.8359 22.9001 25.2693L36.9617 39.3692Z"
                                        fill="black" />
                                </g>
                            </svg>
                            <!-- <img src="assets/icons/Mechanical.png" />-->
                            <div class="council-brdr"></div>
                        </div>
                    </div>
                </div>
                <div class="deptcard_div" onclick="ecedep()" style="cursor:pointer;">
                    <div class="deptcard_innrdiv">
                        <div class="dept_name">Electronics & Communication Engineering</div>
                        <div class="dept-imgbrdr">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_3079_1538" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="48" height="48">
                                    <rect width="48" height="48" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_3079_1538)">
                                    <path
                                        d="M23.8885 31.6193L32.9769 18.4154H25.8116L28.9193 7.83847H18.6577V24.3616H23.8885V31.6193ZM21.7 38.7424V26.55H16.4692V5.65002H31.7962L28.75 16.227H37.1577L21.7 38.7424Z"
                                        fill="black" />
                                </g>
                            </svg>

                            <!--<img src="assets/icons/Electric.png" />-->
                            <div class="council-brdr"></div>
                        </div>
                    </div>
                </div>
                <div class="deptcard_div" onclick="civildep()" style="cursor:pointer;">
                    <div class="deptcard_innrdiv">
                        <div class="dept_name">Civil Engineering</div>
                        <div class="dept-imgbrdr">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_3079_2126" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="48" height="48">
                                    <rect width="48" height="48" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_3079_2126)">
                                    <path
                                        d="M9.08446 39.873V36.3499H15.2037L10.0422 18.5499C9.03702 18.1269 8.26651 17.5147 7.73061 16.7134C7.19471 15.9121 6.92676 14.9387 6.92676 13.7931C6.92676 12.3296 7.43926 11.0867 8.46426 10.0643C9.48926 9.04189 10.7354 8.53069 12.2026 8.53069C13.4828 8.53069 14.5883 8.91596 15.5191 9.68649C16.4499 10.457 17.0601 11.4538 17.3499 12.6768H24.8729V9.52684C24.8729 9.19134 24.9692 8.92926 25.1619 8.74059C25.3545 8.55196 25.6146 8.45764 25.9422 8.45764C26.2729 8.45764 26.512 8.54417 26.6595 8.71724C26.8069 8.89031 26.8883 9.10889 26.9037 9.37299V9.91149L30.7306 6.29994C31.0165 6.05891 31.3308 5.90954 31.6735 5.85184C32.0162 5.79414 32.3846 5.85248 32.7785 6.02684L40.5383 9.68454C40.7358 9.77428 40.9095 9.95121 41.0595 10.2153C41.2095 10.4794 41.2043 10.743 41.0439 11.0059C40.9068 11.2455 40.7146 11.3942 40.4671 11.4518C40.2196 11.5095 39.9766 11.4807 39.7383 11.3653L31.923 7.66534L27.0614 12.3961V15.0615L31.923 19.8499L39.7383 16.1384C40.009 16.023 40.2453 15.9961 40.4471 16.0576C40.6489 16.1192 40.8537 16.2692 41.0614 16.5076C41.1511 16.7717 41.1358 17.0397 41.0153 17.3115C40.8948 17.5833 40.7319 17.7769 40.5268 17.8922L32.8807 21.4769C32.4832 21.6589 32.096 21.7352 31.7191 21.7057C31.3422 21.6762 31.0074 21.5133 30.7147 21.2168L26.9037 17.6922V18.2307C26.8883 18.5692 26.7984 18.8063 26.6339 18.9422C26.4694 19.0781 26.2392 19.1461 25.9433 19.1461C25.615 19.1461 25.3545 19.0452 25.1619 18.8434C24.9692 18.6416 24.8729 18.3861 24.8729 18.0768V14.8653H17.2883C17.2704 15.3346 17.121 15.8121 16.8403 16.298C16.5595 16.7839 16.2896 17.1397 16.0306 17.3653L26.0576 36.3499H33.9345V39.873H9.08446ZM12.1547 16.873C13.0092 16.873 13.7419 16.5722 14.3528 15.9705C14.9636 15.3688 15.2691 14.6379 15.2691 13.7779C15.2691 12.9179 14.9667 12.1931 14.362 11.6035C13.7573 11.014 13.0227 10.7192 12.1582 10.7192C11.2937 10.7192 10.5704 11.014 9.98831 11.6035C9.40627 12.1931 9.11526 12.9179 9.11526 13.7779C9.11526 14.6379 9.40817 15.3688 9.99401 15.9705C10.5799 16.5722 11.3001 16.873 12.1547 16.873ZM17.6768 36.3499H23.5729L15.2229 20.473C15.028 20.6166 14.7069 20.7474 14.2595 20.8653C13.812 20.9833 13.4063 21.0333 13.0422 21.0153L17.6768 36.3499Z"
                                        fill="black" />
                                </g>
                            </svg>
                            <!--<img src="assets/icons/Civil.png" />-->
                            <div class="council-brdr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-brwsdiv3">
                <div class="home-div3_title btnnone">
                    Browse Departments
                </div>
                <div>
                    <img loading="lazy" src="assets/images/brws-img2.webp" class="btnnone" />
                </div>
                <div>
                    <button class="cta_button_primary Ss-btn_txt btnnone" onclick="window.open('department.php',  '_blank')">View All
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                        <!--<img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                    </button>
                </div>



                <div class="btnnone-mbl">
                    <button class="cta_button_primary Ss-btn_txt  explore" onclick="window.open('department.php',  '_blank')">View Departments
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
                        <!--  <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->

                    </button>
                </div>




                <!-- <div>
                    <button class="cta_button_primary Ss-btn_txt">View All
                        <img src="assets/icons/Button_forwardarrow.png" class="btn_arrow" /></button>
                </div>-->
            </div>
        </div>

        <?php
 $sqlquery17="SELECT * FROM  sections  where id='home_research'";

$result=mysqli_query($conn, $sqlquery17);
$research = $result->fetch_assoc();

$sqlquery18="SELECT * FROM  researchs  limit 2";

$researchs=mysqli_query($conn, $sqlquery18);
//$researchs = $result->fetch_assoc();

$sqlquery19="SELECT * FROM  stats where id='home_researchfund'";

$res_funding=mysqli_query($conn, $sqlquery19);
$researchfunding = $res_funding->fetch_assoc();

$sqlquery20="SELECT * FROM  stats where id='home_researchpapers'";
$res_papers=mysqli_query($conn, $sqlquery20);
$researchpapers=$res_papers->fetch_assoc();

$sqlquery21="SELECT * FROM  stats where id='home_researchpat'";
$res_patents=mysqli_query($conn, $sqlquery21);
$researchpatents=$res_patents->fetch_assoc();


?>

        <div class="home-research">
            <div class="home-researchdiv">

                <div class="home-research_innrdiv">
                    <div class="home-researchtitle">
                        <?php echo $research['title']; ?>

                    </div>
                    <div class="home-researchdiv1">

                        <div class="home-researchtxt">
                            <?php echo $research['descr']; ?>

                        </div>
                    </div>
                    <div class="home-researchdiv1-2">
                        <?php while ($researchinfo = $researchs->fetch_assoc()) {
                    
                    $research_dbdate =new DateTime($researchinfo['date']);  // get the event date and set it to the variable $date 
                    $month = substr(($research_dbdate->format('F')), 0, 3);
                    $dt= $research_dbdate->format('j');
                    $yr= $research_dbdate->format('y'); 
                    ?>
                        <div class="home-researchcard">
                            <div class="home-researchcard-innrdiv">
                                <div class="home-researchcontent">
                                    <div class="home-research_prsnnm">
                                        <?php echo $researchinfo ['researcher_name']; ?><br><?php echo $researchinfo ['role']; ?>
                                    </div>
                                    <div class="home-research_topic">
                                        <?php echo $researchinfo ['topic']; ?>
                                    </div>
                                    <div class="home-research_date">
                                        <?php echo $month ." " .$dt .", " .$yr; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <!-- <div class="home-researchcard">
                        <div class="home-researchcard-innrdiv">
                            <div class="home-researchcontent">
                                <div class="home-research_prsnnm">Dr. M. Ravi Kumar <br>STUDENT</div>
                                <div class="home-research_topic">
                                    Design and Development of Coconut Harvesting Robot
                                </div>
                                <div class="home-research_date">
                                    Jan 02, 2024
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-researchcard">
                        <div class="home-researchcard-innrdiv">
                            <div class="home-researchcontent">
                                <div class="home-research_prsnnm">Dr. P. Nagabhushan <br>HOD</div>
                                <div class="home-research_topic">
                                    Our researchers identify a new class of antibiotic using AI model
                                </div>
                                <div class="home-research_date">
                                    Dec 20, 2023
                                </div>
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
                <div class="home-reseachcountdiv">
                    <div class="home-reseachcount_innrdiv">
                        <div class="home-reseachcount">
                            <?php echo $researchpapers['statvalue']; ?>

                        </div>
                        <div class="home-reseach_txt"> <?php echo $researchpapers['descr']; ?></div>
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
                            <div class="home-reseach_circle_txt"><?php echo $researchfunding['statvalue']; ?><small
                                    class="home-reseach_circle_small">cr</small>
                            </div>
                            <div class="home-reseach_circle_title"><?php echo $researchfunding['descr']; ?></div>
                        </div>
                    </div>
                    <div class="home-reseach_square">
                        <div class="home-reseach_square_innrdiv">
                            <div class="home-reseach_square_content">
                                <div class="home-reseach_square_txt">
                                    <?php echo $researchpatents['statvalue']; ?>
                                    <!-- <small class="home-reseach_circle_small">+</small>-->
                                </div>
                                <div class="home-reseach_square_title">
                                    <?php echo $researchpatents['descr']; ?>

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
            <div class="">
                <button class="cta_button_primary  btnnone" onclick="research()">
					<div class="Ss-btn_txt">Explore More</div>
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

            <div class="btnnone-mbl">
                <button class="cta_button_primary  explore" onclick="research()">
					<div class="Ss-btn_txt">Explore More</div>
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


        <?php
 $sqlquery14="SELECT * FROM  sections  where id='home_alumni'";

$result=mysqli_query($conn, $sqlquery14);
$alumni = $result->fetch_assoc();
?>
        <div class="home-renowed_div1_title btnnone-mbl">
            Alumni Hall of Fame
        </div>
        <div class="home-renowed">

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
                        <button class="cta_button_primary btnnone"
                            onclick="window.open('<?php echo $alumni['btn1_hlink']; ?>',  '_blank')">
							<div class="Ss-btn_txt"><?php echo $alumni['btn_nm1']; ?></div>
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
                <button class="cta_button_primary explore"
                    onclick="window.open('<?php echo $alumni['btn1_hlink']; ?>',  '_blank')">
					<div class="Ss-btn_txt"><?php echo $alumni['btn_nm1']; ?></div>
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


        <?php
 $sqlquery15="SELECT * FROM  sections  where id='home_emotional'";

$result=mysqli_query($conn, $sqlquery15);
$emotional = $result->fetch_assoc();
?>


        <div class="home-emational_div">
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
                        <button class="cta_button_primary  btnnone" data-toggle="modal"
                            data-target="#emotionoverlay">
							<div class="Ss-btn_txt"><?php echo $emotional['btn_nm1'] ?></div>
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
                        <button class="cta_button_primary explore" onclick="window.open('#', '_blank')">
							<div class="Ss-btn_txt"> <?php echo $emotional['btn_nm2'] ?></div>
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
                                onclick="window.open('#',  '_blank')">
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

        <?php
 $sqlquery16="SELECT * FROM  sections  where id='home_felictation'";

$result=mysqli_query($conn, $sqlquery16);
$felictation = $result->fetch_assoc();
?>

        <div class="home-facilities divmargin-top10 divmargin-bottom">
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



        </div><br><br>

        <div id="mblftr">
            <?php
    
    include_once  'mblfooter.php';
    ?>
        </div>
        <div id="ftr">
            <?php
    
    include_once  'footer.php';
    ?>
        </div>
    </div>


    
    <!-- emtion overlay -->
    <div class="modal fade" id="emotionoverlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="overlay-dialog2" role="document">
            <div class="filter-modal_content2">
                <div class="pad2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/icons/cross_big.png">
                    </button>
                </div>
                <section class="emo-container">
                    <div class="emo-flex-row">
                        <article class="emo-column">
                            <figure class="emo-image-container">
                                <img class="emo-img" loading="lazy" src="assets/images/holistic_img.webp"
                                    alt="Soft Skills Image" />
                            </figure>
                            <h2 class="emo-section-title">Soft Skills</h2>
                            <p class="emo-paragraph">
                                Soft skills are given utmost priority in any business context and these skills are
                                becoming truly significant for business growth and career development of job
                                aspirants. In this respect, we train and encourage our young aspiring students to
                                become professionals with dynamic leadership qualities and managerial skills. The
                                training provides holistic development of the students to see them as future dynamic
                                managers.
                            </p>
                            <h3 class="emo-subsection-title2">The training ensures development of skills such as:
                            </h3>
                            <ul class="emo-paragraph">
                                <li>Critical thinking and problem solving</li>
                                <li>Collaboration</li>
                                <li>Agility and adaptability</li>
                                <li>Initiative and entrepreneurialism</li>
                                <li>Effective oral and written communication</li>
                                <li>Accessing and analysing information</li>
                                <li>Curiosity and imagination</li>
                            </ul>
                            <p class="emo-paragraph">
                                Understanding importance of the soft skills at global work place and to bridge the
                                skill gap between the industry requirements and academics; Vignans' Training Cell
                                has designed a crash training course for the B.Tech 2nd year students. Course
                                Duration: 20 to 25 hours in a semester.
                            </p>
                            <h3 class="emo-subsection-title2">Salient Features of the Course:</h3>
                            <ul class="emo-paragraph">
                                <li>To develop oral communication through short presentations, discussions etc.</li>
                                <li>To develop leadership skills through assigning mini project works in small teams
                                </li>
                                <li>To Build team skills through group discussions</li>
                                <li>To build resume to reach specific needs of a company</li>
                                <li>To Provide mock interviews</li>
                                <li>To Identify straits self through personal SWOC analysis</li>
                                <li>To Enhance time management skills</li>
                            </ul>
                            <h3 class="emo-subsection-title2">Training Methodology:</h3>
                            <ul class="emo-paragraph">
                                <li>Explaining the concepts and providing hands on Practice in work sheets</li>
                                <li>Exposure to TEDx videos and other eminent persons talks to develop presentation
                                    skills</li>
                                <li>Interactive sessions along with the presentations to develop students' speaking
                                    examinations skills</li>
                                <li>Conducting Mock interviews to develop presence of mind and build confidence</li>
                                <li>Group Discussions to develop team and leadership skills</li>
                            </ul>
                            <h3 class="emo-subsection-title2">Benefit for the Students:</h3>
                            <p class="emo-paragraph">
                                On successful completion of the course every student will be awarded appreciation
                                certificate and provided feedback for the individuals.
                            </p>
                            <h3 class="emo-subsection-title2">Trainers:</h3>
                            <p class="emo-paragraph">
                                The Training Cell has a well-equipped qualified in-house training faculty to train
                                the students. The faculty are ready to serve at the students' needs and create
                                friendly learning environment to inculcate the soft skills. In addition to this,
                                external resource persons are also invited to train the students in various aspects.
                            </p>
                        </article>

                        <aside class="emo-column2">
                            <section class="emo-sidebar">
                                <h2 class="emo-sidebar-title">Holistic Training</h2>
                                <div class="emo-sidebar-content">
                                    As reflected in its vision statement, the institutional mission is clearly
                                    aligned to the national goal, as it strives to prepare knowledgeable and
                                    employable professionals, who are psychologically strong, emotionally balanced,
                                    and socially conscious, so that they are able to enjoy a productive and
                                    successful career in future. Program wise eligibility criteria’s are mentioned
                                    below. <br /><br />
                                    Keeping this in mind the institution provides a wide gamut of activities for the
                                    holistic development and progression of the students. As a part of this, special
                                    care is taken in conducting various training programs for students to enhance
                                    their capability.
                                </div>
                                <h3 class="emo-subsection-title">Language & Communication Skills</h3>
                                <div class="emo-sidebar-content">
                                    Since most of the students are from rural areas, the institution takes
                                    appropriate steps to improve their oral communication and proficiency in
                                    English. Each student undergoes training in three phases starting from their
                                    first year to third year that enriches their communication skills. The training
                                    programs are as follows:
                                </div>
                                <h4 class="emo-subsection-title3">TECHNICAL ENGLISH COMMUNICATION (TEC)</h4>
                                <div class="emo-sidebar-content">
                                    This program focuses majorly on improving the basic vocabulary that is required
                                    for a student to participate actively in the classroom discussions. It helps to:
                                    <ul>
                                        <li>Strengthen the reading and listening comprehension skills of student to
                                            follow the academic discourse in the engineering classroom.</li>
                                        <li>Have a command of basic vocabulary related to different subject matters.
                                        </li>
                                        <li>Have a grasp on the mechanics of writing and expressing the ideas
                                            through construction of simple texts.</li>
                                    </ul>
                                </div>
                                <h4 class="emo-subsection-title3">ENGLISH PROFICIENCY & COMMUNICATION SKILLS (EPCS)
                                </h4>
                                <div class="emo-sidebar-content">
                                    The objective of this program is to introduce the specific uses of English to
                                    students and to improve the language proficiency of students in communicating
                                    the meaning verbally, as well as writing. In this programme, all applicants must
                                    be able to demonstrate that they have the English proficiency required for their
                                    individual program. <br /><br />
                                    Students are provided with a platform to enhance their Reading, Writing,
                                    Listening, and Speaking skills. These are measured by standardized and
                                    internationally recognized tests, such as Cambridge English Language Assessment
                                    which are usually marked on a band score. Preliminary English Test (PET) is one
                                    of such Cambridge English Qualifications for which students are provided with an
                                    opportunity to attend through this program. It is the English language exam that
                                    shows you have mastered the basics. <br /><br />
                                    English level B1 is the third level of English in the Common European Framework
                                    of Reference (CEFR), a definition of different language levels written by the
                                    Council of Europe. In everyday speech, this level would be called
                                    "intermediate", and indeed, that is the official level descriptor in the CEFR.
                                </div>
                            </section>

                        </aside>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <!-- News Modal-->
                                    <div class="modal fade" id="overlaynews" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                        aria-hidden="true">
                        <div class="overlay-dialog1" role="document">
                            <div class="filter-modal_content1">
                                <div class="pad2">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <img src="assets/icons/cross_big.png">
                                        <!-- <span aria-hidden="true">&times;</span> -->
                                    </button>
                                </div>
                                <section class="content-wrapper2">
                                    <div class="content-container">
                                        <div class="share-section">
                                            <div class="event-date" id="time"> </div>
                                            <div class="share-images-container">
                                                <img loading="lazy" src="" id="newsimg" class="share-image newsarticle-img" alt="" />
                                            </div>
                                            <p class="share-title">Share on</p>
                                            <div class="share-icons">
                                                <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.7087 30.9159V19.0303H13.5822V30.9159H17.7091H17.7087ZM15.6463 17.4077C17.085 17.4077 17.9807 16.4951 17.9807 15.3545C17.9537 14.1879 17.085 13.3007 15.6736 13.3007C14.2613 13.3007 13.3389 14.1879 13.3389 15.3544C13.3389 16.495 14.2343 17.4076 15.6192 17.4076H15.6459L15.6463 17.4077ZM19.9928 30.9159H24.1189V24.2791C24.1189 23.9244 24.1459 23.5687 24.2549 23.3153C24.5531 22.6053 25.232 21.8703 26.3722 21.8703C27.865 21.8703 28.4625 22.9601 28.4625 24.5581V30.9159H32.5886V24.101C32.5886 20.4504 30.5531 18.7516 27.8383 18.7516C25.6125 18.7516 24.6349 19.9426 24.0918 20.7538H24.1193V19.0307H19.993C20.0468 20.1457 19.9926 30.9163 19.9926 30.9163L19.9928 30.9159Z"
                                                        fill="black" />
                                                </svg>
                                                <svg id="social-arrow" width="45" height="45" viewBox="0 0 45 45"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Social Media / Facebook">
                                                        <g id="Capa 2">
                                                            <g id="ELEMENTS">
                                                                <path id="Vector"
                                                                    d="M28.0055 23.9648L28.6466 19.8911H24.6971V17.2432C24.6971 16.1293 25.2485 15.0409 27.0117 15.0409H28.8326V11.5718C27.7722 11.4027 26.7007 11.3113 25.6268 11.2981C22.3761 11.2981 20.2538 13.2522 20.2538 16.7849V19.8911H16.6505V23.9648H20.2538V33.8181H24.6971V23.9648H28.0055Z"
                                                                    fill="black" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Social Media / Instagram">
                                                        <g id="Group 15">
                                                            <path id="Vector"
                                                                d="M19.172 22.0564C19.172 20.0296 20.8887 18.3862 23.007 18.3862C25.1253 18.3862 26.8429 20.0296 26.8429 22.0564C26.8429 24.0831 25.1253 25.7266 23.007 25.7266C20.8887 25.7266 19.172 24.0831 19.172 22.0564ZM17.0983 22.0564C17.0983 25.1788 19.7436 27.7098 23.007 27.7098C26.2703 27.7098 28.9156 25.1788 28.9156 22.0564C28.9156 18.934 26.2703 16.403 23.007 16.403C19.7436 16.403 17.0983 18.934 17.0983 22.0564ZM27.7687 16.1788C27.7686 16.4401 27.8495 16.6956 28.0011 16.9129C28.1528 17.1302 28.3684 17.2997 28.6206 17.3998C28.8729 17.4999 29.1505 17.5261 29.4184 17.4752C29.6863 17.4244 29.9324 17.2986 30.1256 17.1139C30.3188 16.9292 30.4504 16.6939 30.5037 16.4376C30.5571 16.1814 30.5299 15.9157 30.4255 15.6743C30.3211 15.4328 30.1442 15.2264 29.9172 15.0811C29.6901 14.9359 29.4232 14.8583 29.1501 14.8582H29.1496C28.7835 14.8583 28.4325 14.9975 28.1735 15.2451C27.9146 15.4928 27.769 15.8286 27.7687 16.1788ZM18.3582 31.0181C17.2363 30.9692 16.6266 30.7904 16.2213 30.6393C15.6841 30.4392 15.3008 30.2009 14.8978 29.8158C14.4947 29.4307 14.2453 29.0643 14.037 28.5503C13.8791 28.1628 13.6922 27.5791 13.6412 26.5057C13.5854 25.3452 13.5743 24.9966 13.5743 22.0565C13.5743 19.1163 13.5863 18.7687 13.6412 17.6072C13.6923 16.5338 13.8805 15.9513 14.037 15.5626C14.2462 15.0486 14.4953 14.6819 14.8978 14.2962C15.3002 13.9106 15.6832 13.6719 16.2213 13.4727C16.6264 13.3216 17.2363 13.1428 18.3582 13.094C19.5711 13.0406 19.9355 13.0299 23.007 13.0299C26.0785 13.0299 26.4432 13.0415 27.6572 13.094C28.779 13.1429 29.3878 13.323 29.794 13.4727C30.3313 13.6719 30.7146 13.9112 31.1176 14.2962C31.5206 14.6813 31.7692 15.0486 31.9783 15.5626C32.1363 15.9502 32.3232 16.5338 32.3742 17.6072C32.4299 18.7687 32.4411 19.1163 32.4411 22.0565C32.4411 24.9966 32.4299 25.3443 32.3742 26.5057C32.3231 27.5791 32.1353 28.1626 31.9783 28.5503C31.7692 29.0643 31.5201 29.4311 31.1176 29.8158C30.7151 30.2005 30.3313 30.4392 29.794 30.6393C29.389 30.7905 28.779 30.9693 27.6572 31.0181C26.4442 31.0714 26.0799 31.0821 23.007 31.0821C19.9341 31.0821 19.5708 31.0714 18.3582 31.0181ZM18.2629 11.1133C17.0379 11.1667 16.2009 11.3525 15.4699 11.6247C14.7128 11.9057 14.0719 12.2828 13.4315 12.8946C12.7911 13.5064 12.398 14.1205 12.1042 14.8449C11.8198 15.5448 11.6256 16.3452 11.5698 17.5173C11.5131 18.6912 11.5001 19.0665 11.5001 22.0564C11.5001 25.0463 11.5131 25.4216 11.5698 26.5955C11.6256 27.7676 11.8198 28.568 12.1042 29.2679C12.398 29.9918 12.7912 30.6067 13.4315 31.2182C14.0718 31.8297 14.7128 32.2063 15.4699 32.4881C16.2023 32.7603 17.0379 32.9461 18.2629 32.9995C19.4905 33.0529 19.8821 33.0662 23.007 33.0662C26.1319 33.0662 26.5241 33.0537 27.7511 32.9995C28.9761 32.9461 29.8126 32.7603 30.5441 32.4881C31.3007 32.2063 31.9421 31.83 32.5825 31.2182C33.2229 30.6064 33.6152 29.9918 33.9097 29.2679C34.1942 28.568 34.3893 27.7675 34.4442 26.5955C34.5 25.4207 34.513 25.0463 34.513 22.0564C34.513 19.0665 34.5 18.6912 34.4442 17.5173C34.3884 16.3451 34.1942 15.5443 33.9097 14.8449C33.6152 14.121 33.2219 13.5073 32.5825 12.8946C31.9431 12.2818 31.3007 11.9057 30.545 11.6247C29.8126 11.3525 28.976 11.1658 27.752 11.1133C26.5251 11.0599 26.1328 11.0466 23.0079 11.0466C19.883 11.0466 19.4905 11.059 18.2629 11.1133Z"
                                                                fill="black" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Social Media / Instagram">
                                                        <g id="Group 15">
                                                            <path id="Vector"
                                                                d="M23.0001 12.5716C19.3697 12.5716 14.6577 13.4705 14.6577 13.4705L14.6458 13.4839C12.9924 13.7452 11.7256 15.1493 11.7256 16.8569V21.9993V22.001V27.1417V27.1434C11.7272 27.9589 12.0229 28.7472 12.5597 29.3666C13.0965 29.986 13.8391 30.3961 14.6543 30.5231L14.6577 30.5281C14.6577 30.5281 19.3697 31.4287 23.0001 31.4287C26.6305 31.4287 31.3425 30.5281 31.3425 30.5281L31.3442 30.5264C32.1602 30.3997 32.9037 29.9893 33.4409 29.3691C33.9781 28.749 34.2737 27.9597 34.2746 27.1434V27.1417V22.001V21.9993V16.8569C34.2734 16.0411 33.9778 15.2524 33.441 14.6326C32.9042 14.0129 32.1613 13.6026 31.3459 13.4755L31.3425 13.4705C31.3425 13.4705 26.6305 12.5716 23.0001 12.5716ZM20.3983 18.0555L27.3364 21.9993L20.3983 25.9431V18.0555Z"
                                                                fill="black" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="content-description-section">
											  <h2 class="event-title" id="newstitle"></h2>
                                            <div class="description-wrapper">
                                                <article class="description-text">
                                                  
                                                    <p class="event-description" id="newsdesc">

                                                        
                                                    </p>
                                                </article>
                                                <aside class="highlight-container">
                                                    <div class="highlight-box"></div>
                                                </aside>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                                    <!-- News Modal -->

    
    
    <!-- jQuery -->
    <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <!--    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>-->
    <script src="js/newscarousel.js"></script>
	 <script src="js/moment.js"></script>
    <script>
    //New news carousel

    // const photosparent = document.querySelector('.photos');

    // $(document).ready(function() {
    //     updateProgressBar();

    // });
    // // Add your JavaScript here
    // let Index = 0;

    // let intervalFlag = true;
    // const content = document.querySelectorAll('.content');
    // const progressBar = document.getElementById('progressBar');
    // let PrevIndex = content.length - 1;
    // img = document.querySelectorAll('.photos img');
    // var time = 12000;
    // var setIntervalId;






    // function next() {
    //     content[Index].classList.add('active-slide');
    //     setTimeout(() => {
    //         if (Index > 0) {
    //             content[Index - 1].style.display = 'none';
    //         } else {
    //             content[content.length - 1].style.display = 'none';
    //         }
    //     }, 1000);


    //     Index = (Index + 1) % content.length;

    //     setTimeout(() => {
    //         content[Index].style.display = 'flex';
    //     }, 1000);



    //     progressBar.classList.remove("prg-active");
    //     setInterval(updateProgressBar, 100);


    //     slideImagestest();


    //     // Add active class to the next content
    //     document.querySelectorAll('.content').forEach((curcontent, index) => {
    //         if (index === Index) {
    //             setTimeout(() => {
    //                 if (Index > 0) {
    //                     content[Index - 1].classList.remove('active-slide');
    //                 } else {
    //                     content[content.length - 1].classList.remove('active-slide');
    //                 }
    //                 //  content[Index-1].classList.remove('active-slide');
    //             }, 2100);

    //             curcontent.classList.add('show-slide');



    //         } else {
    //             setTimeout(() => {
    //                 if (Index > 0) {
    //                     content[Index - 1].classList.remove('active-slide');
    //                 } else {
    //                     content[content.length - 1].classList.remove('active-slide');
    //                 }
    //                 //  content[Index-1].classList.remove('active-slide');
    //             }, 2100);
    //             curcontent.classList.remove('show-slide');

    //         }


    //     });
    // }

    // function updateProgressBar() {
    //     progressBar.classList.add("prg-active");

    // }

    // function slideImagestest() {
    //     const imageWidth = document.querySelector('.photos img').clientWidth;

    //     if (Index == 0) {
    //         const offset = -Index * 260;
    //         photosparent.style.opacity = `0.3`;
    //         photosparent.style.transition = `opacity 0.1s`;
    //         // photosparent.style.transitionDelay = "2s";
    //         if (window.innerWidth <= 800) {
    //             photosparent.style.opacity = `1`;
    //             photosparent.style.transform = `translateX(0%)`;
    //         } else {

    //             setTimeout(() => {
    //                 photosparent.style.opacity = `1`;
    //                 photosparent.style.transition = `opacity 2s`;

    //                 photosparent.style.transform = `translateX(${offset}px)`;

    //             }, 10);
    //         }


    //     } else {
    //         const offset = -Index * 260;
    //         // var left= 120+(Index*33.5);
    //         //photosparent.style.left = `${left}%`;
    //         photosparent.style.opacity = `1`;
    //         if (window.innerWidth <= 800) {
    //             const mbloffset = -Index * 33;
    //             photosparent.style.transform = `translateX(0%)`;


    //         } else {
    //             photosparent.style.transform = `translateX(${offset}px)`;
    //         }


    //         photosparent.style.transition = `transform 2s`;
    //     }




    //     // Remove active class from all images
    //     const allImages = document.querySelectorAll('.photos img');
    //     allImages.forEach(image => image.classList.remove('activeimg'));
    //     // Add active class to the current slide
    //     const Image = allImages[1];
    //     Image.classList.add('activeimg');
    //     if (window.innerWidth <= 800) {

    //         const activeImage = photosparent.children[0].cloneNode(true);


    //         photosparent.appendChild(activeImage);
    //         const imageToRemove = photosparent.children[0];
    //         photosparent.removeChild(imageToRemove);
    //         var left = 120 + (Index * 33);
    //         var mblleft = 100 + (Index * 2);



    //         photosparent.style.left = `0px`;

    //     } else {
    //         setTimeout(() => {
    //             const activeImage = photosparent.children[0].cloneNode(true);


    //             photosparent.appendChild(activeImage);
    //             const imageToRemove = photosparent.children[0];
    //             photosparent.removeChild(imageToRemove);
    //             var left = 120 + (Index * 33);
    //             var mblleft = 100 + (Index * 2);


    //             photosparent.style.left = `${left}%`;


    //         }, 2300);

    //     }



    // }


    // function slideprevImages() {

    //     const imageWidth = document.querySelector('.photos img').clientWidth;
    //     if (Index == 0) {
    //         const offset = -Index * 260;
    //         photosparent.style.opacity = `0`;
    //         photosparent.style.transition = `opacity 0.1s`;
    //         // photosparent.style.transitionDelay = "2s";
    //         setTimeout(() => {
    //             photosparent.style.opacity = `1`;
    //             photosparent.style.transition = `opacity 2s`;
    //             photosparent.style.transform = `translateX(${offset}px)`;
    //         }, 20);

    //     } else {
    //         const offset = Index * 260;
    //         var left = 120 - (Index * 33);
    //         if (window.innerWidth <= 800) {
    //             photosparent.style.left = `0%`;
    //             photosparent.style.transform = `translateX(0px)`;

    //         } else {
    //             photosparent.style.left = `${left}%`;
    //             photosparent.style.opacity = `1`;
    //             photosparent.style.transform = `translateX(${offset}px)`;
    //             photosparent.style.transition = `transform 2s`;

    //         }

    //     }

    //     const allImages = document.querySelectorAll('.photos img');

    //     // Remove active class from all images
    //     allImages.forEach(image => image.classList.remove('activeimg'));

    //     // Add active class to the current slide
    //     const Image = allImages[PrevIndex];

    //     Image.classList.add('activeimg');
    //     var firstChild = photosparent.children[0];
    //     const activeImage = photosparent.children[PrevIndex].cloneNode(true);

    //     const imageToRemove = photosparent.children[PrevIndex];
    //     photosparent.removeChild(imageToRemove);
    //     photosparent.insertBefore(activeImage, firstChild);
    //     // const offset =Index*25;
    //     // var left= 130-(Index*2);

    //     // photosparent.style.left = `${left}%`;
    //     //  photosparent.style.transform = `translateX(${offset}px)`;
    //     //  photosparent.style.transition = `transform 2s`;


    // }

    // function restart() {
    //     setIntervalId = setInterval(next, 12000);

    // }
    // // start();
    // setIntervalId = setInterval(next, 12000);

    // //setInterval(next, 16000);


    // $('.nextnew').click(function() {
    //     clearInterval(setIntervalId);
    //     setIntervalId = undefined;

    //     //start();
    //     setInterval(next(), 12000);
    //     //setInterval(next(), 16000);
    //     restart();


    // });



    // $('.prevnew').click(function() {

    //     content[Index].style.display = 'none';
    //     Index = (Index - 1 + content.length) % content.length;
    //     content[Index].style.display = 'block';

    //     progressBar.classList.remove("prg-active");
    //     setInterval(updateProgressBar, 100);

    //     slideprevImages();

    //     // Add active class to the next content
    //     document.querySelectorAll('.content').forEach((content, index) => {
    //         if (index === Index) {
    //             content.classList.add('active-slide');
    //             content.classList.add('show-slide');
    //         } else {
    //             content.classList.remove('active-slide');

    //         }
    //     });
    // })
    //New news carousel ends

    var sethomeIntervalId;
    const items = document.querySelectorAll(".item");
    const home_controls = document.querySelector(".home_controls");
    var setinterval = 8000; //time interval
    for (let i = 0; i < items.length; i++) {
        const hmprogressBarContainer = document.createElement("div");
        hmprogressBarContainer.className = "home_progress-bar";
        hmprogressBarContainer.id = i;

        const hmprogressBar = document.createElement("div");
        hmprogressBar.className = "home_progress";
   

        hmprogressBarContainer.appendChild(hmprogressBar);
        home_controls.appendChild(hmprogressBarContainer);
    }
    let hm_currentIndex = 0;

    const pb = document.querySelectorAll(".home_progress-bar");

    
    setTimeout(function() {
        pb[0].classList.add("active");
    }, 1);

     pb.forEach((item) => {
        item.style.cursor= 'pointer';
        item.addEventListener('click', function(){
            console.log(hm_currentIndex);
            console.log(item);
             clearInterval(hm_currentIndex);
             clearInterval(sethomeIntervalId);
        //    sethomeIntervalId = setInterval(homenextSlide, setinterval);
             homeshowSlide(item.id);
            // homenextSlide();
        });
    });

 
    // dot.style.cursor= 'pointer';

    function homeshowSlide(index) {
        console.log('IN homeshowslide');
        console.log(index);
        hm_currentIndex = index;
        items.forEach((item) => {
            item.classList.remove("active");
        });
        items[hm_currentIndex].classList.add("active");

        pb.forEach((item) => {
            item.classList.remove("active");
        });
        pb[hm_currentIndex].classList.add("active");
        var removetransition = document.querySelectorAll(".home_progress");
        removetransition.forEach((trns) => {
            //  document.querySelectorAll(".home_progress")
            trns.style.transition = '';
        });
    }

    function homenextSlide() {
        hm_currentIndex = (hm_currentIndex + 1) % items.length;
        homeshowSlide(hm_currentIndex);
        toggleButton.className = "toggle-btn";
        toggleButton.innerHTML = `<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="35" height="35" rx="17.5" stroke="#C57654"/>
<mask id="mask0_1157_3057" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="10" y="10" width="16" height="16">
<rect x="10" y="10" width="16" height="16" fill="#D9D9D9"/>
</mask>
<g mask="url(#mask0_1157_3057)">
<path d="M19.5833 22.8333V14H22.6667V22.8333H19.5833ZM13 22.8333V14H16.0833V22.8333H13Z" fill="#992E00"/>
</g>
</svg>`;

    }

    function homeprevSlide() {
        hm_currentIndex = (hm_currentIndex - 1 + items.length) % items.length;
        homeshowSlide(hm_currentIndex);
    }

    const hm_progress = document.querySelectorAll(".home_progress");

    let id;

    const toggleButton = document.createElement("button");
    toggleButton.className = "toggle-btn";
    toggleButton.innerHTML = `<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="35" height="35" rx="17.5" stroke="#C57654"/>
<mask id="mask0_1157_3057" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="10" y="10" width="16" height="16">
<rect x="10" y="10" width="16" height="16" fill="#D9D9D9"/>
</mask>
<g mask="url(#mask0_1157_3057)">
<path d="M19.5833 22.8333V14H22.6667V22.8333H19.5833ZM13 22.8333V14H16.0833V22.8333H13Z" fill="#992E00"/>
</g>
</svg>`;

    if (toggleButton.innerHTML === `<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="35" height="35" rx="17.5" stroke="#C57654"/>
<mask id="mask0_1157_3057" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="10" y="10" width="16" height="16">
<rect x="10" y="10" width="16" height="16" fill="#D9D9D9"/>
</mask>
<g mask="url(#mask0_1157_3057)">
<path d="M19.5833 22.8333V14H22.6667V22.8333H19.5833ZM13 22.8333V14H16.0833V22.8333H13Z" fill="#992E00"/>
</g>
</svg>`) {

        if (id) {
            homenextSlide();
            pb[hm_currentIndex].childNodes[0].style.transition = "width 8s linear";
        }
        id = setInterval(homenextSlide, setinterval);
    }

    function toggleState() {
        console.log('image check');
        console.log(toggleButton.firstChild.tagName === 'svg');
        if (toggleButton.firstChild.tagName === 'svg') {
            console.log('play');
            toggleButton.className = "toggle-playbtn";
            toggleButton.innerHTML = '<img src="assets/icons/play_arrow.png">';

            clearInterval(id);
            clearInterval(sethomeIntervalId);

            pb[hm_currentIndex].childNodes[0].style.transition = "none";
        } else {
            console.log('play');
            toggleButton.classList.remove("toggle-playbtn");
            toggleButton.classList.add("toggle-btn");
            toggleButton.innerHTML = `<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="35" height="35" rx="17.5" stroke="#C57654"/>
<mask id="mask0_1157_3057" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="10" y="10" width="16" height="16">
<rect x="10" y="10" width="16" height="16" fill="#D9D9D9"/>
</mask>
<g mask="url(#mask0_1157_3057)">
<path d="M19.5833 22.8333V14H22.6667V22.8333H19.5833ZM13 22.8333V14H16.0833V22.8333H13Z" fill="#992E00"/>
</g>
</svg>`;
            homenextSlide();
            sethomeIntervalId = setInterval(homenextSlide, setinterval);
        }
    }

    toggleButton.addEventListener("click", toggleState);


    sethomeIntervalId = setInterval(homenextSlide, setinterval);

    home_controls.appendChild(toggleButton);


    function placements() {
        window.location.href = "placements.php";
    }

    function underconst() {
        window.location.href = "underconstruction.php";
    }

    function alumni() {
        window.location.href = "https://vignan.ac.in/alumni";
    }

    function research() {
        window.location.href = "uniresearch.php";
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

    function programs() {
        window.location.href = "program.php";
    }

    function facilities() {
        window.location.href = "facilities.php";
    }

    function notifications() {
        window.location.href = "notifications.php";
    }

    function holistic() {
        window.location.href = "https://vignan.ac.in/holistic.php";
    }

    function events() {
        window.location.href = "https://vignan.ac.in/vignantest/departments/deptevents.php";
    }

    function compdep() {
        window.location.href = "https://vignan.ac.in/csehome.php";
    }

    function civildep() {
        window.location.href = "https://vignan.ac.in/civilhome.php";
    }

    function ecedep() {
        window.location.href = "https://vignan.ac.in/ecehome.php";
    }

    function mechdep() {
        window.location.href = "https://vignan.ac.in/mechhome.php";
    }

    function gotovsat() {
        window.open(
            'https://vignan.ac.in/v-sat/?type=individual',
            '_blank' // <- This is what makes it open in a new window.
        );
        //window.location.href="https://vignan.ac.in/v-sat/";
    }

    function international() {
        window.open(
            'https://internationaladmissions.vignan.ac.in/?type=individual',
            '_blank' // <- This is what makes it open in a new window.
        );
        //window.location.href="https://internationaladmissions.vignan.ac.in/";
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
		
									function newsreadmore(){
    var newscnt = document.querySelectorAll(".content");
   // console.log(newscnt);
    newscnt.forEach((item) => {
        console.log(item.getAttribute("data-active-type"));
        var firstnews = item.getAttribute("data-active-type");
        var classlist = item.classList;
        if(classlist.contains('show-slide') || firstnews == 1){
           // console.log(item)

            var news = [];
            <?php  $json = json_encode($all); ?>
            var json = <?=$json?>;
           // console.log(json);
            console.log(moment().format('MMMM Do YYYY'));
            for (i = 0; i < json.length; i++) {
                if (item.id == json[i].id) {
                    console.log(json[i].title);
                    $('#overlaynews').modal({
                        show: 'true'
                    });

                    console.log($("#newsimg")[0].src);
                    console.log(moment().format('MMMM Do YYYY'));


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
    });
  }

		
		
    /*  window.onload = function() {
        var slides = document.getElementsByClassName('newstxt-carousel-item'),
            addActive = function(slide) {
                slide.classList.add('active-carousel')
            },
            removeActive = function(slide) {
                slide.classList.remove('active-carousel')
            },
            time = 16000,
            a = 0,
            timeLine = function() {
                if (a == 0) {
                    a = 1;

                    let prog = document.querySelector('.progressbar1');
                    let pwidth = 1;
                    var pid = setInterval(frame, time / 100);

                    function frame() {
                       
                        if (pwidth >= 100) {
                            clearInterval(pid);
                            a = 0;
                        } else {
                            pwidth++;
                            prog.value = pwidth;
                        }
                    }

                  
                }
            };

        addActive(slides[0]);

        addActive(slides[0]);
        timeLine(slides[0]);
        slides[0].style.zIndex = 3;

        setInterval(function() {
            for (var i = 0; i < slides.length; i++) {

                if (i + 1 == slides.length) {
                    addActive(slides[0]);
                    timeLine(slides[0]);
                    slides[0].style.zIndex = 3;
                    slides[i].classList.add('show-carousel');
                    setTimeout(function() {
                        slides[i].classList.remove('show-carousel');
                    }, 1000);
                    setTimeout(removeActive, 500, slides[i]);
                    break;
                }

                if (slides[i].classList.contains('active-carousel')) {
                    slides[i].classList.add('show-carousel');
                    timeLine(slides[i + 1]);
                    setTimeout(function() {
                        slides[i].classList.remove('show-carousel');
                    }, 1000);
                    slides[i].removeAttribute('style');
                    setTimeout(removeActive, 500, slides[i]);
                    addActive(slides[i + 1]);
                    break;
                }
            }
        }, time);
    }


    document.addEventListener("DOMContentLoaded", function() {
        const carouselImages = document.querySelector(".news-carousel-images");
        const images = document.querySelectorAll(".news-carousel-images img");

        let index = 0;

        function showImage() {
            images.forEach((img) => {
                img.classList.remove("activeimg");

            });
            images[index].classList.add("activeimg");
 
        }

 


        function slide() {
            index = (index + 1) % images.length;

              if (window.innerWidth <= 800) {
    // Empty large-screen div and show small-screen div content
    carouselImages.style.transform = `translateX(0%)`;
  } else {
    // Empty small-screen div and show large-screen div content
    carouselImages.style.transform = `translateX(-${index*33}%)`;
  }

            carouselImages.style.transition = `transform 1200ms`;


            showImage();
        }

        setInterval(slide, 16000); // Change image every 3 seconds


        var currentIndex = 0;
  var newsslides = $('.newstxt-carousel-item');
  var newsimgslides = $('.newsimgs');
  var totalSlides = newsslides.length;

  function showSlide(index) {
    newsslides.removeClass('active-carousel show-carousel');
    newsslides.eq(index).addClass('active-carousel show-carousel');

    // newsimgslides.removeClass('activeimg');
    // newsimgslides.eq(index).addClass('activeimg');
   slide();
  }



    $('.prev').click(function() {
        currentIndex = (currentIndex === 0) ? (totalSlides - 1) : (currentIndex - 1);
    showSlide(currentIndex);
  });

  // Next button functionality
  $('.next').click(function() {
    currentIndex = (currentIndex === totalSlides - 1) ? 0 : (currentIndex + 1);
    showSlide(currentIndex);
  });
    });
    
 
    */
    </script>
</body>

</html>