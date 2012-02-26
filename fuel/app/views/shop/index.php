<div class="container">
	<h2>Shop List</h2>
	<form class="form-search">
    	<input type="text" class="search-query" placeholder="Search">
    </form>

    <p><a href="<?php echo Uri::Create('shop/add'); ?>" class="btn btn-inverse"><i class="icon-pencil icon-white"></i> New Shop</a></p>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Location</th>
				<th>Contact Number</th>
				<th>View</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($shop as $s): ?>
			<tr>
				<td><?php echo $s->location; ?></td>
				<td><?php echo $s->contact_number; ?></td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("shop/view/".$s->id); ?>"><i class="icon-eye-open"></i></a></td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("shop/edit/".$s->id); ?>"><i class="icon-pencil"></i></a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>