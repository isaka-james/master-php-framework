<?php
// app/controllers/default/404.php

// Change this to your twig directory
// Its instance is at '/views/'
$twig_dir='/default/'; // meaning /views/default/

// Don't change this!
require_once __DIR__.'/../Helpers/twig.php';
 

// Load the Twig template
$template = $twig->load('404.twig');


// add your custom variable either from database or your own
$title="Page Not Found!";

 // Render the template with variables
 echo $template->render([
    
    'title' => $title,
    // add more as you want

]);




