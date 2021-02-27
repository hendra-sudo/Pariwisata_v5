<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePendapatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pendapatan', function (Blueprint $table) {
            $table->increments('pendapatan_id');
            // $table->integer('kategori');
            $table->string('tahun',65);
            $table->string('wst_lokal',65);
            $table->string('wst_intl',165);
            $table->text('pendapatan');
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
        Schema::table('m_pendapatan', function (Blueprint $table) {
            //
        });
    }
}
