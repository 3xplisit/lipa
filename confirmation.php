<?php
include '../functions/db_conx.php';
    
header('Content-Type: application/json');

$response = json_encode(['ResultCode'=>0,'ResultDesc'=>'Confirmation Received Successfully']);

//Capture the Data
$mCResponse = file_get_contents('php://input');

//Log the data in a file...
$logData = file_put_contents(date('Y-m-d').'_Confirmation.log',$mCResponse,FILE_APPEND|LOCK_EX);

//Log the response here....
$array = json_decode($mCResponse);

//Respond to the Gateway here..
echo $response;
