<?php
$cate = show_menu_all();
?>
<?php require_once "header.php" ?>
<div class="food">
    <div class="grid wide">
        <h1>Check our tasty Menu</h1>
        <div class="menu_item">
            <ul class="menu_food row">
                <li><a href="index.php?ctr=menu">Show All</a></li>
                <?php foreach ($cate as $ca) : ?>
                    <li><a href="index.php?ctr=menu&id=<?= $ca['ID_cate'] ?>"><?= $ca['cate_name'] ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
<div class="chitiet">
    <div class="grid wide">
        <div class="row">
            <div class="col l-6">
                <img src="./public/image/<?= $food['image'] ?>" alt="">
            </div>
            <div class="col l-6">
                <div class="content">
                    <h3><?= $food['name'] ?></h3>
                    <span>
                        <?= $food['desc'] ?>
                    </span><br><br>
                    <strong><?= $food['price'] ?>đ</strong>
                </div>
                <div class="products">
                    <form action="index.php?ctr=add_to_cart" method="POST">
                        <input type="hidden" name="ID" value="<?= $food['ID'] ?>">
                        <input type="hidden" name="name" value="<?= $food['name'] ?>">
                        <input type="hidden" name="image" value="<?= $food['image'] ?>">
                        <input type="hidden" name="price" value="<?= $food['price'] ?>">
                        <button class="add" name="add" type="submit"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="binhluan grid wide" id="cmt">
    
</div>

<?php require_once "footer.php" ?>