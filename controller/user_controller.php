<?php
require_once "controller.php";
// require_once "/xampp/htdocs/du_an1/model/user.php";

function all_user()
{
    $sql = "SELECT * from users";
    return user_all($sql);
}

// validate add user
function validate_add_user()
{
    if (isset($_POST['btn-add'])) {
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $password = $_POST['password'];
        $file = $_FILES['image'];
        $image = $file['name'];

        // khai báo lỗi
        $error = [];

        if ($name == "") {
            $error['name'] = "Tên không được để trống";
        }
        if ($tel == "") {
            $error['tel'] = "Số điện thoại không được để trống";
        }
        if ($email == "") {
            $error['email'] = "Email không được để trống";
        }
        if ($password == "") {
            $error['password'] = "Password không được để trống";
        }
        if ($birthday == "") {
            $error['birthday'] = "Birthday không được để trống";
        }
        if ($file['size'] <= 0) {
            $error['image'] = "Chưa có hình ảnh nào được chọn";
        }
        if (!$error) {
            add_user($name, $tel, $email, $password, $image, $birthday);
            move_uploaded_file($_FILES['image']['tmp_name'], "./public/image/" . $image);
            setcookie("success", "Thêm thành công", time() + 1);
        }
        return $error;
    }
}

// validate edit user
function validate_edit_user()
{
    if (isset($_POST['btn'])) {
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $password = $_POST['password'];
        $file = $_FILES['image'];
        $ID = $_POST['ID'];
        // $roles = $_POST['roles'];
        // khai báo lỗi
        $error = [];

        if ($name == "") {
            $error['name'] = "Tên không được để trống";
        }
        if ($tel == "") {
            $error['tel'] = "Số điện thoại không được để trống";
        }
        if ($email == "") {
            $error['email'] = "Email không được để trống";
        }
        if ($password == "") {
            $error['password'] = "Password không được để trống";
        }
        if ($birthday == "") {
            $error['birthday'] = "Birthday không được để trống";
        }
        if ($file['size'] <= 0) {
            $image = $_POST['image'];
        } else {
            $image = $file['name'];
        }
        if (!$error) {
            edit_user($name, $tel, $email, $password, $image, $birthday, $ID);
            move_uploaded_file($_FILES['image']['tmp_name'], "./public/image/" . $image);
            setcookie("success", "Thêm thành công", time() + 1);
        }
        return $error;
    }
}
