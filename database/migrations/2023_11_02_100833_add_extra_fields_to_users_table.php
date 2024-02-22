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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('remember_token')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('business_name')->after('last_name')->nullable();
            $table->string('importer_code')->after('business_name')->nullable();
            $table->string('mobile')->after('importer_code')->nullable();
            $table->string('state')->after('mobile')->nullable();
            $table->string('country')->after('state')->nullable();
            $table->date('dob')->after('mobile')->nullable(); 
            $table->string('avatar')->default('default_user.png')->after('dob')->nullable();
            $table->enum('user_type', ['Admin','Customer'])->default('Customer')->after('avatar')->nullable();
            $table->enum('user_status', ['Pending','Active','Suspend'])->default('Pending')->after('user_type')->nullable();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
