<?php include_once "views/admin/layout/header_admin.php" ?>
<div class="main-contents">
    <h1>Chi tiết bình luận</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Mã bình luận</th>
                <th>Mã món ăn</th>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Nội dung bình luận</th>
                <th>Ngày bình luận</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($comment as $cmt): ?>
                <tr>
                    <td><?= $cmt['ID_cmt'] ?></td>
                    <td><?= $cmt['food_id'] ?></td>
                    <td><?= $cmt['user_id'] ?></td>
                    <td><?= $cmt['name'] ?></td>
                    <td><?= $cmt['content'] ?></td>
                    <td><?= $cmt['created_at'] ?></td>
                    <td>
                        <a href="index.php?ctr=delete_comment&id=<?= $cmt['ID_cmt'] ?>" 
                        onclick="return confirm('Bạn có muốn xóa bình luận này không?')" 
                        class="btn btn-outline-danger">Delete</a>  
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once "views/admin/layout/header_admin.php"?>