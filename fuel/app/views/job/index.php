<div class="container">
	<h2>Job List</h2>
	<form class="form-search">
    	<input type="text" class="search-query" placeholder="Search">
    </form>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>View</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Samsung GTX180</td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("job/view/"); ?>"><i class="icon-eye-open"></i></a></td>
				<td class="span1 text-center"><a href="<?php echo Uri::Create("job/edit/"); ?>"><i class="icon-pencil"></i></a></td>
			</tr>
		</tbody>
	</table>
</div>