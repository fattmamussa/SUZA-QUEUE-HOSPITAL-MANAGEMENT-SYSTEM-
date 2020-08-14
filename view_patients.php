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
    <link rel="stylesheet" href="assets/table/style_table.css">
    <script src="assets/table/script1.js"></script>
    <script src="assets/table/script2.js"></script>
    <script src="assets/table/o.js"></script>
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
                  <!--===center detail side===-->
						<div class="col-lg-12">
							<hr>
							<!--===home center===-->
								<div class="col-lg-12" style="background-color:#d7dce0">
					  
									<form class="form-horizontal"  method="POST">
										<div class="col-md-12">
											<div class="well" style="background-color:#346893">
												<h4 ALIGN="center" style="color:white;font-size:15px;" > 
													<b> <i> VIEW PATIENT REQUESTS </i></b></h4>
											</div>
											<div class="table-responsive">
								<table id="example" class="display" cellspacing="0" width="100%">
                              <thead>
                                <tr>
								<th>No</th> <th>Full Name</th><th>Sex</th><th>Date of Brith</th> <th>Nationality</th> <th>Marital Status</th> <th></th>  </tr>

                              </thead>
                    <tbody>

                      <?php
                        include("connection.php");
							$stmt = $conn->query("SELECT * FROM request_table r, user_table u where u.ID_user_table=r.ID_user_table and request_status='done' ");
							$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

							foreach($results as $row) {
								 $ID_request_table = htmlentities($row['ID_request_table']);
								$ID_user_table = htmlentities($row['ID_user_table']);
								$to_days_date = htmlentities($row['to_days_date']);
								$current_times = htmlentities($row['current_times']);
								$request_status = htmlentities($row['request_status']);
								$request_number = htmlentities($row['request_number']);
								$first_name = htmlentities($row['first_name']);
								$middle_name = htmlentities($row['middle_name']);
								$last_name = htmlentities($row['last_name']);
								$date_of_brith = htmlentities($row['date_of_brith']);
								$sex = htmlentities($row['sex']);
								$nationality = htmlentities($row['nationality']);
								$marital_status = htmlentities($row['marital_status']);
								$course = htmlentities($row['course']);
								$educational_level = htmlentities($row['educational_level']);

                             
                      ?>

                                  <tr>
                                     <td> nambaa</td>
                                     <td><?php echo $first_name?> &nbsp <?php echo $middle_name?> &nbsp <?php echo $last_name ?> </td>
                                     <td><?php echo $sex ?> </td>
                                     <td><?php echo $date_of_brith ?> </td>
                                     <td><?php echo $nationality ?> </td>
                                     <td><?php echo $marital_status ?> </td>
                                     <td><a onClick="return confirmDelete()" href="delete.php?uId=<?php echo $ID_request_table ?> "> <span class="fa fa-trash"></span> </a></td>
                                     
									</tr>
                      <?php
                        } 
                      ?>
                              </tbody>
                  </table>
                </div>
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

<script>
// JavaScript Document for delete function
	function confirmDelete(){
	var c= confirm("Are you sure that you want to delete this record?");
	return c;
}
</script>
</html>
