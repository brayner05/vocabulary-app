<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('lessons', function (Blueprint $table) {
            $table->string('lesson_id');
            $table->string('language_id');
            $table->integer('lesson_number', unsigned: true);
            $table->string('lesson_name');
            $table->timestamps();
            $table->primary('lesson_id');
            $table->unique('lession_number');
            $table->foreign('language_id')->references('language_id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('lessons');
    }
};
