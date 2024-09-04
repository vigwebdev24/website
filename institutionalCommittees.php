<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vignan University</title>


  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/button.css">
  <link rel="stylesheet" href="css/patents.css">
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

  .institutional-committees__container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-column-gap: 25px;
    grid-row-gap: 39px;
    margin-top: 80px;
  }

  @media (max-width: 991px) {
    .institutional-committees__container {
      grid-template-columns: repeat(1, 1fr);
    }
  }

  .committee-card{
    display: none;
  }

  .committee-card.visible {
    display: block;
    padding: 39px 25px;
    border: 1px solid var(--Colors-Text-Color, #000);
  }

  .committee-card__title {
    color: var(--Colors-Text-Color, #000);
    text-align: center;
    font-family: "DM Serif Display";
    font-size: 31px;
    font-style: normal;
    font-weight: 400;
    line-height: 120%;
  }

  .committee-card__details {
    display: flex;
    justify-content: center;
    margin-top: 13px;
  }
</style>

<body>
  <?php
  include_once 'connect.php';
  include_once  'navbar.php';

  ?>

  <div class="container home-div1">

    <div class="patent-section">
      <div class="patent-subhead">Committees</div>
      <div class="patent-head">
        <div class="patent-title">
          Institutional Committees
        </div>
        <div class="patent-controls">
          <div class="patent-search">
            <div class="search-container">
              <img src="assets/icons/Search.png" class="search-icon-1" width="48px" height="48px" />
              <input type="text" placeholder="Search" name="searchterm" id="searchterm">
            </div>
          </div>
          <div class="patent-filter">
            <button class="filter_button_primary Ss-btn_txt" data-toggle="modal" data-target="#flipFlop">
              <img src="assets/icons/filter_list_white.png" />
              <div class="filter-button">
                Filter
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>

    <?php
    $sql = "Select * FROM cards where id like 'ulifeaboutus%'";
    $result = mysqli_query($conn, $sql);
    ?>
    <div class="institutional-committees__container">
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <article class="committee-card">
            <div class="committee-card__title">
              <?php echo $row['title']; ?>
            </div>
            <div class="committee-card__details">
              <div class="text_btnnew" onclick="window.open('<?php echo $row['btn_hlink']; ?>',  '_blank')">
                <div class="text_btnnew_innrdiv">
                  <div class="text_btnnew_txt">
                    <?php echo $row['btn_nm'] ?>
                  </div>
                  <div>
                    <img src="assets/svgicons/outwardarrow_brown.svg" style="width: 16px;height: 16px;" />
                  </div>
                </div>
              </div>
            </div>
          </article>
      <?php  }
      }
      ?>
    </div>

    <?php
    $sql1 = "SELECT count(*) as total FROM cards where id like 'ulifeaboutus%'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $total_patents = $row1['total'];
    ?>


    <div class="patent-page">
      <div class="patent-page-no">Showing <span id="visibleCards"></span> of <?php echo $total_patents ?></div><br>
      <div class="patent-page-btn" onclick="showMore()">
        Show More
      </div>
    </div>



    <div class="divmargin-bottom"></div>

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


  <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
          <div class="modal-bydept">BY departments <button class="filterbtn-search" id="filtersearch"><img src="assets/icons/search_square.webp" class="search-icn" /></button></div>

          <div class="search-box filtersearch-box" id="filtersearch-show" style="display:none;">
            <img src="assets/icons/search_square.webp" class="filtersearch-icon" />
            <input type="text" class="input-search filterinput-search" id="searchterm" value="" placeholder="" onkeyup="filterFunction()">
            <img src="assets/icons/cross.png" class="filter-cross" onclick="abortterm('searchterm')" />

          </div>
          <div class="selectontxt-div" id="selectiondiv" style="display:none;">
            <div class="selectontxt-innrdiv">
              <div class="selecte_no"><span id="selected"></span> Selected</div>
            </div>
          </div>
          <ul class="modal_ul" id="depul">
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
                  <input type="checkbox" value="chmstry" id="chmstry" class="dept" name="dept[]">
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
                  <input type="checkbox" value="pharma" id="pharma" class="dept" name="dept[]">
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
          </ul>

        </div>
        <div class="modal-footer filter-footer">

          <button class="button_primary filtermodal-btn_txt modal-btn">Apply Filter</button>
          <button class="button_secondary filtermodal-btn_txt2 modal-btn" onclick="clearall()">Clear
            All</button>
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
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
    }
    let dept = [];
    $('.dept').on('click', function() {
      console.log($(this).val());
      var depul = document.getElementById('depul');
      depul.style.height = '74%';

      var deptnm = $(this).val();
      console.log(jQuery.inArray(deptnm, dept) === -1);

      if (jQuery.inArray(deptnm, dept) === -1) {
        $(".dept:checked").each(function() {
          //$(".dept:checked").removeAttr('checked');

          dept.push(deptnm);
          dept = dept.filter((item,
            index) => dept.indexOf(item) === index);


        });
      } else {
        console.log('remove');
        const branchindex = dept.indexOf(deptnm);
        console.log(branchindex);
        dept.splice(branchindex, 1);
        closechip(deptnm);
        // dept.filter((item,
        // index) =>array.splice(index, 1));
      }
      console.log(dept);
      $('#selectiondiv').css('display', 'inline-flex');
      $("#selected").text(dept.length);
      $('.selecte_no').append(` <div class="smallchip-div" id=` + deptnm + `>
                                                <div class="smallchip-txt">` + deptnm +
        ` </div>
                                                <div class="forward_arrw">
                                                    <img src="assets/icons/cross.png" class="img-size" onclick="closechip(` +
        deptnm + `)" />
                                                </div>
                                            </div>`);
      //  dept.pop();
    });

    function closechip(chipid) {
      console.log(chipid);
      //  console.log(chipid[0].id);
      var chip = document.getElementById(chipid[0].id);
      console.log(chip);
      if (chip == null) {
        $('#' + chip + ':checked').removeAttr('checked');
        document.getElementById(chipid).style.display = 'none';
        console.log($('input[name="dept[]"]:checked').length);
        $("#selected").text($('input[name="dept[]"]:checked').length);
        chip.style.display = 'none';
      } else {
        $('#' + chip.id + ':checked').removeAttr('checked');
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
  </script>

  <script>
    const boxes = document.querySelectorAll('.committee-card');
    const showMoreButton = document.querySelector('.patent-page-btn');
    const visibleCount = document.getElementById('visibleCards');
    let visibleCards = 24;
    const totalCards = boxes.length;

    function showCards() {
      let i = 0;
      for (i = 0; i < visibleCards; i++) {
        if (boxes[i]) {
          boxes[i].classList.add('visible');
        }
      }
      if (totalCards < visibleCards)
        visibleCount.innerHTML = totalCards;
      else
        visibleCount.innerHTML = visibleCards;
    }

    function showMore() {
      visibleCards += 6;
      if (visibleCards >= totalCards) {
        visibleCards = totalCards;
        showMoreButton.style.display = 'none';
      }
      showCards();
    }
    showCards();

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