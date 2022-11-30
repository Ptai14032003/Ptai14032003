<?php
if (isset($_GET['id']) && ($_GET['id'] != 0)) {
    $id = $_GET['id'];
    $foods = show_foods($id);
} else {
    $foods = show_all_foods();
}
?>
<?php require_once "./views/header.php" ?>
<div class="food">
    <div class="grid wide">
        <h1>Check our tasty Menu</h1>
        <div class="menu_item">
            <ul class="menu_food row">
                <li><a href="index.php?ctr=menu&id=0">Show All</a></li>
                <?php foreach ($cate as $ca) : ?>
                    <li><a href="index.php?ctr=menu&id=<?= $ca['ID'] ?>"><?= $ca['cate_name'] ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="products row">
            <?php foreach ($foods as $food) : ?>
                <div class="col l-3 m-4 c-12">
                    <a href="index.php?ctr=chitiet&idsp=<?=$food['ID']?>">
                        <img src="./public/image/<?= $food['image']  ?>" alt="">
                    </a>
                    <a href="index.php?ctr=chitiet&idsp=<?=$food['ID']?>">
                        <h5><?= $food['name'] ?></h5>
                    </a>
                    <p><?= $food['price'] ?>đ</p>
                    <a class="add" href="#"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?php require_once "./view/footer.php" ?>