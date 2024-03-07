<?php

/************************************************|
 *         Welcome, This is the,                 |
 *         Heart of this Project!                |
 *  - All the important variables are here!      |
 *    i.e database, project details and many..   |
 *                                               |
 ************************************************/


$PROJECT_NAME="";
$PROJECT_VERSION="v0.0.1";
$PROJECT_OWNER="";
$MAINTANANCE_EMAIL="customercare@webasitename.com"; // Put the organization's customer care email or phone







/***************  $PROJECT_STATUS ****************|
 *     1=> "development",
 *     2=> "production",
 *     3=> "maintanance"
 * 
 * ***********************************************/
$PROJECT_STATUS=2;







/************  DATABASE SERVER SETTINGS *************|
 *  Currently db: mysql
 * 
 * 
 * 
 * 
 * 
 * **************************************************/
$SERVER_NAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="masterplan";





/************  CUSTOM SERVER SETTINGS **************|
 * 
 * 
 * 
 * 
 * 
 * 
 * **************************************************/
$NOT_FOUND_ROUTE="/404";
$SERVER_TIME="";

















// Don't delete this require_once -> This is route helper
require_once __DIR__.'/Helpers/project-helper.php';