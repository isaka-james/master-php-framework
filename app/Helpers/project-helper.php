<?php

/******************************************|
 *  Don't you ever modify this file!
 *  This is where the logic of project
 *    is get executed!
 * 
 * 
 ******************************************/

include_once __DIR__.'/../project.php';

if($PROJECT_STATUS==3){
    require_once __DIR__.'/../controllers/default/maintanance.php';
    exit;


}





