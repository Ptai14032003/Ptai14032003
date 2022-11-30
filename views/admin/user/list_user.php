<?php include_once "./views/admin/layout/header_admin.php" ?>
<div class="main-contents">
    <a href="index.php?ctr=add_user" class="btn btn-primary">Add new user</a>
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Image</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['tel'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['birthday'] ?></td>
                        <td><img src="./public/image/<?= $user['image'] ?>" width="100px" height="100px" alt=""></td>
                        <td><?= $user['roles']==1? "Admin" : "User" ?></td>
                        <td>
                            <a href="index.php?ctr=edit_user&id=<?= $user['ID'] ?>" class="btn btn-outline-warning">Edit</a><br>
                            <a href="index.php?ctr=delete_user&id=<?= $user['ID'] ?>" onclick="return confirm('Do you want to delete this user?')" class="btn btn-outline-danger">Delete</a>    
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
    </table>
</div>

<?php include_once "/xampp/htdocs/du_an1/views/admin/layout/footer_admin.php" ?>