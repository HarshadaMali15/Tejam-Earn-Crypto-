
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       
    <link rel="stylesheet" href="includes/home_css.css">
    <style>
        .container1 {
            width:auto; 
            height: 200px;
            display:flex;
            justify-content: center;
            align-items: center;
            position: relative;
            border: 1px solid #ae8625;
            background: linear-gradient(rgba(228, 161, 84, 0.795),rgba(221, 187, 92, 0.938)), url('assets/images/45.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            
            
            }
            .container1 ::before { 
            opacity: 0.35;
            
            }
            .container1 h1{
            font-size: 80px;
            font-family: sans-serif;
            text-align: center;
            position: relative;
            
            }

            .contact{
              padding-top: 75%;
            }
            .hero{
              background: url(14.jpg);
              width: 100%;
              height: 110vh;
              background-size: cover;
              background-position: center;
              position: absolute;

            }

            .hero .container2 {
              border-radius: 10px;
              margin-top: 82px;
              margin-left: 33.4%;
              width: 450px; 
              height: 150px;
              display: flex;
              justify-content: center;
              align-items: center;
              position: absolute;
              background: linear-gradient(rgba(228, 161, 84, 0.795),rgba(221, 187, 92, 0.938)), url('assets/images/4.jpg');
              background-repeat: no-repeat;
              background-size: cover;
              background-position: center;
              border: none;
            }
            .container2 ::before { 
              opacity: 0.40;
              
            }
            .container2 h1{
              font-size: 40px;
              font-family: sans-serif;
              text-align: center;
              position: relative;
              
            }
    </style>
     
</head>
<body>
<section class="about" id="about">
  <div class="section1">
    <div class="container1">
      <h1>About Us</h1>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">
            Welcome to <span>Tejam</span>, your premier destination for discovering and participating in the latest crypto airdrops! We're passionate about making the world of cryptocurrency more accessible to everyone, and we believe airdrops play a vital role in achieving this mission.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

   
<!--------------Vision section--------------------------------------->

<section class="navsection">
  <div class="container text-left">
    <h1>Our <span>Vision</span> At Tejam</h1>
    <div class="row align-items-center mt-4">
     
      <div class="col-md-6">
        <p>
          To become a leading platform that empowers cryptocurrency communities by facilitating fair and widespread distribution of tokens through airdrops, fostering inclusivity, and promoting the adoption of innovative blockchain projects.
        </p>
      </div>
      <div class="col-md-6">
        <img src="assets/images/111.png" class="img-fluid" alt="Vision Image">
      </div>
    </div>
  </div>
</section>

<!------------------------------------------------------------>

<!--------------Mission section--------------------------------------->
<section class="navsection1">

  <div class="mission">
  <div class="mission-heading"><h1>Our Mission At Tejam</h1></div>
  <div class="para2">
      <p> Our mission is to provide a seamless and transparent platform for cryptocurrency projects to 
          conduct airdrops, enabling them to reach a diverse audience. We aim to create value for both users 
           projects by ensuring fair token distribution, fostering community engagement, 
          and contributing to the broader decentralization and growth of the crypto ecosystem.
      </p>
  </div>
</div>
<div class="about-container">
  <div class="section-title">
      <h1 style="color: #fff;">What <span>Sets</span> Us Apart</h1>
  </div>
      <div class="card">
          
          <div class="imgbx" data-text="Early Access"> 
          </div>
          <div class="para">
              <p> Participants in a crypto airdrop may get early access to the project's tokens before 
                  they are publicly available on exchanges. 
                  This could offer an opportunity for early investment</p>
          </div>
      </div>
      <div class="card">
          <div class="imgbx" data-text="Discounted Rates"> 
          </div>
          <div class="para">
              <p>Many token sales offer tokens at a discounted rate during the airdrop phase. 
                  Purchasing tokens at a lower price can lead to potential profit if the project succeeds.</p>
          </div>
      </div>
      <div class="card">
          <div class="imgbx" data-text="Additional Incentives">
              
          </div>
          <div class="para">
              <p>Some airdrops provide additional incentives, such as bonus tokens or exclusive features, 
                  to early investors. 
                  This can enhance the overall value proposition for participants.</p>
          </div>
      </div>
      <div class="card">
          <div class="imgbx" data-text="Potential for Future Gains">
              
          </div>
          <div class="para">
              <p>If the project becomes successful, the value of the tokens acquired during the airdrop or 
                  token sale could increase, 
                  resulting in potential profits for participants.</p>
          </div>
      </div>
  </div>

</section>






<!------------------------------------------------------------>

<!------------------------------------------------------------->
<!-----------------contact us---------------->
<section class="contact py-0" id="contact">
<div class="bg-background"></div>
    <div class="container py-0">
        <div class="row py-0 g-3">
            <div class="col-md-6 first_col ">
            <?php 
                if(isset($_SESSION['message1'])) 
                { 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey! </strong> <?= $_SESSION['message1']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message1']);
                }
                ?>
                <h1 class="text-center mt-3">Get in touch</h1>
                <form class="p-3 mt-4" action="functions/authcode.php" method="POST">
                    <div class="mb-2 ">
                        <label for="exampleFormControlInput1" class="form-label">Enter your Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Email ID</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter your massage</label>
                        <textarea  type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-primary" name="contact_btn">Send Now</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 sec_col">
                <img src="assets/images/c3.jpg"
                    class="img-fluid">
            </div>
        </div>
        <div class="row-last">
            <div class="row row-cols-1 row-cols-md-3  p-3 text-white">
                <div class="col">
                    <h4>CALL US</h4>
                    <p>+91 9856862536</p>
                </div>
                <div class="col">
                    <h4>LOCATION</h4>
                    <p>Miraj, Maharashtra</p>
                </div>
                <div class="col">
                    <h4>Email</h4>
                    <p>tejam2507@gmail.com</p>
                </div>
            </div>
        </div>
    </div>  
  </section>
<!------------------------------------------------>

<!------------------------------------footer------------------------------------>

<footer class="footer-distributed">

<div class="footer-left">
    <h3>Tejam<span>Earn Crypto</span></h3>

    <p class="footer-links">
        <a href="index.php">Home</a>
        |
        <a href="#category">Category</a>
        |
        <a href="#about">About</a>
        |
        <a href="#contact">Contact</a>
    </p>

    <p class="footer-company-name">Copyright © 2024 <strong>Tejam</strong> All rights reserved</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p>
            Miraj
            Maharashtra
        </p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+91 9856862536</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:tejam2507@gmail.com">tejam2507@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
        Tejam.com is the crypto industry’s #1 rated library to find trusted airdrop campaigns, giveaways and more. 
        Helping millions of people discover new projects & find new ways to earn cryptocurrency since 2024.
    </p>
    <div class="footer-icons">
        <a href="https://twitter.com/Tejam_Crypto"><i class="fa fa-twitter"></i></a>
        <a href="https://www.reddit.com/user/Tejam_Crypto/?rdt=61207"><ion-icon name="logo-reddit"></ion-icon></a>
        <a href="https://medium.com/@Tejam_Crypto"><ion-icon name="logo-medium"></ion-icon></a>
        
        
        
    </div>
</div>
</footer>


<!--------------------------------------------------------->

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



<!--------------------------------------------------------->

<script>
var x = document.getElementById("login");

var z = document.getElementById("btn");

function register(){
  x.style.left = "-400px";
 
  z.style.left = "110px";
}
function login(){
  x.style.left = "50px";
 
  z.style.left = "0px";
}

</script>
<!------------------------------------------------------------------->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
  <script  src="includes/script.js"></script>
</body>
</html>
