<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContasReceber;

class ContasReceberController extends Controller
{
  public function index() {
    return ContasReceber::all();
  }

  public function store(Request $request) {
    $contasReceber = new ContasReceber($request->all());
    $contasReceber->save();

    return response()->json($contasReceber->toArray(), 200);
  }

  public function show(ContasReceber $contasReceber) {
    return response()->json($contasReceber);
  }

  public function update(Request $request, ContasReceber $contasReceber) {
    $contasReceber->update($request->all());

    return response()->json($contasReceber, 200);
  }

  public function delete(ContasReceber $contasReceber) {
    $contasReceber->delete();

    return response('', 204);
  }
}
