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
        Schema::create('website_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('web_id');
            $table->foreign('web_id')->references('id')->on('websites')->onDelete('cascade');
            $table->unsignedBigInteger('catgy_id');
            $table->foreign('catgy_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_categories');
    }
};
