<?php include_once "views/header.php" ?>
    <div class="doi_mat_khau">
        <div class="grid wide">
            <form action="index.php?ctr=doi_mat_khau" method="POST">
                <h1>Đổi mật khẩu</h1>
                <div class="row">
                    <div class="col l-12">
                        <label for="">Mật khẩu hiện tại</label><br>
                        <input type="password" name="password"><br>
                        <span style="color:red;"><?= $error['password'] ?? ''  ?></span>
                    </div>
                    <div class="col l-12">
                        <label for="">Mật khẩu mới</label><br>
                        <input type="password" name="newpass" id=""><br>
                        <span style="color:red;"><?= $error['newpass'] ?? ''  ?></span>
                    </div>
                    <div class="col l-12">
                        <label for="">Nhập lại mật khẩu</label><br>
                        <input type="password" name="re_newpass"><br>
                        <span style="color:red;"><?= $error['re_newpass'] ?? ''  ?></span>
                    </div>            
                </div>
                <button type="submit" class="btn btn-outline-primary" name="btn_doi">Đổi mật khẩu</button>
            </form>
        </div>
    </div>
<?php include_once "views/footer.php" ?>