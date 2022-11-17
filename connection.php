<?php
echo 'connection attempted';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Check connection
//zoovu
//Z00vu1234

$cert = $_SERVER['DOCUMENT_ROOT'] . "/cert/DigiCertGlobalRootCA.crt.pem";
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, $cert , NULL, NULL);
mysqli_real_connect($con, "zoovudemoshop.mysql.database.azure.com", "zoovu", "Z00vu1234", "demoshop", 3306, MYSQLI_CLIENT_SSL);




?>