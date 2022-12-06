<?php
    require_once "connection.php";

// hàm add đơn hàng
function add_oder($name,$tel,$email,$address,$quantity,$total_price,$thanh_toan,$ID){
    $connect = connection();
    $sql = "INSERT INTO `orders`( `fullname`, `tel`, `email`, `address`, `quantity`, `total_price`, `thanh_toan`,`Id_user`) 
    VALUES ('$name','$tel','$email','$address','$quantity','$total_price','$thanh_toan','$ID')";
    $connect->exec($sql);
    $last_id = $connect->lastInsertId();
    return $last_id;
}


// hàm add chi tiết đơn hàng

function add_order_detail($order_id,$food_id,$so_luong,$gia){
    $connect = connection();
    $sql = "INSERT INTO `order_detail`( `order_id`, `food_id`, `quantity`, `price`) 
    VALUES ('$order_id','$food_id','$so_luong','$gia')";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}


// lấy ra thông tin đơn hàng theo ID
function get_one_order($ID){
    $connect=connection();
    $sql = "SELECT * from orders where ID=$ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetch(PDO::FETCH_ASSOC);
}

// lấy ra thông tin đơn hàng theo ID và chi tiết đơn hàng
function get_one_order_detail($ID){
    $connect=connection();
    $sql = "SELECT * FROM `order_detail` INNER JOIN foods ON order_detail.food_id=foods.ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetch(PDO::FETCH_ASSOC);
}


// lấy ra tất cả đơn hàng của người dùng
function get_all_order_user($ID){
    $connect=connection();
    $sql = "SELECT * FROM orders where Id_user=$ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// lấy ra tất cả đơn hàng
function load_all_order(){
    $connect=connection();
    $sql = "SELECT * FROM orders";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


// trạng thái đơn hàng
function get_ttdh($a){
    switch ($a) {
        case '0':
            $tt = "Đang chờ xử lý";
            break;
        case '1':
            $tt = "Đang giao hàng";
            break;
        case '2':
            $tt = "Đã giao hàng";
            break;
        case '3':
            $tt = "Hủy đơn hàng";
            break;
        default:
            $tt = "Đang chờ xử lý";
            break;
    }
    return $tt;
}

// update đơn hàng
function edit_status($ID,$status){
    $connect=connection();
    $sql = "UPDATE orders SET `status`='$status' where ID=$ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}
// xóa chi tiết đơn hàng theo ID
function delete_order_detail($ID){
    $connect=connection();
    $sql = "DELETE FROM order_detail where order_id=$ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}
// xóa đơn hàng theo ID
function delete_order($ID){
    $connect=connection();
    $sql = "DELETE FROM orders where ID=$ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}

// chi tiết đơn hàng
function order_detail($id){
    $connect=connection();
    $sql = "SELECT order_detail.ID,order_id,food_id,quantity,order_detail.price,name,image,foods.desc From `order_detail`INNER JOIN foods ON order_detail.food_id=foods.ID
    WHERE order_detail.order_id=$id
    GROUP BY order_detail.ID ";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}