<div class="container">
   <p><a href="<?php echo Uri::Create('shop/edit/'.$shop->id); ?>" class="btn btn-inverse"><i class="icon-pencil icon-white"></i> Edit Shop</a></p>
	<h2><?php echo $shop->location; ?></h2>
	<table class="table table-striped table-bordered">
   	<tbody>
   		<tr>
   			<td class="title">ID</td>
   			<td><?php echo $shop->id; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Email</td>
   			<td><?php echo $shop->email; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Contact Number</td>
   			<td><?php echo $shop->contact_number; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Skype</td>
   			<td><?php echo $shop->skype; ?></td>
   		</tr>
   	</tbody>
    </table>
    
</div>