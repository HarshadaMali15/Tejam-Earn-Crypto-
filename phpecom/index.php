<?php
include('functions/userfunctions.php'); 
include('includes/header.php');
?>
<?php
include('includes/home.php'); 
?>
<div  id="category" style=" min-height: 80vh;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-warning display-3 pb-3">Airdrop Categories</h1>
                <div class="progress " role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated " style="width: 100%"></div>
                </div>
                    <div class="owl-carousel mt-5">
                        
                        <?php
                            $visiblecategoris = getAllStatus();
                            if(mysqli_num_rows($visiblecategoris) > 0)
                            {
                                foreach($visiblecategoris as $item){
                                    ?> 
                                        <div class="item"> 
                                            <a href="products.php?category=<?=$item['name'];?> "style="text-decoration: none">
                                                <div class="card shadow bg-dark mb-3">
                                                    <span class="border border-warning">
                                                        <div class="card-body" role="listbox" style=" width:100%; height: 300px !important;">
                                                                <img src="uploads/<?= $item['image']; ?>" alt="Category Image" class="w-100">
                                                            <h3 class="text-center "><?=$item['name']; ?></h3>
                                                        </div>
                                                    </span>
                                                </div>
                                            </a>     
                                        </div> 
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
        </div>     
    </div>
</div>

<?php include('includes/about.php'); ?>
<?php include('includes/footer.php'); ?>
<script>
    $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
            loop:true,
            margin:100,
            
            nav:true,
            
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
           
        })

    });
</script>

