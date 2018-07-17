<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Attributes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('attribute/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">

                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Is Essential</th>
						<th>Parent</th>
						<th>Title</th>
						<th>Unit</th>
						<th>Daily</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($attributes as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['is_essential']; ?></td>
						<td><?php echo $a['parent']; ?></td>
						<td><?php echo $a['title']; ?></td>
						<td><?php echo $a['unit']; ?></td>
						<td><?php echo $a['daily']; ?></td>
						<td>
                            <a href="<?php echo site_url('attribute/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('attribute/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
