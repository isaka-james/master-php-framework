<div align="center">
    <h2>🌟 master-php 🚀 </h2>
  <p>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" height="15" alt="php logo" />  Framework 🥀
  </p>
      <img src="https://komarev.com/ghpvc/?username=master-php&label=master-php&color=0e75b6&style=flat" alt="since 7 March,2024" />
</div>


<div>
  <h3>⏰ What is this? 📒</h3>
  <p>This PHP framework, lovingly crafted by Masterplan 🐘, is designed to empower vanilla PHP developers with control and responsibility over their projects. You can find more about Masterplan on <a href="https://github.com/isaka-james">GitHub</a> 🚀.</p>



</div>

<div>
  <h3> Reasons to use master-php? </h3>
  <p>This isn't just another framework! For those who like to dive deep into their projects, this project structure is perfect for you. It offers customizable options from the database and beyond. Why not give it a try?</p>
  
  <p>Oh, I forgot to mention, hosting is a breeze. Simply deploy your project to the server's root directory, and bloom 💥, it's already hosted!</p>

</div>

## Key Features ✅

- [x] The developer has full control of everything happening!
- [x] The user can add his logic (i.e., Classes) by modifying the bootstrap files (which are well organized to be modified).
- [x] The fastness is very high and memory used is low compared to other frameworks!
- [x] The overall system is the best. (i.e., you can only see errors or do some testings if you are only on a development mode)


## Lets Write "Hello World!"
First, we need to define the route of our page. Routes are located in `app/routes/route.php `. This file,` route`, is among the bootstrap files, so you don't need to create it.

```php
// app/routes/route.php
$routes = [
    '/' => 'indexController',

];

```
We defined the route '/' and passed the controller name as `indexController`. Now we need to create the controller file at the `app/controllers` directory, so we will create the file called *indexController.php* in the `app/controllers` directory.

```php
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

```
Now, as you have seen, we need to create a file named *HelloWorld.twig* at `views/home/`. To clarify, I used Twig as a renderer for HTML and PHP variables/arrays.

```twig
{# views/home/HelloWorld.twig #}
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{ title }}</title>
  {#  assume you have a style at /public/css/style.css #}
  <link rel='stylesheet' href='/public/css/devices.min.css'><link rel="stylesheet" href="/public/css/style.css">

</head>
<body>
  <h1 align="center"> Hellow World! </h1>

  {# also lets assume you have scipt file at '/public/js/script', remember to add '/' before 'public/js/script' #}
  <script src='/public/js/moment.min.js'></script><script  src="/public/js/script.js"></script>
</body>
</html>
```
## Running the server:
As mentioned earlier, this framework is tailored for those who seek control over their projects (*vanilla PHP*). Running the server is the same as with vanilla PHP.

### For Windows users:
```
Just put your files on your favorite server and run the server!
```

### For Linux users:
```bash
php -S localhost:8080
```

### Hosting:
```
Simply place your files in your server's root directory, typically inside '/public/www/'.
```

## Want to explore more?:
I can't cover all the intricacies here, but I highly recommend it for vanilla PHP developers to have the best experience.

## Contributions Needed:
I eagerly await your pull requests. If you have any ideas or logic to implement in this framework, you are warmly welcomed!

## License:
[MIT](LICENSE)