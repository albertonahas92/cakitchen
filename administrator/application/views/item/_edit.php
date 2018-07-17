<div class="row" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Item Edit</h3>
            </div>
			<?php echo form_open('item/edit/'.$item['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_featured" value="1" <?php echo ($item['is_featured']==1 ? 'checked="checked"' : ''); ?> id='is_featured' />
							<label for="is_featured" class="control-label">Is Featured</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $item['title']); ?>" class="form-control" id="title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="text" class="control-label">Text</label>
						<div class="form-group">
							<input type="text" name="text" value="<?php echo ($this->input->post('text') ? $this->input->post('text') : $item['text']); ?>" class="form-control" id="text" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_title" class="control-label">Sub Title</label>
						<div class="form-group">
							<input type="text" name="sub_title" value="<?php echo ($this->input->post('sub_title') ? $this->input->post('sub_title') : $item['sub_title']); ?>" class="form-control" id="sub_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="serving_size" class="control-label">Serving Size</label>
						<div class="form-group">
							<input type="text" name="serving_size" value="<?php echo ($this->input->post('serving_size') ? $this->input->post('serving_size') : $item['serving_size']); ?>" class="form-control" id="serving_size" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="serving_per_container" class="control-label">Serving Per Container</label>
						<div class="form-group">
							<input type="text" name="serving_per_container" value="<?php echo ($this->input->post('serving_per_container') ? $this->input->post('serving_per_container') : $item['serving_per_container']); ?>" class="form-control" id="serving_per_container" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="calories" class="control-label">Calories</label>
						<div class="form-group">
							<input type="text" name="calories" value="<?php echo ($this->input->post('calories') ? $this->input->post('calories') : $item['calories']); ?>" class="form-control" id="calories" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="calories_from_fat" class="control-label">Calories From Fat</label>
						<div class="form-group">
							<input type="text" name="calories_from_fat" value="<?php echo ($this->input->post('calories_from_fat') ? $this->input->post('calories_from_fat') : $item['calories_from_fat']); ?>" class="form-control" id="calories_from_fat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cat_id" class="control-label">Cat Id</label>
						<div class="form-group">
							<input type="text" name="cat_id" value="<?php echo ($this->input->post('cat_id') ? $this->input->post('cat_id') : $item['cat_id']); ?>" class="form-control" id="cat_id" />
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