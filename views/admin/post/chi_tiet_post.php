<?php require_once "./views/admin/layout/header_admin.php" ?>
    <div class="main-contents">
        <div class="row">
            <h2><?= $post['title'] ?></h2>
            <p><em><?= $post['short_desc'] ?></em></p>
            <img src="./public/image/<?= $post['image'] ?>" style="margin-left: 25%;" width="500px" height="500px" alt="">
            <span>
            <?= $post['content'] ?>
            </span>
            <p><em> Ngày viết: <?= $post['writing_date'] ?></em></p>
        </div>
        <a href="index.php?ctr=post" class="btn btn-primary">Danh Sách</a>
    </div>

<?php require_once "./views/admin/layout/footer_admin.php" ?>