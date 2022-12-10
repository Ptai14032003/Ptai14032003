<?php 
    require_once "connection.php";
function load_comment_sp($id){
    $connect = connection();
    $sql = "SELECT *,comment.ID as ID_cmt from comment INNER JOIN users on comment.user_id=users.ID 
    where food_id=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function add_comment_sp($content,$user_id,$food_id){
    $connect = connection();
    $sql = "INSERT INTO `comment` (`food_id`, `user_id`, `content`) 
    VALUES ('$food_id','$user_id','$content')";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}

function load_comment_sp_all(){
    $connect = connection();
    $sql = "SELECT *,count(foods.ID)as total FROM `comment` INNER JOIN foods ON comment.food_id=foods.ID
    GROUP BY foods.ID asc";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function delete_comment($id){
    $connect = connection();
    $sql = "DELETE from comment where ID=$id";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
}
?>