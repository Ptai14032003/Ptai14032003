<?php
require_once "./model/cart.php";
function viewcart(){
        $tong = 0;
        $i = 0;
        foreach($_SESSION['mycart'] as $cart){
            $tongtien=$cart[3]*$cart[4];
            $tong += $tongtien;
            echo '
                <tr>
                    <td><img src="./public/image/'.$cart[2].'" width="100px" height="100px"  alt=""></td>
                    <td>'. $cart[1] .'</td>
                    <td>'.$cart[3].'</td>
                    <td>'. $cart[4].'</td> 
                    <td>'.$cart[4]*$cart[3].'</td> 
                    <td><a href="index.php?ctr=del_cart&idcart='.$i.'">Xóa</a></td>
                </tr>';
                $i+=1;
        }
        echo '
            <tr>
                <td colspan="4">Tổng Tiền</td>
                <td>'.$tong.'</td>
                <td></td>
            </tr>';
}

// ktra xem trong giỏ đã có món đó chưa
function check_cart($id){
    $i = 0;
    $a = -1;
    foreach($_SESSION['mycart'] as $cart){
        if($id==$cart[0]){
            $a=$i;

        }else{
            $a = -1;
        }
        $i+=1;
    }
    return $a;
}
// validate đặt hàng
function validate_book(){
    if (isset($_POST['book_cart'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
        $quantity=$_POST['quantity'];
        $total_price = $_POST['total_price'];

        // khai báo lỗi
        $error = [];

        if ($name == "") {
            $error['name'] = "Tên không được để trống";
        }
        if($email==""){
            $error['email'] = "Email không được để trống";
        }
        if($tel==""){
            $error['tel'] = "Số điện thoại không được để trống";
        }
        if($address==""){
            $error['address'] = "Địa chỉ không được để trống";
        }
        if(empty( $_POST['thanh_toan'])){
            $error['checkbook'] = "Vui lòng chọn phương thức thanh toán";
        }else{
            $checkbook = $_POST['thanh_toan'];
            if($checkbook==1){
                $thanh_toan = "Thanh toán khi nhận hàng";
            }elseif($checkbook==2){
                $thanh_toan="Chuyển khoản ngân hàng";
            }else{
                $thanh_toan="Thanh toán online";
            }
        }
        if(!$error){
            if(isset($_SESSION['user'])){
                $ID = $_SESSION['user']['ID'];
            }else{
                $ID = 0;
            }
            if($total_price>=300000){
                $total_price *= 0.9;
            }
            $last_id=add_oder($name, $tel, $email, $address, $quantity, $total_price, $thanh_toan,$ID);
            foreach($_SESSION['mycart'] as $cart){
                $order_id = $last_id;
                $food_id = $cart[0];
                $so_luong = $cart[4];
                $gia = $cart[3];
                add_order_detail($order_id, $food_id, $so_luong, $gia);
            }
            // echo '<script>alert("Đặt hàng thành công!"); window.location.href = "index.php?ctr=confirm_dat_hang&ID='.$last_id.'"</script>';
            echo '<script>alert("Đặt hàng thành công!"); window.location.href = "index.php?ctr=del_cart"</script>';

        }
        return $error;
    }
}

function update_status(){
    if(isset($_POST['edit'])){
        if(isset($_GET['ID'])){
            $ID=$_GET['ID'];
            $status = $_POST['status'];
            edit_status($ID, $status);
        }
        echo '<script>alert("Cập nhật trạng thái thành công!"); window.location.href = "index.php?ctr=list_order"</script>';
    }
    
}
