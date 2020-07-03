<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
     protected $table = "tb_kategori"; 

      protected $primaryKey = 'kategori_id'; 

       protected $fillable = ['kategori_nama', 'kategori_text','created_at','updated_at']; 
}
