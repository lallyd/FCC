<div class="container">
	<h2>Status List</h2>
	<p><a href="<?php echo Uri::Create('status/add'); ?>" class="btn btn-inverse"><i class="icon-pencil icon-white"></i> New Status</a></p>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th class="span1">ID</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($status as $s): ?>
			<tr>
				<td><?php echo $s->id; ?></td>
				<td><?php echo $s->status; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>