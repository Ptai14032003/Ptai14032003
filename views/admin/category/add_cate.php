<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/header_admin.php" ?>
    <div class="main-contents">
        <form action="index.php?ctr=add_cate" method="POST">
            <div class="row">
                <div class="form-group col l-12">
                    <label for="">Category Name</label>
                    <input type="text" name="name"><br>
                    <span style="color:red;"><?= $error['name'] ?? ''  ?></span>
                </div>
            </div>
            <button type="submit" name="btn-add" class="btn btn-primary">Add cate</button>
            <a href="index.php?ctr=category" class="btn btn-primary">Danh Sách</a>
        </form> 
    </div>  
<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/footer_admin.php" ?>