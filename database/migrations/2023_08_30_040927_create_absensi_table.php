<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->text('longitudeabsensi');
            $table->text('latitudeabsensi');
            $table->text('photo');
            $table->enum('status',['New','Approved','Di Tolak'])->default('New');
            $table->text('keterangan')->nullable();
            $table->unsignedBigInteger('id_siswa');
            $table->unsignedBigInteger('id_walikelas');
            $table->unsignedBigInteger('id_absesnsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
