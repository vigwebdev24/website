<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vignan University</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/mblfooter.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/mobileold.css">
    <link rel="stylesheet" href="css/department.css">
	  <link rel="stylesheet" href="css/program.css">



</head>

<script>
    let dept = [];
      const departmentObject = [
   /// {name: "Advanced Computer Science Engineering", value: "ACSE", id: "acse"},
    {name: "ACSE - Artificial Intelligence and Machine", value: "ACSE-aiml", id: "aiml"},
    {name: "ACSE - Cyber Security", value: "ACSE-cs", id: "cs"},
    {name: "ACSE - Computer Science and Business", value: "ACSE-csbs", id: "csbs"},
    {name: "ACSE - Data Science", value: "ACSE-ds", id: "ds"},
    {name: "Agri(B.Sc. (Hons)) & Horti. Sciences", value: "Agri-agri", id: "agri"},
    //{name: "Applied Engineering", value: "AE", id: "ae"},
    {name: "Agriculture Engineering", value: "AGE-age", id: "age"},
    {name: "BioTechnology", value: "BT-bt", id: "bt"},
    {name: "Biomedical Engineering", value: "BME-bi", id: "bi"},
    {name: "Chemical Engineering", value: "chem-chem", id: "chem"},
    {name: "Robotic & Automation", value: "ME-rae", id: "rae"},
    {name: "Civil Engineering", value: "civil-civil", id: "civil"},
    {name: "Computer Science Engineering", value: "CSE-cse", id: "cse"},
    {name: "Dept. of Chemistry", value: "Chemistry-chmstry", id: "chmstry"},
    {name: "Dept. of English", value: "English-eng", id: "eng"},
    {name: "Dept. of Mathematics", value: "Maths", id: "maths"},
    {name: "Dept. of Physics", value: "Physics-phy", id: "phy"},
    {name: "Dept. of Science & Humanities", value: "BSH-ssh", id: "ssh"},
    {name: "Electronics And Communication Engineering", value: "ECE-ece", id: "ece"},
    {name: "Electrical And Electronics Engineering", value: "EEE-eee", id: "eee"},
    {name: "Food Technology", value: "FT-food", id: "food"},
    {name: "Information Technology", value: "IT-it", id: "it"},
    {name: "LAW", value: "LAW-law", id: "law"},
    {name: "Mechanical Engineering", value: "ME-mech", id: "mech"},
    {name: "Management Studies", value: "MGT-mba", id: "mba"},
    {name: "Petroleum Engineering", value: "chem-pet", id: "pet"},
    {name: "Pharmacetuical Sciences", value: "Pharm.Sci.-pharma", id: "pharma"},
    {name: "Textile Technology", value: "TT-tt", id: "tt"}
];
</script>

<style>
body {
    background-color: #F2F1ED !important;
}

.selected-deparment-displayed-cards{
  display:flex;
  flex-wrap:wrap;
}

.selected-deparment-displayed-card{
 margin:1rem;


}

.text_btnnew_innrdiv {
        display: flex; /* Ensure elements are laid out in a row */
        flex-direction:column;
        align-items: center; /* Align items vertically */
        width: 100%; /* Ensure it takes up the full width of its container */
    }
    .text_btnnew_innrdiv_card{
      display:flex;
    }

    .course-cta-text {
        text-decoration: none; /* Remove underline by default */
        display: block; /* Ensure anchor tag is a block element */
    }

    .course-cta-text:hover {
        text-decoration: none; /* Ensure underline does not appear on hover */
    }

    .course-cta-divider {
        width: 45%; /* Ensures the divider covers the full width of the parent container */
        color:var(--Colors-Buttons-Primary-Button, #992e00);
        box-sizing: border-box; /* Include padding and border in the element's total width and height */
    }


    
@media (max-width: 360px) {
    #responsive-image {
        width: 130px !important; 
        height: 300px !important; 
        margin-top: 200px;
    }
    .home-goalsdiv{
      align-items: column !important;
    }
    .news-txt{
      margin-left: -200px !important;
      margin-top: -90px !important;
    }
    .home_goalstitle{
      margin-left: -200px !important;
      margin-top: 30px !important;
    }
}

@media (max-width: 768px) {
  #responsive-image {
        width: 300px !important; 
        height: 400px !important; 
        margin-top: 20px;
    }
    .home-goalsdiv{
      align-items: column !important;
    }
    .news-txt{
      margin-left: -100px !important;
      margin-top: -90px !important;
    }
    .home_goalstitle{
      margin-left: -100px !important;
      margin-top: 30px !important;
    }
}

</style>

<body>
    <?php
include_once 'connect.php';
include_once  'navbar.php';

?>

<div class="container home-div1">
<?php 

$sqlquery1 ="SELECT * FROM  sections  where id='dept'";

$result=mysqli_query($conn, $sqlquery1);
$goals = $result->fetch_assoc();
?>
    <div class="container1">
        <div class="academics-container">
  <div class="academics-info">
    <h1 class="academics-title"><?php echo $goals['title']?></h1>
    <h2 class="academics-subtitle"><?php echo $goals['descr'];?></h2>
  </div>
  <div class="search-filter-container">
    <div class="search-container">
      <span class="search-input-container">
      <img src="assets/svgicons/search.svg" alt="" class="prog-search-icon" />
       
        <input type="text" class="search-input" id="search" placeholder="Search for Departments" autofocus/>
</span>
      
      <div class="search-divider"></div>
    </div>
    <button class="filter-button" data-toggle="modal" data-target="#flipFlop">
      <img src="assets/svgicons/filter_list.svg" alt="" class="filter-icon" />
      <span class="filter-text"><?php echo $goals['btn_nm1']; ?></span>
    </button>
  </div>
</div>
        <?php
    $sqlquery21 ="SELECT * FROM  school where id='sch1'";
      $result=mysqli_query($conn, $sqlquery21);
      $goals = $result->fetch_assoc();    
?>

            <div class="col-lg-12" style="margin-top: 20px;"><br><br>

<!------------------------- to display the selected department from the filter-----------------------------------  -->
         <!-- this is for read the deparment object and convert it into php format and fetch the data and display it -->
              <div class="selected-deparment-displayed-cards-container" id="selected-deparment-displayed"> 
            
                  <div class="selected-deparment-displayed-cards " id="selected-deparment-displayed-cards">

                  </div>
          
              </div>



                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-bottom: 100px;">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <!-- <a class="question" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    01 SCHOOL OF CORE ENGINEERING
                                </a> -->
                                <a class="question" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <span style="margin-left: -10px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_num']; ?></span> <span style="margin-left: 50px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_name']; ?></span>
                                </a>
                            </h4>

                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                            <?php
    $sqlquery211 ="SELECT * FROM  department where id='sch1_dept1'";
      $result=mysqli_query($conn, $sqlquery211);
      $goals = $result->fetch_assoc();    
?>
                            <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2111 ="SELECT * FROM  branches where id='sch1_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2111);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?><br><?php echo $goals['branch_name4']; ?>
              </div>
              <?php
    $sqlquery211 ="SELECT * FROM  department where id='sch1_dept1'";
      $result=mysqli_query($conn, $sqlquery211);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2111 ="SELECT * FROM  branches where id='sch1_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2111);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
          <div class="styled-div"></div>
          <?php
    $sqlquery212 ="SELECT * FROM  department where id='sch1_dept2'";
      $result=mysqli_query($conn, $sqlquery212);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2112 ="SELECT * FROM  branches where id='sch1_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2112);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery212 ="SELECT * FROM  department where id='sch1_dept2'";
      $result=mysqli_query($conn, $sqlquery212);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2112 ="SELECT * FROM  branches where id='sch1_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2112);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>

          <div class="styled-div"></div>
          <?php
    $sqlquery213 ="SELECT * FROM  department where id='sch1_dept3'";
      $result=mysqli_query($conn, $sqlquery213);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2113 ="SELECT * FROM  branches where id='sch1_dept3_branch3'";
      $result=mysqli_query($conn, $sqlquery2113);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery213 ="SELECT * FROM  department where id='sch1_dept3'";
      $result=mysqli_query($conn, $sqlquery213);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2113 ="SELECT * FROM  branches where id='sch1_dept3_branch3'";
      $result=mysqli_query($conn, $sqlquery2113);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>

          <div class="styled-div"></div>
          <?php
    $sqlquery214 ="SELECT * FROM  department where id='sch1_dept4'";
      $result=mysqli_query($conn, $sqlquery214);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2114 ="SELECT * FROM  branches where id='sch1_dept4_branch4'";
      $result=mysqli_query($conn, $sqlquery2114);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery214 ="SELECT * FROM  department where id='sch1_dept4'";
      $result=mysqli_query($conn, $sqlquery214);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <!-- <?php echo $goals['dept_btn_link']; ?> -->
              
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2114 ="SELECT * FROM  branches where id='sch1_dept4_branch4'";
      $result=mysqli_query($conn, $sqlquery2114);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>

          <div class="styled-div"></div>
          <?php
    $sqlquery215 ="SELECT * FROM  department where id='sch1_dept5'";
      $result=mysqli_query($conn, $sqlquery215);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2115 ="SELECT * FROM  branches where id='sch1_dept5_branch5'";
      $result=mysqli_query($conn, $sqlquery2115);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery215 ="SELECT * FROM  department where id='sch1_dept5'";
      $result=mysqli_query($conn, $sqlquery215);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2115 ="SELECT * FROM  branches where id='sch1_dept5_branch5'";
      $result=mysqli_query($conn, $sqlquery2115);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
                            </div>
                        </div>
                    </div>
                    <?php
    $sqlquery22 ="SELECT * FROM  school where id='sch2'";

      $result=mysqli_query($conn, $sqlquery22);
      $goals = $result->fetch_assoc();
    //  print_r($result);
    
?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span style="margin-left: -10px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_num']; ?></span> <span style="margin-left: 50px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_name']; ?></span>
                                </a>
                            </h4>

                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                            <?php
    $sqlquery221 ="SELECT * FROM  department where id='sch2_dept1'";
      $result=mysqli_query($conn, $sqlquery221);
      $goals = $result->fetch_assoc();    
?>
                            <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2121 ="SELECT * FROM  branches where id='sch2_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2121);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery221 ="SELECT * FROM  department where id='sch2_dept1'";
      $result=mysqli_query($conn, $sqlquery221);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2121 ="SELECT * FROM  branches where id='sch2_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2121);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>

          <div class="styled-div"></div>
          <?php
    $sqlquery222 ="SELECT * FROM  department where id='sch2_dept2'";
      $result=mysqli_query($conn, $sqlquery222);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2122 ="SELECT * FROM  branches where id='sch2_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2122);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?>
              </div>
              <?php
    $sqlquery222 ="SELECT * FROM  department where id='sch2_dept2'";
      $result=mysqli_query($conn, $sqlquery222);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2122 ="SELECT * FROM  branches where id='sch2_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2122);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>

          <div class="styled-div"></div>
          <?php
    $sqlquery223 ="SELECT * FROM  department where id='sch2_dept3'";
      $result=mysqli_query($conn, $sqlquery223);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2123 ="SELECT * FROM  branches where id='sch2_dept3_branch3'";
      $result=mysqli_query($conn, $sqlquery2123);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery223 ="SELECT * FROM  department where id='sch2_dept3'";
      $result=mysqli_query($conn, $sqlquery223);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2123 ="SELECT * FROM  branches where id='sch2_dept3_branch3'";
      $result=mysqli_query($conn, $sqlquery2123);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
                            </div>
                        </div>
                    </div>
                    <?php
    $sqlquery23 ="SELECT * FROM  school where id='sch3'";
      $result=mysqli_query($conn, $sqlquery23);
      $goals = $result->fetch_assoc();    
?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span style="margin-left: -10px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_num']; ?></span> <span style="margin-left: 50px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_name']; ?></span>
                                </a>
                            </h4>

                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                            <?php
    $sqlquery231 ="SELECT * FROM  department where id='sch3_dept1'";
      $result=mysqli_query($conn, $sqlquery231);
      $goals = $result->fetch_assoc();    
?>
                            <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2131 ="SELECT * FROM  branches where id='sch3_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2131);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery231 ="SELECT * FROM  department where id='sch3_dept1'";
      $result=mysqli_query($conn, $sqlquery231);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2131 ="SELECT * FROM  branches where id='sch3_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2131);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
          <div class="styled-div"></div>
          <?php
    $sqlquery232 ="SELECT * FROM  department where id='sch3_dept2'";
      $result=mysqli_query($conn, $sqlquery232);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2132 ="SELECT * FROM  branches where id='sch3_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2132);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?><br><?php echo $goals['branch_name4']; ?>
              </div>
              <?php
    $sqlquery232 ="SELECT * FROM  department where id='sch3_dept2'";
      $result=mysqli_query($conn, $sqlquery232);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2132 ="SELECT * FROM  branches where id='sch3_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2132);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>

          <div class="styled-div"></div>
          <?php
    $sqlquery233 ="SELECT * FROM  department where id='sch3_dept3'";
      $result=mysqli_query($conn, $sqlquery233);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2133 ="SELECT * FROM  branches where id='sch3_dept3_branch3'";
      $result=mysqli_query($conn, $sqlquery2133);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?><br><?php echo $goals['branch_name4']; ?>
              </div>
              <?php
    $sqlquery233 ="SELECT * FROM  department where id='sch3_dept3'";
      $result=mysqli_query($conn, $sqlquery233);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2133 ="SELECT * FROM  branches where id='sch3_dept3_branch3'";
      $result=mysqli_query($conn, $sqlquery2133);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
                            </div>
                        </div>
                    </div>
                    <?php
    $sqlquery24 ="SELECT * FROM  school where id='sch4'";
      $result=mysqli_query($conn, $sqlquery24);
      $goals = $result->fetch_assoc();    
?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span style="margin-left: -10px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_num']; ?></span> <span style="margin-left: 50px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_name']; ?></span>
                                </a>
                            </h4>

                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                            <?php
    $sqlquery241 ="SELECT * FROM  department where id='sch4_dept1'";
      $result=mysqli_query($conn, $sqlquery241);
      $goals = $result->fetch_assoc();    
?>
                            <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2141 ="SELECT * FROM  branches where id='sch4_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2141);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?><br><?php echo $goals['branch_name4']; ?>
              </div>
              <?php
    $sqlquery241 ="SELECT * FROM  department where id='sch4_dept1'";
      $result=mysqli_query($conn, $sqlquery241);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2141 ="SELECT * FROM  branches where id='sch4_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2141);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
          <div class="styled-div"></div>
          <?php
    $sqlquery242 ="SELECT * FROM  department where id='sch4_dept2'";
      $result=mysqli_query($conn, $sqlquery242);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2142 ="SELECT * FROM  branches where id='sch4_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2142);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?>
              </div>
              <?php
    $sqlquery242 ="SELECT * FROM  department where id='sch4_dept2'";
      $result=mysqli_query($conn, $sqlquery242);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2142 ="SELECT * FROM  branches where id='sch4_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2142);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>

                            </div>
                        </div>
                    </div>
                    <?php
    $sqlquery25 ="SELECT * FROM  school where id='sch5'";
      $result=mysqli_query($conn, $sqlquery25);
      $goals = $result->fetch_assoc();    
?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span style="margin-left: -10px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_num']; ?></span> <span style="margin-left: 50px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_name']; ?></span>
                                </a>
                            </h4>

                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                            <?php
    $sqlquery251 ="SELECT * FROM  department where id='sch5_dept1'";
      $result=mysqli_query($conn, $sqlquery251);
      $goals = $result->fetch_assoc();    
?>
                            <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2151 ="SELECT * FROM  branches where id='sch5_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2151);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery251 ="SELECT * FROM  department where id='sch5_dept1'";
      $result=mysqli_query($conn, $sqlquery251);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2151 ="SELECT * FROM  branches where id='sch5_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2151);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
          <div class="styled-div"></div>
          <?php
    $sqlquery252 ="SELECT * FROM  department where id='sch5_dept2'";
      $result=mysqli_query($conn, $sqlquery252);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2152 ="SELECT * FROM  branches where id='sch5_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2152);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?>
              </div>
              <?php
    $sqlquery252 ="SELECT * FROM  department where id='sch5_dept2'";
      $result=mysqli_query($conn, $sqlquery252);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2152 ="SELECT * FROM  branches where id='sch5_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2152);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>

          
                            </div>
                        </div>
                    </div>
                    <?php
    $sqlquery26 ="SELECT * FROM  school where id='sch6'";
      $result=mysqli_query($conn, $sqlquery26);
      $goals = $result->fetch_assoc();    
?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <span style="margin-left: -10px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_num']; ?></span> <span style="margin-left: 50px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_name']; ?></span>
                                </a>
                            </h4>

                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                            <?php
    $sqlquery261 ="SELECT * FROM  department where id='sch6_dept1'";
      $result=mysqli_query($conn, $sqlquery261);
      $goals = $result->fetch_assoc();    
?>
                            <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2161 ="SELECT * FROM  branches where id='sch6_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2161);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?>
              </div>
              <?php
    $sqlquery261 ="SELECT * FROM  department where id='sch6_dept1'";
      $result=mysqli_query($conn, $sqlquery261);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2161 ="SELECT * FROM  branches where id='sch6_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2161);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
          <div class="styled-div"></div>
          <?php
    $sqlquery262 ="SELECT * FROM  department where id='sch6_dept2'";
      $result=mysqli_query($conn, $sqlquery262);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2162 ="SELECT * FROM  branches where id='sch6_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2162);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery262 ="SELECT * FROM  department where id='sch6_dept2'";
      $result=mysqli_query($conn, $sqlquery262);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2162 ="SELECT * FROM  branches where id='sch6_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2162);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
                            </div>
                        </div>
                    </div>
                    <?php
    $sqlquery27 ="SELECT * FROM  school where id='sch7'";
      $result=mysqli_query($conn, $sqlquery27);
      $goals = $result->fetch_assoc();    
?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="question collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <span style="margin-left: -10px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_num']; ?></span> <span style="margin-left: 50px; font-size:25px; font-weight: bold;"><?php echo $goals['sch_name']; ?></span>
                                </a>
                            </h4>

                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                            <?php
    $sqlquery271 ="SELECT * FROM  department where id='sch7_dept1'";
      $result=mysqli_query($conn, $sqlquery271);
      $goals = $result->fetch_assoc();    
?>
                            <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2171 ="SELECT * FROM  branches where id='sch7_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2171);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?>
              </div>
              <?php
    $sqlquery271 ="SELECT * FROM  department where id='sch7_dept1'";
      $result=mysqli_query($conn, $sqlquery271);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2171 ="SELECT * FROM  branches where id='sch7_dept1_branch1'";
      $result=mysqli_query($conn, $sqlquery2171);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
          <div class="styled-div"></div>
          <?php
    $sqlquery272 ="SELECT * FROM  department where id='sch7_dept2'";
      $result=mysqli_query($conn, $sqlquery272);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2172 ="SELECT * FROM  branches where id='sch7_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2172);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery272 ="SELECT * FROM  department where id='sch7_dept2'";
      $result=mysqli_query($conn, $sqlquery272);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2172 ="SELECT * FROM  branches where id='sch7_dept2_branch2'";
      $result=mysqli_query($conn, $sqlquery2172);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
          <div class="styled-div"></div>
          <?php
    $sqlquery273 ="SELECT * FROM  department where id='sch7_dept3'";
      $result=mysqli_query($conn, $sqlquery273);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2173 ="SELECT * FROM  branches where id='sch7_dept3_branch3'";
      $result=mysqli_query($conn, $sqlquery2173);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?>
              </div>
              <?php
    $sqlquery273 ="SELECT * FROM  department where id='sch7_dept3'";
      $result=mysqli_query($conn, $sqlquery273);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2173 ="SELECT * FROM  branches where id='sch7_dept3_branch3'";
      $result=mysqli_query($conn, $sqlquery2173);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
          <div class="styled-div"></div>
          <?php
    $sqlquery274 ="SELECT * FROM  department where id='sch7_dept4'";
      $result=mysqli_query($conn, $sqlquery274);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2174 ="SELECT * FROM  branches where id='sch7_dept4_branch4'";
      $result=mysqli_query($conn, $sqlquery2174);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?>
              </div>
              <?php
    $sqlquery274 ="SELECT * FROM  department where id='sch7_dept4'";
      $result=mysqli_query($conn, $sqlquery274);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2174 ="SELECT * FROM  branches where id='sch7_dept4_branch4'";
      $result=mysqli_query($conn, $sqlquery2174);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>
          <div class="styled-div"></div>
          <?php
    $sqlquery275 ="SELECT * FROM  department where id='sch7_dept5'";
      $result=mysqli_query($conn, $sqlquery275);
      $goals = $result->fetch_assoc();    
?>
          <div class="content-wrapper">
            <div class="text-and-button">
              <div class="main-text"><?php echo $goals['dept_name']; ?></div>
              <?php
    $sqlquery2175 ="SELECT * FROM  branches where id='sch7_dept5_branch5'";
      $result=mysqli_query($conn, $sqlquery2175);
      $goals = $result->fetch_assoc();    
?>
              <div class="below-text"><?php echo $goals['title']; ?></div>
              <!-- <div class="below1-text">B.Tech</div> -->
              <div class="desc-text">
              <?php echo $goals['branch_name1']; ?><br><?php echo $goals['branch_name2']; ?><br><?php echo $goals['branch_name3']; ?><br><?php echo $goals['branch_name4']; ?>
              </div>
              <?php
    $sqlquery275 ="SELECT * FROM  department where id='sch7_dept5'";
      $result=mysqli_query($conn, $sqlquery275);
      $goals = $result->fetch_assoc();    
?>
              <div class="col-lg-6" style="margin-left: -50px;">
              <a href="departments/depthome.php?deptid=<?php echo $goals['id']; ?>&school=<?php echo $goals['schl_id'];?>&deptnm=<?php echo $goals['dept_short_name']?>" class="button_primary Ss-btn_txt"><?php echo $goals['dept_btn']; ?></a>
            </div>
            </div>
            <?php
    $sqlquery2175 ="SELECT * FROM  branches where id='sch7_dept5_branch5'";
      $result=mysqli_query($conn, $sqlquery2175);
      $goals = $result->fetch_assoc();    
?>
            <img src="<?php echo $goals['image']; ?>" alt="Image" class="img-fluid" id="responsive-image" style="width: 600px; height: 430px;">
          </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php
        include_once 'footer.php';
        ?>
</div>
<!-- The modal -->

<div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
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
                            <div class="modal-bydept">BY departments <button class="filterbtn-search"
                                    id="filtersearch"><img src="assets/icons/search_square.webp"
                                        class="search-icn" /></button></div>

                            <div class="search-box filtersearch-box" id="filtersearch-show" style="display:none;">
                                <img src="assets/icons/search_square.webp" class="filtersearch-icon" />
                                <input type="text" class="input-search filterinput-search" id="searchterm" value=""
                                    placeholder="" onkeyup="filterFunction()">
                                <img src="assets/icons/cross.png" class="filter-cross"
                                    onclick="abortterm('searchterm')" />

                            </div>
                            <div class="selectontxt-div" id="selectiondiv" style="display:none;">
                                <div class="selectontxt-innrdiv">
                                    <div class="selecte_no"><span id="selected"></span> Selected</div>
                                </div>
                            </div>


                            <!-- <ul class="modal_ul" id="depul">
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
                                            <input type="checkbox" value="chmstry" id="chmstry" class="dept"
                                                name="dept[]">
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
                                            <input type="checkbox" value="pharma" id="pharma" class="dept"
                                                name="dept[]">
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
                            </ul> -->
                            <ul class="modal_ul" id="depul">

                            </ul>

                        </div>
                        <div class="modal-footer filter-footer">

                            <button class="button_primary filtermodal-btn_txt modal-btn"  onclick="filterdepartment()">Apply Filter</button>
                            <button class="button_secondary filtermodal-btn_txt2 modal-btn" onclick="clearall()">Clear
                                All</button>
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
</div>
            <!-- The modal end -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/common.js"></script>
        
        <script>


    // -----------------this is for display the department list -------------------------------------------------------
          const departmentList = document.getElementById('depul');
          departmentObject.forEach(department => {
              const listItem = document.createElement('li');
              listItem.className = 'modal_listbrdr';

              listItem.innerHTML = `
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" value="${department.value}" id="${department.id}" class="dept" name="dept[]">
                          ${department.name}
                      </label>
                  </div>
              `;

              departmentList.appendChild(listItem);
          });

        
//------------------------------------------------------------------------------------------------------
         
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

          // ----------to clear the selected department data from the webpage-------------------
            // remove all the data from the array
            dept = [];
            // to remove the content from the webpage
            const container = document.getElementById('selected-deparment-displayed-cards');
            container.innerHTML = ''; // Clear existing content
        }
        // let dept = [];
        
        $('.dept').on('click', function() {
			var depul = document.getElementById('depul');
            depul.style.height = '74%';

            var deptnm = $(this).val();
			var deptid = $(this)[0].id;
			var split = deptnm.split("-");
			var dpt = split[0];
            console.log(jQuery.inArray(deptid, dept) === -1);
		
            if (jQuery.inArray(deptnm, dept) === -1) {
                $(".dept:checked").each(function() {
                    //$(".dept:checked").removeAttr('checked');
                  
                    dept.push(dpt);
                    dept = dept.filter((item,index) => dept.indexOf(item) === index);
					console.log('checking dept variable')
					console.log(dept);

                });
				  $('#selectiondiv').css('display', 'inline-flex');
				console.log('appending selection');
	             
				
            $("#selected").text($('input:checkbox.dept:checked').length);
            $('.selecte_no').append(` <div class="smallchip-div" id=` + deptnm +`>
                                                <div class="smallchip-txt">`+ deptnm +` </div>
                                                <div class="forward_arrw">
                                                    <img src="assets/icons/cross.png" class="img-size" onclick="closechip('` + deptnm +`')" />
                                                </div>
                                            </div>`);
            } 
			else {
                console.log('remove');
				  console.log(dpt);
				console.log(deptnm);
                const branchindex = dept.indexOf(dpt);
                console.log('index: '+branchindex);
				 $("#selected").text($('input:checkbox.dept:checked').length);
                //dept.splice(branchindex, 1);
                 //closechip(dpt);
            }
            console.log(dept);
			dept.forEach((item,index) => { console.log('**********');console.log(item);});
			console.log($('input:checkbox.dept:checked').length);
          
            //  dept.pop();
        });

        function closechip(chipid) {
			 console.log('chipid');
            console.log(chipid);
            //  console.log(chipid[0].id);
            var chip = document.getElementById(chipid);
            console.log(chip);
            if (chip == null) {
                $('#' + chip.id + ':checked').removeAttr('checked');
                document.getElementById(chipid.id).style.display = 'none';
                console.log($('input[name="dept[]"]:checked').length);
                $("#selected").text($('input[name="dept[]"]:checked').length);
                chip.style.display = 'none';
            } else {
				var checkboxid = chipid.split("-");
				var id = checkboxid[0];
                $('#' + id + ':checked').removeAttr('checked');
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
            // console.log("optn data:"+ optn);
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


 // --------------------------this for filterdepartment() method -----------------------------------
  function filterdepartment(){
            console.log('filterdepartment called ');
        // here all the department prefix are stored in the dept array 
              console.log(dept)

          //If you want to assign the dept array object from JavaScript directly to a PHP variable without recreating it, you'll need to send the data from JavaScript to PHP using an HTTP request. 
          //This typically involves using AJAX or a similar method to send the data to the server, where PHP can then process it.
          // this is for send the data to php code so that we are using the ajax  beause we can't send the data 
          // Send the data to the PHP script
          // Send the data to the PHP script
 // Send the dept array to PHP
 // Send the data to the PHP script
 $.ajax({
        url: 'departmentFetchData.php', // PHP script to handle the request
        type: 'POST',
        data: { dept: JSON.stringify(dept) }, // Send data as JSON string
        success: function(response) {
            console.log('Success:', response);
            // If response contains 'receivedData', you can render it or process it further
            if (response.status === 'success') {
                renderDepartments(response.receivedData);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', xhr.responseText);
        }
    });
}

function renderDepartments(departments) {
    // Assuming you have a container element with id 'department-container'
    const container = document.getElementById('selected-deparment-displayed-cards');
    // selected-deparment-displayed-cards-container
    // selected-deparment-displayed-cards
    // selected-deparment-displayed-card

    container.innerHTML = ''; // Clear existing content
    
    departments.forEach(dept => {
        const div = document.createElement('div');
        div.classList.add('selected-deparment-displayed-card');
        div.classList.add('course-card');
        div.innerHTML = `
            <h3 class="course-name">${dept.dept_name}</h3>
             <div class="text_btnnew_innrdiv">
                <div class="text_btnnew_innrdiv_card">
                    <div class="text_btnnew_txt">
                        <a href="${dept.dept_btn_link}" class="course-cta-text" style="color:var(--Colors-Buttons-Primary-Button, #992e00);"> 
                        <div class="course-cta-text">${dept.dept_btn}</div> 
                        </a>
                    </div>
                    <div>
                      <img src="assets/images/arrow.svg" alt="Arrow icon" class="course-cta-icon" />
                    </div>
                </div>
                <div class="course-cta-divider"  ></div>
           </div>

                  
         
            
        `;
        container.appendChild(div);
    });

    // now to close the model 
     // Get the modal
     const modal = document.getElementById('flipFlop');
    //  modal.style.display = 'none';
     // When the user clicks anywhere outside of the modal, close it
  
                            $('#flipFlop').modal('hide')

  

}



</script>

</body>
</html>