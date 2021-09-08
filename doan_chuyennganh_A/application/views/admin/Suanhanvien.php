<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Cập nhật nhân viên</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					     
					     <div class="formRow">
    	<label class="formLeft" for="param_name">Mã nhân viên:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $nhanvien->id_nhanvien; ?>" name="hoten" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    	
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
					     
	<div class="formRow">
    	<label class="formLeft" for="param_name">Họ tên:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $nhanvien->hoten; ?>" name="hoten" id="param_name" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('hoten') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Ngày sinh:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $nhanvien->ngaysinh; ?>" name="ngaysinh" id="param_name" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('ngaysinh') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Giới tính:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $nhanvien->gioitinh; ?>" name="gioitinh" id="param_name" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('gioitinh') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Email:<span class="req"></span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="email" id="param_name" value="<?php echo $nhanvien->email; ?>" _autocheck="true" type="text" ></span>   
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('email') ?></span>		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Số điện thoại:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="sdt" id="param_name" value="<?php echo $nhanvien->sdt; ?>" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('sdt') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">CMND:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="cmnd" id="param_name" value="<?php echo $nhanvien->cmnd; ?>" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('cmnd') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
     <div class="formRow">
    	<label class="formLeft" for="param_name">Địa chỉ:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><textarea rows="3" cols="20" name="diachi" id="param_name" value="" _autocheck="true" type="text"><?php echo $nhanvien->diachi; ?></textarea></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('diachi') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
    
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit" style = "padding-right: 677px; ">
	           			<input value="Cập nhật" class="redB" type="submit">
	           			
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>