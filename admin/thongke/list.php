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
                                <h4>Thống kê sản phẩm</h4>
                                <table>
                                    <tr>
                                        <th>Mã Danh Mục</th>
                                        <th>Tên Danh Mục</th>
                                        <th>Số lượng</th>
                                        <th>Giá Cao Nhất</th>
                                        <th>Giá Thấp Nhất</th>
                                        <th>Giá Trung Bình</th>
                                    </tr>
                                    <?php 

										foreach($listthongke as $thongke){
											extract($thongke);
											echo'  <tr>
											<td>'.$madm.'</td>
											<td>'.$tendm.'</td>
											<td>'.$countsp.'</td>
											<td>'.$maxprice.'</td>
											<td>'.$minprice.'</td>
											<td>'.$avgprice.'</td>
										</tr>';
										}
									
									?>
                                    
                                </table>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>