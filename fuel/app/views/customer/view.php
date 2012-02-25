<div class="container">
   <p><a href="<?php echo Uri::Create('customer/edit/'.$customer->id); ?>" class="btn btn-inverse"><i class="icon-pencil icon-white"></i> Edit Customer</a></p>
	<h2><?php echo $customer->name; ?></h2>
	<table class="table table-striped table-bordered">
   	<tbody>
   		<tr>
   			<td class="title">ID</td>
   			<td><?php echo $customer->id; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Email</td>
   			<td><?php echo $customer->email; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Contact Number</td>
   			<td><?php echo $customer->contact_number; ?></td>
   		</tr>
   	</tbody>
    </table>
    
</div>