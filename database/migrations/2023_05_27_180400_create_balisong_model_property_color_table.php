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
        Schema::create('balisong_model_property_color', function (Blueprint $table) {
            $table->increments('balisong_model_property_color_id');
            $table->unsignedInteger('model_property_id');
            $table->string('blade_color')->nullable();
            $table->string('extra_blade_color')->nullable();
            $table->string('handle_color')->nullable();
            $table->string('handle_secondary_color')->nullable();
        
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        
            $table->foreign('model_property_id', 'fk_bamoprco_moprid_bamopro')
                ->references('balisong_model_property_id')
                ->on('balisong_model_property');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balisong_model_property_color');
    }
};
