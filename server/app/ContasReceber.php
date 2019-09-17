<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContasReceber extends Model
{
    use \App\Traits\UsesUuid;
    protected $table = 'contasReceber';
    protected $fillable = [
      'nome','status', 'data', 'datarecebido', 'valor', 'valorrecebido'
    ];
}
