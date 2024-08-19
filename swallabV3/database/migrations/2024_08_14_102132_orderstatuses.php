<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     *
     */
    public function up()
    {
        Schema::create('orderstatuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status', 255);
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
        Schema::dropIfExists('orderstatuses');
    }
};

