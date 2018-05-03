<div class="container">
    <div class="row login-row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="userEmail">Email:</label>
                        <input type="email" class="form-control" id="userEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="userPassword">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="userPassword" placeholder="รหัสผ่าน">
                    </div>
                    <button type="submit" class="btn btn-primary">ลงชื่อเข้าใช้</button>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <ul>
                        <?php foreach ($members as $item):?>

                            <li><?php echo $item['first_name'] ?></li>

                        <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
</div>
