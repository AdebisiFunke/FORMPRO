<?php //place this file outside htdocs directory
// Set the database access information as constants:
DEFINE ('DB_USER', 'Database Username Here');
DEFINE ('DB_PASSWORD','Database Password Here');
DEFINE ('DB_HOST', 'Database Host Name');
DEFINE ('DB_NAME', 'Database Name Here');

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//note that if connected to database a blank webpage will be seen
// If no connection could be made, trigger an error:
if (!$dbc) {
	trigger_error ('can not connect to MySQL:' . mysqli_connect_error() );
} else { // Otherwise, set the encoding:
	mysqli_set_charset($dbc, 'utf8');
}

//omit clossing php tag to avoid header already sent error!