<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>

  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/iqac.css">
  <link rel="stylesheet" href="css/nad.css">
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/ncc.css">
  <link rel="stylesheet" href="css/Coexammp.css">
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
  .text_btnnew_innrdiv .text_btnnew_txt a{
    color:#992E00 ;
    text-decoration: none;
    cursor: pointer;
  }
  .text_btnnew_innrdiv .text_btnnew_txt a:hover{
    color:#992E00;
    text-decoration: none;
    cursor: pointer;
  }
</style>

<body>
  <?php
  include_once 'connect.php';
  include_once  'navbar.php';

  ?>

  <div class="container home-div1">

    <?php
    $sqlquery17 = "SELECT * FROM  sections  where id='nad_sec1'";

    $result = mysqli_query($conn, $sqlquery17);
    $research = mysqli_fetch_assoc($result);


    $sqlquery19 = "SELECT * FROM  stats where id='nad_sec1_card2'";

    $res_funding = mysqli_query($conn, $sqlquery19);
    $researchfunding = $res_funding->fetch_assoc();

    $sqlquery20 = "SELECT * FROM  stats where id='nad_sec1_card1'";
    $res_papers = mysqli_query($conn, $sqlquery20);
    $researchpapers = $res_papers->fetch_assoc();

    $sqlquery21 = "SELECT * FROM  stats where id='nad_sec1_card3'";
    $res_patents = mysqli_query($conn, $sqlquery21);
    $researchpatents = $res_patents->fetch_assoc();


    ?>

    <div class="home-research">
      <div class="home-researchdiv">

        <div class="home-research_innrdiv">
          <div class="iqac-title">
            <?php echo $research['title']; ?>

          </div>
          <div class="home-researchdiv1">

            <div class="iqac-txt rdmr" id="<?php echo $research['id']; ?>">
              <?php echo $research['descr']; ?>

            </div>
            <div class="text_btnnew" onclick="readmore('<?php echo $research['id']; ?>')">
              <div class="text_btnnew_innrdiv">
                
                <div class="text_btnnew_txt">
                  <?php echo $research['btn_nm1']; ?>
                </div>
                
                <div>
                  <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                </div>
              </div>
            </div>
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
            <svg class="home-reseach_img" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
              <mask id="mask0_3079_9" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
                <rect width="48" height="48" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_3079_9)">
                <path d="M23.9839 40.1115C26.5048 40.1115 28.6647 39.2223 30.4635 37.4441C32.2623 35.6658 33.1617 33.5232 33.1617 31.0162C33.1617 28.4953 32.2675 26.3354 30.4789 24.5366C28.6904 22.7378 26.5353 21.8384 24.0135 21.8384C21.4918 21.8384 19.3406 22.7326 17.5598 24.5212C15.779 26.3097 14.8886 28.4648 14.8886 30.9866C14.8886 33.5083 15.7778 35.6595 17.556 37.4403C19.3343 39.2211 21.4769 40.1115 23.9839 40.1115ZM17.9886 21.4384C18.6464 20.9811 19.3615 20.6193 20.1339 20.3531C20.9063 20.0869 21.7233 19.882 22.5848 19.7384L18.0656 10.9153H12.7463L17.9886 21.4384ZM30.0117 21.4384L35.3425 10.9153H29.9348L25.7809 19.1961L26.1334 19.8648C26.8267 20.001 27.5041 20.2061 28.1656 20.48C28.8271 20.7538 29.4425 21.0733 30.0117 21.4384ZM14.3425 38.1769C14.3109 37.939 14.3177 37.6488 14.363 37.3065C14.4083 36.9641 14.5079 36.6165 14.6617 36.2637C14.0463 35.2186 13.622 34.0864 13.3886 32.8672C13.1553 31.6479 13.1271 30.4024 13.304 29.1307C13.304 28.1307 13.4771 27.1819 13.8232 26.2845C14.1694 25.3871 14.6502 24.5794 15.2655 23.8615C14.6373 23.8794 14.0553 24.0534 13.5194 24.3835C12.9835 24.7135 12.6386 25.1321 12.4848 25.6393C10.9976 26.1464 9.92581 27.1019 9.26944 28.5057C8.61304 29.9096 8.52203 31.3512 8.9964 32.8307C8.9964 34.3435 9.51561 35.6127 10.554 36.6384C11.5925 37.664 12.8553 38.1769 14.3425 38.1769ZM33.6579 38.1769C35.6194 38.1845 37.3188 37.4913 38.7559 36.0972C40.1931 34.703 40.9117 33.0088 40.9117 31.0145C40.9117 29.0202 40.1931 27.3211 38.7559 25.9172C37.3188 24.5134 35.6194 23.8025 33.6579 23.7845C33.5041 23.7845 33.3502 23.7973 33.1963 23.823C33.0425 23.8486 32.8887 23.8615 32.7348 23.8615C33.5271 24.8512 34.1611 25.9511 34.6367 27.1611C35.1124 28.3711 35.3502 29.6525 35.3502 31.0053C35.3502 32.3581 35.1124 33.6377 34.6367 34.8442C34.1611 36.0506 33.5271 37.1358 32.7348 38.0999C32.8887 38.1255 33.0425 38.1448 33.1963 38.1576C33.3502 38.1704 33.5041 38.1769 33.6579 38.1769ZM23.9949 42.2999C22.6627 42.2999 21.4145 42.1024 20.2503 41.7075C19.0861 41.3125 18.0233 40.7087 17.0617 39.8961C16.6216 40.0362 16.1538 40.1386 15.6585 40.2031C15.1632 40.2676 14.6771 40.2999 14.2002 40.2999C11.6279 40.2999 9.4432 39.4021 7.646 37.6064C5.8488 35.8107 4.9502 33.6279 4.9502 31.0578C4.9502 28.4804 5.85148 26.2835 7.65405 24.467C9.45661 22.6505 11.6528 21.7486 14.2425 21.7615C14.5246 21.7615 14.7938 21.7807 15.0502 21.8191C15.3066 21.8576 15.563 21.9025 15.8194 21.9538L9.19249 8.72681H19.4309L24.0002 17.8653L28.5694 8.72681H38.8579L32.3194 21.8153C32.5502 21.764 32.7874 21.7255 33.031 21.6999C33.2746 21.6743 33.5245 21.6615 33.7809 21.6615C36.363 21.6563 38.5617 22.5645 40.3771 24.386C42.1925 26.2075 43.1002 28.4121 43.1002 30.9999C43.1002 33.617 42.1961 35.8213 40.388 37.6128C38.5799 39.4042 36.3673 40.2999 33.7502 40.2999C33.2476 40.2999 32.7643 40.2704 32.3002 40.2115C31.8361 40.1525 31.3951 40.0474 30.9771 39.8961C30.0158 40.683 28.9448 41.2804 27.764 41.6882C26.5832 42.096 25.3268 42.2999 23.9949 42.2999ZM20.8271 35.6769L22.0152 31.7324L18.8232 29.4422H22.7826L24.0002 25.323L25.2436 29.4422H29.1771L26.004 31.7192L27.2233 35.6769L24.0077 33.2307L20.8271 35.6769Z" fill="#C57654" />
              </g>
            </svg>
            <!--<img src="assets/icons/research.png" class="home-reseach_img" />-->
            <div class="home-reseach_bdr"></div>
          </div>
        </div>
        <div class="home-reseach_div3">
          <div class="home-reseach_circle">
            <div class="home-reseach_circle_txtdiv">
              <img src=<?php echo $researchfunding['logo']; ?> alt="logo">
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
        </div>

  <div class="divmargin-bottom"></div>
   <!---Credit bank start---->
  <?php
  $sql = "SELECT * FROM  sections  where id='nad_sec2'";

  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($result);
   ?>

<section class="container">
  <section class="content-section">
    <section class="main-content">
      <h1 class="main-title"><?php echo $data['title'] ?></h1>
      <h2 class="subtitle"><?php echo $data['descr'] ?></h2>
      <p class="description"><?php echo $data['subsec1_title'] ?></p>
      <p class="detailed-text">
        <?php echo $data['subsec1_desc'] ?>
      </p>
    </section>
    <div class="non-clk_carddiv">
                    <div class="non-clk_card_innrdiv">
                        <div class="non-clk_card_txtdiv">
                            <div class="non-clk_card_txt-innrdiv">
                                <span class="non-clk_num"><?php echo $data['subsec2_title'] ?></span>
                                <!-- <span class="non-clk_percent">%</span> -->
                            </div>
                            <div class="non-clk_title"><?php echo $data['subsec2_desc'] ?></div>
                        </div>
                        <div class="non-clk_imgbrdr">
                            <img src="assets/svgicons/circlestar.svg" />
                            <div class="non-clk_brdr"></div>
                        </div>
                    </div>
                </div>
  </section>
  
<div class="naac" style="padding-top:40px">
<div class="text_btnnew ">

<div class="text_btnnew_innrdiv">
  
    <div class="text_btnnew_txt">
      <a href=<?php echo $data['btn1_hlink'];?> target="_blank ">
    <?php echo $data['btn_nm1'] ?>
    </div>
    </a>
    <div>
        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
    </div>
</div>
</div>
</div>
 
  <section class="image-gallery">
    <img loading="lazy" src=<?php echo $data['img1'] ?> class="image medium-image" alt="Description for Image 1" />
    <img loading="lazy" src=<?php echo $data['img2'] ?> class="image large-image" alt="Description for Image 2" />
    <img loading="lazy" src=<?php echo $data['img3'] ?> class="image xlarge-image" alt="Description for Image 3" />
    <img loading="lazy" src=<?php echo $data['img4'] ?> class="image xxlarge-image" alt="Description for Image 4" />
  </section> 
</section>

       
        

        <!------Credit bank ends---->
        <div class="divmargin-bottom"></div>

        <!-- features of ABC start -->
        <?php
  $sql1 = "SELECT * FROM  cards  where id like 'nad_sec3%' ";

  $result1 = mysqli_query($conn, $sql1);
  
  
   ?>

  <section class="features-section">
  <h2 class="section-title">Features of ABC</h2>
  <div class="features-wrapper">
    <?php if (mysqli_num_rows($result1) > 0) {
         
         while ($row = mysqli_fetch_assoc($result1)) {
           if($row['cardtype']=='nad_sec3'){ ?>
            <article class="feature-item">
              
              <img loading="lazy" src=<?php echo $row['img'] ?> alt="Academic institution logo" />
              <p class="feature-description"><?php echo $row['descr'] ?></p>
            </article>
    <?php }}} ?>
   
  </div>
</section>

        <!-- features of ABC ends -->
        <div class="divmargin-bottom"></div>
        <!-- process section start -->
<section class="process-container">
  <h1 class="process-title">Process</h1>
  <section class="steps-section">
    <div class="steps-container">
      <?php
  $sql1 = "SELECT * FROM  cards  where id like 'nad_sec4%' ";
  $result1 = mysqli_query($conn, $sql1);
   if (mysqli_num_rows($result1) > 0) {
         
    while ($row = mysqli_fetch_assoc($result1)) {
      if($row['cardtype']=='nad_sec4'){ ?>
      <div class="step-column">
        <article class="step">
          <img loading="lazy" src=<?php echo $row['img'];?> alt="Login icon" class="step-icon" />
          <h2 class="step-title"><?php  echo $row['title'];?></h2>
          <p class="step-description"><?php echo $row['descr'];?></p>
        </article>
      </div>
      <?php }}}?>
    </div>
  </section>
  </section>
  <div class="naac">
<div class="text_btnnew ">

<div class="text_btnnew_innrdiv">
 
    <div class="text_btnnew_txt" onclick="abc()">
    Visit ABC website
    </div>
   
    <div>
        <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;">
    </div>
</div>
</div>
</div>

        <!-- process section ends -->
        <!-- <div class="divmargin-bottom"></div> -->
        <?php 
        ?>
        <!-- video Gallary section start -->
      <section class="associatedean">
      <div class="associatedean-title">
      Video Gallery
      </div>
      <div class="associatedean-container">
      <?php
    $sql5 = "SELECT * FROM  video  where id like 'nad_sec5%' ";
  $result5 = mysqli_query($conn, $sql5);
   if (mysqli_num_rows($result5) > 0) {
         
    while ($row = mysqli_fetch_assoc($result5)) {
      if($row['vtype']=='nad_sec5'){ ?> 
        <div class="assdean-box">
        
          <!-- <img class="assdean-img" src="assets/images/srinivasadesikan.webp" alt="" height="392"> -->
           <video height="250px" width="100%" controls>
            <source src=<?php echo $row['link'];?> type="video/mp4">
           </video>
          <div class="assdean-txt">
            <div class="name-txt"><?php echo $row['title'] ?></div>
            <!-- <div class="spes">Associate Dean, IQAC</div> -->
          </div>
          </div>
          <?php }}}?>
       
        
        

      </div>
    </section>


         <!-- video Gallary section ends -->

         <!-- circulars section start -->
          <?php
         $sqlquery5 ="SELECT * FROM  circulars where ctype='nad_sec6'";
          $result=mysqli_query($conn, $sqlquery5); 
     ?>

     
        <div class="home-events">
            <div class="events">circulars</div>
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
                                        fill="#000" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="div-notf_img">
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
                                        fill="#ffff" />
                                </g>
                            </svg>

                        </a>
                    </div>

                </div>
                <?php } }?>

               
            </div>
        </div>
           <!-- circulars section ends -->
           <?php
  $sql7 = "SELECT * FROM  sections  where id='nad_sec7'";

  $result7 = mysqli_query($conn, $sql7);
  $data7 = mysqli_fetch_assoc($result7);
  // print_r($data7);
   ?>
        <!-- contactus section start -->
        <div class="divmargin-bottom"></div>
  
        <div class="CoexammpContactUs">
                <div class="CoexammpContactUsw654">
                    <div class="CoexammpContactUsw385">
                        <div class="CoexammpContactUsw385h61"><?php echo $data7['title'] ?></div>
                        <div class="CoexammpContactUsw385h497">
                            <img src=<?php echo $data7['img1'] ?>class="CoexammpContactUsw385h497h392"/>
                            <div class="CoexammpContactUsw385h497h98">
                                <div class="CoexammpContactUsw385h497h98h25"><?php echo $data7['subsec1_title'] ?></div>
                                <div class="CoexammpContactUsw385h497h98h28"><?php echo $data7['subsec1_desc'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="CoexammpContactUsw269">
                        <div class="CoexammpContactUsw269h275">
                            <div class="CoexammpContactUsw269h275w194">
                                <div class="CoexammpContactUsw269h275w194w86"><?php echo  $data7['subsec2_title'] ?></div>
                                <div class="CoexammpContactUsw269h275w194w194"><?php echo $data7['subsec2_desc'] ?></div>
                            </div>
                            <div class="CoexammpContactUsw269w269h85">
                                <div class="CoexammpContactUsw269w269h85w78"><?php echo $data7['subsec3_title'] ?></div>
                                <div class="CoexammpContactUsw269w269h85w269"><?php echo $data7['subsec3_desc'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- contactus section start -->








 

    


    <div class="divmargin-bottom"></div>

    <!-- footer starts here -->
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
    <!-- footer ends here -->

  </div>






  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/common.js"></script>

  <script>
    function abc(){
      window.open("https://www.abc.gov.in/");
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
  </script>

</body>

</html>