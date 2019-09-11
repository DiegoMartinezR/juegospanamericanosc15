<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deportes =Paises::orderBy('id','DESC')->paginate(3);
        return view('home',compact('deportes'));
    }

    public function create()
    {
        return view('Deportes.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[ 'deporte'=>'required', 'descripcion'=>'required',
        'historia'=>'required', 'imagen'=>'required']);
        Paises::create($request->all());
        return redirect()->route('home')->with('success','Registro creado satisfactoriamente');
    }

    // public function show($id)
    // {
    //     $producto = Producto::find($id);
    //     return view('producto.show',compact('producto'));
    // }



    // public function getProductos(){
    //     $producto = Producto::all();
    //     return response()->json($producto);
    //     }




}
