<div class="container">
<form class="well form-inline text-center" action="<?php echo Uri::Create('auth/login'); ?>" method="post">
	<div class="container">
		<input type="text" name="username" class="input-medium" placeholder="Username" value="<?php echo Input::Post('username');?>">
		<input type="password" name="password" class="input-medium" placeholder="Password">
		<button type="submit" class="btn btn-inverse">Go</button>
	</div>
</form>
</div>