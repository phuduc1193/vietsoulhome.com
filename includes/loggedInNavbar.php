<?php
if (isset($_SESSION['email'])) {
	switch ($_SESSION['role']) {
	case '1':
		echo '<li><a href="#"><i class="fa fa-user"></i> Account </a><ul>';
		echo '<li><a href="admin/"><i class="fa fa-wrench"></i> Admin page</a></li>';
		echo '<li><a href="admin/functions/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>';
		echo '</ul></li>';
		break;
	case '3':
		echo '<li><a href="#"><i class="fa fa-user"></i> Account </a><ul>';
		echo '<li><a href="account/"><i class="fa fa-wrench"></i> Account page</a></li>';
		echo '<li><a href="admin/functions/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>';
		echo '</ul></li>';
		break;

	default:
		break;
	}
} else {
	echo '<li><a href="registration/login.php" class="button special">Sign In</a></li>';
}
?>