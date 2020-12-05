<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--======================================Bootstap==============================================================-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--======================================Bootstap==============================================================-->

  </head>
  <body   class="text-center"style="
  
  -ms-flex-align: center;
  align-items: center;padding-top: 210px;
  padding-bottom: 40px;
  background-color: #9370db; ">
   
  
  <div class="container">
     <form  name="formlogin" method="post" action="login.php" class="form-singin">
      <img src="asset/images/logo.png" width="82" height="82" alt="" loading="lazy"></a><br><br>
              <h1 class="h3 mb-3 font-weight-normal" style="color: white;">เข้าสู่ระบบ</h1>
              <div class="row">
              <label class="col-md-4" style="text-align:right">  </label>
                <div class="col-md-4">
                 <input type="text" id="Username" required name="Username" placeholder="AdminID" class="form-control">
                </div>
                </div>
                 <br>
              <div class="row">
              <label class="col-md-4" style="text-align:right">  </label>
                <div class="col-md-4">
                     <input type="Password" id="Password" required name="Password" placeholder="Password" class="form-control">
            </div>
              </div>
                </div>
                <div class="col-md-4"> </div>
             <br/> 
              <div class="col-md-12">
              <p align="center">

              <button class="btn btn-lg btn-outline-light" type="submit">เข้าสู่ระบบ</button> 
            
        
              <a href="search.php" class="btn btn-lg btn-outline-light"> กลับหน้าหลัก </a>
              
              </p>
              </div>
             
              
            </form>
      </div>
    </div>
  </div>
      
<!--start footer-->      

<!--end footer-->
 
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>