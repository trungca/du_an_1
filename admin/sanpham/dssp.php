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
                                <h4>DANH SÁCH SẢN PHẨM</h4>
                                <form action="index.php?act=dssp" method="POST">
                                        <input type="text" name="kyw">
                                        <select name="iddm" id="">
                                            <option value="0" selected >TẤT CẢ</option>
                                        <?php
                                            foreach($listdanhmuc as $danhmuc){
                                                extract($danhmuc);
                                                echo '<option value="'.$id.'">'.$name.'</option>';
                                            }
                                        ?>
                                        </select>
                                        <input type="submit" name="listok" value="Tìm kiếm">
                                </form>
                                <table>
                                    <tr>
                                        <th>ID</th>
                                        <th>Hình</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số Lượng</th>
                                        <th>Giá</th>
                                        <th>Mô tả</th>
                                        <th>Lượt xem</th>
                                    </tr>
                                    <?php
                                    foreach($listsanpham as $sanpham){
                                        extract($sanpham);
                                        $suasp="index.php?act=suasp&idsp=".$idsp;
                                        $xoasp="index.php?act=xoasp&idsp=".$idsp;
                                        $hinhpath="../upload/".$image;
                                        if(is_file($hinhpath)){
                                            $image="<img src='".$hinhpath."' height='80'>";
                                        }else{
                                            $image="no photo";
                                        }
                                        echo'
                                    <tr>
                                    <td>'.$idsp.'</td>
                                        <td>'.$image.'</td>
                                        <td>'.$tensp.'</td>
                                        <td>'.$soluong.'</td>
                                        <td>'.$giasp.'</td>
                                        <td>'.$mota.'</td>
                                        <td>'.$luotxem.'</td>
                                        <td>
                                        <a href="'.$suasp.'"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <a href="'.$xoasp.'"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>';

                                    }
                                    ?>
                                    
                                </table>
                                
                                
                            </div>
                            <a href="index.php?act=themsp"><input type="button" value="Them moi" style="color:white" class="btn btn-ctl-bt waves-effect waves-light"></a>
                        </div>
                    </div>
                </div>
            </div>