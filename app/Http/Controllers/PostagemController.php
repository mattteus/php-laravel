<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;

class PostagemController extends Controller
{
    

    function adicionarpostagem(){

        $postagem = new Postagem();
        $postagem->id=0;
        $postagem->titulo = "";
        $postagem->texto = "";
        $postagem->imagem = "";
        $postagem->video= "";
        $postagem->linki= "";
        $postagem->ativo= "";
        $postagem->id_usuario= "";

       // $usuario = DB::select('select * postagem were id=?');

      //  'usuario'=>$usuario]
     return view('PostagemFormulario', ['postagem' => $postagem]);
    
  
    }



    function editarpostagem($id){
  
        $postagem = Postagem::find($id);
   
      return view('PostagemFormulario', ['postagem' => $postagem]);
  }
  

  
  function excluirpostagem($id){
  
    $postagem = Postagem::find($id);
    $postagem->delete();

    return redirect('/principal');
  }
  
  

  function salvarpostagem(Request $request){
  
      //echo"$request->input('nome')";
      
      $id =$request->input('id');
      if ($id==0) {
        $postagem = new Postagem();
        $postagem->titulo =$request->input('titulo');
        $postagem->texto = $request->input('texto');
        $postagem->imagem = $request->input('imagem');
        $postagem->video= $request->input('video');
        $postagem->linki= $request->input('linki');
        $postagem->ativo= $request->input('ativo');
        $postagem->id_usuario= $request->input('id_usuario');
  
        $postagem->save();
      }else {
        $postagem = Postagem::find($id);
        $postagem->titulo =$request->input('titulo');
        $postagem->texto = $request->input('texto');
        $postagem->imagem = $request->input('imagem');
        $postagem->video= $request->input('video');
        $postagem->linki= $request->input('linki');
        $postagem->ativo= $request->input('ativo');
        $postagem->id_usuario= $request->input('id_usuario');
  
        $postagem->save();

      }
     
    return redirect('/principal');
  
    }
      





}
