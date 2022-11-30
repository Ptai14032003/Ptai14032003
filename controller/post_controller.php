<?php
require_once "./controller/controller.php";
require_once "./model/post.php";

function validate_add_post(){
    if(isset($_POST['btn-add'])){
        $title = $_POST['title'];
        $short_desc = $_POST['short_desc'];
        $content = $_POST['content'];
        $file = $_FILES['image'];
        $image = $file['name'];

        // khai báo lỗi
        $error = [];

        if($title==""){
            $error['title'] = "Chưa nhập tiêu đề";
        }
        if($short_desc==""){
            $error['short_desc'] = "Chưa nhập mô tả";
        }
        if($content==""){
            $error['content'] = "Chưa nhập nội dung bài viết";
        }
        if($file['size']<=0){
            $error['image'] = "Chưa chọn ảnh đại diện cho bài viết";
        }
        if(!$error){
            add_post($title, $short_desc, $content, $image);
            move_uploaded_file($_FILES['image']['tmp_name'], "./public/image/" . $image);
            setcookie("success", "Thêm thành công", time() + 1);
        }
        return $error;
    }

}

// validate update
function validate_edit_post(){
    if(isset($_POST['btn-edit'])){
        $ID = $_POST['ID'];
        $title = $_POST['title'];
        $short_desc = $_POST['short_desc'];
        $content = $_POST['content'];
        $file = $_FILES['image'];

        // khai báo lỗi
        $error = [];

        if($title==""){
            $error['title'] = "Chưa nhập tiêu đề";
        }
        if($short_desc==""){
            $error['short_desc'] = "Chưa nhập mô tả";
        }
        if($content==""){
            $error['content'] = "Chưa nhập nội dung bài viết";
        }
        if($file['size']<=0){
            $image = $_POST['image'];
        }else{
            $image = $file['name'];
        }
        if(!$error){
            edit_post($ID,$title, $short_desc, $content, $image);
            move_uploaded_file($_FILES['image']['tmp_name'], "./public/image/" . $image);
            setcookie("success", "Thêm thành công", time() + 1);
        }
        return $error;
    }

}