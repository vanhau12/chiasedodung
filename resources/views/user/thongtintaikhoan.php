

<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="breadcrumb_iner">
					<div class="breadcrumb_iner_item">
						<h2>Thông tin tài khoản</h2>
						<p>Trang chủ <span>-</span> Thông tin tài khoản</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb start-->


<!-- phan thong tin tai khoan-->
<section class="product_list best_seller">
	<div class="container">
		<div class="content">
			<div class="animated fadeIn">
				<div class="row">
					<div class="col-md-2">
					</div>

					
					<div class="col-md-8">
						<div class="card-body card-block" >
							<?php foreach ($user as $user): ?>
							<form action="<?= base_url() ?>Nguoidung/cap_nhat_tt/<?= $user['id'] ?>" method="post" class="form-horizontal" enctype="multidata/form-data">
									<div class="row form-group">
										<div class="col col-md-12" style="text-align: center;"><label for="exampleInputName2" class="pr-1  form-control-label"><h2>Thông tin tài khoản</h2></label>
										</div>
									</div>
									<hr/>
									<div class="row form-group">
										<div class="col col-md-3"><label for="exampleInputName2" class="pr-1  form-control-label"><b>Họ tên</b></label>
										</div>
										<div class="col-12 col-md-9"><input type="text" name="ten" placeholder="Jane Doe" value="<?= $user['name'] ?>" required="" class="form-control"><span class="help-block"></span>
										</div>
									</div>
									<hr/>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hf-email" class=" form-control-label"><b>Email</b></label></div>
                                        <div class="col-12 col-md-9"><input type="email" disabled id="hf-email" name="email" placeholder="Enter Email..." value="<?= $user['email'] ?>" class="form-control"><span class="help-block"></span></div>
                                    </div>
                                    <hr/>
                                    <div class="row form-group">
                                		<div class="col col-md-3"><label for="exampleInputName2" class="pr-1  form-control-label"><b>Số điện thoại</b></label>
                                		</div>
                                		<div class="col-12 col-md-9"><input type="text" name="sdt" placeholder="Phone Number..." value="<?= $user['phone'] ?>" required="" class="form-control"><span class="help-block"></span>
                                		</div>
                                	</div>
                                	<hr/>
                                <?php endforeach?>

                                <div class="form-actions form-group text-center"><button type="submit" class="btn btn-success btn-default" name="sub" value="admin">Cập nhật</button></div>

                            </form>
                        </div>

                    </div>
                    
                    <div class="col-md-2">
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div>
</section>
<!-- het phan thong tin tai khoan-->

