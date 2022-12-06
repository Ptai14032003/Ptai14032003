<?php
require_once "./controller/cart_controller.php";
$error = validate_book();
?>
<?php include_once "./views/header.php" ?>
    <div class="cart grid wide">
        <form action="index.php?ctr=dat_hang" method="POST">
            <div class="bill row">
                <?php 
                    if(isset($_SESSION['user'])){
                        $name = $_SESSION['user']['name'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    }else{
                        $name = "";
                        $email = "";
                        $tel = "";
                    }
                ?>
                <div class="title">Thông tin người đặt</div>
                <div class="table">
                    <div class="form_book row">
                        <div class="col l-3 c-12 m-3">
                            <label for="">Tên Người Đặt</label>
                        </div>
                        <div class="col l-9 c-12 m-9"> 
                            <input type="text" name="name" value="<?= $name?? '' ?>"><br>
                            <span style="color:red;"><?= $error['name'] ?? ''  ?></span>
                        </div>
                        
                    </div>
                    <div class="form_book row">
                        <div class="col l-3 c-12 m-3">
                            <label for="">Email</label>
                        </div>
                        <div class="col l-9 c-12 m-9"> 
                            <input type="text" name="email" value="<?= $email?? '' ?>"><br>
                            <span style="color:red;"><?= $error['email'] ?? ''  ?></span>
                        </div>
                        
                    </div>
                    <div class="form_book row">
                        <div class="col l-3 c-12 m-3">
                            <label for="">Số điện thoại</label>
                        </div>
                        <div class="col l-9 c-12 m-9"> 
                            <input type="text" name="tel" value="<?= $tel?? '' ?>"><br>
                            <span style="color:red;"><?= $error['tel'] ?? ''  ?></span>
                        </div>
                        
                    </div>
                    <div class="form_book row">
                        <div class="col l-3 c-12 m-3">
                            <label for="">Địa chỉ nhận hàng</label>
                        </div>
                        <div class="col l-9 c-12 m-9"> 
                            <input type="text" name="address" ><br>
                            <span style="color:red;"><?= $error['address'] ?? ''  ?></span>
                        </div>
                        
                    </div>         
                </div>
            </div>
            <div class="bill row">
                <div class="title">Phương thức thanh toán</div>
                <div class="thanhtoan row">

                    <label for="1">
                        <input  type="radio" name="thanh_toan" id="1" value="1">
                        Thanh toán khi nhận hàng
                    </label>
                    <label for="2">
                        <input  type="radio" name="thanh_toan" id="2" value="2">
                        Chuyển khoản ngân hàng
                    </label>
                    <label for="3">
                        <input  type="radio" name="thanh_toan" id="3" value="3">
                        Thanh toán online
                    </label>
                    <br>
                    
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
                            <?php $tong = 0;$i = 0; foreach ($_SESSION['mycart'] as $cart): $tong += $cart[4] * $cart[3]?>
                                <tr>
                                    <td><img src="./public/image/<?= $cart[2] ?>" width="100px" height="100px"  alt=""></td>
                                    <td><?= $cart[1] ?></td>
                                    <td><?= $cart[3] ?></td>
                                    <td><?= $cart[4] ?></td> 
                                    <td><?= $cart[4]*$cart[3] ?></td> 
                                </tr>
                            <?php $i += 1; endforeach ?>
                            <input type="hidden" name="quantity" value="<?= $i ?>" >
                            <input type="hidden" name="total_price" value="<?= $tong ?>" >
                            <tr>
                                <td colspan="4">Tổng Tiền</td>
                                <td>
                                    <?php
                                        if($tong>=300000){
                                            echo '<span><del>' . $tong . '</del>(-10%) -->' . $tong * 0.9 . '</span>';
                                        }else{
                                            echo '<span>' . $tong . '</span>';
                                        }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <button type="submit" name="book_cart" class="book btn btn-danger">Đặt hàng ngay</button>
        </form>
    
    </div>

<?php include_once "./views/footer.php" ?>