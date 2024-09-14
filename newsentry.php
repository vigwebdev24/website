<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vignan News</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/ncc.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font.css">
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
    <link rel="stylesheet" href="css/booksearch.css">
	<style>
		.main-content {
			display: flex;
			column-gap: auto;
			height: 90%;
			width: 50%;
			gap: 101px;
		}
		.loginform input,select {
			width: 100% !important;
			border: none !important;
			margin-top: 0px !important;
			border-bottom: 1px solid black !important;
			padding: 10px 5px !important;
			font-size: 16px !important;
			background-color: transparent !important;
			outline: none !important;
		}
		input[type="file"] {
      position: relative;
      
    }
    /* file upload */
    .loginform input[type="file"]::file-selector-button {
      width: 120px;
      color: transparent;
      height: auto;
      
    }
    
    /* Faked label styles and icon */
    .loginform input[type="file"]::before {
      position: absolute;
      pointer-events: none;
      top: 17px;
      left: 16px;
      height: 20px;
      width: 20px;
      content: "";
     
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230964B0'%3E%3Cpath d='M18 15v3H6v-3H4v3c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-3h-2zM7 9l1.41 1.41L11 7.83V16h2V7.83l2.59 2.58L17 9l-5-5-5 5z'/%3E%3C/svg%3E");
    }
    
    .loginform input[type="file"]::after {
      position: absolute;
      pointer-events: none;
      top: 17px;
      left: 40px; 
      color: white;      
      content: "Upload File";
    }
    
    /* ------- From Step 1 ------- */
    
    /* file upload button */
    .loginform input[type="file"]::file-selector-button {
      border-radius: 4px;
      padding: 0 10px;
      height: 40px;
      cursor: pointer;      
      background-color: #992E00;
      border: 0px solid rgba(0, 0, 0, 0.16) !important;
      box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
      margin-right: 10px;      
      transition: background-color 200ms;
    }
    
    /* file upload button hover state */
    .loginform input[type="file"]::file-selector-button:hover {
      background-color: #992E00;
    }
    
    /* file upload button active state */
    .loginform input[type="file"]::file-selector-button:active {
      background-color: #992E00;
    }
	/* End Of file upload */
	</style>
</head>
<body>
    <?php include_once 'navbar.php'?>
    <div class="container">
        <div class="newstudent-div-space">
            <div class="main-content">  
                <!--<div class="left-section">
                    <div class="image-container">
                        <img src="assets//images//library.png" alt="Library">
                    </div>
				</div>-->
                <div class="right-section">
                        <div class="welcome-text">
                            <h1>News Entry</h1>                            
                        </div>
                        <form class="loginform">
							<div class="row">
								
								 <!--<div class="col-lg-12 inputgroup">
									<label for="title">
										<input type="text" id="title" name="title" placeholder="Max 30 characters" required>
										<span>Title</span>
									</label>
								 </div>-->
								
								<div class="col-lg-12 inputgroup">
									<label for="title">Title</label>
									<input type="text" id="title" name="title" placeholder="Max 30 characters" required>
								</div>
								 <!--<div class="col-md-3 mb-3">                                
									<label id="ttl"><br><br><br></label>
								</div>-->
							</div>
							<div class="row">
								<div class="col-lg-12 inputgroup">
									<label for="subheading">Sub Heading</label>
									<input type="text" id="subheading" name="subheading" placeholder="Max 65 characters" required>
								</div>
								<!--<div class="col-md-3 mb-3">                                
									<label id="ttl"><br><br><br></label>
								</div>-->
							</div>
							<div class="row">
								<div class="col-lg-12 inputgroup">
									<label for="description">Description</label>
									<textarea id="description" name="description" rows="10" cols="50" placeholder="Max 6000 characters" required></textarea>
								</div>
								<!--<div class="col-md-3 mb-3">                                
									<label id="ttl"><br><br><br></label>
								</div>-->
							</div>
							<div class="row">
								
									<div class="inputgroup col-lg-6 datetime-arrow">
										<label for="datelabelarrow">
											<div class="newsdate">
												<input type="text" id="newsdate" placeholder="Please Select" onfocus="this.type='date'"
													onfocusout=(this.type='text') required>											
											</div>
										</label>

									</div>
								<!--<div class="col-md-3 mb-3">                                
									<label id="ttl"><br><br><br></label>
								</div>-->
									<div class="inputgroup col-lg-6 datetime-arrow">
										<label for="timelabelarrow">
											<div class="timelabel">
												<input type="text" id="timelabel" placeholder="Please Select" onfocus="this.type='time'"
													onfocusout=(this.type='text') required>											
												<!-- <img src="assets/icons/timepicker1.png" class="cal-picker-txt"/> -->
											</div>
										</label>

									</div>
									<!--<div class="col-md-3 mb-3">                                
										<label id="ttl"><br><br><br></label>
									</div>-->
							</div>
							<div class="row">
								<div class="col-lg-12 inputgroup">
									<label for="imagefile">Image</label>
									<input type="file" id="imagefile" name="imagefile" class="btn btn-sm" required>
								</div>
								<!--<div class="col-md-3 mb-3">                                
									<label id="ttl"><br><br><br></label>
								</div>-->
							</div>
							<div class="row">
								<div class="inputgroup col-lg-6">
									<label for="newstype">News Type</label>									
									<select name="select" id="newstype" name="newstype" required>
										<option value="">-Select Type-</option>
										<option value="all">all</option>
										<option value="academics">academics</option>                                
										<option value="students">students</option>                                
										<option value="career">career</option>                                
										<option value="alumni">alumni</option>                                
									</select>
								</div>
								<!--<div class="col-md-3 mb-3">                                
									<label id="ttl"><br><br><br></label>
								</div>-->
								<div class="inputgroup col-lg-6">
									<label for="department">Department</label>									
									<select name="select" id="department" name="department" required>
										<option value="">-Select Department-</option>
										<option value="AGE">Agriculture Engineering</option>
										<option value="ME">Mechanical Engineering</option>  
										<option value="chem">Chemical Engineering</option>
										<option value="civil">Civil Engineering</option>
										<option value="TT">Textile Technology</option>
										<option value="ECE">Electronics and Communication Engineering</option>
										<option value="BME">Biomedical Engineering</option>
										<option value="EEE">Electrical and Electronics Engineering</option>
										<option value="CSE">Computer Science and Engineering</option>
										<option value="ACSE">Advanced Computer Science and Engineering</option>
										<option value="IT">Information Technology</option>
										<option value="BT">Biotechnology</option>
										<option value="Pharm.Sci.">Pharmaceutical Sciences</option>
										<option value="MGT">Management Studies</option>										
										<option value="LAW">Institue of Law</option>
										<option value="Agri">Agriculture and Horticulture Sciences</option>
										<option value="FT">Food Technology</option>
										<option value="Physics">Department of Physics</option>
										<option value="Chemistry">Department of Chemistry</option>
										<option value="Maths">Department of Mathematics and Statistics</option>
										<option value="English">Department of English</option>
										<option value="BSH">Department of Sciences and Humanities</option>
										
									</select>
								</div>
								<!--<div class="col-md-3 mb-3">                                
									<label id="ttl"><br><br><br></label>
								</div>-->
							</div>
							<div class="row">
								<div class="col-lg-12 inputgroup">
									<label for="firstnewslink">News Link-1</label>
									<input type="text" id="firstnewslink" name="firstnewslink" placeholder="Max 200 characters" required>
								</div>
								<!--<div class="col-md-3 mb-3">                                
									<label id="ttl"><br><br><br></label>
								</div>-->
							</div>
							<div class="row">
								<div class="col-lg-12 inputgroup">
									<label for="secondnewslink">News Link-2</label>
									<input type="text" id="secondnewslink" name="secondnewslink" placeholder="Max 200 characters" required>
								</div>
								<!--<div class="col-md-3 mb-3">                                
									<label id="ttl"><br><br><br></label>
								</div>-->
							</div>
							<div class="row">
								<div class="col-lg-12">
                            		<button type="submit" class="button_primary Ss-btn_txt">Submit</button>
								</div>
							</div>
                        </form>
						<br><br><br>
                        <!--<div class="links">
                            <p>Don't have an account? <a href="#"><span>Sign Up <img src="assets/svgicons/outwardarrow_brown.svg" alt=""></span></a></p>
                            <a href="#">Forgot Password?</a>
                        </div>-->
                </div>
            </div>
        </div>
    </div>
	<script>
		function submitNewsEntry(){
			if(validateNewsEntry("form","null")){
				
				
				
			}else{
				document.getElementById("message").innerText="Note:Please Fill All Fields!";
				document.getElementById("message").style="font-size:15px;color:red;";
				var modal = document.getElementById("myModal");
				modal.style.display = "none";
				return false;
			}
		}
		function validateNewsEntry(){
		 
			
			
		}
	</script>
</body>
</html>    