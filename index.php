
    <?php
session_start();





include"sidenav.php";
include"topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">        <div class="container-fluid">      
      <div class="panel-body">
    <a>
            <?php  //success message
            if(isset($_POST['success'])) {
            $success = $_POST["success"];
            echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
            }
            ?></a>
                </div>   
<div>
<div>
  <div><div style="transform-origin: center top;">
    <div class="header pb-6 pb-8 pt-5 pt-md-8 bg-gradient-success">
      <div class="container-fluid"><div class="header-body">
        <div class="row">
          <div class="col-xl-3 col-lg-6" >
            <div class="card card-stats mb-4 mb-xl-0" show-footer-line="true" style="background-color:
            #0A79DF
            ;"><!---->
              <div class="card-body" style="color:white;"style="color:white;"
              >
              <div class="row"><div class="col" style="color:white;">
                <h5 class="card-title text-uppercase text-muted mb-0"style="color:white;" ><big><h4 style="color:white;">Total Users</h4></big></h5>
                <span class="h2 font-weight-bold mb-0">
                 
                  <?php
                    include"../db.php";

                   $sql="SELECT * FROM user_info";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>

                  </span></div><div class="col-auto"><div class="icon icon-shape text-white rounded-circle shadow bg-gradient-red"><i class="ni ni-active-40"></i></div></div></div><p class="mt-3 mb-0 text-sm"><span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span><span class="text-nowrap">current status</span></p></div><!----><!----></div></div><div class="col-xl-3 col-lg-6"><div class="card card-stats mb-4 mb-xl-0" show-footer-line="true" style="background-color:#019031;"><!----><div class="card-body" style="color:white;"><div class="row"><div class="col"><h5 class="card-title text-uppercase text-muted mb-0"><h4>Total Orders</h4></h5><span class="h2 font-weight-bold mb-0" style="color:white;">
                   <?php
                    include"../db.php";

                   $sql="SELECT * FROM orders_info";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>

                    


                  </span></div><div class="col-auto"><div class="icon icon-shape text-white rounded-circle shadow bg-gradient-orange"><i class="ni ni-chart-pie-35"></i></div></div></div><p class="mt-3 mb-0 text-sm"><span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 12.18%</span><span class="text-nowrap">current status</span></p></div><!----><!----></div></div><div class="col-xl-3 col-lg-6"><div class="card card-stats mb-4 mb-xl-0" show-footer-line="true" style="background-color:#BA2F16;" ><!----><div class="card-body" style="color:white;"><div class="row"><div class="col"><h5 class="card-title text-uppercase text-muted mb-0"><h4>Total Products</h4></h5><span class="h2 font-weight-bold mb-0">
                    
                    <?php
                    include"../db.php";

                   $sql="SELECT * FROM products";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
                  </span></div><div class="col-auto"><div class="icon icon-shape text-white rounded-circle shadow bg-gradient-green"><i class="ni ni-money-coins"></i></div></div></div><p class="mt-3 mb-0 text-sm"><span class="text-nowrap">current status</span></p></div><!----><!----></div></div>
                <br>
                <br>
                <Br>

                  <div class="col-xl-3 col-lg-6"><div class="card card-stats mb-4 mb-xl-0" show-footer-line="true" style="background-color:orange;"><!----><div class="card-body"><div class="row" style="color:white;"><div class="col"><h5 class="card-title text-uppercase text-muted mb-0"> <h4>Total Categories</h4></h5><span class="h2 font-weight-bold mb-0">
                    <?php
                    include"../db.php";

                   $sql="SELECT * FROM categories";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
                  </span></div><div class="col-auto"><div class="icon icon-shape text-white rounded-circle shadow bg-gradient-info"><i class="ni ni-chart-bar-32"></i></div></div></div><p class="mt-3 mb-0 text-sm"><span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span><span class="text-nowrap">S
                  current status</span></p></div><!----><!----></div></div></div></div></div></div>

                  <div class="container-fluid"><div class="header-body">
        <div class="row">
                  <div class="col-xl-3 col-lg-6"><div class="card card-stats mb-4 mb-xl-0" show-footer-line="true" style="background-color:#019031;"><!----><div class="card-body" style="color:white;""><div class="row" style="color:white;""><div class="col"><h5 class="card-title text-uppercase text-muted mb-0"><h4 style="color:white;">Total Brands</h4></h5><span class="h2 font-weight-bold mb-0">
                    


                    <?php
                    include"../db.php";

                   $sql="SELECT * FROM brands";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>

                  </span></div><div class="col-auto"><div class="icon icon-shape text-white rounded-circle shadow bg-gradient-orange"><i class="ni ni-chart-pie-35"></i></div></div></div><p class="mt-3 mb-0 text-sm"><span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 12.18%</span><span class="text-nowrap"> curent status</span></p></div><!----><!----></div></div><div class="col-xl-3 col-lg-6"><div class="card card-stats mb-4 mb-xl-0" show-footer-line="true" style="background-color:#BA2F16;" ><!----><div class="card-body" style="color:white;"><div class="row" style="color:white;"><div class="col"><h5 class="card-title text-uppercase text-muted mb-0" style="color:whiyte;"><h4>Total Subscribers</h4></h5><span class="h2 font-weight-bold mb-0">


                    <?php
                    include"../db.php";

                   $sql="SELECT * FROM email_info";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }


?></span></div><div class="col-auto"><div class="icon icon-shape text-white rounded-circle shadow bg-gradient-green"><i class="ni ni-money-coins"></i></div></div></div><p class="mt-3 mb-0 text-sm"><span class="text-danger mr-2"><i class="fa fa-arrow-down"></i> 5.72%</span><span class="text-nowrap">current status</span></p></div><!----><!----></div></div>





                  </div></div><

                </div></div>
  

                <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Users List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Password</th><th>Contact</th><th>Address</th><th>City</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select * from user_info")or die ("query 1 incorrect.....");

                        while(list($user_id,$first_name,$last_name,$email,$password,$phone,$address1,$address2)=mysqli_fetch_array($result))
                        {	
                        echo "<tr><td>$user_id</td><td>$first_name</td><td>$last_name</td><td>$email</td><td>$password</td><td>$phone</td><td>$address1</td><td>$address2</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Categories List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>Categories</th><th>Count</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select * from categories")or die ("query 1 incorrect.....");
                        $i=1;
                        while(list($cat_id,$cat_title)=mysqli_fetch_array($result))
                        {	
                            $sql = "SELECT COUNT(*) AS count_items FROM products WHERE product_cat=$i";
                            $query = mysqli_query($con,$sql);
                            $row = mysqli_fetch_array($query);
                            $count=$row["count_items"];
                            $i++;
                        echo "<tr><td>$cat_id</td><td>$cat_title</td><td>$count</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Brands List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>Brands</th><th>Count</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select * from brands")or die ("query 1 incorrect.....");
                        $i=1;
                        while(list($brand_id,$brand_title)=mysqli_fetch_array($result))
                        {	
                            
                            $sql = "SELECT COUNT(*) AS count_items FROM products WHERE product_brand=$i";
                            $query = mysqli_query($con,$sql);
                            $row = mysqli_fetch_array($query);
                            $count=$row["count_items"];
                            $i++;
                        echo "<tr><td>$brand_id</td><td>$brand_title</td><td>$count</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
           </div>
           <div class="col-md-5">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Subscribers</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>email</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select * from email_info")or die ("query 1 incorrect.....");

                        while(list($brand_id,$brand_title)=mysqli_fetch_array($result))
                        {	
                        echo "<tr><td>$brand_id</td><td>$brand_title</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
           
            
          
        </div>
      </div>
      <?php
include "footer.php";
?>