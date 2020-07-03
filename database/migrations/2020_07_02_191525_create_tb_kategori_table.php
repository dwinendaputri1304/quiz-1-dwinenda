<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKategoriTable extends Migration
{
    public function up()
    {
        Schema::create('tb_kategori', function (Blueprint $table) {
            $table->increments('kategori_id');
            $table->string('kategori_nama');
            $table->string('kategori_text');
            $table->date('created_at');
            $table->date('updated_at');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tb_kategori');
    }
}