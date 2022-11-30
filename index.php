<?php
require_once "./controller/controller.php";
require_once "./controller/index_controller.php";
require_once "./controller/menu_food_controller.php";
require_once "./controller/food_controller.php";
require_once "./controller/admin_controller.php";
require_once "./controller/user_controller.php";
require_once "./controller/post_controller.php";
require_once "./model/menu_food.php";
require_once "./model/foods.php";
require_once "./model/post.php";

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
    case 'chitiet':
        if (isset($_GET['idsp'])){
            chitiet($_GET['idsp']);
        }  
        break;
    case 'chi_tiet_bai_viet':
        if(isset($_GET['id'])){
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
        $users=all_user();
        include_once "./views/admin/user/list_user.php";
        break;
    case 'add_user':
        include_once "./views/admin/user/add_user.php";
        break;
    case 'edit_user':
        if(isset($_GET['id'])){
            $user = get_one_user($_GET['id']);
        }
        include_once "./views/admin/user/edit_user.php";
        break;
    case 'delete_user':
        if(isset($_GET['id'])){
             delete_user($_GET['id']);
        }
        $users=all_user(); 
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
        if(isset($_GET['id'])){
            $cate = get_one_cate($_GET['id']);
        }
        include_once "./views/admin/category/edit_cate.php";
        break;
    case 'delete_cate':
        if(isset($_GET['id'])){
            delete_food_cate($_GET['id']);
            delete_cate($_GET['id']);
        }
        $cate = show_menu_all();    
        include_once "./views/admin/category/list_cate.php";
        break;
    // quản lý món ăn
    case 'food':
        $trang = so_trang();
        $foods=phan_trang_food();
        // $foods = show_all_foods();
        include_once "./views/admin/food/list_food.php";
        break;
    case 'add_food':
        $cate = show_menu_all();
        $error = validate_add_food();
        include_once "./views/admin/food/add_food.php";
        break;
    case 'edit_food':
        if(isset($_GET['id'])){
            $food = show_food($_GET['id']);
        }
        $cate = show_menu_all();
        $error = validate_edit_food();
        include_once "./views/admin/food/edit_food.php";
        break;
    case 'delete_food':
        if(isset($_GET['id'])){
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
        if(isset($_GET['id'])){
            $post = get_one_post($_GET['id']);
        }
        $error = validate_edit_post();
        include_once "./views/admin/post/edit_post.php";
        break;
    case 'delete_post':
        if(isset($_GET['id'])){
            delete_post($_GET['id']);
        }
        $posts = get_all_post();
        include_once "./views/admin/post/list_post.php";
        break;
    default:
        break;
}
