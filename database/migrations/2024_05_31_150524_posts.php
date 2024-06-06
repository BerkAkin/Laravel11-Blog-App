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
        Schema::create('posts',function(Blueprint $table){
            $table->id();
            $table->integer('author_id');
            $table->string('title')->unique();
            $table->text('body');
            $table->string('slug')->unique();
            $table->boolean('active')->default(1);
            $table->string('photo');
            $table->enum('category',['Bilim','Donanım','Eğitim','İnternet','Mobil','Otomobil','Sektörel','Sinema ve Dizi','Uzay','Yaşam','Yiyecek','Sağlık'])->default('Yaşam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
