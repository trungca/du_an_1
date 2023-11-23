
<div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Hóa Đơn</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <?php 
                            if(isset($_SESSION['user'])){
                                $name=$_SESSION['user']['name'];
                                $address=$_SESSION['user']['address'];
                                $email=$_SESSION['user']['email'];
                                $tel=$_SESSION['user']['tel'];
                            }else{
                                $name="";
                                $address="";
                                $email="";
                                $tel="";
                            }
                        ?>
                        <div class="col-md-6 form-group">
                            <label>Họ và Tên</label>
                            <input class="form-control" type="text" name="name" value="<?= $name ?>" placeholder="họ và tên">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" name="email" value="<?= $email ?>" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" type="text" name="tel" value="<?= $tel ?>" placeholder="+123 456 789">
                        </div>
                      
                        <div class="col-md-6 form-group">
                            <label>Thành Phố</label>
                            <input class="form-control" type="text" name="address" value="<?= $address ?>" placeholder="thành phố">
                        </div>
                    </div>
                </div>
                <div class="collapse mb-5" id="shipping-address">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping Address</span></h5>
                    <div class="bg-light p-30">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" placeholder="John">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" placeholder="Doe">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" placeholder="+123 456 789">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 2</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <select class="custom-select">
                                    <option selected>United States</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>State</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>ZIP Code</label>
                                <input class="form-control" type="text" placeholder="123">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Danh Sách Mua Hàng</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Sản phẩm mua</h6>
                        <?php 
                             $tong=0;
                             $i=0;
                             foreach($_SESSION['mycart'] as $cart){
                                 $ttien=$cart[3]*$cart[4];
                                 $tong+=$ttien;
                                 $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><button class="btn btn-sm btn-danger">Xóa<i class="fa fa-times"></i></button></a> ';
                                 echo ' <tr>
                                 <td class="align-middle"><img src="'.$cart[2].'" alt="" style="width: 50px;"></td>
                                 <td class="align-middle">'.$cart[3].'</td> <br> <br>   
                             </tr>';
                             $i+=1;
                             }
                             
                        ?>
                    </div>
                        <div class="d-flex justify-content-between mt-2">
                            <?php 
                                 $tong2=$tong+10; 
                                 echo '
                                 <div class="d-flex justify-content-between mt-2">
                                     <h5>Tổng Tiền: </h5>
                                     <h5>'.$tong2. '</h5>
                                 </div>'
                            ?>
                        </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thanh Toán</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Chuyển Khoản</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Tiền Mặt</label>
                            </div>
                        </div>
                      
                        <button class="btn btn-block btn-primary font-weight-bold py-3">Đặt Hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>