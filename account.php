<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SUZA HOSPITAL QUEUE MANAGEMENT SYSTEM</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="assets/styles/bootstrap3/bootstrap.css">
		<script src="assets/styles/bootstrap3/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		
		<style>
			footer { background-color:#5f9ea0; padding: 25px;}
			.carousel-inner img { width: 100%;  min-height: 200px;}
			@media (max-width: 600px) { .carousel-caption {display: none; }}
		</style>
		
		<!--validation-->

 <script src="includes/form_validation_js.js"></script>

  <script type="text/javascript">
    function formValidation(){
		var first_name = document.getElementById("first_name");
		var error1 = document.getElementById("errormessage1");
	  
		var middle_name = document.getElementById("middle_name");
		var error2 = document.getElementById("errormessage2");
		
		var last_name = document.getElementById("last_name");
		var error3 = document.getElementById("errormessage3");
		
		var nationality = document.getElementById("nationality");
		var error4 = document.getElementById("errormessage4");
		
		var username = document.getElementById("username");
		var error5 = document.getElementById("errormessage5");
		
		var password = document.getElementById("password");
		var error6 = document.getElementById("errormessage6");
		
		var password1 = document.getElementById("password1");
		var error7 = document.getElementById("errormessage7");

      if(AllLetters(first_name,error1)){
		if(AllLetters(middle_name,error2)){
			if(AllLetters(last_name,error3)){
				if(AllLetters(nationality,error4)){
					if(AllLetters(username,error5)){
						//if(alphanumeric(password,error6)){
							//if(passwordMatch(password,password1,error7)){}}
					}
				}
			}
		}
      }else{
        return false;
      }

    }
    
  </script>
	<!--validation-->
	
	</head>

	<body>
		<!--===container body===-->
			<div class="container">
				<!--===titlebar===-->	<?php	include ("includes/titlebar.php")	?>	<!--===titlebar===-->
	  
				<!--===main row===-->
				<div class="row">
					<!--===navigationBar===-->	<?php	include ("includes/navigationBar2.php")	?>	 <!--===navigationBar===-->
					
					<!--===center detail side===-->
						<div class="col-lg-12">
							<hr>
							<!--===home center===-->
								<div class="col-lg-2"></div>
								<div class="col-lg-8" style="background-color:#d7dce0">
					  
									<form class="form-horizontal"  method="POST" onsubmit="return formValidation()" >
										<div class="col-md-12">
											<div class="well" style="background-color:#346893">
												<h4 ALIGN="center" style="color:white;font-size:15px;" > 
													<b> <i> CREATE NEW ACCOUNT </i></b></h4>
											</div>
										</div>
				
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12"> FIRST NAME</label>
												<input type="text" class="form-control"  id="first_name" oninput="formValidation()" name="first_name" placeholder="Enter First Name" />
												<small id="errormessage1"></small>
											</div>
											<div class="col-md-4">
												<label class="col-md-12"> MIDDLE NAME </label>
												<input type="text" class="form-control"  id="middle_name" oninput="formValidation()" name="middle_name" placeholder="Enter Middle Name" />
												<small id="errormessage2"></small>
											</div>
											<div class="col-md-4">
												<label class="col-md-12"> LAST NAME </label>
												<input type="text" class="form-control" id="last_name" oninput="formValidation()" name="last_name" placeholder="Enter Last Name" />
												<small id="errormessage3"></small>
											</div>
										</i> </div>
										<!---======= Row =======--->
				
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12"> DATE OF BRITH</label>
												<input type="date" class="form-control"  name="date_of_brith"  />
											</div>
											<div class="col-md-4">
												<label class="col-md-12"> GENDER </label>
												<select class="form-control"  name="sex">
													<option>SELECT YOUR GENDER</option>
													<option value="male">MALE</option>
													<option value="female">FEMALE</option>
													<option value="others">OTHER</option>
												</select> 
											</div>
											<div class="col-md-4">
												<label class="col-md-12">  NATIONALITY</label>
												<input type="text" class="form-control" id="nationality" oninput="formValidation()" name="nationality" placeholder="Enter Your Nationality" />
												<small id="errormessage4"></small>
											</div>
										</i> </div>
										<!---======= Row =======--->
				
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12"> MARITAL STATUS</label>
												<select class="form-control"  name="marital_status">
													<option>SELECT MARITAL STATUS</option>
													<option value="single">SINGLE</option>
													<option value="married">MARRIED</option>
													<option value="widow">WIDOW</option>
												</select> 
											</div>
						  
											<div class="col-md-4">
												<label  class="col-md-12"> EDUCATIONAL LEVEL</label>
												<select class="form-control"  name="educational_level">
													<option>SELECT YOUE EDUCATIONALLEVEL</option>
													<option value="certificate">CERTIFICTE LEVEL</option>
													<option value="diploma">DIPLOMA LEVEL</option>
													<option value="degree">DEGREE LEVEL</option>
													<option value="master">MASTER LEVEL</option>
													<option value="staff">STAFF</option>
												</select> 
											</div>
												  
											<div class="col-md-4">
												<label  class="col-md-12"> USERNAME</label>
												<input type="text" class="form-control" id="username" oninput="formValidation()" name="username" placeholder="Enter Username" />
												<small id="errormessage5"></small>
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  COURSE</label>
												<input type="text" class="form-control"  name="course" placeholder="Enter Course you take" />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> NEW PASSWORD</label>
												<input type="password" class="form-control"  id="password" oninput="formValidation()" name="password" placeholder="Enter yourPassword" />
												<small id="errormessage6"></small>
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12"> RE-ENTER PASSWORD</label>
												<input type="password" class="form-control" id="password1" oninput="formValidation()" name="password1" placeholder="Confirm your Password" />
												<small id="errormessage7"></small>
											</div>
										</i> </div>
										<!---======= Row =======--->
				
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<input type="hidden" class="form-control"  name="user_role" value="Partient" />
												<input type="hidden" class="form-control"  name="user_status" value="Registered" />
											</div>
										  
											<div class="col-md-4">
												<label class="col-md-12"> </label>
												<button type="submit" name="submit" class="btn btn-block btn-success" style="font-size:15px; border-radius:20px 20px 20px 20px; width: 50%;margin-left: 60px; margin-top:20px;"> <b>SAVE</b> </button>
											</div>
										</i> </div>
										<!---======= Row =======--->
									</form>
								</div>
							<!--===home center===-->
						</div>    <br>
					<!--===center detail side===-->
				</div> 
			  <!--===main row===-->
			  
			  <!--===footer===-->
				 <?php   include ("includes/footer.php")    ?>
			  <!--===footer===-->
			</div>
		<!--===container body===-->
	</body>
	<!---========= Form Handler ============--->
		<?php 
			include("connection.php");
			
			if (isset ($_POST['submit'])){
				$first_name=$_POST['first_name'];
				$middle_name=$_POST['middle_name'];	
				$last_name=$_POST['last_name'];
				$date_of_brith=$_POST['date_of_brith'];
				$sex=$_POST['sex'];
				$nationality=$_POST['nationality'];
				$marital_status=$_POST['marital_status'];
				$course=$_POST['course'];
				$educational_level=$_POST['educational_level'];
				$username=$_POST['username'];
				$password1=$_POST['password1'];
				$password=$_POST['password'];
				$user_role=$_POST['user_role'];
				$user_status=$_POST['user_status'];

				if($password != $password1 ){
					echo " <script>alert(' Password does not match, re enter password!')</script>". $ID_user_table ;
					echo "<script>window.open('account.php','_self')</script>";
				}else {
				//insert data into user_table
				$sql1="INSERT INTO user_table (first_name, middle_name, last_name, date_of_brith, sex, nationality, marital_status, course, educational_level)
				VALUES (:first_name, :middle_name, :last_name, :date_of_brith, :sex, :nationality, :marital_status, :course, :educational_level ) ";
				$stmr1=$conn->prepare($sql1);
				$stmr1->execute(array(':first_name'=>$first_name,  ':middle_name'=>$middle_name, ':last_name'=>$last_name, ':date_of_brith'=>$date_of_brith, ':sex'=>$sex, ':nationality'=>$nationality, ':marital_status'=>$marital_status, ':course'=>$course, ':educational_level'=>$educational_level));
				
				//retrive  ID_user_table from user_table
				$ID_user_table = $conn->lastInsertId();
				$ID_user_table;
				
				//insert data into user_logs_table
				$sql2="INSERT INTO user_logs_table(username, password, user_status, ID_user_table)
				VALUES(:username, :password, :user_status, :ID_user_table )";
				$stmr2=$conn->prepare($sql2);
				$stmr2->execute(array(':username'=>$username,  ':password'=>$password, ':user_status'=>$user_status, ':ID_user_table'=>$ID_user_table));
				
				//retrive  ID_user_log from user_logs_table
				$ID_user_log = $conn->lastInsertId();
				$ID_user_log;
				
				//insert data into user_role_table
				$sql3=" INSERT INTO user_role_table(user_role, ID_user_log) VALUES (:user_role, :ID_user_log)";
				$stmr3=$conn->prepare($sql3);
				$stmr3->execute(array(':user_role'=>$user_role,  ':ID_user_log'=>$ID_user_log));
				
				//retrive  ID_user_role from user_role_table
				$ID_user_role = $conn->lastInsertId();
				$ID_user_role;
				
				echo " <script>alert(' Your registration has been successfully accepted. Please login by using your username & password')</script>". $ID_user_table ;
				echo "<script>window.open('index.php','_self')</script>";
				header("location:index.php");				}

			}
		?>
	<!---========= Form Handler ends ============--->
</html>
<?php ob_end_flush(); ?>