
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
<div class="py-5 bg-dark" style="height:100vh">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php 
                if(isset($_SESSION['message'])) 
                { 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey! </strong><?= $_SESSION['message']; ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
                ?>
                <div class="card_img">
                    <img src="assets/images/log.png" class="img-fluid" alt="" width="545" height="180">
                </div>
                <div class="card-container" style="padding-top:20px">
                <div class="card" style="background: #2E2E2E; box-shadow: 0px 10px 10px rgba(187, 137, 29, 0.6);">
                   
                    <div class="card-body" style="background: #2E2E2E;">
                            <form action="functions/authcode.php" method="POST" >                               
                            <div class="mb-3 focus">
                                <div class="icons">
                                    <ion-icon name="mail"></ion-icon>
                                </div>
                                    <input type="email" name="email" class="form-control text-white p-3" placeholder="Enter Your Email" 
                                    style="box-shadow:none; background: #454545; border-color:#CFD1D1;border-radius: 0;border-top: 0px;border-left: 0px;border-right: 0px;background: transparent; border:none;" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3 focus">
                                <div class="icons">
                                    <ion-icon name="key"></ion-icon>
                                </div>
                                    <input type="password" name="password" class="form-control text-white p-3" placeholder="Enter Your Password" 
                                    style="box-shadow:none;background: #454545; border-color:#CFD1D1;border-radius: 0;border-top: 0px;border-left: 0px;border-right: 0px;background: transparent; border:none;" id="exampleInputPassword1" required>
                                </div>
                            <button type="submit" name="login_btn" class="btn btn-primary text-dark" 
                            style="font-weight: 700;width: 85%; padding: 10px 30px;cursor: pointer;display: block;margin: 30px;margin-top: 60px;border: 0;background: linear-gradient(to right, #ae8625,#f7ef8a,#d2ac47,#edc967);outline: none;">Login</button>
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
