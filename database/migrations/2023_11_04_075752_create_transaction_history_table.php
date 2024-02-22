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
        Schema::create('transaction_history', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transaction_id')->nullable();
            $table->string('total_duty')->nullable();
            $table->string('income_type')->nullable();
            $table->string('duty_rate')->nullable();
            $table->string('currency_rate')->nullable();
            $table->string('currency_type')->nullable();
            $table->string('cif_forigen_value')->nullable();
            $table->string('origin')->nullable();
            $table->string('goods_descriptions')->nullable();
            $table->string('hs_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_history');
    }
};
