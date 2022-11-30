<?php require_once "./views/admin/layout/header_admin.php" ?>
<div class="main-contents">
<a href="index.php?ctr=add_post" class="btn btn-primary">Add new Post</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Writing Date</th>
                <th>Short Description</th>
                <th>Avartar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($posts as $post): ?>
                <tr>
                    <td><?= $post['title'] ?></td>
                    <td><?= $post['writing_date'] ?></td>
                    <td><?= $post['short_desc'] ?></td>
                    <td><img src="./public/image/<?= $post['image'] ?>"width="300px" style="border-radius:50% ;" height="300px" alt=""></td>
                    <td>
                        <a href="index.php?ctr=edit_post&id=<?= $post['ID'] ?>" class="btn btn-outline-warning">Edit</a><br>
                        <a href="index.php?ctr=delete_post&id=<?= $post['ID'] ?>" onclick="return confirm('Do you want to delete this post?')" class="btn btn-outline-danger">Delete</a>    
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>  
    </table>

</div>

<?php require_once "./views/admin/layout/footer_admin.php" ?>