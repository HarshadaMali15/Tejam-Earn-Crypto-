<?php


session_start();
include('config/dbcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    
    $user_id = intval($_SESSION['auth_user']['user_id']);

  
    $targetDir = "uploads/";

 
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["document"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

   
    $maxFileSize = 5 * 1024 * 1024; // 5 MB

   
    $allowedTypes = array('pdf', 'jpg', 'jpeg', 'png');
    if (in_array($fileType, $allowedTypes) && $_FILES["document"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["document"]["tmp_name"], $targetFilePath)) {
           
            $insertDocumentQuery = "INSERT INTO documents (name, document_path) VALUES ('$name', '$targetFilePath')";
            $insertDocumentResult = mysqli_query($con, $insertDocumentQuery);

            if ($insertDocumentResult) {
                $_SESSION['message'] = "Document uploaded successfully!";
            } else {
                $_SESSION['message'] = "Error uploading document to the database.";
            }
        } else {
            $_SESSION['message'] = "Error uploading the file.";
        }
    } else {
        $_SESSION['message'] = "Invalid file type or file size exceeds the limit. Only PDF, JPG, JPEG, and PNG files (up to 5 MB) are allowed.";
    }

    
    header("Location: upload_csr.php");
    exit(0);
} else { 
   
    header("Location: upload_csr.php");
    exit(0);
}
?>