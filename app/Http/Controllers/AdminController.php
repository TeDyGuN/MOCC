<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Documento;
use App\Instituto;
use App\Modulo;
use App\Pregunta;
use App\Respuesta;
use App\Tema;
use App\Test;
use App\User;
use App\Terminado;
use App\TTerminado;
use App\CTerminado;
use App\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use Maatwebsite\Excel\Facades\Excel;


use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function getAdmin()
    {
        $ct = CTerminado::join('users as u', 'c_terminados.user_id', 'u.id')
            ->join('cursos as c', 'c_terminados.curso_id', 'c.id')
            ->join('t_terminados as t', 'c_terminados.t_terminado_id', 't.id')
            ->select('u.nombre', 'u.apellidos', 'c.titulo', 'u.celular', 'u.email', 't.nota')
            ->get();
        //dd($ct);
        return view('admin', compact('ct'));
    }
    public function getDocente()
    {
        return view('docente');
    }
    public function saveDocente(Request $request)
    {
        $user = new User();
        $user->nombre    = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->celular   = $request->celular;
        $user->email     = $request->email;
        $user->password  = bcrypt($request->password);
        $user->pais      = 'Bolivia';
        $user->rol       = 'Docente';
        $user->save();

        $d = new Tutor();
        $d->descripcion = $request->descripcion;
        $d->web         = $request->web;
        $d->user_id     = $user->id;
        $d->save();

        return Redirect::back()->with(['success' => ' ']);
    }
    public function getInstitucion()
    {
        return view('institucion');
    }
    public function saveInstitucion(Request $request)
    {
        $user = new Instituto();
        $user->nombre    = $request->nombre;
        $user->telefono   = $request->telefono;
        $user->direccion   = $request->direccion;
        $user->email     = $request->email;
        $user->descripcion = $request->descripcion;
        $user->web         = $request->web;
        $user->save();


        return Redirect::back()->with(['success' => ' ']);
    }
    public function getCrearCurso()
    {
        $docentes = Tutor::join('users as u', 'tutors.user_id', '=', 'u.id')
            ->select('tutors.id', 'u.nombre', 'u.apellidos')
            //->where('tutors.id', '=', 'u.id')
            ->get();

        $institutos = Instituto::get();
        //dd($docentes);
        return view('crearCurso', compact('docentes', 'institutos'));
    }
    public function saveCurso(Request $request)
    {
        //\PHPExcel_Settings::setZipClass(\PHPExcel_Settings::PCLZIP);
        $this->subir = $request;
        //obtenemos el campo file definido en el formulario
        $file = $request->file('archivo');
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        $url = storage_path('app/').$nombre;
        $messages = [
            'mimes' => 'Solo se permiten Archivos Excel .xls, .xlsx',
        ];
        //dd(finfo_file(finfo_open(FILEINFO_MIME_TYPE), $file));
        $validator = Validator::make(
            [
                'file' => $file,
                'nombre' => $nombre
            ],
            [
                'file'  => 'required'
                //'file' => 'mimes:application/octet-stream,xls,xlsx'
            ],
            $messages);
        $message = 'f';
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        \Storage::disk('local')->put($nombre,  \File::get($file));
        Excel::load($url, function($reader) {

            $results = $reader->get();
            $curso = new Curso();
            $curso->titulo = $this->subir->nombre;
            $curso->descripcion = $results[2][1];
            $curso->url_video = $results[1][1];
            $curso->url_img = 'ex1.jpg';
            $curso->costo = 0;
            $curso->user_tutor = $this->subir->docente;
            $curso->inst_id    = $this->subir->inst;
            $curso -> save();
            for ($i = 0; $i < $this->subir->num_modulo; $i++)
            {
                $m = new Modulo();
                $m->nombre = $results[10][$i];
                $m->n_modulo = $i + 1;
                $m->n_cursos = $results[11][$i];
                $m->img_url =   'm1_1.jpg';
                $m->curso_id   = $curso->id;
                $m -> save();

                $num = 12;
                $n_n = $m->n_cursos;
                for($j = 0; $j < $n_n; $j++)
                {
                    $c = new Tema();
                    $c->nombre = $results[$num][$i];
                    $c->descripcion = $results[$num + $n_n][$i];
                    $c->numero = $i + 1;
                    $c->url_video = $results[$num + ($n_n * 2)][$i];
                    $c->modulo_id = $m->id;
                    $c->save();
                    $num = $num + 1;
                }

            }
            $t = new Test();
            $t->nombre = ' ';
            $t->n_preguntas = 10;
            $t->id_curso    = $curso->id;
            $t->save();
            for ($i = 1; $i <= 10; $i++)
            {
                $p = new Pregunta();
                $p->numero = $i;
                $p->pregunta = $results[4][$i-1];
                $p->correcto = $results[9][$i-1];
                $p->id_test = $t->id;
                $p->save();
                for ($j = 1; $j <= 4; $j++)
                {
                    $r = new Respuesta();
                    $r->numero = $j;
                    $r->respuesta = $results[4+$j][$i-1];
                    $r->id_pregunta = $p->id;
                    $r->id_test = $t->id;
                    $r->save();
                }
            }

        });

        //return $pdf->download('Reporte_Usuarios_'.$carbon->now(new \DateTimeZone('America/La_Paz'))->toDateTimeString().'.pdf');
        return Redirect::back()->with(['success' => ' ']);
        //dd($request);
    }
}
