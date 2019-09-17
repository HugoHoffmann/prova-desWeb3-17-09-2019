<?php

use Illuminate\Http\Request;

  Route::get('/contasPagar', 'ContasPagarController@index');
  Route::get('/contasPagar/{contasPagar}', 'ContasPagarController@show');
  Route::post('/contasPagar', 'ContasPagarController@store');
  Route::patch('/contasPagar/{contasPagar}', 'ContasPagarController@update');
  Route::delete('/contasPagar/{contasPagar}', 'ContasPagarController@delete');


  Route::get('/contasReceber', 'ContasReceberController@index');
  Route::get('/contasReceber/{contasReceber}', 'ContasReceberController@show');
  Route::post('/contasReceber', 'ContasReceberController@store');
  Route::patch('/contasReceber/{contasReceber}', 'ContasReceberController@update');
  Route::delete('/contasReceber/{contasReceber}', 'ContasReceberController@delete');



  Route::get('/balanco', 'BalancoController@index');