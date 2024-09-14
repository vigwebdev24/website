
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vignan University</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/program.css">
    <link rel="stylesheet" href="css/news.css">
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

.course-cards{
  width: 100% !important;
}


.search-input{
  background-color: #F2F1ED !important;
}
.course-cta-divider{
  width: 150px!important;
}
.com1{
  width: 84px!important;
}
	

</style>
<script>
window.onload = function() {
    var inputField = document.getElementById("search");

    inputField.focus(); // Autofocus on page load

    // When input field loses focus, but still has no value, refocus it
    // inputField.addEventListener("blur", function() {
    //     if (!this.value.trim()) {
    //         this.focus();
    //     }
    // });
};
</script>

<body>
    <?php
include_once 'connect.php';
include_once  'navbar.php';?>
<div class="container home-div1">

<div class="academics-container">
  <div class="academics-info">
    <h1 class="academics-title">Academics</h1>
    <h2 class="academics-subtitle">Regulations</h2>
  </div>
  <div class="search-filter-container">
    <div class="search-container">
      <span class="search-input-container">
      <img src="assets/svgicons/search.svg" alt="" class="prog-search-icon" />
       
        <input type="text" class="search-input" id="search" placeholder="Search for Programs" autofocus/>
</span>
      
      <div class="search-divider"></div>
    </div>
    <button class="filter-button">
      <img src="assets/svgicons/filter_list.svg" alt="" class="filter-icon" />
      <span class="filter-text">Filter</span>
    </button>
  </div>
</div>
<div class="sep"></div>

          <div class="margin-top"></div>
          <?php
      $sql = "SELECT * FROM programs where id like 'reg%'";

      $result=mysqli_query($conn, $sql);

      $com = array();
      $bd = array();
      $md = array();
      $comc=0;
      $bdc=0;
      $mdc=0;

      if (mysqli_num_rows($result) > 0) {
         
          while ($row = mysqli_fetch_assoc($result)) {
			 // print_r($row);
            if($row['program_type']==='com'){
              $com[] = $row;
              $comc=$comc+1;
            }
            else if($row['program_type']=='bdr22'){
				
              $bd[] = $row;
				//print_r(count($bd));
              $bdc=$bdc+1;
            }
            else if ($row['program_type']=='mdr22'){
              $md[] = $row;
              $mdc=$mdc+1;
            }

          }
      } else {
          echo "No program found.";
      }
      

?>


<!--<div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($com as $row) { ?>
    <div class="course-card com">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      
      <div class="course-cta">
      <a class="a" href="<?php echo $row['btn_hlink']?> target='_blank'"><div class="course-cta-text"><?php echo $row['btn_nm']?></div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider com1"></div>
    </div>
    <?php } ?>
  </div>
</div>

<div class="sep"></div>-->

          

<div class="program-div-36 ug-prog pg">
            <div class="program-div-37">R22 regulations for Bachelors Degree</div>
            <!-- <div class="program-div-38">
              <div class="program-div-39">Fee Details</div>
              <div class="program-div-40">Apply Now</div>
            </div> -->
</div>
<div class="margin-top"></div>
<div class="course-cards-container">
  <div class="course-cards">
	 
  <?php foreach ($bd as $row) { ?>
	  
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      <div class="course-details">
      <?php echo  $row["descr"] ?>
        <br />
        <?php echo  $row["duration"] ?>
      </div>
      <div class="course-cta">
      <a class="a" href=<?php echo $row['btn_hlink']?> target="_blank"><div class="course-cta-text"><?php echo $row['btn_nm']?></div></a>
        
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider com1"></div>
    </div>
    <?php } ?>
  </div>
</div>


<div class="sep"></div>

          <div class="program-div-36 ug-prog">
            <div class="program-div-37">R22 regulations for Masters Degree</div>
          </div>
         
          <div class="margin-top"></div>

<div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($md as $row) { ?>
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      <div class="course-details">
      <?php echo  $row["descr"] ?>
        <br />
        <?php echo  $row["duration"] ?>
      </div>
      <div class="course-cta">
      <a class="a" href=<?php echo $row['btn_hlink']?> target="_blank"><div class="course-cta-text"><?php echo $row['btn_nm']?></div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider com1"></div>
    </div>
    <?php } ?>
  </div>
</div>

  <div class="footer-margin-top"></div>

  <?php
   include('footer.php');
?>
<div class="top" style="style:height:100px"></div>


   <div id="mblftr" style="padding: 6px;">
<?php
    
   include_once  'mblfooter.php';
    ?>
</div>
<div id="ftr" style="padding: 110px;">
<?php
    
   include_once  'footer.php';
    ?>
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