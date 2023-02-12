<?php

function sendSomethingWentWrongResponse($error = null){
    $resData['status'] = false;
    $resData['error'] = 1;
    $resData['message'] = "Something Went Wrong Please Try Again.";
    if(env('APP_DEBUG') && $error){

        $resData['error_info'] = $error->getMessage();
    }
    return json_encode($resData);
}

function sendResponse($status, $data, $message, $error = 0, $page = false){
    $resData['status'] = $status;
    $resData['data'] = $data;
    $resData['message'] = $message;
    if($error){
        $resData['error'] = $error;
    }
    if($page){
        $resData['page'] = $page;
    }
    return json_encode($resData);
}

function generateHashedPassword($password){
    return password_hash($password,PASSWORD_BCRYPT);
}

function verifyHashPassword($password, $hashedPassword){
    return password_verify($password, $hashedPassword);
}

function getCurrentDateTime($addMinutes = 0){
    $dateTime = new DateTime();
    $dateTime->modify('+'.$addMinutes.' minutes');
    return $dateTime->format('Y-m-d H:i:s');
    // $time = time();
    // return date('Y-m-d H:i:s', $time);
}

function getRandomString($length_of_string = 10) 
{ 
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result),  0, $length_of_string).microtime(true); 
} 
// use Mail;

function sendMailHelper($bladeFile, $replacerData, $mailInfo, $emailConstant){
    try{
        $basicData =  config('constants.EMAIL_INFO.'.$emailConstant);
        $mailInfo['subject'] = $basicData['SUBJECT'];
        $mailInfo['fromEmail'] = $basicData['FROM_EMAIL'];
        $mailInfo['fromName'] = $basicData['FROM_NAME'];
        Mail::send($bladeFile, $replacerData, function($message) use ($mailInfo) {
            $message->to($mailInfo['to'], $mailInfo['toName'])
            ->subject($mailInfo['subject']);
            $message->from($mailInfo['fromEmail'],$mailInfo['fromName']);
        });
        return true;
    }catch (\Exception $e) {
        return false;
    }
}

function getClaasifiedsUrl($path= ""){
    return env('CLASSFIEDS_ADD_URL').$path;
}