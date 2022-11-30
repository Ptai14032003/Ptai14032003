<?php require_once "header.php" ?>
    <div class="chitiet_post grid wide">
        <div class="row">
            <h2><?= $post['title'] ?></h2>
            <p><em><?= $post['short_desc'] ?></em></p>
            <img src="./public/image/<?= $post['image'] ?>" style="margin-left: 25%;" width="500px" height="500px" alt="">
            <span>
            <?= $post['content'] ?>
            </span>
            <p><em> Ngày viết: <?= $post['writing_date'] ?></em></p>
        </div>
    </div>
<?php require_once "footer.php" ?>