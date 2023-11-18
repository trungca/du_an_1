<?php
    if (is_array($sanpham)) {
    extract($sanpham);
    }
    $hinhpart = "../upload/" . $hinh;
    if (is_file($hinhpart)) {
    $hinh = "<img src='" . $hinhpart . "' height='80'>";
    } else {
    $hinh = "no poto";
}

?>
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
<div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Thêm Sản Phẩm</a></li>
                                </ul>
                                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="description">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="input-group mg-b-pro-edt">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <br>
                                                            <select name="iddm" class="form-control pro-edt-select form-control-primary" >
                                                            <?php
                                                            foreach($listdanhmuc as $danhmuc){
                                                                extract($danhmuc);
                                                                echo '<option value="'.$id.'">'.$name.'</option>';
                                                                
                                                            }
                                                            ?>

                                                            </select>
                                                        </div>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="tensp" placeholder="Tên Sản Phẩm" value="<?= $tensp ?>">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                            <input type="file" class="form-control" name="image" placeholder="Hình" value="<?= $image ?>">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="giasp" placeholder="Giá" value="<?= $giasp ?>">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="soluong" placeholder="Số Lượng" value="<?= $soluong ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                            <textarea class="form-control" name="mota" cols="30" rows="10" placeholder="Mo ta" ><?= $mota ?></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="text-center custom-pro-edt-ds">
                                                        <input type="hidden" name="idsp" value="<?= $idsp ?>">
                                                        <input type="submit" name="capnhat" value="Cap Nhat" class="btn btn-ctl-bt waves-effect waves-light">
                                                        <a href="index.php?act=dssp"><input type="button" value="Danh sách" class="btn btn-ctl-bt waves-effect waves-light"></a>
                                                    </div>
                                                </div>
                                            </div>
                                </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>