 <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {            					 
  
 }  
 else  
 {  
      header("location:index.php");  
 }  
 ?>  
<!-----=======session ends=====--->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SUZA HOSPITAL QUEUE MANAGEMENT SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/styles/bootstrap3/bootstrap.css">

  <script src="assets/styles/bootstrap3/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">


    <!--==home img==-->
     <link rel="stylesheet" href="assets/styles/css/home_img.css">
    <!--home img==-->
  <style>
  <style>
    footer {
      background-color:#5f9ea0;
      padding: 25px;
    }
    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;

      }
    }
  </style>
</head>

<body>
    <!--===container body===-->
      <div class="container">
          <!--===titlebar===-->
            <?php
              include ("includes/titlebar.php")
            ?>
          <!--===titlebar===-->
  
          <!--===main row===-->
            <div class="row">
              <!--===navigationBar===-->
                <?php
                  include ("includes/navigationBar.php")
                ?>
              <!--===navigationBar===-->
 
              <!--===menu side===-->
                <?php
                  include ("includes/menu.php")
                ?>
              <!--===menu side===-->

             

              <!--===center detail side===-->
                <div class="col-lg-9">
                  <!--===center detail side===-->
						<div class="col-lg-12">
							<hr>
							<!--===home center===-->
								<div class="col-lg-12" style="background-color:#d7dce0">
					  
									<form class="form-horizontal"  method="POST">
										<div class="col-md-12">
											<div class="well" style="background-color:#346893">
												<h4 ALIGN="center" style="color:white;font-size:15px;" > 
													<b> <i> LABORATORY ANALYSIS </i></b></h4>
											</div>
											
											<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12" STYLE="COLOR:GREEN">  URINE ANALYSIS</label>
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-8">
												<label  class="col-md-12">  APPEARANCE:</label>
												<input type="text" class="form-control" required name="course" placeholder="Enter Course you take" />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12" STYLE="COLOR:GREEN">  CHEMICALLY:</label>
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  UROBILINOGEN</label>
												<input type="text" class="form-control" required name="course" placeholder="Enter Course you take" />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> PROTEIN</label>
												<input type="password" class="form-control" required name="password1" placeholder="Enter yourPassword" />
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12">KETONE</label>
												<input type="password" class="form-control" required name="password" placeholder="Confirm your Password" />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  BLOOD</label>
												<input type="text" class="form-control" required  name="course" placeholder="Enter Course you take" />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> NITRITES</label>
												<input type="password" class="form-control" required  name="password1" placeholder="Enter yourPassword" />
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12">LEUCOCYTES</label>
												<input type="password" class="form-control" required name="password" placeholder="Confirm your Password" />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  SUGAR</label>
												<input type="text" class="form-control" required name="course" placeholder="Enter Course you take" />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> PH</label>
												<input type="password" class="form-control" required name="password1" placeholder="Enter yourPassword" />
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12">SG</label>
												<input type="password" class="form-control" required name="password" placeholder="Confirm your Password" />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  C/PDEPOSITE</label>
												<input type="text" class="form-control" required name="course" placeholder="Enter Course you take" />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12"> HEPATITIS C SCREENING </label>
												<input type="text" class="form-control" required  name="course" placeholder="Enter Course you take" />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12">  ABO BLOOD GROUP</label>
												<input type="text" class="form-control" required name="course" placeholder="Enter Course you take" />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-8">
												<label  class="col-md-12" STYLE="COLOR:GREEN">  HEPATITIS C SCREENING:</label>
												<input type="text" class="form-control" required name="course" placeholder="Enter Course you take" />

											</div>
										</i> </div>
										<!---======= Row =======--->
										
										
										
										</div>
									</form>
									
								</div>
							<!--===home center===-->
						</div>    <br>
					<!--===center detail side===-->
                </div>
                <br>
              <!--===center detail side===-->
            </div> 
          <!--===main row===-->
          
          <!--===footer===-->
             <?php
                  include ("includes/footer.php")
                ?>
          <!--===footer===-->
</div>
<!--===container body===-->
</body>
</html>
