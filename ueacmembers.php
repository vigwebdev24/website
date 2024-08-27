<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vignan University</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/ueac.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" href="css/ueacmembers.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" href="css/mblfooter.css">
</head>

<body>
    <?php
    include_once 'connect.php';
    include_once  'navbar.php';
    ?>
    <div class="container .ueac-div1"  style="margin-top:100px;">
        <div class="search-titlediv">
            <div class="academics-info">
                <h1 class="academics-title">People</h1>
                <h2 class="section-title">UEAC Members</h2>
            </div>
            <div class="search-filter-container">
                <div class="search-container">
                <span class="search-input-container">
                <img src="assets/svgicons/search.svg" alt="" class="prog-search-icon">
                <input type="text" class="search-input" id="search" placeholder="Search" autofocus="" fdprocessedid="mpsy7k"></span>
                <div class="search-divider"></div>
                </div>
                <button class="filter_button_secondary filter_secondary-btn_txt"> <img src="assets/icons/filter_list.png"> &nbsp;Filter </button>
            </div>
        </div>
        <div class="ueac-team-bottom">
            <?php
            $priorityOrder = ['Program Officer', 'Associate Dean', 'UEAC Coordinator'];
            $query3 = "SELECT * FROM `peoples` WHERE type='ueac' ORDER BY FIELD(designation, '" . implode("','", $priorityOrder) . "') ";
            $result = $conn->query($query3);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <div class="member-card">
                <img src="<?php echo $row['img']; ?>" class="profcard-image" alt="Description of the image">
                <div class="member-content">
                    <div class="member-name"><?php echo $row['name']; ?></div>
                    <div class="member-role"><?php echo $row['designation']; ?></div>
                </div>
            </div>
            <?php } }?>
        </div>
        <!-- FOOTER STARTS -->
        <div id="mblftr" style="margin-top: 150px;">
          <?php include_once  'mblfooter.php';?>
        </div>
        <div id="ftr" style="margin-top: 150px;">
          <?php include_once  'footer.php';?>
        </div>
        <!-- FOOTER ENDS -->
    </div>

    <script>
	    function toggleDivContent() {
            var smallScreenDiv = document.querySelector("#mblftr");
            var largeScreenDiv = document.querySelector("#ftr");
            if (window.innerWidth <= 700) {
                largeScreenDiv.style.display = 'none';
                smallScreenDiv.style.display = 'block';
            } else {
                smallScreenDiv.style.display = 'none';
                largeScreenDiv.style.display = 'block';
            }
        }
        window.addEventListener("resize", toggleDivContent);
        toggleDivContent();
	</script>
</body>
</html>