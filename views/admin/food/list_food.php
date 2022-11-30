<?php require_once "./views/admin/layout/header_admin.php" ?>
<div class="main-contents">
    <a href="index.php?ctr=add_food" class="btn btn-primary">Add new Food</a>
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Food Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Desc</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($foods as $food):?>
                    <tr>
                        <td><?= $food['name'] ?></td>
                        <td><img src="./public/image/<?= $food['image'] ?>" width="100px" height="100px" alt=""></td>
                        <td><?= $food['price'] ?></td>
                        <td><?= $food['desc'] ?></td>
                        <td><?= $food['cate_name'] ?></td>
                        <td>
                            <a href="index.php?ctr=edit_food&id=<?= $food['ID'] ?>" class="btn btn-outline-warning">Edit</a><br>
                            <a href="index.php?ctr=delete_food&id=<?= $food['ID'] ?>" onclick="return confirm('Do you want to delete this user?')" class="btn btn-outline-danger">Delete</a>    
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
    </table>
</div>
<?php require_once "./views/admin/layout/footer_admin.php"?>