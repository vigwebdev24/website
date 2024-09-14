<?php 
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vignan University</title>
    <link rel="stylesheet" href="css/about.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/mobile.css">

    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/exam_home.css">
	<link rel="stylesheet" href="css/home.css">

	<link rel="stylesheet" href="css/mblfooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>


<!-- Include Locomotive Scroll JS -->

</head>
<body >
 


<?php 
    include_once 'connect.php';
    include_once  'navbar.php';
 $sql = "Select * FROM sections";

 // Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='exam_sec1'){
?>

<div class="container home-div1">
  <div class="BillboardTab">
      <div class="BillBoardTop">
        <div class="BillboardTabplane1">
          <div class="ove">
            <img class="oveimg"
              src="<?php echo $row['img1']?>"
              
            />
          </div>
        </div>
        <div class="BillboardTabplane2">
          <div class="">
            <div class="BillboardTabplane2TitleText">
              <div><?php echo $row['title']?></div>
            
            </div>
          </div>
          <div class="BillboardTabplane2DiscriptionTextCont">
            <div class="BillboardTabplane2DiscriptionText">
            <?php echo $row['descr']?>
            </div>
          </div>
          <div class="BillboardTabplane2DiscriptionTextCont">
            <div class="BillboardTabplane2Hyperlinks">
              <button class="cta_button_primary Ss-btn_txt"  onclick="window.open('exam.php',  '_blank')" >
                
              Examinations
                  <img
                    src="assets/svgicons/arrow_right_white.svg" alt=""   />
               
              </button>
              <button class="cta_button_secondary Secondary-btn_txt" onclick="window.open('https://vignan.ac.in/tutionfee.php',  '_blank')">
               
              <?php echo $row['btn_nm2']?>

                  <img
                    src="assets/svgicons/arrow_right_brown.svg" alt="" />
               
              </button>
            </div>
          </div>
        </div>
      </div>
      
    </div>


    <div class="BillBoardBottom">
        <div class="BillBoardHeader"><?php echo $row['title']?>
</div>
        <div class="BillBoardImg" style="overflow: hidden">
          <img
            src="<?php echo $row['img1']?>"
            alt=""
            style="width: 100%; height: 100%; object-fit: cover"
            srcset=""
          />
        </div>
        <div class="BillBoardDescription">
        <?php echo $row['descr']?>
        </div>
        <div class="BillBoardNavButtons">
          <button class="cta_button_primary Ss-btn_txt" id="aplybt" onclick="window.open('exam.php',  '_blank')">
            <div><?php echo $row['btn_nm1']?></div>
            <img
              class="BillBoardButtonArrows"
              src="assets/svgicons/arrow_right_white.svg"
              alt=""
            />
          </button>
          <button class="cta_button_secondary Secondary-btn_txt">
            <div> <?php echo $row['btn_nm2']?></div>
            <img
              class="BillBoardButtonArrows"
              src="assets/svgicons/arrow_right_brown.svg"
              alt=""
            />
          </button>
        </div>
      </div>


<?php
    }}}
    ?>

  <?php 

$sqlquery5 ="SELECT * FROM  notifications  where notify_type='exam' order by  date desc limit 4 ";

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


    <?php 
 $sql = "Select * FROM sections";

 // Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='exam_sec3_1'){
?>

    <div class="contain">
  <div class="rown">
    <div class="column">
      <div class="content">
        <h2 class="title"><?php echo $row['title']?></h2>
        <p class="description">
        <?php echo $row['descr']?>
        </p>
        <div class="bta1">
        <div class="cta_button_primary Ss-btn_txt width100" data-toggle="modal" data-target="#overlay" >
          <div class="txt"><?php echo $row['btn_nm1']?></div>
          <img  class="imgaro" src="assets/svgicons/arrow_right_white.svg" alt=""  />
        </div>
      </div>
      </div>
    </div>
    <?php
    }
    else if($row['id']=='exam_sec3_2'){
      ?>
    <div class="column-2">
      <div class="content">
        <h2 class="title"><?php echo $row['title']?></h2>
        <p class="description">
        <?php echo $row['descr']?>
        </p>
        <div class="bta1">
        <div class="cta_button_primary Ss-btn_txt width100" data-toggle="modal" data-target="#overlay1">
          <div class="txt" ><?php echo $row['btn_nm1']?></div>
          <img class="imgaro2" src="assets/svgicons/arrow_right_white.svg" alt="" />
        </div>
      </div>
    </div>
    </div>
    <?php }
    else if($row['id']=='exam_sec3_3'){
      ?>
    <div class="column-3">
      <div class="content content-3">
        <h2 class="title"><?php echo $row['title']?></h2>
        <p class="description">
        <?php echo $row['descr']?>
        </p>
        <div class="bta1">
        <div class="cta_button_primary Ss-btn_txt width100" data-toggle="modal" data-target="#overlay2">
          <div ><?php echo $row['btn_nm1']?></div>
          <img class="imgaro3" src="assets/svgicons/arrow_right_white.svg" alt="" />
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<?php 
    }
    else
    if($row['id']=='exam_sec5'){
      ?>

<section class="certificates-container">
  <div class="certificates-wrapper">
    <div class="certificates-info">
      <div class="certificates-details">
        <h1 class="certificates-title"><?php echo $row['title']?></h1>
        <p class="certificates-description">
        <?php echo $row['descr']?>          <br />
        </p>
        <h2 class="contact-title"><?php echo $row['subsec1_title']?> </h2>
        <div class="contact-phone">
          <img src="assets/icons/call.svg" alt="" class="contact-icon" />
          <p class="contact-number"><?php echo $row['subsec1_desc']?> </p>
        </div>
        <div class="contact-email">
          <img src="assets/icons/call.svg" alt="" class="contact-icon" />
          <p class="contact-email-address"><?php echo $row['subsec2_desc']?></p>
        </div>
      </div>
    </div>
    
    <div id="mobiftr">
<?php
    
    include_once  'certificate.php';
    ?>
</div>
<div class="certificates-options-actions">
          <button class="button_secondary Secondary-btn_txt" id="dis"><?php echo $row['btn_nm1']?></button>
          <button class="button_primary Ss-btn_txt" id="dis1"><?php echo $row['btn_nm2']?></button>
        </div>
  </div>
</section>


    <?php
    }}}?>
    <div id="mblftr">
<?php
    
    include_once  'mblfooter.php';
    ?>
</div>
    

    
<div id="ftr" style="padding: 76px;">
<?php
    
    include_once  'footer.php';
    ?>
</div>
       
<script>
		  function naac(){
		 window.location.href="https://vignan.ac.in/naac.php"
		}
		
		function dsir(){
		 window.location.href="https://vignan.ac.in/iqacranks.php"
		}
		
		function accreditations(){
		 window.location.href="https://vignan.ac.in/iqaccer.php";
		}
		  function parentteach(){
	window.location.href="https://vignan.ac.in/pdf/Parents%20Teachers%20Association%20Executive%20Committee%2018.07.2023.pdf";
	}
	function advisory(){
	window.location.href="https://vignan.ac.in/pdf/Admissions%20Advisory%20Committee%2022.02.2022.pdf";
	}
	function eval(){
	window.location.href="https://vignan.ac.in/pdf/Evaluation%20Standards%20Committee%2025.04.2022.pdf";
	}
	function institucomm(){
	window.location.href="https://vignan.ac.in/insticomm.php";
	}
    function annualreports(){
	window.location.href="https://vignan.ac.in/areports.php";
	}
		   function offcampus(){
	window.location.href="https://vignan.ac.in/hyd/";
	}
function toggleDivContent(){
         var smallScreenDiv = document.querySelector("#mblftr");
  var largeScreenDiv = document.querySelector("#ftr");
         if (window.innerWidth <= 700) {
    // Empty large-screen div and show small-screen div content
    largeScreenDiv.style.display= 'none';
    smallScreenDiv.style.display= 'block';
  } else {
    // Empty small-screen div and show large-screen div content
    smallScreenDiv.style.display= 'none';
    largeScreenDiv.style.display= 'block';
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

<?php 
 $sql = "Select * FROM sections";

 // Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='exam_sec4_register'){
?>

<!-- registration_animation_page -->


<div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="overlay-dialog" role="document">
                    <div class="filter-modal_content">
                        <div class="pad" >
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="assets/icons/cross_big.png">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                            
                        </div>


    
                        <main class="container2">
  
  <div class="results-content">
    <h1 class="regi-title"><?php echo $row['title']?></h1>
    
    <p class="description">
    <?php echo $row['descr']?>
    </p>
    
   

 <!--   <div class="text_btnnew viewall-right" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm1']?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>-->
    
        <div class="exam-div-bt ">
        <button class="cta_button_secondary Secondary-btn_txt" onclick="window.open('exam.php','_blank')">
               
       Apply for exam

                  <img
                    src="./assets/icons/arrow_forward2.svg"
                    style="width: 15px; height: 15px"
                    alt=""
                  />
                </a>
              </button>
      </div>
  </div>
</main>

                    </div>

                </div>
            </div>
            <?php 
    }
    else
    if($row['id']=='exam_sec4_rule'){
      ?>
      


            <!-- rules and regulations animation page  -->



            <div class="modal fade" id="overlay2" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="overlay-dialog" role="document">
                    <div class="filter-modal_content">
                        <div class="pad" >
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="assets/icons/cross_big.png">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                        </div>
                        <div class="disciplinary-actions">
  <div class="disciplinary-actions__content">
    <h2 class="disciplinary-actions__title"><?php echo $row['title']?></h2>
    <p class="disciplinary-actions__description">
    <?php echo $row['descr']?>    </p>
    
<div class="exam-div-link">
    <div class="text_btnnew viewall-right" onclick="window.open('https://vignan.ac.in/pdf/Disciplinary_Action_-_Malpractices.pdf',  '_blank')" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt" id="side_link">
                <?php echo $row['btn_nm1']?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" id="side_img" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
        </div>
    <h2 class="disciplinary-actions__title"><?php echo $row['subsec1_title']?></h2>
    <p class="disciplinary-actions__description">
    <?php echo $row['subsec1_desc']?>    </p>
    <div class="exam-div-link">
    <div class="text_btnnew viewall-right" onclick="window.open('https://vignan.ac.in/pdf/Details%20of%20Grading%20System.pdf',  '_blank')" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt" id="side_link">
                <?php echo $row['btn_nm1']?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" id="side_img" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
        </div>
  </div>
</div>

                    </div>

                </div>
            </div>

            <!-- result_animation_page -->
            <?php 
    }
    else
    if($row['id']=='exam_sec4_result'){
      ?>

            <div class="modal fade" id="overlay1" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="overlay-dialog" role="document">
                    <div class="filter-modal_content">
                        <div class="pad" >
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="assets/icons/cross_big.png">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                        </div>
                       
                        
                        <main class="results-container">
  
  <div class="results-content">
    <h1 class="results-title"><?php echo $row['title']?></h1>
    
    <p class="results-description">
    <?php echo $row['descr']?>    </p>
    
    <section class="results-section">
      <h2><?php echo $row['subsec1_title']?> </h2>
      <p class="results-description">
      <?php echo $row['subsec1_desc']?>       </p>
     
      <div class="exam-div-link">
    <div class="text_btnnew viewall-right" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt" id="side_link">
                <?php echo $row['btn_nm1']?> 
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" id="side_img1" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
        </div>
    </section>
    
    <section class="results-section">
      <h2><?php echo $row['subsec2_title']?> </h2>
      <p class="results-description">
      <?php echo $row['subsec2_desc']?>       </p>
      <div class="exam-div-link">
    <div class="text_btnnew viewall-right" onclick="window.open('https://vignan.ac.in/midmarks.php',  '_blank')" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt" id="side_link">
                <?php echo $row['btn_nm1']?> 
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" id="side_img1" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
        </div>
    </section>
    
    <section class="results-section">
      <h2><?php echo $row['subsec3_title']?> </h2>
      <p class="results-description">
      <?php echo $row['subsec3_desc']?>       </p>
      <div class="exam-div-link">
    <div class="text_btnnew viewall-right"onclick="window.open('https://vignan.ac.in/fmidmarks.php',  '_blank')" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt" id="side_link">
                <?php echo $row['btn_nm1']?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" id="side_img1" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
        </div>
    </section>
  </div>
</main>

                    </div>

                </div>
            </div>

          <?php 
        }}}?>
           


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

</body>
</html>