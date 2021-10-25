<div class="container">
    <h3>Thêm mặt hàng</h3>
    <form method="post">
        <div class="form-group">
            <label for="">Tên hàng</label>
            <input type="text" name="name" required class="form-control">
            <label for="">Loại hàng</label>
            <input type="text" name="category" required class="form-control">
            <label for="">Giá</label>
            <input type="number" name="price" required class="form-control">
            <label for="">Số lượng</label>
            <input type="number" name="quantity" required class="form-control">
            <label for="">Ngày tạo</label>
            <input type="date" name="dateGenerate" required class="form-control">
            <label for="">Mô tả</label>
            <input type="text" name="description" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Nhập mặt hàng</button>
    </form>
</div>
