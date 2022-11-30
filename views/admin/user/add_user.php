<?php
require_once "./model/user.php";
require_once "./controller/user_controller.php";
    $error = validate_add_user();
?>
<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/header_admin.php" ?>
    <div class="main-contents">
        <form action="index.php?ctr=add_user" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col l-6">
                    <label for="">Full Name</label><br>
                    <input type="text" name="name"><br>
                    <span style="color:red;"><?= $error['name'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Phone Number</label><br>
                    <input type="text" name="tel"><br>
                    <span style="color:red;"><?= $error['tel'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Email</label><br>
                    <input type="text" name="email"><br>
                    <span style="color:red;"><?= $error['email'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Birthday</label><br>
                    <input type="date" name="birthday"><br>
                    <span style="color:red;"><?= $error['birthday'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Password</label><br>
                    <input type="password" name="password"><br>
                    <span style="color:red;"><?= $error['password'] ?? ''  ?></span>
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
<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/footer_admin.php" ?>