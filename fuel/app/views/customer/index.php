<div class="container">
	<h2>Customer List</h2>
	<form class="form-search">
    	<input type="text" class="search-query" placeholder="Search">
    </form>

    <p><a href="<?php echo Uri::Create('customer/add'); ?>" class="btn btn-inverse"><i class="icon-pencil icon-white"></i> New Customer</a></p>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact Number</th>
				<th>View</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($customers as $c): ?>
			<tr>
				<td><?php echo $c->id; ?></td>
				<td><?php echo $c->name; ?></td>
				<td><?php echo $c->email; ?></td>
				<td><?php echo $c->contact_number; ?></td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("customer/view/".$c->id); ?>"><i class="icon-eye-open"></i></a></td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("customer/edit/".$c->id); ?>"><i class="icon-pencil"></i></a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>