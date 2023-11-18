

    <div class="container">
    <?php
  if (isset($_SESSION['user'])){
    $user = loadone_taikhoan($_SESSION['user']);
    extract($user);
  }
    // if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
    //   extract($_SESSION);
    // }
  ?>
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 cl  ass="pt-3 font-weight-bold">Thông tin chi tiết</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="index.php?act=edit_taikhoan" method="POST">
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="text" placeholder="Name" name="name" value="<?= $name ?>" required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                            </div>
                            
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="email" placeholder="Email" name="email" value="<?= $email ?> "required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="text" placeholder="Address" name="address" value="<?= $address?> "required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="text" placeholder="Phone" name="tel" value="<?= $tel?> " required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                            </div>
                            
                        </form>
                       
                </div>
            </div>
        </div>
    </div>
    