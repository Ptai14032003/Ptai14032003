<?php 
    require_once "connection.php";


// hàm add post
function add_post($title, $short_desc, $content, $image){
    $connect = connection();
    $sql = "INSERT INTO `post`(`title`,`short_desc`, `content`, `image`) 
    VALUES ('$title','$short_desc','$content','$image')";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}

// hàm lấy ra tất cả bài viết
function get_all_post(){
    $connect = connection();
    $sql = "SELECT * from post";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// lấy bài viết theo ID

function get_one_post($id){
    $connect = connection();
    $sql = "SELECT * from post where ID=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetch(PDO::FETCH_ASSOC);
}
// update post theo ID
function  edit_post($ID,$title, $short_desc, $content, $image){
    $connect = connection();
    $sql = "UPDATE `post` SET `title`='$title',`short_desc`='$short_desc',
    `content`='$content',`image`='$image' WHERE ID=$ID";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}

// delete post theo ID
function delete_post($id){
    $connect = connection();
    $sql = "DELETE from post where ID=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}

// lấy 3 post mới nhất lên bản tin

function get_3_post(){
    $connect = connection();
    $sql = "SELECT * from post ORDER BY writing_date limit 3";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>