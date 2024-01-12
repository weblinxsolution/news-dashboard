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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->longText('description')->nullable();
            $table->string('country')->nullable();
            $table->string('images_per_post')->nullable();
            $table->string('max_link')->nullable();
            $table->string('is_sponsored')->nullable();
            $table->string('is_publish_home')->nullable();
            $table->string('is_related_category')->nullable();
            $table->string('price')->nullable();
            $table->string('is_verified')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
