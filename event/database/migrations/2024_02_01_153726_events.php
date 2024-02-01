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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->forEignIdFor(\App\Models\User::class)->constrained()->restrictOnDelete();
            $table->foreignIdFor(\App\Models\events::class)->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('location_id');
            $table->date('event_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
