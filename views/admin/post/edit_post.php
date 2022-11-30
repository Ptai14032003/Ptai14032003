<?php
require_once "./model/post.php";
require_once "./controller/post_controller.php";
if(isset($_POST['btn-edit'])){
    $post = get_one_post($_GET['id']);
}
?>
<?php require_once "./views/admin/layout/header_admin.php" ?>
<div class="main-contents">
    <form action="index.php?ctr=edit_post&id=<?= $post['ID']?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <input type="hidden" name="ID" value="<?= $post['ID'] ?>">
            <div class="post col l-10">
                <label for="">Tiêu đề bài viết <span style="color:red;">*</span></label><br>
                <input type="text" name="title" value="<?= $post['title'] ?>"><br>
                <span style="color:red;"><?= $error['title'] ?? ''  ?></span>
            </div>
            <div class="post col l-10">
                <label for="">Mô tả ngắn <span style="color:red;">*</span></label><br>
                <textarea name="short_desc" id=""><?= $post['short_desc'] ?></textarea><br>
                <span style="color:red;"><?= $error['short_desc'] ?? ''  ?></span>
            </div>
            <div class="post col l-10">
                <label for="">Ảnh đại diện<span style="color:red;">*</span></label><br>
                <input type="hidden" name="image" value="<?= $post['image'] ?>">
                <img src="./public/image/<?= $post['image'] ?>" width="300px" style="border-radius:50% ;" height="300px" alt="">
                <input type="file" name="image"><br>
                <span style="color:red;"><?= $error['image'] ?? ''  ?></span>
            </div>
            <div class="post col l-10">
                <label for="">Nội dung bài viết <span style="color:red;">*</span></label><br>
                <textarea name="content" id="editor1"><?= $post['content'] ?></textarea><br>
                <span style="color:red;"><?= $error['content'] ?? ''  ?></span>
            </div>
        </div>
            <button type="submit" name="btn-edit" class="btn btn-primary">Edit Post</button>
            <a href="index.php?ctr=post" class="btn btn-primary">Danh Sách</a>
    </form>
</div>

<?php require_once "./views/admin/layout/footer_admin.php" ?>