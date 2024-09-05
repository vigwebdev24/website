<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vignan University</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/modals.css">
	<link rel="stylesheet" href="css/mblfooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>

        <link rel="stylesheet" href="path/to/locomotive-scroll.min.css">

<!-- Include Locomotive Scroll JS -->
<script src="path/to/locomotive-scroll.min.js"></script>

</head>
<body data-scroll-container>
<?php include_once 'connect.php'; include_once  'navbar.php'; 
$sql = "Select * FROM sections";

// Execute the query
$result = $conn->query($sql);
?>
<?php 
if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='aboutus_sec1'){
?>
    <div class="container home-div1">
       
        <div class="aboutus-div-19">
          <div class="aboutus-div-20">
            <div class="column">
              <div class="aboutus-div-21">
                <div class="aboutus-div-22" style="width: 132%;">
                He redefined education and steered it in a new direction.
                </div>
                <div class="aboutus-div-24n">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img1'] ?>"
                    class="img-5"
                  />
                </div>
                <div class="aboutus-div-23">
                Dr. Lavu Rathaiah has been at the forefront of this movement, consistently rising to the occasion to lead education through Vignan to new heights. Since its inception in 1997, Vignan has been committed to applying research, scholarship, and service to address contemporary challenges.
                </div>
              </div>
            </div>
            <div class="column-2">
              <div class="aboutus-div-24">
                <img
                  loading="lazy"
                  srcset="<?php echo $row['img1'] ?>"
                  class="img-5"
                />
              </div>
            </div>
          </div>
        </div>
        <?php 
    }
  }
}
 
    ?>

<?php 
 $sql = "Select * FROM cards";

 // Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['Id']=='aboutus_sec2_card1'){
?>

        <div class="aboutus-div-25">
          <div class="aboutus-div-26">
            <div class="column-3">
              <div class="design1">
                <div class="design1p"><?php echo $row['title'] ?></div>
                <div class="design2p">
                <?php echo $row['descr'] ?>
                  <br />
                </div>
                <div class="design3p">
                  <div class="design4p"></div>
                  <img
                    loading="lazy"
                    src="assets/icons/target.png"
                    class="img-6"
                  />
                  <div class="design5p"></div>
                </div>
              </div>
            </div>
            <?php }
            else if($row['Id']=='aboutus_sec2_card2'){
              ?>
            <div class="column-4">
              <div class="design1">
                <div class="design1p"><?php echo $row['title'] ?></div>
                <div class="design2p">
                <?php echo $row['descr'] ?>
                </div>
                <div class="design3p">
                  <div class="design4p"></div>
                  <img
                    loading="lazy"
                    src="assets/icons/join.png"
                    class="img-7"
                  />
                  <div class="design5p"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
   <?php }
  }
}
?>

<?php 
 $sql = "Select * FROM sections";

 // Execute the query
$result = $conn->query($sql);
?>

<?php 
if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='aboutus_sec3'){
?>
        <div class="aboutus-div-39"><?php echo $row['title'] ?></div>
        <div class="aboutus-div-40">
        <?php echo $row['descr'] ?>
        </div>
        <div class="aboutus-div-41">
          <div class="aboutus-div-42">
            <div class="column-5">
              <div class="aboutus-div-43">
                <div class="aboutus-div-44">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img1'] ?>"
                    class="img-8"
                  />
                </div>
                <div class="aboutus-div-45">
                  <div class="aboutus-div-46">Dr. Lavu Rathaiah</div>
                  <div class="aboutus-div-47">Chancellor</div>
                </div>
              </div>
            </div>
            <div class="column-6">
              <div class="aboutus-div-48">
                <div class="aboutus-div-49">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img2'] ?>"
                    class="img-9"
                  />
               
                </div>
                <div class="aboutus-div-50">
                  <div class="aboutus-div-51">Dr. P. Nagabhushan</div>
                  <div class="aboutus-div-52">Vice - Chancellor</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
    }}}
    ?>
        <div class="div53q">
        <div class="aboutus-div-53">
          <div class="aboutus-div-54">
            <div class="column-7">
              <div class="aboutus-div-55">
                <img
                  loading="lazy"
                  srcset="assets/images/aboutus_img11.webp"
                  class="img-11"
                />
                <div class="aboutus-div-56">D Vijaya Ramu</div>
              </div>
            </div>
            <div class="column-8">
              <div class="aboutus-div-57">
                <img
                  loading="lazy"
                  srcset="assets/images/aboutus_img12.webp"
                  class="img-12"
                />
                <div class="aboutus-div-58">Y. Ravi sekhar</div>
              </div>
            </div>
            <div class="column-9">
              <div class="aboutus-div-59">
                <img
                  loading="lazy"
                  srcset="assets/images/aboutus_img13.webp"
                  class="img-13"
                />
                <div class="aboutus-div-60">P. M. V. Rao</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/aboutus_img14.webp"
                  class="img-14"
                />
                <div class="aboutus-div-62">G. Srinivasa Rao</div>
              </div>
            </div>
          </div>
        </div>
        <div class="aboutus-div-63 " onclick="window.open('administration.php',  '_blank')">
        <div  class="cta_button_primary Ss-btn_txt width100 ">
          <div class="aboutus-div-64">View all Administration</div>
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2961_1144)">
                                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED"></path>
                                    </g>
                                </svg>
          <!-- <img
            loading="lazy"
            src="assets/icons/arrow_forward_white.png"
            class="img-15"
          /> -->
        </div>
        </div>
      </div>


      <?php 
 $sql = "Select * FROM sections";

 // Execute the query
$result = $conn->query($sql);
?>

<?php 
if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='aboutus_sec5'){
?>

        <div class="aboutus-div-65">
          <div class="aboutus-div-66">
            <div class="column-11">
              <div class="aboutus-div-67">
                <div class="aboutus-div-68">Genesis</div>
                <div class="aboutus-div-69">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img1'] ?>"
                    class="img-16"
                  />
                </div>
                <br>

                <div class="aboutus-div-73n">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img5'] ?>"
                    class="img-18n"
                  />
                </div>
                <br>
                <div class="aboutus-div-71n">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img6'] ?>"
                    class="img-17n"
                  />
                </div>
                <div class="aboutus-div-70">
                Vignan’s saga that sets through time is to step back to the year 1997, a pivotal moment when Vignan Engineering College emerged as the inaugural campus in Vadlamudi. This esteemed institution was meticulously brought to life under the visionary guidance of the Vignan Educational Trust, with the driving force behind it being none other than Dr. Lavu Rathaiah.
                  <br />
                  <br />
                  Vignan Engineering College transitioned to a Deemed University in 2008 after a decade of establishment. It is affiliated with JNTU Hyderabad, Kakinada, and Anantapur, approved by AICTE and NBA, and holds ISO 9001:2000 certification. VFSTR achieved NAAC 'A' grade in 2015, UGC (12B) recognition in 2020, NBA accreditation for five programmes, ISO 9001:2015 certification, and maintains a consistent NIRF ranking around 100. It's also recognized as a research centre by DSIR.
                </div>
              </div>
            </div>
            <div class="column-12">
              <div class="aboutus-div-71">
                <img
                  loading="lazy"
                  srcset="<?php echo $row['img2'] ?>"
                  class="img-17"
                />
              </div>
            </div>
            <div class="column-13">
              <div class="aboutus-div-72">
                <div class="aboutus-div-73">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img3'] ?>"
                    class="img-18"
                  />
                </div>
                <div class="cardn">
            <div class="cardn1"><?php echo $row['subsec1_title'] ?></div>
            <div class="cardn2"><?php echo $row['subsec2_title'] ?></div>
            <div class="cardn3">
              <img
                loading="lazy"
                src="assets/icons/round-star.png"
                class="img-26"
              />
              <div class="cardn4"></div>
            </div>
          </div>
          <div class="aboutus-div-79 ">
      
                <div class="cta_button_primary Ss-btn_txt width100" onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')">
                  <div class="aboutus-div-80"><?php echo $row['btn_nm1'] ?></div>
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2961_1144)">
                                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED"></path>
                                    </g>
                                </svg>
                  <!-- <img
                    loading="lazy"
                    src="assets/icons/arrow_forward.svg"
                    class="img-20"
                  /> -->
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
    <?php
    }
    
    if($row['id']=='aboutus_sec6'){
      ?>
        <div class="81np">
        <!-- Institutional Committe -->

   

<section class="institutional-committees">
  <h2 class="institutional-committees__title"><?php echo $row['title'] ?></h2>
  <div class="institutional-committees__container">
    <article class="committee-card">
      <h3 class="committee-card__title">
      <?php echo $row['subsec1_title'] ?>
      </h3>
      <div class="text_btnnew viewall-right" onclick="<?php echo $row['btn1_hlink'] ?>" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm1'] ?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
      
    </article>
    <article class="committee-card">
      <h3 class="committee-card__title"><?php echo $row['subsec2_title'] ?></h3>
      <div class="text_btnnew viewall-right" onclick="<?php echo $row['btn2_hlink'] ?>" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm1'] ?>
                </div>
                <div>
                  
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
    </article>
    <article class="committee-card">
      <h3 class="committee-card__title"><?php echo $row['subsec3_title'] ?></h3>
       <div class="text_btnnew viewall-right" onclick="<?php echo $row['btn3_hlink'] ?>">
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm1'] ?>
                </div>
                <div>
                  
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
    </article>
  </div>
  
</section>




        <!-- <div class="aboutus-div-81">Institutional Committees</div>
        <div class="aboutus-div-82">
          <div class="aboutus-div-83">
            <div class="column-14">
              <div class="aboutus-div-84">
                <div class="aboutus-div-85">
                  Parents Teachers
                  <br />
                  Association
                </div>
                <div class="aboutus-div-86" onclick="parentteach()">
                  <div class="aboutus-div-87">View Details</div>
                  <img
                    loading="lazy"
                    src="assets/icons/arrow_outward.svg"
                    class="img-21"
                  />
                </div>
                <div class="aboutus-div-88"></div>
              </div>
            </div>
            <div class="column-15">
              <div class="aboutus-div-89">
                <div class="aboutus-div-90">Admissions Advisory Committee</div>
                <div class="aboutus-div-91"  onclick="advisory()">
                  <div class="aboutus-div-92">View Details</div>
                  <img
                    loading="lazy"
                    src="assets/icons/arrow_outward.svg"
                    class="img-22"
                  />
                </div>
                <div class="aboutus-div-93"></div>
              </div>
            </div>
            <div class="column-16">
              <div class="aboutus-div-94">
                <div class="aboutus-div-95">Evaluation Standards Committee</div>
                <div class="aboutus-div-96" onclick="eval()">
                  <div class="aboutus-div-97">View Details</div>
                  <img
                    loading="lazy"
                    src="assets/icons/arrow_outward.svg"
                    class="img-23"
                  />
                </div>
                <div class="aboutus-div-98"></div>
              </div>
            </div>
          </div>
        </div> -->
      
                <div class="aboutus-div-99 ">
        <div class="cta_button_primary Ss-btn_txt explore width100" onclick="window.open('<?php echo $row['btn4_hlink'] ?>',  '_blank')">
          <div class="aboutus-div-100"><?php echo $row['btn_nm4'] ?></div>
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2961_1144)">
                                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED"></path>
                                    </g>
                                </svg>
          <!-- <img
            loading="lazy"
            src="assets/icons/arrow_forward.svg"
            class="img-24"
          /> -->
        </div>
      </div>
        </div>

      
<?php
    }
if($row['id']=='aboutus_sec7'){
      ?>
      
        <div class="aboutus-div-101">
          <div class="aboutus-div-102">
            <div class="aboutus-div-103"><?php echo $row['title'] ?></div>
            <div class="aboutus-div-104">
           Vignan University has achieved notable rankings and accreditations in various domains. In 2023, it was ranked 75th among universities by the National Institutional Ranking Framework (NIRF).
            </div>
            <div class="aboutus-div-105">

            <div class="text_btnnew viewall-right" data-toggle="modal" data-target="#overlaynirf" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm1'] ?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
            </div>
          
          </div>
          <div class="cardn" id="cad">
            <div class="cardn1"><?php echo $row['subsec1_title'] ?></div>
            <div class="cardn2"><?php echo $row['subsec2_title'] ?></div>
            <div class="cardn3">
              <img
                loading="lazy"
                src="assets/icons/round-star.png"
                class="img-26"
              />
              <div class="cardn4"></div>
            </div>
          </div>
 
        </div>

<?php
}}}?>

<!-- nirf overlay -->
<div class="modal fade" id="overlaynirf" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="nirf-overlay-dialog" role="document">
        <div class="filter-modal_content nirf-fm">
          <div class="pad2">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <img src="assets/icons/cross_big.png">
              <!-- <span aria-hidden="true">&times;</span> -->
            </button>
          </div>
          <div class="nirf-container">
        <div class="nirfhead">NIRF Document Links </div>
        <ul class="links">
            <li class="nirf-li"><a href="https://vignan.ac.in/nirf/NIRF%202023%20(University%20Level).pdf">2023 (University Level)</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/nirf/NIRF%20Certificate%20University.jpg">2022 (University Level)</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/nirf/NIRF-21%20IR-O-U-0043%20-%20University.jpg">2021 (University Level)</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/nirf/NIRF-20%20IR-O-U-0043%20University.jpg">2020 (University Level)</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/nirf/NIRF%202023%20(Engineering%20Level).pdf">2023 (Engineering Level)</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/nirf/NIRF%20Certificate%20Engineering%20copy.jpg">2022 (Engineering Level)</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/nirf/NIRF-21%20IR-E-U-0043%20-%20Engineering.jpeg">2021 (Engineering Level)</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/nirf/NIRF-20%20IR-E-U-0043%20Engineering.jpeg">2020 (Engineering Level)</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/naac/NIRF%20India%20Ranking%202019.pdf">2019 </a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/naac/NIRF%20India%20Ranking%202018.pdf">2018 </a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/naac/NIRF%20India%20Ranking%202017.pdf">2017 </a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/naac/NIRF%20India%20Ranking%202016.pdf">2016 </a></li>
        </ul>
    </div>

        </div>
      </div>
    </div>

<!-- ACCREDITAION -->
<?php 

$sqlquery10="SELECT * FROM  sections  where id='home_accrd'";

$result=mysqli_query($conn, $sqlquery10);
$acc = $result->fetch_assoc();


$sqlquery11="SELECT * FROM  accreditation  where id='homeacc_nba'";

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
                Vignan University has garnered notable accolades and recognition. In 2023, it ranked 75th in NIRF's university rankings. The university holds an 'A+' grade from NAAC and NBA tier-1 accreditation for key programmes like CSE, ECE, EEE, Mechanical Engineering, and Biotechnology. It also holds 12(B) status, AICTE approval, and DSIR certification. Furthermore, VFSTR received a DIAMOND rating in QS-I-GAUGE accreditation, with a remarkable score of 90%.
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
                                        onclick="window.open('<?php echo $accinfo1['acc_btnlink']; ?>',  '_blank')">
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
                                        onclick="window.open('<?php echo $accinfo2['acc_btnlink']; ?>',  '_blank')">
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
                                </div>
                            </div>
                        </div>
                        <div class="column-21">
                            <div class="acc-div-119">
                                <div class="div-132">
                                    <img loading="lazy" srcset="<?php echo $accinfo3['acc_logo'];?>" class="img-31" />
                                    <div class="div-133">
                                        <?php echo $accinfo3['acc_desc'];?>
                                    </div>
                                    <div class="text_btnnew viewall-right"
                                        onclick="window.open('<?php echo $accinfo3['acc_btnlink']; ?>',  '_blank')">
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
                    <button class="cta_button_primary Ss-btn_txt btnnone" onclick="programs()">View All
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
                    <button class="cta_button_primary Ss-btn_txt  explore" onclick="programs()">View Departments
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
 $sql = "Select * FROM sections";

 // Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='aboutus_sec9'){
      ?>

        <div class="aboutus-div-137">
          <div class="aboutus-div-138">
            <div class="column-22">
              <div class="aboutus-div-139">
                <div class="nn">
                <div class="aboutus-div-140"><?php echo $row['title'] ?></div>
                <div class="aboutus-div-144n">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img1'] ?>"
                    class="img-34"
                  />
                </div>
                <div class="aboutus-div-141">
               Diversifying programmes enhances students' learning experiences, equips them with adaptable skills, fosters innovation, and prepares them to tackle complex real-world challenges. By breaking down traditional, routine barriers to student growth, universities can play a pivotal role in shaping future leaders who can navigate the complexities of our interconnected world.

                </div>
              </div>
                <div class="aboutus-div-142" >
                  <div class="cta_button_primary Ss-btn_txt ex width100" onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')">
                  <img
                    loading="lazy"
                    src="assets/icons/download.svg"
                    class="img-33"
                  />
                  <div class="aboutus-div-143" ><?php echo $row['btn_nm1'] ?></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column-23">
              <div class="aboutus-div-144">
                <img
                  loading="lazy"
                  srcset="<?php echo $row['img1'] ?>"
                  class="img-34"
                />
              </div>
            </div>
          </div>
        </div>
        <?php
    }}}?>
    
    <?php 
 $sql = "Select * FROM sections";

 // Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='aboutus_sec10'){
      ?>

        <div class="aboutus-div-145">
          <div class="aboutus-div-146">
            <div class="column">
              <div class="aboutus-div-147">
                <div class="aboutus-div-148"><?php echo $row['title'] ?></div>
                <div class="aboutus-div-149">
                <?php echo $row['descr'] ?>
                  <br />
                  <br />
                  <?php echo $row['subsec1_desc'] ?>
                </div>
                <div class="aboutus-div-150">
                  <div class="text_btnnew viewall-right" onclick="window.open('<?php echo $row['btn1_hlink'] ?>',  '_blank')">
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm1'] ?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
                </div>
                <!-- <div class="aboutus-div-105">
            <div class="majlink">
            View Document
              <img
                class="majArrow"
                src="assets/icons/arrow_outward.svg"
                alt=""
              />
            </div>
            </div> -->
                <!-- <div class="aboutus-div-152"></div> -->
              </div>
            </div>
            
            <div class="column-24">
              <div class="aboutus-div-153">
                <div class="aboutus-div-154">
                  <div class="aboutus-div-155">
                    <div class="column-25">
                      <div class="aboutus-div-156">
                        <div class="aboutus-div-157">
                          <div class="aboutus-div-158"><?php echo $row['subsec1_title'] ?></div>
                          <img
                            loading="lazy"
                            srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/0a4c9663fc0207623f10945515eed0847b8069e5301a7d56074f0841e46ce8b6?apiKey=199c707a719f471b99f1a193498eeddd&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/0a4c9663fc0207623f10945515eed0847b8069e5301a7d56074f0841e46ce8b6?apiKey=199c707a719f471b99f1a193498eeddd&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/0a4c9663fc0207623f10945515eed0847b8069e5301a7d56074f0841e46ce8b6?apiKey=199c707a719f471b99f1a193498eeddd&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/0a4c9663fc0207623f10945515eed0847b8069e5301a7d56074f0841e46ce8b6?apiKey=199c707a719f471b99f1a193498eeddd&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/0a4c9663fc0207623f10945515eed0847b8069e5301a7d56074f0841e46ce8b6?apiKey=199c707a719f471b99f1a193498eeddd&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/0a4c9663fc0207623f10945515eed0847b8069e5301a7d56074f0841e46ce8b6?apiKey=199c707a719f471b99f1a193498eeddd&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/0a4c9663fc0207623f10945515eed0847b8069e5301a7d56074f0841e46ce8b6?apiKey=199c707a719f471b99f1a193498eeddd&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/0a4c9663fc0207623f10945515eed0847b8069e5301a7d56074f0841e46ce8b6?apiKey=199c707a719f471b99f1a193498eeddd&"
                            class="img-36"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="column-26">
                      <div class="aboutus-div-159">
                        <div class="aboutus-div-160">
                          <div class="aboutus-div-161"><?php echo $row['subsec2_title'] ?></div>
                          <img
                            loading="lazy"
                            src="<?php echo $row['img3'] ?>"
                            class="img-37"
                          />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
               
                <div class="aboutus-div-162">
                  <div class="aboutus-div-163">
                    <div class="column-27">
                      <div class="aboutus-div-164">
                        <div class="aboutus-div-165">
                          <div class="aboutus-div-166"><?php echo $row['subsec3_title'] ?></div>
                          <img
                            loading="lazy"
                            src="<?php echo $row['img4'] ?>"
                            class="img-38"
                          />
                        </div>
                        </div>
                      </div>
                   
                    <div class="column-28">
                      <div class="aboutus-div-167">
                        <div class="aboutus-div-168">
                          <div class="aboutus-div-169"><?php echo $row['subsec4_title'] ?></div>
                          <img
                            loading="lazy"
                            src="<?php echo $row['img5'] ?>"
                            class="img-39"
                          />
                        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
    }
        if($row['id']=='aboutus_sec11_1'){
          
    ?>
      
        <div class="aboutus-div-170">
          <div class="aboutus-div-171">
            <div class="column-29">
              <div class="aboutus-div-172">
                <div class="aboutus-div-173"><?php echo $row['title'] ?></div>
                <div class="aboutus-div-174"><?php echo $row['subsec1_title'] ?></div>
                <div class="aboutus-div-175">
                The annual reports cover a broad range of topics, including academic activities, student engagements, faculty-generated content, departmental specifics, achievements in physical education and sports, and details regarding the university's budget.
                </div>
                <div class="aboutus-div-176" >
                <div class="text_btnnew viewall-right" data-toggle="modal" data-target="#overlayar">
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm1'] ?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px; margin-bottom: 1%;
">
                </div>
            </div>
        </div>
                </div>

    
  <!-- annual repo overlay -->
<div class="modal fade" id="overlayar" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="nirf-overlay-dialog" role="document">
        <div class="filter-modal_content nirf-fm">
          <div class="pad2">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <img src="assets/icons/cross_big.png">
              <!-- <span aria-hidden="true">&times;</span> -->
            </button>
          </div>
          <div class="nirf-container">
        <div class="nirfhead">University Annual Reports </div>
        <ul class="links">
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/19-20%20Annual%20Report.pdf">2019-20</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/18-19%20Annual%20Report.pdf">2018-19</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/17-18%20Annual%20Report.pdf">2017-18</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/16-17%20Annual%20Report.pdf">2016-17</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/15-16%20Annual%20Report.pdf">2015-16</a></li>

        </ul>
        
    </div>

        </div>
      </div>
    </div>
                

                <div class="aboutus-div-179"><?php echo $row['subsec2_title'] ?></div>
                <div class="aboutus-div-180">
                The Audit Report for charitable or religious trusts or institutions falls under the purview of Section 12A(b) of the Income Tax Act, 1961.
                </div>
                <div class="aboutus-div-181" >
                  <div class="text_btnnew viewall-right" data-toggle="modal" data-target="#overlayfr" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm2'] ?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px;     margin-bottom: 1%;
">
                </div>
            </div>
        </div>
                </div>
              </div>
            </div>

 <!-- financial repo overlay -->
 <div class="modal fade" id="overlayfr" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="nirf-overlay-dialog" role="document">
        <div class="filter-modal_content nirf-fm">
          <div class="pad2">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <img src="assets/icons/cross_big.png">
              <!-- <span aria-hidden="true">&times;</span> -->
            </button>
          </div>
          <div class="nirf-container">
          <div class="nirfhead">University Financial Reports </div>
        <ul class="links">
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/BS%202019-20.pdf">Financial statement 2019-20</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/BS%202018-19.pdf">Financial statement 2018-19</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/BS%202017-18.pdf">Financial statement 2017-18</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/BS%202016-17.pdf">Financial statement 2016-17</a></li>
            <li class="nirf-li"><a href="https://vignan.ac.in/pdf/BS%202015-16.pdf">Financial statement 2015-16</a></li>

        </ul>
        
    </div>

        </div>
      </div>
    </div>


            <?php }
            else if($row['id']=='aboutus_sec11_2'){
              ?>
            <div class="column-30">
              <div class="aboutus-div-184">
                <div class="aboutus-div-185"><?php echo $row['title'] ?></div>
                <div class="aboutus-div-186">
                <?php echo $row['descr'] ?>&quot;
                </div>
                <div class="aboutus-div-187">
                <div class="text_btnnew viewall-right" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm1'] ?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px ; margin-bottom: -10%;
">
                </div>
            </div>
        </div>
                </div>
              </div>
            </div>
            
            <?php }

else if($row['id']=='aboutus_sec11_3'){?>
          
            
            <div class="column-31">
              <div class="aboutus-div-190">
                <div class="aboutus-div-191"><?php echo $row['title'] ?></div>
                <div class="aboutus-div-192">
                <?php echo $row['descr'] ?>
                </div>
                <div class="aboutus-div-193">
                <div class="text_btnnew viewall-right" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                <?php echo $row['btn_nm1'] ?>
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px; margin-top: 30%;
">
                </div>
            </div>
        </div>
                </div>
                  </div>
            </div>
          </div>
        </div>

        <?php
    }}}?>

    <?php 
 $sql = "Select * FROM testimonials";

 // Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['Id']=='aboutus_sec12_1'){
      ?>

        <div class="aboutus-div-196"><?php echo $row['title'] ?></div>
        <div class="aboutus-div-197">
          <div class="aboutus-div-198">
            <div class="column-32">
              <div class="aboutus-div-199">
                <img
                  loading="lazy"
                  src="assets/images/quotes.webp"
                  class="img-44"
                />
                
                <div class="aboutus-div-200">
               Vignan has been excelling admirably. The knowledge students gained from Vignan will enable them to reach for the stars. Its holistic education model fosters creativity, critical thinking, and leadership qualities, preparing graduates to address the challenges of tomorrow with confidence and competence.
                </div>
                <img
                  loading="lazy"
                  srcset="<?php echo $row['img'] ?>"
                  class="img-45"
                />
                <div class="aboutus-div-201"><?php echo $row['name'] ?></div>
                <div class="aboutus-div-202">
                <?php echo $row['caption'] ?>
                </div>
              </div>
            </div>
            <?php
          }
           else if($row['Id']=='aboutus_sec12_2'){
          ?>
            <div class="column-33">
              <div class="aboutus-div-203">
                <img
                  loading="lazy"
                  src="assets/images/quotes.webp"

                  class="img-46"
                />
                <div class="aboutus-div-204">
               I witnessed something truly extraordinary: the unmistakable joy, enthusiasm, and confidence radiating from every student's face at the university. Such a profound sense of happiness is seldom encountered, especially within a technology-focused institution.
                   
                </div>
                <img
                  loading="lazy"
                  srcset="<?php echo $row['img'] ?>"
                  class="img-47"
                />
                <div class="aboutus-div-205"><?php echo $row['name'] ?></div>
                <div class="aboutus-div-206">
                <?php echo $row['caption'] ?>
                </div>
              </div>
            </div>
            <?php
  }
   if($row['Id']=='aboutus_sec12_3'){
  ?>
            <div class="column-34">
              <div class="aboutus-div-207">
                <img
                  loading="lazy"
                  src="assets/images/quotes.webp"
                  class="img-48"
                />
                <div class="aboutus-div-208">
                Vignan, an inspiring institution with visionary leadership, cultivates intellectual excellence and fosters innovation, grooming exceptional individuals who will drive progress and lead the nation towards a brighter future.
                </div>
                <img
                  loading="lazy"
                  srcset="<?php echo $row['img'] ?>"
                  class="img-49"
                />
                <div class="aboutus-div-209"><?php echo $row['name'] ?></div>
                <div class="aboutus-div-210">
                <?php echo $row['caption'] ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="aboutus-div-1p">
        

            <div class="text_btnnew viewall-right" onclick="naac()" >
            <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_txt">
                View All Testimonies
                </div>
                <div>
                    <img src="assets/icons/outwardarrow_brown.svg" loading="lazy" style="width: 16px;height: 16px;">
                </div>
            </div>
        </div>
        </div>
       <?php
    }}}?>

<?php 
 $sql = "Select * FROM sections";

 // Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetching data and storing in a multidimensional array
  while ($row = $result->fetch_assoc()) {
    if($row['id']=='aboutus_sec13'){
      ?>

        <div class="aboutus-div-214">
          <div class="aboutus-div-215">
            <div class="column-35">
              <div class="aboutus-div-216">
                <div class="aboutus-div-217">
                  Off-Campus
                  <br />
                  Hydrabad
                </div>
                <div class="aboutus-div-223n">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img1'] ?>"
                    class="img-52n"
                  />
                </div>

                <div class="aboutus-div-226n">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img2'] ?>"
                    class="img-54n"
                  />
                </div>
                <div class="aboutus-div-225n">
                  <img
                    loading="lazy"
                    srcset="<?php echo $row['img3'] ?>"
                    class="img-53n"
                  />
                </div>

                <div class="aboutus-div-218">
               Explore the enriching academic landscape beyond the campus confines in Hyderabad, where scholarly excellence intersects with the vibrant pulse of the city. Our off-campus programmes present students with distinctive avenues to immerse themselves in a lively academic setting nestled within a bustling and culturally diverse campus.
                </div>
               <div class="aboutus-div-219" >
                <div class="cta_button_primary Ss-btn_txt explore width100" id="button" onclick="<?php echo $row['btn1_hlink'] ?>">
                  <div class="aboutus-div-220"><?php echo $row['btn_nm1'] ?></div>
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2" width="24" height="24">
                                        <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2961_1144)">
                                        <path d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z" fill="#F2F1ED"></path>
                                    </g>
                                </svg>
                  <!-- <img
                    loading="lazy"
                    src="assets/icons/arrow_forward.svg"
                    class="img-51"
                  /> -->
                </div>
              </div>
    </div>
            </div>
            <div class="column-36" onclick="offcampus()">
              <div class="aboutus-div-221">
                <div class="aboutus-div-222">
                  <div class="column-37">
                    <div class="aboutus-div-223">
                      <img
                        loading="lazy"
                        srcset="<?php echo $row['img4'] ?>"
                        class="img-52"
                      />
                    </div>
                  </div>
                  <div class="column-38">
                    <div class="aboutus-div-224">
                      <div class="aboutus-div-225">
                        <img
                          loading="lazy"
                          srcset="<?php echo $row['img5'] ?>"
                          class="img-53"
                        />
                      </div>
                      <div class="aboutus-div-226">
                        <img
                          loading="lazy"
                          srcset="<?php echo $row['img6'] ?>"
                          class="img-54"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
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
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- <script>
  const locoScroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'), // Element to which Locomotive Scroll should be applied
    smooth: true, // Enable smooth scrolling
    // Add more options as needed
  });
</script> -->
              
</body>
</html>

  
    