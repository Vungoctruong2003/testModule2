
<table class="table" style="width: 500px">
    <h3 style="text-align: "> Danh sách mặt </h3>
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên Hàng</th>
        <th scope="col">Loại Hàng</th>
        <th scope="col" colspan="2">Action</th>

    </tr>
    </thead>
    <tbody>

    <?php foreach ($products as $index => $product) : ?>
        <tr>
            <td scope="row"><?php echo $index + 1 ?></td>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['category'] ?></td>
            <td>
                <a onclick="return confirm('Are you sure?')"
                   href="index.php?action=delete&id=<?php echo $product['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
            <td>
                <a href="index.php?action=update&id=<?php echo  $product['id']?>" class="btn btn-warning">Update</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <td><a href="index.php?action=add" class="btn btn-success">Thêm mặt hàng</a>
    </td>
    </tbody>
</table>

