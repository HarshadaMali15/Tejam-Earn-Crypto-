<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark shadow">
  <div class="container">
  <a class="navbar-brand" href="#">
    <div class="logo">
    <img src="assets/images/l31.png" alt="">
    </div>
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#category">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#contact">Contact us</a>
        </li> 
        <li class="nav-item1 dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Proofs
              </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="upload_csr.php">Upload Screenshot</a></li>
                  
                  
                </ul>
              </li>

       
        <?php
          if(isset($_SESSION['auth']))
          {
            ?>
            <li class="nav-item1 dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION['auth_user']['name']; ?>
              </a>
                <ul class="dropdown-menu">
                  
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            <?php
          }
          else
          {
          
            header('Location: start.php');   
          
          }
        ?>   
      </ul>
    </div>
  </div>
</nav>




        
        
          
       
    