<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContasPagar extends Model
{
    use \App\Traits\UsesUuid;

    protected $table = 'contasPagar';
    protected $fillable = [
      'nome','status', 'data', 'datapagamento', 'valor', 'valorpago'
    ];
}
