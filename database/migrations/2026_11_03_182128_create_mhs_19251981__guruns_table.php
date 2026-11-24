<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mhs_19251981__guruns', function (Blueprint $table) {
            $table->id('id');
            $table->string('NIM');
            $table->string('Nama');
            $table->text('Alamat');
            $table->string('Jenis_Kelamin');
            $table->string('Agama');
            $table->string('Whatsapp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mhs_19251981__guruns');
    }
};
