<?php
// app/controllers/indexController.php

// Change this to your twig directory
// Its instance is at '/views/'
$twig_dir='/home/'; // meaning /views/home/

// Don't change this!
require_once __DIR__.'/../Helpers/twig.php';
 

// Load the Twig template
$template = $twig->load('HelloWorld.twig');


// add your custom variable either from database or your own
$title="Hello World Website!";

 // Render the template with variables
 echo $template->render([
    
    'title' => $title,
    // add more as you want

]);




