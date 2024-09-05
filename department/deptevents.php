<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/u-life.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/admission.css">
    <!-- <link rel="stylesheet" href="css/about.css"> -->
    <link rel="stylesheet" href="../css/news.css">
    <link rel="stylesheet" href="../css/mblfooter.css">
    <link rel="stylesheet" href="../css/newstudent.css">
    <link rel="stylesheet" href="dep_css/dept.css">
    <link rel="stylesheet" href="dep_css/deptfaclts.css">
    <link rel="stylesheet" href="dep_css/deptevents.css">
    <link rel="stylesheet" href="../css/newparent.css">
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
include_once '../connect.php';
include_once  'deptnavbar.php';
  
?>
    <div class="container home-div1 pagetop_space">
        <div class="depteve_div_spacing">


            <div class="depteve_div1">
                <div class="depteve_div1_innrdiv">
                    <div class="depteve_div1_title">
                        Events
                    </div>
                    <div class="depteve_div1_desc">
                        The Department of Computer Science & Engineering has excellent Infrastructure with Spacious
                        Smart Lecture halls in terms of general requirements and state of art laboratories for carrying
                        out academic activities.
                    </div>
                </div>
                <div class="depteve_div1_right">

                    <div class="depteve_search-container">

                        <div class="depteve_search-box filtersearch-box" id="filtersearch-show">
                            <img src="../assets/icons/search_square.webp" class="depteve_filtersearch-icon" />
                            <input type="text" class="depteve_input-search filterinput-search" id="searchterm" value=""
                                placeholder="Search Events" onkeyup="filterFunction()">


                        </div>

                        <!-- <button class="filter_button_primary Ss-btn_txt" data-toggle="modal" data-target="#flipFlop"> <img
                         src="assets/icons/filter_list_white.png" />
                     &nbsp;Filter </button> -->

                    </div>
                    <button class="filter_button_secondary filter_secondary-btn_txt"> <img
                            src="../assets/icons/filter_list.png" /> &nbsp;Filter </button>
                </div>
            </div>


            <!-- Guest Lecture  starts here -->
            <div class="depteve_gl_outdiv">
                <div class="depteve_gltxt">
                    Guest Lecture
                </div>
                <div class="depteve_imgdetls_div">
                    <div class="depteve_imgdetls_innrdiv"  onclick="window.open('detailspage.php',  '_blank')">
                        <img src="dep_assets/images/gl_img1.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                    Exploring Data for AI: An Industry Perspective
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>
             
                    <div class="depteve_imgdetls_innrdiv">
                        <img src="dep_assets/images/gl_img2.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                    Exploring Data for AI: An Industry Perspective
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>

                    <div class="depteve_imgdetls_innrdiv">
                        <img src="dep_assets/images/gl_img3.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                    Exploring Data for AI: An Industry Perspective
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>

                    <div class="depteve_imgdetls_innrdiv">
                        <img src="dep_assets/images/gl_img4.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                    Exploring Data for AI: An Industry Perspective
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>


                </div>
                
            </div>
            <!-- Guest Lecture  ends here -->



               <!-- Workshops  starts here -->
               <div class="depteve_gl_outdiv">
                <div class="depteve_gltxt">
                   Workshops
                </div>
                <div class="depteve_imgdetls_div">
                    <div class="depteve_imgdetls_workshop">
                        <img src="dep_assets/images/ws_img1.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                A Three Day Workshop on Machine Learning Applications & Algorithms with Tensor Flow
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>
             
                    <div class="depteve_imgdetls_workshop">
                        <img src="dep_assets/images/ws_img2.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                A Three Day Workshop on Machine Learning Applications & Algorithms with Tensor Flow
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>

                    <div class="depteve_imgdetls_workshop">
                        <img src="dep_assets/images/ws_img3.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                A Three Day Workshop on Machine Learning Applications & Algorithms with Tensor Flow
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>

                    


                </div>
                
            </div>
            <!--Workshops  ends here -->



              <!-- Webinars  starts here -->
              <div class="depteve_gl_outdiv">
                <div class="depteve_gltxt">
                   Webinar
                </div>
                <div class="depteve_imgdetls_div">
                    <div class="depteve_imgdetls_innrdiv">
                        <img src="dep_assets/images/gl_img1.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                    Exploring Data for AI: An Industry Perspective
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>
             
                    <div class="depteve_imgdetls_innrdiv">
                        <img src="dep_assets/images/gl_img2.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                    Exploring Data for AI: An Industry Perspective
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>

                    <div class="depteve_imgdetls_innrdiv">
                        <img src="dep_assets/images/gl_img3.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                    Exploring Data for AI: An Industry Perspective
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>

                    <div class="depteve_imgdetls_innrdiv">
                        <img src="dep_assets/images/gl_img4.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                    Exploring Data for AI: An Industry Perspective
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>


                </div>
                
            </div>
            <!--Webinars  ends here -->


            <!-- Conference  starts here -->
            <div class="depteve_gl_outdiv">
                <div class="depteve_gltxt">
                Conferences
                </div>
                <div class="depteve_imgdetls_div">


                    <div class="depteve_imgdetls_conference" style="cursor:pointer;" onclick="window.open('conferences.php',  '_blank')">
                        <img src="dep_assets/images/con_img1.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                A Three Day Workshop on Machine Learning Applications & Algorithms with Tensor Flow
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>
             
                    <div class="depteve_imgdetls_conference">
                        <img src="dep_assets/images/con_img2.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                    20th Jan 2024
                                </div>
                                <div class="depteve_txt">
                                A Three Day Workshop on Machine Learning Applications & Algorithms with Tensor Flow
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>

                   

                </div>
                
            </div>
            <!--Conference  ends here -->



        </div>
        <!-- Footer starts here -->
        <div id="mblftr">
            <?php
    
    include_once  '../mblfooter.php';
    ?>
        </div>
        <div id="ftr" style="width:100%;">
            <?php
    
    include_once  '../footer.php';
    ?>
        </div>
        <!-- Footer ends here -->


    </div>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="../js/common.js"></script>
</body>

</html>