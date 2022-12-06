<!-- <?php
require_once "./model/cart.php";
if(isset($_GET['ID'])){
    $order = get_one_order($_GET['ID']);
    $order_detail = get_one_order_detail($_GET['ID']);
}
?>
<?php include_once "./views/header.php" ?>
    <div class="cart grid wide">
        <form action="index.php?ctr=dat_hang" method="POST">
            <div class="bill row">
                <div class="title">Cảm ơn</div>
                <div class="table">
                    <span>Cảm ơn quý khách đã tin tưởng và sử dụng dịch vụ của chúng tôi! Kính chúc quý khách 1 ngày tốt lành</span>
                </div>
            </div>
            <div class="bill row">
                <div class="title">Phương thức thanh toán</div>
                <div class="thanhtoan row">
                    <span><?= $order['thanh_toan'] ?></span>
                </div>
                <span style="color:red;"><?= $error['checkbook'] ?? ''  ?></span>
            </div>
            <div class="bill row">
                <div class="title">Thông tin giỏ hàng</div>
                <div class="table">
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
                            <?php foreach ($order_detail as $od):?>
                                <tr>
                                    <td><img src="./public/image/<?= $od['image'] ?>" width="100px" height="100px"  alt=""></td>
                                    <td><?= $od['name'] ?></td>
                                    <td><?= $od['price'] ?></td>
                                    <td><?= $od['so_luong'] ?></td> 
                                    <td><?= $od['price']*$od['so_luong']?></td> 
                                </tr>
                            <?php endforeach ?>
                            <tr>
                                <td colspan="4">Tổng Tiền</td>
                                <td><?= $tong ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <button type="submit" name="book_cart" class="book btn btn-danger">Đặt hàng ngay</button>
        </form>
    
    </div>

<?php include_once "./views/footer.php" ?> -->