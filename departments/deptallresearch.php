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
?>
    <div class="container home-div1 pagetop_space">
        <div class="depteve_div_spacing">


            <div class="depteve_div1">
                <div class="depteve_div1_innrdiv deptresearch_div1_innrdiv">
                    <div class="depteve_div1_title deptallresearch_title">
                        Research Projects
                    </div>
                   
                </div>
                <div class="depteve_div1_right">

                    <div class="deptresearch_search-container">

                        <div class="depteve_search-box filtersearch-box" id="filtersearch-show">
                            <img src="../assets/icons/search_square.webp" class="depteve_filtersearch-icon" />
                            <input type="text" class="depteve_input-search filterinput-search" id="searchterm" value=""
                                placeholder="Search" onkeyup="filterFunction()">


                        </div>

                        <!-- <button class="filter_button_primary Ss-btn_txt" data-toggle="modal" data-target="#flipFlop"> <img
                         src="assets/icons/filter_list_white.png" />
                     &nbsp;Filter </button> -->

                    </div>
                    <button class="filter_button_secondary filter_secondary-btn_txt"> <img
                            src="../assets/icons/filter_list.png" /> &nbsp;Filter </button>
                </div>
            </div>


  <div style="display:flex; gap:4px;">

                        <div class="ulife-div-52" style="flex-wrap: wrap;">

                        <?php

$sqlquery3 ="SELECT  * from researchs where dept='".$dptnm."'";


      $result1=mysqli_query($conn, $sqlquery3);
      if(mysqli_num_rows($result1) > 0){
        while ($research_2 = $result1->fetch_assoc()) { 
?>
                              <div class="ulife-column-7">
                                <div class="ulife-div-53">
                                    <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                      font-weight: 400;line-height: 140%; /* 18.2px */"><?php echo $research_2['researcher_name']; ?></div>
                                    <div class="ulife-div-55">
                                    <?php echo $research_2['topic']; ?>
                                    </div>
                                    <div class="ulife-div-56" style="cursor:pointer;">
                                        <div class="text_btnnew viewall-right">
                                            <div class="text_btnnew_innrdiv">
                                                <div class="text_btnnew_txt">
                                                    View More
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

                            <?php  } } ?>
                         <!--   <div class="ulife-column-7">
                                <div class="ulife-div-53">
                                    <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
font-weight: 400;line-height: 140%; /* 18.2px */">Dr Shubh Lashmi Sengupta</div>
                                    <div class="ulife-div-55">
                                        A novel Bioreactor for bio degradation  of Marian plastic  litter in coastal
                                        Andhra Pradesh
                                    </div>
                                    <div class="ulife-div-56" style="cursor:pointer;">
                                        <div class="text_btnnew viewall-right">
                                            <div class="text_btnnew_innrdiv">
                                                <div class="text_btnnew_txt">
                                                    View More
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

                            <div class="ulife-column-7">
                                <div class="ulife-div-53">
                                    <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
font-weight: 400;line-height: 140%; /* 18.2px */">Dr S.Krupanidhi</div>
                                    <div class="ulife-div-55">
                                        Phylogenetic analysis and bar coding of  Indian apple snails as a prelude to
                                        their conservation stagey
                                    </div>
                                    <div class="ulife-div-56" style="cursor:pointer;">
                                        <div class="text_btnnew viewall-right">
                                            <div class="text_btnnew_innrdiv">
                                                <div class="text_btnnew_txt">
                                                    View More
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


                            <div class="ulife-column-7">
                                <div class="ulife-div-53">
                                    <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
font-weight: 400;line-height: 140%; /* 18.2px */">Dr Venkata Swamy Nalaja</div>
                                    <div class="ulife-div-55">
                                        Preparation of High pure anhydrous Magnesium chloride from sea water bitterns
                                        and Magnesite
                                    </div>
                                    <div class="ulife-div-56" style="cursor:pointer;">
                                        <div class="text_btnnew viewall-right">
                                            <div class="text_btnnew_innrdiv">
                                                <div class="text_btnnew_txt">
                                                    View More
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
			
			  <div style="display:flex; gap:4px;">

                        <div class="ulife-div-52">

                            <div class="ulife-column-7">
                                <div class="ulife-div-53">
                                    <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
font-weight: 400;line-height: 140%; /* 18.2px */">By Ms Jyostna Devi Bodapati</div>
                                    <div class="ulife-div-55">
                                        Designing and Implementing a Two-Channel Deep Neural Network Architecture for
                                        Brain Tumor Classification
                                    </div>
                                    <div class="ulife-div-56" style="cursor:pointer;">
                                        <div class="text_btnnew viewall-right">
                                            <div class="text_btnnew_innrdiv">
                                                <div class="text_btnnew_txt">
                                                    View More
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


                            <div class="ulife-column-7">
                                <div class="ulife-div-53">
                                    <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
font-weight: 400;line-height: 140%; /* 18.2px */">Dr Shubh Lashmi Sengupta</div>
                                    <div class="ulife-div-55">
                                        A novel Bioreactor for bio degradation  of Marian plastic  litter in coastal
                                        Andhra Pradesh
                                    </div>
                                    <div class="ulife-div-56" style="cursor:pointer;">
                                        <div class="text_btnnew viewall-right">
                                            <div class="text_btnnew_innrdiv">
                                                <div class="text_btnnew_txt">
                                                    View More
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

                            <div class="ulife-column-7">
                                <div class="ulife-div-53">
                                    <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
font-weight: 400;line-height: 140%; /* 18.2px */">Dr S.Krupanidhi</div>
                                    <div class="ulife-div-55">
                                        Phylogenetic analysis and bar coding of  Indian apple snails as a prelude to
                                        their conservation stagey
                                    </div>
                                    <div class="ulife-div-56" style="cursor:pointer;">
                                        <div class="text_btnnew viewall-right">
                                            <div class="text_btnnew_innrdiv">
                                                <div class="text_btnnew_txt">
                                                    View More
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


                            <div class="ulife-column-7">
                                <div class="ulife-div-53">
                                    <div style="color: var(--Colors-Text-Color, #000);font-family: Familjen Grotesk;font-size: 13px;font-style: normal;
                                    font-weight: 400;line-height: 140%; /* 18.2px */">Dr Venkata Swamy Nalaja</div>
                                    <div class="ulife-div-55">
                                        Preparation of High pure anhydrous Magnesium chloride from sea water bitterns
                                        and Magnesite
                                    </div>
                                    <div class="ulife-div-56" style="cursor:pointer;">
                                        <div class="text_btnnew viewall-right">
                                            <div class="text_btnnew_innrdiv">
                                                <div class="text_btnnew_txt">
                                                    View More
                                                </div>
                                                <div>
                                                    <img loading="lazy" src="../assets/svgicons/outwardarrow_brown.svg"
                                                        style="width: 16px;height: 16px;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->




                        </div>

                    </div>
			
			


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