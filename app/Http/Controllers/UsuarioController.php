<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use App\Models\Postagem;

class UsuarioController extends Controller
{
  function listar(){
    $usuarios = DB::select('select usuario.*,postagem.*,postagem.id as idpost FROM usuario right join postagem on postagem.id_usuario = usuario.id ORDER BY titulo ASC ;
    ');
    $usuarios2 = DB::select('select *from usuario ORDER BY id ASC');
    $postagem = Postagem::all();
    return view('paginaprincipal', ['usuarios' => $usuarios,'usuarios2' => $usuarios2,'postagem'=>$postagem]);
 
 


  }


  function adicionarusuario(){
      $usuarios =new Usuario();
      $usuarios->nome = "";
      $usuarios->email = "";
      $usuarios->senha = "";
      $usuarios->id= 0;

    return view('UsuarioFormulario', ['usuarios' => $usuarios]);
  

  }
  function editarusuario($id){

    $usuarios =Usuario::find($id);
 
    return view('UsuarioFormulario', ['usuarios' => $usuarios]);
}


function excluirusuario($id){
  $usuarios =Usuario::find($id);
  $usuarios ->delete();

  return redirect('/principal');
}


function salvarusuario(Request $request){

  $id =$request->input('id');

  if ($id==0) {

    $usuarios =new Usuario();
    $usuarios->nome= $request->input('nome');
    $usuarios->email = $request->input('email');
    $usuarios->senha= $request->input('senha');
   
   $usuarios->save();
  return redirect('/principal');


  }else {

    $usuarios =Usuario::find($id);
    $usuarios->nome= $request->input('nome');
    $usuarios->email = $request->input('email');
    $usuarios->senha= $request->input('senha');
   
   $usuarios->save();
  return redirect('/principal');

    
  }
    
   // $usuario['id']= null;
    //listar();

  }
    

}
