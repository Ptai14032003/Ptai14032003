<?php
    require_once "./model/binhluant.php";
function add_cmt(){
    if(isset($_POST['gui_binh_luan'])){
        $user_id = $_SESSION['user']['ID'];
        $food_id = $_REQUEST['idsp'];
        $content = $_POST['content'];

        // khai báo lỗi
        $error = [];
        if($content==""){
            $error['content'] = "Vui lòng nhập nội dung bình luận";
        }
        if(!$error){
            add_comment_sp($content, $user_id, $food_id);
            echo '<script>alert("Thêm bình luận thành công!"); window.location.href = "index.php?ctr=chitiet&idsp='.$food_id.'"</script>';
        }
    }
    return $error;
}
?>