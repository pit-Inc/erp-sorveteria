<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sabor extends Model
{
    protected $fillable = ['nome', 'descricao', 'custo', 'preco'];
}
