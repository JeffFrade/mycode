<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $table = 'artigos';

    protected $fillable = [
        'titulo', 'link', 'id_usuario'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'id_usuario');
    }
}
