<?php
 
include('functions/userfunctions.php'); 
include('includes/header.php'); 

$category_name = $_GET['category'];
$category_data = getNameActive("categories",$category_name);
$category= mysqli_fetch_array($category_data);
$cid = $category['id'];
?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/1.jpeg" class="d-block w-100" alt="..." width="1320" height="520">
                
            </div>
            <div class="carousel-item">
                <img src="assets/images/2.png" class="d-block w-100" alt="..." width="1330" height="520">
                
            </div>
            <div class="carousel-item">
                <img src="assets/images/3.png" class="d-block w-100" alt="..." width="1330" height="520">
                
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>                           
    

<div class="py-4  bg-dark" >
<div class="simg" style=" padding-left:10px;">
    <img src="assets/images/img1.png" alt="" width="400" height="40">
</div>
    <div class="container">
        <div class="row">    
            <div class="col-md-12 ">
                <h1 class="text-center text-warning display-2 " ><?=$category['name'];?></h1> 
                  <div class="simg" style="padding-bottom:20px;padding-left:530px;">
                    <img src="assets/images/img2.png" alt="" width="600" height="60">
                  </div>
                <div class="row">
                   <?php                   
                            $products = getProdByCategory($cid);
                            if(mysqli_num_rows($products) > 0)
                            {
                                foreach($products as $item){
                                    ?>
                                    
                                    <span class="border border-warning p-1 mb-2">
                                        <div class="item">
                                            <div  class="container my-4">   
                                                <div class="row mx-5">
                                                    <div class="col-lg-5 " > 
                                                            
                                                        <img class="p-3 border border-warning shadow " src="uploads/<?= $item['image']; ?>" alt="Airdrop Image" role="listbox" style=" width:60%; height: 200px !important;">
                                                    </div> 
                                                    <div class="col-lg-6"> 
                                                        <div class=" mt-3">
                                                        <dl class="row">
                                                            <dt class="col-sm-3 text-white">Project Name</dt>
                                                            <dd class="col-sm-9 text-white"><?=$item['name']; ?></dd>
                                                            <dt class="col-sm-3 text-white">Twitter </dt>
                                                            <dd class="col-sm-9 text-white"><a href="<?=$item['small_description']; ?>" style="text-decoration: none"  class="text-warning">twitter.com</a></dd>
                                                            <dt class="col-sm-3 text-white">Join Now </dt>
                                                            <dd class="col-sm-9">
                                                            <a href="<?=$item['join_now']; ?>" class="btn btn-outline-warning">Click</a>
                                                            </dd>
                                                            </dl>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </span>
                                    <?php
                              
                                }
                            }
                            else
                            {
                                echo "No data available";
                            }
                        ?>

                    </div>
            </div>
        </div>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php include('includes/footer.php'); ?>


