<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->string('nik');
            $table->string('klub');
            $table->string('umur');
            $table->string('tgl_rilis');
            $table->string('expired')->nullable();
            $table->string('kd_kota');
            $table->string('kd_gender');
            $table->string('kd_urutkota');
            $table->string('kd_kartu');
            $table->string('kota_kab')->nullable();
            $table->text('foto')->default('images/no-profile.webp');
            $table->text('kartu')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
