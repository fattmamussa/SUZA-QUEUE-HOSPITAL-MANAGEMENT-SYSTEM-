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
                         include("connection.php");

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
									<!---======== get the ID from view_request.php ===---->
									<?php 
										if(isset($_GET["uId"])){
											 $ID_user_table = $_GET["uId"];
											//$ID_user_table = $_SESSION["ID_user_table"];
											$nRows = $conn->query("select * from request_table r, laboratory_table l, user_table u  where u.ID_user_table='$ID_user_table' and request_status='see_doctor' and u.ID_user_table=r.ID_user_table and r.ID_request_table=l.ID_request_table "); 
											$results = $nRows->fetch(PDO::FETCH_ASSOC);
		
											
										
									?>
									
									
									<form class="form-horizontal"  method="POST">
										<div class="col-md-12">
											<div class="well" style="background-color:#346893">
												<h4 ALIGN="center" style="color:white;font-size:15px;" > 
													<b> <i>VIEW LABORATORY RESULT  </i></b></h4>
											</div>
												<input type="hidden" name="ID_request_table" value="<?php echo 	$results['ID_request_table'];?>" />
												<input type="hidden" name="ID_lab_table" value="<?php echo 	$results['ID_lab_table'];?>" />

											
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12" STYLE="COLOR:RED">  LABORATORY ANALYSIS</label>
											</div>
										</i> </div>
										<!---======= Row =======--->
										
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
												<input type="text" class="form-control"  name="urine_appearence" value="<?php echo 	$results['urine_appearence'];?>" />
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
												<input type="text" class="form-control"  name="Urobilinogen" value="<?php echo 	$results['Urobilinogen'];?>" />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> PROTEIN</label>
												<input type="text" class="form-control"  name="Protein" value="<?php echo 	$results['Protein'];?>" />
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12">KETONE</label>
												<input type="text" class="form-control"  name="Ketone" value="<?php echo 	$results['Ketone'];?>" />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  BLOOD</label>
												<input type="text" class="form-control"  name="Blood" value="<?php echo 	$results['Blood'];?>" />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> NITRITES</label>
												<input type="text" class="form-control"  name="Nitrites" value="<?php echo 	$results['Nitrites'];?>" />
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12">LEUCOCYTES</label>
												<input type="text" class="form-control"  name="Leucocytes" value="<?php echo 	$results['Leucocytes'];?>" />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  SUGAR</label>
												<input type="text" class="form-control"  name="Sugar" value="<?php echo 	$results['Sugar'];?>" />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> PH</label>
												<input type="text" class="form-control"  name="Ph" value="<?php echo 	$results['Ph'];?>" />
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12">SG</label>
												<input type="text" class="form-control"  name="SG" value="<?php echo 	$results['SG'];?>" />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  C/PDEPOSITE</label>
												<input type="text" class="form-control"  name="C_deposite" value="<?php echo 	$results['C_deposite'];?>" />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12"> HEPATITIS C SCREENING </label>
												<input type="text" class="form-control"  name="Hepatitis_C_Screening" value="<?php echo 	$results['Hepatitis_C_Screening'];?>" />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12">  ABO BLOOD GROUP</label>
												<input type="text" class="form-control"  name="ABO_blood_group" value="<?php echo 	$results['ABO_blood_group'];?>" />
											</div>
										</i> </div>
										<!---======= Row =======--->
										<BR>
										<!---======= Row =======--->
										
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12" STYLE="COLOR:RED">  LABORATORY ANALYSIS</label>
											</div>
										</i> </div>
										<!---======= Row =======--->
										<HR>
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  WEIGHT</label>
												<input type="number" class="form-control"  name="C_deposite" placeholder="...................." />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12"> HEIGHT </label>
												<input type="number" class="form-control"  name="Hepatitis_C_Screening" placeholder="...................." />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12">B/p</label>
												<input type="text" class="form-control"  name="ABO_blood_group" placeholder="...................." />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  VISION: Rt</label>
												<input type="text" class="form-control"  name="C_deposite" placeholder="...................." />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12"> VISION: Lt </label>
												<input type="text" class="form-control"  name="Hepatitis_C_Screening" placeholder="...................." />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12">HEARING</label>
												<input type="text" class="form-control"  name="ABO_blood_group" placeholder="...................." />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">	</div>
										  
											<div class="col-md-4">
												<label class="col-md-12"> </label>
												<button type="submit" name="submit" class="btn btn-block btn-success" style="font-size:15px; border-radius:20px 20px 20px 20px; width: 50%;margin-left: 60px; margin-top:20px;"> <b>SAVE</b> </button>
											</div>
										</i> </div><BR>
										<!---======= Row =======--->
										
										
										</div>
									</form>
										<?php } ?>
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
<?php 
			include("connection.php");
			
			if (isset ($_POST['submit'])){
				$weight=$_POST['weight'];
				$height=$_POST['height'];	
				$Bp=$_POST['Bp'];
				$vision_Rt=$_POST['vision_Rt'];
				$Nitrites=$_POST['Nitrites'];
				$vision_Lt=$_POST['vision_Lt'];
				$hearing=$_POST['hearing'];
				$ID_lab_table=$_POST['ID_lab_table'];
				$ID_request_table=$_POST['ID_request_table'];
				
				//insert data into laboratory_table
				$sql1="INSERT INTO physical_examination_table(weight, height, Bp, vision_Rt, vision_Lt, hearing, ID_lab_table)
				VALUES (:weight, :height, :Bp, :vision_Rt, :vision_Lt, :hearing, :ID_lab_table  ) ";
				
				$stmr1=$conn->prepare($sql1);
				$stmr1->execute(array(':weight'=>$weight, ':height'=>$height , ':Bp'=>$Bp, ':vision_Rt'=>$vision_Rt, 
				':vision_Lt'=>$vision_Lt, ':hearing'=>$hearing, ':ID_lab_table'=>$ID_lab_table));
				
				//retrive  ID_user_table from user_table
				//$ID_user_table = $conn->lastInsertId();
				//$ID_user_table;
				
				//update table request change request status to see_doctor
				$sql2 = "UPDATE request_table SET request_status='done' where ID_request_table='$ID_request_table'  ";
				$stt = $conn->prepare($sql2);
				$stt->execute([$request_status]);
				
				echo " <script>alert('Thanks for coming')</script>". $ID_user_table ;
				echo "<script>window.open('view_lab_result.php','_self')</script>";

			}
		?>
	<!---========= Form Handler ends ============--->
</html>
