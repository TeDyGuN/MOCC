<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Modulo;
use App\Tutor;

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
        $modulos = Modulo::select('nombre', 'n_cursos', 'img_url', 'curso_id', 'n_modulo')
            ->where('curso_id', '=', $id)
            ->get();
        return view('curso', compact('curso', 'tutor', 'modulos'));
    }
    public function getCurso()
    {
        $cursos = Curso::join('institutos as i', 'inst_id', '=' ,'i.id')
            ->select('cursos.id','titulo', 'url_img', 'costo', 'i.nombre as nombre')
            ->get();
        return view('welcome', compact('cursos'));
    }
}