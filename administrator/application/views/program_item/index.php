<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Program Item Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('program_item/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Program Id</th>
						<th>Day</th>
						<th>Meal</th>
						<th>Item Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($program_item as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['program_id']; ?></td>
						<td><?php echo $p['day']; ?></td>
						<td><?php echo $p['meal']; ?></td>
						<td><?php echo $p['item_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('program_item/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('program_item/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
