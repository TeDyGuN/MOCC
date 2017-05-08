<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Documento;
use App\Modulo;
use App\Tema;
use App\Pregunta;
use App\Terminado;
use App\Respuesta;
use App\Tutor;
use App\Test;
use App\TTerminado;
use App\CTerminado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function getTestView($id)
    {
        $test = Test::where('id_curso', $id)
            ->get();
        $preguntas = Pregunta::where('id_test', $test[0]->id)
            ->get();

        $respuestas = Respuesta::where('id_test', $test[0]->id)
            ->get();
        $test_array = $this->getTestArray($test, $preguntas, $respuestas);
        //dd($test_array);
        //$test_json = json_encode($test_array);
        return view('test', compact('test_array'));
    }
    public function getTestArray($test, $preguntas, $respuestas)
    {
        $i = 0;
        $test_array = array(
            'id_test' => $test[0]->id,
            'id_curso'  => $test[0]->id_curso,
            'n_preguntas' => $test[0]->n_preguntas
        );
        foreach ($preguntas as $p)
        {
            $test_array[$p->numero] = array(
                'id'          => $p->id,
                'pregunta'    => $p->pregunta,
                'respuestas'  => array(
                    $respuestas[$i]->numero => array(
                        'respuesta'    => $respuestas[$i]->respuesta
                    ),
                    $respuestas[$i+1]->numero => array(
                        'respuesta'    => $respuestas[$i+1]->respuesta
                    ),
                    $respuestas[$i+2]->numero => array(
                        'respuesta'    => $respuestas[$i+2]->respuesta
                    ),
                    $respuestas[$i+3]->numero => array(
                        'respuesta'    => $respuestas[$i+3]->respuesta
                    )
                )
            );
            $i = $i + 4;
        }
        return $test_array;
    }
    public function SaveTest(Request $request)
    {
        $ppp = array();
        $aciertos = 0;
        $id = $request->id_test;
        $w = Pregunta::select('id')
            ->where('id_test', $id)
            ->first();
        $tt = $w->id;
        $preguntas = Pregunta::select('id', 'correcto')
            ->where('id_test', $id)
            ->get();
        foreach ($preguntas as $p) {
            $id_pregunta = $p->id;
            $aux = 'optionsRadios'.($id_pregunta-$tt+1);
            $respuesta = $request->$aux;
            if ($p->correcto == $respuesta) {
                $aciertos = $aciertos + 1;
            }
        }
        $nota = ($aciertos/$request->n_preguntas) * 100;
        //NEW Terminado
        $t_terminado = new TTerminado();
        $t_terminado->user_id = Auth::id();
        $t_terminado->id_test = $id;
        $t_terminado->nota = $nota;
        $t_terminado->lock = true;
        $t_terminado->id_curso = $request->id_curso;
        $t_terminado->save();

        $id_terminado = $t_terminado->id;
        //--------------
        if ($nota >= 51) {
            $c_terminado = new CTerminado();
            $c_terminado->user_id = Auth::id();
            $c_terminado->curso_id = $request->id_curso;
            $c_terminado->t_terminado_id = $id_terminado;
            $c_terminado->save();
            $mensaje = 'Aprobaste el Curso! Tuviste: '.$aciertos.' Aciertos de '.$request->n_preguntas.' Preguntas, Tu Nota fue de: '.$nota.'/100';
        }
        else {
            $mensaje = 'Reprobaste el Curso, Tuviste: '.$aciertos.' Aciertos de '.$request->n_preguntas.' Preguntas, Tu Nota fue de: '.$nota.'/100, Intentalo de Nuevo';
        }
        return redirect('/curso/'.$request['id_curso'])->with(['success' => $mensaje]);
    }

}
