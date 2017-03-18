<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Documento;
use App\Modulo;
use App\Tema;
use App\Terminado;
use App\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    public function getViewCurso($id)
    {
        $user_tutor = Curso::select('user_tutor')
            ->where('cursos.id', '=', $id)
            ->get();
        $curso = Curso::join('institutos as i', 'inst_id', '=' ,'i.id')
            ->select('cursos.id','titulo', 'url_video', 'cursos.descripcion as c_desc', 'i.nombre as i_nombre',
               'i.descripcion as i_desc' ,'i.web as i_web', 'i.telefono as i_tel', 'i.email as i_email', 'i.direccion as i_dir')
            ->where('cursos.id', '=', $id)
            ->get();
        $tutor = Tutor::join('users as u', 'user_id', '=', 'u.id')
            ->select('tutors.id as t_id', 'tutors.descripcion as t_desc', 'tutors.web as t_web', 'nombre', 'apellidos',
                'celular', 'email')
            ->where('tutors.id', '=', $user_tutor[0]->user_tutor)
            ->get();
        //'id', 'nombre', 'n_cursos', 'img_url', 'curso_id',
        $modulos = Modulo::select('id','nombre', 'n_cursos', 'img_url', 'curso_id', 'n_modulo', 'n_cursos')
            ->where('curso_id', '=', $id)
            ->get();


        $help = array();
        $i = 1;
        foreach($modulos as $m)
        {
            $pasados = Terminado::select('modulo_id')
                ->where('user_id', '=', Auth::id())
                ->where('modulo_id', '=', $m->id)
                ->get();
            $help[$i] = count($pasados);
            $help[$i] = round(($help[$i] / $m->n_cursos)*100);
            $i++;
        }
        return view('curso', compact('curso', 'tutor', 'modulos', 'help'));
    }
    public function getCurso()
    {
        $cursos = Curso::join('institutos as i', 'inst_id', '=' ,'i.id')
            ->select('cursos.id','titulo', 'url_img', 'costo', 'i.nombre as nombre')
            ->get();
        return view('welcome', compact('cursos'));
    }
    public function getViewModulo($id_c, $id_m, $id_t)
    {
        $modulo = Modulo::join('cursos as c', 'curso_id', '=', 'c.id')
            ->select('modulos.id', 'c.id as c_id', 'nombre', 'n_modulo', 'n_cursos','c.titulo as c_titulo')
            ->get();
        $temas = Tema::where('modulo_id', '=', $id_m)
            ->get();
        /*$tema = Tema::where('id', '=', $id_t)
            ->get();*/
        $n = $modulo[0]->n_cursos;
        $p = array();
        for($i=1; $i <= $n; $i++)
        {
            $p[$i] = 0;
        }
        $terminados = Terminado::where('user_id', '=', Auth::id())
            ->get();

        foreach($terminados as $t)
        {
            foreach($temas as $te)
            {
                if($t->tema_id == $te->id)
                {
                    $p[$t->tema_id] = 1;
                }
            }

        }
        $docs = Documento::where('modulo_id', '=', $id_m)
            ->get();
        return view('modulo', compact('modulo', 'temas', 'docs', 'id_t', 'p'));
    }
    public function Pcursoterminado(Request $request)
    {

        $ver = Terminado::select('tema_id')
            ->where('tema_id', '=', $request->id_tema)
            ->get();
        if(count($ver) == 0)
        {
            $terminado = new Terminado();
            $terminado->user_id = Auth::id();
            $terminado->tema_id = $request->id_tema;
            $terminado->modulo_id = $request->id_modulo;
            $terminado->curso_id = $request->id_curso;
            $terminado->save();
        }
        if($request->id_tema == $request->n_cursos)
        {
            return redirect('curso/'.$request->id_curso);
        }
        else
        {
            $f = $request->id_tema + 1;
        }
        return redirect('curso/'.$request->id_curso.'/'.$request->id_modulo.'/'.$f  );
    }
}
