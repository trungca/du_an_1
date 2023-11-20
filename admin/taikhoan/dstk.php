<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>User Edit</h2>
												<p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>DANH SÁCH TÀI KHOẢN</h4>
                            <div class="add-product">
                                <a href="product-edit.html">THÊM TÀI KHOẢN</a>
                            </div>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Tài Khoản</th>
                                    <th>User</th>
                                    <th>Mật Khẩu</th>
                                    <th>Email</th>
                                    <th>Địa Chỉ</th>
                                    <th>Điện Thoại</th>
                                    <th>Vai Trò</th>
                                    <th>Chức Năng</th>
                                </tr>
                                <?php
                                foreach($listtaikhoan as $taikhoan){
                                    extract($taikhoan); 
                                    if($rolo == 1) {
                                        $vaitro = 'Admin';
                                    } else {
                                        $vaitro = 'User';
                                    }
                                    $suatk="index.php?act=suatk&idtk=".$idtk;
                                    $xoatk="index.php?act=xoatk&idtk=".$idtk;                                      
                                echo'
                                <tr>
                                    <td>'.$idtk.'</td>                                   
                                    <td>'.$name.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$vaitro.'</td> 
                                    <td>
                                        <button href="'.$suatk.'" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                                        <button href="'.$xoatk.'" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                                    </td>
                                </tr>';
                                }
                               ?>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>