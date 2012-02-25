<div class="container">

	<h2><?php echo $job->item_description; ?></h2>
	<table class="table table-striped table-bordered">
   	<tbody>
   		<tr>
   			<td class="title">ID</td>
   			<td><?php echo $job->id; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Status</td>
   			<td><?php echo $job->status_id; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Customer</td>
   			<td><?php echo $job->customer_id; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Fault Description</td>
   			<td><?php echo $job->fault_description; ?></td>
   		</tr>
   	</tbody>
    </table>

    <table class="table table-striped table-bordered">
   	<tbody>
   		<tr>
   			<td class="title">Created By</td>
   			<td><?php echo $job->user_id; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Created At</td>
   			<td><?php echo date('jS M Y', $job->created_at); ?></td>
   		</tr>
   		<tr>
   			<td class="title">Last Updated</td>
   			<td><?php echo date('jS M Y', $job->updated_at); ?></td>
   		</tr>
   		<tr>
   			<td class="title">Shop</td>
   			<td><?php echo $job->shop_id; ?></td>
   		</tr>
   	</tbody>
    </table>

    <h2>Notes</h2>
    <p class="well">None yet</p>

    
</div>