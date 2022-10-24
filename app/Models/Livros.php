<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;
    protected $table = 'livros';
    protected $fillable = ['nome', 'autor', 'id_categoria'];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }
}
