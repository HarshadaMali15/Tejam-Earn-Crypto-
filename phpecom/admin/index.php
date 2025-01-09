<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>


    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Users
                <?php
                              $dash_user_query = "SELECT * from users";
                              $dash_user_query_run = mysqli_query($con, $dash_user_query);
                              if($user_total = mysqli_num_rows($dash_user_query_run))
                              {
                                echo '<h4 class="mb-0">'.$user_total.'</h4>';
                              }
                              else{
                                echo '<h4 class="mb-0">No Data</h4>';
                              }
                            ?>

                </div>
                
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Categories
                <?php
                            $dash_categories_query = "SELECT * from categories";
                            $dash_categories_query_run = mysqli_query($con, $dash_categories_query);
                            if($categories_total = mysqli_num_rows($dash_categories_query_run))
                            {
                              echo '<h4 class="mb-0">'.$categories_total.'</h4>';
                            }
                            else{
                              echo '<h4 class="mb-0">No Data</h4>';
                            }
                          ?> 
                </div>
                
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Airdrops
                <?php
                            $dash_products_query = "SELECT * from products";
                            $dash_products_query_run = mysqli_query($con, $dash_products_query);
                            if($products_total = mysqli_num_rows($dash_products_query_run))
                            {
                              echo '<h4 class="mb-0">'.$products_total.'</h4>';
                            }
                            else{
                              echo '<h4 class="mb-0">No Data</h4>';
                            }
                          ?>
                   </div>
            
              </div>
        </div>
       
    </div>
</div>

          
<?php
include('includes/footer.php');
?>

