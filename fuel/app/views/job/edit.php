<div class="container">
    <form class="form-horizontal">
	    <fieldset>
	   	 <legend>Edit Job</legend>
		    <div class="control-group">
			    <label class="control-label" for="name">Status</label>
			    <div class="controls">
				    <select class="span4">
		                <option>1</option>
		                <option>2</option>
		                <option>3</option>
		                <option>4</option>
		                <option>5</option>
		            </select>
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="contact-number">Customer</label>
			    <div class="controls">
				   <input type="text" class="span4" id="contact-number" name="contact_number">
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="contact-number">Fault Description</label>
			    <div class="controls">
				    <textarea class="span4" id="contact-number" name="contact_number"></textarea>
			    </div>
		    </div>
		    <div class="control-group">
			    <label class="control-label" for="contact-number">Shop</label>
			    <div class="controls">
				    <select class="span4">
		                <option>1</option>
		                <option>2</option>
		                <option>3</option>
		                <option>4</option>
		                <option>5</option>
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