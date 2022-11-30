<?php
require_once "./model/foods.php";
require_once "./controller/food_controller.php";
    $food = show_food($_GET['id']);
?>
<?php require_once "./views/admin/layout/header_admin.php" ?>
<div class="main-contents">
        <form action="index.php?ctr=edit_food&id=<?= $food['ID'] ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <input type="hidden" name="ID" value="<?= $food['ID'] ?>">
                <div class="form-group col l-6">
                    <label for="">Food Name</label><br>
                    <input type="text" name="name" value="<?= $food['name'] ?>"><br>
                    <span style="color:red;"><?= $error['name'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Price</label><br>
                    <input type="text" name="price" value="<?= $food['price'] ?>"><br>
                    <span style="color:red;"><?= $error['price'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Desc</label><br>
                    <input type="text" name="desc" value="<?= $food['desc'] ?>"><br>
                    <span style="color:red;"><?= $error['desc'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Category</label><br>
                    <select name="ID_cate" id="">
                        <option value="<?= $food['ID_cate'] ?>"><?= $food['cate_name'] ?></option>
                        <?php foreach($cate as $ca): ?>
                            <option value="<?= $ca['ID_cate'] ?>"><?= $ca['cate_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <br>
                    <span style="color:red;"><?= $error['ID_cate'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <input type="hidden" name="image" value="<?= $food['image'] ?>">
                    <img src="./public/image/<?= $food['image'] ?>" width="200px" height="200px" alt="">
                    <input type="file" name="image"><br>
                    <span style="color:red;"><?= $error['image'] ?? ''  ?></span>
                </div>
            </div>
            <button type="submit" name="btn-edit" class="btn btn-primary">Edit Food</button>
            <a href="index.php?ctr=food" class="btn btn-primary">Danh Sách</a>
        </form> 
    </div>  
<?php require_once "./views/admin/layout/footer_admin.php"?>