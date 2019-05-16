<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    protected $fillable = ['descricao', 'sigla', 'email', 'url', 'status'];
}
