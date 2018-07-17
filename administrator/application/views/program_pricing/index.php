<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Program Pricing Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('program_pricing/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Program Id</th>
						<th>Price</th>
						<th>Weeks</th>
						<th>Text</th>

						<th>Actions</th>
                    </tr>
                    <?php foreach($program_pricing as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['program_id']; ?></td>
						<td><?php echo $p['price']; ?></td>
						<td><?php echo $p['weeks']; ?></td>
						<td><?php echo $p['text']; ?></td>

						<td>
                            <a href="<?php echo site_url('program_pricing/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('program_pricing/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
