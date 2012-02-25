<div class="container">
    <form class="form-horizontal">
	    <fieldset>
	   	 <legend>Edit Account</legend>
		    <div class="control-group">
			    <label class="control-label" for="name">Name</label>
			    <div class="controls">
				    <input type="text" class="input-xlarge" id="name" name="name">
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="contact-number">Contact Number</label>
			    <div class="controls">
				    <input type="text" class="input-xlarge" id="contact-number" name="contact_number">
			    </div>
		    </div>
		    <div class="form-actions">
	            <input class="btn btn-success" type="submit" value="Save" />
	            <a href="<?php echo Uri::Create("user"); ?>" class="btn btn-danger">Cancel</a>
          </div>
	    </fieldset>
    </form>
</div>