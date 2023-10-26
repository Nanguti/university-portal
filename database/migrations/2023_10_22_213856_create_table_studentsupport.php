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
        
        Schema::create('studentsupport', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_name');
            $table->string('location');
            $table->string('contact_information');
            $table->timestamp('available_hours')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('studentsupport', function (Blueprint $table) {
            //
        });
    }
};
