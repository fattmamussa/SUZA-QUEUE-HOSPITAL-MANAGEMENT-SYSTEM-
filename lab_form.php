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
											$nRows = $conn->query("select ID_request_table, request_number from request_table where ID_user_table='$ID_user_table' and request_status='request' "); 
											$results = $nRows->fetch(PDO::FETCH_ASSOC);
		
											
										
									?>
									
									
									<form class="form-horizontal"  method="POST">
										<div class="col-md-12">
											<div class="well" style="background-color:#346893">
												<h4 ALIGN="center" style="color:white;font-size:15px;" > 
													<b> <i> LABORATORY ANALYSIS </i></b></h4>
											</div>
											
											<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12" name="ID_request_table" STYLE="COLOR:RED">  REQUEST NUMBER: <?php echo 	$results['request_number'];?></label>
												<input type="hidden" name="ID_request_table" value="<?php echo 	$results['ID_request_table'];?>" />
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
												<input type="text" class="form-control"  name="urine_appearence" placeholder="...................." />
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
												<input type="text" class="form-control"  name="Urobilinogen" placeholder="...................." />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> PROTEIN</label>
												<input type="text" class="form-control"  name="Protein" placeholder="...................." />
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12">KETONE</label>
												<input type="text" class="form-control"  name="Ketone" placeholder="...................." />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  BLOOD</label>
												<input type="text" class="form-control"  name="Blood" placeholder="...................." />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> NITRITES</label>
												<input type="text" class="form-control"  name="Nitrites" placeholder="...................." />
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12">LEUCOCYTES</label>
												<input type="text" class="form-control"  name="Leucocytes" placeholder="...................." />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  SUGAR</label>
												<input type="text" class="form-control"  name="Sugar" placeholder="...................." />
											</div>
											
											<div class="col-md-4">
												<label  class="col-md-12"> PH</label>
												<input type="text" class="form-control"  name="Ph" placeholder="...................." />
											</div>
										  
											<div class="col-md-4">
												<label  class="col-md-12">SG</label>
												<input type="text" class="form-control"  name="SG" placeholder="...................." />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12">  C/PDEPOSITE</label>
												<input type="text" class="form-control"  name="C_deposite" placeholder="...................." />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12"> HEPATITIS C SCREENING </label>
												<input type="text" class="form-control"  name="Hepatitis_C_Screening" placeholder="...................." />
											</div>
											<div class="col-md-4">
												<label  class="col-md-12">  ABO BLOOD GROUP</label>
												<input type="text" class="form-control"  name="ABO_blood_group" placeholder="...................." />
											</div>
										</i> </div>
										<!---======= Row =======--->
										
										<!---======= Row =======--->
										<div class="row"> <i>
											<div class="col-md-4">
												<label  class="col-md-12" STYLE="COLOR:RED">  LABO TECH : <?php echo 	$_SESSION["username"] ;?></label>
											</div>
										  
											<div class="col-md-4">
												<label class="col-md-12"> </label>
												<button type="submit" name="submit" class="btn btn-block btn-success" style="font-size:15px; border-radius:20px 20px 20px 20px; width: 50%;margin-left: 60px; margin-top:20px;"> <b>SAVE</b> </button>
											</div>
										</i> </div>
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
				$urine_appearence=$_POST['urine_appearence'];
				$Urobilinogen=$_POST['Urobilinogen'];
				$Protein=$_POST['Protein'];	
				$Ketone=$_POST['Ketone'];
				$Blood=$_POST['Blood'];
				$Nitrites=$_POST['Nitrites'];
				$Leucocytes=$_POST['Leucocytes'];
				$Sugar=$_POST['Sugar'];
				$Ph=$_POST['Ph'];
				$SG=$_POST['SG'];
				$C_deposite=$_POST['C_deposite'];
				$Hepatitis_C_Screening=$_POST['Hepatitis_C_Screening'];
				$ABO_blood_group=$_POST['ABO_blood_group'];
				$ID_request_table=$_POST['ID_request_table'];

				//insert data into laboratory_table
				$sql1="INSERT INTO laboratory_table(urine_appearence,Urobilinogen, Protein, Ketone, Blood, Nitrites, Leucocytes, Sugar, Ph,
				SG, C_deposite, Hepatitis_C_Screening, ABO_blood_group, ID_request_table)
				VALUES (:urine_appearence,:Urobilinogen, :Protein, :Ketone, :Blood, :Nitrites, :Leucocytes, :Sugar, :Ph, :SG, :C_deposite, :Hepatitis_C_Screening, 
				:ABO_blood_group, :ID_request_table  ) ";
				
				$stmr1=$conn->prepare($sql1);
				$stmr1->execute(array(':urine_appearence'=>$urine_appearence, ':Urobilinogen'=>$Urobilinogen, ':Protein'=>$Protein , ':Ketone'=>$Ketone, ':Blood'=>$Blood, ':Nitrites'=>$Nitrites, ':Leucocytes'=>$Leucocytes, ':Sugar'=>$Sugar, ':Ph'=>$Ph, ':SG'=>$SG, ':C_deposite'=>$C_deposite, ':Hepatitis_C_Screening'=>$Hepatitis_C_Screening, 
				':ABO_blood_group'=>$ABO_blood_group, ':ID_request_table'=>$ID_request_table));
				
				//retrive  ID_user_table from user_table
				//$ID_user_table = $conn->lastInsertId();
				//$ID_user_table;
				
				//update table request change request status to see_doctor
				$sql2 = "UPDATE request_table SET request_status='see_doctor', request_number=0 where ID_request_table='$ID_request_table'  ";
				$stt = $conn->prepare($sql2);
				$stt->execute([$request_status, $request_number]);
				
				echo " <script>alert('meet a Doctor to see your Lab results')</script>". $ID_user_table ;
				echo "<script>window.open('view_request.php','_self')</script>";

			}
		?>
	<!---========= Form Handler ends ============--->
</html>
