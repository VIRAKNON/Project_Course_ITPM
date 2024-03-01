<?php
include '../../../app/Connection/connection.php';
// session_start();
if(isset($_POST['btnCreateCate'])){
    echo 'hello create Cate';
    // $Product_name = $_POST["proName"];
    // $Category = $_POST["category"];
    // $Brand_name = $_POST["proBrand"];
    // $Stock_date = $_POST["stockDate"];
    // $Unit_price = $_POST["unitPrice"];
    // $Unit_cost = $_POST["unitCost"];
    // $QTY = $_POST["qty"];
    // $Status = $_POST["status"];

    // $sql = "INSERT INTO `tbl_stock` (`Product_id`, `Product_name`, `Category`, `Brand_name`, `Stock_date`, `Unit_price`, `Unit_cost`, `QTY`,`Path_sample`, `Status`) VALUES (NULL, '$Product_name', '$Category', '$Brand_name', '$Stock_date', '$Unit_price', '$Unit_cost', '$QTY','$fileName', '$Status');";

    // $go = $connection->query($sql);
    // if($go){
    //     $_SESSION["messageCreateCate"] = "Your category created successfully!";
    // }
    // header("location:index.php");
}
?>
