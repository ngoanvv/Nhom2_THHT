<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

/*
   8/4/2015
   Hospice Volunteer Solutions:
      For the initial installation, you can use the database installation
      utility to set these values, as well as creating the initial
      database schema. For details, please see the Hospice Volunteer Solutions
      user's guide.
*/
$db['default']['hostname']   = 'localhost';             // change this to match your host
$db['default']['username']   = 'root';            // change this to match your user name
$db['default']['password']   = '';            // change this to match your password
$db['default']['database']   = 'hvol';        // change this to match your database name
$db['default']['passPhrase'] = '';    // used to encrypt patient / patient contact information

$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;






//$db['production']['hostname'] = "127.0.0.1";
//$db['production']['username'] = "postgres";
//$db['production']['password'] = "tanda034";
//$db['production']['database'] = "thht";
//$db['production']['dbdriver'] = "postgre";
//$db['production']['dbprefix'] = "";
//$db['production']['pconnect'] = TRUE;
//$db['production']['db_debug'] = TRUE;
//$db['production']['cache_on'] = FALSE;
//$db['production']['cachedir'] = "";
//$db['production']['char_set'] = "utf8";
//$db['production']['dbcollat'] = "utf8_general_ci";
//$db['production']['swap_pre'] = '';
//$db['production']['autoinit'] = TRUE;
//$db['production']['stricton'] = FALSE;

//
//$db['thht'] = array(
//    'dsn'   => 'pgsql:host=localhost;port=5432;dbname=thht;user=postgres;password=tanda034',
//    'hostname' => 'localhost',
//    'username' => 'postgres',
//    'password' => 'tanda034',
//    'database' => 'thht',
//    'dbdriver' => 'postgre',
//    'dbprefix' => '',
//    'pconnect' => FALSE,
//    'db_debug' => (ENVIRONMENT !== 'production'),
//    'cache_on' => FALSE,
//    'cachedir' => '',
//    'char_set' => 'utf8',
//    'dbcollat' => 'utf8_general_ci',
//    'swap_pre' => '',
//    'encrypt' => FALSE,
//    'compress' => FALSE,
//    'stricton' => FALSE,
//    'failover' => array(),
//    'save_queries' => TRUE,
//);
 $db['chikitsa'] = array(
     //'dsn'   => 'pgsql:host=localhost;port=5432;dbname=thht;user=postgres;password=',
     'hostname' => 'localhost',
     'username' => 'root',
     'password' => '',
     'database' => 'chikitsa',
     'dbdriver' => 'mysqli',
     'dbprefix' => 'ck_',
     'pconnect' => FALSE,
     'db_debug' => (ENVIRONMENT !== 'production'),
     'cache_on' => FALSE,
     'cachedir' => '',
     'char_set' => 'utf8',
     'dbcollat' => 'utf8_general_ci',
     'swap_pre' => '',
     'encrypt' => FALSE,
     'compress' => FALSE,
     'stricton' => FALSE,
     'failover' => array(),
     'save_queries' => TRUE,
 );

/* End of file database.php */