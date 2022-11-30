<?php
require_once "connection.php";

// hàm lấy tất cả
function user_all($sql){
    $connect = connection();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// add user
function add_user($name,$tel,$email,$password,$image,$birthday){
    $connect = connection();
    $sql = "INSERT into users(`name`, `tel`, `email`, `password`, `image`, `birthday`) 
    VALUES('$name', '$tel', '$email', '$password', '$image', '$birthday')";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}

// lấy ra user theo id
function get_one_user($id){
    $connect = connection();
    $sql = "SELECT * from users where ID=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

// update user
function edit_user_1($name, $tel, $email, $password, $image, $birthday,$roles,$ID){
    $connect = connection();
    $sql = "UPDATE users set `name`='$name',`tel`='$tel',`email`='$email',
    `password`='$password',`image`='$image',`birthday`='$birthday',`roles`='$roles' WHERE ID=$ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}
// update user
function edit_user($name, $tel, $email, $password, $image, $birthday,$ID){
    $connect = connection();
    $sql = "UPDATE users set `name`='$name',`tel`='$tel',`email`='$email',
    `password`='$password',`image`='$image',`birthday`='$birthday' WHERE ID=$ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}
// delete user

function delete_user($id){
    $connect = connection();
    $sql = "DELETE from users Where ID=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}