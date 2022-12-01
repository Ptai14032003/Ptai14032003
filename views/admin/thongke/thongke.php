<?php require_once "./views/admin/layout/header_admin.php" ?>
<div class="main-contents">
    <h3>Thống kê sản phẩm</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Category</th>
                <th>Quantity</th>
                <th>Min Price(vnđ)</th>
                <th>Max Price(vnđ)</th>
                <th>Average Price(vnđ)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tk_sp as $tk): ?>
                <tr>
                    <td><?= $tk['cate_name'] ?></td>
                    <td><?= $tk['countsp'] ?></td>
                    <td><?= $tk['minprice'] ?></td>
                    <td><?= $tk['maxprice'] ?></td>
                    <td><?= $tk['tbprice'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="index.php?ctr=bieudo" class="btn btn-primary">Biểu Đồ</a>
</div>
<?php require_once "./views/admin/layout/footer_admin.php" ?>