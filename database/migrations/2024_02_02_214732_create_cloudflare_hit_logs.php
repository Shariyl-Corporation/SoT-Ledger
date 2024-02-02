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
        Schema::create('cloudflare_hit_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('mail_sender');
            $table->string('mail_subject');
            $table->string('mail_date');
            $table->string('subject')->nullable();
            $table->string('amount')->nullable();
            $table->string('pocket')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloudflare_hit_logs');
    }
};
