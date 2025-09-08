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
        Schema::create('sabors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');        // Nome do sabor (ex: Chocolate, Morango, Baunilha)
            $table->text('descricao')->nullable(); // Descrição opcional
            $table->decimal('custo', 8, 2); // Custo de produção
            $table->decimal('preco', 8, 2); // Preço de venda
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sabors');
    }
};
