<?php
require_once "./model/connection.php";
function show_menu_all()
{
    $connect = connection();
    $sql = "SELECT * from food_type";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// add danh mục
function add_cate($name){
    $connect = connection();
    $sql = "INSERT INTO food_type(`cate_name`) VALUES ('$name')";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}

// lấy ra 1 danh mục theo ID
function get_one_cate($id){
    $connect = connection();
    $sql = "SELECT * from food_type where ID_cate=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// cập nhật theo ID
function edit_cate($id,$name){
    $connect = connection();
    $sql = "UPDATE food_type set `cate_name`='$name' WHERE ID_cate=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}

// delete danh mục theo ID

function delete_cate($id){
    $connect = connection();
    $sql = "DELETE from food_type where ID_cate=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}