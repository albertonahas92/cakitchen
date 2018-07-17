<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Gallery Slider Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('gallery_slider/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Title</th>
						<th>Image</th>
						<th>Text</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($gallery_slider as $h){ ?>
                    <tr>
						<td><?php echo $h['title']; ?></td>
                        <td><img src="<?php echo site_url('/uploads/'.$h['image']); ?>" width="50" alt=""></td>
						<td><?php echo $h['text']; ?></td>
						<td>
                            <a href="<?php echo site_url('gallery_slider/edit/'.$h['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('gallery_slider/remove/'.$h['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
