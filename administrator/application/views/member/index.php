<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Members Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('member/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Image</th>
						<th>Facebook</th>
						<th>Twitter</th>
						<th>Google</th>
						<th>Position</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($members as $m){ ?>
                    <tr>
						<td><?php echo $m['id']; ?></td>
						<td><?php echo $m['name']; ?></td>
                        <td><img src="<?php echo site_url('/uploads/members/'.$m['image']); ?>" width="50" alt=""></td>
						<td><?php echo $m['facebook']; ?></td>
						<td><?php echo $m['twitter']; ?></td>
						<td><?php echo $m['google']; ?></td>
						<td><?php echo $m['position']; ?></td>
						<td>
                            <a href="<?php echo site_url('member/edit/'.$m['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('member/remove/'.$m['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
