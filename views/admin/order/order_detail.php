<?php
require_once "./model/cart.php";
?>
<?php require_once "views/admin/layout/header_admin.php" ?>
    <div class="main-contents">
    <div class="cart grid wide">
        <div class="row">
            <h3>Chi tiết đơn hàng</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Hình</th>
                        <th>Món Ăn</th>
                        <th>Đơn Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($order_detail as $od): ?>
                        <tr>
                            <td><img src="./public/image/<?= $od['image'] ?>" width="100px" height="100px"  alt=""></td>
                            <td><?= $od['name'] ?></td>
                            <td><?= $od['price'] ?></td>
                            <td><?= $od['quantity'] ?></td>
                            <td>
                                <?php
                                    $tong=$od['price']*$od['quantity'];
                                    if($tong>=300000){
                                            echo '<span><del>' . $tong . '</del>(-10%) -->' . $tong * 0.9 . '</span>';
                                    }else{
                                            echo '<span>' . $tong . '</span>';
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="index.php?ctr=list_order" class="btn btn-outline-primary">Danh sách</a>
        </div>
    </div>
    </div>
<?php require_once "views/admin/layout/footer_admin.php" ?>