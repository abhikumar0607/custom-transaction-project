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
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('refrence_number')->before('created_at')->nullable();
            $table->string('exporter_code')->before('created_at')->nullable();
            $table->string('clearing_agent')->before('created_at')->nullable();
            $table->string('clearing_agent_code')->before('created_at')->nullable();
            $table->string('direction')->before('created_at')->nullable();
            $table->string('status')->nullable()->default('draft');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            //
        });
    }
};
