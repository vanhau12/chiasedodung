<?php if ($this->session->has_userdata('login')): ?>
	<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Chia sẻ đồ dùng</h2>
              <p>Trang Chủ <span>-</span>Chia sẻ đồ dùng</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <section class="">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-2">
    		</div>
	    	<div class="col-sm-8">

	        <form action="<?= base_url()?>Dodung/them_do_dung" method="post" enctype="multipart/form-data">
	        		<div class="form-group text-center">
	        			<label style="text-align: center; margin-top: 30px"><h2>Chia sẻ đồ dùng</h2></label>
	        			<?php if ($this->session->has_userdata('success')): ?>
        							<div class="col col-md-12"><label for="exampleInputName2" class="pr-1  form-control-label"><h4 style="color: green;"><?= $this->session->userdata('success') ?></h4>
        							</label>
        						</div>
        					<?php endif ?>
      				</div>
	            <div class="form-group">
	                <label for="">Tiêu Đề:</label>
	                <input type="text" class="form-control" required name="ten">
	            </div>
	            <div class="form-group">
	                <label for="">Loại sản phẩm:</label><br>
	                <select name="loai" id="" class="form-control">
	                	<?php foreach ($types as $type): ?>
	                  	<option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
	                  <?php endforeach ?>
	                </select><br>
	            </div><br>
	            <div class="form-group">
	                <label for="">Giá:</label>
	                <input type="text" class="form-control" required name="gia">
	            </div>
	            <div class="form-group">
	                <label for="">Địa điểm:</label>
	                <input type="text" class="form-control" required name="diadiem">
	            </div>
	            <div class="form-group">
	                <label for="">Ảnh đại diện:</label>
	                <?php if ($this->session->has_userdata('anhloi')): ?>
        							<span style="color: red"><?= $this->session->userdata('anhloi') ?></span>
        					<?php endif ?>
	                <input type="file" class="form-control" required name="anh" id="image" onchange="fileValidation(this)">
	                
	                <div id="imagePreviewimage"></div>
	            </div>
	            <div class="form-group">
	                <label for="">Nội dung mô tả:</label>
	                <textarea name="mota"></textarea>
	            </div>
	            <div class="form-group text-center">
	                <input type="submit" class="btn btn-success btn-default" value="Chia sẻ">
	            </div>
	        </form>
	      </div>
     	</div>
  </section>
<?php else: ?>
	<script type='text/javascript'>var r = confirm('Bạn chưa đăng nhập. Quay lại trang chủ');if(r){document.location = '<?= base_url() ?>';  }</script>;
<?php endif ?>


  <!--================End Cart Area =================-->

