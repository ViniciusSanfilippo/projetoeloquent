<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    //não precisa
/*    public function livros()
    {
      return $this->hasMany(Livro::class);
    }*/

      protected $fillable = [
        'nome', 'email'
    ];

}
