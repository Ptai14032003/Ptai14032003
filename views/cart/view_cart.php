<?php include_once "./views/header.php" ?>
    <div class="cart grid wide">
        <div class="row">
            <h3>Giỏ hàng của bạn</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Hình</th>
                        <th>Món Ăn</th>
                        <th>Đơn Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once "controller/cart_controller.php";
                        viewcart();
                    ?>
                </tbody>
            </table>
            <a href="index.php?ctr=dat_hang" class="btn btn-danger">Đặt hàng ngay</a>
            <a href="index.php?ctr=menu" class="btn btn-outline-primary">Tiếp tục mua hàng</a>
            <?php 
                if(isset($_SESSION['user'])){
                    echo '<a href="index.php?ctr=my_order" class="btn btn-primary">Đơn hàng của tôi</a>';
                }
            ?>
            <!-- <a href="index.php?ctr=my_order" class="btn btn-primary">Đơn hàng của tôi</a> -->
        </div>
    </div>

<?php include_once "./views/footer.php" ?>