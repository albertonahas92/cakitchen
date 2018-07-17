<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Program Item Add</h3>
            </div>
            <?php echo form_open('program_item/add'); ?>
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
									$selected = ($program['id'] == $this->input->post('program_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$program['id'].'" '.$selected.'>'.$program['title'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="day" class="control-label"><span class="text-danger">*</span>Day</label>
						<div class="form-group">
							<select name="day" class="form-control">
								<option value="">select</option>
								<?php 
								$day_values = array(
									'1'=>'Day 1',
									'2'=>'Day 2',
									'3'=>'Day 3',
									'4'=>'Day 4',
								);

								foreach($day_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('day')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('day');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="meal" class="control-label"><span class="text-danger">*</span>Meal</label>
						<div class="form-group">
							<select name="meal" class="form-control">
								<option value="">select</option>
								<?php 
								$meal_values = array(
									'1'=>'Breakfast',
									'2'=>'Lunch',
									'3'=>'Dinner',
									'4'=>'Snack',
								);

								foreach($meal_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('meal')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('meal');?></span>
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
									$selected = ($item['id'] == $this->input->post('item_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$item['id'].'" '.$selected.'>'.$item['title'].'</option>';
								} 
								?>
							</select>
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