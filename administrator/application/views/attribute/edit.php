<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Attribute Edit</h3>
            </div>
			<?php echo form_open('attribute/edit/'.$attribute['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_essential" value="1" <?php echo ($attribute['is_essential']==1 ? 'checked="checked"' : ''); ?> id='is_essential' />
							<label for="is_essential" class="control-label"><span class="text-danger">*</span>Is Essential</label>
							<span class="text-danger"><?php echo form_error('is_essential');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="parent" class="control-label">Attribute</label>
						<div class="form-group">
							<select name="parent" class="form-control">
								<option value="">select attribute</option>
								<?php 
								foreach($all_attributes as $attribute)
								{
									$selected = ($attribute['id'] == $attribute['parent']) ? ' selected="selected"' : "";

									echo '<option value="'.$attribute['id'].'" '.$selected.'>'.$attribute['title'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $attribute['title']); ?>" class="form-control" id="title" />
							<span class="text-danger"><?php echo form_error('title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="unit" class="control-label"><span class="text-danger">*</span>Unit</label>
						<div class="form-group">
							<input type="text" name="unit" value="<?php echo ($this->input->post('unit') ? $this->input->post('unit') : $attribute['unit']); ?>" class="form-control" id="unit" />
							<span class="text-danger"><?php echo form_error('unit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="daily" class="control-label"><span class="text-danger">*</span>Daily</label>
						<div class="form-group">
							<input type="text" name="daily" value="<?php echo ($this->input->post('daily') ? $this->input->post('daily') : $attribute['daily']); ?>" class="form-control" id="daily" />
							<span class="text-danger"><?php echo form_error('daily');?></span>
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