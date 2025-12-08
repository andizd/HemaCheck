<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('respondents', function (Blueprint $table){
            $table->id();
            $table->string('name')->nullable();
            $table->enum('gender', ['laki-laki','perempuan '])->nullable();
            $table->integer('age')->nullable();
            $table->string('occupation')->nullable();
            $table->string('education')->nullable();
            $table->decimal('weight',5,2)->nullable(); // kg
            $table->decimal('height',5,2)->nullable(); // cm
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respondents');
    }
};
