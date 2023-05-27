<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('balisong_model_property_construction', function (Blueprint $table) {
            $table->increments('balisong_model_property_construction_id');
            $table->string('name')->nullable(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balisong_model_property_construction');
    }
};
