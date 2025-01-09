
<?php
session_start();

if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are already logged In";
    header('Location: index.php');
    exit();
}

include('includes/start_header.php');
?>
<div class="py-5 bg-dark">    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php 
                if(isset($_SESSION['message'])) 
                { 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey! </strong> <?= $_SESSION['message']; ?>
                        <button type="<?php
session_start();

if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are already logged In";
    header('Location: index.php');
    exit();
}

include('includes/start_header.php');
?>

<div class="py-5 bg-dark">    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <?php 
                if(isset($_SESSION['message'])) 
                { 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey! </strong> <?= $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
                ?>

                <div class="card_img text-center">
                    <img src="assets/images/reg.png" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                </div>
                <div class="card-container mt-4">
                    <div class="card" style="background: #2E2E2E; box-shadow: 0px 10px 10px rgba(187, 137, 29, 0.6); ">          
                        <div class="card-body">
                            <form action="functions/authcode.php" method="POST">
                                <div class="mb-3 position-relative">
                                    <ion-icon name="person" class="position-absolute" style="top: 50%; left: 10px; transform: translateY(-50%); color: #ffffff;"></ion-icon>
                                    <input type="text" name="name" class="form-control text-white p-3 ps-5" placeholder="Enter Your Name" 
                                    style="background: transparent; border: none; border-bottom: 2px solid #CFD1D1;" required>
                                </div>
                                
                                <div class="mb-3 position-relative">
                                    <ion-icon name="mail" class="position-absolute" style="top: 50%; left: 10px; transform: translateY(-50%); color: #ffffff;"></ion-icon>
                                    <input type="email" name="email" class="form-control text-white p-3 ps-5" placeholder="Enter Your Email" 
                                    style="background: transparent; border: none; border-bottom: 2px solid #CFD1D1;" id="exampleInputEmail1" required>
                                </div>
                               
                                <div class="mb-3 position-relative">
                                    <ion-icon name="key" class="position-absolute" style="top: 50%; left: 10px; transform: translateY(-50%); color: #ffffff;"></ion-icon>
                                    <input type="password" name="password" class="form-control text-white p-3 ps-5" placeholder="Enter Your Password" 
                                    style="background: transparent; border: none; border-bottom: 2px solid #CFD1D1;" required>
                                </div>
                                <div class="mb-3 position-relative">
                                    <ion-icon name="key" class="position-absolute" style="top: 50%; left: 10px; transform: translateY(-50%); color: #ffffff;"></ion-icon>
                                    <input type="password" name="cpassword" class="form-control text-white p-3 ps-5" placeholder="Re-type Password" 
                                    style="background: transparent; border: none; border-bottom: 2px solid #CFD1D1;" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="register_btn" class="btn btn-primary" 
                                    style="font-weight: 700; width: 100%; padding: 10px 30px; border: 0; background: linear-gradient(to right, #ae8625,#f7ef8a,#d2ac47,#edc967);">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/start_footer.php');
?>
button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
                ?>

                <div class="card_img">
                    <img src="assets/images/reg.png" class="img-fluid" alt="" width="545" height="180">
                </div>
                <div class="card-container" style="padding-top:20px">
                <div class="card" style="background: #2E2E2E; box-shadow: 0px 10px 10px rgba(187, 137, 29, 0.6); ">          
                    <div class="card-body" style="background: #2E2E2E;">
                        <form action="functions/authcode.php" method="POST" >
                                <div class="mb-3 focus">                                
                                    <div class="icons ">
                                        <ion-icon name="person"></ion-icon>
                                    </div>
                                    <input type="text" name="name" class="form-control text-white p-3" placeholder="Enter Your Name" 
                                    style="box-shadow:none; border-radius: 0;border-top: 0px;border-left: 0px;border-right: 0px;background: transparent; border:none;" required>
                                </div>
                                
                                <div class="mb-3 focus">
                                <div class="icons">
                                <ion-icon name="mail"></ion-icon>
                                </div>
                                    <input type="email" name="email" class="form-control text-white p-3" placeholder="Enter Your Email" 
                                    style="box-shadow:none;background: #454545; border-color:#CFD1D1;border-radius: 0;border-top: 0px;border-left: 0px;border-right: 0px;background: transparent; border:none;" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                
                               
                                <div class="mb-3 focus">
                                <div class="icons">
                                    <ion-icon name="key"></ion-icon>
                                </div>
                                    <input type="password" name="password" class="form-control text-white p-3" placeholder="Enter Your Password" 
                                    style="box-shadow:none;background: #454545; border-color:#CFD1D1;border-radius: 0;border-top: 0px;border-left: 0px;border-right: 0px;background: transparent; border:none;" id="exampleInputPassword1" required>
                                </div>
                                <div class="mb-3 focus">
                                <div class="icons">
                                <ion-icon name="key"></ion-icon>
                                </div>
                                    <input type="password" name="cpassword" class="form-control text-white p-3" placeholder="Re-type Password" 
                                    style="box-shadow:none;background: #454545; border-radius: 0;border-top: 0px;border-left: 0px;border-right: 0px;background: transparent; border:none;" id="exampleInputPassword1" required>
                                </div>
                                <button type="submit" name="register_btn" class="btn btn-primary text-dark" 
                                style="font-weight: 700;width: 85%; padding: 10px 30px;cursor: pointer;display: block;margin: 30px;margin-top: 60px;border: 0;background: linear-gradient(to right, #ae8625,#f7ef8a,#d2ac47,#edc967);outline: none;">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/start_footer.php');
?>
