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
                  <!--===home img===-->
                  <div class="one"> 
                    <label class="textoverimage" style="background-image:url(assets/img/pict1.png);">
                      <input type="checkbox">
                        <div> <p><br/><br/> Long waiting time <br> & queues  at places offering public services  such as hospitals, have often been blamed on shortage of health workers and inadequate hospital infrastructure. <br> * * * </p>


                        </div>
                      </label>
                  </div>
                  <div class="one"> 
                    <label class="textoverimage" style="background-image:url(assets/img/pict3.png);">
                      <input type="checkbox">
                        <div> <p><br/><br/> If Doctors & Patients <br> - - - <br> were able to manage their time well, the long queues that we often see at hospitals could have been reduced to a large extent in the hospitals <br> * * *
</p>
                        </div>
                      </label>
                  </div>
                  <div class="one"> 
                    <label class="textoverimage" style="background-image:url(assets/img/pict4.png);">
                      <input type="checkbox">
                        <div> <p><br/><br/> Queue <br>  - - - <br> Is a line of things <br> or people waiting for their <br> turn to be attended to <br> or acquire a particular service. <br> * * * </p>
                        </div>
                      </label>
                  </div>
                  <!--===home img===-->
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
