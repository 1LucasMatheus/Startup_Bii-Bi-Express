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
        Schema::create('deliverypeople', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('ratings')->default(0);
            $table->timestamps();
        });
    }
};
