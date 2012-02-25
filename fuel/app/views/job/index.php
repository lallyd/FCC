<div class="container">
	<h2>Job List</h2>
	<form class="form-search">
    	<input type="text" class="search-query" placeholder="Search">
    </form>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Description</th>
				<th>Customer</th>
				<th>View</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($jobs as $j): ?>
			<tr>
				<td><?php echo $j->id; ?></td>
				<td><?php echo $j->item_description; ?></td>
				<td><?php echo $j->customer_id; ?></td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("job/view/".$j->id); ?>"><i class="icon-eye-open"></i></a></td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("job/edit/".$j->id); ?>"><i class="icon-pencil"></i></a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>