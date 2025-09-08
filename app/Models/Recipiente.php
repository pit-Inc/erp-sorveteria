<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipiente extends Model
{
    protected $fillable = ['nome', 'custo', 'preco'];
}
