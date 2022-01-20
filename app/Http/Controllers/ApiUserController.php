<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Response;

class ApiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveRegister(Request $request)
    {
        $response = array('state'=>false,'message'=>'success');

        $data = $request->input();
            
        $vld = Validator::make($data, [
            'name' => ['required', 'max:100'],
            'email' => ['required', 'string', 'email','unique:users', 'max:100'],
            'password' => ['required', 'string', 'max:50', 'min:8'],
            'confirm_password' => ['required','min:8', 'same:password']
        ]);
            
        if ($vld->fails()) {
            $response['message'] = $vld->errors()->first(); 
            return Response::json($response); 
        }
        // url: '{{route('save.register')}}',
        // $email = $request->email; 
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Bcrypt($request->password);
            $token = Str::random(40);
            $user->api_token =   hash('sha256', $token);
            $user->save();
            $response['state'] = true;
            $response['token'] = $user->api_token;
            $response['user'] = $user;
            return Response::json($response);


    }
    public function check(Request $request)
    {  
        $response = array('state'=>false,'message'=>'success');

        $data = $request->input();
            
        $vld = Validator::make($data, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
            
        if ($vld->fails()) {
            $response['message'] = $vld->errors()->first(); 
            return Response::json($response); 
        }

        $email = $request->email;
        $pass  = $request->password;

        if (auth()->attempt(array('email' => $email, 'password' => $pass))){
            $user = User::findOrfail(auth()->user()->id);
            $user->password = Bcrypt($request->password);
            $token = Str::random(40);
            $user->api_token =   hash('sha256', $token);
            $user->save();
            $response['state'] = true;
            $response['token'] = $user->api_token;
            $response['user'] = $user;
            return Response::json($response);
        } 
        else{  
            $response['message'] = 'Email o contraseña invalidos';
            return Response::json($response);
         }  
    }
    public function logout(Request $request) 
    {
        $user = User::findOrfail(auth()->user()->id);
        $user->api_token =  NULL;
        $user->save();
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
    public function updateLogin() 
    {
        if (Auth::check()) {
            return view('actualizarLogin');
        } else {
            return view('login');
        }
    }
        public function editRegister(Request $request)
    {
        $response = array('state'=>false,'message'=>'success');

        $data = $request->input();
            
        $vld = Validator::make($data, [
            'name' => ['required', 'max:100'],
            'password' => ['required', 'string', 'max:50', 'min:8'],
            'confirm_password' => ['required','min:8', 'same:password']
        ]);
            
        if ($vld->fails()) {
            $response['message'] = $vld->errors()->first(); 
            return Response::json($response); 
        }
        // url: '{{route('save.register')}}',
        // $email = $request->email; 
        if (Auth::check()) {
            $user = User::findOrfail(auth()->user()->id);
            $user->name = $request->name;
            $user->password = Bcrypt($request->password);
            $user->save();
            $response['state'] = true;
            $response['token'] = $user->api_token;
            $response['user'] = $user;
            return Response::json($response);
        } else {
            $response['message']='debe iniciar sesion';
            return Response::json($response); 
        }


    }
    
}