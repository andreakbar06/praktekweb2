<?php 
include 'view/BerandaUI.php';

$brd = new BerandaUI();

$brd->tampilLengkap();

print_r(PDO::getAvailableDrivers());
 ?>