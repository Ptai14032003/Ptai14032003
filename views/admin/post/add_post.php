<?php require_once "./views/admin/layout/header_admin.php" ?>
<div class="main-contents">
    <form action="index.php?ctr=add_post" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="post col l-10">
                <label for="">Tiêu đề bài viết <span style="color:red;">*</span></label><br>
                <input type="text" name="title"><br>
                <span style="color:red;"><?= $error['title'] ?? ''  ?></span>
            </div>
            <div class="post col l-10">
                <label for="">Mô tả ngắn <span style="color:red;">*</span></label><br>
                <textarea name="short_desc" id=""></textarea><br>
                <span style="color:red;"><?= $error['short_desc'] ?? ''  ?></span>
            </div>
            <div class="post col l-10">
                <label for="">Nội dung bài viết <span style="color:red;">*</span></label><br>
                <textarea name="content" id="editor1"></textarea><br>
                <span style="color:red;"><?= $error['content'] ?? ''  ?></span>
            </div>
            <div class="post col l-10">
                <label for="">Ảnh đại diện<span style="color:red;">*</span></label><br>
                <input type="file" name="image"><br>
                <span style="color:red;"><?= $error['image'] ?? ''  ?></span>
            </div>
        </div>
            <button type="submit" name="btn-add" class="btn btn-primary">Add New Post</button>
            <a href="index.php?ctr=post" class="btn btn-primary">Danh Sách</a>
    </form>
</div>

<?php require_once "./views/admin/layout/footer_admin.php" ?>