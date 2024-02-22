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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('port_type')->nullable();
            $table->string('dec_type')->nullable();
            $table->string('dec_date')->nullable();
            $table->string('dec_number')->nullable();
            $table->string('custom_declaration')->nullable();
            $table->string('declaration_number')->nullable();
            $table->string('net_weight')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('measurement')->nullable();
            $table->string('no_of_pages')->nullable();
            $table->string('marks_number')->nullable();
            $table->string('exporter')->nullable();
            $table->string('intercessor')->nullable();
            $table->string('commercial_reg_num')->nullable();
            $table->string('export_to')->nullable();
            $table->string('port_of_loading')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('destination')->nullable();
            $table->string('delevery_order_number')->nullable();
            $table->string('car_capt')->nullable();
            $table->string('carrier_name')->nullable();
            $table->string('voyage_no')->nullable();
            $table->string('manifast')->nullable();
            $table->string('transaction_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boe_transactions');
    }
};
