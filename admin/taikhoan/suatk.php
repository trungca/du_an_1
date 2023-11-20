       <?php
        if (isset($_SESSION['user'])) {
            $user = loadone_taikhoan($_SESSION['user']);
            extract($user);
        }
        ?><div class="breadcome-area">
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
           <div class="single-pro-review-area">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="review-tab-pro-inner">
                               <ul id="myTab3" class="tab-review-design">
                                   <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Sửa Tài Khoản</a></li>

                               </ul>
                               <div id="myTabContent" class="tab-content custom-product-edit">
                                   <div class="product-tab-list tab-pane fade active in" id="description">
                                       <div class="row">
                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                               <div class="review-content-section">
                                                   <div class="input-group mg-b-pro-edt">
                                                       <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                       <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $name ?>>
                                                   </div>
                                                   <div class="input-group mg-b-pro-edt">
                                                       <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                       <input type="text" class="form-control" name="user" placeholder="Tên Tài Khoản" value="<?= $user ?>">
                                                   </div>
                                                   <div class="input-group mg-b-pro-edt">
                                                       <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                       <input type="text" class="form-control" name="pass" placeholder="Mật Khẩu" value="<?= $pass ?>">
                                                   </div>
                                                   <div class="input-group mg-b-pro-edt">
                                                       <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                                       <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $email ?>">
                                                   </div>
                                                   <div class="input-group mg-b-pro-edt">
                                                       <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                       <input type="text" class="form-control" name="address" placeholder="Địa Chỉ" value="<?= $address ?>">
                                                   </div>
                                                   <div class="input-group mg-b-pro-edt">
                                                       <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                       <input type="text" class="form-control" name="tel" placeholder="Điện Thoại">
                                                   </div>
                                                   <div class="input-group mg-b-pro-edt">
                                                       <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                       <input type="text" class="form-control" name="rolo" placeholder="Vai trò">
                                                   </div>
                                               </div>
                                           </div>

                                       </div>
                                       <div class="row">
                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <div class="text-center custom-pro-edt-ds">
                                                   <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10 " name="submit">Save
                                                   </button>
                                                   <!-- <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
														</button>
                                                </div> -->
                                               </div>
                                           </div>
                                       </div>

                                       <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                           <div class="row">
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <div class="review-content-section">
                                                       <div class="card-block">

                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>