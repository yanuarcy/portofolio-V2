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
            // drop column
            if (Schema::hasColumn('users', 'iframe_src')) {
                $table->dropColumn('iframe_src');
            }
            // add column
            if (!Schema::hasColumn('users', 'iframe_src')) {
                $table->text('iframe_src')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'iframe_src')) {
                $table->dropColumn('iframe_src');
            }
        });
    }
};
