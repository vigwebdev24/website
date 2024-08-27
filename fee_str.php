<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>


  <!-- <link rel="stylesheet" href="css/iqac.css"> -->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/exam.css">
  <link rel="stylesheet" href="css/patents.css">
  <link rel="stylesheet" href="css/naac_card.css">
  <link rel="stylesheet" href="css/mblfooter.css">
  <link rel="stylesheet" href="css/fee_str.css">
  <!-- <link rel="stylesheet" href="css/department.css"> -->
 
 <link rel="stylesheet" href="css/scholarship.css"> 
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
  include_once 'navbar.php';

  ?>

  <div class="container home-div1">

    <div class="admission-container container1">
      <div class="patent-section">
      <div class="patent-subhead">ADMISSION</div>
      <div class="patent-head">
        <div class="patent-title">
        Fee Structure
        </div>
        <div class="patent-controls">
          <div class="patent-search">
            <div class="search-container">
              <img src="assets/icons/Search.png" class="search-icon-1" width="48px" height="48px" />
              <input type="text" placeholder="Search" name="searchterm" id="searchterm">
            </div>
          </div>
          <div class="patent-filter">
            <button class="filter_button_primary Ss-btn_txt" data-toggle="modal" data-target="#flipFlop">
              <img src="assets/icons/filter_list_white.png" />
              <div class="filter-button">
                Filter
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
           
      <div class="sep"></div>

      <div id="catA">
        <div class="exam-nav">
          <div class="exam-nav-leftbox">
            <div class="exam-nav-title color" onclick="catA()">Category A <div class="hline visible"></div>
            </div>
            <div class="exam-nav-title" onclick="catB()">Category B <div class="hline "></div>
            </div>
            <!-- <div class="exam-nav-title" onclick="catC()">Category C <div class="hline"></div>
            </div> -->

          </div>

        </div>
        <div class="admission-notice">
          Admission through V-SAT/EAMCET/JEE(Mains/Advanced)2023.
        </div>
        <div class="fee-details">
          <div class="fee-item"></div>
          <div class="fee-item">Admission Fee (Non refundable - 1st yr.)</div>
          <div class="fee-item2">Tuition Fee (Per year)</div>
        </div>


        <div class="course-fee-details">
          <div class="course-list">
            <div class="course-item">Computer Science and Engineering</div>
            <div class="course-item">CSE-Cyber Security</div>
            <div class="course-item">CSE-AI AND ML</div>
            <div class="course-item">CSE-Business Systems</div>
            <div class="course-item">CSE-Data Science</div>
            <div class="course-item">Information Technology</div>
          </div>
          <div class="fee-amount"> ₹ 20,000/-</div>
          <div class="fee-amount"> ₹ 2,60,000/-</div>
        </div>
        <div class="feeline"></div>

        <div class="course-fee-details">
          <div class="course-list">
            <div class="course-item">B.Sc. (Hons) Agriculture</div>
            <div class="course-item">Biotechnology*</div>
            <div class="course-item">Biomedical Engineering*</div>
            <div class="course-item">Bioinformatics*</div>
            <div class="course-item">Food Technology*</div>
            <div class="course-item">B. Pharmacy*</div>
            <div class="course-item">ECE</div>
          </div>
          <div class="fee-amount"> ₹ 20,000/-</div>
          <div class="fee-amount"> ₹ 1,80,000/-</div>
        </div>

        <div class="feeline"></div>

        <div class="course-fee-details">
          <div class="course-list">
            <div class="course-item">Agriculture Engineering</div>
            <div class="course-item">Chemical Engineering</div>
            <div class="course-item">Civil Engineering</div>
            <div class="course-item">EEE</div>
            <div class="course-item">Mechanical Engineering</div>
            <div class="course-item">Robotics and Automation</div>
            <div class="course-item">Textile Technology</div>
          </div>
          <div class="fee-amount"> ₹ 20,000/-</div>
          <div class="fee-amount"> ₹ 1,00,000/-</div>
        </div>
        <div class="feeline"></div>
        <div class="note">
          * Bi.P.C Students are also eligible for admission into these programmes.<br>Tuition fee can be paid in two
          installments semester wise.
        </div>
        <div>
        <div class="download-section">
          
          <div class="download-label">Download</div>
          
          <img loading="lazy"
            src="assets/icons/download_icon.svg"
            class="download-icon" />
            
        </div>
        <div class="borderline"></div>  
        </div>
      </div>

      <!-- category B Start -->
      <div id="catB">
        <div class="exam-nav">
          <div class="exam-nav-leftbox">
            <div class="exam-nav-title color" onclick="catA()">Category A <div class="hline "></div>
            </div>
            <div class="exam-nav-title" onclick="catB()">Category B <div class="hline visible"></div>
            </div>
            <!-- <div class="exam-nav-title" onclick="catC()">Category C <div class="hline"></div>
            </div> -->

          </div>

        </div>
        <div class="admission-notice">
        Open for candidates who have above 60% aggregate marks in the +2/intermediate examination of AP and TS.(Terms and conditions apply).
        </div>
        <div class="fee-details">
          <div class="fee-item"></div>
          <div class="fee-item">Admission Fee (Non refundable - 1st yr.)</div>
          <div class="fee-item">Tuition Fee (Per year)</div>
        </div>


        <div class="course-fee-details">
          <div class="course-list">
            <div class="course-item">Computer Science and Engineering</div>
            <div class="course-item">CSE-Cyber Security</div>
            <div class="course-item">CSE-AI AND ML</div>
            <div class="course-item">CSE-Business Systems</div>
            <div class="course-item">CSE-Data Science</div>
            <div class="course-item">Information Technology</div>
          </div>
          <div class="fee-amount"> ₹ 20,000/-</div>
          <div class="fee-amount"> ₹ 3,60,000/-</div>
        </div>
        <div class="feeline"></div>

        <div class="course-fee-details">
          <div class="course-list">
            <div class="course-item">B.Sc. (Hons) Agriculture</div>
            <div class="course-item">Biotechnology*</div>
            <div class="course-item">Biomedical Engineering*</div>
            <div class="course-item">Bioinformatics*</div>
            <div class="course-item">Food Technology*</div>
            <div class="course-item">B. Pharmacy*</div>
            <div class="course-item">ECE</div>
          </div>
          <div class="fee-amount"> ₹ 20,000/-</div>
          <div class="fee-amount"> ₹ 2,80,000/-</div>
        </div>

        <div class="feeline"></div>

        <div class="course-fee-details">
          <div class="course-list">
            <div class="course-item">Agriculture Engineering</div>
            <div class="course-item">Chemical Engineering</div>
            <div class="course-item">Civil Engineering</div>
            <div class="course-item">EEE</div>
            <div class="course-item">Mechanical Engineering</div>
            <div class="course-item">Robotics and Automation</div>
            <div class="course-item">Textile Technology</div>
          </div>
          <div class="fee-amount"> ₹ 20,000/-</div>
          <div class="fee-amount"> ₹ 2,00,000/-</div>
        </div>
        <div class="feeline"></div>
        <div class="note">
          * Bi.P.C Students are also eligible for admission into these programmes.<br>Tuition fee can be paid in two
          installments semester wise.
        </div>
        <div>
        <div class="download-section">
          
          <div class="download-label">Download</div>
          
          <img loading="lazy"
          src="assets/icons/download_icon.svg"
          class="download-icon" />
            
        </div>
        <div class="borderline"></div>  
        </div>
        </div>
       <!-- category B end -->
       <!-- category C start -->
     
        <!-- category C end -->




      <div class="divmargin-bottom"></div>

      <!-- footer starts here -->
      <div id="mblftr">
        <?php
        include_once 'mblfooter.php';
        ?>
      </div>
      <div id="ftr">
        <?php
        include_once 'footer.php';
        ?>
      </div>
      <!-- footer ends here -->

    </div>
    </div>
    <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
                    <div class="modal-bydept">BY departments <button class="filterbtn-search" id="filtersearch"><img
                                src="assets/icons/search_square.webp" class="search-icn" /></button></div>

                    <div class="search-box filtersearch-box" id="filtersearch-show" style="display:none;">
                        <img src="assets/icons/search_square.webp" class="filtersearch-icon" />
                        <input type="text" class="input-search filterinput-search" id="searchterm" value=""
                            placeholder="" onkeyup="filterFunction()">
                        <img src="assets/icons/cross.png" class="filter-cross" onclick="abortterm('searchterm')" />

                    </div>
                    <div class="selectontxt-div" id="selectiondiv" style="display:none;">
                        <div class="selectontxt-innrdiv">
                            <div class="selecte_no"><span id="selected"></span> Selected</div>
                        </div>
                    </div>
                    <ul class="modal_ul" id="depul">
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="acse" id="acse" class="dept" name="dept[]">
                                    Advanced Computer Science Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="aiml" id="aiml" class="dept" name="dept[]">
                                    ACSE - Artificial Intelligence and Machine
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="cs" id="cs" class="dept" name="dept[]">
                                    ACSE - Cyber Security
                                </label>
                            </div>

                        </li>

                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="csbs" id="csbs" class="dept" name="dept[]">
                                    ACSE - Computer Science and Business
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="ds" id="ds" class="dept" name="dept[]">
                                    ACSE - Data Science
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="agri" id="agri" class="dept" name="dept[]">
                                    Agri. & Horti. Sciences
                                </label>
                            </div>

                        </li>

                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="ae" id="ae" class="dept" name="dept[]">
                                    Applied Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="age" id="age" class="dept" name="dept[]">
                                    Agriculture Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="ame" id="ame" class="dept" name="dept[]">
                                    Automobile Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="bt" id="bt" class="dept" name="dept[]">
                                    BioTechnology
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="bi" id="bi" class="dept" name="dept[]">
                                    BioInformatics
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="bme" id="bme" class="dept" name="dept[]">
                                    Biomedical Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="bme" id="bme" class="dept" name="dept[]">
                                    Biomedical Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="bscagri" id="agri" class="dept" name="dept[]">
                                    B.Sc. (Hons) Agriculture
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="chem" id="chem" class="dept" name="dept[]">
                                    Chemical Engineering
                                </label>
                            </div>

                        </li>

                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="civil" id="civil" class="dept" name="dept[]">
                                    Civil Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="cse" id="cse" class="dept" name="dept[]">
                                    Computer Science Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="chmstry" id="chmstry" class="dept" name="dept[]">
                                    Dept. of Chemistry
                                </label>
                            </div>
                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="eng" id="eng" class="dept" name="dept[]">
                                    Dept. of English
                                </label>
                            </div>
                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="maths" id="maths" class="dept" name="dept[]">
                                    Dept. of Mathematics
                                </label>
                            </div>
                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="phy" id="phy" class="dept" name="dept[]">
                                    Dept. of Physics
                                </label>
                            </div>
                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="ssh" id="ssh" class="dept" name="dept[]">
                                    Dept. of Science & Humanities
                                </label>
                            </div>
                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="ece" id="ece" class="dept" name="dept[]">
                                    Electronics And Communication Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="eee" id="eee" class="dept" name="dept[]">
                                    Electrical And Electronics Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="food" id="food" class="dept" name="dept[]">
                                    Food Technology
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="it" id="it" class="dept" name="dept[]">
                                    Information Technology
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="law" id="law" class="dept" name="dept[]">
                                    LAW
                                </label>
                            </div>

                        </li>

                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="mech" id="mech" class="dept" name="dept[]">
                                    Mechanical Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="mba" id="mba" class="dept" name="dept[]">
                                    Management Studies
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="pet" id="pet" class="dept" name="dept[]">
                                    Petroleum Engineering
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="pharma" id="pharma" class="dept" name="dept[]">
                                    Pharmacetuical Sciences
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="rae" id="rae" class="dept" name="dept[]">
                                    Robotic & Automation
                                </label>
                            </div>

                        </li>
                        <li class="modal_listbrdr">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="tt" id="tt" class="dept" name="dept[]">
                                    Textile Technology
                                </label>
                            </div>

                        </li>
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






    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>
    <script>
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
    let dept = [];
    $('.dept').on('click', function() {
        console.log($(this).val());
        var depul = document.getElementById('depul');
        depul.style.height = '74%';

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
        const input = document.getElementById("searchterm");

        const filter = input.value.toUpperCase();

        const div = document.getElementById("depul");
        const optn = div.getElementsByTagName("li");

        for (let i = 0; i < optn.length; i++) {
            txtValue = optn[i].textContent || optn[i].innerText;
            console.log(txtValue.toUpperCase().indexOf(filter));
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                optn[i].style.display = "";
            } else {
                optn[i].style.display = "none";
            }
        }
    }
    $(document).ready(function() {
        $('.panel-title > a').each(function() {
            // Check if the panel is initially open
            if ($(this).attr('aria-expanded') === 'true') {
                $(this).parent().addClass('border-visible');
            }
        });

        $('.panel-title > a').click(function() {
            // Toggle the display of the bottom border
            $(this).parent().toggleClass('border-visible');
        });
    });
    </script>

    <script>
    
      function catA() {
        let apply = document.getElementById("catA");
        apply.style.display = "block";
        let timetable = document.getElementById("catB");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("catC");
        questionpaper.style.display = "none";
        
      }

      function catB() {
        let apply = document.getElementById("catA");
        apply.style.display = "none";
        let timetable = document.getElementById("catB");
        timetable.style.display = "block";
        let questionpaper = document.getElementById("catC");
        questionpaper.style.display = "none";
        
      }

      function catC() {
        let apply = document.getElementById("catA");
        apply.style.display = "none";
        let timetable = document.getElementById("catB");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("catC");
        questionpaper.style.display = "block";
        
      }
      catA();


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