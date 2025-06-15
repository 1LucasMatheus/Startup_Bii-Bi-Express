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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category', ['delivery', 'pickup']);
            $table->enum('size_type', ['small', 'large']);
            $table->enum('fragile_type', ['fragile', 'not fragile']);
            $table->enum('status', ['accepted', 'delivered', 'pending']);
            $table->timestamps();
        });
    }
};
