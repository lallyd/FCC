<div class="container">
   <p><a href="<?php echo Uri::Create('job/edit/'.$job->id); ?>" class="btn btn-inverse"><i class="icon-pencil icon-white"></i> Edit Job</a></p>
	<h2><?php echo $job->item_description; ?></h2>
	<table class="table table-striped table-bordered">
   	<tbody>
   		<tr>
   			<td class="title">ID</td>
   			<td><?php echo $job->id; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Status</td>
   			<td><?php echo $job->status->status; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Customer</td>
   			<td><?php echo $job->customer->name; ?></td>
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
   			<td><?php echo $job->user->name; ?></td>
   		</tr>
   		<tr>
   			<td class="title">Created At</td>
   			<td><?php echo date('jS M Y @ g:ia', $job->created_at); ?></td>
   		</tr>
   		<tr>
   			<td class="title">Last Updated</td>
   			<td><?php echo date('jS M Y @ g:ia', $job->updated_at); ?></td>
   		</tr>
   		<tr>
   			<td class="title">Shop</td>
   			<td><?php echo $job->shop->location; ?></td>
   		</tr>
   	</tbody>
    </table>

   <h2>Add Note</h2>
   <form class="well" method="post" action="<?php echo Uri::Create("job/add_note/". $job->id); ?>">
      <textarea class="span10" name="note"></textarea>
      <button class="btn btn-inverse" style="margin-top: 15px; margin-left: 15px;"><i class="icon-plus icon-white"></i> Add Note</button>
   </form>

   <h2>Notes</h2>

   <?php if (count($job->note) == 0): ?>
   <p class="well">None yet</p>
   <?php else: ?>
   <?php foreach ($job->note as $n): ?>
   <div class="well">
      <small>Created <?php echo date('jS M Y @ g:ia', $n->created_at); ?> by <?php echo $n->user->name; ?></small>
      <p><?php echo $n->content; ?></p>      
   </div>
   <?php endforeach; ?>
   <?php endif; ?>
    
</div>