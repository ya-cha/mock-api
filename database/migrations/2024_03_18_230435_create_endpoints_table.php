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
        Schema::create('endpoints', function (Blueprint $table) {
            $table->id();
            $table->string('request_method');
            $table->string('request_uri');
            $table->unsignedSmallInteger('response_status_code');
            $table->json('response_headers');
            $table->text('response_body');
            $table->timestamps();

            $table->unique(['request_method', 'request_uri']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endpoints');
    }
};
