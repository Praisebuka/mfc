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
        Schema::create('newsletters', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('email')->unique();
            $table->timestamps();
        });

        Schema::create('invite_to_events', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('email');
            $table->string('event_name');
            $table->longText('event_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletters');
        Schema::dropIfExists('invite_to_events');
    }
};
