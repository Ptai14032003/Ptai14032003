<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/header_admin.php" ?>
<div class="main-contents">
    <a href="index.php?ctr=add_cate" class="btn btn-primary">Add new Category</a>
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cate as $ca):?>
                    <tr>
                        <td><?= $ca['ID_cate'] ?></td>
                        <td><?= $ca['cate_name'] ?></td>
                        <td>
                            <a href="index.php?ctr=edit_cate&id=<?= $ca['ID_cate'] ?>" class="btn btn-outline-warning">Edit</a><br>
                            <a href="index.php?ctr=delete_cate&id=<?= $ca['ID_cate'] ?>" onclick="return confirm('Do you want to delete this user?')" class="btn btn-outline-danger">Delete</a>    
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
    </table>
</div>

<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/footer_admin.php" ?>