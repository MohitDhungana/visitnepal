
    
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>User Profile  - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
                  input.hidden {
    position: absolute;
    left: -9999px;
}
.center_garne{
  text-align="center";
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
  border:2px solid #03b1ce ;}
  .tital{ font-size:16px; font-weight:500;}
   .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}  
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body >

<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Visit Nepal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="list_all_package.php">Packages</a></li>
                <li><a href="list_places.php">Places</a></li>
                <li><a href="list_sports.php">Sports</a></li>
                <!-- <li><a href="#">Contact us</a></li> -->
            </ul>
        </div>
    </nav>
<br>
<br>
<br>
<br>

  <div class="container" align="center">
  <div class="row" align="center">        
        
       <div class="col-md-7 " align="center">

<div class="panel panel-default" align="center">
  <div class="panel-heading" align="center">  <h4 align="center">Package Info</h4></div>
   <div class="panel-body" align="center">
       
    <div class="box box-info" align="center">
        
            <div class="box-body" align="center">
                     <!-- <div class="col-sm-6"align="center"> -->
                
                     <!-- <div  align="center"> <img src="images/team_1." class="img-circle" alt="Cinque Terre" width="200" height="200" >  -->
                
              
                <!--Upload Image Js And Css-->
           
              
   
                
                
                     
                     
                     <!-- </div> -->
              
              <!-- <br> -->
    
              <!-- /input-group -->
            <!-- </div> -->
            <div class="col-sm-6">
              <?php 
                include "includes/db.php" ?>
              <?php

                if (isset($_GET['package_id'])) {
                    $the_package_id = $_GET['package_id'];
                }
                $the_package_id = $_GET['package_id'];

                $package_query = "SELECT * FROM package WHERE id={$the_package_id}";
                $select_package = mysqli_query($connection, $package_query);

                $row = mysqli_fetch_assoc($select_package);
                $package_id = $row['id'];
                $package_name = $row['name'];
                $package_duration = $row['duration'];
                $package_price = $row['price'];
                $package_destination = $row['destinations'];
                $package_inclusion = $row['inclusions'];
                $package_company_id = $row['companies_id'];

                $company_query = "SELECT * FROM companies WHERE id={$package_company_id}";
                $select_company = mysqli_query($connection, $company_query);

                $row_company = mysqli_fetch_assoc($select_company);
                $company_name = $row_company['name'];




                ?>
              <!-- name -->
            <h4 class="center_garne" style="color:#00b1b1; font-size: 30px; text-align: center;"><strong><?php echo ($package_name) ?></strong></h4></span>
            <!-- role -->
              <!-- <span><p style="font-size: 20px;">fghdhdh</p></span>             -->
            </div>
            <div align="center" class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
            <ul class="list-group" style="font-size: 120%;"  >
                          <li class="list-group-item"><strong>Company Name: <a href="company_details.php?companies_id=<?php echo ($package_company_id) ?>"></strong><?php echo ($company_name) ?></a></li>
                          <li class="list-group-item list-group-item-success"></li>
                           <li class="list-group-item"><strong>Destinations: </strong><?php echo ($package_destination) ?></li>
                          <li class="list-group-item list-group-item-info"></li>
                          <li class="list-group-item"><strong>Price: </strong>$ <?php echo ($package_price) ?></li>
                          <li class="list-group-item list-group-item-warning"></li>

                          <li class="list-group-item"><strong>Inclusions: </strong><?php echo ($package_inclusion) ?></li>
                          <li class="list-group-item list-group-item-danger"></li>
                          </ul>
                          <form method="POST">
                          <div class="form-group">
            <!--  <button class="btn btn-sucess pull-centre" style="margin-right: 10px, height:10000px,width:400px" type="submit" name="submit">approve</button>
            </div> -->
            
            </form>
                  
                    



            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       <div class="modal-footer">
          <a href="index.php" button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</a>
          <script>
            
          </script>
        </div>
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
       
       
       
       
       
       
       
       
       
   </div>
</div>




         
  <script type="text/javascript">
  
  </script>
</body>
</html>
