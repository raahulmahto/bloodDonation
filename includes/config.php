<?php 
// DB credentials.
define('DB_HOST','adaptable-prod.database.windows.net');
define('DB_USER','blooddonation-main-db-0ef545b93d3b06770');
define('DB_PASS','w5WPqaVsX7zTUKxU8qagutadxMQDZp');
define('DB_NAME','blooddonation-main-db-0ef545b93d3b06770:w5WPqaVsX7zTUKxU8qagutadxMQDZp@adaptable-prod.database.windows.net:1433/blooddonation-main-db-0ef545b93d3b06770');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
