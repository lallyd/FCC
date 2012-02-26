<div class="container">
    <form id="status-form" class="form-horizontal" method="post" action="">
	    <fieldset>
	   	 <legend>Add Status</legend>
		    <div class="control-group">
			    <label class="control-label" for="status">Status</label>
			    <div class="controls">
				   <input type="text" class="span4" id="status" name="status">
			    </div>
		    </div>
		    <div class="form-actions">
	            <input class="btn btn-success" type="submit" value="Save" />
	            <a href="<?php echo Uri::Create("status"); ?>" class="btn btn-danger">Cancel</a>
          </div>
	    </fieldset>
    </form>
</div>