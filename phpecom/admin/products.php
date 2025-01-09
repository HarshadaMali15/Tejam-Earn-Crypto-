<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');

?> 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Airdrops</h4>
                </div>
                <div class="card-body table-responsive" id="products_table">
                    <table id="datatableid" class="table table-bordered table-striped ">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Twitter</th>
                                <th>Join</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $products = getAll("products");

                                if(mysqli_num_rows($products) > 0)
                                {
                                    foreach($products as $item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?= $item['id']; ?></td>
                                                <td><?= $item['name']; ?></td>
                                                <td><?= $item['small_description']; ?></td>
                                                <td><?= $item['join_now']; ?></td>
                                                <td>
                                                    <img src="../uploads/<?= $item['image'];?>" width="50px" height="50px" alt="<?= $item['name'];?>">
                                                </td>
                                                <td>
                                                    <?= $item['status'] == '0'? "visible":"Hidden"?>
                                                </td>
                                                <td>
                                                    <a href="edit-product.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                    
                                                </td>
                                                <td>
                                    
                                                    <button type="button" class="btn btn-sm btn-danger delete_product_btn" value="<?= $item['id']; ?>">Delete</button>
                                               
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No record found";
                                }
                            ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>