<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Programs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('program/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Icon</th>
						<th>Title</th>
						<th>Text</th>
						<th>Image</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($programs as $p){ ?>
                    <tr>
                        <td><img src="<?php echo site_url('/uploads/'.$p['icon']); ?>" width="50" alt=""></td>
						<td><?php echo $p['title']; ?></td>
						<td><?php echo $p['text']; ?></td>
						<td><?php echo $p['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('program/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('program/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
