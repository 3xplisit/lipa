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
    $array = json_decode($mCResponse);
    
    $TransactionType= $array->TransactionType;
    $TransID= $array->TransID;
    $TransTime = $array->TransTime;
    $TransAmount =  $array->TransAmount;
    $BusinessShortCode =   $array->BusinessShortCode;
    $BillRefNumber =   $array->BillRefNumber;
    $InvoiceNumber =   $array->InvoiceNumber;
    $OrgAccountBalance =   $array->OrgAccountBalance;
    $ThirdPartyTransID =   $array->ThirdPartyTransID;
    $MSISDN =   $array->MSISDN;
    $FirstName =   $array->FirstName;
    $MiddleName =   $array->MiddleName;
    $LastName =   $array->LastName;
