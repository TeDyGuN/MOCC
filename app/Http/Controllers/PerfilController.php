<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Documento;
use App\Modulo;
use App\Tema;
use App\User;
use App\Terminado;
use App\TTerminado;
use App\CTerminado;
use App\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function getPerfil()
    {
        $perfil = User::select('nombre','apellidos', 'celular', 'email', 'pais' , 'ciudad')
                  ->where('id', Auth::id())
                  ->get();
        // $c_t =    CTerminado::where('user_id', Auth::id())
        //           ->get();
        //
        // $c_tests = CTerminado::where('user_id', Auth::id())
        //     ->get();
        // foreach ($c_tests as $c) {
        //
        // }
        $cursos = Curso::join('c_terminados as c', 'cursos.id', '=' ,'c.curso_id')
            ->select('cursos.id','titulo', 'url_img')
            ->where('c.user_id', Auth::id())
            ->get();
        return view('perfil', compact('perfil', 'cursos'));
    }
    public function updatePerfil(Request $request)
    {
        //dd($request);
        $user = User::find(Auth::id());

        $user->celular = $request->celular;

        $user->save();

        $mensaje = "Modificaste tus Datos con exito";
        return redirect('perfil')->with(['success' => $mensaje]);
        //return view('perfil', compact('perfil', 'c_t'));

        //return view('perfil', compact('perfil', 'c_t'));
    }

}
