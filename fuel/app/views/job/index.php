<div class="container">
	<h2>Job List</h2>
	<form class="form-search">
    	<input type="text" class="search-query" placeholder="Search">
    </form>
    
    <p>    
    <a class="btn btn-inverse" href="<?php echo Uri::Create("job/?date=".(Input::Get("date")=="asc"?"desc":"asc")); ?>"> Sort by date </a>
    <a class="btn btn-inverse" href="<?php echo Uri::Create("job/"); ?>"> Sort by status </a>
    <a href="<?php echo Uri::Create('job/add'); ?>" class="btn btn-inverse"><i class="icon-pencil icon-white"></i> New Job</a></p>

	<table class="table table-striped table-bordered">	
		<thead>
			<tr>
				<th>ID</th>
				<th>Description</th>
				<th>Customer</th>
				<th>Status</th>
				<th>View</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($jobs as $j): ?>
			<tr class="<?php echo $j->highlight_class(); ?>">
				<td><?php echo $j->id; ?></td>
				<td><?php echo $j->item_description; ?></td>
				<td><?php echo $j->customer->name; ?></td>
				<td><?php echo $j->status->status; ?></td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("job/view/".$j->id); ?>"><i class="icon-eye-open"></i></a></td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("job/edit/".$j->id); ?>"><i class="icon-pencil"></i></a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>