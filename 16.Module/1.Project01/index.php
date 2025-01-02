<?php
include"dbconnect.php";

// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

// Remove the project folder name from the URI (if applicable)
$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0106/16.Module/1.Project01', '', $request);

// Match the requested path
switch ($request) {
    case '/home':

        echo "<h1>Welcome to the Home page!</h1>";

        break;
    case '/about':
       // echo "Welcome to the About page!";

       include"views/about.php";


        break;
    case '/':
        // echo "Welcome to the Default Home page!";

        #header('Content-Type: application/json');

    $sql = "SELECT * FROM `website_info`";
        
    $result = $conn->query($sql);

    $output = $result->fetch_all(MYSQLI_ASSOC);

    #print_r($output);

    #print_r($output[0]['Hero_title']);

    #echo json_encode($output);

    include"views/home.php";

        

    
        break;
    case "/page1":
        include"page1.php";
        break;
    
    case "/page2":

        echo "Page 2";
        break;

   case "/fatchdata":

    #header('Content-Type: application/json');

    $sql = "SELECT * FROM `website_info`";
        
        $result = $conn->query($sql);

        $output = $result->fetch_all(MYSQLI_ASSOC);

        #print_r($output);

        #print_r($output[0]['Hero_title']);

        #echo json_encode($output);

        include"views/home.php";

    break;

    default:
        echo "Page not found!";
        break;  

}




?>