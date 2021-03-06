<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyecto';

    protected $fillable = [
        'nombreProyecto',
        'fechaInicio',
        'fechaFin',
        'estadoProyecto',
        'descripcion'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'proyecto_users');
    }

}
