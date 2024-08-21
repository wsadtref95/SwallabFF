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
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('sum_tracking')->nullable();
            $table->string('sum_fans')->nullable();
            $table->string('ig_link')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('threads_link')->nullable();
            $table->text('bio')->nullable();
            $table->string('created_at_date')->nullable();
            $table->string('created_at_time')->nullable();
            $table->string('updated_at_date')->nullable();
            $table->string('updated_at_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
