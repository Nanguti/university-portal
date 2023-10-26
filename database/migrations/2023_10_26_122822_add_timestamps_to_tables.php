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
        Schema::table('announcements', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('library', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('assignments', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('campusnews', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('career', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('financialinformation', function (Blueprint $table) {
            $table->timestamps();
        }
        );
        Schema::table('todolists', function (Blueprint $table) {
            $table->timestamps();
        });

         Schema::table('studentsupport', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
};
