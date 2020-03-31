
<div id="nav"
<a href="index.php">Home</a>
<?php if(!IsUserLoggedIn()) : ?>
	<a href="index.php?M=user&P=login">Login</a>
	<a href="index.php?M=user&P=register">Register</a>
<?php else : ?>
	<a href="index.php?M=user&P=logout">Logout</a>
<?php endif; ?>
</div>