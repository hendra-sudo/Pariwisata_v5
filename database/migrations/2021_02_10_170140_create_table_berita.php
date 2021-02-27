<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_berita', function (Blueprint $table) {
            $table->increments('berita_id');
            // $table->integer('kategori');
            $table->text('berita_judul');
            $table->text('berita_deskripsi');
            $table->text('berita_tgl');
            $table->text('berita_autor');
            $table->string('berita_gambar',115);
            // $table->text('berita_tag');
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
        Schema::table('m_berita', function (Blueprint $table) {
            //
        });
    }
}
