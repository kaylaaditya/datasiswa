<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nis", 100);
            $table->string("nama", 255);
            $table->string("jenis_kelamin", 100);
            $table->string("no_telepon", 100);
            $table->string("alamat", 255);
            $table->string("berat_badan", 25);
            $table->string("tinggi_badan", 25);
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
        Schema::dropIfExists('siswa');
    }
};
