<div class="container" style="width:60%">
    <h1 class="h3 mb-2 text-gray-800 text-center"><?php echo $data['title'] ?></h1>
    <form action="" method="post">
        <div class="form-group mb-3">
            <label for="">Tên</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="gender">Giới tính</label>
            <select name="gender" id="gender" class="form-control">
                <option value="boy">Nam</option>
                <option value="girl">Nữ</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <input type="submit" name="btn" class="btn btn-primary" value="Thêm">
        </div>
    </form>
</div>
</div>
<div class="a" style="width=100%; height:100px;"></div>
</div>
</div>