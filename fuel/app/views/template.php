<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
</head>
<body>
	<div class="navbar">
	    <div class="navbar-inner">
		    <div class="container">

		    	    <a class="brand" href="#">
				    Fylde Computer Centre
				    </a>

		        <ul class="nav">
				    <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
				    <li><a href="#">Job</a></li>
				    <li><a href="#">Customer</a></li>
				    <li><a href="#">Shop</a></li>
				    <li><a href="#">Status</a></li>
				    <li><a href="#">Notes</a></li>
				    <li><a href="#">Account</a></li>
				</ul>

				<ul class="nav pull-right">
				    <li><a href="<?php echo Uri::Create('auth/login'); ?>">Login</a></li>
				    <li><a href="<?php echo Uri::Create('auth/logout'); ?>">Logout</a></li>
			    </ul>
		    </div>
	    </div>
    </div>

    <div id="wrapper">
        <div id="content">
            <?php echo $content; ?>
        </div>
    </div>
</body>
</html>