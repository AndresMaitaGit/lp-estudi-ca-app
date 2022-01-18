<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check()) {
            $productos = Product::all();
            return view('productos', compact('productos'));
        } else {
            return view('login');
        }

    }
    public function register()
    {
        //
        if (Auth::check()) {
            $productos = Product::all();
            return view('productos', compact('productos'));
        } else {
            return view('register');
        }

    }
    public function saveRegister(Request $request)
    {
        $request->validate ([
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);
        // url: '{{route('save.register')}}',
        $email = $request->email; 
        if (User::where('email', $email)->exists()){
            return response()->json([ [2] ]);
        } else{
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Bcrypt($request->password);
            if($user->save()){ 
                return response()->json([ [1] ]);                   	
            } else {
                return response()->json([ [3] ]);
            }
        }
    }
    public function check(Request $request)
    {  
        $email = $request->email;
        $pass  = $request->password;

        if (auth()->attempt(array('email' => $email, 'password' => $pass))){
            return response()->json([ [1] ]);
        } 
        else{  
            return response()->json([ [3] ]);
         }  
    }
    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
