<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idsp = $_REQUEST['idsp'];
$dsbl = loadall_binhluan($idsp);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="binhluan" id="binhluan">
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

              <table>
                

                  <?php
                  foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '  <tr> <td> ' . $name . ' </td>';
                    echo '  <tr>  <td> ' . $noidung . ' </td>';
                    echo ' <td> ' . $ngaybinhluan . ' </td> </tr>';
                  }
                  ?>
                
              </table>

              <!-- <span>
                <small class="font-weight-bold text-primary"></small>
                <small class="font-weight-bold">Hmm, This poster looks cool</small>
              </span>
            </div>
            <small>2 days ago</small> -->
              <?php
              if (isset($_SESSION['user'])) {

              ?>

                <div class="guibl">
                  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="hidden" name="idsp" value="<?= $idsp ?>">
                    <input type="text" name="noidung" class="noidung" placeholder="Bình luận sản phẩm">
                    <input type="submit" value="Gửi bình luận" name="guibinhluan" class="guibinhluan">

                  </form>
                </div>
              <?php }  ?>
              <?php
              if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $idsp = $_POST['idsp'];
                $idtk =  $_SESSION['idtk'];
                $ngaybinhluan = date('G:i:s A d/m/Y');

                // $ngaybinhluan=date('l jS \of F Y h:i:s A');
                insert_binhluan($noidung, $idtk, $idsp, $ngaybinhluan);
                header("location: " . $_SERVER['HTTP_REFERER']);
              }


              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
<style>
  table {
    width: 100%;
    text-align: center;
    margin-top: 20px;
  }

  .noidung {
    width: 50%;
    border-radius: 5px;
    height: 35px;
    border: 1px solid gray;
  }

  .guibl {
    margin-top: 20px;
  }

  .guibinhluan {
    width: 85px;
    height: 35px;
    margin-left: 5px;
    color: white;
    background-color: black;
    border-radius: 5px;
  }

  .guibinhluan:hover {
    color: black;
    background-color: white;
  }
</style>