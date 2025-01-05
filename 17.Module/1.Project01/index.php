<?php
include"dbconnect.php";

// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

// Remove the project folder name from the URI (if applicable)
$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0106/17.Module/1.Project01', '', $request);

$Base_Url = '/EDGE-RUET-CSE-RUETCSEB0106/17.Module/1.Project01';

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

    // fatch all blog Content

    $sqlblog = "SELECT * FROM `blog`";
        
    $resultblog = $conn->query($sqlblog);

    $outputblog = $resultblog->fetch_all(MYSQLI_ASSOC);

    #print_r($output);

    #print_r($output[0]['Hero_title']);

    #echo json_encode($output);

    include"views/home.php";

        

    
        break;
    case "/page1":
        include"page1.php";
        break;

    case "/registration":
        include"views/registration.php";
        break;

    case "/login":
        include"views/login.php";
        break;

    case "/creatuser":

        // Get form data
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $address = $_POST['address'];

        // echo " Name:".$name;
        // echo " Mobile:".$mobile;
        // echo " Password:".$password;
        // echo " Address:".$address;

        $sql = "INSERT INTO `user` (`id`, `name`, `mobile_num`, `password`, `Address`) VALUES (NULL, '$name', '$mobile', '$password', '$address');";
        $result = $conn->query($sql);

        if ($result === false) {

            echo "Error executing query: " . $conn->error;  // Print the error message

    } else {

     #echo "Success Insert Query";
     header("Location:".$Base_Url."/login");

    }

        break;

    
    case "/logincheck":

        
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        
    $sql = "SELECT * FROM `user` WHERE mobile_num = '$mobile' AND password = '$password';";
        
    $result = $conn->query($sql);

    $output = $result->fetch_all(MYSQLI_ASSOC);

    print_r($output);

    #print_r($output[0]['Hero_title']);

    #echo json_encode($output);


        

        
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