<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        
        <span class="ms-1 font-weight-bold text-white">Tejam </span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "index.php"? 'active bg-warning':''; ?>" href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "add-category.php"? 'active bg-warning':''; ?>" href="add-category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Add Categories</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "category.php"? 'active bg-warning':''; ?>" href="category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">All Categories</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "add-product.php"? 'active bg-warning':''; ?>" href="add-product.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Add Airdrops</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "products.php"? 'active bg-warning':''; ?>" href="products.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">All Airdrops</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "visited_users.php"? 'active bg-warning':''; ?>" href="visited_users.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Visited Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "contact_user.php"? 'active bg-warning':''; ?>" href="contact_user.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Users Queries</span>
          </a>
        </li>

        
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                          <i class="material-icons opacity-10">table_view</i>
                                        </div>                        
                                        <span class="nav-link-text ms-1">Reports</span>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                     <a class="nav-link text-white <?= $page == "user_report.php"? 'active bg-warning':''; ?>" href="user_report.php">
                                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                          <i class="material-icons opacity-10">table_view</i>
                                        </div>
                                        <span class="nav-link-text ms-1">Users Report</span>
                                      </a>
                                      <a class="nav-link text-white <?= $page == "category_report.php"? 'active bg-warning':''; ?>" href="category_report.php">
                                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                          <i class="material-icons opacity-10">table_view</i>
                                        </div>
                                      <span class="nav-link-text ms-1">Categories Report</span>
                                      </a>
                                      <a class="nav-link text-white <?= $page == "product_report.php"? 'active bg-warning':''; ?>" href="product_report.php">
                                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                          <i class="material-icons opacity-10">table_view</i>
                                        </div>
                                        <span class="nav-link-text ms-1">Airdrops Report</span>
                                      </a>
                                      <a class="nav-link text-white <?= $page == "contact_report.php"? 'active bg-warning':''; ?>" href="contact_report.php">
                                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                          <i class="material-icons opacity-10">table_view</i>
                                        </div>
                                        <span class="nav-link-text ms-1">Users Enquiries Report</span>
                                      </a>
                                      <a class="nav-link text-white <?= $page == "screnshots_report.php"? 'active bg-warning':''; ?>" href="screnshots_report.php">
                                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                          <i class="material-icons opacity-10">table_view</i>
                                        </div>
                                        <span class="nav-link-text ms-1">Proofs Report</span>
                                      </a>
                                </nav>
                            </div>
                  </li>
            </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="text-white btn bg-warning mt-4 w-100" 
        href="../logout.php">Logout</a>
      </div>
    </div>
  </aside>