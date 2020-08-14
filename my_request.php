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
							        <label style="color: BLACK">My Request Information: </label> <br>
									<label style="color: BLACK"> Your Number is:: 
										<?php 
											$ID_user_table = $_SESSION["ID_user_table"];
											$nRows = $conn->query("select request_number, current_times from request_table where ID_user_table='$ID_user_table' and request_status='request' "); 
											$results = $nRows->fetch(PDO::FETCH_ASSOC);
		
											echo 	$results['request_number'];
											

											
											
										?> 
									</label> <br>
									<label style="color: BLACK"> Your Time is:: <?php echo 	$results['current_times'];?>  </label>
   
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
</html>
