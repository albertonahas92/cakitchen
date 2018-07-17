<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Testmonial Edit</h3>
            </div>
			<?php echo form_open_multipart('testominal/edit/'.$testominal['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $testominal['title']); ?>" class="form-control" id="title" />
						</div>
					</div>
                    <div class="col-md-6">
                        <label for="title" class="control-label">Image</label>
                        <img width="50" src="<?php echo site_url('/uploads/'.$testominal['image']); ?>" alt="">
                        <div class="form-group">
                            <input type="file" name="image" value=""
                                   class="form-control" id="image"/>
                        </div>
                    </div>
					<div class="col-md-6">
						<label for="text" class="control-label">Text</label>
						<div class="form-group">
							<textarea name="text" class="form-control" id="text"><?php echo ($this->input->post('text') ? $this->input->post('text') : $testominal['text']); ?></textarea>
						</div>
					</div>

                    <div class="col-md-6">
                        <label for="author" class="control-label">Author</label>
                        <div class="form-group">
                            <input type="text" name="author" value="<?php echo ($this->input->post('author') ? $this->input->post('author') : $testominal['author']); ?>" class="form-control" id="author" />
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