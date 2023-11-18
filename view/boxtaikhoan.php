
                <?php
            if (isset($_SESSION['user'])) {
                
            ?>
                <div class="dangnhap">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button class="dropdown-item" type="button"> <a href="index.php?act=dangnhap">Tài khoản</a></button>
                    </div>
                </div>

            <?php } else {  ?>
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        
                            <button class="btn btn-sm btn-light dropdown-toggle" type="button"> <a href="index.php?act=dangnhap">Đăng nhập</a></button>
                            
                        </div>
                    </div>
                   
                </div>
            <?php } ?>