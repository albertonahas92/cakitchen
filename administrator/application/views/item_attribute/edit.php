<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Item Attribute Edit</h3>
            </div>
			<?php echo form_open('item_attribute/edit/'.$item_attribute['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="attribute_id" class="control-label">Attribute</label>
						<div class="form-group">
							<select name="attribute_id" class="form-control">
								<option value="">select attribute</option>
								<?php 
								foreach($all_attributes as $attribute)
								{
									$selected = ($attribute['id'] == $item_attribute['attribute_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$attribute['id'].'" '.$selected.'>'.$attribute['title'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_id" class="control-label">Item</label>
						<div class="form-group">
							<select name="item_id" class="form-control">
								<option value="">select item</option>
								<?php 
								foreach($all_items as $item)
								{
									$selected = ($item['id'] == $item_attribute['item_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$item['id'].'" '.$selected.'>'.$item['title'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="value" class="control-label">Value</label>
						<div class="form-group">
							<input type="text" name="value" value="<?php echo ($this->input->post('value') ? $this->input->post('value') : $item_attribute['value']); ?>" class="form-control" id="value" />
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