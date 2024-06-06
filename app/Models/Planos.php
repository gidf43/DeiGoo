<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planos extends Model
{
    use HasFactory;

    protected $fillable =[
        'plano'
    ];

    public function Precos()
    {
        return $this->belongsTo(Precos::class, 'plano_id', 'id');
    }






}
