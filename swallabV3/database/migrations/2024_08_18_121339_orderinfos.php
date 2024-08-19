<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *

     */
    public function up()
    {
        Schema::create('orderinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('m_id')->constrained('members')->onDelete('cascade');
            $table->foreignId('r_id')->constrained('restinfos')->onDelete('cascade');
            $table->foreignId('o_s_id')->constrained('orderstatuses')->onDelete('cascade');
            $table->boolean('utensils');
            $table->string('booking_date', 255);
            $table->string('booking_time', 255);
            $table->string('created_at_date', 255)->default('2024-08-17 07:59:08');
            $table->string('created_at_time', 255)->default('2024-08-17 07:59:08');
            $table->string('updated_at_date', 255)->nullable();
            $table->string('updated_at_time', 255)->nullable();
            $table->timestamps(0); // created_at and updated_at columns as timestamps, allowing NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     */
    public function down()
    {
        Schema::dropIfExists('orderinfos');
    }
};
