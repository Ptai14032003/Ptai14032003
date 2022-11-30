<?php

require_once "./controller/controller.php";
require_once "./model/menu_food.php";
require_once "./model/foods.php";
require_once "./controller/menu_food_controller.php";
function show_foods_all()
{
    $foods = show_all_foods();
    render('menu', ['foods' => $foods]);
}

// validate phần add food
function validate_add_food(){
    if (isset($_POST['btn-add'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $ID_cate= $_POST['ID_cate'];
        $file = $_FILES['image'];
        $image = $file['name'];

        // khai báo lỗi
        $error = [];

        if ($name == "") {
            $error['name'] = "Tên không được để trống";
        }
        if ($price == "") {
            $error['price'] = "Price không được để trống";
        }elseif (is_numeric($price) == false || $price <= 0) {
            $error['price'] = "Price phải là số và lớn hơn 0";
        }
        if ($desc == "") {
            $error['desc'] = "desc không được để trống";
        }
        if($ID_cate == 0){
            $error['ID_cate'] = "Chưa chọn danh mục";
        }
        if ($file['size'] <= 0) {
            $error['image'] = "Chưa có hình ảnh nào được chọn";
        }
        if (!$error) {
            add_food($name, $image, $price, $desc, $ID_cate);
            move_uploaded_file($_FILES['image']['tmp_name'], "./public/image/" . $image);
            setcookie("success", "Thêm thành công", time() + 1);
        }
        return $error;
    }
}

// validate phần edit food
function validate_edit_food(){
    if (isset($_POST['btn-edit'])) {
        $ID = $_POST['ID'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $ID_cate= $_POST['ID_cate'];
        $file = $_FILES['image'];
        // khai báo lỗi
        $error = [];

        if ($name == "") {
            $error['name'] = "Tên không được để trống";
        }
        if ($price == "") {
            $error['price'] = "Price không được để trống";
        }elseif (is_numeric($price) == false || $price <= 0) {
            $error['price'] = "Price phải là số và lớn hơn 0";
        }
        if ($desc == "") {
            $error['desc'] = "desc không được để trống";
        }
        if ($file['size'] <= 0) {
            $image = $_POST['image'];
        }else{
            $image = $file['name'];
        }
        if (!$error) {
            edit_food($ID,$name, $image, $price, $desc, $ID_cate);
            move_uploaded_file($_FILES['image']['tmp_name'], "./public/image/" . $image);
            setcookie("success", "Thêm thành công", time() + 1);
        }
        return $error;
    }
}

// phân trang
function phan_trang_food(){
    if (isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = 1;
    }
    $begin = ($page - 1) * 10;
    $jump = 10;
    return phantrang_all_food($begin, $jump);
}