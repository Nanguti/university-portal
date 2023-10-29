<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('batches', function (Blueprint $table) {
            $table->dateTime('start_date')->default('2023-01-01 00:00:00');
            $table->dateTime('end_date')->default('2023-12-31 23:59:59');
            $table->year('intake_year')->default(2023);
            $table->tinyInteger('intake_month')->default(1);
        });
    }

    public function down()
    {
        Schema::table('batches', function (Blueprint $table) {
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
            $table->dropColumn('intake_year');
            $table->dropColumn('intake_month');
        });
    }
};
