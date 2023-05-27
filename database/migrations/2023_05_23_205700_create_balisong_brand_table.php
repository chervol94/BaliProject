<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('balisong_brand', function (Blueprint $table) {
            $table->increments('brand_id');
            $table->string('name');
            $table->integer('year_creation');
            $table->string('logo');
            $table->string('country');
            $table->boolean('is_clone_maker');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balisong_brand');
    }
};
