<?php
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "inventariousuarios.mysql.database.azure.com", "irismtz@inventariousuarios", "Martinez19", "crud_basico", 3306);
?>
