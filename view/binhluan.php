<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idsp = $_REQUEST['idsp'];
$dsbl = loadall_binhluan($idsp);


?>

<div class="tab-pane fade" id="tab-pane-3">
  <div class="container mt-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
        </div>
      </div>
    </div>
    <div class="card p-3">
      <div class="d-flex justify-content-between align-items-center">
        <div class="user d-flex flex-row align-items-center">
          <img src="./view/img/login.png" width="30" class="user-img rounded-circle mr-2">
          <span>
            <small class="font-weight-bold text-primary"></small>
            <small class="font-weight-bold">Hmm, This poster looks cool</small>
          </span>
        </div>
        <small>2 days ago</small>
        <div class="formbinhluan">
          <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group py-2">
              <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Bình luận" name="noidung" required> </div>
              <button class="btn btn-primary btn-block mt-3" type="submit" value="guibinhluan">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>