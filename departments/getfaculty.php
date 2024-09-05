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


if($_POST){
//print_r($_POST);
	
	 $sqlquery22_1 ="SELECT * FROM  profiledata where empcode='".$_POST['id']."'";
     $result1=mysqli_query($conn1, $sqlquery22_1);
	 $prfile = $result1->fetch_assoc();
	
	 $sqlquery22_2 ="SELECT * FROM  interests where empcode='".$_POST['id']."'";
     $result2=mysqli_query($conn1, $sqlquery22_2);	
	 $prfile['interests']=  $result2->fetch_all(MYSQLI_ASSOC);
	
	 $sqlquery22_3 ="SELECT * FROM  teachingengmnts where empcode='".$_POST['id']."'";
     $result3=mysqli_query($conn1, $sqlquery22_3);
	 $prfile['teachingengmnts']=  $result3->fetch_all(MYSQLI_ASSOC);
	
	 $sqlquery22_4 ="SELECT * FROM  facultyeducation where empcode='".$_POST['id']."'";
     $result4=mysqli_query($conn1, $sqlquery22_4);
	 $prfile['facultyeducation']=  $result4->fetch_all(MYSQLI_ASSOC);
	
	
	 $sqlquery22_5 ="SELECT * FROM  research where empcode='".$_POST['id']."'";
     $result5=mysqli_query($conn1, $sqlquery22_5);
	 $prfile['research']=  $result5->fetch_all(MYSQLI_ASSOC);
	
	 $sqlquery22_6 ="SELECT * FROM  awards where empcode='".$_POST['id']."'";
     $result6=mysqli_query($conn1, $sqlquery22_6);
	 $prfile['awards']=  $result6->fetch_all(MYSQLI_ASSOC);
	
	
	 $sqlquery22_7 ="SELECT * FROM  membership where empcode='".$_POST['id']."'";
     $result7=mysqli_query($conn1, $sqlquery22_7);
	 $prfile['membership']=  $result7->fetch_all(MYSQLI_ASSOC);
	
	 $sqlquery22_8 ="SELECT * FROM  publications where empcode='".$_POST['id']."'";
     $result8=mysqli_query($conn1, $sqlquery22_8);
	 $prfile['publications']=  $result8->fetch_all(MYSQLI_ASSOC);
	
	 $sqlquery22_9 ="SELECT * FROM  conferences where empcode='".$_POST['id']."'";
     $result9=mysqli_query($conn1, $sqlquery22_9);
	 $prfile['conferences']=  $result9->fetch_all(MYSQLI_ASSOC);
	
	
	 $sqlquery22_10 ="SELECT * FROM  facultyevents where empcode='".$_POST['id']."'";
     $result10=mysqli_query($conn1, $sqlquery22_10);
	 $prfile['facultyevents']=  $result10->fetch_all(MYSQLI_ASSOC);
	
     $sqlquery22_11 ="SELECT * FROM  visits where empcode='".$_POST['id']."'";
     $result11=mysqli_query($conn1, $sqlquery22_11);
	 $prfile['visits']=  $result11->fetch_all(MYSQLI_ASSOC);
	
	 $sqlquery22_12 ="SELECT * FROM  adminpositions where empcode='".$_POST['id']."'";
     $result12=mysqli_query($conn1, $sqlquery22_12);
	 $prfile['adminpositions']=  $result12->fetch_all(MYSQLI_ASSOC);
	
	 $sqlquery22_13 ="SELECT * FROM  expeirence where empcode='".$_POST['id']."'";
     $result13=mysqli_query($conn1, $sqlquery22_13);
	 $prfile['expeirence']=  $result13->fetch_all(MYSQLI_ASSOC);
	
	
	 echo json_encode($prfile);
	
}
?>