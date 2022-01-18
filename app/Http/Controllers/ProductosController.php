<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $request->validate ([
            'name' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png,git,svg|max:2000',
            'price' => 'required'
        ]);
        $imagen = $request -> file('img');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $destino = public_path('img\productos');
        $request->img->move($destino, $nombre);
        
            $product = new Product();
            $product->user_id = auth()->user()->id;
            $product->name = $request->name;
            $product->img = 'img/productos/'.$nombre;
            $product->price = $request->price;    
            if($product->save()){ 
                return response()->json([ [1] ]);                   	
            } else {
                return response()->json([ [3] ]);
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
        $request->validate ([
            'name_edit' => 'required',
            'price_edit' => 'required'
        ]);
        $user_id = auth()->user()->id;    
        $product = Product::where('user_id', $user_id)->findOrfail($request->item_id); //recuperará el primer resultado de la consulta            $product->user_id = auth()->user()->id;
        
        if($request->img_edit != ''){
            $imagen = $request -> file('img_edit');
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img\productos');
            $request->img_edit->move($destino, $nombre);
            
            $product->img = $request->img_edit;
        } 
            $product->name = $request->name_edit;
            $product->price = $request->price_edit;    
            if($product->save()){ 
                return response()->json([ [1] ]);                   	
            } else {
                return response()->json([ [3] ]);
            }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::destroy($request->item_delete);
        return $product;
    }
}

