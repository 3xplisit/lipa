<?php
    
    header('Content-Type: application/json');
    
    $response = json_encode(['ResultCode'=>0,'ResultDesc'=>'Validation Passed Successfully','ThirdPartyTransID'=>mt_rand(111111,9999999)]);
    //DATA
    $mValResponse = file_get_contents('php://input');
    //log the response
    file_put_contents(date('Y-m-d').'_Validation.log',$mValResponse,FILE_APPEND|LOCK_EX);

    echo $response;
?>
