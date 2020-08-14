
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
                  include ("includes/navigationBar2.php")
                ?>
              <!--===navigationBar===-->
 
              

             

              <!--===center detail side===-->
                <div class="col-lg-12">
                  <hr>
                  <!--===home center===-->
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8" style="background-color:#d7dce0">
				  
					<form class="form-horizontal" action="handlerAddQuestion.php" method="POST">
            <div class="col-md-12">
              <div class="well" style="background-color:#346893">
                <h4 ALIGN="center" style="color:white;font-size:15px;" > <b> <i> CREATE NEW ACCOUNT </i></b></h4>
              </div>
            </div>
			
			<!---======= Row =======--->
            <div class="row"> <i>
				<div class="col-md-4">
                <label  class="col-md-12"> FIRST NAME</label>
                  <input type="text" class="form-control"  name="" placeholder="Enter First Name" />
                    
              </div>
              <div class="col-md-4">
                <label class="col-md-12"> MIDDLE NAME </label>
                <input type="text" class="form-control"  name="" placeholder="Enter Middle Name" />

              </div><div class="col-md-4">
                <label class="col-md-12"> LAST NAME </label>
                <input type="text" class="form-control"  name="" placeholder="Enter Last Name" />
              </div>
			  </i>
            </div>
            <!---======= Row =======--->
			
			<!---======= Row =======--->
            <div class="row"> <i>
				<div class="col-md-4">
                <label  class="col-md-12"> DATE OF BRITH</label>
                  <input type="date" class="form-control"  name=""  />
                    
              </div>
              <div class="col-md-4">
                <label class="col-md-12"> GENDER </label>
				<select class="form-control"  name="">
                    <option>SELECT YOUR GENDER</option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                    <option value="others">OTHER</option>
                  </select> 
              </div><div class="col-md-4">
                <label class="col-md-12">  NATIONALITY</label>
                <input type="text" class="form-control"  name="" placeholder="Enter Your Nationality" />
              </div>
			  </i>
            </div>
            <!---======= Row =======--->
			
			<!---======= Row =======--->
            <div class="row"> <i>
				<div class="col-md-4">
                <label  class="col-md-12"> MARITAL STATUS</label>
                  <select class="form-control"  name="">
                    <option>SELECT MARITAL STATUS</option>
                    <option value="single">SINGLE</option>
                    <option value="married">MARRIED</option>
                    <option value="widow">WIDOW</option>
                  </select> 
              </div>
			  
			  <div class="col-md-4">
                <label  class="col-md-12"> EDUCATIONAL LEVEL</label>
                  <select class="form-control"  name="">
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
                    <input type="text" class="form-control"  name="" placeholder="Enter Username" />

              </div>
			  </i>
            </div>
            <!---======= Row =======--->
			
			<!---======= Row =======--->
            <div class="row"> <i>
				<div class="col-md-4">
                <label  class="col-md-12">  COURSE</label>
                    <input type="password" class="form-control"  name="" placeholder="Enter Course you take" />
 
              </div><div class="col-md-4">
                <label  class="col-md-12"> NEW PASSWORD</label>
                    <input type="password" class="form-control"  name="" placeholder="Enter Password" />
 
              </div>
			  
			  <div class="col-md-4">
                <label  class="col-md-12"> RE-ENTER PASSWORD</label>
                    <input type="password" class="form-control"  name="" placeholder="Enter Password" />

              </div>
			  
			  </i>
            </div>
            <!---======= Row =======--->
			
			<!---======= Row =======--->
            <div class="row"> <i>
				<div class="col-md-4"></div>
			  
              <div class="col-md-4">
                <label class="col-md-12"> </label>
                <button type="submit" class="btn btn-block btn-success" style="font-size:15px; border-radius:20px 20px 20px 20px; width: 50%;margin-left: 60px; margin-top:20px;"> <b>SAVE</b> </button>
              </div>
			  </i>
            </div>
            <!---======= Row =======--->
                 
            
          </form>
					
				  </div>
                  
                  <!--===home center===-->
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
