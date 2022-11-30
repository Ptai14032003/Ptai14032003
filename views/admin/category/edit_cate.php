<?php
require_once "./model/menu_food.php";
require_once "./controller/menu_food_controller.php";
$error=update_cate();
if(isset($_GET['id'])){
    $cate = get_one_cate($_GET['id']);
}
?>
<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/header_admin.php" ?>
    <div class="main-contents">
        <form action="index.php?ctr=edit_cate&id=<?= $cate['ID'] ?>" method="POST">
            <div class="row">
                <input type="hidden" name="ID" value="<?= $cate['ID']?>">
                <div class="form-group col l-12">
                    <label for="">Category Name</label>
                    <input type="text" name="name" value="<?= $cate['cate_name']?>"><br>
                    <span style="color:red;"><?= $error['name'] ?? ''  ?></span>
                </div>
            </div>
            <button type="submit" name="btn-add" class="btn btn-primary">Edit cate</button>
            <a href="index.php?ctr=category" class="btn btn-primary">Danh Sách</a>
        </form> 
    </div>  
<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/footer_admin.php" ?>