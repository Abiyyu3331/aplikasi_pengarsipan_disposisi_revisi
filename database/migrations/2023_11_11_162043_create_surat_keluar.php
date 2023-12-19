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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->foreignId("no_surat")->references("no_surat")->on("disposisis");
            $table->integer("no_agenda");
            $table->string("jenis_surat");
            $table->date("tanggal_kirim");
            $table->string("pengirim");
            $table->string("perihal");
            $table->string("surat_keluar")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluars');
    }
};
