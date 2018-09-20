<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class testoracle extends Controller
{
    public function test()
    {
    	$datos = DB::select('SELECT MEDC_FICHA, MEDC_CODIGO, MEDC_NOMBRE FROM HOS_MEDICOS WHERE MEDC_FICHA = 486027');
    	/*$datos = DB::select('SELECT HOSI_FOLIO, DERC_FICHA, DERC_CODIGO, ESPS_ESPSERV, MEDC_FICHA, COND_FECHCON, CONN_HRCON, CONN_HRINICIO, CONN_HRFIN FROM HOS_CONSEXT_VIEW')
    	->wheredate('COND_FECHCON', '=', Carbon::today()->todateString());*/
    	//var_dump($datos);
    	dd($datos);
    }
}
