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
    <link rel="stylesheet" href="css/administration.css">
    <link rel="stylesheet" href="css/mblfooter.css">
    <link rel="stylesheet" href="css/newstudent.css">
	    <link rel="stylesheet" href="css/program.css">
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
?>


    <div class="container home-div1 "  style="margin-top:100px;">
    <div class="newstudent-div-space">

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

<div style="display: flex;flex-direction: column;align-items: flex-start;gap: var(--Spacing-Spacing-Mega-L, 61px);">
      
	
	
	<div class="search-titlediv">
  <div class="academics-info">
    <h1 class="academics-title">People</h1>
    <h2 class="academics-subtitle"><?php echo $row['title'] ?></h2>
  </div>
  <div class="search-filter-container" >
    <div class="search-container">
      <span class="search-input-container">
      <img src="assets/svgicons/search.svg" alt="" class="prog-search-icon" />
       
        <input type="text" class="search-input" id="search" placeholder="Search" autofocus/>
</span>
      
      <div class="search-divider"></div>
    </div>
    <button class="filter-button">
      <img src="assets/svgicons/filter_list.svg" alt="" class="filter-icon" />
      <span class="filter-text">Filter</span>
    </button>
  </div>
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
                  <div class="aboutus-div-52">Col. Vice - Chancellor</div>
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
                  loading="lazy" style='object-position: 37%;'
                  srcset="assets/images/registrar.webp"
                  class="img-11"
                />
                <div class="aboutus-div-56">CMDE. DR. M.S. RAGHUNATHAN</div>
                <div  class="admin_dean_dept">Registrar</div>
              </div>
            </div>
            <div class="column-8">
              <div class="aboutus-div-57">
                <img
                  loading="lazy"
                  srcset="assets/images/FO_vignan.jpg"
                  class="img-12"
                />
                <div class="aboutus-div-58">Mr. N.S.N Murthy</div>
                <div class="admin_dean_dept">Finance Officer</div>
              </div>
            </div>
            <div class="column-9">
              <div class="aboutus-div-59">
                <img
                  loading="lazy"
                  srcset="assets/images/aboutus_img13.webp"
                  class="img-13"
                />
                <div class="aboutus-div-60">Dr. P. M. V. Rao</div>
                <div class="admin_dean_dept">Dean, Academics, Assessment and Awards</div>
              </div>
            </div>
			  <div class="column-9">
              <div class="aboutus-div-59">
                <img
                  loading="lazy"
                  srcset="assets/images/aboutus_img12.webp"
                  class="img-12"
                />
                <div class="aboutus-div-60">Dr. Y. Ravi sekhar</div>
				  <div class="admin_dean_dept">Dean, Technology Development</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/aboutus_img14.webp"
                  class="img-14"
                />
                <div class="aboutus-div-62">Dr. G. Srinivasa Rao</div>
                <div  class="admin_dean_dept">Dean, Promotion, Collaborations & Faculty Affairs</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/vijayaramu.jpeg"
                  class="img-11"
                />
                <div class="aboutus-div-56">Dr. D Vijaya Ramu</div>
				    <div  class="admin_dean_dept">Dean, Promotion, Collaborations & Faculty Affairs</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/iqacdean.jpeg"
                  class="img-11"
                />
                <div class="aboutus-div-56">Dr. M. Ramakrishna</div>
				    <div class="admin_dean_dept">Dean, IQAC</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/Dean_SA.jpg"
                  class="img-11"
                />
                <div class="aboutus-div-56">Dr. M. S. S. Rukmini</div>
				    <div class="admin_dean_dept">Dean, Students Affairs</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/Dean_Academic.jpg"
                  class="img-11"
                />
                <div class="aboutus-div-56">Dr. Jakeer Hussain</div>
				    <div  class="admin_dean_dept">Dean, Planning and Monitoring</div>
              </div>
            </div>
           
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/cultivate-img2.svg"
                  class="img-11"
                />
                <div class="aboutus-div-56">Dr. K.V. Krishna Kishore</div>
				    <div class="admin_dean_dept">Dean, Admissions</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/Dean_Placements2.jpg"
                  class="img-11"
                />
                <div class="aboutus-div-56">Dr. D. Vijay Krishna</div>
				    <div  class="admin_dean_dept">Dean, Training & Placements</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/schooldean_seece.png"
                  class="img-11"
                />
                <div class="aboutus-div-56">Dr. N. Usha Rani</div>
				    <div  class="admin_dean_dept">School Dean, ECE</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/RameshBabu.jpeg"
                  class="img-11"
                />
                <div class="aboutus-div-56">Dr. T. Ramesh Babu</div>
				    <div  class="admin_dean_dept">School Dean, Agri, Food Science & Technology</div>
              </div>
            </div>
            <div class="column-10">
              <div class="aboutus-div-61">
                <img
                  loading="lazy"
                  srcset="assets/images/HOD_BSH.jpg"
                  class="img-11"
                />
                <div class="aboutus-div-56">Dr. N. Srinivasu</div>
				    <div  class="admin_dean_dept">School Dean,  Applied Sciences & Humanities</div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
      </div>

        <!-- Footer starts here -->
        <div id="mblftr">
            <?php
                
                include_once  'mblfooter.php';
                ?>
        </div>
        <div id="ftr" style="    width: 100%;">
            <?php
                
                include_once  'footer.php';
                ?>
        </div>

        <!-- Footer ends here -->

</div>
    </div>


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