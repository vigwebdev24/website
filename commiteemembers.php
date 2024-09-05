<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/wedc.css">
    <link rel="stylesheet" href="./css/mblfooter.css">
    <link rel="stylesheet" href="./css/button.css">
    <title>Vignan University</title>
</head>
<body>
    <div class="CoExAMMPCCont">
        <?php include_once "navbar.php" ?>
        <div class="MainAlignerForCoExAMMPC">
            
            <div class="CommitteeMembersSection">
                <div class="CommitteeMembersSection1">
                    <?php
                        $sql = "SELECT * FROM `Peoples` WHERE `type` = 'WEDC_Commitee_Members'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            if($row = $result->fetch_assoc()) {
                                ?>
                                    <div class="CommitteeMembersSectionh61">Committee Members</div>
                                <?php 
                            }    
                        } 
                    ?>
                    <div class="search">
                        <img src="assets/icons/Search.png" class="search-icon">
                        <input type="text" placeholder="Search" name="searchterm" id="searchterm">
                    </div>
                </div>
                <div class="CommitteeMembersSection2">
                    <?php
                        $sql = "SELECT * FROM `Peoples` WHERE `type` = 'WEDC_Commitee_Members'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                ?>
                                    <div class="CoexmmpcContributorsSectionh484w280">
                                        <img src="<?php echo $row["img"] ?>" class="CoexmmpcContributorsSectionh484w280img" alt="">
                                        <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                            <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $row["name"] ?></div>
                                            <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $row["designation"] ?></div>
                                        </div>
                                    </div>
                                <?php 
                            }
                        } 
                    ?>
                </div>
                <div class="CommitteeMembersSectionh52">
                    <button onclick="window.open('#',  '_blank')" class="cta_button_primary txt-btn-20-16">
                        <div>Re-constitution of ICC 2023-24</div>
                        <img src="assets/icons/Button_forwardarrow.png" />
                    </button>
                </div>
            </div>
            <!--footer--> 
            <div id="mblftr">
                <?php
                include_once  'mblfooter.php';
                ?>
            </div>
            <div id="ftr">
                <div class="footer-cover">
                    <?php
                    include_once  'footer.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>

    <script>
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