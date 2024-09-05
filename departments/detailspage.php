<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/mblfooter.css">
    <link rel="stylesheet" href="dep_css/deptevents.css">
    <link rel="stylesheet" href="dep_css/depeve-details.css">
    <link rel="stylesheet" href="dep_css/dept.css">
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
$id =  $_GET['id'];
$dptnm =  $_GET['deptnm'];
$evetyp =  $_GET['evetyp'];
if($evetyp == 'guestlec'){
$evetyp = 'Guest Lecture';
}else if($evetyp == 'guestlec'){
$evetyp = 'Webinar';
}
else if($evetyp == 'workshop'){
$evetyp = 'workshop';
}
$sqlquery ="SELECT dept_name FROM  department  where dept_short_name='".$dptnm."' ";
$result=mysqli_query($conn, $sqlquery);
$dpt = $result->fetch_assoc();


$sqlquery1 ="SELECT * FROM  events  where id='".$id."' and dept='".$dptnm."'";

$result=mysqli_query($conn, $sqlquery1);
while ($eve= $result->fetch_assoc()) { 
    $notf_dbdate =new DateTime($eve['date']);  // get the event date and set it to the variable $date 
    $month = substr(($notf_dbdate->format('F')), 0, 3);
    $notif_dt= $notf_dbdate->format('j');
    $notif_yr= $notf_dbdate->format('y'); 
    $day = $notf_dbdate->format('l'); 
    $time = $notf_dbdate->format("h:i");
    $am = $notf_dbdate->format("A");
  
  
?>
    <div class="container home-div1 pagetop_space">
        <div class="depteve_div_spacing">

            <div class="dept_evedetails_div1">
                <div class="dept_evedetails_innrdiv">
                    <div class="dept_evedetails_hdng">
                        Events
                    </div>
                    <div class="dept_evedetails_title">
                        <?php echo $evetyp;?>
                    </div>
                </div>
                <div class="dept_evedetails_left">
                    <div class="dept_evedetails_left_spacing">
                        <div class="dept_evedetails_desc">
                         <?php echo $eve['title']; ?>
                        </div>
                        <img src="<?php echo $eve['img1']; ?>" alt="" srcset="" class="dept_evedetails_eveimg">
                        <div class="dept_evedetails_date_time">
                            <div>
                                <div class="dept_evedetails_mnth">
                                    <?php echo  $month;?>
                                </div>
                                <div class="dept_evedetails_date">
                                    <?php echo $notif_dt; ?>
                                </div>
                            </div>
                            <div class="dept_evedetails_separator"></div>
                            <div>
                                <div class="dept_evedetails_day">
                                    <?php echo $day; ?>
                                  </div>
                                <div class="dept_evedetails_time">
                                    <?php echo $time; ?><div class="dept_evedetails_session"> <?php   echo $am; ?></div>
                                    <!-- 11:30 - 12:30 <div class="dept_evedetails_session">AM</div> -->
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="dept_evedetails_right">
                        <div class="dept_evedetails_summary">
                            <div class="dept_evedetails_txt_hdng">
                                Summary
                            </div>
                            <div class="dept_evedetails_txt_desc">
                            <?php echo $eve['summary']; ?>
                            </div>
                        </div>


                        <div class="dept_evedetails_summary">
                            <div class="dept_evedetails_txt_hdng">
                                About Lecture
                            </div>
                            <div class="dept_evedetails_txt_desc">
                            <?php echo $eve['lecture']; ?>
                                <br><br>
                                <div class="text_btnnew">
                                    <div class="text_btnnew_innrdiv">
                                        <div class="text_btnnew_txt">
                                            Read More
                                        </div>
                                        <div>
                                            <img loading="lazy" src="../assets/svgicons/outwardarrow_brown.svg"
                                                style="width: 16px;height: 16px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="dept_evedetails_summary">
                            <div class="dept_evedetails_venue_hdng">
                                Venue
                            </div>
                            <div class="dept_evedetails_venue">
                                <div class="dept_evedetails_desc" style="width: 455px;">
                                    Multipurpose Conference Hall
                                </div>
                                <div class="dept_evedetails_txt_desc">

                                    Dept.of <?php echo $dpt['dept_name']; ?><br>
                                    1st Floor, Main Building, Natraj Road
                                </div>
                                <div class="text_btnnew">
                                    <div class="text_btnnew_innrdiv">
                                        <div class="text_btnnew_txt">
                                            Location
                                        </div>
                                        <div>
                                            <img loading="lazy" src="../assets/svgicons/outwardarrow_brown.svg"
                                                style="width: 16px;height: 16px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>


            <!-- About speakers starts here-->
            <div class="dept_evedetails_spkr_div">
                <div class="dept_evedetails_spkr_hdng">
                    About Speakers
                </div>

                <div class="fac_picdiv">


                    <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset=""
                            class="dept_evedetails_spkr_img">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. X. Y. Z. RAO
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <!-- About speakers ends here -->




            <!-- Event Coordinator starts here-->
            <div class="dept_evedetails_spkr_div">
                <div class="dept_evedetails_spkr_hdng">
                    Event Coordinator
                </div>

                <div class="fac_picdiv">


                    <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset=""
                            class="dept_evedetails_spkr_img">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. X. Y. Z. RAO
                            </div>
                            <div class="dept_evedetails_spkr_cptn">91 889889987</div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
<?php }?>
        <!-- Event Coordinator ends here -->


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