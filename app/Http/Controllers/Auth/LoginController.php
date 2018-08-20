<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $client = new Client;

        if($request->has('email') && $request->has('password')){
            $response = $client->request('POST', env('API_URL', 'http://192.168.1.101:212/api/v1/').'login', [
                    'query' => ['email' => $request->email, 'password' => $request->password]
                ]);
            $responseData = json_decode($response->getBody()->getContents());

            if($responseData->isError == false){
                $loginData = $responseData->isResponse;
                $userData = ["id" => $loginData->data->id, "email" => $loginData->data->email, "fullname" => $loginData->data->name, "phone" => $loginData->data->phone, "owner" => $loginData->data->owner, "role" => $loginData->data->role, "status" => $loginData->data->status];
                Session::put('user', $userData);

                setcookie(env("LOGIN_COOKIE", 'phpsess'), $loginData->token->value, $loginData->token->expiration + 30*24*3600, '/', env('DOMAIN_COOKIE', ".kangkoding.com"));

                if(Session::has('checkout')){
                    return redirect('/checkout');
                } else{
                    return redirect('/');
                }
            } else{
                return redirect('login')->with('error', 'Email atau kata kunci salah');
            }
        }
    }
}
