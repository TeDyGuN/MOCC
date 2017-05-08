<?php
/**
 * Created by PhpStorm.
 * User: tedygun
 * Date: 08-05-17
 * Time: 01:52 AM
 */

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
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF;

class ReporteController extends Controller
{
    public function getReporteDocente()
    {
        $docentes = Tutor::join('users as u', 'u.id', 'user_id')
            ->get();
        $view =  \View::make('ReportesDocentes', compact('docentes'))->render();

        $pdf = \App::make('dompdf.wrapper'); //Note: in 0.6.x this will be 'dompdf.wrapper'
        $pdf->loadHTML($view)->setPaper('letter');
        $carbon = new Carbon();
        return $pdf->download('Reporte_Docentes_'.$carbon->now(new \DateTimeZone('America/La_Paz'))->toDateTimeString().'.pdf');
    }
    public function getReporteInstitucion()
    {
        $docentes = Instituto::get();
        $view =  \View::make('ReportesInstituto', compact('docentes'))->render();

        $pdf = \App::make('dompdf.wrapper'); //Note: in 0.6.x this will be 'dompdf.wrapper'
        $pdf->loadHTML($view)->setPaper('letter');
        $carbon = new Carbon();
        return $pdf->download('Reporte_Institutos_'.$carbon->now(new \DateTimeZone('America/La_Paz'))->toDateTimeString().'.pdf');
    }
    public function getReporteCurso()
    {
        $curso = Curso::join('tutors as t', 't.id', 'user_tutor')
            ->join('users as u', 'u.id', 't.user_id')
            ->join('institutos as i', 'i.id', 'inst_id')
            ->select('titulo', 'i.nombre as i_nombre', 'u.nombre as u_nombre', 'cursos.descripcion', 'u.apellidos as u_app')
            ->get();
        //dd($curso);
        $view =  \View::make('ReportesCurso', compact('curso'))->render();

        $pdf = \App::make('dompdf.wrapper'); //Note: in 0.6.x this will be 'dompdf.wrapper'
        $pdf->loadHTML($view)->setPaper('letter');
        $carbon = new Carbon();
        return $pdf->download('Reporte_Curso_'.$carbon->now(new \DateTimeZone('America/La_Paz'))->toDateTimeString().'.pdf');
    }
}