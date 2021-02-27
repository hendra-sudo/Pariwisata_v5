<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_wisata', function (Blueprint $table) {
            $table->increments('wisata_id');
            $table->integer('kategori')->unsigned();
            $table->text('url_video');
            $table->text('nama');
            $table->text('deskripsi');
            $table->text('wisata_tag');
            $table->string('htm_lokal',115);
            $table->string('htm_intl',115);
            $table->string('latitude',115);
            $table->string('longitude',115);
            $table->text('gambar');
            $table->timestamps();

            $table->foreign('kategori')->references('kategori_id')->on('m_kategori')->onDelete('restrict');

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
        Schema::table('m_wisata', function (Blueprint $table) {
            //
        });
    }
}
