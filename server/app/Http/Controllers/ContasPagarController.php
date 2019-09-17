<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContasPagar;

class ContasPagarController extends Controller
{
  public function index() {
    return ContasPagar::all();
  }

  public function store(Request $request) {
    $contasPagar = new ContasPagar($request->all());
    $contasPagar->save();

    return response()->json($contasPagar->toArray(), 200);
  }

  public function show(ContasPagar $contasPagar) {
    return response()->json($contasPagar);
  }

  public function update(Request $request, ContasPagar $contasPagar) {
    $contasPagar->update($request->all());

    return response()->json($contasPagar, 200);
  }

  public function delete(ContasPagar $contasPagar) {
    $contasPagar->delete();

    return response('', 204);
  }
}
