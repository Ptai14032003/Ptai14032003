<?php include_once "views/admin/layout/header_admin.php" ?>
<div class="main-contents">
    <h1>Bình luận theo sản phẩm</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Mã Món Ăn</th>
                <th>Image</th>
                <th>Tên Món Ăn</th>
                <th>Số bình luận</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list_comment as $cmt): ?>
                <tr>
                    <td><?= $cmt['food_id'] ?></td>
                    <td><img src="./public/image/<?= $cmt['image'] ?>" width="200px"  style="border-radius:50% ;" height="200px" alt=""></td>
                    <td><?= $cmt['name'] ?></td>
                    <td><?= $cmt['total'] ?></td>
                    <td>
                        <a href="index.php?ctr=delete_all_comment&id=<?= $cmt['food_id'] ?>" 
                        onclick="return confirm('Bạn có muốn xóa tất cả bình luận về món ăn này không?')" 
                        class="btn btn-outline-danger">Delete</a>    
                        <a href="index.php?ctr=detail_comment&id=<?= $cmt['food_id'] ?>" 
                        class="btn btn-outline-primary">Chi tiết bình luận</a>    
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once "views/admin/layout/header_admin.php"?>