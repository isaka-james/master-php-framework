<?php
// The 'homePage'

// Change this to your twig directory
// Its instance is at '/views/'
$twig_dir='/home/'; // meaning /views/home/

// Don't change this!
require_once __DIR__.'/../Helpers/twig.php';
 

// Load the Twig template
$template = $twig->load('index.twig');



// add your custom variable either from database or your own
$title="Chat with Isaka-James!";
$myname="Isack James";
$img_link="https://avatars.githubusercontent.com/u/76619967?v=4";
$last_online="online";

 // Render the template with variables
 echo $template->render([
    
    'title' => $title,
    'myname' => $myname,
    'image' => $img_link,
    'last_online' => $last_online,
    /*
    'my_list' => $my_list,
    'my_lists' => $my_lists,
    */
]);







