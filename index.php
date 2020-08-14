<?php
session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<title>SUZA HOSPITAL QUEUE MANAGEMENT SYSTEM</title>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1" >

		<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/styles/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/styles/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="assets/styles/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="assets/styles/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/styles/css/util.css">
		
		<script>  
		function validateform(){  
		var username=document.myform.username.value;  
		var password=document.myform.password.value;  
		  
		if (username==null || username==""){  
		  alert("username can't be blank");  
		  return false;  
		}else if (username==null || username==""){  
		  alert("username can't be blank");  
		  return false;  
		}
		} 
		</script>
	</head>

	<body>
		<!--DIV for the form body container-->
			<div class="limiter">
				<div class="container-login100">
					<!--======= white background ======--->
						<div class="wrap-login100">
							<!--======= login image ======--->
								<div class="login100-pic js-till" data-tilt>
									<img src="assets/img/logo1.png" alt="logo"  >
								</div>
							<!--======= login image end======--->
 
							<!--====== login form ======---->
								<form class="login100-form validate-form"  method="post" name="myform" onsubmit="return validateform()" >
									<span class="login100-form-title"> SUZA HOSPITAL QUEUE MANAGEMENT SYSTEM</span>

									<!--=== username tag ====--->
										<div class="wrap-input100 validate-input" >
											<input class="input100" type="text" name="username" placeholder="Enter Username">
											<span class="focus-input100"></span>
											<span class="symbol-input100"><i class="fa fa-user" aria-hidden="true"></i></span>
										</div>
									<!--=== username tag ends ====--->
									<br>
									<!---======password tag =======--->
										<div class="wrap-input100 validate-input" >
											<input class="input100" type="password" name="password" placeholder="Enter Password">
											<span class="focus-input100"></span>
											<span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
										</div>
									<!---======password tag =======--->

									<!---===== login button =====--->
										<div class="container-login100-form-btn">
											<button class="btn btn-info" style="color:white" name="submit">
												<b>login</b> 
											</button>
										</div>
									<!---===== login button =====--->
					
									<!---======sign up for creation of new account=====--->
										<div class="text-center p-t-12">
											<span class="txt1">	SIGN UP:</span>
											<a class="txt2" href="account.php">	Crete Account </a>
										</div>					
									<!---======sign up for creation of new account ends =====--->
								</form>
							<!--====== login form end ======---->
						</div>	
					<!--======= white background end ======--->
				</div>		
			</div>
		<!--form body container ends-->


		<!---========= Script start =======--->
			<script src="assets/styles/jquery/jquery-3.2.1.min.js"></script>
			<script src="assets/styles/bootstrap/js/popper.js"></script>
			<script src="assets/styles/bootstrap/js/bootstrap.min.js"></script>
			<script src="assets/styles/select2/select2.min.js"></script>
			<script src="assets/styles/tilt/tilt.jquery.min.js"></script>
			<script >
				$('.js-tilt').tilt({
					scale: 1.1
				})
			</script>
			<script src="assets/js/main.js"></script>

		<!-----========= script ends =========--->
		
	</body>
	
	<?php
	include("connection.php");
if(isset($_POST["submit"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
               // $message = '<label>All fields are required</label>'; 
			   
			  // echo '<label>All fields are required</label>';
			   	echo " <script>alert('All fields are required')</script>" ;

           }  
           else  
           {  
                $query = "SELECT * FROM user_logs_table ul, user_role_table ur, user_table u WHERE username = :username AND password = :password AND u.ID_user_table=ul.ID_user_table and ul.ID_user_log=ur.ID_user_log ";  
                $statement = $conn->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount(); 
					$row = $statement->fetch(PDO::FETCH_ASSOC);
                if($count > 0)  
                {  
                    $_SESSION["username"] = $_POST["username"]; 
                    $_SESSION["ID_user_table"] = $row["ID_user_table"]; 
                    $_SESSION["user_role"] = $row["user_role"]; 
                     //header("location:home.php");  
					 echo "<script>window.open('home.php','_self')</script>";

                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
  
                }  
           }  
      } 
?>
<!---=============form handler end================---->


</html>