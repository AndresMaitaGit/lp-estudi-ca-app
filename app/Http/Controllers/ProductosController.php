<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Response;


class ProductosController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $productos = Product::all()->where('user_id', $user_id);
            return view('productos', compact('productos'));
        } else {
            // return view('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = array('state'=>false,'message'=>'success');

        $data = $request->input();

        $vld = Validator::make($data, [
            'name' => ['required', 'max:100'],
            'img' => ['image','mimes:jpg,jpeg,png,git,svg', 'max:2000'],
            'price' => ['required'],
            // "img" => ['required','array'],
            // "img.*" => ["required",'image','mimes:jpeg,png','max:3000'],
        ]);
            
        if ($vld->fails()) {
            $response['message'] = $vld->errors()->first(); 
            return Response::json($response); 
        }
        
        
            
            $imagen = $request -> file('img');
            if(empty($imagen)){
                $response['message'] = 'El campo imagen es obligatorio.';
                return Response::json($response);
            } else {
                $product = new Product();

                $nombre = time().'.'.$imagen->getClientOriginalExtension();
                $destino = public_path('img\productos');
                $request->img->move($destino, $nombre);

                $product->img = 'img/productos/'.$nombre;
                $product->user_id = auth()->user()->id;
                $product->name = $request->name;
                $product->price = $request->price;    
                $product->save();
                $response['state'] = true;
                $response['token'] = auth()->user()->api_token;
                $response['user'] = auth()->user();
                return Response::json($response);
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       $product = Product::findOrfail($request->item_edit); // recuperará el primer resultado de la consulta
        return $product;
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
    public function update(Request $request)

    {
        $response = array('state'=>false,'message'=>'success');

        $data = $request->input();

        $vld = Validator::make($data, [
            'name_edit' => ['required', 'max:100'],
            'price_edit' => ['required'],
        ]);
            
        if ($vld->fails()) {
            $response['message'] = $vld->errors()->first(); 
            return Response::json($response); 
        }
        
        $user_id = auth()->user()->id;    
        $product = Product::where('user_id', $user_id)->findOrfail($request->item_id); //recuperará el primer resultado de la consulta            $product->user_id = auth()->user()->id;
        
        $imagen = $request -> file('img_edit');
        if(empty($imagen)){
            // $response['message'] = 'El campo imagen es obligatorio.';
            // return Response::json($response);
        } else {
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img\productos');
            $request->img_edit->move($destino, $nombre);
            
            $product->img = $request->img_edit;
        } 
            $product->name = $request->name_edit;
            $product->price = $request->price_edit;    
            $product->save();
            $response['state'] = true;
            $response['token'] = auth()->user()->api_token;
            $response['user'] = auth()->user();
            return Response::json($response);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $response = array('state'=>false,'message'=>'success');

        $user_id = auth()->user()->id; 
        $validar = Product::where('user_id', $user_id)->findOrfail($request->item_delete)->count();
        if($validar == 1){
            $product = Product::destroy($request->item_delete);
            $response['state'] = true;
            $response['token'] = auth()->user()->api_token;
            $response['user'] = auth()->user();
            return Response::json($response);
        } else {
            $response['message'] = 'Ha ocurrido un error al borrar';
            $response['token'] = auth()->user()->api_token;
            $response['user'] = auth()->user();
            return Response::json($response);
        }
    }
}

