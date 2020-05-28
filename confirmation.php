<?php
   header('Content-Type: application/json');
    
    $response = '{
        "ResultCode": 0,
        "ResultDesc": "Confirmation received successfully"
    }';
    
    
    //DATA
    $mCResponse = file_get_contents('php://input');
    
    //log the response
    $logFile = "MCResponse.txt";
    $log = file_put_contents($logFile,FILE_APPEND);
    $jsonmCResponse = json_decode($mCResponse, true);
    
   
    
    echo $response;
    ?>
