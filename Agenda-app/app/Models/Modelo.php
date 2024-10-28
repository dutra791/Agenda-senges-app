<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{

    use HasFactory;
    

    //listar campos que o model vai trabalhar
    //serve tambem para criaçao em massa de dados

    protected $fillable = ['data','descriçao','inicio','final','contato','realizado']

}