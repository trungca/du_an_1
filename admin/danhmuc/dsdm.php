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
												<h2>Product Edit</h2>
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
                            <h4>DANH SÁCH LOẠI SẢN PHẨM</h4>
                            <div class="add-product">
                                <a href="index.php?act=themdm">THÊM LOẠI SẢN PHẨM</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Mã Loại</th>
                                    <th>Tên Loại</th>
                                    <th></th>
                                    <th>Chức Năng</th>
                                </tr>
                                <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    
                                    $suadm="index.php?act=suadm&id=".$id;
                                    $xoadm="index.php?act=xoadm&id=".$id;
                                    echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>
                                     
                                    </td>
                                    
                                    <td>
                                    <a href="'.$suadm.'"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <a href="'.$xoadm.'"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>';
                                }
                                ?>
                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
                                <a href="index.php?act=themdm"><input class="btn btn-ctl-bt waves-effect waves-light" type="button" value="NHẬP THÊM" style="color:white"></a>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>