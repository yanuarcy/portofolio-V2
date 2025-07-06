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
            $table->string('phone');
            $table->string('status');
            $table->string('city');
            $table->string('country');
            $table->string('birthdate');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('status');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('birthdate');
            $table->dropColumn('image');
        });
    }
};
