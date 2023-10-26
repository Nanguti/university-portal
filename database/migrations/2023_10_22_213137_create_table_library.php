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
        Schema::create('library', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_title');
            $table->string('author');
            $table->integer('publication_year');
            $table->enum('availability', ['yes','no']);
            $table->text('digital_links')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('library', function (Blueprint $table) {
            //
        });
    }
};
