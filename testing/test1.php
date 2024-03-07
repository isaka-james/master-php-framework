<?php
/*****************************************************|
 *   This is the file for testing your logics,
 *   make sure you make the project as 'development',
 *   otherwise you won't able to access this file.
 * 
 *****************************************************/


 // Include the Composer autoload file
 require_once __DIR__.'/../vendor/autoload.php';
 
 // Define the name variable
 $nameofme = "masadkfjkdf";
 
 // Define the array or list variable
 $my_list = ["Apple", "Banana", "Orange"];
 $my_lists = [["Apple", "Orange"], ["Banana", "Grape"], ["Mango", "Pineapple"]];
 
 // Create a Twig loader and environment
 $loader = new \Twig\Loader\FilesystemLoader(__DIR__);
 $twig = new \Twig\Environment($loader);
 
 // Load the Twig template
 $template = $twig->load('demo.twig');
 
 // Render the template with variables
 echo $template->render([
     'nameofme' => $nameofme,
     'my_list' => $my_list,
     'my_lists' => $my_lists,
 ]);
 ?>
 