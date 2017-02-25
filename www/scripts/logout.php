<?php
session_start();
session_unset();
session_destroy();
header('Location: http://squareonefeedback.com/CA_dept/admin-panel.php');
?>