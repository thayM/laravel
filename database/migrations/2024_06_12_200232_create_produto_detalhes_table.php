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
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->string('comprimento', 8, 2);
            $table->string('largura', 8, 2);
            $table->string('altura', 8, 2);
            $table->timestamps();

            
            $table->foreign('produto_id')->references('id')->on('produtos');
            // define relacionamento 1 para 1
            $table->unique('produto_id'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_detalhes');
    }
};
