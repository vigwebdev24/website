<?php 
$page = explode("/",$_SERVER['REQUEST_URI'])[3];
//echo $page;
$deptid =  $_GET['deptid'];
$school =  $_GET['school'];
$dptnm =  $_GET['deptnm'];
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, 
maximum-scale=1.0, user-scalable=no" />
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="dep_css/dep_mbl.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
       
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style>
    .menu-large {
        position: static !important;
    }

    .dropdown:hover #arrow path {
        fill: #992E00;
    }

    #social-arrow:hover path {
        fill: #992E00;
    }

    .collapse {
        display: none;
    }

    .navbar-collapse.in {
        overflow-y: auto;
    }

    .collapse.in {
        display: block;
    }

  
    </style>
</head>

<body>
    <div class="top-nav">
    <div style="width:90%;display:flex;flex-direction:column;">
<div class="language">
విజ్ఞాన శాస్త్ర సాంకేతిక పరిశోధనా సంస్థ / विज्ञान शास्त्र प्रौद्योगिकी और परिशोधन संगठन
</div>
        <span class="deemed">
        Deemed to be university - Estd. u/s 3 of UGC Act 1956
</span>

        </div>
        <ul class="topnav-ul elementnone-mbl">
           
            <li>
                <div class="dropdown">
                    <div class="dropdown_img-txt">
                        <div class="dropdown_topnavtxt"
                            onclick="window.open('https://internationaladmissions.vignan.ac.in/',  '_blank')">
                            International Students</div>

                    </div>

                </div>
            </li>
            <li>
                <a href="newstudent.php" target="_blank">
                    <div class="dropdown">
                        <div class="dropdown_img-txt">
                            <div class="dropdown_topnavtxt">New Student </div>

                        </div>

                    </div>
                </a>
            </li>
            <li>
                <div class="dropdown">
                    <a href="underconstruction.php" target="_blank">
                        <div class="dropdown_img-txt">
                            <div class="dropdown_topnavtxt">Parent </div>

                        </div>

                </div>
                </a>
            </li>
            <li><a href="https://vignan.ac.in/alumni/" target="_blank">
                    <div class="dropdown">
                        <div class="dropdown_img-txt">
                            <div class="dropdown_topnavtxt">Alumni </div>

                        </div>

                    </div>
                </a>
            </li>
            <li class="elementnone-mbl">
                <a href="https://outlook.office365.com/" target="_blank">
                    <div class="dropdown">
                        <div class="dropdown_img-txt">
                            <div class="dropdown_topnavtxt">Quick links </div>

                        </div>

                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="../assets/images/mobile-logo.webp" class="vignan-logo" id="mblheader" />
                <span class="prgmstr_sec1_deptnm" id="mblheader">CSE</span>
                <!-- <img src="assets/images/logo.png" class="vignan-logo"  id="mblheader">-->

                <div class="search-mbl" id="mblheader">
                    <!--<div class="search-box">
                        <button class="btn-search"> <img src="assets/icons/Search.png"  style="width:70%" /></button>
                        <input type="text" class="input-search" placeholder="Search" name="searchterm" id="searchterm">
                        <img src="assets/icons/cross.png"  class="cross" id="cross"   />
             </div>-->

                    <button type="button" class="navbar-toggle" id="togglenav" data-toggle="collapse"
                        data-target="navbar-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                </div>

                <!--   <a class="navbar-brand" href="#">Logo</a> -->

            </div>
            <div class="navbar-header" id="desktopheader">
                <img src="../assets/images/logo.svg" class="vignan-logo" />
               
                <!-- <img src="assets/images/logonew.png" class="vignan-logo" />
                <a class="navbar-brand clz-name" href="#" id="clznm"> <b class="vignan">VIGNAN'S</b><br>UNIVERSITY</a>-->
            </div>
            <div class="navbar-collapse collapse" id="mblnav">
                <ul class="nav navbar-nav header-ul">
                    <li class="<?php if($page == 'depthome.php'){ echo 'active';} ?>"><a href="depthome.php?deptid=<?php echo $deptid; ?>&school=<?php echo $school;?>&deptnm=<?php echo $dptnm;?>">Home</a></li>

                   <!-- <li class=" <?php if($page == 'programstructure.php'){ echo 'active';} ?>"><a
                            href="programstructure.php">Program</a></li>-->
                  
                 
                    <li class="<?php if($page == 'deptresearch.php'){ echo 'active';} ?>"><a href="deptresearch.php?deptid=<?php echo $deptid; ?>&school=<?php echo $school;?>&deptnm=<?php echo $dptnm;?>">Reserach</a></li>
                    <li class="dropdown menu-large "> <a href="# " class="dropdown-toggle "
                            data-toggle="dropdown ">People<svg xmlns="http://www.w3.org/2000/svg" id="arrow"
                                style="vertical-align: middle;" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <mask id="mask0_94_81" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="24" height="24">
                                    <rect width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_94_81)">
                                    <path
                                        d="M11.8577 15.0154L6 9.1577L7.1577 8L11.8577 12.7L16.5577 8L17.7154 9.1577L11.8577 15.0154Z"
                                        fill="#1C1B1F" />
                                </g>
                            </svg>
                        </a>
                        <ul class="dropdown-menu megamenu row ">
                            <li class="col-sm-3 ">
                                <ul>
                                    <li class="dropdown-header megamenu-hdr">People</li>
                                </ul>
                            </li>

                            <li class="col-sm-3 megamenu-div">
                                <ul class="megamenu-options">

                                    <li data-img="p-img8"><a href="deptpeople.php?deptid=<?php echo $deptid;?>&school=<?php echo $school;?>&deptnm=<?php echo $dptnm;?>"
                                            class="megamenu-options">Faculty</a>
                                        <div class="child-image">
                                            <img class="" src="../assets/images/faculty_img.png" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="p-img9"><a href="../people.php"
                                            class="megamenu-options">Students</a>
                                        <div class="child-image">
                                            <img class="" src="../assets/images/student_img.png" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="p-img10"><a href="../people.php" target="_blank"
                                            class="megamenu-options">Alumni</a>
                                        <div class="child-image">
                                            <img class="" src="../assets/images/faculty_img.png" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="p-img11"><a href="#"
                                            class="megamenu-options">Board of Studies</a>
                                        <div class="child-image">
                                            <img class="" src="../assets/images/student_img.png" alt="" />
                                        </div>
                                    </li>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="col-sm-3 hoverimg">
                        <ul>
                            <li id="p-img1"><img src="assets/images/faculty_img.png" alt=""></li>
                            <li id="p-img2"><img src="assets/images/student_img.png" alt=""></li>
                            <li id="p-img3"><img src="assets/images/faculty_img.png" alt=""></li>
                            <li id="p-img4"><img src="assets/images/student_img.png" alt=""></li>

                        </ul>
                    </li>-->

                </ul>
                </li>
                <li class=" <?php if($page == 'deptevents.php'){ echo 'active';} ?>"><a href="deptevents.php?deptid=<?php echo $deptid; ?>&school=<?php echo $school;?>&deptnm=<?php echo $dptnm;?>">Events</a></li>
                <li class=" <?php if($page == 'deptfacilities.php'){ echo 'active';} ?>"><a href="deptfacilities.php">Facilities</a></li>
                <li class=" <?php if($page == 'deptcontactus.php'){ echo 'active';} ?>"><a href="deptcontactus.php">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right elementnone-mbl nav-rghtdept" style="">
                <li>
                <button class="button_secondary Secondary-btn_txt">Apply Now</button></li>

                    <li>
                        <button class="btn-search" id="search"><img src="../assets/icons/search_square.webp" /></button>

                     
                    </li>
                </ul>
                <hr class="btnnone-mbl" style="
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 0.5px solid #cfc6c6;
">
                <ul class="top-nav btnnone-mbl top-navmblbg">
                    <li onclick="window.open('https://vignan.ac.in/hyd/',  '_blank')">
                        <div class="dropdown">
                            <div class="dropdown_img-txt">
                                <div class="dropdown_topnavtxt">HYD Campus</div>

                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <div class="dropdown_img-txt">
                                <div class="dropdown_topnavtxt"
                                    onclick="window.open('https://internationaladmissions.vignan.ac.in/',  '_blank')">
                                    International Students</div>

                            </div>

                        </div>
                    </li>
                    <li>
                        <a href="underconstruction.php" target="_blank">
                            <div class="dropdown">
                                <div class="dropdown_img-txt">
                                    <div class="dropdown_topnavtxt">New Student </div>

                                </div>

                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="underconstruction.php" target="_blank">
                                <div class="dropdown_img-txt">
                                    <div class="dropdown_topnavtxt">Parent </div>

                                </div>

                        </div>
                        </a>
                    </li>
                    <li><a href="https://vignan.ac.in/alumni/" target="_blank">
                            <div class="dropdown">
                                <div class="dropdown_img-txt">
                                    <div class="dropdown_topnavtxt">Alumni </div>

                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="elementnone-mbl">
                        <a href="https://outlook.office365.com/" target="_blank">
                            <div class="dropdown">
                                <div class="dropdown_img-txt">
                                    <div class="dropdown_topnavtxt">Webmail </div>

                                </div>

                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="search-box" id="search-show" style="display:none;">
                <img src="../assets/icons/search_square.webp" class="search-icon" />
                <input type="text" class="input-search" id="searchterm" value=""
                    placeholder=" What are you looking for?">
                <img src="../assets/icons/cross.png" class="cross" onclick="abortterm('searchterm')" />
                <div class="search-dropdowndiv">
                    <span class="search-in">IN</span>
                    <div class="search-separator"></div>
                    <select class="search-dropdown" name="search-dropdown" id="search-dropdown">
                        <option value="All" selected>All</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
        </div>
    </div>







    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- <script src="../js/common.js"></script> -->
    <script>
  //dropdown on  click //

$(document).ready(function() {
    // Show hide popover
    $(".dropdown").click(function() {
        $(this).find(".dropdown-menu").slideDown();
    });

    $(".dropdown-menu").on("mouseleave", function() {
        $(".dropdown-menu").slideUp("fast");

    });
});
    </script>
</body>

</html>