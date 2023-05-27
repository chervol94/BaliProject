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
        Schema::create('balisong_model_property', function (Blueprint $table) {
            $table->increments('balisong_model_property_id');
            $table->integer('overall_length')->nullable();
            $table->integer('handle_length')->nullable();
            $table->integer('blade_length')->nullable();
            $table->integer('extra_blade_length')->nullable();
            $table->integer('weight')->nullable();
            $table->string('handle_material')->nullable();
            $table->string('handle_secondary_material')->nullable();
            $table->string('blade_material')->nullable();
            $table->string('extra_blade_material')->nullable();

            $table->unsignedInteger('construction_system');
            $table->unsignedInteger('blade_shape')->nullable();
            $table->unsignedInteger('extra_blade_shape')->nullable();

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            
            $table->foreign('construction_system', 'fk_bamopr_cosyid_bamoprco')
                ->references('balisong_model_property_construction_id')
                ->on('balisong_model_property_construction');

            $table->foreign('blade_shape', 'fk_bamopr_blsh_bamoprblsh')
                ->references('balisong_model_property_blade_shape_id')
                ->on('balisong_model_property_blade_shape');

            $table->foreign('extra_blade_shape', 'fk_bamopr_exblsh_bamoprblsh')
                ->references('balisong_model_property_blade_shape_id')
                ->on('balisong_model_property_blade_shape');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balisong_model_property');
    }
};
