<?php
$servername = "128.199.43.177:3306";
$username = "data";
$password = "AU7JSShStzvrBmdE";
$dbname = "wedontknowcodes";

require("autoload.php");
$recaptcha = new \ReCaptcha\ReCaptcha("6LeroQ4TAAAAAAzhqwCRBcMyw3m-2DYrA2K0b_ay");
$remoteIp = "home.hbv.no";
$gRecaptchaResponse = $_POST['g-recaptcha-response'];

$resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
if ($resp->isSuccess()) {
    // verified!
    //Post data
    if($_POST) {
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $message = $_POST["message"];
        if(strlen($name)>0 && strlen($mail) > 0 && strlen($message) > 0) {

            //SQL for å legge inn ny melding
            $sql = "insert into contact values('".$name."','".$mail."','".$message."',now());";
            // Connecting, selecting database
            $link = mysqli_connect($servername, $username, $password);
            if(!$link) {
                die('Could not connect: ' . mysql_error());
            }

            mysqli_select_db($link,$dbname) or die ("no database");  

            if(mysqli_query($link, $sql)){
                echo "Records added successfully.";
                //Sender status melding tilbake til hovedsiden via querystring
                $status = "successful";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                //Sender status melding tilbake til hovedsiden via querystring
                $status = "failed";
            }
            mysqli_close($link);
            //Redirects request tilbake til hovedsiden
            header("Location: ./index.html?status=".$status."#kontakt");
        }
    }
} else {
    $errors = $resp->getErrorCodes();
    print $errors;
}

?>