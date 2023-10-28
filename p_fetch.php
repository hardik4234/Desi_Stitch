<?php
include("p_connection.php");
if($_POST){
    $final_str=" ";
    $product_category=$_POST['category'];
    $query = mysqli_query($conn,"select * from products where Product_Category='$product_category'");
    for($x=1;$x<=mysqli_num_rows($query);$x++){
        $row = mysqli_fetch_assoc($query);
        $row_str=$row['Product_Code']."_".$row['Product_Price']."_".$row['Product_Category'];
        $final_str=$final_str."-".$row_str;
    }
    echo $final_str;
}
?>