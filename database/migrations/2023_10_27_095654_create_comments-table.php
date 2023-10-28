<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            // comments table
            $table->increments('id');
            // $table->unsignedBigInteger('posts_id');
            // $table->foreign('posts_id')->references('id')->on('posts')->cascadeOnDelete()->cascadeOnUpdate();
            //$table->foreignId('posts_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->longText('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
