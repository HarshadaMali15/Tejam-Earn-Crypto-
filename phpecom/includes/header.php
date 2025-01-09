
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Boostrap CSS ------->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    
    <title>Hello world</title>
    <style>
        .navbar{
            border-bottom: .1rem solid #D4AF37;
            height:4rem;

          }
          .logo img{
              height: 5rem;
              width: 6rem;
            }
        
        .nav-item a{
          font-weight: 500;
            font-size: 1rem;
            color: #ededed;
            margin: 0 1rem;
            
        }
        .nav-item a:hover,
        .nav-item a.active
        {
            color: #D4AF37;
            padding-bottom: .5rem;
            border-bottom: .1rem solid #D4AF37;
        }
       
         .owl-carousel  .owl-next,
          .owl-carousel  .owl-prev{
                font-size: 100px !important;
                position: absolute;
                top:10%;
            }
            .owl-carousel{
              margin-top:100px;
                           
            }

           
            .owl-carousel .owl-nav .owl-next{
              right: 0;
            }
            .owl-carousel .owl-nav .owl-prev{
              left: 0;
            }

            /*  --------upload document------------*/
.scr_form{
  background:black;
  color:white;
  width:100%;
  height:90vh;
}
.scr_form .container{
  background-color: #2E2E2E;
    height: 400px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    position: relative;
    width: 550px;
    left: 30px;
    top: 100px;
    border: .1rem solid #D4AF37;
    border-radius: 20px;
}

.form-control{
  background: #454545; 
    border-color:#CFD1D1;
    border-radius: 0;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    background: transparent; 
    border:none;
    border-bottom: .1rem solid #D4AF37;
    height:3.5rem;
    color: white;
}
.form-control[type=text]:focus {
border: none;
box-shadow:none;  
border-bottom: .1rem solid #D4AF37;
border-radius: 0;
border-top: 0px;
border-left: 0px;
border-right: 0px;
color: white;
background: #2E2E2E;
}.btn-primary {
    background-color: #2E2E2E; 
    font-weight: 600;
   
    border: 0;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    border: 1px solid #ae8625;
    outline: none;

}

.btn-primary:hover {
    background: #D4AF37;
    outline: none;
}

.vision-sub-heading {
  width: 100%;
  display:flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding-top: 1rem;
  
  text-align: right;
  margin: 0 auto;
  }
 
    span{
      background: linear-gradient(90deg,#ae8625,#f7ef8a,#d2ac47,#edc967);
      -webkit-background-clip: text;
      color: transparent;
      }
.vision-sub-heading h2{
      
      font-size: 30px;
      position: relative;
  
  }
  .vision-sub-heading h2::after{
      content: "";
      position: absolute;
      width: 100%;
      height: 4px;
      display: block;
      margin: 0 auto;		
      background-image: linear-gradient(to right, #ae8625,#f7ef8a,#d2ac47,#edc967);
  
  }
 
        </style>
  </head>
  <body>
  <?php include('navbar.php'); ?>