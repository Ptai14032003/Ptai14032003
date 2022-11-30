<?php

require_once "./controller/controller.php";
require_once "./model/menu_food.php";

function show_cate()
{
    $menu = show_menu_all();
    render('menu', ['cate' => $menu]);
}
// chi tiết sản phẩm
function chitiet($id){
    $sql="SELECT * from foods where ID=$id";
    $food= show_one_food($sql);
    render('chitiet',['food'=>$food]);
}
// validate
function validate_cate(){
    if(isset($_POST['btn-add'])){
        $name = $_POST['name'];

        // khai báo lỗi
        $error = [];

        if ($name == "") {
            $error['name'] = "Tên không được để trống";
        }

        if(!$error){
            add_cate($name);
            setcookie("success", "Thêm thành công", time() + 1);
        }
        return $error;
    }
}

function update_cate(){
    if(isset($_POST['btn-add'])){
        $id = $_POST['ID'];
        $name = $_POST['name'];

        // khai báo lỗi
        $error = [];

        if ($name == "") {
            $error['name'] = "Tên không được để trống";
        }

        if(!$error){
            edit_cate($id,$name);
            setcookie("success", "Thêm thành công", time() + 1);
        }
        return $error;
    }
}