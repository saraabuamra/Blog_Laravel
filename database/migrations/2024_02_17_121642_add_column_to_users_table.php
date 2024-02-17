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
            $table->string('mobile');
            $table->string('qualification')->nullable();
            $table->string('experience')->nullable();
            $table->string('certificate')->nullable();
            $table->string('hobbies')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('mobile');
            $table->dropColumn('qualification');
            $table->dropColumn('experience');
            $table->dropColumn('certificate');
            $table->dropColumn('hobbies');
            
        });
    }
};
