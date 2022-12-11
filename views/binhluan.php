<?php
    require_once "../model/binhluant.php";
    $idsp = $_REQUEST['idsp'];
    $comment = load_comment_sp($idsp);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>My Page Title</title>
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="./public/css/client/style.css">
    </head>
    <body>
        <div class="title">Bình Luận</div>
        <div class="box_comment">
            <?php foreach($comment as $cmt): ?>
                <span>
                    <img src="./public/image/<?= $cmt['image'] ?>" width="60px" height="60px" alt="">
                    <strong><?= $cmt['name'] ?></strong>
                </span>
                <div class="box_comment_item">
                    <p class="comment_content">
                        <?= $cmt['content'] ?>
                    </p>
                    <p class="ngay_comment">
                        <?= $cmt['created_at'] ?>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
        <div class="binhluan_form">
        <?php if(isset($_SESSION['user'])): ?>
            <form action="index.php?ctr=add_binh_luan&idsp=<?= $idsp ?>" method="POST">
                <input type="hidden" name="user_id" value="<?= $_SESSION['user']['ID']?>">
                <input type="hidden" name="food_id" value="<?= $idsp ?>">
                <input type="text" name="content" id="">
                <span style="color:red;"><?= $error['content'] ?? ''  ?></span>
                <button class="btn btn-outline-primary" type="submit" name="gui_binh_luan">Gửi bình luận</button>
            </form>
        <?php else : ?>
            <div class="title" style="color:red;">Vui lòng đăng nhập để bình luận!</div>
        <?php endif; ?>
        </div>
        <!--Optional JavaScript-->
        <!--jQuery first, then Popper.js, then Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>