<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/mblfooter.css">
    <link rel="stylesheet" href="dep_css/dept.css">
    <link rel="stylesheet" href="../css/newstudent.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="dep_css/conference.css">
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
    <div class="container home-div1 pagetop_space" style="">
        <div class="newstudent-div-space">

        
<!-- contact us starts here -->

<div class="contactusdiv">

<div class="contactus_upprdiv">
<div class="hdng">Contact Us</div>
<div class="conf_div4_desc contact_desc_width">Connect with us effortlessly; your inquiries, feedback, and curiosity are always welcome – reach out through our Contact Us section for prompt assistance and information</div>
</div>

<div class="contactus_lwrdiv">

<div class="contactus_detaildiv">
<div class="contactus_hdng">
The HoD
</div>
<div class="contactus_desc">
For industrial interactions, projects, consultancy, etc. 
please contact, the HoD
</div>
<div class="contactus_medium">
HoD@vignan.ac.in
</div>
</div>


<div class="contactus_detaildiv">
<div class="contactus_hdng">
Phone & Email
</div>
<div class="contactus_desc">
For direct assistance, dial our dedicated helpline – your gateway to information and support at your fingertips
</div>
<div class="contactus_medium">
+91 91234 31241
</div>
<div class="contactus_medium">
023-2292 2294
</div>
<div class="contactus_medium">
office.cse@vignan.ac.in
</div>
</div>






<div class="contactus_detaildiv">
<div class="contactus_hdng">
Feedback
</div>
<div class="contactus_desc">
Kindly send your valuable suggestions to
</div>
<div class="contactus_medium">
feedback@vignan.ac.in
</div>
</div>




</div>
</div>

<!-- contact us ends here -->


<!-- map starts here -->
<div class="map_div">
<div class="map_leftdiv">

<div class="map_lefttxtdiv">
<div class="map_lefttxt1">
How to reach
</div>
<div class="map_leftdesc">
Department of computer science & engineering is located near main Library of the institute. 
It is at 600m from main gate & adjacent to department of Information Technology
Institute has free bus services within campus to reach out different places
</div>
<div class="map_distancediv">
<div class="map_distance1">
600 Meters from Main gate
</div>
<div class="map_distance2">
50 Meters from Main Library
</div>
</div>
</div>

<div class="map_btnsdiv">
<button class="button_primary Ss-btn_txt">How To Reach</button>
<div class="text_btnnew" onclick="programs()">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    Locate Us
                                </div>
                                <div>
                                    <img src="../assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>

</div>

</div>
<img src="dep_assets/images/contactus_map.webp" alt="">
</div>
<!-- map starts here -->




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