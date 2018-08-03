<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, 
Accept");
session_start();

$_POST = json_decode(file_get_contents('php://input'),true);
if(isset($_POST['submit'] && !empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin'){
        
    {
        "success": true,
        "secret": "This is the secret no one knows but the admin"
    }
    
    } 
    else{
        	
    {
        "success": false,
        "message" : "Invalid credentials"
    }
        
    }
} 

else{
    
    {
        "success": false,
        "message": "Only POST access accepted"
    }
    
}

?>