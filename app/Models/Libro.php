<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $primaryKey = 'id_libro';
    protected $fillable = ['titulo', 'autor', 'resumen', 'unidades', 'id_ed'];
    public $timestamps = false;

    public function editorial()
{
    return $this->belongsTo(Editorial::class, 'id_ed', 'id_ed');
}
}
