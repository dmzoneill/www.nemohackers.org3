<?php
$database_host = 'localhost'; // leave set to localhost unless database is on another host
$database_port = 'n'; // leave n for default port
$database = 'nemo_db1'; // the name of the mysql database
                     // that the cart will store its information in
$database_uname = 'nemo'; // username with full read/write privs to database
$database_pword = 'eeq9nemo'; // password for username for database
$cookie_domain = '.r-fx.org'; // .domain.com  must have two periods (.)

// ****************do not edit below
if ($database_port=='n'){
$database_host_port = $database_host;
} else {
$database_host_port = "$database_host:$database_port";
}


?>
