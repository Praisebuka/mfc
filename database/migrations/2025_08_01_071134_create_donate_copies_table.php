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
        Schema::create('donate_copies', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('org_name')->nullable();
            $table->string('country');
            $table->integer('no_of_copies');
            $table->integer('amount');
            $table->string('reference');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donate_copies');
    }
};
