<div class="container">
    <form id="job-form" class="form-horizontal" method="post" action="">
	    <fieldset>
	   	 <legend><?php echo $action; ?> Job</legend>
	   	 	<div class="control-group">
			    <label class="control-label" for="item_description">Item Description</label>
			    <div class="controls">
				   <input type="text" class="span4" id="item_description" name="item_description" value="<?php echo $job->item_description; ?>">
				   <p class="help-block">e.g. Samsung GTX280 (Blue)</p>
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="status">Status</label>
			    <div class="controls">
				    <select id="status" name="status" class="span4">
				    	<?php foreach($status as $s): ?>
		                <option value="<?php echo $s->id; ?>" <?php echo ($s->id == $job->status_id) ? 'selected' : ''; ?>><?php echo $s->status; ?></option>
		                <?php endforeach; ?>
		            </select>
			    </div>
		    </div>
		    <?php if ($job->is_new()): ?>
		    <div class="control-group">
			    <label class="control-label" for="customer">Customer</label>
			    <div class="controls">
			    <input type="text" class="span4" id="customer" name="customer" value="<?php echo $job->customer_id; ?>">
			    <a href="<?php echo Uri::Create('customer/add'); ?>" target="_blank" class="btn btn-inverse">Add Customer</a>
				   
				   <?php /*
				   <select name="customer" id="customer">
				   <?php foreach($customer as $c): ?>
		                <option value="<?php echo $c->id; ?>" <?php echo ($c->id == $job->customer_id) ? 'selected' : ''; ?>><?php echo $c->name; ?></option>
		           <?php endforeach; ?>
		       		</select>
		       		*/?>
			    </div>
		    </div>
			<?php endif; ?>
		    <div class="control-group">
			    <label class="control-label" for="fault_description">Fault Description</label>
			    <div class="controls">
				    <textarea class="span4" id="fault_description" name="fault_description"></textarea>
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="shop">Shop</label>
			    <div class="controls">
				    <select name="shop" id="shop" class="span4">
		                <?php foreach($shop as $s): ?>
		                <option value="<?php echo $s->id; ?>" <?php echo ($s->id == $job->shop_id) ? 'selected' : ''; ?>><?php echo $s->location; ?></option>
		                <?php endforeach; ?>
		            </select>
			    </div>
		    </div>
		    <div class="form-actions">
	            <input class="btn btn-success" type="submit" value="Save" />
	            <a href="<?php echo Uri::Create("job"); ?>" class="btn btn-danger">Cancel</a>
          </div>
	    </fieldset>
    </form>
</div>