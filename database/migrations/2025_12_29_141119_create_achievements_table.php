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
    Schema::create('achievements', function (Blueprint $table) {
        $table->id();
        $table->string('count'); // نص ليقبل "100%" أو "24/7"
        $table->string('title'); // مثال: Satisfaction Client
        $table->string('icon')->nullable(); // اختياري
        $table->integer('order')->default(0); // لترتيب الظهور
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
