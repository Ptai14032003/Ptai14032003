<?php
require_once "./controller/controller.php";
require_once "./controller/index_controller.php";
require_once "./controller/menu_food_controller.php";
require_once "./controller/food_controller.php";
require_once "./controller/admin_controller.php";
require_once "./controller/user_controller.php";
require_once "./controller/post_controller.php";
require_once "./controller/cart_controller.php";
require_once "./controller/binh_luan_controller.php";
require_once "./model/menu_food.php";
require_once "./model/foods.php";
require_once "./model/post.php";
require_once "./model/user.php";
require_once "model/cart.php";
require_once "./model/binhluant.php";
session_start();
    if(!isset($_SESSION['mycart'])){
        $_SESSION['mycart'] = [];
    }
$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';
switch ($ctr) {
    case '/':
    case 'home':

        show_home();
        break;
    case 'about':
        show_about();
        break;
    case 'menu':
        show_cate();
        break;
        // đăng nhập & đăng ký
    case 'login':
        require "./views/login.php";
        break;
    case 'register':
        require "./views/register.php";
        break;
        // đăng xuất
    case 'logout':
        require "./views/logout.php";
        break;
        // case 'giohang':
        //     include_once "./views/giohang.php";
        //     break;
    case 'chitiet':
        if (isset($_GET['idsp'])) {
            chitiet($_GET['idsp']);
        }
        break;
    case 'chi_tiet_bai_viet':
        if (isset($_GET['id'])) {
            $post = get_one_post($_GET['id']);
        }
        include_once "./views/chitiet_post.php";
        break;
        // phần admin
    case 'admin':
    case 'dashboard':
        include_once "./views/admin/dashboard.php";
        break;
        // quản lý user
    case 'user':
        $users = all_user();
        include_once "./views/admin/user/list_user.php";
        break;
    case 'add_user':
        include_once "./views/admin/user/add_user.php";
        break;
    case 'edit_user':
        if (isset($_GET['id'])) {
            $user = get_one_user($_GET['id']);
        }
        include_once "./views/admin/user/edit_user.php";
        break;
    case 'delete_user':
        if (isset($_GET['id'])) {
            delete_user($_GET['id']);
        }
        $users = all_user();
        include_once "./views/admin/user/list_user.php";
        break;
        // quản lý danh mục
    case 'category':
        $cate = show_menu_all();
        include_once "./views/admin/category/list_cate.php";
        break;
    case 'add_cate':
        $error = validate_cate();
        include_once "./views/admin/category/add_cate.php";
        break;
    case 'edit_cate':
        if (isset($_GET['id'])) {
            $cate = get_one_cate($_GET['id']);
        }
        include_once "./views/admin/category/edit_cate.php";
        break;
    case 'delete_cate':
        if (isset($_GET['id'])) {
            delete_food_cate($_GET['id']);
            delete_cate($_GET['id']);
        }
        $cate = show_menu_all();
        include_once "./views/admin/category/list_cate.php";
        break;
        // quản lý món ăn
    case 'food':
        $trang = so_trang();
        $foods = phan_trang_food();
        // $foods = show_all_foods();
        include_once "./views/admin/food/list_food.php";
        break;
    case 'add_food':
        $cate = show_menu_all();
        $error = validate_add_food();
        include_once "./views/admin/food/add_food.php";
        break;
    case 'edit_food':
        if (isset($_GET['id'])) {
            $food = show_food($_GET['id']);
        }
        $cate = show_menu_all();
        $error = validate_edit_food();
        include_once "./views/admin/food/edit_food.php";
        break;
    case 'delete_food':
        if (isset($_GET['id'])) {
            delete_food($_GET['id']);
        }
        $foods = show_all_foods();
        include_once "./views/admin/food/list_food.php";
        break;

        // quản lý bài viết
    case 'post':
        $posts = get_all_post();
        include_once "./views/admin/post/list_post.php";
        break;
    case 'add_post':
        $error = validate_add_post();
        include_once "./views/admin/post/add_post.php";
        break;
    case 'edit_post':
        if (isset($_GET['id'])) {
            $post = get_one_post($_GET['id']);
        }
        $error = validate_edit_post();
        include_once "./views/admin/post/edit_post.php";
        break;
    case 'delete_post':
        if (isset($_GET['id'])) {
            delete_post($_GET['id']);
        }
        $posts = get_all_post();
        include_once "./views/admin/post/list_post.php";
        break;
    case 'chi_tiet_post':
        if (isset($_GET['id'])) {
            $post = get_one_post($_GET['id']);
        }
        include_once "./views/admin/post/chi_tiet_post.php";
        break;

        // thống kê
    case 'thongke':
        $tk_sp = load_thong_ke_sp();
        include_once "./views/admin/thongke/thongke.php";
        break;
    case 'bieudo':
        $tk_sp = load_thong_ke_sp();
        include_once "./views/admin/thongke/bieudo.php";
        break;

    // phần giỏ hàng
    case "add_to_cart":
        if(isset($_POST['add'])){
            $ID = $_POST['ID'];
            $name = $_POST['name'];
            $image = $_POST['image'];
            $price = $_POST['price'];
            $soluong = 1;
            if(isset($_SESSION['mycart'])){
                if(check_cart($ID)<0){
                    $sp_add=[$ID,$name,$image,$price,$soluong];
                    array_push($_SESSION['mycart'], $sp_add);
                }else{
                    $_SESSION['mycart'][check_cart($ID)][4] += $soluong;
                }
            }       
        }
        include_once "./views/cart/view_cart.php";
        break;
    case 'viewcart':
        include_once "./views/cart/view_cart.php";
        break;
    case "del_cart":
        if(isset($_GET['idcart'])){
            array_splice($_SESSION['mycart'], $_GET['idcart'],1);
            header("location: index.php?ctr=viewcart");
        }else{
            $_SESSION['mycart'] = [];
            header("location: index.php?ctr=home");
        }
        break;
    case 'dat_hang':
        include_once "./views/cart/dat_hang.php";
        break;
    // case 'confirm_dat_hang':
    //     include_once "views/cart/confirm_dat_hang.php";
    //     break;
    case 'my_order':
        $list_order=get_all_order_user($_SESSION['user']['ID']);
        include_once "views/cart/mybill.php";
        break;
    

    // quản lý order
    case 'list_order':
        $orders = load_all_order();
        include_once "views/admin/order/list_order.php";
        break;
    case 'update_status':
        if(isset($_POST['edit'])){
            update_status(); 
        }
        $orders = load_all_order();
        include_once "./views/admin/order/list_order.php";
        break;
    case 'delete_order':
        if (isset($_GET['id'])) {
            delete_order_detail($_GET['id']);
            delete_order($_GET['id']);
        }
        $orders = load_all_order();
        include_once "./views/admin/order/list_order.php";
        break;
    case 'detail_order':
        if (isset($_GET['id'])) {
            $order_detail=order_detail($_GET['id']);
        }
        include_once "views/admin/order/order_detail.php";
        break;
    // phần bình luận và quản lý bình luận
    case 'add_binh_luan':
        if(isset($_POST['gui_binh_luan'])){
            $error=add_cmt();
        }
        if (isset($_GET['idsp'])) {
            chitiet($_GET['idsp']);
        }
        include_once "views/binhluan.php";
        break;
    case 'list_comment':
        $list_comment = load_comment_sp_all();
        include_once "views/admin/comment/list_comment.php";
        break;
    case 'detail_comment':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $comment = load_comment_sp($id);
        }
    case 'delete_comment':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            delete_comment($id);
        }
        $comment = load_comment_sp($id);
        include_once "views/admin/comment/chi_tiet_coment.php";
        break;
    case 'delete_all_comment':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            delete_all_comment($id);
        }
        $list_comment = load_comment_sp_all();
        include_once "views/admin/comment/list_comment.php";
        break;
    default:
        break;
        // number_format($service['price'], 0, '', ',');
}
