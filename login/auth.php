<?php
function isAuthenticated() {
	return $_SESSION['loggedIn'] === true;
}
?>
