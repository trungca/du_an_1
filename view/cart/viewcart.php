<div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Hình</th>
                            <th>Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php 
                          $tong=0;
                          $i=0;
                          foreach($_SESSION['mycart'] as $cart){
                              $ttien=$cart[3]*$cart[4];
                              $tong+=$ttien;
                              $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><button class="btn btn-sm btn-danger">Xóa<i class="fa fa-times"></i></button></a> ';
                              echo ' <tr>
                              <td class="align-middle"><img src="'.$cart[2].'" alt="" style="width: 50px;"></td>
                              <td class="align-middle">'.$cart[1].'</td>
                              <td class="align-middle">'.$cart[3].'</td>
                              <td class="align-middle">'.$cart[4].'</td>
                              <td class="align-middle">'.$ttien.'</td>
                              <td class="align-middle">'.$xoasp.'</td>
                          </tr>';
                          $i+=1;
                          }
                          
                    ?>
                       
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                
                <?php
                          $tong2=$tong+10; 
                          echo '<div class="bg-light p-30 mb-5">
                      <div class="border-bottom pb-2">
                          <div class="d-flex justify-content-between mb-3">
                              <h6>Tổng Tiền</h6>
                              <h6>'.$tong.'</h6>
                          </div>
                          <div class="d-flex justify-content-between">
                              <h6 class="font-weight-medium">Phí Ship</h6>
                              <h6 class="font-weight-medium">$10</h6>
                          </div>
                      </div>
                      <div class="pt-2">
              
                          <div class="d-flex justify-content-between mt-2">
                              <h5>Tổng Tiền</h5>
                              <h5>'.$tong2.'</h5>
                          </div>
                          <a href="index.php?act=bill">
                          <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">ThanhToán</button>
                          </a>
                      </div>
                      </div>';
              

                ?>
                <!-- <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Tổng Tiền</h6>
                            <h6>$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phí Ship</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Tổng Tiền</h5>
                            <h5>$160</h5>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Thanh Toán</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>