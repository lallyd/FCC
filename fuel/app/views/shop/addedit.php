<div class="container">
    <form id="customer-form" class="form-horizontal" method="post" action="">
	    <fieldset>
	   	 <legend><?php echo $action; ?> Shop</legend>
	   	 	<div class="control-group">
			    <label class="control-label" for="location">Location</label>
			    <div class="controls">
				   <input type="text" class="span4" id="location" name="location" value="<?php echo $shop->location; ?>">
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="email">Email</label>
			    <div class="controls">
				   <input type="text" class="span4" id="email" name="email" value="<?php echo $shop->email; ?>">
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="contact-number">Contact Number</label>
			    <div class="controls">
				   <input type="text" class="span4" id="contact-number" name="contact_number" value="<?php echo $shop->contact_number; ?>">
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="skype">Skype</label>
			    <div class="controls">
				   <input type="text" class="span4" id="skype" name="skype" value="<?php echo $shop->skype; ?>">
			    </div>
		    </div>
		    <div class="form-actions">
	            <input class="btn btn-success" type="submit" value="Save" />
	            <a href="<?php echo Uri::Create("shop"); ?>" class="btn btn-danger">Cancel</a>
          </div>
	    </fieldset>
    </form>
</div>