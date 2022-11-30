<?php require_once "./views/admin/layout/header_admin.php" ?>
<div class="main-contents">
        <form action="index.php?ctr=add_food" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col l-6">
                    <label for="">Food Name</label><br>
                    <input type="text" name="name"><br>
                    <span style="color:red;"><?= $error['name'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Price</label><br>
                    <input type="text" name="price"><br>
                    <span style="color:red;"><?= $error['price'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Desc</label><br>
                    <input type="text" name="desc"><br>
                    <span style="color:red;"><?= $error['desc'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Category</label><br>
                    <select name="ID_cate" id="">
                        <option value="0">Category</option>
                        <?php foreach($cate as $ca): ?>
                            <option value="<?= $ca['ID_cate'] ?>"><?= $ca['cate_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <br>
                    <span style="color:red;"><?= $error['ID_cate'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Image</label><br>
                    <input type="file" name="image"><br>
                    <span style="color:red;"><?= $error['image'] ?? ''  ?></span>
                </div>
            </div>
            <button type="submit" name="btn-add" class="btn btn-primary">Add user</button>
            <a href="index.php?ctr=user" class="btn btn-primary">Danh Sách</a>
        </form> 
    </div>  
<?php require_once "./views/admin/layout/footer_admin.php"?>