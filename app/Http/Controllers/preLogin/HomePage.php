<?php

namespace App\Http\Controllers\preLogin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\userMaster;
class HomePage extends Controller
{
    // // Views 

    public function index()
    {
        return view('preLogin/home');
    }
    public function contactUs()
    {
        return view('preLogin/contactUs');
    }
    public function accessibilityStatement()
    {
        return view('preLogin/accessibilityStatement');
    }
    public function foodDelivery()
    {
        return view('preLogin/foodDelivery');
    }
    public function howItWorks()
    {
        return view('preLogin/howItWorks');
    }
    public function privacyPolicy()
    {
        return view('preLogin/privacyPolicy');
    }
    public function signup()
    {
        return view('preLogin/signup');
    }
    public function support()
    {
        return view('preLogin/support');
    }
    public function terms()
    {
        return view('preLogin/terms');
    }
  
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
    public function forgetPassword($token)
    {
        $getUserInfo = UserMaster::where('emailToken', $token)
        ->where('emailVerificationValidTill','>', getCurrentDateTime() )
        ->take(1)
        ->get();

        if($getUserInfo && sizeof($getUserInfo)){
            return view('preLogin/forgetPassword');
        }
        return view('preLogin/linkExpired');
    }
  

    // // Actions
    /**************************************************************************************/
    public function register(Request $request)
    {
        try {
            // // // Validate The Request 
            $errorMessages  = array(
                'register_firstName.required' => 'Please provide first name.',
                'register_firstName.max' => 'First Name Should be less then 255 characters.',
                'register_email.required' => 'Please provide email address.',
                'register_email.email' => 'Please provide valid email address.',
                'register_email.unique' => 'This email is already registered with us.',
                'register_password.required' => 'Please provide password.',
                'register_password.min' => 'Your password must be at least 5 characters long.',
            );
            $validator = Validator::make($request->all(), [
                'register_firstName' => 'required|max:255',
                'register_email' => 'required|email|unique:userMaster,email',
                'register_password' => 'required|min:5',
            ], $errorMessages);
            if ($validator->fails()) {
                $errors = $validator->errors();
                return sendResponse(false, null, $errors->first(), 2, false);
            }
            extract($request->input());
            
            $userMaster = new userMaster;
            $userMaster->firstName = $register_firstName;
            if( isset($register_lastName) &&  $register_lastName && !empty($register_lastName) && $register_lastName != ""){
                $userMaster->lastName = $register_lastName;
            }
            $emailToken =  md5($userMaster->email.getRandomString());
            $userMaster->password = generateHashedPassword($register_password);
            $userMaster->email = strtolower($register_email);
            $userMaster->emailVerificationValidTill = getCurrentDateTime(config('constants.EMAIL_VERIFICATION_TOKEN_EXPIRED_MINUTES'));
            $userMaster->emailToken = $emailToken;
            $userMaster->isEmailVerified = 0;
            $userMaster->save();

            // Mail Send
            $replacerData = array(
                'url'=> $request->getSchemeAndHttpHost().'/verifyEmail/'.$emailToken, 
                "name" => $userMaster->firstName
            ); 
            $bladeFile = 'mail.emailConfiramation'; 
            $mailInfo['to'] = $userMaster->email; 
            $mailInfo['toName'] = $userMaster->firstName; 
            if(env('MAIL_SEND')){
                sendMailHelper($bladeFile, $replacerData, $mailInfo, "EMAIL_VARIFATION");
            }
            
            $request->session()->flush();
            $request->session()->put('pk_userId', $userMaster->pk_userId);
            $request->session()->put('firstName', $userMaster->firstName);
            $request->session()->put('email', $userMaster->email);
            $request->session()->put('lastName', $userMaster->lastName ? $userMaster->lastName : false);
            $request->session()->put('profileImage', "");
            unset($userMaster['password']);
            return sendResponse(true, $userMaster, "User Registered Successfully");

        } catch (\Exception $e) {
            return sendSomethingWentWrongResponse($e);
        }
    }

    /**************************************************************************************/
    public function login(Request $request)
    {
        try {
            // // // Validate The Request 
            $errorMessages  = array(
                'login_email.required' => 'Please provide email address.',
                'login_email.email' => 'Please provide valid email address.',
                'login_email.exists' => 'This email is not registered.',
                'login_password.required' => 'Please provide password.',
                'login_password.min' => 'Your password must be at least 5 characters long.',
            );
            $validator = Validator::make($request->all(), [
                'login_email' => 'required|email|exists:userMaster,email',
                'login_password' => 'required|min:5',
            ],$errorMessages);
            if ($validator->fails()) {
                $errors = $validator->errors();
                return sendResponse(false, null, $errors->first(), 2, false);
            }
            extract($request->input());
            
            $login_email = strtolower($login_email);

            $data = UserMaster::where('email', $login_email)->take(1)->get();

            if(!sizeof($data)){
                return sendResponse(false, null, "Email Or Password is Incorrect.", 3, false);
            }
            
            $data = $data[0];
            
            if(!verifyHashPassword($login_password, $data->password)){
                return sendResponse(false, null, "Email Or Password is Incorrect.", 3, false);
            }

            $request->session()->flush();
            $request->session()->put('pk_userId', $data->pk_userId);
            $request->session()->put('firstName', $data->firstName);
            $request->session()->put('email', $data->email);
            $request->session()->put('lastName', $data->lastName ? $data->lastName : false);
            $request->session()->put('profileImage', $data->profileImage ? $data->profileImage : "");
            return sendResponse(true, array(), "User Logged In Successfully");

        } catch (\Exception $e) {
            return sendSomethingWentWrongResponse($e);
        }
    }

    /**************************************************************************************/
    public function verifyEmail(Request $request, $token)
    {
        try {
            $isUpdate = UserMaster::where('emailToken', $token)
                            ->where('emailVerificationValidTill','>', getCurrentDateTime() )
                            ->where('status', config('constants.STATUS.DEFAULT') )
                            ->update(['status' => config('constants.STATUS.ACTIVE'), 'emailVerificationValidTill' => NULL, 'isEmailVerified' => 1, 'emailToken'=> NULL]);

            if($isUpdate){
                return view('preLogin.emailVerificationSuccess');
                // return redirect('/'); 
            }
            else{
                return "Link is expired or broken. Please try agin.";
            }
        } catch (\Exception $e) {
            return sendSomethingWentWrongResponse($e);
        }
    }
    
    /**************************************************************************************/
    public function resetPassword(Request $request)
    {
        try {
            $errorMessages  = array(
                'reset_confirm_password.required' => 'Please provide confirm password.',
                'reset_password.required' => 'Please provide password.',
                'reset_password.min' => 'Your password must be at least 5 characters long.',
                'reset_password.same' => 'Password and confirm password should be same.',
                'token.required' => 'Please provide token.',
                
            );
            $validator = Validator::make($request->all(), [
                'reset_password' => 'required|min:5|same:reset_confirm_password',
                'reset_confirm_password' => 'required|min:5',
                'token' => 'required',
            ],$errorMessages);
            if ($validator->fails()) {
                $errors = $validator->errors();
                return sendResponse(false, null, $errors->first(), 2, false);
            }
            extract($request->input());
            
            $isUpdate = UserMaster::where('emailToken', $token)
                            ->where('emailVerificationValidTill','>', getCurrentDateTime() )
                            ->where('status', '>=' ,config('constants.STATUS.DEFAULT') )
                            ->update([ 'password' => generateHashedPassword($reset_password) ,'status' => config('constants.STATUS.ACTIVE'), 'emailVerificationValidTill' => NULL, 'isEmailVerified' => 1, 'emailToken'=> NULL]);

            if($isUpdate){
                return sendResponse(true, array(), "Password Changed Successfully");
            }
            else{
                return view('preLogin/linkExpired');
            }
        } catch (\Exception $e) {
            return sendSomethingWentWrongResponse($e);
        }
    }
    
    /**************************************************************************************/
    public function requestToForgetPassword(Request $request)
    {
        try {

            $errorMessages  = array(
                'required' => 'please provide valid email address.',
                'email' => 'please provide valid email address.',
                'exists' => 'This email is not registered.',
            ); 
            $validator = Validator::make($request->all(), [
                'forget_email' => 'required|email|exists:userMaster,email',
            ], $errorMessages);
            if ($validator->fails()) {
                $errors = $validator->errors();
                return sendResponse(false, null, $errors->first(), 2, false);
            }

            extract($request->input());
            $token =  md5($forget_email.getRandomString());
            $userToUpdate = UserMaster::where('email', $forget_email)->where('status', '>=' ,config('constants.STATUS.DEFAULT') )->take(1)->get(['email','firstName']);
            $isUpdate = UserMaster::where('email', $forget_email)
                            ->where('status', '>=' ,config('constants.STATUS.DEFAULT') )
                            ->update([ 'emailVerificationValidTill' => getCurrentDateTime(config('constants.EMAIL_VERIFICATION_TOKEN_EXPIRED_MINUTES')) , 'emailToken' => $token ]);
            if($userToUpdate && sizeof($userToUpdate) && $isUpdate){
                // Mail Send
                $replacerData = array(
                    'url'=> $request->getSchemeAndHttpHost().'/forgetPassword/'.$token,
                    'name' => $userToUpdate[0]->firstName
                ); 
                $bladeFile = 'mail.forgetPasswordEmailConfiramation'; 
                $mailInfo['to'] = $userToUpdate[0]->email; 
                $mailInfo['toName'] = $userToUpdate[0]->firstName; 
                if(env('MAIL_SEND')){
                    sendMailHelper($bladeFile, $replacerData, $mailInfo, "EMAIL_VARIFATION");
                }
                return sendResponse(true, array(), "Password Reset Link sent to your email.");
            }

            return sendResponse(false, null, "Email Or Password is Incorrect.", 3, false);
            
        } catch (\Exception $e) {
            return sendSomethingWentWrongResponse($e);
        }
    }



}
