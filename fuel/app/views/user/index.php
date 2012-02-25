<div class="container">
	<h1>My Account</h1>
	<br />
	<table class="table table-striped table-bordered">
   	<tbody>
   		<tr>
   			<td class="title">Username</td>
   			<td><?php echo $user->username; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Name</td>
   			<td><?php echo $user->name; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Contact Number</td>
   			<td><?php echo $user->contact_number; ?></td>
   		</tr>
   	</tbody>
    </table>

    <a href="<?php echo Uri::Create('user/edit'); ?>" class="btn btn-inverse"><i class="icon-pencil icon-white"></i> Edit Details</a>
</div>