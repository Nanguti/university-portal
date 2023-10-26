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
      
        Schema::create('financialinformation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tuition_fee');
            $table->dateTime('due_date');
            $table->enum('payment_status', ['paid', 'pending', 'failed', 'refunded', 'partially_paid', 'cancelled', 'chargeback', 'onhold', 'processing']);
            $table->string('payment_method');
            $table->foreignId('student_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('financialinformation', function (Blueprint $table) {
            //
        });
    }
};
