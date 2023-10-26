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
       
        Schema::create('todolists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('priority', ['Low', 'Normal', 'High']);
            $table->enum('status', ['Pending', 'Completed']);
            $table->foreignId('student_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('todolists', function (Blueprint $table) {
            //
        });
    }
};
