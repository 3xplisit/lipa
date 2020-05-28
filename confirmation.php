<?php
    
    include '../functions/db_conx.php';
    
    
    header('Content-Type: application/json');
    
    $response = '{
        "ResultCode": 0,
        "ResultDesc": "Confirmation received successfully"
    }';
    
    
    //DATA
    $mCResponse = file_get_contents('php://input');
    
    //log the response
    $logFile = "MCResponse.txt";
    $array = json_decode($mCResponse, true);
    
    
    $transactiontype= mysqli_real_escape_string($conn,$array['TransactionType']); 
    $transid=mysqli_real_escape_string($conn,$array['TransID']); 
    $transtime= mysqli_real_escape_string($conn,$array['TransTime']); 
    $transamount= mysqli_real_escape_string($conn,$array['TransAmount']); 
    $businessshortcode=  mysqli_real_escape_string($conn,$array['BusinessShortCode']); 
    $billrefno=  mysqli_real_escape_string($conn,$array['BillRefNumber']); 
    $invoiceno=  mysqli_real_escape_string($conn,$array['InvoiceNumber']); 
    $msisdn=  mysqli_real_escape_string($conn,$array['MSISDN']); 
    $orgaccountbalance=   mysqli_real_escape_string($conn,$array['OrgAccountBalance']); 
    $firstname=mysqli_real_escape_string($conn,$array['FirstName']); 
    $middlename=mysqli_real_escape_string($conn,$array['MiddleName']); 
    $lastname=mysqli_real_escape_string($conn,$array['LastName']); 
     
    $sql="INSERT INTO mPayments
    ( 
    TransactionType,
    TransID,
    TransTime,
    TransAmount,
    BusinessShortCode,
    BillRefNumber,
    InvoiceNumber,
    MSISDN,
    FirstName,
    MiddleName,
    LastName,
    OrgAccountBalance
    )  
    VALUES  
    ( 
    '$transactiontype', 
    '$transid', 
    '$transtime', 
    '$transamount', 
    '$businessshortcode', 
    '$billrefno', 
    '$invoiceno', 
    '$msisdn',
    '$firstname', 
    '$middlename', 
    '$lastname', 
    '$orgaccountbalance' 
    )";
     
    $run_mysql = mysqli_query($conn, $sql);
    
    echo $response;
    ?>
