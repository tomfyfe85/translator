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
        Schema::table('questions', function(Blueprint $table){
            $table->renameColumn('Question', 'question_text');
            $table->renameColumn('Answer', 'answer_text');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function(Blueprint $table){
            $table->renameColumn('question_text', 'Question');
            $table->renameColumn('answer_text', 'Answer');
        });
    }
};
