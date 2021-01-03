<?php 
# DATABASE CONNECTION VARIABLES
define("DATABASENAME", getenv('BA_DBNAME'));
define("DATABASEUSER", getenv('BA_DBUSER'));
define("DATABASEDB", getenv('BA_DBDB'));
define("DATABASEPSWD", getenv('BA_DBPSWD'));

# DOMAIN URL
define("DOMAIN", getenv('BA_DOMAIN'));

# NAMESPACE (FOR URL)
define("CNAMESPACE", getenv('C_NAMESPACE'));

#COMBINATION OF DOMAIN AND NAMESPACE
define("URL", DOMAIN ."/". CNAMESPACE);
?>