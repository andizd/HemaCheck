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
        Schema::create('screenings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('respondent_id')->constrained('respondents')->onDelete('cascade');
            // pertanyaan q1..q15
            for ($i = 1; $i <= 15; $i++) {
                $table->tinyInteger("q$i")->default(0);
            }
            $table->integer('total_score')->default(0);
            $table->enum('kategori', ['Rendah','Sedang','Tinggi'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('screenings');
    }
};
