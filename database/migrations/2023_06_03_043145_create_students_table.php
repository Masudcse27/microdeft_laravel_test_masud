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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $tabel->string('name');
            $tabel->string('name');
            $tabel->date('dateOfBirth');
            $tabel->string('image');
            $tabel->integer('depart_id')->unsigned();
            $table->timestamps();
            $table->foreign('depart_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
