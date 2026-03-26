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
        
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('negocio_id')->constrained('negocios')->cascadeOnDelete();
            $table->foreignId('categoria_id')->constrained('categorias')->cascadeOnDelete();
            $table->string('name');
            $table->string('description');
            $table->decimal('price', 10, 2);
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};