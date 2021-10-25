<div class="container">
    <h3>Thêm mặt hàng</h3>
    <form method="post">
        <div class="form-group">
            <label for="">Tên hàng</label>
            <input type="text" name="name" value="<?php echo $product['name']?>" required class="form-control">
            <label for="">Ngày tạo</label>
            <input type="date" name="dateGenerate" value="<?php echo $product['dateGenerate']?>" required class="form-control">

            <label for="">Loại hàng</label>
            <input type="text" name="category" value="<?php echo $product['category']?>" required class="form-control">
            <label for="">Giá</label>
            <input type="number" name="price" value="<?php echo $product['price']?>" required class="form-control">
            <label for="">Số lượng</label>
            <input type="number" name="quantity" value="<?php echo $product['quantity']?>" required class="form-control">
            <label for="">Mô tả</label>
            <input type="text" name="description" value="<?php echo $product['description']?>" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Nhập mặt hàng</button>
    </form>
</div>
