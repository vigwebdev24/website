	
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
    <link rel="stylesheet" href="dep_css/depeve-details.css">
    <link rel="stylesheet" href="dep_css/conference.css">
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
$id =  $_GET['id'];
?>
    <div class="container home-div1 pagetop_space">
        <div class="newstudent-div-space">


            <div class="conf_div1">
            <?php 

$sqlquery1="SELECT * FROM  conferences  where dept='".$dptnm."' and  id='".$id."' ";
//echo $sqlquery1;
$result3=mysqli_query($conn, $sqlquery1);
while ($row = $result3->fetch_assoc()) { 
    
?>
                <div class="conf_div1_left">

                    <div class="conf_div1_condiv">
                        <div class="conf_div1_title">
                           <?php echo $row['title']; ?>
                        </div>
                        <div class="conf_div1_desc">
                        <?php echo $row['descr']; ?>
                           
                        </div>
                    </div>
                    
                    <div class="conf_div1_btnsdiv">
                        <button class="cta_button_primary Ss-btn_txt" onclick="window.open('#',  '_blank')"  <?php if($row['btn1_nm'] == ''){echo 'style="display:none !important;"';}else{echo 'style="display:flex !important;"';}?>>
                            Register
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2961_1144" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2"
                                    y="-2" width="24" height="24">
                                    <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2961_1144)">
                                    <path
                                        d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                        fill="#F2F1ED" />
                                </g>
                            </svg>
                        </button>
                        <button class="cta_button_secondary Secondary-btn_txt" onclick="window.open('#',  '_blank')" <?php if($row['btn1_nm'] == ''){echo 'style="display:none !important;"';}else{echo 'style="display:flex !important;"';}?>>
                            Submit Paper
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2961_1149" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-2"
                                    y="-2" width="24" height="24">
                                    <rect x="-2" y="-2" width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_2961_1149)">
                                    <path
                                        d="M13.0849 10.8333H3.75V9.20833H13.0849L8.81731 4.94069L9.97915 3.75L16.25 10.0208L10.0208 16.25L8.85898 15.0593L13.0849 10.8333Z"
                                        fill="#992E00" />
                                </g>
                            </svg>
                        </button>
                    </div>

                </div>
                <img src="dep_assets/images/confrnc_img.webp" alt="" srcset="" class="conf_div1_img">

            </div>
           

            <!-- Overview starts here -->
            <div class="conf_div2">
                <div class="conf_div2_innrdiv">
                    <div class="conf_div2_hdng">
                         <?php echo $row['subsec1_title']; ?>
                    </div>
                    <div class="conf_div2_desc">
                     <?php echo $row['subsec1_desc']; ?>
                    </div>
                    <div class="text_btnnew" onclick="window.open('<?php echo $row['subsec1_btn1_hlink'] ?>', '_blank')">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt">
                             <?php echo $row['subsec1_btn1']; ?>
                            </div>
                            <div>
                                <img loading="lazy" src="../assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="conf_div2_innrdiv">
                    <div class="conf_div2_hdng">
                         <?php echo $row['subsec2_title']; ?>
                    </div>
                    <div class="conf_div2_desc">
                        <?php echo $row['subsec2_desc']; ?>
                    </div>
                    <div class="text_btnnew" onclick="window.open('<?php echo $row['subsec1_btn1_hlink'] ?>', '_blank')">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt">
                                <?php echo $row['subsec1_btn1']; ?>
                            </div>
                            <div>
                                <img loading="lazy" src="../assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Overview ends here -->
 <?php }?>
            <?php 

$sqlquery2="SELECT * FROM  importantdt  where  cnfrnc_id='".$id."' ";
//echo $sqlquery2;
$result2=mysqli_query($conn, $sqlquery2);
    
?>
            <!-- Important dates start here -->
            <div class="dates-column">
                <div class="conf_div3">
                    <h3 class="conf_div3_hdng">Important Dates</h3>
                    <div class="dates-list">
                        <div class="admission-container">
<?php while ($row = $result2->fetch_assoc()) { 
      $notf_dbdate =new DateTime($row['date']);  // get the event date and set it to the variable $date 
      $month = $notf_dbdate->format('F');
      $notif_dt= $notf_dbdate->format('j');
      $notif_yr= $notf_dbdate->format('Y'); 
    ?>
                        <div class="admission-column">
                                <div class="date-item">
                                    <div class="conf_impdts_card">
                                        <div class="date-details">
                                            <div class="date-month"><?php echo $month." ".$notif_yr; ?></div>
                                            <div class="date-day"><?php echo $notif_dt;?></div>
                                            <div class="date-description"><?php echo $row['desc'];?></div>
                                        </div>
                                        <div class="date-separator">
                                            <img src="../assets/icons/card-calender.png" alt="" class="date-icon" />
                                            <div class="date-line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

<?php }?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Important dates end here -->



            <?php 
            
            $sqlquery3="SELECT * FROM  conferences  where dept='".$dptnm."' and  id='".$id."_cp' ";
//echo $sqlquery1;
$result3=mysqli_query($conn, $sqlquery3);
while ($row = $result3->fetch_assoc()) { 
            
            ?>
            <!-- call papers starts here -->

            <div class="conf_div4">
                <div class="conf_div3_hdng">Call for papers </div>

                <div class="conf_callppr_div">


                <div class="conf_callppr_innrdiv">
                        <div class="conf_callppr_hdng"><?php echo $row['subsec1_title']; ?></div>
                        <div class="conf_div4_desc">
                        <?php echo $row['subsec1_desc']; ?>
                        </div>
                    </div>


                    <div class="conf_callppr_innrdiv">
                        <div class="conf_callppr_hdng"><?php echo $row['subsec2_title']; ?></div>
                        <div class="conf_div4_desc">
                        <?php echo $row['subsec2_desc']; ?>
                        </div>
                    </div>

                    <div class="conf_callppr_innrdiv">
                        <div class="conf_callppr_hdng"><?php echo $row['subsec3_title']; ?></div>
                        <div class="conf_div4_desc">
                        <?php echo $row['subsec3_desc']; ?>
                        </div>
                    </div>

                    <div class="conf_callppr_innrdiv">
                        <div class="conf_callppr_hdng"><?php echo $row['subsec4_title']; ?></div>
                        <div class="conf_div4_desc">
                        <?php echo $row['subsec4_desc']; ?>
                        </div>
                    </div>


                </div>
                <div class="conf_div4_btndiv">
                    <button class="button_primary Ss-btn_txt">Submit Paper</button>
                </div>
            </div>
<?php } ?>
            <!-- call papers ends here -->


       
            <div class="conf_sched_div">
              <div class="conf_sched_title">
                  Schedule
              </div>

            <?php 
             $sqlquery4="SELECT DISTINCT(day),date FROM  conf_schedu  where  cnfrnc_id like '".$id."' ";
            // echo $sqlquery4;
             $result4=mysqli_query($conn, $sqlquery4);
             //print_r($result4);
             while ($row4 = $result4->fetch_assoc()) { 
         
               // print_r($row4['day']);
              $notf_dbdate =new DateTime($row4['date']);  // get the event date and set it to the variable $date 
              $month = substr(($notf_dbdate->format('F')), 0, 3);
              $notif_dt= $notf_dbdate->format('j');
              $notif_yr= $notf_dbdate->format('y'); 
              $day = $notf_dbdate->format('l'); 
              $time = $notf_dbdate->format("h:i");
              $am = $notf_dbdate->format("A");
            
            
            ?>
                                
       
        <!-- schedule starts here -->
           
        <div class="conf_sched_box">
                    
                    <div class="conf_sched_innrbox">
                        <div class="conf_sched_datediv">
                            <div class="conf_sched_date">
                                <?php echo $month.' '. $notif_dt; ?>
                            </div>
                            <div class="conf_sched_day">
                                <?php echo $day; ?>
                            </div>
                        </div>

                        <div class="conf_sched_listbox">

                        <?php 
                        
                        $sqlquery5="SELECT * FROM  conf_schedu  where  cnfrnc_id like '".$id."' and day like '%".$row4['day']."%' order by frm_tm asc ";
                        $result5=mysqli_query($conn, $sqlquery5);
                        while ($row = $result5->fetch_assoc()) { 
                           // print_r($row);
                    //echo $row['day'];
               
                        ?>

                            <div class="conf_sched_listbox_innr">
                                <div class="conf_sched_time">
                                    <?php echo $row['frm_tm'].'-'.$row['to_tm']; ?>
                                  
                                </div>
                                <div class="conf_sched_topicdiv">

                                    <div class="conf_sched_topic_innrdiv">
                                        <div class="conf_sched_topicauthordiv">
                                            <div class="conf_sched_topic">
                                            <?php echo $row['topic']; ?>
                                            </div>
                                            <div class="conf_sched_author">
                                            <?php echo $row['speaker']; ?>
                                            </div>
                                        </div>
                                        <div class="conf_sched_locationdiv">
                                            <div class="conf_sched_loc_hdng">Location</div>

                                            <div class="conf_sched_location">
                                            <?php echo $row['location']; ?>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="conf_sched_separator"></div>
<?php     }  echo '<br><br>';
                                    } ?>

                       

                        </div>




                    </div>




                </div>
            </div>
            </div>




                </div>
            </div>
            <!-- schedule ends here -->


            <!-- Speakers starts here-->

            <div class="dept_evedetails_spkr_div">
                <div class="dept_evedetails_spkr_hdng">
                    Speakers
                </div>
                <div
                    style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;gap: var(--Spacing-Spacing-xxxl, 39px);">
                    <div class="fac_picdiv spk_box">


                        <div class="spkr_card">
                            <img src="../assets/images/personimage.png" alt="" srcset=""
                                class="dept_evedetails_spkr_img">
                            <div class="fac_namediv">
                                <div class="fac_name">
                                    Dr. K.S.M.S Raghava Rao
                                </div>
                                <div class="dept_evedetails_spkr_cptn">ProfessorDepartment of Chemical Engineering,
                                    Indian Institute of Technology, Tirupati</div>
                            </div>
                        </div>

                        <div class="spkr_card">
                            <img src="../assets/images/personimage.png" alt="" srcset=""
                                class="dept_evedetails_spkr_img">
                            <div class="fac_namediv">
                                <div class="fac_name">
                                    Dr. H.N. Mishra
                                </div>
                                <div class="dept_evedetails_spkr_cptn">
                                    ProfessorDepartment of Agricultural and Food Engineering, Indian Institute of
                                    Technology, Kharagpur
                                </div>
                            </div>
                        </div>

                        <div class="spkr_card">
                            <img src="../assets/images/personimage.png" alt="" srcset=""
                                class="dept_evedetails_spkr_img">
                            <div class="fac_namediv">
                                <div class="fac_name">
                                    Dr. Seri Intanbt. Mokhtar
                                </div>
                                <div class="dept_evedetails_spkr_cptn">Associate ProfessorUniversity of Malaysia,
                                    Kelantan.</div>
                            </div>
                        </div>

                        <div class="spkr_card">
                            <img src="../assets/images/personimage.png" alt="" srcset=""
                                class="dept_evedetails_spkr_img">
                            <div class="fac_namediv">
                                <div class="fac_name">
                                    Dr. Shilpa Tejavath
                                </div>
                                <div class="dept_evedetails_spkr_cptn">Founder and DirectorNutrifyU - Health Food
                                    Start-up</div>
                            </div>
                        </div>


                    </div>

                    <div class="fac_picdiv spk_box">


                        <div class="spkr_card">
                            <img src="../assets/images/personimage.png" alt="" srcset=""
                                class="dept_evedetails_spkr_img">
                            <div class="fac_namediv">
                                <div class="fac_name">
                                    Dr. Khamsah Suryati Mohd
                                </div>
                                <div class="dept_evedetails_spkr_cptn">DeanFaculty of Bio resources and Food Industry,
                                    UniSZA, Malaysia</div>
                            </div>
                        </div>

                        <div class="spkr_card">
                            <img src="../assets/images/personimage.png" alt="" srcset=""
                                class="dept_evedetails_spkr_img">
                            <div class="fac_namediv">
                                <div class="fac_name">
                                    Dr. Amin Malik Shah
                                </div>
                                <div class="dept_evedetails_spkr_cptn">Associate ProfessorDepartment of Pharmacology,
                                    UniversitiSains</div>
                            </div>
                        </div>

                        <div class="spkr_card">
                            <img src="../assets/images/personimage.png" alt="" srcset=""
                                class="dept_evedetails_spkr_img">
                            <div class="fac_namediv">
                                <div class="fac_name">
                                    Mr. Sanjeev Kumar Sharma
                                </div>
                                <div class="dept_evedetails_spkr_cptn">ScientistMondelez International, Mumbai</div>
                            </div>
                        </div>


                        <div class="spkr_card">
                            <img src="../assets/images/personimage.png" alt="" srcset=""
                                class="dept_evedetails_spkr_img">
                            <div class="fac_namediv">
                                <div class="fac_name">
                                    Dr. D.C. Joshi
                                </div>
                                <div class="dept_evedetails_spkr_cptn">Vice-ChancellorAgriculture University-Kota,
                                    Rajasthan</div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>


            <!-- Speakers ends here -->


            <!-- Register starts here -->
	
	 <?php 
            
            $sqlquery7="SELECT * FROM  conferences  where dept='".$dptnm."' and  id='".$id."_reg' ";
//echo $sqlquery7;
$result7=mysqli_query($conn, $sqlquery7);
while ($row = $result7->fetch_assoc()) { 
            
            ?>
	

            <div class="conf_reg_div">

                <div class="conf_reg_spacing">
                    <div class="conf_sched_title">
                        <?php echo $row['title'];?>
                    </div>
                    <div class="conf_reg_desc">
						<?php echo $row['descr'];?>
                        <!--Registration should be completed on or before 25 July 2022. Accommodation will be provided on
                        payment basis subject to availability. Payment to register for accepted Papers in the Conference
                        through NEFT only.-->
                    </div>

                    <div class="text_btnnew">
                        <div class="text_btnnew_innrdiv">
                            <div class="text_btnnew_txt">
                                Download Bank Details
                            </div>
                            <div>
                                <img loading="lazy" src="../assets/svgicons/outwardarrow_brown.svg"
                                    style="width: 16px;height: 16px;" />
                            </div>
                        </div>
                    </div>
                </div>
				
				 <div class="conf_org_hdng">
                            Only Conference
                        </div>
				<div class="conf_reg__crd_spacing">
					
				<?php } 
				$sqlquery8="SELECT amt2,cand_typ FROM  conf_reg  where dept='".$dptnm."' and  cnfrnc_id='".$id."_reg' ";
//echo $sqlquery8;
$result8=mysqli_query($conn, $sqlquery8);
	if(mysqli_num_rows($result8) > 0){
while ($row = $result8->fetch_assoc()) { 
				?>
				
				

                    <div class="non-clk_carddiv">
                        <div class="non-clk_card_innrdiv">
                            <div class="non-clk_card_txtdiv">
                                <div class="non-clk_card_txt-innrdiv">
									
                                    <span class="non-clk_num conf_reg_card">₹ <?php echo $row['amt2']; ?></span>
                                    <span class="non-clk_percent"></span>
                                </div>
                               <div class="non-clk_title"><?php echo $row['cand_typ']; ?></div>
                            </div>
                            <div class="non-clk_imgbrdr">
                                <img src="../assets/icons/Event.png" />
                                <div class="non-clk_brdr"></div>
                            </div>
                        </div>
                    </div>



               
				
				<?php  } }?>
				
				 </div>
				
				
				 <div class="conf_org_hdng">
                           Conference & Journal Publications
                        </div>
				<div class="conf_reg__crd_spacing">
					
				<?php 
				$sqlquery9="SELECT amt1,cand_typ FROM  conf_reg  where dept='".$dptnm."' and  cnfrnc_id='".$id."_reg' ";
//echo $sqlquery8;
$result9=mysqli_query($conn, $sqlquery9);
	if(mysqli_num_rows($result9) > 0){
while ($row = $result9->fetch_assoc()) { 
				?>
				
				

                    <div class="non-clk_carddiv">
                        <div class="non-clk_card_innrdiv">
                            <div class="non-clk_card_txtdiv">
                                <div class="non-clk_card_txt-innrdiv">
									
                                    <span class="non-clk_num conf_reg_card">₹ <?php echo $row['amt1']; ?></span>
                                    <span class="non-clk_percent"></span>
                                </div>
                               <div class="non-clk_title"><?php echo $row['cand_typ']; ?></div>
                            </div>
                            <div class="non-clk_imgbrdr">
                                <img src="../assets/icons/Event.png" />
                                <div class="non-clk_brdr"></div>
                            </div>
                        </div>
                    </div>



               
				
				<?php  } }?>
				
				 </div>
				
				
            </div>

            <!-- Register ends here -->

<?php 
				$sqlquery10="SELECT * FROM  coordinators  where dept='".$dptnm."' and  prg_id='".$id."' ";
//echo $sqlquery10;
$result10=mysqli_query($conn, $sqlquery10);
	if(mysqli_num_rows($result10) > 0){
?>
            <!-- Organisation starts here -->
            <div class="conf_org_div">
                <div class="conf_sched_title">
                    Organisation
                </div>

                <div class="conf_org_div">
					  <div class="conf_org_hdng">
                          Chief Patron
                        </div>
					
	<div class="conf_org_innrdiv">
                      
                        <div class="conf_org_content">
							<?php 
		$sqlquery11="SELECT * FROM  coordinators  where dept='".$dptnm."' and  prg_id='".$id."' and org_typ='Chief Patron'";
//echo $sqlquery11;
$result11=mysqli_query($conn, $sqlquery11);
	if(mysqli_num_rows($result11) > 0){
					while ($row2 = $result11->fetch_assoc()) {
							
							?>
                            <div class="conf_org_content_innrdiv">
                                <div class="fac_name"> <?php echo $row2['name']; ?></div>
                                <div class="dept_evedetails_spkr_cptn"><?php echo $row2['sufix']; ?></div>
                            </div>
                           <!-- <div class="conf_org_content_innrdiv">
                                <div class="fac_name">Dr. H.N. Mishra</div>
                                <div class="dept_evedetails_spkr_cptn">ProfessorDepartment of Agricultural and Food
                                    Engineering, Indian Institute of Technology, Kharagpur</div>
                            </div>-->
							<?php }} }
					?>
                        </div>
                    </div>

					


                </div>
				
				
				 <div class="conf_org_div">
					  <div class="conf_org_hdng">
                          Patron
                        </div>
					
	<div class="conf_org_innrdiv">
                      
                        <div class="conf_org_content">
							<?php 
		$sqlquery12="SELECT * FROM  coordinators  where dept='".$dptnm."' and  prg_id='".$id."' and org_typ='Patron'";
//echo $sqlquery11;
$result12=mysqli_query($conn, $sqlquery12);
	if(mysqli_num_rows($result12) > 0){
					while ($row3 = $result12->fetch_assoc()) {
							
							?>
                            <div class="conf_org_content_innrdiv">
                                <div class="fac_name"> <?php echo $row3['name']; ?></div>
                                <div class="dept_evedetails_spkr_cptn"><?php echo $row3['sufix']; ?></div>
                            </div>
                           <!-- <div class="conf_org_content_innrdiv">
                                <div class="fac_name">Dr. H.N. Mishra</div>
                                <div class="dept_evedetails_spkr_cptn">ProfessorDepartment of Agricultural and Food
                                    Engineering, Indian Institute of Technology, Kharagpur</div>
                            </div>-->
							<?php }} 
					?>
                        </div>
                    </div>

					


                </div>
				
				
				<div class="conf_org_div">
					  <div class="conf_org_hdng">
                          Convener
                        </div>
					
	<div class="conf_org_innrdiv">
                      
                        <div class="conf_org_content">
							<?php 
		$sqlquery13="SELECT * FROM  coordinators  where dept='".$dptnm."' and  prg_id='".$id."' and org_typ='Convener'";
//echo $sqlquery11;
$result13=mysqli_query($conn, $sqlquery13);
	if(mysqli_num_rows($result13) > 0){
					while ($row4 = $result13->fetch_assoc()) {
							
							?>
                            <div class="conf_org_content_innrdiv">
                                <div class="fac_name"> <?php echo $row4['name']; ?></div>
                                <div class="dept_evedetails_spkr_cptn"><?php echo $row4['sufix']; ?></div>
                            </div>
                           <!-- <div class="conf_org_content_innrdiv">
                                <div class="fac_name">Dr. H.N. Mishra</div>
                                <div class="dept_evedetails_spkr_cptn">ProfessorDepartment of Agricultural and Food
                                    Engineering, Indian Institute of Technology, Kharagpur</div>
                            </div>-->
							<?php }} 
					?>
                        </div>
                    </div>

					


                </div>
				
				
				


            </div>
            <!-- Organisatin ends here -->


            <!-- Contact us starts here -->

            <div class="dept_evedetails_spkr_div">
                <div class="dept_evedetails_spkr_hdng">
                    Contact us
                </div>

                <div class="fac_picdiv">
<?php 
				$sqlquery11="SELECT * FROM  coordinators  where dept='".$dptnm."' and  prg_id='".$id."' and org_typ='coordinator' ";
//echo $sqlquery10;
$result11=mysqli_query($conn, $sqlquery11);
	if(mysqli_num_rows($result11) > 0){
		while ($row2 = $result11->fetch_assoc()) {
?>
					
					<div class="fac_card">
                        <img src="<?php echo $row2['img']; ?>" alt="" srcset=""
                            class="dept_evedetails_spkr_img">
                        <div class="fac_namediv">
                            <div class="fac_name">
                               <?php echo $row2['name']; ?>
                            </div>
                            <div class="dept_evedetails_spkr_cptn"> <?php echo $row2['sufix']; ?></div>
                        </div>
                    </div>
					
					<?php }}?>

                   <!-- <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset=""
                            class="dept_evedetails_spkr_img">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                B. Aga Reddy
                            </div>
                            <div class="dept_evedetails_spkr_cptn">Dean Placements</div>
                        </div>
                    </div>


                    <div class="fac_card">
                        <img src="../assets/images/personimage.png" alt="" srcset=""
                            class="dept_evedetails_spkr_img">
                        <div class="fac_namediv">
                            <div class="fac_name">
                                CH V B Aditi Kumar
                            </div>
                            <div class="dept_evedetails_spkr_cptn">Dean Training & Corporate Relations</div>
                        </div>
                    </div>-->


                </div>
            </div>


            <!-- Contact us ends here -->


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