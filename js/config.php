<?php
/*
                     __     __  _______   __    __
                    |  \   |  \|       \ |  \  |  \
  _______  ________ | $$   | $$| $$$$$$$\| $$\ | $$
 /       \|        \| $$   | $$| $$__/ $$| $$$\| $$
|  $$$$$$$ \$$$$$$$$ \$$\ /  $$| $$    $$| $$$$\ $$
| $$        /    $$   \$$\  $$ | $$$$$$$ | $$\$$ $$
| $$_____  /  $$$$_    \$$ $$  | $$      | $$ \$$$$
 \$$     \|  $$    \    \$$$   | $$      | $$  \$$$
  \$$$$$$$ \$$$$$$$$     \$     \$$       \$$   \$$

#####################################################################
# config.php ########################################################                                                 
#####################################################################
# This is the main configuration file for czVPN. It should be       #
# placed outside of the web root directory so it is not readable on #
# the public web.                                                   #
#####################################################################
*/


// Basic Details 
define('SITE_URL', 'http://localhost');
define('SITE_TITLE', 'czVPN');
define('SITE_LOGO', 'logo.png');

// Database details 
define('DB_NAME', 'users_db');
define('DB_USER', 'user_system');
define('DB_PASS', 'pw123');
define('DB_HOST', 'localhost');
?>