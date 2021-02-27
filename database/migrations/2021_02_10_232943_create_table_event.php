<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_event', function (Blueprint $table) {
            $table->increments('event_id');
            // $table->integer('kategori');
            $table->text('event_judul');
            $table->text('event_penyelenggara');
            $table->dateTime('event_tgl');
            $table->text('event_deskripsi');
            $table->text('event_tag');
            $table->string('event_gambar',115);

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
        Schema::table('m_event', function (Blueprint $table) {
            //
        });
    }
}
