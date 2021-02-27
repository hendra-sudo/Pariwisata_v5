<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKontak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kontak', function (Blueprint $table) {
            $table->increments('kontak_id');
            // $table->integer('kategori');
            $table->string('latitude',65);
            $table->string('longitude',65);
            $table->text('kontak_deskripsi');
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_kontak', function (Blueprint $table) {
            //
        });
    }
}
