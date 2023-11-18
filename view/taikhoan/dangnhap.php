<div class="container">
    <?php
    if (isset($_SESSION['user'])) {
        //extract($_SESSION['user']);
    ?>
        <a href="index.php?">Đơn hàng của tôi</a> <br>
        <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a> <br>
        <a href="admin/index.php">Đăng nhập Admin</a> <br>
        <a href="index.php?act=doimk">Đổi mật khẩu</a> <br>
        <a href="index.php?act=quenmk">Lấy lại mật khẩu</a> <br>
        <a href="index.php?act=dangxuat">Đăng xuất</a>
    <?php } else { ?>
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 cl ass="pt-3 font-weight-bold">Đăng nhập</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="index.php?act=dangnhap" method="POST">
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Tên đăng nhập" name="user" required> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" placeholder="Mật khẩu" name="pass" required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                            </div>
                            <div class="form-inline"> <a href="index.php?act=quenmk" id="forgot" class="font-weight-bold">Quên mật khẩu?</a> </div>
                            <input class="btn btn-primary btn-block mt-3" type="submit" value="Đăng Nhập" name="dangnhap">
                            <div>

                                <p>Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng kí tài khoản</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="mx-3 my-2 py-2 bordert">
                        <div class="text-center py-3"> <a href="https://wwww.facebook.com" target="_blank" class="px-2"> <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" alt=""> </a> <a href="https://www.google.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt=""> </a> </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php } ?>
<!-- <input type="checkbox" name="remember" id="remember"> <label for="remember" class="text-muted">Nhớ mật khẩu</label> -->