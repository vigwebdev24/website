<?php 
include('connect.php');
?>


<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>

  <link rel="stylesheet" href="css/directory.css">
  <link rel="stylesheet" href="css/mblfooter.css">
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

  <div class="container home-div1">
  <div class="academics-container">
  <div class="academics-info">
    <h1 class="academics-title">FACILITIES</h1>
    <h2 class="academics-subtitle">Phone Directory</h2>
  </div>
  
</div>
<div class="line-divider"></div>

  <nav class="alphabet-nav">

    <div class="alphabet-letter act">a</div>
    <div class="alphabet-letter">b</div>
    <div class="alphabet-letter">c</div>
    <div class="alphabet-letter">d</div>
    <div class="alphabet-letter">e</div>
    <div class="alphabet-letter">f</div>
    <div class="alphabet-letter">g</div>
    <div class="alphabet-letter">h</div>
    <div class="alphabet-letter">i</div>
    <div class="alphabet-letter">j</div>
    <div class="alphabet-letter">k</div>
    <div class="alphabet-letter">l</div>
    <div class="alphabet-letter">m</div>
    <div class="alphabet-letter">n</div>
    <div class="alphabet-letter">o</div>
    <div class="alphabet-letter">p</div>
    <div class="alphabet-letter">q</div>
    <div class="alphabet-letter">r</div>
    <div class="alphabet-letter">s</div>
    <div class="alphabet-letter">t</div>
    <div class="alphabet-letter">u</div>
    <div class="alphabet-letter">v</div>
    <div class="alphabet-letter">w</div>
    <div class="alphabet-letter">x</div>
    <div class="alphabet-letter">y</div>
    <div class="alphabet-letter">z</div>
  </nav>
  <div class="line-divider"></div>
  <?php

  // $sql = "SELECT * FROM cards WHERE Id LIKE 'ncc_act_cd1'";
  $sql1 = "SELECT * FROM contactus WHERE Id LIKE 'direc_sec%'";

  // Execute the query
  $result = $conn->query($sql1);
  $n1=mysqli_num_rows($result);
  $p1=1;
  $sqln="SELECT COUNT(DISTINCT SUBSTRING(Id, 7, LOCATE('_cd', Id) - 7)) AS st
FROM contactus";
  $rt = $conn->query($sqln);
  $ro = $rt->fetch_assoc();
// echo $ro['st'];
  
  while ($p1<$ro['st']) {
    ?>
  <section class="admin-section">
    <?php
      $sql2 = "SELECT * FROM contactus WHERE Id LIKE 'direc_sec{$p1}_cd%' ORDER BY CAST(SUBSTRING(id, 14) AS UNSIGNED)";
      $result2 = $conn->query($sql2);
     

        $sql3 = "SELECT * FROM contactus WHERE Id LIKE 'direc_sec{$p1}_cd1'";

        $result3 = $conn->query($sql3);
        while ($row3 = $result3->fetch_assoc() ) {
?>
    <h2 class="section-title"><?php echo $row3['title'] ?></h2>
    <?php } ?>

    <div class="admin-wrapper">
<?php
    if ($result2->num_rows > 0) {
       while ($row2 = $result2->fetch_assoc() ) {
        ?>

      <div class="admin-column">
        <div class="admin-details">
          <div class="admin-title"><?php echo $row2['designation'] ?></div>
          <div class="admin-name"><?php echo $row2['name'] ?></div>
          <div class="admin-ph"><?php echo $row2['mobno'] ?></div>
          <div class="admin-ext"> Extn. : <?php echo $row2['extn'] ?></div>
          <div class="admin-email"><?php echo $row2['email'] ?></div>
        </div>
      </div>
     <?php  }}?>
     
    </div>
    </section>

    <?php 
  $p1++;
  }?>

  <!-- <section class="admin-section">
    <h2 class="section-title">Advanced Computer Science and Engineering</h2>
    <div class="admin-wrapper">
    <div class="admin-column">
    <div class="admin-details">
    <div class="admin-title">HoD</div>
    <div class="admin-name">Dr. B. Premamayudu</div>
    <div class="admin-ph">0863-2344700</div>
    <div class="admin-ext"> Extn. : 283</div>
    <div class="admin-email">registrar@vignan.ac.in</div>
    </div>
    </div>
    </div>
  </section>


  <section class="admin-section">
    <h2 class="section-title">Biotechnology and Bio-informatics</h2>
    <div class="admin-wrapper">
    <div class="admin-column">
    <div class="admin-details">
    <div class="admin-title">Registrar</div>
    <div class="admin-name">Cmde. Dr. M.S.Raghunathan, VSM (Retd.)</div>
    <div class="admin-ph">0863-2344700</div>
    <div class="admin-ext"> Extn. : 283</div>
    <div class="admin-email">registrar@vignan.ac.in</div>
    </div>
    </div>
    </div>
  </section>


  <section class="admin-section">
    <h2 class="section-title">Biomedical Engineering</h2>
    <div class="admin-wrapper">
    <div class="admin-column">
    <div class="admin-details">
    <div class="admin-title">HoD</div>
    <div class="admin-name">Dr. G. Sitaramnajaneya Reddy</div>
    <div class="admin-ph">0863-2344700</div>
    <div class="admin-ext"> Extn. : 283</div>
    <div class="admin-email">registrar@vignan.ac.in</div>
    </div>
    </div>
    </div>
  </section>


  <section class="admin-section">
    <h2 class="section-title">Civil Engineering</h2>
    <div class="admin-wrapper">
    <div class="admin-column">
    <div class="admin-details">
    <div class="admin-title">HoD</div>
    <div class="admin-name">Dr. M. Karthikeyan</div>
    <div class="admin-ph">0863-2344700</div>
    <div class="admin-ext"> Extn. : 283</div>
    <div class="admin-email">registrar@vignan.ac.in</div>
    </div>
    </div>
    </div>
  </section>


  <section class="admin-section">
    <h2 class="section-title">Computer Science and Engineering</h2>
    <div class="admin-wrapper">
    <div class="admin-column">
    <div class="admin-details">
    <div class="admin-title">HoD</div>
    <div class="admin-name">Dr. K.V. Krishna Kishore</div>
    <div class="admin-ph">0863-2344700</div>
    <div class="admin-ext"> Extn. : 283</div>
    <div class="admin-email">registrar@vignan.ac.in</div>
    </div>
    </div>

    <div class="admin-column">
        <div class="admin-details">
          <div class="admin-title">HoD</div>
          <div class="admin-name">Dr. Venkatarama Phani Kumar Sistla</div>
          <div class="admin-ph">0863-2344700</div>
          <div class="admin-ext"> Extn. : 283</div>
          <div class="admin-email">vc@vignan.ac.in</div>
        </div>
      </div>
    </div>
  </section>



  <section class="admin-section">
    <h2 class="section-title">Electronics and Communication Engineering</h2>
    <div class="admin-wrapper">
    <div class="admin-column">
    <div class="admin-details">
    <div class="admin-title">HoD</div>
    <div class="admin-name">Dr. T. Pitchaiah</div>
    <div class="admin-ph">0863-2344700</div>
    <div class="admin-ext"> Extn. : 283</div>
    <div class="admin-email">registrar@vignan.ac.in</div>
    </div>
    </div>

    <div class="admin-column" style="margin-left: 20px;">
        <div class="admin-details">
          <div class="admin-title">HoD</div>
          <div class="admin-name">Dr. T. Pitchaiah</div>
          <div class="admin-ph">0863-2344700</div>
          <div class="admin-ext"> Extn. : 283</div>
          <div class="admin-email">vc@vignan.ac.in</div>
        </div>
      </div>
    </div>
  </section> -->


 
  
  

  

  



  </div>
  <div class="container home-div1">
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

//alphabet navigation

document.addEventListener('DOMContentLoaded', () => {
    const alphabetNav = document.querySelector('.alphabet-nav');
    const alphabetLetters = alphabetNav.querySelectorAll('.alphabet-letter');
    const container = document.querySelector('.container.home-div1');
    const sections = Array.from(container.querySelectorAll('section'));
    let currentSortedLetter = 'a';



    alphabetNav.addEventListener('click', (e) => {
        if (e.target.classList.contains('alphabet-letter')) {
            alphabetLetters.forEach(letter => {
                letter.classList.remove('act');
            });
            e.target.classList.add('act');

            const selectedLetter = e.target.textContent.toLowerCase();
            sortSections(selectedLetter);
        }
    });

    function sortSections(selectedLetter) {
      
      if (currentSortedLetter === selectedLetter) {
            return; 
        }

        const sortedSections = sections.sort((a, b) => {
            const titleA = a.querySelector('.section-title').textContent.trim().toLowerCase();
            const titleB = b.querySelector('.section-title').textContent.trim().toLowerCase();

            if (titleA.startsWith(selectedLetter)) return -1;
            if (titleB.startsWith(selectedLetter)) return 1;

            return titleA.localeCompare(titleB);
        });

        sortedSections.forEach(section => {
            container.appendChild(section);
        });

        currentSortedLetter = selectedLetter;


        window.scrollTo({
            top: sortedSections[0].offsetTop - alphabetNav.offsetHeight - 10,
            behavior: 'smooth'
        });
    }
});










    function apply() {
      let apply = document.getElementById("apply");
      apply.style.display = "block";
      let timetable = document.getElementById("timetable");
      timetable.style.display = "none";
      let questionpaper = document.getElementById("questionpaper");
      questionpaper.style.display = "none";
      let schemes = document.getElementById("schemes");
      schemes.style.display = "none";
    }

    function timetable() {
      let apply = document.getElementById("apply");
      apply.style.display = "none";
      let timetable = document.getElementById("timetable");
      timetable.style.display = "block";
      let questionpaper = document.getElementById("questionpaper");
      questionpaper.style.display = "none";
      let schemes = document.getElementById("schemes");
      schemes.style.display = "none";
    }

    function questionpaper() {
      let apply = document.getElementById("apply");
      apply.style.display = "none";
      let timetable = document.getElementById("timetable");
      timetable.style.display = "none";
      let questionpaper = document.getElementById("questionpaper");
      questionpaper.style.display = "block";
      let schemes = document.getElementById("schemes");
      schemes.style.display = "none";
    }

    function schemes() {
      let apply = document.getElementById("apply");
      apply.style.display = "none";
      let timetable = document.getElementById("timetable");
      timetable.style.display = "none";
      let questionpaper = document.getElementById("questionpaper");
      questionpaper.style.display = "none";
      let schemes = document.getElementById("schemes");
      schemes.style.display = "block";
    }
    apply();


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