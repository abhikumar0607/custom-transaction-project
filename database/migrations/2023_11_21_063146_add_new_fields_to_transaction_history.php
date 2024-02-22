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
        Schema::table('transaction_history', function (Blueprint $table) {
            $table->string('pkg_type')->nullable();
            $table->string('qty')->nullable();
            $table->string('cif_value_aed')->nullable();
            $table->string('status')->nullable()->default('draft');
            $table->string('is_group')->nullable()->default('no');
            $table->string('is_assest')->nullable()->default('no');
            $table->string('group_ref_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaction_history', function (Blueprint $table) {
            //
        });
    }
};
