<?php
require_once('../../private/initialize.php');

// Log out the admin
$session->message('Logout successful. See you next time, ' . $session->user_name . '!');

$session->logout();

redirect_to(url_for('./index.php'));

?>