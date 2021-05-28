<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    //login
    public function login(Request $request) {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            $user = Auth::user();
            $verify = $user['email_verified_at'];
            if (!$verify) {
                return $this->sendError('email-not-verified', $verify);
            }
            $payload = array(
                "user" => $user['full_name'],
                "nickname" => $user['nickname'],
                "id" => $user['id'],
                "email" => $user['email']
            );
            $jwt = JWT::encode($payload, $this->key);
            $success['jwt'] = $jwt;
            return $this->sendResponse($success, 'user-login');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

    public function logout(Request $request) {
        $decode = $this->getHeader($request);
        if (!$decode) {
            return $this->sendError('logout-fail');
        }
        return $this->sendResponse(true, 'success');
    }
}
