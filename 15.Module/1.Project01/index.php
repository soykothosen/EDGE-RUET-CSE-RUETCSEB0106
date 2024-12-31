<?php

// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

// Remove the project folder name from the URI (if applicable)
$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0106/15.Module/1.Project01', '', $request);

// Match the requested path
switch ($request) {
    case '/home':
        echo "<h1>Welcome to the Home page!</h1>";
        break;
    case '/about':
        echo "Welcome to the About page!";
        break;
    case '/':
        echo "Welcome to the Default Home page!";
        break;
    case "/page1":
        include"page1.php";
        break;
    
    case "/page2":

        echo "Page 2";
        break;

    default:
        echo "Page not found!";
        break;  

}




?>