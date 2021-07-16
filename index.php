<?php

require 'db-class.php';
$requestData = $_POST;
$ajaxCall = $_SERVER['HTTP_X_REQUESTED_WITH'];
if(isset($ajaxCall) && strtolower($ajaxCall) == 'xmlhttprequest'){
    $query = $mysqli->prepare("INSERT INTO users(firstName,lastName,gender)VALUES(?,?,?)");
    $query->bind_param('sss',$requestData['firstName'],$requestData['lastName'],$requestData['gender']);
    $query->execute();
    if($query->affected_rows == 0){
        die("error inserting data;");
    }
    
    echo "effected rows".$query->affected_rows;
    $query->close();
    echo json_encode($requestData);
}
