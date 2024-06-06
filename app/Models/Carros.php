<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
    use HasFactory;

    protected $Fillable = [
        'nome',
        'data',
        'acentos',
        'portas',
        'descricao',
        'imagem_carro',
        'preco_id'
    ];

    
    protected $guarded=[];

    public function preco()
    {
        return $this->belongsTo(Precos::class, 'preco_id');
    }
}
