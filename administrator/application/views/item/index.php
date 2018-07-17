<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Items Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('item/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Image</th>
						<th>Is Featured</th>
						<th>Title</th>
						<th>Text</th>
						<th>Sub Title</th>
						<th>Serving Size</th>
						<th>Serving Per Container</th>
						<th>Calories</th>
						<th>Calories From Fat</th>
						<th>Cat Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($items as $i){ ?>
                    <tr>

						<td><img src="<?php echo site_url('/uploads/'.$i['image']); ?>" width="50" alt=""></td>
						<td><?php echo $i['is_featured']; ?></td>
						<td><?php echo $i['title']; ?></td>
						<td><?php echo $i['text']; ?></td>
						<td><?php echo $i['sub_title']; ?></td>
						<td><?php echo $i['serving_size']; ?></td>
						<td><?php echo $i['serving_per_container']; ?></td>
						<td><?php echo $i['calories']; ?></td>
						<td><?php echo $i['calories_from_fat']; ?></td>
						<td><?php echo $i['cat_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('item/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('item/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
