<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table='supplier';

    protected $fillable = ['nama','alamat','email','no_hp'];

public function material()
{

     return $this->belongsTo('App\Material', 'kode', 'id');

}    

}
