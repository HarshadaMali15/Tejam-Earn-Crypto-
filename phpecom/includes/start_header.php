
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Boostrap CSS ------->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
        <title>Hello world 2</title>
        <style>
          .navbar{
            border-bottom: .1rem solid #D4AF37;
            height:5rem;

          }
          .logo img{
              height: 4rem;
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
        .icons{
          margin: 5px;
        }
        .mb-3{
          display:grid;
          grid-template-columns:7% 93%;
          margin: 25px 0;
          padding: 5px 0;
          border-bottom: 1px solid #D4AF37;
        }
       
         ion-icon{
          display: inline-block;
          height: 20px;
          width: 40px;
          padding-bottom: 0px;
          text-align:center;
          color: #fff;
          transition: all 0.5s ease;
          padding-top: 10px;
          font-size: 22px;
        }
        .mb-3.focus .icons ion-icon{
          color:#D4AF37;
        }
        ::placeholder{
          color: white !important;
        }
        </style>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </head>
  <body>
  <?php include('start_nav.php'); ?>