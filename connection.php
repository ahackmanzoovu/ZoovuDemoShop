<?php
// Check connection
//zoovu
//Z00vu1234
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "/cert/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "zoovudemoshop.mysql.database.azure.com", "zoovu", "Z00vu1234", "demoshop", 3306, MYSQLI_CLIENT_SSL);




?>