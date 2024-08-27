
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
.course-card{
  height: 180px;
}

.search-input{
  background-color: #F2F1ED !important;
}

.course-cta-divider{
  width: 150px !important;
}


</style>
<script>
    
    window.onload = function() {
    var inputField = document.getElementById("search");

    inputField.focus();
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
    <h2 class="academics-subtitle">calendars</h2>
  </div>
  <div class="search-filter-container">
    <div class="search-container">
      <span class="search-input-container">
      <img src="assets/svgicons/search.svg" alt="" class="prog-search-icon" />
       
        <input type="text" class="search-input"  id="searchprg" onchange="handleSearch()"  placeholder="Search for Programs" autofocus/>
</span>
      
      <div class="search-divider"></div>
    </div>
   <!-- <button class="filter-button">
      <img src="assets/svgicons/filter_list.svg" alt="" class="filter-icon" />
      <span class="filter-text">Filter</span>
    </button>-->
  </div>
</div>
<div class="sep"></div>
	
	 <div id="resultprog"></div>

          <div class="program-div-36 ug-prog">
            <div class="program-div-37">Diploma Courses</div>
            <!-- <div class="program-div-38">
              <div class="program-div-39">Fee Details</div>
              <div class="program-div-40">Apply Now</div>
            </div> -->
          </div>

          <div class="margin-top" style="margin-top:49px"></div>
          <?php
      $sql = "SELECT * FROM programs where id like 'cal%'";

      $result=mysqli_query($conn, $sql);
	$result1 = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result1, MYSQLI_ASSOC);

      $diploma = array();
      $btech= array();
      $bsc = array();
      $msc = array();
      $mtech= array();
      $other = array();
      $diplomac=0;
      $btechc=0;
      $bscc=0;
      $mscc=0;
      $mtechc=0;
      $otherc=0;

      if (mysqli_num_rows($result) > 0) {
         
          while ($row = mysqli_fetch_assoc($result)) {
            if($row['program_type']==='diploma'){
              $diploma[] = $row;
              $diplomac=$diplomac+1;
            }
            else if($row['program_type']=='btech'){
              $btech[] = $row;
              $btechc=$btechc+1;
            }
            else if ($row['program_type']=='bsc'){
              $bsc[] = $row;
              $bscc=$bscc+1;
            }
            else if($row['program_type']=='msc'){
              $msc[] = $row;
              $mscc=$mscc+1;
            }
            else if($row['program_type']=='mtech'){
              $mtech[] = $row;
              $mtechc=$mtechc+1;
            }
            else if($row['program_type']=='other'){
              $other[] = $row;
              $otherc=$otherc+1;
            }

          }
      } else {
          echo "No program found.";
      }
      

?>


<div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($diploma as $row) { ?>
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      
      <div class="course-cta">
      <a class="a" href=<?php echo $row['btn_hlink']?> target="_blank"><div class="course-cta-text"><?php echo $row['btn_nm']?></div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider"></div>
    </div>
    <?php } ?>
  </div>
</div>

<div class="sep"></div>

         

<div class="program-div-36 ug-prog pg">
            <div class="program-div-37">Bachelor of Technology</div>
            <!-- <div class="program-div-38">
              <div class="program-div-39">Fee Details</div>
              <div class="program-div-40">Apply Now</div>
            </div> -->
</div>
<div class="margin-top" style="margin-top:25px"></div>
<div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($btech as $row) { ?>
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      
      <div class="course-cta">
      <a class="a" href=<?php echo $row['btn_hlink']?> target="_blank"><div class="course-cta-text"><?php echo $row['btn_nm']?></div></a>
        
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider"></div>
    </div>
    <?php } ?>
  </div>
</div>


<div class="sep"></div>

          <div class="program-div-36 ug-prog">
            <div class="program-div-37">B.Sc</div>
            <!-- <div class="program-div-38">
              <div class="program-div-39">Fee Details</div>
              <div class="program-div-40">Apply Now</div>
            </div> -->
          </div>
          <div class="margin-top"></div>

<div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($bsc as $row) { ?>
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      
      <div class="course-cta">
      <a class="a" href=<?php echo $row['btn_hlink']?> target="_blank"><div class="course-cta-text"><?php echo $row['btn_nm']?></div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider"></div>
    </div>
    <?php } ?>
  </div>
</div>

  
  <div class="sep"></div>

          <div class="program-div-36 ug-prog">
            <div class="program-div-37">M.Sc</div>
            <!-- <div class="program-div-38">
              <div class="program-div-39">Fee Details</div>
              <div class="program-div-40">Apply Now</div>
            </div> -->
          </div>
          <div class="margin-top"></div>

  <div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($msc as $row) { ?>
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      
      <div class="course-cta">
      <a class="a" href=<?php echo $row['btn_hlink']?> target="_blank"><div class="course-cta-text"><?php echo $row['btn_nm']?></div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider"></div>
    </div>
    <?php } ?>
  </div>
</div>


  <div class="sep"></div>

          <div class="program-div-36 ug-prog">
            <div class="program-div-37">Master of Technology</div>
            
          </div>
          <div class="margin-top"></div>

  <div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($mtech as $row) { ?>
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      
      <div class="course-cta">
      <a class="a" href=<?php echo $row['btn_hlink']?> target="_blank"><div class="course-cta-text"><?php echo $row['btn_nm']?></div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider"></div>
    </div>
    <?php } ?>
  </div>
</div>

  <div class="sep"></div>

          <div class="program-div-36 ug-prog">
            <div class="program-div-37">others</div>
           
          </div>
          <div class="margin-top"></div>
  <div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($other as $row) { ?>
    <div class="course-card">
      <div class="course-name"><?php echo  $row["title"] ?></div>
      
      <div class="course-cta">
      <a class="a" href=<?php echo $row['btn_hlink']?> target="_blank"><div class="course-cta-text"><?php echo $row['btn_nm']?></div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider"></div>
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
	 var data = '';
    $(document).ready(function() {

      <?php $json = json_encode($data); ?>
      data = <?= $json ?>;
	  console.log(data);
    });
	
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
	
	
    function handleSearch() {
      //event.preventDefault();
      // Get the search terms from the input field
      var searchTerm = document.getElementById("searchprg").value;

      var tokens = searchTerm
        .toLowerCase()
        .split(' ')
        .filter(function(token) {
          return token.trim() !== '';
        });


      if (tokens.length) {
        //  Create a regular expression of all the search terms
        var searchTermRegex = new RegExp(tokens.join('|'), 'gim');

        var filteredList = data.filter(function(d) {


          // Create a string of all object values || d[key] !== null
          var dtString = '';
          for (var key in d) {
          
            if (d.hasOwnProperty(key) && d[key] !== '' && d[key] !== null) {

              dtString += d[key].toString().toLowerCase().trim() + ' ';
            }
          }
          // Return book objects where a match with the search regex if found
          return dtString.match(searchTermRegex);
        });
        // Render the search results
        render(filteredList);
      }
    }

    var render = function(data) {
      var searchresult = document.getElementById('resultprog');

      if (data.length > 1) {
      
        var clndrHTMLString = `<div class="course-cards-container">
<div class="course-cards">`;
        data.forEach(clndr => {
console.log(clndr);

          clndrHTMLString += ` <div class="course-card">
                    <div class="course-name">` + clndr.title + `</div>
                   
                    <div class="course-cta">
                    <a class="a" href= ` + clndr.btn_hlink + ` target="_blank"><div class="course-cta-text"> ` + clndr.btn_nm + `</div></a>
                      <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
                    </div>
                    <div class="course-cta-divider"></div>
                  </div>`;



        });
        clndrHTMLString += `</div>
</div>
<div class="sep"></div>`;

        searchresult.innerHTML = clndrHTMLString;
        // var prgHTMLString = `<div class="course-cards-container" style="display: block;">
        // <div class="course-cards">`

       
      } else {
        var clndrHTMLString = `<div class="course-cards-container" style="display: block;">
    <div class="course-cards">` +
          data.map(function(clndr) {
            return `
    <div class="course-card">
      <div class="course-name">` + clndr.title + `</div>
     
      <div class="course-cta">
      <a class="a" href= ` + clndr.btn_hlink + ` target="_blank"><div class="course-cta-text"> ` + clndr.btn_nm + `</div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider"></div>
    </div>
      </div>
</div>
<div class="sep"></div>`


          }).join('');

        searchresult.innerHTML = clndrHTMLString;
      }

    }
  </script>