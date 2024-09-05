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
    <link rel="stylesheet" href="dep_css/depresearch.css">
    <link rel="stylesheet" href="dep_css/deptfaclts.css">
    <link rel="stylesheet" href="../css/newparent.css">
	<link rel="stylesheet" href="../css/nccActivity.css">
	
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
//echo $dptnm;
$sqlquery1 ="SELECT dd.*, d.dept_name FROM  dept_data dd
left join department d
 on dd.dept_id = d.id
 where dd.id ='research_1' and  dd.dept_id ='".$deptid."' and dd.schl_id ='".$school."' ";
 //echo $sqlquery1;
//-fluid home-contfld
  //  echo $sqlquery1;

      $result=mysqli_query($conn, $sqlquery1);
      if(mysqli_num_rows($result) > 0){
        while ($research_1 = $result->fetch_assoc()) { 
           
?>
    <div class="container home-div1 pagetop_space">
        <div class="newstudent-div-space">

            <!-- First section starts here -->

            <div class="depresearch_div1">

                <div
                    style="display: flex;flex-direction: column;align-items: flex-start;gap: var(--Spacing-Spacing-Mega-L, 61px);">
                    <div class="depresearch_div1_title" style="">
                    <?php echo $research_1['title'];?>
                    </div>
                    <div class="depresearch_div1_desc">
                    <?php echo $research_1['descr'];?>

                    </div>
                </div>

                <img src=" <?php echo $research_1['img1'];?>" alt="" srcset="" class="depresearch_img1">
            </div>
            <!-- First section ends here -->
            <?php }}	
            
            
            $sqlquery2 ="SELECT dd.*, d.dept_name FROM  dept_data dd
left join department d
 on dd.dept_id = d.id
 where dd.id ='research_2' and  dd.dept_id ='".$deptid."' and dd.schl_id ='".$school."'";


      $result1=mysqli_query($conn, $sqlquery2);
      if(mysqli_num_rows($result1) > 0){
        while ($research_2 = $result1->fetch_assoc()) { 
            ?>



            
            <!-- research projects starts here -->
            <div
                class="depresearchproj_outdiv">

                <div class="depresearchproj_innrdiv">
                    <div class="depresearch_hdng">
                    <?php echo $research_2['title'];?>
                    </div>
                    <div class="depresearchproj_desc">
                    <?php echo $research_2['descr'];?>
                    </div>
                </div>
<?php }} ?>
                <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;
gap: var(--Spacing-Spacing-xl, 25px);">


                    <div style="display:flex; gap:4px;">

                        <div class="ulife-div-52">

                           
<?php

$sqlquery3 ="SELECT  * from researchs where dept='".$dptnm."' limit 4";
//$sqlquery3 ="SELECT  * from researchs where dept='MGT' limit 4";


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

                       <!--  
                            
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
					
                    <button <?php if(mysqli_num_rows($result1) > 0){ echo 'style="display:block"'; }else{ echo 'style="display:none"';}?>  class="cta_button_primary Ss-btn_txt" onclick="window.open('deptallresearch.php?deptid=<?php echo $deptid; ?>&school=<?php echo $school;?>&deptnm=<?php echo $dptnm;?>',  '_self')">Show All Projects
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2"
                                width="24" height="24">
                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_2961_1144)">
                                <path
                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                    fill="#F2F1ED" />
                            </g>
                        </svg>
                        <!-- <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                    </button>

                </div >
            </div>
            <!-- research projects ends here -->






            <!-- faculty starts here -->

            <div class="faculty_div">
                <div class="faculty_leftdiv">
                    <div class="hdng">
                        Faculty
                    </div>
                    <div class="contnt">
                        At VIGNAN, our commitment to student success extends beyond graduation. We take immense pride in
                        our top recruiters, who play a crucial role in connecting our talented graduates with
                        exceptional career opportunities. These organisations and companies have recognised the caliber
                        of
                    </div>
                </div>

                <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;
gap: var(--Spacing-Spacing-xl, 25px);flex-shrink: 0;">
                <div class="fac_picdiv">
                    <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                               DR. X. Y. Z. RAO
                            </div>
                        </div>
                    </div>

                    <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. X. Y. Z. RAO
                            </div>
                        </div>
                    </div>


                    <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="" class="fac_card2_img">
                        <div class="fac_namediv fac_namediv2">
                            <div class="fac_name ">
                                DR. X. Y. Z. RAO
                            </div>
                        </div>
                    </div>


                </div>
                <button class="cta_button_primary Ss-btn_txt btnnone">View All
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2"
                                width="24" height="24">
                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_2961_1144)">
                                <path
                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                    fill="#F2F1ED" />
                            </g>
                        </svg>
                        <!-- <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                    </button>
</div>

            </div>

            <!-- faculty ends here -->


                        <!-- Alumni starts here -->

                        <div class="faculty_div">
                <div class="faculty_leftdiv">
                    <div class="hdng">
                    Alumni
                    </div>
                    <div class="contnt">
                        At VIGNAN, our commitment to student success extends beyond graduation. We take immense pride in
                        our top recruiters, who play a crucial role in connecting our talented graduates with
                        exceptional career opportunities. These organisations and companies have recognised the caliber
                        of
                    </div>
                </div>

                <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;
gap: var(--Spacing-Spacing-xl, 25px);flex-shrink: 0;">
                <div class="fac_picdiv">
                     <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. X. Y. Z. RAO
                            </div>
                        </div>
                    </div>

                    <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. P. M. V. RAO
                            </div>
                        </div>
                    </div>


                    <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="" class="fac_card2_img">
                        <div class="fac_namediv fac_namediv2">
                            <div class="fac_name">
                                DR. P. M. V. RAO
                            </div>
                        </div>
                    </div>


                </div>
                <button class="cta_button_primary Ss-btn_txt btnnone">View All
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2"
                                width="24" height="24">
                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_2961_1144)">
                                <path
                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                    fill="#F2F1ED" />
                            </g>
                        </svg>
                        <!-- <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                    </button>
</div>

            </div>

            <!-- Alumni ends here -->


            <!-- Our research facilites starts here -->
<?php
			$title = "Our Research Facilities";
			$description = "We provide cutting-edge lab facilities empower students to engage in hands-on learning experiences, fostering innovation and scientific exploration";
			
			$img1 = "dep_assets/images/dept_facilit_img1.webp";
			$img2 = "dep_assets/images/machinelearning.webp";
			$img3 = "dep_assets/images/virtualreality.webp";
			$img4 = "dep_assets/images/artificialintell.webp";
			
			$img1name = "Cyber Security";
			$img2name = "Machine Learning";
			$img3name = "Virtual Reality";
			$img4name = "Artificial Intelligence";
			
			$img1link = "https://vignan.ac.in/ambience.php";
			$img2link = "https://vignan.ac.in/ambience.php";
			$img3link = "https://vignan.ac.in/ambience.php";
			$img4link = "https://vignan.ac.in/ambience.php";
			
			$sqlquery1 ="SELECT dd.*, d.dept_name FROM  dept_data dd left join department d on dd.dept_id = d.id
 						 where dd.id ='researchfacilities_1' and  dd.dept_id ='".$deptid."' and dd.schl_id ='".$school."'";
 
		   $result=mysqli_query($conn, $sqlquery1);
		   if(mysqli_num_rows($result) > 0){
			 while ($researchfacility_1 = $result->fetch_assoc()) { 
				
				$title = $researchfacility_1['title'];
				$description = $researchfacility_1['descr'];
				 
				$img1 =  $researchfacility_1['img1'];
				$img2 = $researchfacility_1['img2'];
				$img3 = $researchfacility_1['img3'];
				$img4 = $researchfacility_1['img4'];

				$img1name = $researchfacility_1['img1name'];
				$img2name = $researchfacility_1['img2name'];
				$img3name = $researchfacility_1['img3name'];
				$img4name = $researchfacility_1['img4name'];
				 
				$img1link = $researchfacility_1['btn1_hlink'];
				$img2link = $researchfacility_1['btn2_hlink'];
				$img3link = $researchfacility_1['btn3_hlink'];
				$img4link = $researchfacility_1['btn4_hlink'];
				 
			 }
		   }
?>
            <div class="deptfaci_big_imgcta">

<div class="ulife-div-29 deptfaci_big_imgcta_innrdiv">
    <img loading="lazy" src="<?php echo $img1; ?>" class="ulife-img-6">
    <div class="ulife-div-30">
        <div class="ulife-div-31">
            <div class="ulife-div-32 deptfaci_txt_imggap">
                <?php echo $img1name; ?>
                <div class="smallcta_btn_primary"
                    onclick="window.open('<?php echo $img1link; ?>',  '_blank')">
                    <img src="../assets/icons/arrow_outward_white.png">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="depresearchfaci_outrdiv">

    <div class="depresearchfaci_innrdiv">
        <div class="ulife-div-29 deptfaci_big_imgcta_innrdiv depresearchfaci_img2"  style="">

        <img loading="lazy" src="<?php echo $img2; ?>" class="ulife-img-6">
            <div class="ulife-div-30">
                <div class="ulife-div-31">
                    <div class="ulife-div-32 deptfaci_txt_imggap">
                        <?php echo $img2name; ?>
                        <div class="smallcta_btn_primary"
                            onclick="window.open('<?php echo $img2link; ?>',  '_blank')">
                            <img src="../assets/icons/arrow_outward_white.png">
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

        <div style="display:flex; flex-wrap:wrap;gap:20px;    flex-direction: column;">

            <div class="ulife-div-29 deptfaci_small_imgcta_innrdiv">
                <img loading="lazy" src="<?php echo $img3; ?>" class="ulife-img-6" />
                <div class="ulife-div-30">
            <div class="ulife-div-31" style="margin-top: 0px;">
                <div class="ulife-div-32 deptfaci_txt_imggap">
                    <?php echo $img3name; ?>
                    <div class="smallcta_btn_primary"
                             onclick="window.open('<?php echo $img3link; ?>',  '_blank')">
                        <img src="../assets/icons/arrow_outward_white.png" />
                    </div>
                </div>
            </div>
        </div>
            </div>

            <div class="ulife-div-29 deptfaci_small_imgcta_innrdiv">
                <img loading="lazy" src="<?php echo $img4; ?>" class="ulife-img-6" />
                <div class="ulife-div-30">
            <div class="ulife-div-31" style="margin-top: 0px;">
                <div class="ulife-div-32 deptfaci_txt_imggap">
                    <?php echo $img4name; ?>
                    <div class="smallcta_btn_primary"
                             onclick="window.open('<?php echo $img4link; ?>',  '_blank')">
                        <img src="../assets/icons/arrow_outward_white.png" />
                    </div>
                </div>
            </div>
        </div>
            </div>

        </div>
    </div>

    <div style="display: flex;width: 305px;    justify-content: center;flex-direction: column;align-items: flex-start;
   gap: 30px;flex-shrink: 0;">
        <div class="deptfaci_div2_left_title"><?php echo $title; ?></div>
        <div class="deptfaci_div2_left_desc"><?php echo $description; ?></div>
		<!-- Read More Starts here -->
		
		<div class="news-cntrlsdiv">
                    <div class="news-rdmore">
                        <div class="news-rdmr-view">
                            <div class="text_btnnew viewall-right" onclick="facilitiesreadmore();">
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
                </div>
		
		<!-- Read More Ends Here -->
		
		<!--  Reserch Facilities Modal -->	
        <div class="modal fade" id="overlayresearchfacilities" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="overlay-dialog1" role="document">
                            <div class="filter-modal_content1">
                                <div class="pad2">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <img src="../assets/icons/cross_big.png">                                        
                                    </button>
                                </div>
                                <section class="content-wrapper2">
                                    <div class="content-container">
                                        <!--<div class="share-section">
                                            
                                        </div>-->
                                        <div class="facultycontent-description-section">
											<p class="share-title">Share on</p>
                                            <div class="share-icons">
                                                <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.7087 30.9159V19.0303H13.5822V30.9159H17.7091H17.7087ZM15.6463 17.4077C17.085 17.4077 17.9807 16.4951 17.9807 15.3545C17.9537 14.1879 17.085 13.3007 15.6736 13.3007C14.2613 13.3007 13.3389 14.1879 13.3389 15.3544C13.3389 16.495 14.2343 17.4076 15.6192 17.4076H15.6459L15.6463 17.4077ZM19.9928 30.9159H24.1189V24.2791C24.1189 23.9244 24.1459 23.5687 24.2549 23.3153C24.5531 22.6053 25.232 21.8703 26.3722 21.8703C27.865 21.8703 28.4625 22.9601 28.4625 24.5581V30.9159H32.5886V24.101C32.5886 20.4504 30.5531 18.7516 27.8383 18.7516C25.6125 18.7516 24.6349 19.9426 24.0918 20.7538H24.1193V19.0307H19.993C20.0468 20.1457 19.9926 30.9163 19.9926 30.9163L19.9928 30.9159Z"
                                                        fill="black" />
                                                </svg>
                                                <svg id="social-arrow" width="45" height="45" viewBox="0 0 45 45"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Social Media / Facebook">
                                                        <g id="Capa 2">
                                                            <g id="ELEMENTS">
                                                                <path id="Vector"
                                                                    d="M28.0055 23.9648L28.6466 19.8911H24.6971V17.2432C24.6971 16.1293 25.2485 15.0409 27.0117 15.0409H28.8326V11.5718C27.7722 11.4027 26.7007 11.3113 25.6268 11.2981C22.3761 11.2981 20.2538 13.2522 20.2538 16.7849V19.8911H16.6505V23.9648H20.2538V33.8181H24.6971V23.9648H28.0055Z"
                                                                    fill="black" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Social Media / Instagram">
                                                        <g id="Group 15">
                                                            <path id="Vector"
                                                                d="M19.172 22.0564C19.172 20.0296 20.8887 18.3862 23.007 18.3862C25.1253 18.3862 26.8429 20.0296 26.8429 22.0564C26.8429 24.0831 25.1253 25.7266 23.007 25.7266C20.8887 25.7266 19.172 24.0831 19.172 22.0564ZM17.0983 22.0564C17.0983 25.1788 19.7436 27.7098 23.007 27.7098C26.2703 27.7098 28.9156 25.1788 28.9156 22.0564C28.9156 18.934 26.2703 16.403 23.007 16.403C19.7436 16.403 17.0983 18.934 17.0983 22.0564ZM27.7687 16.1788C27.7686 16.4401 27.8495 16.6956 28.0011 16.9129C28.1528 17.1302 28.3684 17.2997 28.6206 17.3998C28.8729 17.4999 29.1505 17.5261 29.4184 17.4752C29.6863 17.4244 29.9324 17.2986 30.1256 17.1139C30.3188 16.9292 30.4504 16.6939 30.5037 16.4376C30.5571 16.1814 30.5299 15.9157 30.4255 15.6743C30.3211 15.4328 30.1442 15.2264 29.9172 15.0811C29.6901 14.9359 29.4232 14.8583 29.1501 14.8582H29.1496C28.7835 14.8583 28.4325 14.9975 28.1735 15.2451C27.9146 15.4928 27.769 15.8286 27.7687 16.1788ZM18.3582 31.0181C17.2363 30.9692 16.6266 30.7904 16.2213 30.6393C15.6841 30.4392 15.3008 30.2009 14.8978 29.8158C14.4947 29.4307 14.2453 29.0643 14.037 28.5503C13.8791 28.1628 13.6922 27.5791 13.6412 26.5057C13.5854 25.3452 13.5743 24.9966 13.5743 22.0565C13.5743 19.1163 13.5863 18.7687 13.6412 17.6072C13.6923 16.5338 13.8805 15.9513 14.037 15.5626C14.2462 15.0486 14.4953 14.6819 14.8978 14.2962C15.3002 13.9106 15.6832 13.6719 16.2213 13.4727C16.6264 13.3216 17.2363 13.1428 18.3582 13.094C19.5711 13.0406 19.9355 13.0299 23.007 13.0299C26.0785 13.0299 26.4432 13.0415 27.6572 13.094C28.779 13.1429 29.3878 13.323 29.794 13.4727C30.3313 13.6719 30.7146 13.9112 31.1176 14.2962C31.5206 14.6813 31.7692 15.0486 31.9783 15.5626C32.1363 15.9502 32.3232 16.5338 32.3742 17.6072C32.4299 18.7687 32.4411 19.1163 32.4411 22.0565C32.4411 24.9966 32.4299 25.3443 32.3742 26.5057C32.3231 27.5791 32.1353 28.1626 31.9783 28.5503C31.7692 29.0643 31.5201 29.4311 31.1176 29.8158C30.7151 30.2005 30.3313 30.4392 29.794 30.6393C29.389 30.7905 28.779 30.9693 27.6572 31.0181C26.4442 31.0714 26.0799 31.0821 23.007 31.0821C19.9341 31.0821 19.5708 31.0714 18.3582 31.0181ZM18.2629 11.1133C17.0379 11.1667 16.2009 11.3525 15.4699 11.6247C14.7128 11.9057 14.0719 12.2828 13.4315 12.8946C12.7911 13.5064 12.398 14.1205 12.1042 14.8449C11.8198 15.5448 11.6256 16.3452 11.5698 17.5173C11.5131 18.6912 11.5001 19.0665 11.5001 22.0564C11.5001 25.0463 11.5131 25.4216 11.5698 26.5955C11.6256 27.7676 11.8198 28.568 12.1042 29.2679C12.398 29.9918 12.7912 30.6067 13.4315 31.2182C14.0718 31.8297 14.7128 32.2063 15.4699 32.4881C16.2023 32.7603 17.0379 32.9461 18.2629 32.9995C19.4905 33.0529 19.8821 33.0662 23.007 33.0662C26.1319 33.0662 26.5241 33.0537 27.7511 32.9995C28.9761 32.9461 29.8126 32.7603 30.5441 32.4881C31.3007 32.2063 31.9421 31.83 32.5825 31.2182C33.2229 30.6064 33.6152 29.9918 33.9097 29.2679C34.1942 28.568 34.3893 27.7675 34.4442 26.5955C34.5 25.4207 34.513 25.0463 34.513 22.0564C34.513 19.0665 34.5 18.6912 34.4442 17.5173C34.3884 16.3451 34.1942 15.5443 33.9097 14.8449C33.6152 14.121 33.2219 13.5073 32.5825 12.8946C31.9431 12.2818 31.3007 11.9057 30.545 11.6247C29.8126 11.3525 28.976 11.1658 27.752 11.1133C26.5251 11.0599 26.1328 11.0466 23.0079 11.0466C19.883 11.0466 19.4905 11.059 18.2629 11.1133Z"
                                                                fill="black" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Social Media / Instagram">
                                                        <g id="Group 15">
                                                            <path id="Vector"
                                                                d="M23.0001 12.5716C19.3697 12.5716 14.6577 13.4705 14.6577 13.4705L14.6458 13.4839C12.9924 13.7452 11.7256 15.1493 11.7256 16.8569V21.9993V22.001V27.1417V27.1434C11.7272 27.9589 12.0229 28.7472 12.5597 29.3666C13.0965 29.986 13.8391 30.3961 14.6543 30.5231L14.6577 30.5281C14.6577 30.5281 19.3697 31.4287 23.0001 31.4287C26.6305 31.4287 31.3425 30.5281 31.3425 30.5281L31.3442 30.5264C32.1602 30.3997 32.9037 29.9893 33.4409 29.3691C33.9781 28.749 34.2737 27.9597 34.2746 27.1434V27.1417V22.001V21.9993V16.8569C34.2734 16.0411 33.9778 15.2524 33.441 14.6326C32.9042 14.0129 32.1613 13.6026 31.3459 13.4755L31.3425 13.4705C31.3425 13.4705 26.6305 12.5716 23.0001 12.5716ZM20.3983 18.0555L27.3364 21.9993L20.3983 25.9431V18.0555Z"
                                                                fill="black" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
										<div id="contentrows">
                                            <!--<div class="description-wrapper">
												<div class="share-images-container">
                                               		 <img loading="lazy" src="" id="rfimg" class="share-image newsarticle-img" alt="" />
												</div>
												<h2 class="event-title" id="rftitle"></h2>
                                                <article class="description-text">
                                                  
                                                    <p class="event-description" id="rfdesc">

                                                        
                                                    </p>
                                                </article>-->
                                                <!--<aside class="highlight-container">
                                                    <div class="highlight-box"></div>
                                                </aside>-->
                                            <!--</div>-->
										</div>
											
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
            <!-- Reserch Facilities Modal -->	
    </div>

</div>

</div>

            <!-- Our research facilities ends here -->


            <!-- Appreciations starts here -->
            <div style="display: flex;flex-direction: column;align-items: flex-start;gap: var(--Spacing-Spacing-Mega, 49px);">
            <div class="hdng">Appreciations</div>
                      <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;
gap: var(--Spacing-Spacing-xl, 25px);flex-shrink: 0;">
                <div class="fac_picdiv">
                      <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. X. Y. Z. RAO
                            </div>
                        </div>
                    </div>

                     <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. X. Y. Z. RAO
                            </div>
                        </div>
                    </div>

                      <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. X. Y. Z. RAO
                            </div>
                        </div>
                    </div>


                      <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset="">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                DR. X. Y. Z. RAO
                            </div>
                        </div>
                    </div>


                </div>
                <button class="cta_button_primary Ss-btn_txt btnnone">Show All
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2" y="-2"
                                width="24" height="24">
                                <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_2961_1144)">
                                <path
                                    d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                    fill="#F2F1ED" />
                            </g>
                        </svg>
                        <!-- <img src="assets/svgicons/arrow_right_white.svg" class="button-arrow" />-->
                    </button>

</div>
        </div>

            <!-- Appreciations ends here -->





            <!-- what people say starts here -->

            <?php
      $sql = "SELECT * FROM `testimonials` WHERE id = 'Admissions_SAMIRA REDDY' or id = 'Admissions_NAVEEN VARMA' or id = 'Admissions_SUJAY SHEKHAR';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          ?>
            <section class="testimonials" style="margin-top:0;">
                <h2 class="testimonials-title">What People Say</h2>
                <div class="testimonials-container">
                    <div class="testimonials-wrapper">
                        <div class="testimonials-row">
                            <?php 
                    while($row = $result->fetch_assoc()) {
                      ?>
                            <div class="testimonial-col">
                                <div class="testimonial-content">
                                    <img src="../assets/icons/DoubleQuoateIconMaroon.svg" alt="Avatar"
                                        class="testimonial-avatar" />
                                    <p class="testimonial-text">
                                        <?php echo $row['descr'] ?>
                                        <br />
                                    </p>
                                    <div class="testimonial-author">
                                        <div class="testimonial-name"><?php echo $row['name'] ?></div>
                                        <div class="testimonial-class"><?php echo $row['caption'] ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
        $sql = "SELECT * FROM `testimonials` WHERE id = 'Admissions_SAMIRA REDDY' or id = 'Admissions_NAVEEN VARMA' or id = 'Admissions_SUJAY SHEKHAR';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      ?>
            <section class="testimonials-section-mobile">
                <h2 class="testimonials-title-mobile">What People Say</h2>
                <?php
            while($row = $result->fetch_assoc()) {
            ?>
                <article class="testimonial-item-mobile">
                    <div class="testimonial-content-mobile">
                        <img src="../assets/icons/DoubleQuoateIconMaroon.svg" alt="Testimonial author Kunita Rao"
                            class="testimonial-image-mobile" />
                        <div class="testimonial-text-mobile">
                            <p class="testimonial-quote-mobile">
                                <?php echo $row['descr'] ?>
                            </p>
                            <p class="testimonial-author-mobile"><?php echo $row['name'] ?></p>
                        </div>
                    </div>
                </article>
                <?php 
            }
            ?>
            </section>
            <?php 
      }
      ?>
            <!-- what people say ends here -->


            <!-- FAQ starts here -->
            <div class="Frequently-asked-questions-component" style="margin-top:0;">
                <div class="Frequently-asked-questions-component-title">
                    Frequently Asked Questions
                </div>
                <div class="panel-group" id="depres_accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="depres_heading1" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question" data-toggle="collapse" data-parent="#depres_accordion" href="#depres_q1"
                                    aria-expanded="true" aria-controls="depres_q1">
                                    1. How can I apply to the Computer Science program?
                                </a>
                            </h4>
                        </div>
                        <div id="depres_q1" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="depres_heading1">
                            <div class="panel-body">
                                Along with the course, you also get access to the course
                                discussion forum. You can ask any questions and I will answer
                                them personally within 24 hours. You can ask any questions and.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="depres_heading2" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#depres_accordion"
                                    href="#depres_q2" aria-expanded="false" aria-controls="depres_q2">
                                    2. What are the admission requirement for computer science
                                    department?
                                </a>
                            </h4>
                        </div>
                        <div id="depres_q2" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="depres_heading2">
                            <div class="panel-body">Answer</div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="depres_heading3" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#depres_accordion"
                                    href="#depres_q3" aria-expanded="false" aria-controls="depres_q3">
                                    3. Are there any prerequisites for specific courses within the
                                    department?
                                </a>
                            </h4>
                        </div>
                        <div id="depres_q3" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="depres_heading3">
                            <div class="panel-body">Answer</div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="depres_heading4" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#depres_accordion"
                                    href="#depres_q4" aria-expanded="false" aria-controls="depres_q4">
                                    4. How much is the validity of the course?
                                </a>
                            </h4>
                        </div>
                        <div id="depres_q4" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="depres_heading4">
                            <div class="panel-body">Answer</div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: transparent">
                        <div class="panel-heading" role="tab" id="headingFive" style="background-color: transparent">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#depres_accordion"
                                    href="#depres_q5" aria-expanded="false" aria-controls="depres_q5">
                                    5. What is the typical class size for computer science
                                    courses?
                                </a>
                            </h4>
                        </div>
                        <div id="depres_q5" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFive">
                            <div class="panel-body">Answer</div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- FAQ ends here -->



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
	<script>
	 function facilitiesreadmore(){	
		  var appendrow = "";
		  var appendtable = "";
		 
		 <?php
			$title = "Our Research Facilities";
			$description = "We provide cutting-edge lab facilities empower students to engage in hands-on learning experiences, fostering innovation and scientific exploration";
			
			$sqlquery1 ="SELECT * FROM `researchfacilities` WHERE dept='".$dptnm."' ";
 
		   $result=mysqli_query($conn, $sqlquery1);
		   if(mysqli_num_rows($result) > 0){
			while ($researchfacility_1 = $result->fetch_assoc()) { 
				
		 ?>		
		 var tblele = document.createElement('table');
         tblele.setAttribute("class", "table table-bordered");
		 tblele.setAttribute("style", "width:550px;height:auto;");
		 
		 var tbodyele = document.createElement('tbody');
		 
		 /* First Row */
		 var tr1ele = document.createElement('tr');
		 
		 var th1ele = document.createElement('th');
		 th1ele.setAttribute("style", "width:30%;");
		 var txt1ele = document.createTextNode("Equipment Name");
         th1ele.appendChild(txt1ele);
		 
		 var td1ele = document.createElement('td');
		 td1ele.setAttribute("style", "width:70%;");
		 var txtd1ele ="";
		 <?php if($researchfacility_1['equipmentname']!=null && $researchfacility_1['equipmentname']!=""){ ?>		 	 
			 txtd1ele = document.createTextNode('<?php echo $researchfacility_1['equipmentname'] ?>');	
		 <?php }else{ ?>
		 	 txtd1ele = document.createTextNode('-');			 
		 <?php } ?>		 
		 
         td1ele.appendChild(txtd1ele);
		 
		 tr1ele.appendChild(th1ele);
		 tr1ele.appendChild(td1ele);
		 /* End Of First Row */
		 /* Second Row */
		  var tr2ele = document.createElement('tr');
		 
		 var th2ele = document.createElement('th');		 
		 var txt2ele = document.createTextNode("Equipment Company");
         th2ele.appendChild(txt2ele);
		 
		 var td2ele = document.createElement('td');		 
		 
		  var txtd2ele ="";		 
		 <?php if($researchfacility_1['equipmentcompany']!=null && $researchfacility_1['equipmentcompany']!=""){?>			 	 	 
			txtd2ele = document.createTextNode("<?php echo $researchfacility_1['equipmentcompany'];?>");	
		 <?}else{ ?>
		 	 txtd2ele = document.createTextNode('-');			 
		 <?php } ?>		 
		 
         td2ele.appendChild(txtd2ele);
		 
		 tr2ele.appendChild(th2ele);
		 tr2ele.appendChild(td2ele);
		 /* End Of Second Row */
		 /* Third Row */
		 var tr3ele = document.createElement('tr');
		 
		 var th3ele = document.createElement('th');
		 th3ele.setAttribute("style", "width:30%;");
		 var txt3ele = document.createTextNode("Max Temparature");
         th3ele.appendChild(txt3ele);
		 
		 var td3ele = document.createElement('td');
		 td3ele.setAttribute("style", "width:70%;");
		 var txtd3ele ="";
		 <?php if($researchfacility_1['maxtemparature']!=null && $researchfacility_1['maxtemparature']!=""){ ?>		 	 
			 txtd3ele = document.createTextNode('<?php echo $researchfacility_1['maxtemparature'] ?>');	
		 <?php }else{ ?>
		 	 txtd3ele = document.createTextNode('-');			 
		 <?php } ?>		 
		 
         td3ele.appendChild(txtd3ele);
		 
		 tr3ele.appendChild(th3ele);
		 tr3ele.appendChild(td3ele);
		 /* End Of Third Row */
		 /* Fourth Row */
		 var tr4ele = document.createElement('tr');
		 
		 var th4ele = document.createElement('th');
		 th4ele.setAttribute("style", "width:30%;");
		 var txt4ele = document.createTextNode("Faculty Inchargename");
         th4ele.appendChild(txt4ele);
		 
		 var td4ele = document.createElement('td');
		 td4ele.setAttribute("style", "width:70%;");
		 var txtd4ele ="";
		 <?php if($researchfacility_1['facultyinchargename']!=null && $researchfacility_1['facultyinchargename']!=""){ ?>		 	 
			 txtd4ele = document.createTextNode('<?php echo $researchfacility_1['facultyinchargename'] ?>');	
		 <?php }else{ ?>
		 	 txtd4ele = document.createTextNode('-');			 
		 <?php } ?>		 
		 
         td4ele.appendChild(txtd4ele);
		 
		 tr4ele.appendChild(th4ele);
		 tr4ele.appendChild(td4ele);
		 /* End Of Fourth Row */
		 /* Fifth Row */
		 var tr5ele = document.createElement('tr');
		 
		 var th5ele = document.createElement('th');
		 th5ele.setAttribute("style", "width:30%;");
		 var txt5ele = document.createTextNode("facultyinchargecontact");
         th5ele.appendChild(txt5ele);
		 
		 var td5ele = document.createElement('td');
		 td5ele.setAttribute("style", "width:70%;");
		 var txtd5ele ="";
		 <?php if($researchfacility_1['facultyinchargecontact']!=null && $researchfacility_1['facultyinchargecontact']!=""){ ?>		 	 
			 txtd5ele = document.createTextNode('<?php echo $researchfacility_1['facultyinchargecontact'] ?>');	
		 <?php }else{ ?>
		 	 txtd5ele = document.createTextNode('-');			 
		 <?php } ?>		 
		 
         td5ele.appendChild(txtd5ele);
		 
		 tr5ele.appendChild(th5ele);
		 tr5ele.appendChild(td5ele);
		 /* End Of Fifth Row */
		 /* Sixth Row */
		 var tr6ele = document.createElement('tr');
		 
		 var th6ele = document.createElement('th');
		 th6ele.setAttribute("style", "width:30%;");
		 var txt6ele = document.createTextNode("Methods");
         th6ele.appendChild(txt6ele);
		 
		 var td6ele = document.createElement('td');
		 td6ele.setAttribute("style", "width:70%;");
		 var txtd6ele ="";
		 <?php if($researchfacility_1['methods']!=null && $researchfacility_1['methods']!=""){ ?>		 	 
			 txtd6ele = document.createTextNode('<?php echo $researchfacility_1['methods'] ?>');	
		 <?php }else{ ?>
		 	 txtd6ele = document.createTextNode('-');			 
		 <?php } ?>		 
		 
         td6ele.appendChild(txtd6ele);
		 
		 tr6ele.appendChild(th6ele);
		 tr6ele.appendChild(td6ele);
		 /* End Of Sixth Row */
		 /* Seventh Row */
		  var tr7ele = document.createElement('tr');
		 
		 var th7ele = document.createElement('th');		 
		 var txt7ele = document.createTextNode("Max Pressure");
         th7ele.appendChild(txt7ele);
		 
		 var td7ele = document.createElement('td');	
		 
		  var txtd7ele ="";		 
		 <?php if($researchfacility_1['maxpressure']!=null && $researchfacility_1['maxpressure']!=""){ ?>		 	 
			 txtd7ele = document.createTextNode('<?php echo $researchfacility_1['maxpressure'] ?>');	
		 <?php }else{ ?>
		 	 txtd7ele = document.createTextNode('-');			 
		 <?php } ?>	
         td7ele.appendChild(txtd7ele);
		 
		 tr7ele.appendChild(th7ele);
		 tr7ele.appendChild(td7ele);
		 /* End Of Seventh Row */
		 
		  /* Eigth Row */
		  var tr8ele = document.createElement('tr');
		 
		 var th8ele = document.createElement('th');		 
		 var txt8ele = document.createTextNode("Measurement Range");
         th8ele.appendChild(txt8ele);
		 
		 var td8ele = document.createElement('td');		
		 
		  var txtd8ele ="";		 
		 <?php if($researchfacility_1['measurementrange']!=null && $researchfacility_1['measurementrange']!=""){ ?>		 	 
			 txtd8ele = document.createTextNode('<?php echo $researchfacility_1['measurementrange'] ?>');	
		 <?php }else{ ?>
		 	 txtd8ele = document.createTextNode('-');			 
		 <?php } ?>	
         td8ele.appendChild(txtd8ele);
		 
		 tr8ele.appendChild(th8ele);
		 tr8ele.appendChild(td8ele);
		 /* End Of Eigth Row */
		 
		  /* Ninth Row */
		  var tr9ele = document.createElement('tr');
		 
		 var th9ele = document.createElement('th');		 
		 var txt9ele = document.createTextNode("Coating Range");
         th9ele.appendChild(txt9ele);
		 
		 var td9ele = document.createElement('td');	
		 
		  var txtd9ele ="";		 
		 <?php if($researchfacility_1['coatingrange']!=null && $researchfacility_1['coatingrange']!=""){ ?>		 	 
			 txtd9ele = document.createTextNode('<?php echo $researchfacility_1['coatingrange'] ?>');	
		 <?php }else{ ?>
		 	 txtd9ele = document.createTextNode('-');			 
		 <?php } ?>	
         td9ele.appendChild(txtd9ele);
		 
		 tr9ele.appendChild(th9ele);
		 tr9ele.appendChild(td9ele);
		 /* End Of Ninth Row */
		 
		  /* Tenth Row */
		  var tr10ele = document.createElement('tr');
		 
		 var th10ele = document.createElement('th');		 
		 var txt10ele = document.createTextNode("Usages");
         th10ele.appendChild(txt10ele);
		 
		 var td10ele = document.createElement('td');
		 
		 var txtd10ele ="";		 
		 <?php if($researchfacility_1['usages']!=null && $researchfacility_1['usages']!=""){ ?>		 	 
			 txtd10ele = document.createTextNode('<?php echo $researchfacility_1['usages'] ?>');	
		 <?php }else{ ?>
		 	 txtd10ele = document.createTextNode('-');			 
		 <?php } ?>	
         td10ele.appendChild(txtd10ele);
		 
		 tr10ele.appendChild(th10ele);
		 tr10ele.appendChild(td10ele);
		 /* End Of Tenth Row */
		 
		 /* Eleventh Row */
		  var tr11ele = document.createElement('tr');
		 
		 var th11ele = document.createElement('th');		 
		 var txt11ele = document.createTextNode("Speed Or Temparature");
         th11ele.appendChild(txt11ele);
		 
		 var td11ele = document.createElement('td');
		 
		  var txtd11ele ="";		 
		 <?php if($researchfacility_1['speedortemparature']!=null && $researchfacility_1['speedortemparature']!=""){ ?>		 	 
			 txtd11ele = document.createTextNode('<?php echo $researchfacility_1['speedortemparature'] ?>');	
		 <?php }else{ ?>
		 	 txtd11ele = document.createTextNode('-');			 
		 <?php } ?>	
         td11ele.appendChild(txtd11ele);
		 
		 tr11ele.appendChild(th11ele);
		 tr11ele.appendChild(td11ele);
		 /* End Of Eleventh Row */
		 
		 
		 //tbodyele.appendChild(tr1ele);
		 tbodyele.appendChild(tr2ele);
		 tbodyele.appendChild(tr3ele);
		 tbodyele.appendChild(tr4ele);
		 tbodyele.appendChild(tr5ele);
		 tbodyele.appendChild(tr6ele);
		 tbodyele.appendChild(tr7ele);
		 tbodyele.appendChild(tr8ele);
		 tbodyele.appendChild(tr9ele);
		 tbodyele.appendChild(tr10ele);
		 tbodyele.appendChild(tr11ele);
		 tblele.appendChild(tbodyele);
		 
		 /*appendtable = '<table class="table table-bordered" style="width:550px;height:auto;"><tbody><tr><th style="width:30%;">Equipment Name</th><td style="width:70%;"><?php echo $researchfacility_1['equipmentname'] ?></td></tr><tr><th>Equipment Company</th><td></td></tr><tr><th>Max Temparature</th><td><?php echo $researchfacility_1['maxtemparature'] ?></td></tr><tr><th>Faculty Inchargename</th><td><?php echo $researchfacility_1['facultyinchargename'] ?></td></tr><tr><th>Faculty Inchargecontact</th><td><?php echo $researchfacility_1['facultyinchargecontact'] ?></td></tr><tr><th>Methods</th><td></td></tr><tr><th>Max Pressure</th><td><?php echo $researchfacility_1['maxpressure'] ?></td></tr><tr><th>Measurement Range</th><td><?php echo $researchfacility_1['measurementrange'] ?></td></tr><tr><th>Coating Range</th><td><?php echo $researchfacility_1['coatingrange'] ?></td></tr><tr><th>Usages</th><td><?php echo $researchfacility_1['usages'] ?></td></th></tr><tr><th>Speed Or Temparature</th><td><?php echo $researchfacility_1['speedortemparature'] ?></td></th></tr></tbody></table>';
		 */
		 appendrow = appendrow + '<div class="description-wrapper"><div class="share-images-container" style="background-color:#f2f1ed;"><img loading="lazy" src="<?php echo $researchfacility_1['img']?>" class="share-image facilityarticle-img" alt="" /><h3><?php echo $researchfacility_1['equipmentname'] ?></h3></div><div><br>'+tblele.outerHTML+'</div></div><br><br>';
		 		
		 		document.getElementById("contentrows").innerHTML = appendrow;
		 		console.log(document.getElementById("contentrows").innerHTML);
		 appendtable="";
		 <?php
				 $i = $i+1;
			 }
		   }
?>
		 $('#overlayresearchfacilities').modal({
			show: 'true'
		});
	  }		
		
	</script>
	
</body>

</html>