<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('web_trafics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('web_id');
            $table->foreign('web_id')->references('id')->on('websites')->onDelete('cascade');
            $table->string('medium')->nullable();
            $table->string('language')->nullable();
            $table->string('sponsorship')->nullable();
            $table->string('ipaddress')->nullable();
            $table->string('dr')->nullable();
            $table->string('da')->nullable();
            $table->string('pa')->nullable();
            $table->string('cf')->nullable();
            $table->string('tf')->nullable();
            $table->string('credit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_trafics');
    }
};
