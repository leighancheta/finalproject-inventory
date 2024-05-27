<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $delete = mysqli_query($link, "DELETE FROM tbl_products WHERE id = '$id'");
    
    if ($delete) {
        header("location: index.php");
        exit();
    } else {
        echo "Failed to delete data";
    }
}
?>