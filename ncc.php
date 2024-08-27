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
    <link rel="stylesheet" href="css/ncc.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/mobile.css">

    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/exam_home.css">

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
?>
<?php 
if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='ncc_sec1'){
?>

<div class="container home-div1">
  <div class="BillboardTab-ncc">
      <div class="BillBoardTop-ncc">
        <div class="BillboardTabplane1-ncc">
          <div class="cove-ncc">
            <img class="oveimg-ncc"
              src="<?php echo $row['img1']?>";
              
            />
          </div>
        </div>
        <div class="BillboardTabplane2-ncc">
        
            <div class="BillboardTabplane2TitleText-ncc">
              <div><?php echo $row['title']?></div>
            
            </div>
          
          <div class="BillboardTabplane2DiscriptionTextCont-ncc">
            <div class="BillboardTabplane2DiscriptionText-ncc">
            <?php echo $row['descr']?>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
    <?php }
  }}?>





    <div class="BillBoardBottom-ncc">
        <div class="BillBoardHeader-ncc">National Cadet Corps
</div>
        <div class="BillBoardImg-ncc" style="overflow: hidden">
          <img
            src="assets/images/ncc_img1.webp"
            alt=""
            style="width: 100%; height: 100%; object-fit: cover"
            srcset=""
          />
        </div>
        <div class="BillBoardDescription-ncc">
        Experience leadership, discipline, and camaraderie through our National Cadet Corps (NCC) program
        </div>
        
      </div>

      <?php 
 $sql = "Select * FROM cards";

 // Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['Id']=='ncc_sec2_card1'){
?>
      <div class="aboutus-div-25">
          <div class="aboutus-div-26">
            <div class="column-3-ncc">
              <div class="design1">
                <div class="design1p"><?php echo $row['title']?></div>
                <div class="design2p">
                <?php echo $row['descr']?>
                  <br />
                </div>
                <div class="design3p">
                  <div class="design4p"></div>
                  <img
                    loading="lazy"
                    src="assets/icons/bulb.svg"
                    class="img-6"
                  />
                  <div class="design5p"></div>
                </div>
              </div>
            </div>
            <?php }
            else if($row['Id']=='ncc_sec2_card2'){
              ?>

            <div class="column-4-ncc">
              <div class="design1">
                <div class="design1p"><?php echo $row['title']?></div>
                <div class="design2p">
                <?php echo $row['descr']?>
                </div>
                <div class="design3p">
                  <div class="design4p"></div>
                  <img
                    loading="lazy"
                    src="assets/icons/timer.svg"
                    class="img-7"
                  />
                  <div class="design5p"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php }}}?>


<?php
$sql = "Select * FROM sections";

// Execute the query
$result = $conn->query($sql);
?>
<?php 
if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='ncc_sec3'){
?>
        <section class="activities-section">
  <article class="activities-column">
    <div class="activities-content">
      <h1 class="activities-title"><?php echo $row['title']?></h1>
      <div class="activities-image-container">
        <img loading="lazy" src="<?php echo $row['img1']?>" alt="Military training activity in progress" class="activities-image" />
      </div>
      <p class="activities-description">
      <?php echo $row['descr']?>      </p>

      <!-- <div class="call-to-action-image-container-new">
              <img loading="lazy" src="assets/images/ncc_img4.webp" alt="Profile of a cadet" class="profile-image" />
            </div> -->
    </div>
  </article>
  
  <aside class="call-to-action-column">
    <div class="call-to-action-wrapper">
      <div class="call-to-action-image-container">
        <img loading="lazy" src="<?php echo $row['img2']?>" alt="Motivational training image" class="call-to-action-image" />
      </div>
      <div class="call-to-action-content">
        <div class="call-to-action-inner-content">
          <div class="profile-image-column">
            <div class="profile-image-container">
              <img loading="lazy" src="<?php echo $row['img3']?>" alt="Profile of a cadet" class="profile-image" />
            </div>
          </div>
          <div class="call-to-action-right-column">
            <div class="nccpos">

          <button class="cta_button_primary Ss-btn_txt "  onclick=" window.open('<?php echo $row['btn1_hlink']?>',  '_blank')" >
                
          <?php echo $row['btn_nm1']?>                    
          <img
                      src="assets/svgicons/arrow_right_white.svg"
                      style="width: 15px; height: 15px"
                      alt=""
                    />
                  </a>
                </button>
                </div>
            
          </div>
          <!-- mobilebutton -->
          
        </div>
      </div>
      
    </div>
  </aside>
  <div class="nccpos1">
          <button class="cta_button_primary Ss-btn_txt fwidth"  onclick="window.open('<?php echo $row['btn1_hlink']?>',  '_blank')" >
                
          <?php echo $row['btn_nm1']?>  
                  <img
                    src="assets/svgicons/arrow_right_white.svg"
                    style="width: 15px; height: 15px"
                    alt=""
                  />
                
              </button>
              </div>
</section>

    <?php }}}?>

    <?php
$sql = "Select * FROM cards";

// Execute the query
$result = $conn->query($sql);
?>
<?php 
if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['Id']=='ncc_sec4_card1'){
?>

<section class="highlights-container">
    <h2 class="highlights-title"><?php echo $row['title']?>  </h2>
    <div class="highlights-grid">
        <article class="highlight-item">
            <div class="highlight-content">
                <img loading="lazy" src="<?php echo $row['img']?>  " class="highlight-image" alt="Vignan Student selected for Republic Day Parade" />
                <time datetime="2024-01-20" class="highlight-date"><?php
    $dateString = $row['date'];
    
    $date = new DateTime($dateString);
        $formattedDate = $date->format('jS M Y');
    
    echo $formattedDate;
    ?></time>
                <h3 class="highlight-description"><?php echo $row['descr']?></h3>
            </div>
        </article>

        <?php }
            else if($row['Id']=='ncc_sec4_card2'){
              ?>

        <article class="highlight-item">
            <div class="highlight-content">
                <img loading="lazy" src="<?php echo $row['img']?>" class="highlight-image" alt="VFSTR NCC Cadet SreeTeja Bharadwaj got selected for Indian armed forces" />
                <time datetime="2024-01-15" class="highlight-date"><?php
    $dateString = $row['date'];
    
    $date = new DateTime($dateString);
        $formattedDate = $date->format('jS M Y');
    
    echo $formattedDate;
    ?></time>
                <h3 class="highlight-description"><?php echo $row['descr']?></h3>
            </div>
        </article>
        <?php }
            else if($row['Id']=='ncc_sec4_card3'){
              ?>

        <article class="highlight-item">
            <div class="highlight-content">
                <img loading="lazy" src="<?php echo $row['img']?>" class="highlight-image" alt="Cadet Bommu Mahender Reddy got Cadet Welfare Society Scholarship" />
                <time datetime="2024-01-13" class="highlight-date">
                <?php
    $dateString = $row['date'];
    
    $date = new DateTime($dateString);
        $formattedDate = $date->format('jS M Y');
    
    echo $formattedDate;
    ?>
                </time>
                <h3 class="highlight-description"><?php echo $row['descr']?></h3>
            </div>
            <div class="nccpos2">

<button class="cta_button_primary Ss-btn_txt fwidth  "  onclick=" window.open('<?php echo $row['btn_hlink']?>',  '_blank')" >
      
<?php echo $row['btn_nm']?>  
<img
            src="assets/svgicons/arrow_right_white.svg"
            style="width: 15px; height: 15px"
            alt=""
          />
        </a>
      </button>
      </div>


        </article>
    </div>
    
</section>
<?php
            }}}?>


<?php
$sql = "Select * FROM contactus";

// Execute the query
$result = $conn->query($sql);
?>
<?php 
if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['Id']=='ncc_sec5_1'){
?>
<section class="contact-container">
    <div class="contact-content">
        <div class="contact-info">
            <section class="contact-section">
                <h1 class="section-title"><?php echo $row['title']?></h1>
                <div class="officer-cards">
                    <div class="officer-list">
                        <div class="officer-item">
                            <div class="officer-card">
                                <img loading="lazy" src="<?php echo $row['img']?>" alt="Lt Siva Koteswararao Chinnam" class="officer-img" />
                                <div class="officer-details">
                                    <p class="officer-name"><?php echo $row['name']?></p>
                                    <p class="officer-role"><?php echo $row['designation']?></p>
                                </div>
                            </div>
                        </div>
                        <?php }
             else if($row['Id']=='ncc_sec5_2'){
              ?>
                        <div class="officer-item">
                            <div class="officer-card">
                                <img loading="lazy" src="<?php echo $row['img']?>" alt="Lt Keerthi Priya Yadala" class="officer-img" />
                                <div class="officer-details">
                                    <p class="officer-name"><?php echo $row['name']?></p>
                                    <p class="officer-role"><?php echo $row['designation']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
            }}}?>

<?php
$sql = "Select * FROM contactus";

// Execute the query
$result = $conn->query($sql);
?>
<?php 
if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['Id']=='ncc_sec5_1'){
?>
        <aside class="contact-info-column">
            <div class="contact-info-wrapper">
                <h2 class="contact-info-title"><?php echo $row['subsec']?></h2>
                <p class="contact-info-item">Boy’s Battalion <br /> 
                    <span class="bold-text"><?php echo $row['address']?></span>
                </p>
                <p class="contact-info-email"><?php echo $row['email']?></p>
                <?php }
            else if($row['Id']=='ncc_sec5_2'){
              ?>
                <p class="contact-info-item">Girl’s Battalion <br /> 
                    <span class="bold-text"><?php echo $row['address']?></span>
                </p>
                <p class="contact-info-email"><?php echo $row['email']?></p>
            </div>
        </aside>
    </div>
</section>
<?php }}}?>









      
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

