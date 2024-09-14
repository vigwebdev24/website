<?php 
$page = explode("/",$_SERVER['REQUEST_URI'])[2];

?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, 
maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Vignan University</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/navbar.css?<?php echo time()?>">
		 <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/mobile.css">
	<link rel="stylesheet" href="css/media_query.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
        <link rel="icon" href="https://vignan.ac.in/newvignan/images/favicon.svg" type="image/svg">
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
        <div class="about-college">
            <div class="college-info"> విజ్ఞాన శాస్త్ర సాంకేతిక పరిశోధనా సంస్థ / विज्ञान शास्त्र प्रौद्योगिकी और परिशोधन संगठन
            </div>
           <!-- <span class="deemed">
            (Deemed to be university - Estd. u/s 3 of UGC Act 1956)
            </span>-->
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
                <a href="newstudent.php">
                    <div class="dropdown">
                        <div class="dropdown_img-txt">
                            <div class="dropdown_topnavtxt">New Student </div>

                        </div>

                    </div>
                </a>
            </li>
            <li>
                <div class="dropdown">
                    <a href="newparents.php">
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
              
                    <div class="dropdown">
                        <div class="dropdown_img-txt">
                            <div class="dropdown_topnavtxt ql">Quick links 
                            <svg
                                xmlns="http://www.w3.org/2000/svg" id="arrow" style="vertical-align: middle;" width="24"
                                height="24" viewBox="0 0 24 24" fill="none">
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
                            <div class="dropdown-content">
    <a href="https://vignan.ac.in/hyd/" target="_blank">Hyd (Off Campus)</a>
    <a href="https://outlook.office.com/" target="_blank">Webmail</a>
    <a href="iqac.php">IQAC</a>
  </div>
</div>
                            </div>

                        </div>

                    </div>
              
            </li>
        </ul>
    </div>

    <div class="navbar navbar-default navbar-static-top" >
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="assets/images/mobile-logo.svg" class="vignan-logo" id="mblheader" />
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
                <img src="assets/images/Logo with Deemed.svg" class="vignan-logo desktop-logo" />
                <!-- <img src="assets/images/logonew.png" class="vignan-logo" />
                <a class="navbar-brand clz-name" href="#" id="clznm"> <b class="vignan">VIGNAN'S</b><br>UNIVERSITY</a>-->
            </div>
            <div class="navbar-collapse collapse" id="mblnav">
                <ul class="nav navbar-nav header-ul">
                    <li class="<?php if($page == 'home.php'){ echo 'active';} ?>"><a href="home.php">Home</a></li>

                    <li class="dropdown menu-large <?php if($page == 'program.php'){ echo 'active';} ?>"> <a href="# "
                            class="dropdown-toggle " data-toggle="dropdown ">Academics<svg
                                xmlns="http://www.w3.org/2000/svg" id="arrow" style="vertical-align: middle;" width="24"
                                height="24" viewBox="0 0 24 24" fill="none">
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
                                    <li class="dropdown-header megamenu-hdr">Academics</li>
                                </ul>
                            </li>

                            <li class="col-sm-3 megamenu-div">
                                <ul class="megamenu-options">

                                    <li data-img="img1"><a href="program.php" class="megamenu-options">Programs</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/programs.webp" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="img2"><a href="department.php" target="_blank"
                                            class="megamenu-options">Departments</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/departments.webp" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="img3"><a href="exam_home.php" target="_blank"
                                            class="megamenu-options">Examinations</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/exam.webp" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="img4"><a href="calender.php" target="_blank"
                                            class="megamenu-options">Academic Calendar</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/academic_Cal.jpg" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="img5"><a href="policies.php" target="_blank"
                                            class="megamenu-options">Policies & handbooks</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/departement_img.png" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="img6"><a href="whychooseus.php" target="_blank"
                                            class="megamenu-options">Why choose us?</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/whychooseus.webp" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="img7"><a href="Regulations.php" target="_blank"
                                            class="megamenu-options">Regulations</a>
                                        <div class="child-image">
                                           <img class="" src="assets/images/regulations.jfif" alt="" />
                                        </div>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li class=" <?php if($page == 'admissions.php'){ echo 'active';} ?>"><a
                            href="admissions.php">Admission</a></li>
                    <li class=" <?php if($page == 'uniresearch.php'){ echo 'active';} ?>"><a href="uniresearch.php">Reserach</a></li>
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

                                    <li data-img="p-img8"><a href="people.php"
                                            class="megamenu-options">Faculty</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/faculty_img.png" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="p-img9"><a href="people.php"
                                            class="megamenu-options">Students</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/student_img.png" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="p-img10"><a href="people.php" target="_blank"
                                            class="megamenu-options">Alumni</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/faculty_img.png" alt="" />
                                        </div>
                                    </li>
                                    <li data-img="p-img11"><a href="underconstruction.php"
                                            class="megamenu-options">Board of Studies</a>
                                        <div class="child-image">
                                            <img class="" src="assets/images/student_img.png" alt="" />
                                        </div>
                                    </li>
                            </li>
                        </ul>
                    </li>
                  

                </ul>
                </li>
                <li class="<?php if($page == 'u-life.php'){ echo 'active';} ?>"><a href="u-life.php">University
                        Life</a></li>
                <li class=" <?php if($page == 'aboutus.php'){ echo 'active';} ?>"><a href="aboutus.php">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right elementnone-mbl">

<li>
    <button class="btn-search" id="search"><img src="assets/icons/search_square.webp" /></button>

</li>
</ul>
                <!-- <hr class="btnnone-mbl" style="
                    margin-top: 20px;
                    margin-bottom: 20px;
                    border: 0;
                    border-top: 0.5px solid #cfc6c6;
                "> -->
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
                        <a href="newstudent.php">
                            <div class="dropdown">
                                <div class="dropdown_img-txt">
                                    <div class="dropdown_topnavtxt">New Student </div>

                                </div>

                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="newparents.php" >
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
                <img src="assets/icons/search_square.webp" class="search-icon" />
                <input type="text" class="input-search" id="sitesearchterm" value="" style="margin-top: 0;"
                placeholder="What are you looking for?" onkeyup="populateList()">
                <img src="assets/icons/cross.png" class="cross" onclick="abortterm('sitesearchterm')" />
                <div class="search-dropdowndiv">
                    <span class="search-in">IN</span>
                    <div class="search-separator"></div>
                    <select class="search-dropdown" name="search-dropdown" id="search-dropdown">
                        <option value="All" selected>All</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <ul id="resultList" class="result-list"></ul>
            </div>
         <div id="serch-overlay"></div>
        </div>
    </div>







    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/common.js"></script>
    <script>
    async function populateList() {
            const input = document.getElementById('sitesearchterm').value;
            const resultList = document.getElementById('resultList');
            resultList.innerHTML = '';

            if (input.trim() === '') return;

            try {
                const response = await fetch(`search.php?query=${encodeURIComponent(input)}`);
				
                let resultAdded = false;
                if (!response.ok) throw new Error('Network response was not ok');
                const pages = await response.json();
				console.log(pages);
                pages.forEach(page => {
                    const listItem = document.createElement('li');
                    listItem.innerHTML = page.page_title;
                    const buttonDiv = document.createElement('div');
                    buttonDiv.className = 'text_btnnew viewall-right';
                    buttonDiv.style.width = 'fit-content';
                    buttonDiv.onclick = () => window.open(page.page_url, '_blank');

                    const innerDiv = document.createElement('div');
                    innerDiv.className = 'text_btnnew_innrdiv';

                    const textDiv = document.createElement('div');
                    textDiv.className = 'text_btnnew_txt';
                    textDiv.textContent = 'Know More';

                    const imgDiv = document.createElement('div');
                    const img = document.createElement('img');
                    img.src = 'assets/svgicons/outwardarrow_brown.svg';
                    img.loading = 'lazy';
                    img.style.width = '16px';
                    img.style.height = '16px';
                    imgDiv.appendChild(img);
                    innerDiv.appendChild(textDiv);
                    innerDiv.appendChild(imgDiv);
                    buttonDiv.appendChild(innerDiv);
                    listItem.appendChild(buttonDiv);
                    resultList.appendChild(listItem);
                    resultAdded = true;
                });
                if (!resultAdded) {
                    const noResultsListItem = document.createElement('h2');
                    noResultsListItem.textContent = 'No options found';
                    noResultsListItem.style.color = 'gray';
                    noResultsListItem.style.fontStyle = 'italic';
                    resultList.appendChild(noResultsListItem);
                }
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }   
    </script>
</body>

</html>