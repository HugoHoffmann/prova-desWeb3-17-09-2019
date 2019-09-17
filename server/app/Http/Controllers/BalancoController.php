<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContasPagar;
use App\ContasReceber;

class BalancoController extends Controller
{
  public function index() {
    $cR = \DB::table('contasReceber')
    ->where('status', '=', 'R')
    ->sum('valorrecebido');

    $cP = \DB::table('contasPagar')
    ->where('status', '=', 'P')
    ->sum('valorpago');
    
    $resultado = array(
      "saldo" => $cR - $cP
    );

    return response()->json($resultado, 200);
  }

}
