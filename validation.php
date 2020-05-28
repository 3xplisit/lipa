<?php
    
    header('Content-Type: application/json');
    
    $response = '{
        "ResultCode": 0,
        "ResultDesc": "Validated successfully"
    }';
    
    //DATA
    $mValResponse = file_get_contents('php://input');
    
    //log the response
    $logFile = "MVResponse.txt";
    $jsonMValResponse = json_decode($mValResponse, true);
    
    //write to file
    $log = fopen($logFile, "a");
    
    fwrite($log, $mValResponse);
    fclose($log);
    
    echo $response;
?>
