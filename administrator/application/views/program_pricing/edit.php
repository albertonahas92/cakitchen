<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Program Pricing Edit</h3>
            </div>
			<?php echo form_open('program_pricing/edit/'.$program_pricing['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="program_id" class="control-label">Program</label>
						<div class="form-group">
							<select name="program_id" class="form-control">
								<option value="">select program</option>
								<?php 
								foreach($all_programs as $program)
								{
									$selected = ($program['id'] == $program_pricing['program_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$program['id'].'" '.$selected.'>'.$program['title'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="price" class="control-label"><span class="text-danger">*</span>Price</label>
						<div class="form-group">
							<input type="text" name="price" value="<?php echo ($this->input->post('price') ? $this->input->post('price') : $program_pricing['price']); ?>" class="form-control" id="price" />
							<span class="text-danger"><?php echo form_error('price');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="weeks" class="control-label"><span class="text-danger">*</span>Weeks</label>
						<div class="form-group">
							<input type="text" name="weeks" value="<?php echo ($this->input->post('weeks') ? $this->input->post('weeks') : $program_pricing['weeks']); ?>" class="form-control" id="weeks" />
							<span class="text-danger"><?php echo form_error('weeks');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="text" class="control-label"><span class="text-danger">*</span>Text</label>
						<div class="form-group">
							<input type="text" name="text" value="<?php echo ($this->input->post('text') ? $this->input->post('text') : $program_pricing['text']); ?>" class="form-control" id="text" />
							<span class="text-danger"><?php echo form_error('text');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="female_calories" class="control-label"><span class="text-danger">*</span>Female Calories</label>
						<div class="form-group">
							<input type="text" name="female_calories" value="<?php echo ($this->input->post('female_calories') ? $this->input->post('female_calories') : $program_pricing['female_calories']); ?>" class="form-control" id="female_calories" />
							<span class="text-danger"><?php echo form_error('female_calories');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="male_calories" class="control-label"><span class="text-danger">*</span>Male Calories</label>
						<div class="form-group">
							<input type="text" name="male_calories" value="<?php echo ($this->input->post('male_calories') ? $this->input->post('male_calories') : $program_pricing['male_calories']); ?>" class="form-control" id="male_calories" />
							<span class="text-danger"><?php echo form_error('male_calories');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="notes" class="control-label"><span class="text-danger">*</span>Notes</label>
						<div class="form-group">
							<input type="text" name="notes" value="<?php echo ($this->input->post('notes') ? $this->input->post('notes') : $program_pricing['notes']); ?>" class="form-control" id="notes" />
							<span class="text-danger"><?php echo form_error('notes');?></span>
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