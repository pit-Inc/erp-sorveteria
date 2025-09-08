<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sorvete extends Model
{
    protected $fillable = ['nome', 'recipiente_id', 'preco'];

    public function recipiente()
    {
        return $this->belongsTo(Recipiente::class);
    }

    public function sabores()
    {
        return $this->belongsToMany(Sabor::class, 'sabor_sorvete');
    }
}
