<div class="container">
    <form id="customer-form" class="form-horizontal" method="post" action="">
	    <fieldset>
	   	 <legend><?php echo $action; ?> Customer</legend>
	   	 	<div class="control-group">
			    <label class="control-label" for="name">Name</label>
			    <div class="controls">
				   <input type="text" class="span4" id="name" name="name" value="<?php echo $customer->name; ?>">
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="email">Email</label>
			    <div class="controls">
				   <input type="text" class="span4" id="email" name="email" value="<?php echo $customer->email; ?>">
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="contact-number">Contact Number</label>
			    <div class="controls">
				   <input type="text" class="span4" id="contact-number" name="contact_number" value="<?php echo $customer->contact_number; ?>">
			    </div>
		    </div>
		    <div class="form-actions">
	            <input class="btn btn-success" type="submit" value="Save" />
	            <a href="<?php echo Uri::Create("customer"); ?>" class="btn btn-danger">Cancel</a>
          </div>
	    </fieldset>
    </form>
</div>