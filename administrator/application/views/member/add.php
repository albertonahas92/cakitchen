<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Member Add</h3>
            </div>
            <?php echo form_open_multipart('member/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>

                    <div class="col-md-6">
                        <label for="image" class="control-label">Image</label>
                        <!-- image-preview-filename input [CUT FROM HERE]-->
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                                <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="image" value="<?php echo $this->input->post('image'); ?>" id="image"/> <!-- rename it -->
                    </div>
                </span>
                        </div><!-- /input-group image-preview [TO HERE]-->

                    </div>


					<div class="col-md-6">
						<label for="facebook" class="control-label">Facebook</label>
						<div class="form-group">
							<input type="text" name="facebook" value="<?php echo $this->input->post('facebook'); ?>" class="form-control" id="facebook" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="twitter" class="control-label">Twitter</label>
						<div class="form-group">
							<input type="text" name="twitter" value="<?php echo $this->input->post('twitter'); ?>" class="form-control" id="twitter" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="google" class="control-label">Google</label>
						<div class="form-group">
							<input type="text" name="google" value="<?php echo $this->input->post('google'); ?>" class="form-control" id="google" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="position" class="control-label">Position</label>
						<div class="form-group">
							<input type="text" name="position" value="<?php echo $this->input->post('position'); ?>" class="form-control" id="position" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>