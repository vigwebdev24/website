<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vignan News</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/ncc.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/nccActivity.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/mobile.css">

    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/exam_home.css">

    <link rel="stylesheet" href="css/mblfooter.css">
    <link rel="stylesheet" href="css/newstudent.css">
    <link rel="stylesheet" href="css/program.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/exam.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>


    <!-- Include Locomotive Scroll JS -->
	<style>
		.tab-active{
		 color: var(--Colors-Buttons-Primary-Button, #992e00);
         border-bottom: 1px solid #992e00;
		}
	</style>

</head>

<body>



    <?php
  include_once 'connect.php';
  include_once 'navbar.php';

                
  function addOrdinalSuffix($day)
  {
    if (!in_array(($day % 100), array(11, 12, 13))) {
      switch ($day % 10) {
        case 1:
          return $day . 'st';
        case 2:
          return $day . 'nd';
        case 3:
          return $day . 'rd';
      }
    }
    return $day . 'th';
  }

  $sqlquery22 ="SELECT * FROM  news  order by  date desc";

      $result2=mysqli_query($conn, $sqlquery22);
 $result3=mysqli_query($conn, $sqlquery22);
      
 $all = array();
// $admns = array();
// $stu = array();
// $alu = array();
// $career = array();
// $di = array();

	//$data = $result3->fetch_all( MYSQLI_ASSOC );
//echo json_encode( $data );
if (mysqli_num_rows($result2) > 0) {
  
    while ($row = mysqli_fetch_assoc($result2)) {
      

        $all[] = $row;
        
		
      if($row['type']=='all'){
        $alll[] = $row;
        $alll_len = count($academics);
      }else
       if($row['type']=='academics'){
        $academics[] = $row;
        $academics_len = count($academics);
      }
      else if($row['type']=='admissions'){
        $admissions[] = $row;
        $admissions_len = count($admissions);
      }
      else if ($row['type']=='students'){
        $students[] = $row;
        $students_len = count($students);
      }
      else if ($row['type']=='career'){
        $careers[] = $row;
        $careers_len = count($careers);
      }
      else if ($row['type']=='di'){
        $di[] = $row;
        $di_len = count($di);
      } else if ($row['type']=='alumni'){
        $alumni[] = $row;
        $alumni_len = count($alumni);
      }

    }
} else {
    echo "No News found.";
}

    ?>
    <div class="container home-div1">
        <div class="newstudent-div-space">
            <div style="    width: 100%;">
                <h1 class="activities-title2">News</h1>
                <p class="activities-description2">Vignan’s success stories has been covered on multiple occasions in
                    various newspapers</p>

            </div>

            <div
                style="display: flex;flex-direction: column;align-items: flex-start;gap: var(--Spacing-Spacing-Mega-L, 61px);">
                <div class="news-page">
                    <div class="news-pgtitle">Showing All News</div>
                    <div class="search-filter-container" style="margin-top:0;">
                        <div class="search-container">
                            <span class="search-input-container">
                                <img src="assets/svgicons/search.svg" alt="" class="prog-search-icon" />

                                <input type="text" class="search-input" id="search" placeholder="Search for Programs"
                                    autofocus />
                            </span>

                            <div class="search-divider"></div>
                        </div>

                    </div>
                </div>

                <div class="w3-bar w3-black news-tabbox" style="">
                    <button class="w3-bar-item w3-button news-tab tab-active" id="all_btn" onclick="openCity('All', '')">All</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="aca_btn" onclick="openCity('Academic', '')">Academic</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="adm_btn" onclick="openCity('Admissions', '')">Admissions</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="stu_btn" onclick="openCity('Student', '')">Student Life</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="alu_btn" onclick="openCity('Alumni', '')">Alumni Stories</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="car_btn" onclick="openCity('Career', '')">Career
                        Development</button>
                    <div class="news-tabseparator"></div>
                    <button class="w3-bar-item w3-button news-tab" id="di_btn" onclick="openCity('di', '')">Diversity and
                        Inclusion</button>
                </div>

                <?php 
                if($academics_len > 0){?>

                <div id="All" class="w3-container city">
					
					
					<?php 
					if($alll_len > 0){?>
                        <div class="news-type">
                      
                        
                            <div class="content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($alll as $row) { 
                         
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); // 4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                                <!-- <div class="activity-row"> -->
                                <div class="activity-column" id="<?php echo $row['id']  ?>"
                                    onclick="openmodal(this.id)">
                                    <article class="activity-item">
                                        <img loading="lazy" src="<?php echo $row['img'] ?>"
                                            alt="<?php echo $row['img'] ?>" class="responsive-img">
                                        <time datetime="2019-07-25" class="activity-date">
                                            <?php
                                        echo $dt;
                                        ?>
                                        </time>
                                        <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                    </article>
                                </div>
                                <!-- </div>  -->
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }

									?>
					
					
                    <div class="news-type">
                        <div class="news-count">
                            <h2 class="news-typenm"><?php echo $academics[0]['type'];?></h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt" onclick="openCity('Academic', 'aca_btn')">
                                        View All (<?php echo $academics_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>


                            <div class="content-wrapper" style="margin-top:0;">
                                <?php
                                  $i = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($academics as $row) { 
                          if( $i >= 3) break;
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); //4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                                <!-- <div class="activity-row"> -->
                                <div class="activity-column" id="<?php echo $row['id']  ?>"
                                    onclick="openmodal(this.id)">
                                    <article class="activity-item">
                                        <img loading="lazy" src="<?php echo $row['img'] ?>"
                                            alt="<?php echo $row['img'] ?>" class="responsive-img">
                                        <time datetime="2019-07-25" class="activity-date">
                                            <?php
                                        echo $dt;
                                        ?>
                                        </time>
                                        <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                    </article>
                                </div>
                                <!-- </div>  -->
                                <?php
                        $i++;
                        }?>
                            </div>
                        </div>
                        <?php  }else{

                    echo 'No Academic News';
                }

                ?>


					<?php 
					if($admissions_len > 0){?>
                        <div class="news-type">
                        <div class="news-count">
                            <h2 class="news-typenm"><?php echo $admissions[0]['type'];?></h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt"  onclick="openCity('Admissions', 'adm_btn')">
                                        View All (<?php echo $admissions_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="content-wrapper" style="margin-top:0;">
                                <?php
                                 $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($admissions as $row) { 
                          if( $i1 >= 3) break;
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); // 4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                                <!-- <div class="activity-row"> -->
                                <div class="activity-column" id="<?php echo $row['id']  ?>"
                                    onclick="openmodal(this.id)">
                                    <article class="activity-item">
                                        <img loading="lazy" src="<?php echo $row['img'] ?>"
                                            alt="<?php echo $row['img'] ?>" class="responsive-img">
                                        <time datetime="2019-07-25" class="activity-date">
                                            <?php
                                        echo $dt;
                                        ?>
                                        </time>
                                        <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                    </article>
                                </div>
                                <!-- </div>  -->
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
					   <?php  }else{
echo '<br>';
										echo 'No Admissions News';
									}

									?>
					
					

						 <?php 
						if($students_len > 0){?>
                        <div class="news-type">
                        <div class="news-count">
                            <h2 class="news-typenm"><?php echo $students[0]['type'];?></h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt"  onclick="openCity('Student', 'stu_btn')">
                                        View All (<?php echo $students_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="content-wrapper" style="margin-top:0;">
                                <?php
                            $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($students as $row) { 
                          if( $i1 >= 3) break;
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); // 4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                                <!-- <div class="activity-row"> -->
                                <div class="activity-column" id="<?php echo $row['id']  ?>"
                                    onclick="openmodal(this.id)">
                                    <article class="activity-item">
                                        <img loading="lazy" src="<?php echo $row['img'] ?>"
                                            alt="<?php echo $row['img'] ?>" class="responsive-img">
                                        <time datetime="2019-07-25" class="activity-date">
                                            <?php
                                            echo $dt;
                                            ?>
                                        </time>
                                        <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                    </article>
                                </div>
                                <!-- </div>  -->
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
                         <?php  }else{
echo '<br>';
										echo 'No Students News';
									}

									?>


                        <?php
                if(!empty($alumni)){ ?>

                        <div class="news-type">
                        <div class="news-count">
                            <h2 class="news-typenm"><?php echo $alumni[0]['type'];?></h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt"  onclick="openCity('Alumni', 'alu_btn')">
                                        View All (<?php echo $alumni_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="content-wrapper" style="margin-top:0;">
                                <?php
                            $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($alumni as $row) { 
                          if( $i1 >= 3) break;
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); // 4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                                <!-- <div class="activity-row"> -->
                                <div class="activity-column" id="<?php echo $row['id']  ?>"
                                    onclick="openmodal(this.id)">
                                    <article class="activity-item">
                                        <img loading="lazy" src="<?php echo $row['img'] ?>"
                                            alt="<?php echo $row['img'] ?>" class="responsive-img">
                                        <time datetime="2019-07-25" class="activity-date">
                                            <?php
                                            echo $dt;
                                            ?>
                                        </time>
                                        <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                    </article>
                                </div>
                                <!-- </div>  -->
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
                        <?php  }else{
echo '<br>';
										echo 'No Alumni News';
									}

?>


<?php
                if(!empty($careers)){ ?>

                        <div class="news-type">
                        <div class="news-count">
                            <h2 class="news-typenm"><?php echo $careers[0]['type'];?></h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt" onclick="openCity('Career', 'car_btn')">
                                        View All (<?php echo $careers_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="content-wrapper" style="margin-top:0;">
                                <?php
                            $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($careers as $row) { 
                          if( $i1 >= 3) break;
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); // 4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                                <!-- <div class="activity-row"> -->
                                <div class="activity-column" id="<?php echo $row['id']  ?>"
                                    onclick="openmodal(this.id)">
                                    <article class="activity-item">
                                        <img loading="lazy" src="<?php echo $row['img'] ?>"
                                            alt="<?php echo $row['img'] ?>" class="responsive-img">
                                        <time datetime="2019-07-25" class="activity-date">
                                            <?php
                                            echo $dt;
                                            ?>
                                        </time>
                                        <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                    </article>
                                </div>
                                <!-- </div>  -->
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
                        <?php  } else{
echo '<br>';
										echo 'No Career News';
									}

?>


<?php
                if(!empty($di)){ ?>

                        <div class="news-type">
                        <div class="news-count">
                            <h2 class="news-typenm"><?php echo $di[0]['type'];?></h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt"  onclick="openCity('di', 'di_btn')">
                                        View All (<?php echo $dis_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="content-wrapper" style="margin-top:0;">
                                <?php
                            $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($di as $row) { 
                          if( $i1 >= 3) break;
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); // 4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                                <!-- <div class="activity-row"> -->
                                <div class="activity-column" id="<?php echo $row['id']  ?>"
                                    onclick="openmodal(this.id)">
                                    <article class="activity-item">
                                        <img loading="lazy" src="<?php echo $row['img'] ?>"
                                            alt="<?php echo $row['img'] ?>" class="responsive-img">
                                        <time datetime="2019-07-25" class="activity-date">
                                            <?php
                                            echo $dt;
                                            ?>
                                        </time>
                                        <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                    </article>
                                </div>
                                <!-- </div>  -->
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
                        <?php  }else{
echo '<br>';
										echo 'No Diversity & Inclusion News';
									}

?>



<?php
                if(!empty($di)){ ?>

                        <div class="news-type">
                        <div class="news-count">
                            <h2 class="news-typenm"><?php echo $di[0]['type'];?></h2>
                            <div class="text_btnnew viewall-right">
                                <div class="text_btnnew_innrdiv">
                                    <div class="text_btnnew_txt" onclick="openCity('di', 'di_btn')">
                                        View All (<?php echo $dis_len; ?>)
                                    </div>

                                    <div>
                                        <img loading="lazy" src="assets/svgicons/arrow_right_brown.svg"
                                            style="width: 16px;height: 16px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="content-wrapper" style="margin-top:0;">
                                <?php
                            $i1 = 0;
                        // Fetching data and storing in a multidimensional array
                        foreach ($di as $row) { 
                          if( $i1 >= 3) break;
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); // 4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                                <!-- <div class="activity-row"> -->
                                <div class="activity-column" id="<?php echo $row['id']  ?>"
                                    onclick="openmodal(this.id)">
                                    <article class="activity-item">
                                        <img loading="lazy" src="<?php echo $row['img'] ?>"
                                            alt="<?php echo $row['img'] ?>" class="responsive-img">
                                        <time datetime="2019-07-25" class="activity-date">
                                            <?php
                                            echo $dt;
                                            ?>
                                        </time>
                                        <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                    </article>
                                </div>
                                <!-- </div>  -->
                                <?php
                            $i1++;
                            }?>
                            </div>
                        </div>
                        <?php  }

?>



                    </div>

                    <div id="Academic" class="w3-container city" style="display:none">
                        <?php
                if(!empty($academics)){ ?>
                        <div class="content-wrapper" style="margin-top:0;">
                            <?php
                        // Fetching data and storing in a multidimensional array
                        foreach ($academics as $row) { 
                   
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                    
                                      $year = $dateObj->format('Y'); // 4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                            <!-- <div class="activity-row"> -->
                            <div class="activity-column" id="<?php echo $row['id']  ?>" onclick="openmodal(this.id)">
                                <article class="activity-item">
                                    <img loading="lazy" src="<?php echo $row['img'] ?>" alt="<?php echo $row['img'] ?>"
                                        class="responsive-img">
                                    <time datetime="2019-07-25" class="activity-date">
                                        <?php
                    echo $dt;
                    ?>
                                    </time>
                                    <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                </article>
                            </div>
                            <!-- </div>  -->
                            <?php
             
            }?>
                        </div>

                        <?php   }else{

echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Academic News';
}

?>

                    </div>

                    <div id="Admissions" class="w3-container city" style="display:none">
                        <?php
                if(!empty($admissions)){ ?>
                        <div class="content-wrapper" style="margin-top:0;">
                            <?php
                        // Fetching data and storing in a multidimensional array
                        foreach ($admissions as $row) { 
                   
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); // 4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                            <!-- <div class="activity-row"> -->
                            <div class="activity-column" id="<?php echo $row['id']  ?>" onclick="openmodal(this.id)">
                                <article class="activity-item">
                                    <img loading="lazy" src="<?php echo $row['img'] ?>" alt="<?php echo $row['img'] ?>"
                                        class="responsive-img">
                                    <time datetime="2019-07-25" class="activity-date">
                                        <?php
                    echo $dt;
                    ?>
                                    </time>
                                    <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                </article>
                            </div>
                            <!-- </div>  -->
                            <?php
             
            }?>
                        </div>

                        <?php   }else{

echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Admissions News';
}

?>

                    </div>

                    <div id="Student" class="w3-container city" style="display:none">
                        <?php
                if(!empty($students)){ ?>
                        <div class="content-wrapper" style="margin-top:0;">
                            <?php
                        // Fetching data and storing in a multidimensional array
                        foreach ($students as $row) { 
                   
                          $date = $row['date'];

                                      $dateObj = new DateTime($date);

                                      $day = addOrdinalSuffix($dateObj->format('j'));
                                      $month = $dateObj->format('F');
                                      $year = $dateObj->format('Y'); //4 digits of the year
                                
                                      $dt = "$day $month $year";

                      
                          ?>
                            <!-- <div class="activity-row"> -->
                            <div class="activity-column" id="<?php echo $row['id']  ?>" onclick="openmodal(this.id)">
                                <article class="activity-item">
                                    <img loading="lazy" src="<?php echo $row['img'] ?>" alt="<?php echo $row['img'] ?>"
                                        class="responsive-img">
                                    <time datetime="2019-07-25" class="activity-date">
                                        <?php
                    echo $dt;
                    ?>
                                    </time>
                                    <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                </article>
                            </div>
                            <!-- </div>  -->
                            <?php
             
            }?>
                        </div>
                        <?php   }else{

echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Student News';
}

?>
                    </div>

                    <div id="Alumni" class="w3-container city" style="display:none">
                        <?php
                if(!empty($alumni)){ ?>
                        <div class="content-wrapper" style="margin-top:0;">
                            <?php
                    // Fetching data and storing in a multidimensional array
                    foreach ($alumni as $row) { 
               
                      $date = $row['date'];

                                  $dateObj = new DateTime($date);

                                  $day = addOrdinalSuffix($dateObj->format('j'));
                                  $month = $dateObj->format('F');
                                  $year = $dateObj->format('Y'); //4 digits of the year
                            
                                  $dt = "$day $month $year";

                  
                      ?>
                            <!-- <div class="activity-row"> -->
                            <div class="activity-column" id="<?php echo $row['id']  ?>" onclick="openmodal(this.id)">
                                <article class="activity-item">
                                    <img loading="lazy" src="<?php echo $row['img'] ?>" alt="<?php echo $row['img'] ?>"
                                        class="responsive-img">
                                    <time datetime="2019-07-25" class="activity-date">
                                        <?php
                echo $dt;
                ?>
                                    </time>
                                    <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                </article>
                            </div>
                            <!-- </div>  -->
                            <?php
         
        }?>
                        </div>
                        <?php   }else{

echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Alumni News';
}

?>
                    </div>

                    <div id="Career" class="w3-container city" style="display:none">
                        <?php
                if(!empty($careers)){ ?>
                        <div class="content-wrapper" style="margin-top:0;">
                            <?php
                    // Fetching data and storing in a multidimensional array
                    foreach ($careers as $row) { 
               
                      $date = $row['date'];

                                  $dateObj = new DateTime($date);

                                  $day = addOrdinalSuffix($dateObj->format('j'));
                                  $month = $dateObj->format('F');
                                  $year = $dateObj->format('Y'); //4 digits of the year
                            
                                  $dt = "$day $month $year";

                  
                      ?>
                            <!-- <div class="activity-row"> -->
                            <div class="activity-column" id="<?php echo $row['id']  ?>" onclick="openmodal(this.id)">
                                <article class="activity-item">
                                    <img loading="lazy" src="<?php echo $row['img'] ?>" alt="<?php echo $row['img'] ?>"
                                        class="responsive-img">
                                    <time datetime="2019-07-25" class="activity-date">
                                        <?php
                echo $dt;
                ?>
                                    </time>
                                    <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                </article>
                            </div>
                            <!-- </div>  -->
                            <?php
         
        }?>
                        </div>
                        <?php    }else{

echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Career News';
}

?>
                    </div>

                    <div id="di" class="w3-container city" style="display:none">
                        <?php
                if(!empty($di)){ ?>
                        <div class="content-wrapper" style="margin-top:0;">
                            <?php
                    // Fetching data and storing in a multidimensional array
                    foreach ($di as $row) { 
               
                      $date = $row['date'];

                                  $dateObj = new DateTime($date);

                                  $day = addOrdinalSuffix($dateObj->format('j'));
                                  $month = $dateObj->format('F');
                                  $year = $dateObj->format('Y'); //4 digits of the year
                            
                                  $dt = "$day $month $year";

                  
                      ?>
                            <!-- <div class="activity-row"> -->
                            <div class="activity-column" id="<?php echo $row['id']  ?>" onclick="openmodal(this.id)">
                                <article class="activity-item">
                                    <img loading="lazy" src="<?php echo $row['img'] ?>" alt="<?php echo $row['img'] ?>"
                                        class="responsive-img">
                                    <time datetime="2019-07-25" class="activity-date">
                                        <?php
                echo $dt;
                ?>
                                    </time>
                                    <h2 class="activity-title"><?php echo $row['subheading'] ?></h2>
                                </article>
                            </div>
                            <!-- </div>  -->
                            <?php
         
        }?>
                        </div>
                        <?php  }else{

echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Diversity and Inclusion News';
}

?>
                    </div>




                    <!-- card-animation-page -->


                    <div class="modal fade" id="overlaynews" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                        aria-hidden="true">
                        <div class="overlay-dialog1" role="document">
                            <div class="filter-modal_content1">
                                <div class="pad2">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <img src="assets/icons/cross_big.png">
                                        <!-- <span aria-hidden="true">&times;</span> -->
                                    </button>
                                </div>
                                <section class="content-wrapper2">
                                    <div class="content-container">
                                        <div class="share-section">
                                            <div class="event-date" id="time"> </div>
                                            <div class="share-images-container">
                                                <img loading="lazy" src="" id="newsimg" class="share-image newsarticle-img" alt="" />
                                            </div>
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
                                        </div>
                                        <div class="content-description-section">
											  <h2 class="event-title" id="newstitle"></h2>
                                            <div class="description-wrapper">
                                                <article class="description-text">
                                                  
                                                    <p class="event-description" id="newsdesc">

                                                        zcxc
                                                    </p>
                                                </article>
                                                <aside class="highlight-container">
                                                    <div class="highlight-box"></div>
                                                </aside>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>




                    <div id="mblftr">
                        <?php

      include_once 'mblfooter.php';
      ?>
                    </div>



                    <div id="ftr" style="display: block;width:100%;">
                        <?php

      include_once 'footer.php';
      ?>
                    </div>
                </div>
                <script src="js/moment.js"></script>
                <script>
					
                function openCity(cityName, tabid) {
					console.log(tabid);
                    var i;
                    var x = document.getElementsByClassName("city");
					console.log(x);
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    document.getElementById(cityName).style.display = "block";
					 var btns= document.getElementsByClassName("news-tab");
			   for (i = 0; i < btns.length; i++) {
								btns[i].classList.remove("tab-active");
				   
                    }
					$('#'+tabid).addClass("tab-active");
					
					
                }
					
					let buttons = document.querySelectorAll(".news-tab"); // queryselectorall will return and nodelist of button with classnaem .unLockUser-button
buttons.forEach((btn, index) => {// index will be current button index
  btn.addEventListener("click", function(e) {
    console.log(e.target.id);
	  var btn_id = e.target.id;
	  var btns= document.getElementsByClassName("news-tab");
	   for (i = 0; i < btns.length; i++) {
                        btns[i].classList.remove("tab-active");
		   //element.classList.remove("mystyle");
                    }
								
	  $('#'+btn_id).addClass("tab-active");
  });
});

                function openmodal(id) {
                    var news = [];
                    console.log(id);
                    <?php  $json = json_encode($all); ?>
                    var json = <?=$json?>;
                    console.log(json);
                    console.log(moment().format('MMMM Do YYYY'));
                    for (i = 0; i < json.length; i++) {
                        if (id == json[i].id) {
                            console.log(json[i].title);
                            $('#overlaynews').modal({
                                show: 'true'
                            });

                            console.log($("#newsimg")[0].src);
                            console.log(moment().format('MMMM Do YYYY'));

                            //     $dateObj = new DateTime($date);

                            // $day = addOrdinalSuffix($dateObj->format('j'));
                            // $month = $dateObj->format('F');

                            // $year = $dateObj->format('Y'); // 4 digits of the year

                            // $dt = "$day $month $year";

                            console.log(moment(json[i].date).format('Do MMMM  YYYY'));
                            $("#time").html(moment(json[i].date).format('Do MMMM  YYYY'));
                            $("#newsimg")[0].src = json[i].img;
                            $("#newstitle").text(json[i].subheading);
                            $("#newsdesc").html(json[i].descr);

                            //$("#newsimg").text(json_data); 
                            //$(".modal-body").text(json_data); 
                        }
                    }
                }

                function naac() {
                    window.location.href = "https://vignan.ac.in/naac.php"
                }

                function dsir() {
                    window.location.href = "https://vignan.ac.in/iqacranks.php"
                }

                function accreditations() {
                    window.location.href = "https://vignan.ac.in/iqaccer.php";
                }

                function parentteach() {
                    window.location.href =
                        "https://vignan.ac.in/pdf/Parents%20Teachers%20Association%20Executive%20Committee%2018.07.2023.pdf";
                }

                function advisory() {
                    window.location.href =
                    "https://vignan.ac.in/pdf/Admissions%20Advisory%20Committee%2022.02.2022.pdf";
                }

                function eval() {
                    window.location.href =
                        "https://vignan.ac.in/pdf/Evaluation%20Standards%20Committee%2025.04.2022.pdf";
                }

                function institucomm() {
                    window.location.href = "https://vignan.ac.in/insticomm.php";
                }

                function annualreports() {
                    window.location.href = "https://vignan.ac.in/areports.php";
                }

                function offcampus() {
                    window.location.href = "https://vignan.ac.in/hyd/";
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

                document.querySelector('.div-232').addEventListener('click', function() {
                    var emailInput = document.getElementById('emailInput');
                    // Toggle the display of the input field
                    if (emailInput.style.opacity === "0" || emailInput.style.opacity === "") {
                        emailInput.style.opacity = "1";
                        emailInput.style.maxHeight = "40px";
                        this.style.transform = "translateY(-20px)";
                    } else {
                        emailInput.style.opacity = "0";
                        emailInput.style.maxHeight = "0px"; // Hide the input field
                        this.style.transform = "translateY(0px)"; // Move the div-232 text back
                    }
                });
                </script>



                <!-- jQuery -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Bootstrap JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            </div>

</body>