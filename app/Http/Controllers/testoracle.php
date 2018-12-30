<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\ConexionOracle;

class testoracle extends Controller
{
    public function test()
    {
		/* $oracle = \DB::connection('oracle');
		$doctores = $oracle->table('HOS_MEDICOS')->get(); */
		/*  $datos = DB::connection('oracle')
		->table('HOS_CONSEXT_VIEW')
		->join('HOS_DERECHOHAB', 'HOS_CONSEXT_VIEW.DERC_FICHA','=','HOS_DERECHOHAB.DERC_FICHA')
		->select('DERC_FICHA', 'DERC_CODIGO', 'COND_FECHCON', 'ESPS_ESPSERV',
		'MEDC_FICHA', 'CONN_HRCON', 'CONN_HRINICIO', 'CONN_HRFIN' )
		->whereDate('COND_FECHCON', '=', Carbon::now()->format('Y-m-d'))
		->where('DERC_FICHA', '=', 348958)
		->get();  */

/* 		"select
derc_ficha,
derc_codigo,
ders_empresa,
cens_clave,
deps_clave,
orgs_clave,
substr(DERD_FECNAC,1,10),
trunc((sysdate-DERD_FECNAC)/365.25),
derc_sexo,
derc_regcontrac,
derc_estcivil,
unis_unimed,
replace(replace(replace(fs_unidadmedica(unis_unimed),CHR(10),' '),CHR(13),' '),CHR(9),' '),
derd_vigencia,
replace(replace(replace(derc_nombre,CHR(10),' '),CHR(13),' '),CHR(9),' ')||' '||replace(replace(replace(derc_appaterno,CHR(10),' '),CHR(13),' '),CHR(9),' ')||' '||replace(replace(replace(derc_apmaterno,CHR(10),' '),CHR(13),' '),CHR(9),' ')
from hos_derechohab
where derc_ficha='"&FICOEM::FICHA&"'
and derc_codigo='"&FICOEM::CODIGO&"'
and ders_empresa='"&FICOEM::EMPRESA&"'" */

$datos = DB::connection('oracle')
		->table('hos_derechohab')
		->select('hos_derechohab.derc_ficha',
		 'hos_derechohab.derc_codigo',
		 'hos_derechohab.ders_empresa',
		 'hos_derechohab.derc_nombre',
		 'hos_derechohab.derc_appaterno',
		 'hos_derechohab.derc_apmaterno' )
		->where([
			['hos_derechohab.derc_ficha', '=', '460361'],
			['hos_derechohab.derc_codigo', '=', '08'],
			])
		->get();

		/*  $datos = DB::connection('oracle')
		->table('HOS_CITAS')
		->join('HOS_DERECHOHAB', 'HOS_CITAS.DERC_FICHA','=','HOS_DERECHOHAB.DERC_FICHA')
		->select('HOS_CITAS.DERC_FICHA', 'HOS_CITAS.DERC_CODIGO', 
		'HOS_DERECHOHAB.DERC_NOMBRE', 'HOS_DERECHOHAB.DERC_APPATERNO', 'HOS_CITAS.CITD_FECHCITA',
		'HOS_CITAS.MEDC_FICHA', 'HOS_CITAS.CITD_FECHCITA', 'HOS_CITAS.CITN_HRCITA')
		->whereDate('HOS_CITAS.CITD_FECHCITA', '=', Carbon::now()->format('Y-m-d'))
		->where([
			['HOS_CITAS.DERC_FICHA', '=', '460361'],
			['HOS_CITAS.DERC_CODIGO', '=', '08'],
			])
		->get(); */
		//->whereDate('HOS_CITAS.CITD_FECHCITA', '2018-09-24')
		/* ->whereColumn([
			['HOS_CITAS.DERC_FICHA', '=', 137544],
			['HOS_CITAS.DERC_CODIGO', '=', 00]
			])->get(); */
		

		 /* $datos = DB::connection('oracle')
		->table('HOS_MEDICOS')
		->select('MEDC_FICHA', 'MEDC_CODIGO', 'MEDC_NOMBRE')
		->where('MEDC_FICHA', '=', 486027)->get(); */
    	//$datos = DB::connection('oracle')->select('SELECT MEDC_FICHA, MEDC_CODIGO, MEDC_NOMBRE FROM HOS_MEDICOS WHERE MEDC_FICHA = 486027');
    	/*$datos = DB::select('SELECT HOSI_FOLIO, DERC_FICHA, DERC_CODIGO, ESPS_ESPSERV, MEDC_FICHA, COND_FECHCON, CONN_HRCON, CONN_HRINICIO, CONN_HRFIN FROM HOS_CONSEXT_VIEW')
    	->wheredate('COND_FECHCON', '=', Carbon::today()->todateString());*/
    	//var_dump($datos);
    	dd($datos);
    }
}
