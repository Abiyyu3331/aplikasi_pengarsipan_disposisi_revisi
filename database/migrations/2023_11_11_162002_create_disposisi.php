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
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id("no_dispoisi");
            $table->foreignId("no_surat")->references("no_surat")->on("surat_masuks");
            $table->integer("no_agenda");
            $table->string("kepada");
            $table->string("keterangan");
            $table->string("status_surat");
            $table->string("tanggapan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disposisis');
    }
};
