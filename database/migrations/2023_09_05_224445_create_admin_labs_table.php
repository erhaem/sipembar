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
        Schema::create('admin_labs', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_head_admin')->default(false);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lab_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('lab_id')->references('id')->on('laboratories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_labs');
    }
};
