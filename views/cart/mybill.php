<?php
require_once "./controller/cart_controller.php";
// $error = validate_book();
?>
<?php include_once "./views/header.php" ?>
    <div class="cart grid wide">
    <div class="title">Đơn hàng của tôi</div>
    <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã Đơn Hàng</th>
                        <th>Ngày Đặt Hàng</th>
                        <th>Số lượng mặt hàng</th>
                        <th>Tổng Đơn Hàng</th>
                        <th>Trạng Thái Đơn Hàng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($list_order as $order): ?>
                        <tr>
                            <td><?= $order['ID'] ?></td>
                            <td><?= $order['created_at'] ?></td>
                            <td><?= $order['quantity'] ?></td>
                            <td><?= $order['total_price'] ?></td>
                            <td>
                                <?php 
                                    if($order['status']==0){
                                        echo 'Đang chờ';
                                    }elseif($order['status']==1){
                                        echo 'Đang giao hàng';
                                    }elseif($order['status']==2){
                                        echo 'Đã giao hàng';
                                    }else{
                                        echo 'Đơn đã bị hủy';
                                    }
                                ?>
                             </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
    </div>

<?php include_once "./views/footer.php" ?>