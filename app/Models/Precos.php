<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precos extends Model
{
    use HasFactory;

    protected $fillable = [
        'preco',
        'plano_id'
    ];

    protected $guarded = [];

            public function Carros()
        {
            return $this->belongsTo(Carros::class, 'preco_id', 'id');
        }

        public function Planos()
        {
            return $this->belongsTo(Planos::class, 'plano_id');
        }
}
