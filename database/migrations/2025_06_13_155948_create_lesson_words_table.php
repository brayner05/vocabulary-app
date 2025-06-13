<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('lesson_words', function (Blueprint $table) {
            $table->string('lesson_word_list_id');
            $table->string('lesson_id');
            $table->string('native_translation');
            $table->string('learner_translation');
            $table->timestamps();
            $table->primary('lesson_word_list_id');
            $table->foreign('lesson_id')->references('lesson_id')->on('lessons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('lesson_word_lists');
    }
};
