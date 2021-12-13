<?php
session_start();
session_destroy();
header('LOCATION: http://localhost/Web1%20atv%20all/Visual/Login.php');
exit();