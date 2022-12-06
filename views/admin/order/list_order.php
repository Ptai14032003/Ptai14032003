<?php
require_once "./model/cart.php";
?>
<?php require_once "views/admin/layout/header_admin.php" ?>
    <div class="main-contents">
        <table class="table">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Số lượng hàng</th>
                    <th>Giá trị đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $order): ?>
                    <tr>
                        <td><?= $order['ID'] ?></td>
                        <td><?= $order['fullname'] ?></td>
                        <td><?= $order['created_at'] ?></td>
                        <td><?= $order['quantity'] ?></td>
                        <td><?= $order['total_price'] ?></td>
                        <td>
                            <form action="index.php?ctr=update_status&ID=<?= $order['ID'] ?>" method="POST">
                              
                                <select name="status" id="">
                                    <option value="<?= $order['status'] ?>"><?= get_ttdh($order['status']) ?></option>
                                    <option value="0"><?= get_ttdh(0) ?></option>
                                    <option value="1"><?= get_ttdh(1) ?></option>
                                    <option value="2"><?= get_ttdh(2) ?></option>
                                    <option value="3"><?= get_ttdh(3) ?></option>
                                </select>
                                <button type="submit" name="edit" class="btn btn-outline-primary">cập nhật trạng thái</button>
                            </form>
                        </td>
                        <td>
                        <a href="index.php?ctr=delete_order&id=<?= $order['ID'] ?>" onclick="return confirm('Bạn có muốn xóa đơn hàng này không?')" class="btn btn-outline-danger">Delete</a>    
                        <a href="index.php?ctr=detail_order&id=<?= $order['ID'] ?>" class="btn btn-outline-primary">Chi tiết đơn hàng</a>    
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
<?php require_once "views/admin/layout/footer_admin.php" ?>