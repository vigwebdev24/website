<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vignan University</title>

    <link rel="stylesheet" href="css/careers.css">
    <link rel="stylesheet" href="css/newmodals.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/mblfooter.css">
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
  include_once 'connect.php';
  include_once  'navbar.php';

  ?>

    <div class="container home-div1">

    <?php  $sqlquery1 ="SELECT * FROM  sections  where id='careers'";

$result=mysqli_query($conn, $sqlquery1);
$goals = $result->fetch_assoc();
?>
        <div class="exam-head">
            <div class="exam-title">
            <?php echo $goals['title']?>
            </div>
        </div>

        <div id="apply">
            <div class="exam-nav">
                <div class="exam-nav-leftbox">
                    <div class="exam-nav-title color" onclick="apply()"><?php echo $goals['btn_nm1']?> <div class="hline visible"></div>
                    </div>
                    <div class="exam-nav-title" onclick="timetable()"><?php echo $goals['btn_nm2']?><div class="hline"></div>
                    </div>
                    <div class="exam-nav-title" onclick="questionpaper()"><?php echo $goals['btn_nm3']?> <div class="hline"></div>
                    </div>
                    <div class="exam-nav-title" onclick="schemes()"><?php echo $goals['btn_nm4']?> <div class="hline"></div>
                    </div>
                </div>

            </div>
            <div class="tt">
            <?php  $sqlquery1 ="SELECT * FROM  careers  where career_type='Academic'";

$result=mysqli_query($conn, $sqlquery1);
$goals = $result->fetch_assoc();
?>
                <div class="tt-head"><?php echo $goals['career_type']?></div>

            </div>
            <?php
      $sql = "SELECT * FROM careers where career_type='academic'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      ?>
            <div class="exam-container">
                <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
                <div class="question-box">
                    <div class="apply-box-txt"><?php echo $row['title'] ?>
                        <br>
                        <!-- <?php echo $row['sub_code'] ?> -->
                        <div class="apply-box-desc">
                            <?php echo $row['descr'] ?>
                        </div>
                    </div>
                    <div class="button-container">
                        <div class="text_btnnew" data-toggle="modal" data-target="#overlay">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    <?php echo $row['btn_name'] ?>
                                </div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                        <!-- Static text added here -->
                        <div class="static-text">
                            Deadline: <?php echo $row['caption_date'] ?>
                        </div>
                    </div>
                </div>

                <?php
          }
          ?>
            </div>
            <?php
      }
      ?>

            <div class="tt">
            <?php  $sqlquery2 ="SELECT * FROM  careers  where career_type='Administrative'";

$result=mysqli_query($conn, $sqlquery2);
$goals = $result->fetch_assoc();
?>
                <div class="tt-head"><?php echo $goals['career_type'] ?></div>

            </div>
            <?php
      $sql = "SELECT * FROM careers where career_type='Administrative'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      ?>
            <div class="exam-container">
                <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
                <div class="question-box">
                    <div class="apply-box-txt"><?php echo $row['title'] ?>
                        <br>
                        <!-- <?php echo $row['sub_code'] ?> -->
                        <div class="apply-box-desc">
                            <?php echo $row['descr'] ?>
                        </div>
                    </div>
                    <div class="button-container">
                    <div class="text_btnnew" data-toggle="modal" data-target="#overlay">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    <?php echo $row['btn_name'] ?>
                                </div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                        <!-- Static text added here -->
                        <div class="static-text">
                            Deadline: <?php echo $row['caption_date'] ?>
                        </div>
                    </div>
                </div>

                <?php
          }
          ?>
            </div>
            <?php
      }
      ?>
            <div class="tt">
                <div class="tt-head">Non Teaching Staff</div>

            </div>
            <?php
      $sql = "SELECT * FROM questionpapers";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      ?>
            <div class="exam-container">
                <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
                <div class="question-box">
                    <div class="apply-box-txt"><?php echo $row['title'] ?>
                        <br>
                        <?php echo $row['sub_code'] ?>
                        <div class="apply-box-desc">
                            Thank you for the clarification. Let's re-evaluate the provided code in the context of the
                            circular array problem.In a circular array, the neighbors of the first
                        </div>
                    </div>
                    <div class="button-container">
                    <div class="text_btnnew" data-toggle="modal" data-target="#overlay">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    View Details
                                </div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                        <!-- Static text added here -->
                        <div class="static-text">
                            Deadline: Tue, 01 April
                        </div>
                    </div>
                </div>

                <?php
          }
          ?>
            </div>
            <?php
      }
      ?>
        </div>




        <!-- timetable -->
        <?php  $sqlquery1 ="SELECT * FROM  sections  where id='careers'";

$result=mysqli_query($conn, $sqlquery1);
$goals = $result->fetch_assoc();
?>

        <div id="timetable">
            <div class="exam-nav">
                <div class="exam-nav-leftbox">
                    <div class="exam-nav-title" onclick="apply()"><?php echo $goals['btn_nm1']?> <div class="hline"></div>
                    </div>
                    <div class="exam-nav-title color" onclick="timetable()"><?php echo $goals['btn_nm2']?> <div class="hline visible">
                        </div>
                    </div>
                    <div class="exam-nav-title" onclick="questionpaper()"><?php echo $goals['btn_nm3']?> <div class="hline"></div>
                    </div>
                    <div class="exam-nav-title" onclick="schemes()"><?php echo $goals['btn_nm4']?> <div class="hline"></div>
                    </div>
                </div>

            </div>
            <div class="tt">
            <?php  $sqlquery1 ="SELECT * FROM  careers  where career_type='Academic'";

$result=mysqli_query($conn, $sqlquery1);
$goals = $result->fetch_assoc();
?>
                <div class="tt-head"><?php echo $goals['career_type'] ?></div>

            </div>
            <?php
      $sql = "SELECT * FROM careers where career_type='academic'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      ?>
            <div class="exam-container">
                <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
                <div class="question-box">
                    <div class="apply-box-txt"><?php echo $row['title'] ?>
                        <br>
                        <!-- <?php echo $row['sub_code'] ?> -->
                        <div class="apply-box-desc">
                            <?php echo $row['descr'] ?>
                        </div>
                    </div>
                    <div class="button-container">
                        <div class="text_btnnew" data-toggle="modal" data-target="#overlay">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    <?php echo $row['btn_name'] ?>
                                </div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                        <!-- Static text added here -->
                        <div class="static-text">
                            Deadline: <?php echo $row['caption_date'] ?>
                        </div>
                    </div>
                </div>

                <?php
          }
          ?>
            </div>
            <?php
      }
      ?>
        </div>

        <?php  $sqlquery1 ="SELECT * FROM  sections  where id='careers'";

$result=mysqli_query($conn, $sqlquery1);
$goals = $result->fetch_assoc();
?>
        <div id="questionpaper">
            <div class="exam-nav">
                <div class="exam-nav-leftbox">
                    <div class="exam-nav-title " onclick="apply()"><?php echo $goals['btn_nm1']?> <div class="hline"></div>
                    </div>
                    <div class="exam-nav-title" onclick="timetable()"><?php echo $goals['btn_nm2']?> <div class="hline"></div>
                    </div>
                    <div class="exam-nav-title color" onclick="questionpaper()"><?php echo $goals['btn_nm3']?> <div
                            class="hline visible"></div>
                    </div>
                    <div class="exam-nav-title" onclick="schemes()"><?php echo $goals['btn_nm4']?> <div class="hline"></div>
                    </div>
                </div>

            </div>
            <div class="tt">
            <?php  $sqlquery1 ="SELECT * FROM  careers  where career_type='Administrative'";

$result=mysqli_query($conn, $sqlquery1);
$goals = $result->fetch_assoc();
?>
                <div class="tt-head"><?php echo $goals['career_type'] ?></div>

            </div>
            <?php
      $sql = "SELECT * FROM careers where career_type='Administrative'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      ?>
            <div class="exam-container">
                <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
                <div class="question-box">
                    <div class="apply-box-txt"><?php echo $row['title'] ?>
                        <br>
                        <!-- <?php echo $row['sub_code'] ?> -->
                        <div class="apply-box-desc">
                            <?php echo $row['descr'] ?>
                        </div>
                    </div>
                    <div class="button-container">
                    <div class="text_btnnew" data-toggle="modal" data-target="#overlay">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    <?php echo $row['btn_name'] ?>
                                </div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                        <!-- Static text added here -->
                        <div class="static-text">
                            Deadline: <?php echo $row['caption_date'] ?>
                        </div>
                    </div>
                </div>

                <?php
          }
          ?>
            </div>
            <?php
      }
      ?>

        </div>
        <?php  $sqlquery1 ="SELECT * FROM  sections  where id='careers'";

$result=mysqli_query($conn, $sqlquery1);
$goals = $result->fetch_assoc();
?>
        <div id="schemes">
            <div class="exam-nav">
                <div class="exam-nav-leftbox">
                    <div class="exam-nav-title" onclick="apply()"><?php echo $goals['btn_nm1']?> <div class="hline"></div>
                    </div>
                    <div class="exam-nav-title" onclick="timetable()"><?php echo $goals['btn_nm2']?> <div class="hline"></div>
                    </div>
                    <div class="exam-nav-title" onclick="questionpaper()"><?php echo $goals['btn_nm3']?> <div class="hline"></div>
                    </div>
                    <div class="exam-nav-title color" onclick="schemes()"><?php echo $goals['btn_nm4']?> <div
                            class="hline visible"></div>
                    </div>
                </div>

            </div>
            <div class="tt">
                <div class="tt-head">Non Teaching Staff</div>

            </div>
            <?php
      $sql = "SELECT * FROM questionpapers";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      ?>
            <div class="exam-container">
                <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
                <div class="question-box">
                    <div class="apply-box-txt"><?php echo $row['title'] ?>
                        <br>
                        <?php echo $row['sub_code'] ?>
                        <div class="apply-box-desc">
                            Thank you for the clarification. Let's re-evaluate the provided code in the context of the
                            circular array problem.In a circular array, the neighbors of the first
                        </div>
                    </div>
                    <div class="button-container">
                    <div class="text_btnnew" data-toggle="modal" data-target="#overlay">
                            <div class="text_btnnew_innrdiv">
                                <div class="text_btnnew_txt">
                                    View Details
                                </div>
                                <div>
                                    <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                        style="width: 16px;height: 16px;" />
                                </div>
                            </div>
                        </div>
                        <!-- Static text added here -->
                        <div class="static-text">
                            Deadline: Tue, 01 April
                        </div>
                    </div>
                </div>

                <?php
          }
          ?>
            </div>
            <?php
      }
      ?>
        </div>

        <!-- footer starts here -->
        <div id="mblftr">
            <?php
      include_once  'mblfooter.php';
      ?>
        </div>
        <div id="ftr">
            <?php
      include_once  'footer.php';
      ?>
        </div>
        <!-- footer ends here -->

    </div>


    <!-- Registration procedure Overlay starts -->

    <div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-header overlaymodal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/icons/cross_big.png">
                        <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                </div>
                <div class="modal-body overlaymodal-body">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/icons/cross_big.png">
                    </button> -->
                    <div class="modal-container">
                        <div class="content">
                            <div class="content-inside">
                                <div class="steps-no">ACADEMIC POSITION</div>
                                <div class="content-inside1">
                                    <div class="steps-text">School of <br>Computing and Informatics</div>
                                    <div class="content-inside2">
                                        <div class="steps-subtext">How to Apply</div>
                                        <div class="content-inside3">
                                            <div class="steps-subtext1">
                                                1. Email your resume to <a href="mailto:recruitment@vignan.ac.in"
                                                    class="email-button">recruitment@vignan.ac.in</a><br>
                                                2. Mention post applied for & department
                                            </div>
                                        </div>
                                        <div class="content-inside4">
                                            <div class="content-inside5">
                                                <div class="steps-subtext">Salary</div>
                                                <div class="steps-subtext1">
                                                    1. As per UGC 7th pay scale<br>
                                                    2. Higher start for deserving candidates
                                                </div>
                                                <div class="content-inside6">
                                                    <div class="steps-subtext">Contact Us</div>
                                                    <div class="steps-subtext1">
                                                        8500444991
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="additional-text">
                                <!-- Add your additional text here -->
                                <div class="first-text">
                                    <div class="second-text">
                                        <div class="bell-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                viewBox="0 0 48 48" fill="none">
                                                <mask id="mask0_1217_554" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
                                                    <rect width="48" height="48" fill="#D9D9D9" />
                                                </mask>
                                                <g mask="url(#mask0_1217_554)">
                                                    <path
                                                        d="M6 23.4077C6 20.7974 6.52457 18.3386 7.5737 16.0313C8.62283 13.724 10.0688 11.7443 11.9116 10.0923L13.4193 11.7346C11.7862 13.2126 10.5062 14.9513 9.5791 16.9509C8.65203 18.9505 8.1885 21.1028 8.1885 23.4077H6ZM39.9923 23.4077C39.9923 21.1154 39.5204 18.9607 38.5767 16.9435C37.633 14.9263 36.3612 13.1772 34.7615 11.6961L36.2693 10.0923C38.0787 11.7451 39.5163 13.725 40.5821 16.032C41.6479 18.339 42.1808 20.7976 42.1808 23.4077H39.9923ZM9.2654 42.1385V39.95H12.4962V23.5077C12.4962 20.7583 13.3481 18.3037 15.0519 16.1438C16.7558 13.9838 18.9769 12.6282 21.7154 12.0769V11.35C21.7154 10.7376 21.9462 10.1928 22.4078 9.7157C22.8694 9.23857 23.4239 9 24.0713 9C24.7187 9 25.2712 9.23857 25.7288 9.7157C26.1866 10.1928 26.4154 10.7376 26.4154 11.35V12.0961C29.1539 12.6346 31.3834 13.9805 33.1038 16.1339C34.8244 18.2872 35.6847 20.7451 35.6847 23.5077V39.95H38.9154V42.1385H9.2654ZM24.0637 47.6693C23.07 47.6693 22.2334 47.3291 21.5539 46.6488C20.8744 45.9684 20.5346 45.1316 20.5346 44.1385H27.5961C27.5961 45.1333 27.2558 45.9705 26.5751 46.65C25.8945 47.3295 25.0573 47.6693 24.0637 47.6693ZM14.6847 39.95H33.4961V23.5077C33.4961 20.9231 32.5692 18.7135 30.7153 16.8789C28.8613 15.0443 26.6434 14.127 24.0614 14.127C21.4795 14.127 19.2712 15.0443 17.4366 16.8789C15.6019 18.7135 14.6847 20.9231 14.6847 23.5077V39.95Z"
                                                        fill="#C57654" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="second-subtext">
                                            <div class="second-subtext1">last date to apply</div>
                                            <div class="second-subtext2">Tuesday, 01 April 2024</div>
                                        </div>
                                    </div>
                                    <div class="first-text1">
                                        <div class="first-text2">
                                            <div class="first-subtext1">Department & Courses</div>
                                            <div class="first-subtext2">
                                                <span class="heading">Computer Science and Engineering (CSE)</span><br>
                                                <span class="body-text">Artificial Intelligence, Machine Learning,
                                                    Computer
                                                    Vision, Image <br>Processing, Block Chain Technologies, Cloud
                                                    Security
                                                    and Data Science.</span><br><br>

                                                <span class="heading">Advanced Computer Science and Engineering
                                                    (ACSE)</span><br>
                                                <span class="body-text">Artificial Intelligence, Machine Learning,
                                                    Computer
                                                    Vision, Image<br> Processing, Block Chain Technology, Cloud
                                                    Security,
                                                    Data Science, Deep<br> Learning, Cyber Security, VNET, MANET, IoT,
                                                    WSN.</span><br><br>

                                                <span class="heading">Information Technology (IT) and Computer
                                                    Applications</span><br>
                                                <span class="body-text">Computer Vision, Full Stack Technologies, Block
                                                    Chain Technologies,<br> Image and Video Analytics, Cyber
                                                    Security.</span>
                                            </div>
                                        </div>
                                        <div class="first-text3">
                                            <div class="first-subtext1">Eligibility Criteria</div>
                                        </div>
                                        <div class="first-subtext3">
                                            1. Ph.D. from reputed institutions preferable.<br>
                                            2. Candidates who have submitted their Ph.D. thesis and awaiting<br> viva
                                            may
                                            also apply.<br>
                                            3. Experience in teaching in Higher Technical Institutions desirable.<br>
                                            4. Experienced Professionals and R&D / Industry Experts preferred for
                                            visiting
                                            Professor / Professors of Practice.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>


    <!-- Registration procedure Overlay ends -->




    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/common.js"></script>

    <script>
    function apply() {
        let apply = document.getElementById("apply");
        apply.style.display = "block";
        let timetable = document.getElementById("timetable");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("questionpaper");
        questionpaper.style.display = "none";
        let schemes = document.getElementById("schemes");
        schemes.style.display = "none";
    }

    function timetable() {
        let apply = document.getElementById("apply");
        apply.style.display = "none";
        let timetable = document.getElementById("timetable");
        timetable.style.display = "block";
        let questionpaper = document.getElementById("questionpaper");
        questionpaper.style.display = "none";
        let schemes = document.getElementById("schemes");
        schemes.style.display = "none";
    }

    function questionpaper() {
        let apply = document.getElementById("apply");
        apply.style.display = "none";
        let timetable = document.getElementById("timetable");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("questionpaper");
        questionpaper.style.display = "block";
        let schemes = document.getElementById("schemes");
        schemes.style.display = "none";
    }

    function schemes() {
        let apply = document.getElementById("apply");
        apply.style.display = "none";
        let timetable = document.getElementById("timetable");
        timetable.style.display = "none";
        let questionpaper = document.getElementById("questionpaper");
        questionpaper.style.display = "none";
        let schemes = document.getElementById("schemes");
        schemes.style.display = "block";
    }
    apply();


    function toggleDivContent() {
        var smallScreenDiv = document.querySelector("#mblftr");
        var largeScreenDiv = document.querySelector("#ftr");
        if (window.innerWidth <= 700) {
            // Empty large-screen div and show small-screen div content
            largeScreenDiv.style.display = 'none';
            smallScreenDiv.style.display = 'block';
        } else {
            // Empty small-screen div and show large-screen div content
            smallScreenDiv.style.display = 'none';
            largeScreenDiv.style.display = 'block';
        }
    }
    window.addEventListener("resize", toggleDivContent);
    toggleDivContent();
    </script>

</body>

</html>