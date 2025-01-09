<?php

include('../config/dbcon.php');
include('../functions/myfunctions.php');

if(isset($_POST['add_category_btn']))
    {
        $name=$_POST['name'];
        
        $description=$_POST['description'];
        
        $status=isset($_POST['status']) ? '0':'1';
        $popular=isset($_POST['popular']) ? '0':'1';

        $image = $_FILES['image']['name'];

        $path= "../uploads";

        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        $cate_query = "INSERT INTO categories (name,description,status,popular,image) 
        VALUES('$name','$description','$status','$popular','$filename')";
        
        $cate_query_run = mysqli_query($con,$cate_query);
        if($cate_query_run)
        {
            move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);

            redirect("add-category.php","Category added succesfully");
        }
        else
        {
            redirect("add-category.php","Something Went Wrong");
        }
    }
else if(isset($_POST['update_category_btn']))
    {
        $category_id = $_POST['category_id'];
        $name=$_POST['name'];
        
        $description=$_POST['description'];
        $status=isset($_POST['status']) ? '0':'1';
        $popular=isset($_POST['popular']) ? '0':'1';

        $new_image = $_FILES['image']['name'];
        $old_image = $_POST['old_image'];

        if($new_image != "")
        {
            //$update_filename = $new_image;
            $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
            $update_filename = time().'.'.$image_ext;
        }
        else
        {
            $update_filename = $old_image;
        }
        $path = "../uploads";
        $update_query = "UPDATE categories SET name='$name' , description='$description', status='$status',  popular='$popular', image='$update_filename' WHERE id='$category_id' ";

        $upadate_query_run = mysqli_query($con, $update_query);

        if($upadate_query_run)
        {
            if($_FILES['image']['name'] != "")
            {
                move_uploaded_file($_FILES['image']['tmp_name'],   $path.'/'.$update_filename);
                if(file_exists("../uploads/".$old_image))
                {
                    unlink("../uploads/".$old_image);
                }
            }
            redirect("edit-category.php?id=$category_id", "Category Updated Successfully");
        }
        else
        {
            redirect("edit-category.php?id=$category_id", "Something went wrong");
        }

    }
else if(isset($_POST['delete_category_btn']))
    {
        $category_id = mysqli_real_escape_string($con,$_POST['category_id']);

        $category_query =  "SELECT * FROM categories WHERE id='$category_id' ";
        $delete_query_run = mysqli_query($con,$category_query);
        $category_data = mysqli_fetch_array($delete_query_run);
        $image = $category_data['image'];

        $delete_query =  "DELETE FROM categories WHERE id='$category_id' ";
        $delete_query_run = mysqli_query($con,$delete_query);

        if($delete_query_run)
        {
            if(file_exists("../uploads/".$image))
                {
                    unlink("../uploads/".$image);
                }
            //redirect("category.php", "Category deleted Successfully");
            echo 200;
        }
        else
        {
            //redirect("category.php", "Something went wrong");
            echo 500;
        }

    }

else if(isset($_POST['add_product_btn']))
    {
        $category_id = $_POST['category_id'];
        $name=$_POST['name'];  
        $small_description=$_POST['small_description'];
        $join_now=$_POST['join_now'];
        $status=isset($_POST['status']) ? '1':'0';
        $trending=isset($_POST['trending']) ? '1':'0';

        $image = $_FILES['image']['name'];

        $path= "../uploads";

        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        if($name != ""  && $small_description != ""  && $join_now != "")
        {
            $product_query = "INSERT INTO products (category_id,name,small_description,join_now,status,trending,image) 
            VALUES ('$category_id','$name','$small_description','$join_now','$status','$trending','$filename')";

            $product_query_run = mysqli_query($con, $product_query);
                    
            if($product_query_run)
            {
                move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);

                redirect("add-product.php","Product added succesfully");   
            }
            else
            {
                redirect("add-product.php","Something went wrong"); 
            }
        }
        else
            {
                redirect("add-product.php","All fields are mandetory"); 
            }
    }
else if(isset($_POST['update_product_btn']))
{
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $name=$_POST['name'];
    $small_description=$_POST['small_description'];
    $join_now=$_POST['join_now'];
    $status=isset($_POST['status']) ? '1':'0';
    $trending=isset($_POST['trending']) ? '1':'0';

    $path= "../uploads";

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "")
    {
        //$update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }
   
    $upadate_product_query = "UPDATE products SET name='$name',small_description='$small_description',join_now='$join_now',status='$status',trending='$trending',image='$update_filename' WHERE id='$product_id' ";
    $upadate_product_query_run= mysqli_query($con, $upadate_product_query);

    if($upadate_product_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'],   $path.'/'.$update_filename);
            if(file_exists("../uploads/".$old_image))
            {
                unlink("../uploads/".$old_image);
            }
        }
        redirect("edit-product.php?id=$product_id", "Product Updated Successfully");
    }
    else
    {
        redirect("edit-product.php?id=$product_id", "Something went wrong");
    }
}
else if(isset($_POST['delete_product_btn']))
{
    $product_id = mysqli_real_escape_string($con,$_POST['product_id']);

        $product_query =  "SELECT * FROM products WHERE id='$product_id' ";
        $product_query_run = mysqli_query($con,$product_query);
        $product_data = mysqli_fetch_array($product_query_run);
        $image = $product_data['image'];

        $delete_query =  "DELETE FROM products WHERE id='$product_id' ";
        $delete_query_run = mysqli_query($con,$delete_query);

        if($delete_query_run)
        {
            if(file_exists("../uploads/".$image))
                {
                    unlink("../uploads/".$image);
                }
            // redirect("products.php", "Product deleted Successfully");
            echo 200;
        }
        else
        {
            // redirect("products.php", "Something went wrong");
            echo 500;
        }

}
else if(isset($_POST['update_register_btn']))
    {
        $register_id = $_POST['register_id'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        
        $password=$_POST['password'];
        $role_as=$_POST['role_as'];
        $created_at=$_POST['created_at'];     
        
        $update_query = "UPDATE users SET name='$name' ,phone='$phone',  email='$email',  password='$password', role_as='$role_as', created_at='$created_at' WHERE id='$register_id' ";

        $upadate_query_run = mysqli_query($con, $update_query);

        if($upadate_query_run)
        {
          
            redirect("edit-register.php?id=$register_id", "Registration details Updated Successfully");
        }
        else
        {
            redirect("edit-register.php?id=$register_id", "Something went wrong");
        }

    }
else if(isset($_POST['user_delete']))
{
    $user_id =$_POST['user_delete'];
    
    $query =  "DELETE FROM users WHERE id='$user_id' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        
        redirect("visited_users.php?id=$user_id", "User/Admin details deleted Successfully");
       
    }
    else
    {
        redirect("visited_users.php?id=$user_id", "Something went wrong");
        
    }

}
else if(isset($_POST['user_delete']))
{
    $user_id =$_POST['user_delete'];
    
    $query =  "DELETE FROM users WHERE id='$user_id' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        
        redirect("visited_users.php?id=$user_id", "User/Admin details deleted Successfully");
       
    }
    else
    {
        redirect("visited_users.php?id=$user_id", "Something went wrong");
        
    }

}
else if(isset($_POST['contact_user_delete']))
{
    $user_id =$_POST['contact_user_delete'];
    
    $query =  "DELETE FROM contact WHERE id='$user_id' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        
        redirect("contact_user.php?id=$user_id", "Deleted Successfully");
       
    }
    else
    {
        redirect("contact_user.php?id=$user_id", "Something went wrong");
        
    }

}

else{
    header('Location: ../index.php');
}


?>