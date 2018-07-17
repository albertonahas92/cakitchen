<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Item Ingrident Edit</h3>
            </div>
			<?php echo form_open('item_ingrident/edit/'.$item_ingrident['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="item_id" class="control-label">Item</label>
						<div class="form-group">
							<select name="item_id" class="form-control">
								<option value="">select item</option>
								<?php 
								foreach($all_items as $item)
								{
									$selected = ($item['id'] == $item_ingrident['item_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$item['id'].'" '.$selected.'>'.$item['text'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="text" class="control-label">Text</label>
						<div class="form-group">
							<input type="text" name="text" value="<?php echo ($this->input->post('text') ? $this->input->post('text') : $item_ingrident['text']); ?>" class="form-control" id="text" />
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