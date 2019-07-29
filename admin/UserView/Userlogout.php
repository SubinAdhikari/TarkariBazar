<?php
session_start();
include '../../app/call.php';
session_destroy();
redirect('../frontend/Frontendhome.php');
?> 