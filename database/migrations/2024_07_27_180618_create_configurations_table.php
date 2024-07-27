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
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->enum("is_header", ["0", "1"]);
            $table->enum("is_slider", ["0", "1"]);
            $table->enum("is_service", ["0", "1"]);
            $table->enum("is_brand", ["0", "1"]);
            $table->enum("is_blog", ["0", "1"]);
            $table->enum("is_about", ["0", "1"]);
            $table->enum("is_contact_us", ["0", "1"]);
            $table->enum("is_footer", ["0", "1"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configurations');
    }
};
