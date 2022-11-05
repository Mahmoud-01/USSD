<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request to the server from the callback url. 
    $response  = "CON Welcome to USSD for Health, what would you want to check \n";
    $response .= "1. Medical Emergency \n";
    $response .= "2. Maternal Advice \n";
    $response .= "3. Public Health Advice";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Kindly choose the type of Emergency \n";
    $response .= "1. Ambulance or mobile clinic request\n";
    $response .= "2. Emergency drug request";
    $response .= "3. Speak to Health professional";

} else if ($text == "1*1") {
    $response = "CON Kindly select the service you want \n";
    $response .= "1. Ambulance \n";
    $response .= "2. Mobile Clinic \n";

} else if ($text == "1*1*1") {
    $response = "CON Kindly enter your name and location \n";
    //$response .= " Thank $name, your ambulance is on the way to $location";
    


//} else if($text == "1*1") { 
    

    // This is a terminal request. Note how we start the response with END
    $response = "END Your 

}

// Echo the response back to the API
header('Content-type: text/plain');
 echo $response;
?>