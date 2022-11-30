<?php
require_once "./model/user.php";
require_once "./controller/user_controller.php";
$error = validate_edit_user();
$user = get_one_user($_GET['id']);
?>
<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/header_admin.php" ?>
    <div class="main-contents">
        <form action="index.php?ctr=edit_user&id=<?= $user['ID']?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                    <input type="hidden" name="ID" value="<?= $user['ID']?>">
                <div class="form-group col l-6">
                    <label for="">Full Name</label><br>
                    <input type="text" name="name" value="<?= $user['name']?>"><br>
                    <span style="color:red;"><?= $error['name'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Phone Number</label><br>
                    <input type="text" name="tel" value="<?= $user['tel']?>"><br>
                    <span style="color:red;"><?= $error['tel'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Email</label><br>
                    <input type="text" name="email" value="<?= $user['email']?>"><br>
                    <span style="color:red;"><?= $error['email'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Birthday</label><br>
                    <input type="date" name="birthday" value="<?= $user['birthday']?>"><br>
                    <span style="color:red;"><?= $error['birthday'] ?? ''  ?></span>
                </div>
                <div class="form-group col l-6">
                    <label for="">Password</label><br>
                    <input type="text" name="password" value="<?= $user['password']?>"><br>
                    <span style="color:red;"><?= $error['password'] ?? ''  ?></span>
                    <br><br>
                    <!-- <label for="">Vai Trò</label><br>
                    <select name="roles" id="">
                        <option value="2"><?= $user['roles']==1? "Admin" : "User" ?></option>
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                    </select> -->
                </div>
                <div class="form-group col l-6">
                    <label for="">Image</label><br>
                    <img src="./public/image/<?= $user['image'] ?>" width="200px" height="200px" alt="">
                    <input type="hidden" name="image" value="<?= $user['image'] ?>">
                    <input type="file" name="image"><br>
                    <span style="color:red;"><?= $error['image'] ?? ''  ?></span>
                </div>
            </div>
            <button type="submit" name="btn" class="btn btn-primary">Edit User</button>
            <a href="index.php?ctr=user" class="btn btn-primary">Danh Sách</a>
        </form> 
    </div>  
<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/footer_admin.php" ?>