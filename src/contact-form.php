<?php
$servername = "128.199.43.177:3306";
$username = "data";
$password = "AU7JSShStzvrBmdE";
$dbname = "wedontknowcodes";

//Post data
if($_POST) {
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $message = $_POST["message"];
    if(strlen($name)>0 && strlen($mail) > 0 && strlen($message) > 0) {
                
        $sql = "insert into contact values('".$name."','".$mail."','".$message."',now());";

        // Connecting, selecting database
        $link = mysqli_connect($servername, $username, $password);
        if(!$link) {
            die('Could not connect: ' . mysql_error());
        }
        
        mysqli_select_db($link,$dbname) or die ("no database");  
        
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
            $status = "successful";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            $status = "failed";
        }

        //echo 'Connected successfully';
        mysqli_close($link);
       
        header("Location: ./index.html?status=".$status."#kontakt");
    }
}
?>