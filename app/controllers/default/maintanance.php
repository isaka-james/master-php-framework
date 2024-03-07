<?php
// app/controllers/default/maintanance.php

// Include the bootstrap variables
include __DIR__.'/../../project.php';

// Change this to your twig directory
// Its instance is at '/views/'
$twig_dir='/default/'; // meaning /views/default/

// Don't change this!
require_once __DIR__.'/../../Helpers/twig.php';
 

// Load the Twig template
$template = $twig->load('maintanance.twig');


// add your custom variable either from database or your own
$title="Site is under Maintanance!";

 // Render the template with variables
 echo $template->render([
    
    'title' => $title,
    'contact' => $MAINTANANCE_EMAIL,
    // add more as you want

]);




