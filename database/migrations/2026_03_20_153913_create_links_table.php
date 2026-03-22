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
        Schema::create('Links', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->string('url');                       
            $table->foreignId('categoria_id')->constrained('Categorias');
            $table->enum('status', ['draft', 'published', 'inactive'])->default('draft');
            $table->timestamps();
            // id, titulo, descripcion , url , categoria_id , status, timestamp
            // mal uso   - - > $table->foreign('categoria_id')->references('id')->on('categorias');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Links');
    }
};
