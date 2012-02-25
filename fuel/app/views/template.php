<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/assets/css/base.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
</head>
<body>
	<div class="navbar">
	    <div class="navbar-inner">
		    <div class="container">

		    	    <a class="brand" href="<?php echo Uri::Create('dashboard'); ?>">
				    Fylde Computer Centre
				    </a>

				
		        <ul class="nav">
				    <li class="active"><a href="<?php echo Uri::Create('dashboard'); ?>"><i class="icon-home icon-white"></i> Home</a></li>
				    <?php if ($user->logged_in()): ?>
				    <li><a href="<?php echo Uri::Create('job'); ?>">Job</a></li>
				    <li><a href="<?php echo Uri::Create('customer'); ?>">Customer</a></li>
				    <li><a href="<?php echo Uri::Create('shop'); ?>">Shop</a></li>
				    <li><a href="<?php echo Uri::Create('status'); ?>">Status</a></li>
				    <li><a href="<?php echo Uri::Create('notes'); ?>">Notes</a></li>
				    <li><a href="<?php echo Uri::Create('user'); ?>">My Account</a></li>
					<?php endif; ?>
				</ul>

				<ul class="nav pull-right">
					<?php if (!$user->logged_in()): ?>
				    <li><a href="<?php echo Uri::Create('auth/login'); ?>">Login</a></li>
					<?php else: ?>
				    <li><a href="<?php echo Uri::Create('auth/logout'); ?>">Logout</a></li>
					<?php endif; ?>
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