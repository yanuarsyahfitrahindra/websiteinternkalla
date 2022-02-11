<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasis', function (Blueprint $table) {
            $table->id('id_registrasi');
            $table->bigInteger('id_instansi')->unsigned();
            $table->bigInteger('id_sbu')->unsigned();
            $table->bigInteger('id_departemen')->unsigned();
            $table->string('nama',100);
            $table->string('nohp', 15)->nullable();
            $table->string('jurusan',100)->nullable();
            $table->bigInteger('id_jenis')->unsigned();
            // $table->bigInteger('id_status')->unsigned();
            // $table->string('status', 30);
            $table->date('startdate');
            $table->date('end_date');
            $table->string('durasi', 10);
            $table->timestamps();
        });

        Schema::table('registrasis', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id_instansi')->on('instansis')
            ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('registrasis', function (Blueprint $table) {
            $table->foreign('id_sbu')->references('id_sbu')->on('sbus')
            ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('registrasis', function (Blueprint $table) {
            $table->foreign('id_departemen')->references('id_departemen')->on('departemens')
            ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('registrasis', function (Blueprint $table) {
            $table->foreign('id_jenis')->references('id_jenis')->on('jenis')
            ->onDelete('cascade')->onUpdate('cascade');
        });

        // Schema::table('registrasis', function (Blueprint $table) {
        //     $table->foreign('id_status')->references('id_status')->on('status')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasis');
    }
}
