<?php
    $user=$_SESSION['user'];
?>
<?php include_once "views/header.php" ?>
<div class="main-contents">
    <div class="grid wide">
        <h1>Cập nhật thông tin tài khoản</h1>
        <form action="index.php?ctr=cap_nhat_thong_tin" method="POST" enctype="multipart/form-data">
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
                </div>
                <div class="form-group col l-6">
                    <label for="">Image</label><br>
                    <img src="./public/image/<?= $user['image'] ?>" width="200px" height="200px" alt="">
                    <input type="hidden" name="image" value="<?= $user['image'] ?>">
                    <input type="file" name="image"><br>
                    <span style="color:red;"><?= $error['image'] ?? ''  ?></span>
                </div>
            </div>
            <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật thông tin</button>
        </form> 
    </div>
</div>  
<?php include_once "views/footer.php" ?>