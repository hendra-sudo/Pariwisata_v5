<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_about', function (Blueprint $table) {
            $table->increments('about_id');
            // $table->integer('kategori');
            $table->integer('id_admin',65)->nullable();
            $table->text('about_deskripsi');
            $table->text('status')->nullable();
            $table->string('about_gambar',115);
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
        Schema::table('m_about', function (Blueprint $table) {
            //
        });
    }
}
