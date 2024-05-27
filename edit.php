<?php
include 'connect.php';

$id = $_GET['changedata'];
$query_data = "SELECT * FROM tbl_products WHERE id = $id";
$show_edit = mysqli_query($link, $query_data);
$list = mysqli_fetch_assoc($show_edit);

if(isset($_POST['edit'])){
    $ProductName = $_POST['ProductName'];
    $ProductID = $_POST['ProductID'];
    $Category = $_POST['Category'];
    $Quantity = $_POST['Quantity'];
    $Price = $_POST['Price'];
    $Supplier = $_POST['Supplier'];
    $PurchaseDate = $_POST['PurchaseDate'];
    
    $save_query = "UPDATE tbl_products SET ProductName = '$ProductName', ProductID = '$ProductID',
        Category = '$Category', Quantity = '$Quantity', Price = '$Price', Supplier = '$Supplier',
        PurchaseDate = '$PurchaseDate' WHERE id = '$id'";
    $save_list = mysqli_query($link, $save_query);
    
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UPDATE PROCESS</title>
    <style type="text/css">
        /* CSS Styles */
        body{
            justify-content: center;
            display: flex;
            margin: 30px;
            background-color: #D3D3D3;
    
        }
        form{
            background-color: #708090;
            padding: 20px;
            width: 650px;
            line-height: 40px;
            font-size: 25px;
            box-shadow: 0 0 10px rgba(0, 2, 0, 3);

            
        }
        input{
            font-size: 20px;
            width: 200px;
            border: none;
            outline: none;
            display: inline-block;
            text-align: center;
            padding: 5px 10px;

            
        }
        h2 {
            padding: 10px;
            text-align: center;
        }
        .btn {
            border: none;
            color: black;
            border-radius: 5px;
            width: 100px;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .default {background-color: #e7e7e7; color: black;} /
        .danger {background-color: #f44336;} 
    </style>
</head>
<body>
    

    <form action="edit.php?changedata=<?php echo $id;?>" method="post">
    
   
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <h2>Update Product</h2>
        <label>Product Name:</label>
        <input type="text" name="ProductName" value="<?php echo $list['ProductName'];?>"><br>
        <label>Product ID:</label>
        <input type="text" name="ProductID" value="<?php echo $list['ProductID'];?>"><br>
        <label>Category:</label>
        <input type="text" name="Category" value="<?php echo $list['Category'];?>"><br>
        <label>Quantity:</label>
        <input type="text" name="Quantity" value="<?php echo $list['Quantity'];?>"><br>
        <label>Price:</label>
        <input type="text" name="Price" value="<?php echo $list['Price'];?>"><br>
        <label>Supplier:</label>
        <input type="text" name="Supplier" value="<?php echo $list['Supplier'];?>"><br>
        <label>Purchase Date:</label>
        <input type="date" name="PurchaseDate" value="<?php echo $list['PurchaseDate'];?>"><br>
        <input type="submit" name="edit" value="Save" class="btn default">
        <button type="reset" class="btn danger">Reset</button>

    </form>
 
</body>
</html>
