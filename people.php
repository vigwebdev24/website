
<?php
$servername = "localhost";
$username = "db_vignan";
$password = "fourtimes";
$database = "db_vignan";

// Create connection
$conn1 = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn1) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
   // echo "Connected successfully";
  //  print_r($conn);
}
mysqli_set_charset($conn,"utf8mb4");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/wedc.css">
    <link rel="stylesheet" href="./css/mblfooter.css">
    <link rel="stylesheet" href="./css/modals.css">
    <link rel="stylesheet" href="./css/button.css">
    <title>Vignan University</title>
</head>
<body>
    <div class="CoExAMMPCCont">
        <?php include_once "navbar.php" ?>
        <div class="MainAlignerForCoExAMMPC">
            <div class="CommitteeMembersSection">
                                <div class="CommitteeMembersSectionh61">
                                  People
                                </div>
                                <div class="CommitteeMembersSectionh2011">
                                    <div class="CoexmmpcContributorsSectionh484">
										
										   
										 <?php

		
		
		
		$sqlquery22_3 ="SELECT * FROM  profiledata order by empcode asc";

                    $result1=mysqli_query($conn1, $sqlquery22_1);
		 $result2=mysqli_query($conn1, $sqlquery22_1);
		 $data= mysqli_fetch_all($result2, MYSQLI_ASSOC);
		
		
                    $sqlquery22_1 ="SELECT * FROM  profiledata order by empcode asc";

                    $result1=mysqli_query($conn1, $sqlquery22_1);
		 $result2=mysqli_query($conn1, $sqlquery22_1);
		 $data= mysqli_fetch_all($result2, MYSQLI_ASSOC);
		
		//echo json_encode($data);

                if(mysqli_num_rows($result1) > 0){
               
                while ($people = $result1->fetch_assoc()) {?>
					 <div class="CoexmmpcContributorsSectionh484w280" id="<?php echo $people['empcode'];?>" onclick="openmodal(this.id)">
                                            <img src='https://vignan.ac.in/Facultyprofiles/uploads/<?php echo $people['empcode'];?>/<?php echo $people['profilepic'];?>' class="CoexmmpcContributorsSectionh484w280img" alt="">
                                            <div class="CoexmmpcContributorsSectionh484w280Detailsh92">
                                                <div class="CoexmmpcContributorsSectionh484w280h92h281"><?php echo $people['salutation'].' '.$people['name'] ;?></div><div></div>
                                                <div class="CoexmmpcContributorsSectionh484w280h92h222"><?php echo $people['desig'];?></div>
                                            </div>
                                        </div>
				<?php }}?>
										
                                       
                                        
                                    </div>
                         
            
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

     <!-- The Profile modal -->


     <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="profmodal-dialog" role="document">
                    <div class="profmodal-content">

                        <div class="profmodal-body">

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                    <div class="profile-picdiv">
                                        <img class="profile-pic" src="" id="facimg"/>
                                        <div class="profile-namedesg">
                                            <div class="fac-name" id="facname"></div>
                                            <div id="facdesig"
                                                style="align-self: stretch; color: black; font-size: 20px; font-family: Familjen Grotesk; font-weight: 400; line-height: 28px; word-wrap: break-word">
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 profile-div">
                                    <div class="prof-title">Faculty Profile
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <img src="assets/icons/cross_big.png">
                                            <!-- <span aria-hidden="true">&times;</span> -->
                                        </button>

                                        <br><br>
                                        <div class="prof-section_hdng_div">
											  <div class="prof-section_hdng_innrdiv" id="interests">
                                                <div class="prof-section_hdng" >Research Interests</div>
                                                <!--<div class="prof-content_div">
                                                    <div class="prof-content_text">Basics of Electrical & Electronic
                                                        Engineering</div>
                                                    <div class="prof-content_text">Physical Fitness, Sports and Games-I
                                                    </div>
                                                </div>-->
												 
                                            </div>
											  <div class="prof-sectionbrdr" id="interestshr"></div>
											
                                            <div class="prof-section_hdng_innrdiv" id="teaching">
                                                <div class="prof-section_hdng">Teaching Engagements</div>
                                                <!--<div class="prof-content_div">
                                                    <div class="prof-content_text">Basics of Electrical & Electronic
                                                        Engineering</div>
                                                    <div class="prof-content_text">Physical Fitness, Sports and Games-I
                                                    </div>
                                                </div>-->
												 
                                            </div>
                                           <div class="prof-sectionbrdr" id="teachinghr"></div>

                                            <div class="prof-section_hdng_innrdiv" id="exp">
                                                <div class="prof-section_hdng">Academic Experience</div>
                                               <!-- <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Professor and Dean</div>
                                                    <div class="prof-content_text">Vignan's Institute of Information
                                                        Technology(Autonomous) · Full-time<br />Oct 2003 - Present</div>
                                                </div>-->
                                            </div>
                                            <div class="prof-sectionbrdr" id="exphr"></div>

                                            <div class="prof-section_hdng_innrdiv" id="edu">
                                                <div class="prof-section_hdng">Education</div>
                                              <!--  <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">University of Twente</div>
                                                    <div class="prof-content_text">PhD, Applied Physics<br />2002 - 2006
                                                    </div>
                                                </div>

                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Indian Institute of Technology,
                                                        Delhi</div>
                                                    <div class="prof-content_text">B.tech, Chemical Engineering
                                                        <br />2002 - 2006
                                                    </div>
                                                </div>-->
                                            </div>
                                            <div class="prof-sectionbrdr" id="eduhr"></div>

                                            <div class="prof-section_hdng_innrdiv">
                                                <div class="prof-section_hdng">Projects</div>
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Integrated Product Development -
                                                        Sponsored by Opus Mach</div>
                                                    <div class="prof-content_text">Jan 2015 - Present</div>
                                                </div>
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Integrated Product Development -
                                                        Sponsored by Opus Mach</div>
                                                    <div class="prof-content_text">Jan 2015 - Present</div>
                                                </div>
                                            </div>
                                            <div class="prof-sectionbrdr"></div>


                                            <div class="prof-section_hdng_innrdiv">
                                                <div class="prof-section_hdng">Publications</div>
                                                <!-- <div style="align-self: stretch; height: 130px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex"> -->
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">A Multimodal End-2-End Approach to
                                                        Accessible Computing (first edition)</div>
                                                    <div class="prof-content_text">Springer (ISBN 978-1-4471-5081-7) ·
                                                        Mar 1, 2013</div>
                                                </div>
                                                
                                                  <!--  <button class="text_btn_primary text_btn_primary-btn_txt "> <img
                                                        src="assets/icons/arrow_outward.png" />
                                                    &nbsp;Text Button </button>

                                             </div> -->
                                                <!-- <div style="prof-section_hdng_innrdiv"> -->
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">A Multimodal End-2-End Approach to
                                                        Accessible Computing (first edition)</div>
                                                    <div class="prof-content_text">Springer (ISBN 978-1-4471-5081-7) ·
                                                        Mar 1, 2013</div>
                                                </div>
                                               <!--   <button class="text_btn_primary text_btn_primary-btn_txt "> <img
                                                        src="assets/icons/arrow_outward.png" />
                                                    &nbsp;Text Button </button>
                                            </div>
                                           </div> -->
                                            <div class="prof-sectionbrdr"></div>


                                            <div class="prof-section_hdng_innrdiv">
                                                <div class="prof-section_hdng">Awards & Honors</div>
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Applause Award</div>
                                                    <div class="prof-content_text">Issued by Vignan · Mar 2018</div>
                                                </div>
                                            </div>
                                            <div class="prof-sectionbrdr"></div>



                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>

                </div>

            </div>


            <!-- Profile modal end -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- <script src="js/common.js"></script>-->

    <script>
		
		 function openmodal(id) {
                    
                    console.log(id);
			
			 
			   $.ajax({
                    type: 'POST',
                    cache: false,
                    data: {id:id},
                    url: "getfaculty.php",                                            
                    success: function (response)
                    {
                        var obj = JSON.parse(response);
						console.log(obj);
						 var intr = [];
                           
                            $('#profile').modal({
                                show: 'true'
                            });

                            $("#facimg")[0].src = 'https://vignan.ac.in/Facultyprofiles/uploads/'+obj["empcode"]+'/'+obj["profilepic"];
                            $("#facname").text(obj['salutation']+' '+obj['name']);
                            $("#facdesig").html(obj.desig);
						
						if(obj['interests'].length > 0){
							console.log(obj['interests']);
							//var intr = [];
							intr = obj['interests'];
							console.log(intr);
							 const div = document.createElement("div");
						div.className = 'prof-content_div';
							intr.forEach(function (item) {
       const divchild = document.createElement("div");
						divchild.className = 'prof-content_text';
						divchild.innerHTML= item.interest;
						
                       
						div.appendChild(divchild);
						
						document.getElementById("interests").appendChild(div);
								//intr =[];
    });
						
						}else{
							
						document.getElementById("interestshr").style.display= 'none';
						document.getElementById("interests").style.display= 'none';
						}
						
						
						
						if(obj['teachingengmnts'].length > 0){
							
							var tchng = [];
							tchng = obj['teachingengmnts'];
							 const div = document.createElement("div");
						div.className = 'prof-content_div';
							tchng.forEach(function (item) {
       const divchild = document.createElement("div");
						divchild.className = 'prof-content_text';
						divchild.innerHTML= item.teachingengmnts;
						
                       
						div.appendChild(divchild);
						
						document.getElementById("teaching").appendChild(div)
    });
						
						}else{
						document.getElementById("teaching").style.display= 'none';
						document.getElementById("teachinghr").style.display= 'none';
						}
						 
						
					
						
						if(obj['expeirence'].length > 0){
							
							var exp = [];
							exp = obj['expeirence'];
							 const div = document.createElement("div");
						div.className = 'prof-content_div';
							exp.forEach(function (item) {
								
       const divchild1 = document.createElement("div");
						divchild1.className = 'prof-content_text';
						divchild1.innerHTML= item.expeirence;
								divchild1.innerHTML += ', '+item.location;
								divchild1.appendChild(document.createElement("br"));
								 const divchild2 = document.createElement("small");
								divchild2.innerHTML += item.fromdt +' to '+ item.todt  ;
								divchild1.appendChild(divchild2);
								
						
                       
						div.appendChild(divchild1);
								//div.appendChild(divchild2);
						
						document.getElementById("exp").appendChild(div)
    });
						
						}else{
						document.getElementById("exp").style.display= 'none';
						document.getElementById("exphr").style.display= 'none';
						}
						
						
						if(obj['facultyeducation'].length > 0){
							
							var exp = [];
							exp = obj['facultyeducation'];
							 const div = document.createElement("div");
						div.className = 'prof-content_div';
							exp.forEach(function (item) {
								
       const divchild1 = document.createElement("div");
						divchild1.className = 'prof-content_text';
						divchild1.innerHTML= item.facultyeducation;
								divchild1.appendChild(document.createElement("br"));
								 const divchild2 = document.createElement("small");
								divchild2.innerHTML += item.date;
								divchild1.appendChild(divchild2);
								
						
                       
						div.appendChild(divchild1);
								//div.appendChild(divchild2);
						
						document.getElementById("edu").appendChild(div)
    });
						
						}else{
						document.getElementById("exp").style.display= 'none';
						document.getElementById("exphr").style.display= 'none';
						}
						
						
						
						
                            //$("#newsimg").text(json_data); 
                            //$(".modal-body").text(json_data); 
                     
					}
			   });
                   
	
                  
                  
                   
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