
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
.search-input{
  background-color: #F2F1ED !important;
}

</style>

<script>
    
    function toggleSearchInput() {
      const searchInput = document.getElementById('search-input');
      searchInput.classList.toggle('show');
      if (searchInput.classList.contains('show')) {
        searchInput.focus();
      }
    }
  
      </script>

<body>
    <?php
include_once 'connect.php';
include_once  'navbar.php';
$sql = "SELECT * FROM programs where page='' and program_type ='ug' or program_type ='pg' or program_type ='phd' or program_type ='dip'";

$result=mysqli_query($conn, $sql);
	$result1=mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result1, MYSQLI_ASSOC);
$ug = array();
	$dip = array();
$pg = array();
$phd = array();

$ugc=0;
$dipc=0;
$pgc=0;
$phdc=0;

if (mysqli_num_rows($result) > 0) {
   
    while ($row = mysqli_fetch_assoc($result)) {
      if($row['program_type']=='ug'){
        $ug[] = $row;
        $ugc=$ugc+1;
      }else  if($row['program_type']=='dip'){
        $dip[] = $row;
        $dipc=$dipc+1;
      }
           else if($row['program_type']=='pg'){
        $pg[] = $row;
        $pgc=$pgc+1;
      }
      else if ($row['program_type']=='phd'){
        $phd[] = $row;
        $phdc=$phdc+1;
      }

    }
} else {
    echo "No program found.";
}





?>
<div class="container home-div1">

<div class="academics-container">
  <div class="academics-info">
    <h1 class="academics-title">Academics</h1>
    <h2 class="academics-subtitle">Programs</h2>
  </div>
  <div class="search-filter-container" >
    <div class="search-container">
      <span class="search-input-container">
      <img src="assets/svgicons/search.svg" alt="" class="prog-search-icon" />
       
        <input type="text" class="search-input" id="searchprg"  onchange="handleSearch()" placeholder="Search for Programs" autofocus/>
</span>
      
      <div class="search-divider"></div>
    </div>
    <button class="filter-button" data-toggle="modal" data-target="#flipFlop">
      <img src="assets/svgicons/filter_list.svg" alt="" class="filter-icon" />
      <span class="filter-text">Filter</span>
    </button>
  </div>
</div>
<div class="sep"></div>
	
	<div id="resultprog"></div>

          <div class="program-div-36 ug-prog">
            <div class="program-div-37">Under Graduate Program</div>
            <div class="program-div-38">
              <div class="program-div-39" onclick="ufee()" >Fee Details</div>
              <div class="program-div-40" onclick="uapply()">Apply Now</div>
            </div>
          </div>

          <div class="margin-top"></div>
        
     


<div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($ug as $row) { ?>
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
      <div class="course-cta-divider"></div>
    </div>
    <?php } ?>
  </div>
</div>

<div class="sep"></div>

          

<div class="program-div-36 ug-prog pg">
            <div class="program-div-37">Post Graduate Program</div>
            <div class="program-div-38">
              <div class="program-div-39" onclick="pgfee()">Fee Details</div>
              <div class="program-div-40" onclick="pgapply()">Apply Now</div>
            </div>
</div>
<div class="margin-top"></div>
<div class="course-cards-container">
  <div class="course-cards">
  <?php foreach ($pg as $row) { ?>
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
      <div class="course-cta-divider"></div>
    </div>
    <?php } ?>
  </div>
</div>

	
	   <div class="program-div-36 ug-prog">
            <div class="program-div-37">Diploma Program</div>
            <div class="program-div-38">
              <div class="program-div-39" onclick="ufee()" >Fee Details</div>
              <div class="program-div-40" onclick="uapply()">Apply Now</div>
            </div>
          </div>

          <div class="margin-top"></div>
        
     


  <div class="course-cards">
  <?php foreach ($dip as $row) { ?>
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
      <div class="course-cta-divider"></div>
    </div>
    <?php } ?>
  </div>


       

<div class="sep"></div>

          <div class="program-div-36 ug-prog">
            <div class="program-div-37">P.HD</div>
            <div class="program-div-38">
              <div class="program-div-39" onclick="phdfee()">Fee Details</div>
              <div class="program-div-40"  onclick="phdapply()">Apply Now</div>
            </div>
          </div>
          <div class="margin-top"></div>


  <div class="course-cards">
  <?php foreach ($phd as $row) { ?>
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
      <div class="course-cta-divider"></div>
    </div>
    <?php } ?>
  </div>

  <div class="footer-margin-top" style="margin-top:180px"></div>

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
	
	  <!-- The modal -->
<?php 
$sqldept = "SELECT dept_name, dept_short_name FROM department";
//$result1=mysqli_query($conn, $sql);
$resultdept=mysqli_query($conn, $sqldept);
?>

  <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="filter-dialog" role="document">
                    <div class="filter-modal_content">
                        <div class="modal-header filtermodal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="assets/icons/cross_big.png">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                            <h4 class="filter-modaltitle" id="modalLabel">Filter</h4>
                        </div>
                        <div class="modal-body filtermodal-body">
                            <div class="modal-bydept">BY departments <button class="filterbtn-search"
                                    id="filtersearch"><img src="assets/icons/search_square.webp"
                                        class="search-icn" /></button></div>

                            <div class="search-box filtersearch-box" id="filtersearch-show" style="display:none;">
                                <img src="assets/icons/search_square.webp" class="filtersearch-icon" />
                                <input type="text" class="input-search filterinput-search" id="deptsearchterm" value=""
                                    placeholder="" onkeyup="filterFunction()">
                                <img src="assets/icons/cross.png" class="filter-cross"
                                    onclick="abortterm('deptsearchterm')" />

                            </div>
                            <div class="selectontxt-div" id="selectiondiv" style="display:none;">
                                <div class="selectontxt-innrdiv">
                                    <div class="selecte_no"><span id="selected"></span> Selected</div>


                                </div>
                            </div>
                            <ul class="modal_ul" id="depul">
                            <?php  if(mysqli_num_rows($resultdept) > 0){
                while ($dept = $resultdept->fetch_assoc()) { 	?>
                     <li class="modal_listbrdr">

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="<?php echo $dept['dept_short_name']; ?>" id="<?php echo $dept['dept_short_name']; ?>" class="dept" name="dept[]">
                                <?php echo $dept['dept_name']; ?>
                            </label>
                        </div>

                        </li>
                        <?php } }?>
                              





                            </ul>
                            <!-- <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 13px; display: inline-flex">
                                        <div style="align-self: stretch; justify-content: space-between; align-items: flex-end; display: inline-flex">
                                            <div style="flex: 1 1 0; color: black; font-size: 16px; font-family: Familjen Grotesk; font-weight: 400; line-height: 22.40px; word-wrap: break-word">Advanced Computer Science Engineering</div>
                                           <input style="width: 20px; height: 20px; position: relative; border-radius: 2px; overflow: hidden; border: 1px black solid" type="checkbox" id=""  name="" />
                                            
                                        </div>
                                        <div style="align-self: stretch; height: 0px; border: 1px #E6E6E6 solid"></div>
                                    </div> -->


                        </div>
                        <div class="modal-footer filter-footer">

                            <button class="button_primary filtermodal-btn_txt modal-btn">Apply Filter</button>
                            <button class="button_secondary filtermodal-btn_txt2 modal-btn" onclick="clearall()">Clear
                                All</button>
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>

                </div>
            </div>

            <!-- The modal end -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	var data = '';
  $(document).ready(function() {

    <?php $json = json_encode($data); ?>
    data = <?=$json?>;
	console.log(data);
  });
  function ufee(){
    window.open('fee_str.php', '_blank');
  }
  function uapply(){
    window.open('https://admissions2024.vignan.ac.in/', '_blank');
  }
  function pgfee(){
    window.open('https://vignan.ac.in/feesmtech.php', '_blank');
  }
  function pgapply(){
    window.open('https://admissions2024.vignan.ac.in/', '_blank');
  }
  function phdfee(){
    window.open('https://vignan.ac.in/pdf/latest_fee_structure_for_foreign_students.pdf', '_blank');
  }
  function phdapply(){
    window.open('https://admissions2024.vignan.ac.in/', '_blank');
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
	
	
	  // For search field
  
  function toggleSearchInput() {
    const searchInput = document.getElementById('search-input');
    searchInput.classList.toggle('show');
    if (searchInput.classList.contains('show')) {
      searchInput.focus();
    }
  }

  $('#filtersearch').click(function() {
            //$('#filtersearch').css('display', 'none');
            $("#filtersearch-show").slideToggle();
            $('#filtersearch-show').css('display', 'flex');

            //    $(".search-box").slideDown("slow");
        })

        function clearall() {
            console.log('clearall');
            $('input:checked').removeAttr('checked');
            $('.smallchip-div').css('display', 'none');
            $("#selected").text($('input[name=lineup]:checked').length);
            //  $('input:checked').attr('checked', false); // Unchecks it
        }

        $('.filterbtn-search').on('click', function() {
            console.log('test');
             var depul = document.getElementById('depul');
             console.log(depul);
            depul.style.height = '74%';

        });


        let dept = [];
        $('.dept').on('click', function() {
            console.log($(this).val());
            var depul = document.getElementById('depul');
            depul.style.height = '62%';

            var deptnm = $(this).val();
            console.log(jQuery.inArray(deptnm, dept) === -1);

            if (jQuery.inArray(deptnm, dept) === -1) {
                $(".dept:checked").each(function() {
                    //$(".dept:checked").removeAttr('checked');

                    dept.push(deptnm);
                    dept = dept.filter((item,
                        index) => dept.indexOf(item) === index);


                });
            } else {
                console.log('remove');
                const branchindex = dept.indexOf(deptnm);
                console.log(branchindex);
                dept.splice(branchindex, 1);
                closechip(deptnm);
                // dept.filter((item,
                // index) =>array.splice(index, 1));
            }
            console.log(dept);
            $('#selectiondiv').css('display', 'inline-flex');
            $("#selected").text(dept.length);
            $('.selecte_no').append(` <div class="smallchip-div" id=` + deptnm + `>
                                                <div class="smallchip-txt">` + deptnm +
                ` </div>
                                                <div class="forward_arrw">
                                                    <img src="assets/icons/cross.png" class="img-size" onclick="closechip(` +
                deptnm + `)" />
                                                </div>
                                            </div>`);
            //  dept.pop();
        });

        function closechip(chipid) {
            console.log(chipid);
            //  console.log(chipid[0].id);
            var chip = document.getElementById(chipid[0].id);
            console.log(chip);
            if (chip == null) {
                $('#' + chip + ':checked').removeAttr('checked');
                document.getElementById(chipid).style.display = 'none';
                console.log($('input[name="dept[]"]:checked').length);
                $("#selected").text($('input[name="dept[]"]:checked').length);
                chip.style.display = 'none';
            } else {
                $('#' + chip.id + ':checked').removeAttr('checked');
                chip.style.display = 'none';
                console.log($('input[name="dept[]"]:checked').length);
                $("#selected").text($('input[name="dept[]"]:checked').length);
            }
            // console.log(chip.id);
            //console.log($('#'+chip.id+':checked'));

            //$('#mech').prop('checked', false);
        }

        function filterFunction() {
            const input = document.getElementById("deptsearchterm");

            const filter = input.value.toUpperCase();

            const div = document.getElementById("depul");
            const optn = div.getElementsByTagName("li");

            for (let i = 0; i < optn.length; i++) {
                txtValue = optn[i].textContent || optn[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    optn[i].style.display = "";
                } else {
                    optn[i].style.display = "none";
                }
            }
        }
	
	
	  function handleSearch () {
    //event.preventDefault();
    // Get the search terms from the input field
    var searchTerm = document.getElementById("searchprg").value;

    var tokens = searchTerm
                  .toLowerCase()
                  .split(' ')
                  .filter(function(token){
                    return token.trim() !== '';
                  });


                  if(tokens.length) {
    //  Create a regular expression of all the search terms
    var searchTermRegex = new RegExp(tokens.join('|'), 'gim');

    var filteredList = data.filter(function(d){

      // Create a string of all object values
      var dtString = '';
      for(var key in d) {
		 console.log(d[key] != null);
        if(d.hasOwnProperty(key) && d[key] !== '' && d[key] != null) {
			
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

if(data.length > 1){
var prgHTMLString = `<div class="course-cards-container">
<div class="course-cards">`;
data.forEach(prog => {

  prgHTMLString += ` <div class="course-card">
                    <div class="course-name">`+prog.title +`</div>
                    <div class="course-details">
                    `+prog.descr +`
                      <br />
                      `+prog.duration +`
                    </div>
                    <div class="course-cta">
                    <a class="a" href= `+prog.btn_hlink +` target="_blank"><div class="course-cta-text"> `+prog.btn_nm +`</div></a>
                      <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
                    </div>
                    <div class="course-cta-divider"></div>
                  </div>`;



});
prgHTMLString += `</div>
</div>
<div class="sep"></div>`;

 searchresult.innerHTML = prgHTMLString;
// var prgHTMLString = `<div class="course-cards-container" style="display: block;">
// <div class="course-cards">`

 console.log(prgHTMLString);
}else{
    var prgHTMLString = `<div class="course-cards-container" style="display: block;">
    <div class="course-cards">`+
      data.map(function(prog){
        return  `
    <div class="course-card">
      <div class="course-name">`+prog.title +`</div>
      <div class="course-details">
      `+prog.descr +`
        <br />
        `+prog.duration +`
      </div>
      <div class="course-cta">
      <a class="a" href= `+prog.btn_hlink +` target="_blank"><div class="course-cta-text"> `+prog.btn_nm +`</div></a>
        <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
      </div>
      <div class="course-cta-divider"></div>
    </div>
      </div>
</div>
<div class="sep"></div>`


      }).join('');
      
console.log(prgHTMLString);
      searchresult.innerHTML = prgHTMLString;
}

  }
  </script>