<?php
require_once "./model/connection.php";
function show_all_foods()
{
    $connect = connection();
    $sql = "SELECT * from foods,food_type where foods.ID_cate=food_type.ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function show_foods($id)
{
    $connect = connection();
    $sql = "SELECT * from foods where ID_cate=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// search one sp
function show_one_food($sql)
{
    $connect = connection();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
// Add new food
function add_food($name, $image, $price, $desc, $ID_cate){
    $connect = connection();
    $sql = "INSERT into `foods`(`name`, `image`, `price`, `desc`, `ID_cate`) 
    VALUES ('$name','$image','$price','$desc','$ID_cate')";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}


// phân trang
function phantrang_all_food($begin, $jump)
{
    //lấy kết nối database
    $connect = connection();
    $sql = "SELECT * from foods,food_type where foods.ID_cate=food_type.ID limit $begin,$jump";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


// Tổng số trang cần chia tất cả sản phẩm
function so_trang()
{
    //tìm tổng số trang cần chia
    $connect = connection();
    $result = $connect->query("SELECT COUNT(ID)as totals from  foods");
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $total_row = $row['totals'];
    $trang = ceil($total_row / 8);
    return $trang;
}
// Tổng số trang cần chia cho sản phẩm theo danh mục
function so_trang_theo_danh_muc($id)
{
    //tìm tổng số trang cần chia
    $connect = connection();
    $result = $connect->query("SELECT COUNT(ID)as totals from  foods where ID_cate=$id");
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $total_row = $row['totals'];
    $trang = ceil($total_row / 8);
    return $trang;
}