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
        Schema::create('sorvetes', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // nome do produto final (ex: Casquinha 2 bolas)
            $table->foreignId('recipiente_id')->constrained('recipientes')->cascadeOnDelete();
            $table->decimal('preco', 8, 2); // preço final
            $table->timestamps();
        });

        Schema::create('sabor_sorvete', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sorvete_id')->constrained()->cascadeOnDelete();
            $table->foreignId('sabor_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sorvetes');
    }
};
