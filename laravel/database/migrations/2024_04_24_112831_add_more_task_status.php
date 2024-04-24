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
        // REMOVED DEFAULT VALUE AND ADD MORE STATUSSES
        Schema::table('tasks', function (Blueprint $table) {
            $table->enum('status', ['to-do', 'in-progress', 'finished', 'in-review', 'pending'])->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // RESET STATUSES AS ITS ORIGINAL BASE STAT
        Schema::table('tasks', function (Blueprint $table) {
            $table->enum('status', ['to-do', 'in-progress', 'finished'])->default('to-do')->change();
        });
    }
};
