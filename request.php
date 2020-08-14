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
 //$username=$_SESSION["username"];
 
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

  <!--=====table data =====-->
    <link rel="stylesheet" href="css/table/style_table.css">
    <script src="css/table/script1.js"></script>
    <script src="css/table/script2.js"></script>
    <script src="css/table/o.js"></script>
    <!--=====table data =====-->

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
                  <hr>
                  <!--===home center body===-->
                    <div class="col-lg-1" ></div>
                    <div class="col-lg-6" style="background-color: #346893" >

                    <div class="col-md-12">
                          <hr>
                          <div class="well">
                              <table class="table table-hover" style="font-size:17px;">
							        <label style="color: BLACK" name="date" ><?php echo date("Y/m/d") ?> </label> <br><br>
							        <label style="color: BLACK"> QUEUE INFORMATION </label> <br><br>
									<label style="color: BLACK"> Queue Status:: 
										<?php 
											$nRows = $conn->query("select count(ID_request_table) from request_table where to_days_date=CURDATE() and request_status='request'")->fetchColumn(); 
											echo $number = $nRows;
										?> 
										Patient
									</label> <br><br>
									<form method="post">
									<button  type="submit" name="submit" class="btn btn-primary btn-block" style="border-radius:10px; background-color:#0e263d;" >
										<span> <i class="fa fa-user" aria-hidden="true"></i>
                                          <b> Take a Number </b>
                                        </span>
									</button>	
										</form>
   
                              </table>
                          </div>
                          <hr>
                    </div>
                </div>
                 
                  <!--===home center body===-->
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
				$request_number = $number + 1; 
				//generet time that already we plus with the 10 minutes to be in a laboratory
				$time = date("h:i:sa")  ; 
				$date ='2011-04-8 08:29:49';
				$currentDate = strtotime($time);
				$futureDate = $currentDate + (60*10);
				$formatDate = date('H:i:s', $futureDate);
				
				//insert data into user_table
				$sql1="INSERT INTO request_table(ID_user_table, to_days_date, current_times, request_status, request_number) 
				VALUES (:ID_user_table, :to_days_date, :current_times, :request_status, :request_number ) ";
				$stmr1=$conn->prepare($sql1);
				$stmr1->execute(array(':ID_user_table'=>$_SESSION["ID_user_table"],  ':to_days_date'=>date("Y/m/d"), ':current_times'=>$formatDate, ':request_status'=>'request', ':request_number'=>$request_number));
				
				//retrive  ID_user_table from user_table
				$ID_user_table = $conn->lastInsertId();
				$ID_user_table;
				
				echo " <script>alert(' You have Successfully get the number')</script>". $ID_user_table ;
				echo "<script>window.open('my_request.php','_self')</script>";
				}
				
			
			?>
</html>
