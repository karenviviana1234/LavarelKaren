<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use GuzzletHttp\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    
    public function __construct() {
        $this -> middleware('auth');
    }

    public function index(){
        $usuarios = Usuarios::all();
        return view('usuarios.dasborad', compact('usuarios'));
    }

    public function create(){

    }

    public function store (Request $request) {

        $this -> validate($request,[
            'name' => 'required',
            'cedula' => 'required| unique:clientes',
            'direccion' => 'required',
            'telefono' => 'required| unique:clientes',
        ]);

        $usuarios = new Usuarios();
        $usuarios -> name =$request->input('name');
        $usuarios -> cedula =$request->input('cedula');
        $usuarios -> direccion =$request->input('direccion');
        $usuarios -> telefono =$request->input('telefono');
        $usuarios->save();
        return redirect(route('login.index'));
    }

    public function show(Usuario $usuarios){

    }

    public function edit($id){
        $usuario = Usuarios::find($id);
        return view('usuarios.editar', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id){
        $this -> validate($request,[
            'name' => 'required',
            'cedula' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        $usuarios = Usuarios::find($id);
        $usuarios -> name =$request->input('name');
        $usuarios -> cedula =$request->input('cedula');
        $usuarios -> direccion =$request->input('direccion');
        $usuarios -> telefono =$request->input('telefono');
        $usuarios->update();
        return redirect(route('login.index'));
    }
    public function destroy($cedula){
        $usuarios =Usuarios::find($cedula);
        $usuarios->delete();
        return redirect()->back();
    }
}
