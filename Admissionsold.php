<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vignan University</title>
    <link rel="stylesheet" href="css/admission.css" />

    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/button.css" />
	  <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/navbar.css" />
	     <link rel="stylesheet" href="css/modals.css" />
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
        body {
    background-color: #F2F1ED !important;
}
		.deemed {
    white-space: nowrap;
    color: white;
    font-size: 16px;
    font-family: Familjen Grotesk;
    font-weight: 400;
    line-height: 22px;
}
      .menu-large {
        position: static !important;
      }
		.navbar {
    margin-bottom: 0px !important;
   
}
		
		.footer{
			    padding: 57px !important;
		}
    </style>
  </head>
  <body>

<?php include_once  'navbar.php'; ?>
	  
    <div id="MobilScreenDiv"></div>
    <div id="PCScreenDiv"></div>
	 
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


    <!-- Space to add Footer starts -->
    <!-- Space to add Footer ends -->



    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->



   
<!-- Desktop SCREEN -->
<script src="./DesktopView.js"></script>

<!-- Mobile Screen -->
<script src="./MobileView.js"></script>

<script src="./Controller.js">
</script>
	  
  
<!-- jQuery -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!-- Bootstrap JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script>
  //dropdown on  click //

  $(document).ready(function () {
	   console.log('window.innerWidth');
	   console.log(window.innerWidth);

	 toggleDivContent();
	  
    // Show hide popover
    $(".dropdown").click(function () {
      $(this).find(".dropdown-menu").slideDown();
    });
  });
  $(document).on("click", function (event) {
    var $trigger = $(".dropdown");
    if ($trigger !== event.target && !$trigger.has(event.target).length) {
      $(".dropdown-menu").slideUp("fast");
    }

    $(".megamenu-div ul").on("mouseover", "li", function () {
      $("#" + $(this).data("img")).fadeIn();
    });

    $(".megamenu-div ul").on("mouseout", "li", function () {
      $("#" + $(this).data("img")).fadeOut(1);
    });
  });
	
		  function toggleDivContent(){
         var smallScreenDiv = document.querySelector("#mblftr");
  var largeScreenDiv = document.querySelector("#ftr");
		  console.log(window.innerWidth);
         if (window.innerWidth <= 700) {
    // Empty large-screen div and show small-screen div content
    largeScreenDiv.style.display= 'none';
    smallScreenDiv.style.display= 'block';
  } else {
    // Empty small-screen div and show large-screen div content
    smallScreenDiv.style.display= 'none';
    largeScreenDiv.style.display= 'block';
  }
        }
	
  function closechip(chipid) {
    console.log("sdfdsf");
    if (chipid == "largechip") {
      var chip = document.getElementById("largechip");
      // console.log(chip);
      chip.style.display = "none";
    }

    if (chipid == "smallchip") {
      var chip = document.getElementById("smallchip");
      //console.log(chip);
      chip.style.display = "none";
    }
  }

  document.getElementById("searchterm").addEventListener("click", () => {
    document.getElementById("cross").classList.add("cross");
    document.getElementById("cross").classList.remove("none");
  });

  function hidecross() {
    console.log("sdfdf");
    document.getElementById("cross").classList.add("none");
    document.getElementById("cross").classList.remove("cross");
  }

  function abortterm(id) {
    console.log(id);
    if (id == "errorlabel") {
      var term = document.getElementById("errorlabel");
      //term.style.display = 'none';
      console.log(term.value);
      term.value = "";
    }

    if (id == "searchterm") {
      var term = document.getElementById("searchterm");
      //term.style.display = 'none';
      console.log(term.value);
      term.value = "";
    }

    if (id == "successlabel") {
      var term = document.getElementById("successlabel");
      //term.style.display = 'none';
      console.log(term.value);
      term.value = "";
    }
  }
	
	function offcampus(){
		window.location.href='https://vignan.ac.in/hyd/';
		}
</script>


<!----->
<!----->
<!----->
<!----->
<!----->
<!----->
<!----->
<!----->
<!----->
<!----->
<!----->
<!----->

  </body>
</html>


