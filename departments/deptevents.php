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
$deptid =  $_GET['deptid'];
//echo $_GET['school'];
$school =  $_GET['school'];
$dptnm =  $_GET['deptnm'];

$sqlquery ="SELECT dept_name FROM  department  where dept_short_name='".$dptnm."' ";
$result=mysqli_query($conn, $sqlquery);
$dpt = $result->fetch_assoc();
?>
    <div class="container home-div1 pagetop_space">
        <div class="depteve_div_spacing">


            <div class="depteve_div1">
                <div class="depteve_div1_innrdiv">
                    <div class="depteve_div1_title">
                        Events
                    </div>
                    <div class="depteve_div1_desc">
                        The Department of  <?php echo $dpt['dept_name']; ?> has excellent Infrastructure with Spacious
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

            <?php 

$sqlquery1 ="SELECT * FROM  events  where event_mode='guestlec' and dept='".$dptnm."'";

$result=mysqli_query($conn, $sqlquery1);
if(mysqli_num_rows($result) > 0){
?>

            <!-- Guest Lecture  starts here -->
            <div class="depteve_gl_outdiv">
                <div class="depteve_gltxt">
                    Guest Lecture
                </div>
                <div class="depteve_imgdetls_div">

                    <?php 
                    while ($row = $result->fetch_assoc()) { 
                        $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                        $month = $notf_dbdate->format('F');
                        $notif_dt= $notf_dbdate->format('jS');
                        $notif_yr= $notf_dbdate->format('y'); 
                                ?>
                    <div class="depteve_imgdetls_innrdiv"  onclick="window.open('detailspage.php?deptid=<?php echo $deptid; ?>&school=<?php echo $school;?>&id=<?php echo $row['Id'];?>&deptnm=<?php echo $dptnm;?>&evetyp=guestlec',  '_blank')">
                        <img src="<?php echo $row['img1'];?>" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                </div>
                                <div class="depteve_txt">
                                    <?php echo $row['title']; ?>
                                </div>
                            </div>

                            <div class="depteve_author">
                            <?php echo $row['caption']; ?>
                            </div>

                        </div>
                    </div>
             
                    <?php } } ?>

                </div>
                
            </div>
            <!-- Guest Lecture  ends here -->



            <?php 

$sqlquery2 ="SELECT * FROM  events  where event_mode='workshop' and dept='".$dptnm."' ";

$result1=mysqli_query($conn, $sqlquery2);
if(mysqli_num_rows($result1) > 0){
?>

               <!-- Workshops  starts here -->
               <div class="depteve_gl_outdiv">
                    <div class="depteve_gltxt">
                    Workshops
                    </div>
                    <div class="depteve_imgdetls_div">
                        <?php 
                        while ($row = $result1->fetch_assoc()) { 
                            $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                            $month = $notf_dbdate->format('F');
                            $notif_dt= $notf_dbdate->format('jS');
                            $notif_yr= $notf_dbdate->format('y'); 
                                    ?>
                        <div class="depteve_imgdetls_workshop">
                            <img src="<?php echo $row['img1'];?>" class="depteve_img" alt="" srcset="">
                            <div class="depteve_details_div">

                                <div class="depteve_details_innrdiv" onclick="window.open('detailspage.php?deptid=<?php echo $deptid; ?>&school=<?php echo $school;?>&id=<?php echo $row['Id'];?>&deptnm=<?php echo $dptnm;?>&evetyp=workshop',  '_blank')">
                                    <div class="depteve_date">
                                    <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                    </div>
                                    <div class="depteve_txt">
                                    <?php echo $row['title']; ?>
                                    </div>
                                </div>

                                <div class="depteve_author">
                                <?php echo $row['caption']; ?>
                                </div>

                            </div>
                        </div>

                        </div>
                
                </div>
                <!--Workshops  ends here -->
    
                        <?php } } ?>

                   


            <?php 

$sqlquery2 ="SELECT * FROM  events  where event_mode='webinar'  and dept='".$dptnm."' ";

$result1=mysqli_query($conn, $sqlquery2);
if(mysqli_num_rows($result1) > 0){
?>

              <!-- Webinars  starts here -->
              <div class="depteve_gl_outdiv">
                    <div class="depteve_gltxt">
                    Webinar
                    </div>
                    <div class="depteve_imgdetls_div">
                            <?php 
                                while ($row = $result1->fetch_assoc()) { 
                                    $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                                    $month = $notf_dbdate->format('F');
                                    $notif_dt= $notf_dbdate->format('jS');
                                    $notif_yr= $notf_dbdate->format('y'); 
                                            ?>
                            <div class="depteve_imgdetls_innrdiv" onclick="window.open('detailspage.php?deptid=<?php echo $deptid; ?>&school=<?php echo $school;?>&id=<?php echo $row['Id'];?>&deptnm=<?php echo $dptnm;?>&evetyp=webinar',  '_blank')">
                                <img src="<?php echo $row['img1'];?>" class="depteve_img" alt="" srcset="">
                                <div class="depteve_details_div">

                                    <div class="depteve_details_innrdiv">
                                        <div class="depteve_date">
                                        <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                        </div>
                                        <div class="depteve_txt">
                                        <?php echo $row['title']; ?>
                                        </div>
                                    </div>

                                    <div class="depteve_author">
                                    <?php echo $row['caption']; ?>
                                    </div>

                                </div>
                            </div>
                
                            </div>
                
                </div>
                <!--Webinars  ends here -->

                        <?php } } ?>
               


                        
            <?php 

$sqlquery3="SELECT * FROM  conferences  where dept='".$dptnm."' and type='conference'";

$result3=mysqli_query($conn, $sqlquery3);
if(mysqli_num_rows($result3) > 0){
?>
            <!-- Conference  starts here -->
            <div class="depteve_gl_outdiv">
                <div class="depteve_gltxt">
                Conferences
                </div>
                <div class="depteve_imgdetls_div">

            <?php    while ($row = $result3->fetch_assoc()) { 
                
                
                $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
                $month = $notf_dbdate->format('F');
                $notif_dt= $notf_dbdate->format('jS');
                $notif_yr= $notf_dbdate->format('y'); 
                
                ?>
                <div class="depteve_imgdetls_conference" style="cursor:pointer;" onclick="window.open('conference.php?deptid=<?php echo $deptid; ?>&school=<?php echo $school;?>&id=<?php echo $row['id'];?>&deptnm=<?php echo $dptnm;?>',  '_blank')">
                        <img src="dep_assets/images/con_img1.webp" class="depteve_img" alt="" srcset="">
                        <div class="depteve_details_div">

                            <div class="depteve_details_innrdiv">
                                <div class="depteve_date">
                                <?php echo $notif_dt ." " . $month ." ". $notif_yr;  ?>
                                </div>
                                <div class="depteve_txt">
                                <?php echo $row['title']; ?>
                                </div>
                            </div>

                            <div class="depteve_author">
                                by Sri Y Hanumantha Rao
                            </div>

                        </div>
                    </div>



                                        <!-- 
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
                                                            </div> -->
                                                    
                                                            <!-- <div class="depteve_imgdetls_conference">
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
                                                            </div> -->

                   

                </div>
                
            </div>
            <!--Conference  ends here -->
            <?php } } ?>


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