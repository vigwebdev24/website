<?php
include_once 'connect.php';

 ?>

<?php
// target_page.php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Use the $id for further processing, such as fetching data from the database
	$sql2="select title from naac_tg where pid='$id'";
$res = mysqli_query($conn, $sql2);
$title = mysqli_fetch_assoc($res);
}

?>


<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title['title']; ?></title>


  <link rel="stylesheet" href="css/iqac.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/naac_card.css">
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
  .div-margin-bottom{
    margin-top: 180px;
  }

.download-option {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 28px;
}
.download-option p {
  margin: 0;
}
.small-image {
  width: 20px;
  height: 20px;
  cursor: pointer;
}
.prgmstr_dwnldimg {
 display :flex;
 /* padding :var(--Numbers-4); */
 padding:7px;
align-items :flex-start;
gap : 10px;
border-radius:100px;
border :  1px solid #992E00;
cursor : pointer;
}
</style>

<body>
<?php

include_once 'navbar.php';
?>

<?php

$sql = "SELECT * FROM naac WHERE pageno='$id'";
$result = mysqli_query($conn, $sql);
?>

<div class="container home-div1">
    <div class="container1">
        <section class="title-section">Accreditation Parameter</section>
        <h1 class="main-title"><?php echo $title['title']; ?></h1>
        <section class="content-section">
            <div class="content-wrapper">
                <?php if (mysqli_num_rows($result) > 0) { 
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="collapsible">
                    <div class="header-row">
                        <h2 class="block-title-secondary"><?php echo $row['metricno']." ".$row['qnqi']; ?></h2>
                        <p class="description"><?php echo $row['descr']; ?></p>
                        <span class="icon" onclick="toggleCollapse(this)"><img src="assets/icons/plus.png" alt=""></span>
                    </div>
                    <!-- this is for link section -->
                    <div class="collapsible-content">
                        <?php 
                        $c = $row['id'];
                        $sn=1;
                        $sql2 = "SELECT * FROM naac_link WHERE id='$c'";
                        $result1 = mysqli_query($conn, $sql2);
                        if (mysqli_num_rows($result1) > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                        ?>
                        <div class="download-option">
                            <p><?php echo $sn ."."."&nbsp; &nbsp;" . $row1['link_nm']; ?></p>
                            <div class="prgmstr_dwnldimg">
                            <a href="<?php echo $row1['hlink']; ?>" target="_blank">
                                <img src="assets/icons/download_icon.svg" class="small-image" alt="Download Icon" />
                            </a>
                          </div>
                        </div>
                        <?php 
                            $sn++; // Increment serial number
                            } // End of inner while loop
                        } // End of if
                        ?>
                    </div>
                </div>
                <div class="gap-seperator"></div>
                <div class="eachgap"></div>
                <?php 
                    } // End of outer while loop
                } else { 
                    echo "data not found";
                }
                ?>
            </div>
        </div>
    </section>

    <div class="div-margin-bottom"></div>

    <!-- footer starts here -->
    <div id="mblftr">
        <?php include_once 'mblfooter.php'; ?>
    </div>
    <div id="ftr">
        <?php include_once 'footer.php'; ?>
    </div>
    <!-- footer ends here -->

</div>







  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/common.js"></script>

  <script>
    function toggleCollapse(element) {
  const content = element.parentElement.nextElementSibling;
  const isCollapsed = content.style.display === 'block';

  if (!isCollapsed) {
    content.style.display = 'block';
    // element.textContent = '-';
    element.innerHTML = '<img src="assets/icons/minus.png" alt="Collapse">';
  } else {
    content.style.display = 'none';
    element.innerHTML = '<img src="assets/icons/plus.png" alt="Collapse">';
  }
}
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