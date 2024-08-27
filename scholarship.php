<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>

  <!-- <link rel="stylesheet" href="css/iqac.css"> -->
  <link rel="stylesheet" href="css/exam.css">
  <link rel="stylesheet" href="css/home.css">
  <!-- <link rel="stylesheet" href="css/modals.css"> -->
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/mblfooter.css">
  <link rel="stylesheet" href="css/scholarships.css">
  <link rel="stylesheet" href="css/scholarship.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    body {
      background-color: #F2F1ED !important;
    }
  </style>
</head>

<body>
  <?php
  include_once 'connect.php';
  include_once  'navbar.php';
  ?>

  <div class="container home-div1">
    <!-- Scholarship Section -->
    <div class="exam-head">
      <div class="head-top">ADMISSION</div>
      <div class="exam-title">
        Scholarship 
      </div>
      <div class="exam-desc">
        <!-- For regular students (RI9), pay tuition fees via bank challan or online banking. Upon verification by the Finance Office, receive an SMS confirming clearance of semester dues. Present proof of payment at the department, collect and fill the registration form, meet the counselor, and begin attending classes. Expect an SMS confirmation of subject registration. Complete registration before the start of class work for timely attendance. -->
      </div>
    </div>
    <div class="scholarship-container">
      <!-- <header>
        <h1>Scholarship</h1>
      </header> -->
      <div class="exam-nav">
          <div class="exam-nav-leftbox">
            <div class="exam-nav-title color" onclick="handleClick(this, 'vsat')">VSAT <div class="hline visible"></div>
            </div>
            <div class="exam-nav-title" onclick="handleClick(this, 'jee')">JEE Mains <div class="hline "></div>
            </div>
            <div class="exam-nav-title" onclick="handleClick(this, 'intermark')">Inter Marks <div class="hline"></div>
            </div>
            <div class="exam-nav-title" onclick="handleClick(this, 'examcet')">EXAMCET <div class="hline"></div>
            </div>
            <div class="exam-nav-title" onclick="handleClick(this, 'neet')">NEET <div class="hline"></div>
            </div>
            <div class="exam-nav-title" onclick="handleClick(this, 'cbse')">CBSE +2 <div class="hline"></div>
            </div>
          </div>
      </div>
    <div id="vsat" class="content1 active1">
 
      <div class="scholarship-row header-row">
        <div class="scholarship-cell hot">Rank</div>
        <div class="scholarship-cell">1-50</div>
        <div class="scholarship-cell">51-100</div>
        <div class="scholarship-cell">101-400</div>
        <div class="scholarship-cell">401-2000</div>
      </div>
      <div class="feeline">
        
      </div>
      <div class="scholarship-row">
        <div class="scholarship-cell hot">Scholarship</div>
        <div class="scholarship-cell">75%</div>
        <div class="scholarship-cell">50%</div>
        <div class="scholarship-cell">25%</div>
        <div class="scholarship-cell">10%</div>
      </div>
      <div class="feeins"></div>
      
      <footer>
        <h2>Instructions</h2>
        <ul class="instructions-list">
          <li>Preference in allotment of scholarship seats will be given to V-SAT'23 qualified candidates.</li>
          <li>25% of the total seats in each Department are reserved for scholarships.</li>
          <li>Out of that 25% seats with 75% scholarship, 10% seats with 50% scholarship and 10% seats with 25% scholarship.</li>
          <li>For Example, out of 50 seats, 3 seats with 75% scholarship, 6 seats with 50% scholarship and 6 seats with 25% scholarship.</li>
          <li>The scholarship seats are allotted in all programmes on the basis of merit, availability of seats and first come first served basis.</li>
          <li>The scholarship is applicable for four years of study subject to maintaining a minimum of 70% of marks in the preceding year(s) without any backlogs.</li>
        </ul>
      </footer>
    </div>

    <div id="jee" class="content1" >
    
      <div class="scholarship-row header-row">
        <div class="scholarship-cell hot">Rank</div>
        <div class="scholarship-cell">Above 95</div>
        <div class="scholarship-cell">89 - 94.9</div>
        <div class="scholarship-cell">80 - 88.9</div>
        <div class="scholarship-cell">70 - 79.9</div>
      </div>
      <div class="feeline"></div>
      <div class="scholarship-row">
        <div class="scholarship-cell hot">Scholarship</div>
        <div class="scholarship-cell">75%</div>
        <div class="scholarship-cell">50%</div>
        <div class="scholarship-cell">25%</div>
        <div class="scholarship-cell">10%</div>
      </div>
      <div class="feeins"></div>
      <footer>
        <h2>Instructions</h2>
        <ul class="instructions-list">
          <li>Preference in allotment of scholarship seats will be given to V-SAT'23 qualified candidates.</li>
          <li>25% of the total seats in each Department are reserved for scholarships.</li>
          <li>Out of that 25% seats with 75% scholarship, 10% seats with 50% scholarship and 10% seats with 25% scholarship.</li>
          <li>For Example, out of 50 seats, 3 seats with 75% scholarship, 6 seats with 50% scholarship and 6 seats with 25% scholarship.</li>
          <li>The scholarship seats are allotted in all programmes on the basis of merit, availability of seats and first come first served basis.</li>
          <li>The scholarship is applicable for four years of study subject to maintaining a minimum of 70% of marks in the preceding year(s) without any backlogs.</li>
        </ul>
      </footer>
    </div>

    <div id="intermark" class="content1">
    
      <div class="scholarship-row header-row">
        <div class="scholarship-cell hot">Rank</div>
        <div class="scholarship-cell">-</div>
        <div class="scholarship-cell">Above 970</div>
        <div class="scholarship-cell">950-969</div>
        <div class="scholarship-cell">920-949</div>
      </div>
      <div class="feeline"></div>
      <div class="scholarship-row">
        <div class="scholarship-cell hot">Scholarship</div>
        <div class="scholarship-cell">75%</div>
        <div class="scholarship-cell">50%</div>
        <div class="scholarship-cell">25%</div>
        <div class="scholarship-cell">10%</div>
      </div>
      <div class="feeins"></div>
      <footer>
        <h2>Instructions</h2>
        <ul class="instructions-list">
          <li>Preference in allotment of scholarship seats will be given to V-SAT'23 qualified candidates.</li>
          <li>25% of the total seats in each Department are reserved for scholarships.</li>
          <li>Out of that 25% seats with 75% scholarship, 10% seats with 50% scholarship and 10% seats with 25% scholarship.</li>
          <li>For Example, out of 50 seats, 3 seats with 75% scholarship, 6 seats with 50% scholarship and 6 seats with 25% scholarship.</li>
          <li>The scholarship seats are allotted in all programmes on the basis of merit, availability of seats and first come first served basis.</li>
          <li>The scholarship is applicable for four years of study subject to maintaining a minimum of 70% of marks in the preceding year(s) without any backlogs.</li>
        </ul>
      </footer>
    </div>

    <div id="examcet" class="content1">
 
      <div class="scholarship-row header-row">
        <div class="scholarship-cell hot">Rank</div>
        <div class="scholarship-cell">Below 10,000</div>
        <div class="scholarship-cell">10,001 - 20,000</div>
        <div class="scholarship-cell">20,001 - 35,000</div>
        <div class="scholarship-cell">35,001 - 40,000</div>
      </div>
      <div class="feeline"></div>
      <div class="scholarship-row">
        <div class="scholarship-cell hot">Scholarship</div>
        <div class="scholarship-cell">75%</div>
        <div class="scholarship-cell">50%</div>
        <div class="scholarship-cell">25%</div>
        <div class="scholarship-cell">10%</div>
      </div>
      <div class="feeins"></div>
      <footer>
        <h2>Instructions</h2>
        <ul class="instructions-list">
          <li>Preference in allotment of scholarship seats will be given to V-SAT'23 qualified candidates.</li>
          <li>25% of the total seats in each Department are reserved for scholarships.</li>
          <li>Out of that 25% seats with 75% scholarship, 10% seats with 50% scholarship and 10% seats with 25% scholarship.</li>
          <li>For Example, out of 50 seats, 3 seats with 75% scholarship, 6 seats with 50% scholarship and 6 seats with 25% scholarship.</li>
          <li>The scholarship seats are allotted in all programmes on the basis of merit, availability of seats and first come first served basis.</li>
          <li>The scholarship is applicable for four years of study subject to maintaining a minimum of 70% of marks in the preceding year(s) without any backlogs.</li>
        </ul>
      </footer>
    </div>
    <div id="neet" class="content1">
   
      <div class="scholarship-row header-row">
        <div class="scholarship-cell hot">Rank</div>
        <div class="scholarship-cell">Below 10,000</div>
        <div class="scholarship-cell">10,001 - 15,000</div>
        <div class="scholarship-cell">15,001 - 25,000</div>
        <div class="scholarship-cell">25,001 - 35,000</div>
      </div>
      <div class="feeline"></div>
      <div class="scholarship-row">
        <div class="scholarship-cell hot">Scholarship</div>
        <div class="scholarship-cell">75%</div>
        <div class="scholarship-cell">50%</div>
        <div class="scholarship-cell">25%</div>
        <div class="scholarship-cell">10%</div>
      </div>
      <div class="feeins"></div>
      <footer>
        <h2>Instructions</h2>
        <ul class="instructions-list">
          <li>Preference in allotment of scholarship seats will be given to V-SAT'23 qualified candidates.</li>
          <li>25% of the total seats in each Department are reserved for scholarships.</li>
          <li>Out of that 25% seats with 75% scholarship, 10% seats with 50% scholarship and 10% seats with 25% scholarship.</li>
          <li>For Example, out of 50 seats, 3 seats with 75% scholarship, 6 seats with 50% scholarship and 6 seats with 25% scholarship.</li>
          <li>The scholarship seats are allotted in all programmes on the basis of merit, availability of seats and first come first served basis.</li>
          <li>The scholarship is applicable for four years of study subject to maintaining a minimum of 70% of marks in the preceding year(s) without any backlogs.</li>
        </ul>
      </footer>
    </div>
    <div id="cbse" class="content1">
   
      <div class="scholarship-row header-row">
        <div class="scholarship-cell hot">Rank</div>
        <div class="scholarship-cell">-</div>
        <div class="scholarship-cell">Above 450</div>
        <div class="scholarship-cell">425 - 449</div>
        <div class="scholarship-cell">375 - 424</div>
      </div>
      <div class="feeline"></div>
      <div class="scholarship-row">
        <div class="scholarship-cell hot">Scholarship</div>
        <div class="scholarship-cell">75%</div>
        <div class="scholarship-cell">50%</div>
        <div class="scholarship-cell">25%</div>
        <div class="scholarship-cell">10%</div>
      </div>
      <div class="feeins"></div>
      <footer>
        <h2>Instructions</h2>
        <ul class="instructions-list">
          <li>Preference in allotment of scholarship seats will be given to V-SAT'23 qualified candidates.</li>
          <li>25% of the total seats in each Department are reserved for scholarships.</li>
          <li>Out of that 25% seats with 75% scholarship, 10% seats with 50% scholarship and 10% seats with 25% scholarship.</li>
          <li>For Example, out of 50 seats, 3 seats with 75% scholarship, 6 seats with 50% scholarship and 6 seats with 25% scholarship.</li>
          <li>The scholarship seats are allotted in all programmes on the basis of merit, availability of seats and first come first served basis.</li>
          <li>The scholarship is applicable for four years of study subject to maintaining a minimum of 70% of marks in the preceding year(s) without any backlogs.</li>
        </ul>
      </footer>
    </div>

    </div>

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
  <script src="https://maxcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/common.js"></script>
  
    <!-- <script>
      function vsat() {
        let apply = document.getElementById("vsat");
        apply.style.display = "block";
        let timetable = document.getElementById("jee");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("intermark");
        questionpaper.style.display = "none";
        let schemes = document.getElementById("examcet");
        schemes.style.display = "none";
        let neet = document.getElementById("neet");
        neet.style.display = "none";
        let cbse = document.getElementById("cbse");
        cbse.style.display = "none";
      }

      function jee() {
        let apply = document.getElementById("vsat");
        apply.style.display = "none";
        let timetable = document.getElementById("jee");
        timetable.style.display = "block";
        let questionpaper = document.getElementById("intermark");
        questionpaper.style.display = "none";
        let schemes = document.getElementById("examcet");
        schemes.style.display = "none";
        let neet = document.getElementById("neet");
        neet.style.display = "none";
        let cbse = document.getElementById("cbse");
        cbse.style.display = "none";
      }

      function intermark() {
        let apply = document.getElementById("vsat");
        apply.style.display = "none";
        let timetable = document.getElementById("jee");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("intermark");
        questionpaper.style.display = "block";
        let schemes = document.getElementById("examcet");
        schemes.style.display = "none";
        let neet = document.getElementById("neet");
        neet.style.display = "none";
        let cbse = document.getElementById("cbse");
        cbse.style.display = "none";
      }

      function examcet() {
        let apply = document.getElementById("vsat");
        apply.style.display = "none";
        let timetable = document.getElementById("jee");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("intermark");
        questionpaper.style.display = "none";
        let schemes = document.getElementById("examcet");
        schemes.style.display = "block";
        let neet = document.getElementById("neet");
        neet.style.display = "none";
        let cbse = document.getElementById("cbse");
        cbse.style.display = "none";
      }
      function neet() {
        let apply = document.getElementById("vsat");
        apply.style.display = "none";
        let timetable = document.getElementById("jee");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("intermark");
        questionpaper.style.display = "none";
        let schemes = document.getElementById("examcet");
        schemes.style.display = "none";
        let neet = document.getElementById("neet");
        neet.style.display = "block";
        let cbse = document.getElementById("cbse");
        cbse.style.display = "none";
      }
      function cbse() {
        let apply = document.getElementById("vsat");
        apply.style.display = "none";
        let timetable = document.getElementById("jee");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("intermark");
        questionpaper.style.display = "none";
        let schemes = document.getElementById("examcet");
        schemes.style.display = "none";
        let neet = document.getElementById("neet");
        neet.style.display = "none";
        let cbse = document.getElementById("cbse");
        cbse.style.display = "block";
      }
      vsat();
  </script> -->
  <script>
function handleClick(element, sectionId) {

const titles = document.querySelectorAll('.exam-nav-title');
titles.forEach(function(title) {
  title.classList.remove('color');
  title.querySelector('.hline').classList.remove('visible');
});

element.classList.add('color');
element.querySelector('.hline').classList.add('visible');

const contents = document.querySelectorAll('.content1');
contents.forEach(function(content) {
  content.classList.remove('active1');
});

const activeContent = document.getElementById(sectionId);
activeContent.classList.add('active1');}
  </script>

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
