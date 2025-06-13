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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('categoria', ['ADM', 'entregador', 'cliente comum']);
            $table->string('email')->unique();
            $table->string('senha');
            $table->integer('pedidos')->default(0);
            $table->integer('avaliacoes')->default(0);
            $table->timestamps();
        });
    }
};
