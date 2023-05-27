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
        Schema::create('balisong_model', function (Blueprint $table) {
            $table->increments('balisong_model_id');
            $table->string('name');
            $table->integer('year_release')->nullable();
            $table->boolean('is_trainer');
            $table->boolean('is_live');
            $table->boolean('is_latchless');
            $table->boolean('is_discontinued');
            $table->string('images')->nullable();

            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('clones_balisong_model_id');
            $table->unsignedInteger('balisong_model_property_id');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        
            $table->foreign('brand_id', 'fk_bamo_brid_babr')
                ->references('brand_id')
                ->on('balisong_brand');

            $table->foreign('clones_balisong_model_id', 'fk_bamo_clbamoid_bamo')
                ->references('balisong_model_id')
                ->on('balisong_model');

            $table->foreign('balisong_model_property_id', 'fk_bamo_bamoprid_bamopr')
                ->references('balisong_model_property_id')
                ->on('balisong_model_property');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balisong_model');
    }
};
